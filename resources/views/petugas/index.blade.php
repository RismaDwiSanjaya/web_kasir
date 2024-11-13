@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="text-center text-primary mb-4">Daftar Petugas</h2>

        <!-- Tombol Tambah Petugas -->
        <div class="mb-3 text-end">
            <a href="{{ route('petugas.create') }}" class="btn btn-success">
                <i class="fas fa-user-plus me-2"></i>Tambah Petugas
            </a>
        </div>

        <!-- Tabel Daftar Petugas -->
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($petugas as $petugasItem)
                            <tr>
                                <td>{{ $petugasItem->nama }}</td>
                                <td>{{ $petugasItem->email }}</td>
                                <td>{{ $petugasItem->telepon }}</td>
                                <td>{{ $petugasItem->alamat }}</td>
                                <td>
                                    <a href="{{ route('petugas.edit', $petugasItem->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('petugas.show', $petugasItem->id) }}" class="btn btn-info">
                                        <i class="fas fa-eye"></i> Lihat
                                    </a>
                                    <form action="{{ route('petugas.destroy', $petugasItem->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
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
