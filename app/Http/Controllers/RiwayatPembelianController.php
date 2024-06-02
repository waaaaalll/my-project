<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class RiwayatPembelianController extends Controller
{
    public function index()
    {
        // Ambil semua transaksi dari database, urutkan berdasarkan tanggal pembelian
        $riwayat = Transaction::orderBy('tanggal_pembelian', 'desc')->get();

        // Kirim data transaksi ke view riwayat_pembelian.blade.php
        return view('riwayat-pembelian.index', compact('riwayat'));
    }
}