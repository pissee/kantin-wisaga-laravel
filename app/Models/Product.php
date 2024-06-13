<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Jika nama tabel tidak sesuai dengan konvensi (jamak dari nama model), Anda bisa menentukannya di sini
    protected $table = 'products';

    // Menentukan kolom yang bisa diisi secara massal
    protected $fillable = [ 'nama_makanan', 'jenis_makanan', 'stok', 'harga'];

    // Jika Anda ingin menggunakan kolom timestamps di tabel, pastikan ini diatur ke true
    public $timestamps = true;
}