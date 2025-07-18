<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::latest()->get(); // mengambil data terbaru
        return view('user.galeri', compact('kegiatans'));
    }

    // Simpan kegiatan baru
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string|max:100',
            'judul' => 'required|string|max:150',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'lokasi' => 'required|string|max:100',
            'kategori' => 'required|string|max:50',
            'tanggal' => 'required|date',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('kegiatan', 'public');
        }

        Kegiatan::create([
            'author' => $request->author,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
            'lokasi' => $request->lokasi,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->back()->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $request->validate([
            'author'    => 'required|string|max:100',
            'judul'     => 'required|string|max:150',
            'deskripsi' => 'required|string',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'lokasi'    => 'required|string|max:100',
            'kategori'  => 'required|string|max:50',
            'tanggal'   => 'required|date',
        ]);

        if ($request->hasFile('foto')) {
            if ($kegiatan->foto && Storage::disk('public')->exists($kegiatan->foto)) {
                Storage::disk('public')->delete($kegiatan->foto);
            }
            $kegiatan->foto = $request->file('foto')->store('kegiatan', 'public');
        }

        $kegiatan->author    = $request->author;
        $kegiatan->judul     = $request->judul;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->lokasi    = $request->lokasi;
        $kegiatan->kategori  = $request->kategori;
        $kegiatan->tanggal   = $request->tanggal;
        $kegiatan->save();

        return back()->with('success', 'Kegiatan berhasil diperbarui.');
    }

    // (Opsional) Hapus kegiatan
    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        // Hapus file foto jika ada
        if ($kegiatan->foto && Storage::disk('public')->exists($kegiatan->foto)) {
            Storage::disk('public')->delete($kegiatan->foto);
        }

        $kegiatan->delete();

        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus.');
    }
}
