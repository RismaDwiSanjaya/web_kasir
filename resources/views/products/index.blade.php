@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="text-center text-primary mb-4">Daftar Produk</h1>

        <!-- Tombol Tambah Produk -->
        <div class="mb-3 text-end">
            <a href="{{ route('products.create') }}" class="btn btn-success">
                <i class="fas fa-plus me-2"></i>Tambah Produk
            </a>
        </div>

        <!-- Daftar Produk -->
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Stok</th>
                            <th>Harga Jual</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->kode_produk }}</td>
                                <td>{{ $product->nama_produk }}</td>
                                <td>{{ $product->stok }}</td>
                                <td>Rp {{ number_format($product->harga_jual, 0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
