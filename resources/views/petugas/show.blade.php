@extends('layouts.app')

@section('content')
    <h2>Detail Petugas</h2>
    
    <div class="card">
        <div class="card-body">
            <h5>Nama: {{ $petugas->nama }}</h5>
            <p>Email: {{ $petugas->email }}</p>
            <p>Telepon: {{ $petugas->telepon }}</p>
            <p>Alamat: {{ $petugas->alamat }}</p>
            <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>
@endsection
