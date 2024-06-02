<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isEmpty;

class Quantity extends Model
{
    protected $fillable = ['nama_quantity'];
    protected $primaryKey = 'id';
     // Primary key di sini biar ke detect di form edit barang

    public function barang()
    {
        // return $this->hasMany(Barang::class, 'qty_id');
        return $this->hasMany(Barang::class, 'qty_id');
    }

    public function canBeDeleted()
    {
        return $this->barang->isEmpty();
    }

    
}