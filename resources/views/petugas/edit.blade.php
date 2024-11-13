@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="text-center text-primary mb-4">Edit Petugas</h2>

        <!-- Form Edit Petugas -->
        <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Menampilkan pesan error -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ $petugas->nama }}" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $petugas->email }}" required>
            </div>

            <!-- Telepon -->
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" id="telepon" name="telepon" class="form-control" value="{{ $petugas->telepon }}" required>
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="4" required>{{ $petugas->alamat }}</textarea>
            </div>

            <!-- Tombol Submit -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </div>
        </form>
    </div>
@endsection
