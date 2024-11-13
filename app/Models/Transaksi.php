<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    // Menentukan nama tabel secara eksplisit
    protected $table = 'transaksi'; // Pastikan ini sesuai dengan nama tabel di database

    protected $fillable = ['total_belanja', 'dibayarkan'];

    public function details()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
