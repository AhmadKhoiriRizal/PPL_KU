<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    // Jika nama tabel mengikuti format jamak dari nama model (kegiatans), ini tidak wajib:
    protected $table = 'kegiatans';

    // Mass assignment protection — daftar kolom yang bisa diisi
    protected $fillable = [
        'author',
        'judul',
        'deskripsi',
        'foto',
        'lokasi',
        'kategori',
        'tanggal',
    ];
}
