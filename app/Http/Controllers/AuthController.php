<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login-register');
    }

    public function showRegisterForm()
    {
        return view('login-register'); // Menggunakan tampilan yang sama
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user', // Set role ke user
            ]);
            // Menambahkan flash message untuk sukses
            return redirect()->route('login')->with('success', 'Akun Anda telah berhasil dibuat. Silakan login.');
        } catch (\Exception $e) {
            // Menambahkan flash message untuk gagal
            return redirect()->back()->withErrors(['register' => 'Terjadi kesalahan saat membuat akun. Silakan coba lagi.']);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Arahkan berdasarkan role
            switch ($user->role) {
                case 'admin':
                    return redirect()->intended('/admin/dashboard');
                case 'user':
                    return redirect()->intended('/pendaftaran-saka');
                default:
                    Auth::logout(); // Logout jika rolenya tidak dikenali
                    return redirect()->route('login')->withErrors([
                        'role' => 'Role pengguna tidak dikenali.',
                    ]);
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/beranda');
    }
}

