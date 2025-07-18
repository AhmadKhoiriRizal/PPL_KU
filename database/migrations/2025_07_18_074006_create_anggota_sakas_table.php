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
        // database/migrations/2023_01_01_create_anggota_sakas_table.php
        Schema::create('anggota_sakas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->text('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('sekolah');
            $table->string('nama_ortu');
            $table->string('pekerjaan_ortu');
            $table->text('hobi')->nullable();
            $table->decimal('tinggi_badan', 5, 2);
            $table->decimal('berat_badan', 5, 2);
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O']);
            $table->string('foto');
            $table->string('file_pernyataan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_sakas');
    }
};
