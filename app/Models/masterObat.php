<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterObat extends Model
{
    use HasFactory;

    protected $table = 'master_obat';
    protected $fillable = [
        'nomor_registrasi',
        'nama_produk',
        'pendaftar',
        'tanggal_terbit',
        'kemasan',
        'alamat',
    ];
}
