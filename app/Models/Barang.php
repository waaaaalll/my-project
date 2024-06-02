<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang'; // Sesuaikan dengan nama tabel yang kamu gunakan
    protected $fillable = ['nama_barang', 'img', 'stock', 'harga', 'qty_id', 'deskripsi'];

    public function quantity()
    {
        return $this->belongsTo(Quantity::class, 'qty_id');
    }

    // Relasi One-to-Many dengan model Transaction
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'product_id');
    }
}