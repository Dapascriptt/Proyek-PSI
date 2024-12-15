<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $review = Review::all();
        return view('index', compact('review'));
    }

    public function katalog()
    {
        $produk = Produk::paginate('9');
        return view('katalog', compact('produk'));
    }

    public function katalog_detail(string $id)
    {
        $produk = Produk::findOrFail($id);
        return view('katalog-detail', compact('produk'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function pesananku()
    {
        $user_id = Auth::user()->id;
        $pesananku = Pesanan::where('user_id', $user_id)->get();
        return view('pesananku', compact('pesananku'));
    }

    public function buat_pesanan(string $id)
    {
        Pesanan::create([
            'user_id' => auth()->user()->id,
            'produk_id' => $id,
            'status_pemesanan' => 'Diproses',
        ]);

        return redirect()->away("https://wa.me/+6281283800498");
    }
}
