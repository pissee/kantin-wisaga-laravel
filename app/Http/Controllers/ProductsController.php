<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    // Create product
    public function create()
    {
        return view('createproduct');
    }

    // List products
    public function products()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    // Read products
    public function halamanreadproduct()
    {
        $products = Product::all();
        return view('readproduct', compact('products'));
    }

    // Edit product
    public function edit($id)
    {
        $products = Product::find($id);

        if (!$products) {
            return redirect()->route('halamanreadproduct')->withErrors('Product not found.');
        }

        return view('editproduct', compact('products'));
    }

    // Update product
    public function update(Request $request, $id)
{
    $request->validate([
        'nama_makanan' => 'required|string|max:255',
        'stok' => 'required|integer',
        'harga' => 'required|numeric',
        'jenis_makanan' => 'required|string|max:255',
    ]);

    $product = Product::find($id);

    if (!$product) {
        return redirect()->route('halamanreadproduct')->withErrors('Product not found.');
    }

    $product->nama_makanan = $request->input('nama_makanan');
    $product->stok = $request->input('stok');
    $product->harga = $request->input('harga');
    $product->jenis_makanan = $request->input('jenis_makanan');
    $product->save();

    return redirect()->route('halamanreadproduct')->with('success', 'Product updated successfully.');
}

    // Destroy product
    public function destroyproduct($id)
    {
        $product = Product::find($id);

        if ($product)    {
            $product->delete();
            return redirect()->route('halamanreadproduct')->with('success', 'Product berhasil di hapus.');
        }

        return redirect()->route('halamanreadproduct')->withErrors('Product tidak ada.');
    }

    // Store new product
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
            'jenis_makanan' => 'required|string|max:255',
        ]);

        // Create new product
        $product = new Product;
        $product->nama_makanan = $request->input('nama_makanan');
        $product->stok = $request->input('stok');
        $product->harga = $request->input('harga');
        $product->jenis_makanan = $request->input('jenis_makanan');
        $product->save();

        // Redirect to the product creation page with success message
        return redirect()->route('createproduct')->with('success', 'Product created successfully.');
    }
}