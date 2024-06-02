<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Controllers\BerhasilBeliController;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // return view('pembelian.index', [
        //     'barang' => Barang::latest()->find($id)
        // ]);
        
        $barang = Barang::find($id);

        if (!$barang) {
            return redirect()->back()->with('error', 'Barang tidak ditemukan.');
        }

        return view('pembelian.index', compact('barang'));
    }
    
    public function beli(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        // Ambil nilai input jumlah dari request
        $jumlah = $request->input('quantity');
    
        // Ambil stok barang dari input hidden
        $stok = $request->input('stock');
    
        // Melakukan pengecekan jika jumlah yang diminta melebihi stok yang tersedia
        if ($jumlah > $stok) {
            return back()->with('error', 'Jumlah pembelian melebihi stok barang yang tersedia');
        }

        
        
        // Lakukan pembelian dengan mengurangi stok sesuai dengan jumlah yang dibeli
        $barang->stock -= $jumlah;
        $barang->save();
        
        // Buat catatan transaksi baru
        // Memebuat catatan riwayat pembelian
        $transaction = new Transaction();
        $transaction->product_id = $barang->id;
        $transaction->tanggal_pembelian = now()->toDateString(); // Tanggal pembelian sekarang
        $transaction->total_harga = $barang->harga * $jumlah; // Total harga = harga barang x jumlah yang dibeli
        $transaction->jumlah_barang = $jumlah; // Menyimpan informasi jumlah barang yang dibeli
        $transaction->save();
    
    
        // return redirect()->route('pembelian.index', ['id' => $id])->with('success', 'Pembelian berhasil!');
        // return Redirect::action('BerhasilBeli@index')->with('success', 'Pembelian berhasil!');
        return Redirect::action([BerhasilBeliController::class, 'index'])->with('success', 'Pembelian berhasil!');
    }
}