<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Product;
use App\Models\Makanan;

class CheckoutController extends Controller
{


    public function index(Request $request)
    {
        $namaMakanan = $request->input('nama_makanan', '');
        $harga = $request->input('harga', 0); // Sesuaikan dengan tipe data harga

        return view('checkout', [
            'nama_makanan' => $namaMakanan,
            'harga' => $harga,
        ]);
        
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'email' => 'required|email',
            'jumlah' => 'required|integer|min:1',
            'metode_pembayaran' => 'required|string',
        ]);

        // Simpan data pembelian ke dalam database menggunakan model Pembelian
        Pembelian::create($validatedData);

        // Redirect atau response sesuai kebutuhan
        return redirect()->route('product')->with('success', 'Pembelian berhasil disimpan.');
    }

    public function prosesCheckout(Request $request)
    {
        // Validasi request sesuai kebutuhan Anda
        $request->validate([
            'nama_makanan' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'harga' => 'required|numeric|min:0',
        ]);

        // Ambil data dari request
        $namaMakanan = $request->input('nama_makanan');
        $quantity = $request->input('quantity');
        $harga = $request->input('harga');

        // Lakukan pengurangan stok makanan di database
        // Misalnya, menggunakan model Makanan
        $makanan = Makanan::where('nama', $namaMakanan)->first();
        
        if (!$makanan) {
            // Handle jika makanan tidak ditemukan
            return redirect()->back()->with('error', 'Makanan tidak ditemukan.');
        }

        // Kurangi stok berdasarkan quantity yang dibeli
        $makanan->stok -= $quantity;
        $makanan->save();

        // Redirect ke halaman terima kasih atau halaman konfirmasi
        return redirect()->route('terima.kasih')->with('success', 'Checkout berhasil. Stok makanan telah dikurangi.');
    }
}
