<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManajementAkunController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KegiatanControllerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'user.dashboard')->name('beranda');;
Route::view('/beranda', 'user.dashboard')->name('beranda');;

// Page beranda
$pages = ['sejarah','materi','pendaftaran', 'kontak'];

foreach ($pages as $page) {
    Route::view("/$page", "user.$page")->name($page);
}

// galeri
Route::get('/galeri', [KegiatanController::class, 'index'])->name('galeri');


// Form login/register
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');

// Proses login/register
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/pendaftaran-saka', [PendaftaranController::class, 'Index'])->name('pendaftaran.form');
    Route::post('/pendaftaran-saka', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
    Route::get('pendaftaran-saka/success/{id}', [PendaftaranController::class, 'success'])->name('pendaftaran.success');
});

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'Index'])->name('admin.dashboard');
    Route::get('/admin/pendaftaran', [AdminController::class, 'pendaftaran'])->name('admin.datapendaftar');
    Route::get('/admin/kegiatan', [AdminController::class, 'kegiatan'])->name('admin.kegiatan');
    Route::get('/admin/anggota', [AdminController::class, 'anggota'])->name('admin.anggota');
    Route::get('/admin/cetak-kartu', [AdminController::class, 'cetakkartu'])->name('admin.cetak-kartu');
    Route::get('/admin/manajemen-akun', [AdminController::class, 'manajementakun'])->name('admin.manajemen-akun');
    Route::get('/admin/profil', [AdminController::class, 'profil'])->name('admin.profil');

    // Manajement Data Anggota Controller
    Route::put('/admin/anggota/{id}', [AnggotaController::class, 'update'])->name('admin.anggota.update');
    // Route::get('/admin/pendaftaran/{id}', [PendaftaranController::class, 'show'])->name('admin.pendaftaran.show');
    Route::delete('/admin/anggota/{id}', [AnggotaController::class, 'destroy'])->name('admin.anggota.destroy');

    // Manajement Pendaftaran Controller
    Route::put('/admin/pendaftaran/{id}', [PendaftaranController::class, 'update'])->name('admin.pendaftaran.update');
    Route::get('/admin/pendaftaran/{id}', [PendaftaranController::class, 'show'])->name('admin.pendaftaran.show');
    Route::delete('/admin/pendaftaran/{id}', [PendaftaranController::class, 'destroy'])->name('admin.pendaftaran.destroy');

    // Manajemen Kegiatan Controller
    Route::post('/admin/kegiatan/store', [KegiatanController::class, 'store'])->name('admin.addKegiatan');
    Route::put('/admin/kegiatan/{id}/update', [KegiatanController::class, 'update'])->name('admin.updateKegiatan');
    Route::get('/admin/kegiatan/{id}', [KegiatanController::class, 'show'])->name('admin.showKegiatan');
    Route::delete('/admin/kegiatan/{id}/delete', [KegiatanController::class, 'destroy'])->name('admin.deleteKegiatan');

    // Manajement Akun Controller
    Route::post('/admin/manajemen-akun/store', [ManajementAkunController::class, 'store'])->name('admin.addUser');
    Route::put('/admin/manajemen-akun/{id}/update', [ManajementAkunController::class, 'update'])->name('admin.updateUser');
    Route::delete('/admin/manajemen-akun/{id}/delete', [ManajementAkunController::class, 'destroy'])->name('admin.deleteUser');
    // Profil Admin
    Route::put('/admin/profile/update', [ManajementAkunController::class, 'updateProfile'])->name('admin.updateProfile');
    Route::put('/admin/profile/update-password', [ManajementAkunController::class, 'updatePassword'])->name('admin.updatePassword');
});


