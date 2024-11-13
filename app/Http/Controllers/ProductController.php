<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Menampilkan semua produk
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Menampilkan halaman form tambah produk
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validasi input sebelum menyimpan produk
        $request->validate([
            'kode_produk' => 'required|unique:products',
            'nama_produk' => 'required',
            'stok' => 'required|integer',
            'harga_jual' => 'required|numeric|gt:0', // memastikan harga_jual lebih besar dari 0
        ]);

        // Menyimpan data produk
        Product::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'harga_jual' => $request->harga_jual,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Menampilkan halaman edit produk
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input sebelum memperbarui produk
        $request->validate([
            'kode_produk' => 'required|unique:products,kode_produk,' . $id,
            'nama_produk' => 'required',
            'stok' => 'required|integer',
            'harga_jual' => 'required|numeric|gt:0', // memastikan harga_jual lebih besar dari 0
        ]);

         // Menghapus simbol Rp dan memformat harga jual menjadi angka
    // $harga_jual = str_replace(['Rp', '.', ' '], '', $request->harga_jual);
    // $harga_jual = (float)$harga_jual; // Mengonversi menjadi float

        // Memperbarui produk
        $product = Product::findOrFail($id);
        $product->update([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'stok' => $request->stok,
            'harga_jual' => $request->harga_jual,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Menghapus produk
        Product::destroy($id);
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
