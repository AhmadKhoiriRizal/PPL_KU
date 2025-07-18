<?php

// app/Http/Controllers/PendaftaranController.php
namespace App\Http\Controllers;

use App\Models\AnggotaSaka;
use Illuminate\Http\Request;
class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // data pribadi
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'email' => 'required|email',

            // data sekolah
            'sekolah' => 'required|string|max:255',

            // data orang tua
            'nama_ortu' => 'required|string|max:255',
            'pekerjaan_ortu' => 'required|string|max:255',

            // data tambahan
            'hobi' => 'nullable|string',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'golongan_darah' => 'required|in:A,B,AB,O',

            // upload files
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file_pernyataan' => 'required|file|mimes:pdf,doc,docx|max:5120'
        ]);

        // Handle file uploads
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto_profil');
            $validated['foto'] = str_replace('public/', 'storage/', $fotoPath);
        }

        if ($request->hasFile('file_pernyataan')) {
            $pernyataanPath = $request->file('file_pernyataan')->store('public/file_pernyataan');
            $validated['file_pernyataan'] = str_replace('public/', 'storage/', $pernyataanPath);
        }

        // Simpan ke database
        $anggota = AnggotaSaka::create($validated);

        return redirect()->route('pendaftaran.success')
                         ->with('success', 'Pendaftaran berhasil!')
                         ->with('anggota', $anggota);
    }

    public function success()
    {
        return view('pendaftaran.success');
    }
}
