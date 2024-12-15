<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('admin.katalog.table', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.katalog.add-katalog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $filePath = $request->file('foto')->store('public/produk/images'); 

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $filePath,
        ]);

        return redirect()->route('produk-table');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.katalog.edit-katalog', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = Produk::findOrFail($id);
        $foto_lama = $produk->foto;

        $produk->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        if($request->hasFile('foto')) {
            Storage::delete($foto_lama);

            $foto_baru = $request->file('foto')->store('public/produk/images');

            $produk->foto = $foto_baru;
            $produk->save();
        }

        return redirect()->route('produk-table');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);

        Storage::delete($produk->foto);

        $produk->delete();

        return redirect()->route('produk-table');
    }
}
