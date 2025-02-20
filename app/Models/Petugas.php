<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas'; // Pastikan tabel sudah benar

    // Tambahkan kolom yang diizinkan untuk mass assignment
    protected $fillable = [
        'nama', 
        'email', 
        'telepon', 
        'alamat',
    ];
}
