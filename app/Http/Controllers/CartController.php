<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Cart;
use App\Models\Product;


class CartController extends Controller
{
    public function index()
    {
        // Kembalikan view untuk halaman keranjang
        return view('keranjang');
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:makanan,id',
            'jumlah_makanan' => 'required|integer|min:1'
        ]);
        $product = Product::findOrFail($request->id);
        if ($product->jumlah_makanan < $request->jumlah_makanan) {
            return response()->json(['error' => 'Stok tidak mencukupi'], 400);
        }
        // Ambil data barang dari request
        $id_makanan = $request->input('id');
        $jumlah_makanan = $request->input('jumlah_makanan');

        cart::create([
            'id_makanan' => $id_makanan,
            'jumlah_makanan' => $jumlah_makanan,
            'status_barang' => 'belum_checkout', // Set status barang sebagai belum checkout
        ]);
    
        Log::info('Barang berhasil ditambahkan ke keranjang', ['id_makanan' => $id_makanan, 'jumlah_makanan' => $jumlah_makanan]);
    
        // Return response JSON
        return response()->json(['success' => 'Barang berhasil ditambahkan ke keranjang!']);
    }
    }
