<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin');
            } elseif (Auth::user()->role == 'pengguna') {
                return redirect()->intended('/');
            }
        }
    }

    public function register_page()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'role' => 'pengguna',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect(url('/login'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
