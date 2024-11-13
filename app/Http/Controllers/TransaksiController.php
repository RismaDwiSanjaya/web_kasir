<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Models\Product;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('details.product')->get();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $products = Product::all();

        // Set default qty for each product
        foreach ($products as $product) {
            $product->qty = 1; // Default qty = 1
        }
        $qty = request('qty', 1); // Default qty = 1 or from request
        $produk_id = request('produk_id');
        $p_detail = Product::find($produk_id);

        return view('transaksi.create', compact('products', 'p_detail', 'qty'));
    }

    public function store(Request $request)
    {
        DetailTransaksi::create([
            'transaksi_id' => $request->transaksi_id,
            'product_id' => $request->produk_id,
            'qty' => $request->qty,
            'harga_satuan' => $request->harga_satuan,
            'subtotal' => $request->subtotal,
        ]);
    }

    public function show($id)
    {
        $transaksi = Transaksi::with('details.product')->findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }
}
