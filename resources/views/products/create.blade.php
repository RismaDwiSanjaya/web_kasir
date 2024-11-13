@extends('layouts.app')

@section('content')
    <h1>Tambah Produk</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_produk">Kode Produk</label>
            <input type="text" class="form-control" name="kode_produk" required>
        </div>
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" name="stok" required>
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" step="0.01" class="form-control" name="harga_jual" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>
@endsection
