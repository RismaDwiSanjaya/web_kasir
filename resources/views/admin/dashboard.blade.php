@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')
    <div class="dashboard-content">
        <h2>Selamat Datang di Dashboard</h2>
        
        @if(Auth::user()->role === 'admin')
            <p>Selamat, kamu login sebagai Admin. Kamu memiliki akses penuh untuk mengelola data di aplikasi ini.</p>
        @elseif(Auth::user()->role === 'pimpinan')
            <p>Selamat, kamu login sebagai Pimpinan. Kamu dapat melihat laporan dan melakukan pengecekan terhadap data.</p>
        @elseif(Auth::user()->role === 'petugas')
            <p>Selamat, kamu login sebagai Petugas. Kamu dapat mengelola data pelanggan dan transaksi.</p>
        @else
            <p>Selamat Datang! Anda tidak memiliki peran yang terdefinisi.</p>
        @endif

        <p>Gunakan menu di samping untuk navigasi.</p>
    </div>
@endsection
