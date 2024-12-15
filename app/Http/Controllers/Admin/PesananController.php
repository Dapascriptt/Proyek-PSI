<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('admin.table-pesanan', compact('pesanan'));
    }

    public function update(Request $request, string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update([
            'status_pemesanan' => $request->status_pemesanan,
        ]);

        return redirect()->back()->with('success', 'Status pemesanan berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->delete();

        return redirect()->back()->with('success', 'Pesanan berhasil dihapus.');
    }
}
