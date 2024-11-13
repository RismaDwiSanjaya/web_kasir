@extends('layouts.app')

@section('content')
    <h1>Edit Produk</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_produk">Kode Produk</label>
            <input type="text" class="form-control" name="kode_produk" value="{{ $product->kode_produk }}" required>
        </div>
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" value="{{ $product->nama_produk }}" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" name="stok" value="{{ $product->stok }}" required>
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" step="0.01" class="form-control" name="harga_jual" value="{{ $product->harga_jual }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>
@endsection
