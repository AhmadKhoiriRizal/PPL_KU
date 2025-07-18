<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // database/migrations/2025_07_18_000000_create_kegiatans_table.php
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('author'); // Nama penulis/pembuat kegiatan
            $table->string('judul'); // Judul kegiatan
            $table->text('deskripsi'); // Deskripsi lengkap kegiatan
            $table->string('foto'); // Path atau nama file foto kegiatan
            $table->string('lokasi'); // Lokasi kegiatan
            $table->string('kategori'); // Misalnya: Sosial, Lingkungan, Edukasi, dll.
            $table->date('tanggal'); // Tanggal kegiatan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
