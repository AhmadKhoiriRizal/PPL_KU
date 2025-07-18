<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManajementAkunController;
use App\Http\Controllers\PendaftaranController;

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

Route::view('/beranda', 'user.dashboard')->name('beranda');;

$pages = ['sejarah', 'galeri','materi','pendaftaran', 'kontak'];

foreach ($pages as $page) {
    Route::view("/$page", "user.$page")->name($page);
}


// Form login/register
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');

// Proses login/register
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User
Route::middleware(['auth', 'role:USER'])->group(function () {
    Route::get('/pendaftaran-saka', [PendaftaranController::class, 'Index']->name('pendaftaran.form');
    Route::post('/pendaftaran-saka', [PendaftaranController::class, 'store']->name('pendaftaran.store');
    Route::get('/pendaftaran-saka/success', 'PendaftaranController@success')->name('pendaftaran.success');
});

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'Index'])->name('admindashboard');
    Route::get('/admin/pendaftaran', [AdminController::class, 'pendaftaran'])->name('adminpendaftaran');
    Route::get('/admin/kegiatan', [AdminController::class, 'kegiatan'])->name('adminkegiatan');
    Route::get('/admin/cetak-kartu', [AdminController::class, 'cetakkartu'])->name('admincetak-kartu');
    Route::get('/admin/manajemen-akun', [AdminController::class, 'manajementakun'])->name('adminmanajemen-akun');

    // Manajement Pendaftaran Controller

    // Manajemen Kegiatan Controller

    // Manajement Akun Controller
    Route::post('/admin/manajemen-akun/store', [ManajementAkunController::class, 'store'])->name('admin.addUser');
    Route::put('/admin/manajemen-akun/{id}/update', [ManajementAkunController::class, 'update'])->name('admin.updateUser');
    Route::delete('/admin/manajemen-akun/{id}/delete', [ManajementAkunController::class, 'destroy'])->name('admin.deleteUser');
});


