@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="text-center text-primary mb-4">Metode Pembayaran</h1>

        <!-- Tombol Tambah Metode Pembayaran -->
        <div class="mb-3 text-end">
            <a href="{{ route('payment_methods.create') }}" class="btn btn-success">
                <i class="fas fa-credit-card me-2"></i>Tambah Metode Pembayaran
            </a>
        </div>

        <!-- Daftar Metode Pembayaran -->
        <div class="card shadow-sm">
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($paymentMethods as $paymentMethod)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>{{ $paymentMethod->name }}</strong> 
                                <span class="text-muted">({{ $paymentMethod->type }})</span>
                            </div>
                            <div>
                                <a href="{{ route('payment_methods.edit', $paymentMethod->id) }}" class="btn btn-warning btn-sm ms-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('payment_methods.destroy', $paymentMethod->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm ms-2">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
