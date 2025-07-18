<?php

// app/Http/Controllers/PendaftaranController.php
namespace App\Http\Controllers;

use App\Models\AnggotaSaka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PendaftaranController extends Controller
{
    // Pendaftaran pada bagian user
    public function index()
    {
        return view('user.form.pendaftaran-saka');
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

        return redirect()->route('pendaftaran.success', ['id' => $anggota->id])
            ->with('success', 'Pendaftaran berhasil!');
    }

    public function success($id)
    {
        $anggota = AnggotaSaka::findOrFail($id);
        return view('user.form.pendaftaran-sukses', compact('anggota'));
    }


    // Menampilkan semua data pendafatarn pada bagian admin
    // Manajement data pendaftar for admin
    public function update(Request $request, $id)
    {
        $anggota = AnggotaSaka::findOrFail($id);

        // Validasi semua input
        $validated = $request->validate([
            // Data pribadi
            'nama_lengkap'      => 'required|string|max:255',
            'tempat_lahir'      => 'required|string|max:255',
            'tanggal_lahir'     => 'required|date',
            'jenis_kelamin'     => 'required|in:L,P',
            'alamat'            => 'required|string',
            'no_hp'             => 'required|string|max:15',
            'email'             => 'required|email|max:255',

            // Data sekolah
            'sekolah'           => 'required|string|max:255',

            // Data orang tua
            'nama_ortu'         => 'required|string|max:255',
            'pekerjaan_ortu'    => 'required|string|max:255',

            // Data tambahan
            'hobi'              => 'nullable|string|max:255',
            'tinggi_badan'      => 'required|numeric|min:1|max:300',
            'berat_badan'       => 'required|numeric|min:1|max:300',
            'golongan_darah'    => 'required|in:A,B,AB,O',
            'status'            => 'required|in:aktif,nonaktif',

            // Upload file (optional saat update)
            'foto'              => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'file_pernyataan'   => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        // Upload foto baru jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($anggota->foto && Storage::exists(str_replace('storage/', 'public/', $anggota->foto))) {
                Storage::delete(str_replace('storage/', 'public/', $anggota->foto));
            }

            $fotoPath = $request->file('foto')->store('public/foto_profil');
            $validated['foto'] = str_replace('public/', 'storage/', $fotoPath);
        }

        // Upload file pernyataan baru jika ada
        if ($request->hasFile('file_pernyataan')) {
            // Hapus file lama jika ada
            if ($anggota->file_pernyataan && Storage::exists(str_replace('storage/', 'public/', $anggota->file_pernyataan))) {
                Storage::delete(str_replace('storage/', 'public/', $anggota->file_pernyataan));
            }

            $filePath = $request->file('file_pernyataan')->store('public/file_pernyataan');
            $validated['file_pernyataan'] = str_replace('public/', 'storage/', $filePath);
        }

        // Update data ke database
        $anggota->update($validated);

        return redirect()->route('admin.datapendaftar')->with('success', 'Data berhasil diperbarui.');
    }

    public function show($id)
    {
        $anggota = AnggotaSaka::findOrFail($id);
        return view('admin.pendaftaran.show', compact('anggota'));
    }

    public function destroy($id)
    {
        $anggota = AnggotaSaka::findOrFail($id);
        $anggota->delete();

        return redirect()->route('admin.datapendaftar')->with('success', 'Data berhasil dihapus.');
    }

}
