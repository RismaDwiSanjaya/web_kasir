@extends('layouts.app')

@section('content')
    <h2>Tambah Petugas</h2>
    <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input class="form-control" type="text" name="nama" required>
        
        <label>Email:</label>
        <input class="form-control" type="email" name="email" required>
        
        <label>Telepon:</label>
        <input class="form-control" type="text" name="telepon" required>
        
        <label>Alamat:</label>
        <input class="form-control" type="text" name="alamat" required>
        
        <button type="submit">Simpan</button>
    </form>
@endsection
