<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi melalui mass assignment
    protected $fillable = ['kode_produk', 'nama_produk', 'stok', 'harga_jual'];
}
