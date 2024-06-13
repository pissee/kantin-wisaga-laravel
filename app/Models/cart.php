<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['id_makanan', 'nama_makanan', 'jenis_makanan', 'stok', 'harga'];

    // Relasi antara Cart dan Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
