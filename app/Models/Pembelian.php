<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelians'; // Sesuaikan dengan nama tabel di database jika tidak mengikuti konvensi Laravel

    protected $fillable = [
        'nama', 'alamat', 'email', 'jumlah', 'metode_pembayaran',
    ];
}
