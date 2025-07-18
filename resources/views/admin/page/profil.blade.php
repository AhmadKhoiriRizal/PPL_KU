@extends('admin.layouts.layouts')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="header-title">
                        <h4 class="card-title ">Profil Admin</h4>
                    </div>
                    <div class="profile-card mb-4">
                        <div class="card-body p-4">

                            <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="btn btn-outline-primary nav-link active p-2" id="pills-info-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-info" type="button" role="tab">
                                        <i class="bi bi-person-circle me-1"></i> Informasi Dasar
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="btn btn-outline-primary nav-link p-2" id="pills-security-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab">
                                        <i class="bi bi-shield-lock me-1"></i> Keamanan
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-info" role="tabpanel">
                                    <form action="{{ route('admin.updateProfile') }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mb-3">
                                            <label for="nama" class="form-label">Nama Depan</label>
                                            <input type="text" class="form-control" id="nama" name="name"
                                                value="{{ old('name', $user->name) }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ old('email', $user->email) }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select class="form-select" id="role" name="role">
                                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>admin
                                                </option>
                                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>user
                                                </option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status Akun</label>
                                            <select class="form-select" id="status" name="status">
                                                <option value="aktif" {{ $user->status === 'aktif' ? 'selected' : '' }}>Aktif
                                                </option>
                                                <option value="nonaktif" {{ $user->status === 'nonaktif' ? 'selected' : '' }}>
                                                    Nonaktif</option>
                                            </select>
                                        </div>

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button type="button" class="btn btn-outline-primary me-md-2">Batal</button>
                                            <button type="submit"
                                                class="btn btn-outline-primary bg-primary text-white">Simpan
                                                Perubahan</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="pills-security" role="tabpanel">
                                    <form action="{{ route('admin.updatePassword') }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3">
                                            <label for="currentPassword" class="form-label">Password Saat Ini</label>
                                            <input type="password" class="form-control" id="currentPassword"
                                                name="current_password" required>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="newPassword" class="form-label">Password Baru</label>
                                                <input type="password" class="form-control" id="newPassword"
                                                    name="new_password" required>
                                                <div class="form-text">
                                                    <i class="bi bi-info-circle me-1"></i>
                                                    Minimal 8 karakter dengan kombinasi huruf dan angka
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="confirmPassword" class="form-label">Konfirmasi Password
                                                    Baru</label>
                                                <input type="password" class="form-control" id="confirmPassword"
                                                    name="new_password_confirmation" required>
                                            </div>
                                        </div>

                                        {{-- <div class="mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="twoFactor"
                                                    name="two_factor">
                                                <label class="form-check-label" for="twoFactor">
                                                    Aktifkan Verifikasi Dua Langkah
                                                </label>
                                            </div>
                                        </div> --}}

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button type="button" class="btn btn-outline-primary me-md-2">Batal</button>
                                            <button type="submit"
                                                class="btn btn-outline-primary bg-primary text-white">Perbaharui
                                                Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-info-circle fa-2x me-3"></i>
                            <div>
                                Pastikan informasi yang Anda berikan akurat dan terkini. Perubahan akan mempengaruhi
                                pengalaman Anda menggunakan platform kami.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
