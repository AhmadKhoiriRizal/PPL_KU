<?php

namespace App\Http\Controllers;

use App\Models\AnggotaSaka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    public function update(Request $request, $id)
    {
        $anggota = AnggotaSaka::findOrFail($id);

        // Validasi semua input
        $validated = $request->validate([
            // Data pribadi Anggota
            'foto'              => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'nama_lengkap'      => 'required|string|max:255',
            'jabatan'      => 'required|string|max:255',
            'masa_jabatan_mulai'     => 'required|date',
            'masa_jabatan_selesai'     => 'required|date',
            'status'            => 'required|in:aktif,nonaktif',
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

        // Update data ke database
        $anggota->update($validated);

        return redirect()->route('admin.anggota')->with('success', 'Data berhasil diperbarui.');
    }

    // public function show($id)
    // {
    //     $anggota = AnggotaSaka::findOrFail($id);
    //     return view('admin.pendaftaran.show', compact('anggota'));
    // }

    public function destroy($id)
    {
        $anggota = AnggotaSaka::findOrFail($id);
        $anggota->delete();

        return redirect()->route('admin.anggota')->with('success', 'Data berhasil dihapus.');
    }

    // Struktur Organisasi
    public function organisasi()
    {
        $anggota = AnggotaSaka::all(); // lebih disarankan pakai model daripada DB::table
        return view('user.organisasi', compact('anggota'));
    }
}
