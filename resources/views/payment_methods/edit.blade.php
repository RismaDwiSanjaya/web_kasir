@extends('layouts.app')

@section('content')
    <h1>Edit Metode Pembayaran</h1>
    <form action="{{ route('payment_methods.update', $paymentMethod->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Pembayaran</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $paymentMethod->name }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Jenis Pembayaran</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $paymentMethod->type }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
