<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/AnggotaSaka.php
class AnggotaSaka extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'email',
        'jabatan',          // ✅ ditambahkan
        'status',           // ✅ ditambahkan
        'masa_jabatan_mulai',     // ✅ ditambahkan
        'masa_jabatan_selesai',     // ✅ ditambahkan
        'sekolah',
        'nama_ortu',
        'pekerjaan_ortu',
        'hobi',
        'tinggi_badan',
        'berat_badan',
        'golongan_darah',
        'foto',
        'file_pernyataan'
    ];
}
