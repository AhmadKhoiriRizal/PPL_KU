<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AnggotaSaka;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Menampilkan halaman dashboard admin
    public function index()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $jumlahUsers = User::count();
            $jumlahAnggota = AnggotaSaka::count();
            $jumlahKegiatan = Kegiatan::count();
             return view('admin.dashboard', compact('jumlahUsers', 'jumlahAnggota', 'jumlahKegiatan'));
        }
        return redirect('/beranda')->with('error', 'Unauthorized access.');
    }

    // Menampilkan halaman pendaftaran
    public function pendaftaran()
    {
        $anggota = AnggotaSaka::all(); // lebih disarankan pakai model daripada DB::table
        return view('admin.page.datapendaftar', compact('anggota'));
    }

    // Menampilkan halaman kegiatan
    public function kegiatan()
    {
        $kegiatans = Kegiatan::latest()->get();
        return view('admin.page.kegiatan', compact('kegiatans'));
    }

    // Menampilkan halaman anggota
    public function anggota()
    {
        $anggota = AnggotaSaka::all(); // lebih disarankan pakai model daripada DB::table
        return view('admin.page.dataanggota', compact('anggota'));
    }

    // Menampilkan halaman cetak kartu
    public function cetakkartu()
    {
        return view('admin.page.cetakkartu');
    }

    // Menampilkan halaman cetak kartu
    public function profil()
    {
        $user = Auth::user();
        return view('admin.page.profil', compact('user'));
    }

    // Menampilkan halaman manajemen akun
    public function manajementakun()
    {
        $users = User::all();
        return view('admin.page.manajemen-akun', compact('users')); // Kirim data ke view);
    }
}
