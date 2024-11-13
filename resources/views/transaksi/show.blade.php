@extends('layouts.app')

@section('content')
    <h3>Detail Transaksi</h3>
    <p>Total Belanja: Rp {{ number_format($transaksi->total_belanja, 0, ',', '.') }}</p>
    <p>Dibayarkan: Rp {{ number_format($transaksi->dibayarkan, 0, ',', '.') }}</p>

    <h4>Detail Produk</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Qty</th>
                <th>Harga Satuan</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi->details as $detail)
                <tr>
                    <td>{{ $detail->product->name }}</td>
                    <td>{{ $detail->qty }}</td>
                    <td>Rp {{ number_format($detail->harga_satuan, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($detail->subtotal, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
