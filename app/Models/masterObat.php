<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterObat extends Model
{
    use HasFactory;

    protected $table = 'master_obat';
    protected $fillable = [
        'kode_bpom',
        'kode_obat',
        'nama_obat',
        'tanggal_terbit',
        'jenis_kemasan',
        'golongan_obat',
        'kategori_obat',
        'pabrik',
        'alamat',
    ];
}
