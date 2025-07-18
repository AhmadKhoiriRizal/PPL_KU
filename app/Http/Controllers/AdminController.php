<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Menampilkan halaman dashboard admin
    public function index()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return view('admin.dashboard');
        }
        return redirect('/beranda')->with('error', 'Unauthorized access.');
    }

    // Menampilkan halaman pendaftaran
    public function pendaftaran()
    {
        return view('admin.page.pendaftaran');
    }

    // Menampilkan halaman kegiatan
    public function kegiatan()
    {
        return view('admin.page.kegiatan');
    }

    // Menampilkan halaman cetak kartu
    public function cetakkartu()
    {
        return view('admin.page.cetakkartu');
    }

    // Menampilkan halaman manajemen akun
    public function manajementakun()
    {
        $users = User::all();
        return view('admin.page.manajemen-akun', compact('users')); // Kirim data ke view);
    }
}
