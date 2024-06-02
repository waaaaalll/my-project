<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions'; // Sesuaikan dengan nama tabel yang kamu gunakan
    protected $fillable = ['tanggal_pembelian', 'total_harga', 'product_id', 'jumlah_barang',];

    
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'product_id');
    }
}