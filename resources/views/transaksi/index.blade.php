@extends('layouts.app')

@section('content')
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Total Belanja</th>
                <th>Dibayarkan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>Rp {{ number_format($t->total_belanja, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($t->dibayarkan, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('transaksi.show', $t->id) }}" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
