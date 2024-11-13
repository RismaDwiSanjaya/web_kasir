@extends('layouts.app')

@section('content')
    <h1>Tambah Metode Pembayaran</h1>
    <form action="{{ route('payment_methods.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Pembayaran</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Pilih Kategori Pembayaran</label>
            <select name="type" id="type" class="form-select" required>  
                <option value="" disabled selected>Pilih kategori</option>
                <option value="bri">BRI</option>
                <option value="dana">Dana</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
