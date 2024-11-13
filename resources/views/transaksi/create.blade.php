<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row p-2">
        <!-- Kolom Kiri - Pemilihan Produk -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('transaksi.create') }}" method="GET">
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="produk_id">Kode Produk</label>
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex">
                                    <select name="produk_id" id="produk_id" class="form-control">
                                        @foreach ($products as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('transaksi.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="transaksi_id" value="1">
                        <input type="hidden" name="produk_id" value="{{ request('produk_id') }}">
                        <input type="hidden" name="harga_satuan" value="{{ isset($p_detail) ? $p_detail->harga_jual : '' }}">

                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="nama_produk">Nama Produk</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" disabled value="{{ isset($p_detail) ? $p_detail->nama_produk : '' }}" class="form-control" name="nama_produk">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="harga_satuan">Harga Satuan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" disabled value="{{ isset($p_detail) ? $p_detail->harga_jual : '' }}" class="form-control" name="harga_satuan">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="qty">QTY</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" value="{{ $qty }}" class="form-control" name="qty" id="qty" min="1">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 offset-md-4">
                                <h5>Sub Total: Rp{{ isset($p_detail) ? $p_detail->harga_jual * $qty : 0 }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 offset-md-4">
                                <a href="{{ route('transaksi.index') }}" class="btn btn-info">Kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan - Tabel Transaksi -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>QTY</th>
                                <th>Subtotal</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Konten Dinamis Ditambahkan Di Sini -->
                        </tbody>
                    </table>
                    <a href="/admin/detail/selesai" class="btn btn-success">Selesai</a>
                    <a href="" class="btn btn-info">Pending</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Kalkulasi Total -->
    <div class="row p-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <label for="total_belanja">Total Belanja</label>
                    <input type="text" disabled value="" name="total_belanja" class="form-control" id="total_belanja">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
