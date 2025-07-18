<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil | YourApp</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fc;
        }

        body {
            background-color: #f8f9fa;
        }

        .profile-card {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, #224abe 100%);
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 2rem;
        }

        .profile-picture-container {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: white;
            border: 5px solid white;
            overflow: hidden;
            margin: -75px auto 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .profile-picture {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .nav-pills .nav-link.active {
            background-color: var(--primary-color);
        }

        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="profile-card mb-4">
                    <div class="profile-header text-center">
                        <h2>Edit Profil</h2>
                        <p class="mb-0">Kelola informasi pribadi Anda</p>
                    </div>

                    <div class="card-body p-4">
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center mb-4">
                                <div class="profile-picture-container">
                                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/41c8a742-3704-4aaa-bc21-01220e5f2f44.png" alt="Foto profil pengguna" class="profile-picture" id="profilePicture">
                                </div>
                                <button class="btn btn-sm btn-outline-primary mt-2" id="changePhotoBtn">
                                    <i class="fas fa-camera me-1"></i> Ubah Foto
                                </button>
                                <input type="file" id="photoUpload" class="d-none" accept="image/*">
                            </div>
                        </div>

                        <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-info-tab" data-bs-toggle="pill" data-bs-target="#pills-info" type="button" role="tab">
                                    <i class="fas fa-user-circle me-1"></i> Informasi Dasar
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab">
                                    <i class="fas fa-lock me-1"></i> Keamanan
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-info" role="tabpanel">
                                <form>
                                    <div class="row mb-3">
                                        <label for="firstName" class="form-label">Nama Depan</label>
                                        <input type="text" class="form-control" id="firstName" value="John">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" value="john.doe@example.com">
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status Akun</label>
                                        <select class="form-select" id="status">
                                            <option value="active" selected>Aktif</option>
                                            <option value="inactive">Nonaktif</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status Akun</label>
                                        <select class="form-select" id="status">
                                            <option value="active" selected>Aktif</option>
                                            <option value="inactive">Nonaktif</option>
                                        </select>
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-outline-primary me-md-2">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="pills-security" role="tabpanel">
                                <form>
                                    <div class="mb-3">
                                        <label for="currentPassword" class="form-label">Password Saat Ini</label>
                                        <input type="password" class="form-control" id="currentPassword">
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="newPassword" class="form-label">Password Baru</label>
                                            <input type="password" class="form-control" id="newPassword">
                                            <div class="form-text">
                                                <i class="fas fa-info-circle me-1"></i>
                                                Minimal 8 karakter dengan kombinasi huruf dan angka
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="confirmPassword" class="form-label">Konfirmasi Password Baru</label>
                                            <input type="password" class="form-control" id="confirmPassword">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="twoFactor">
                                            <label class="form-check-label" for="twoFactor">
                                                Aktifkan Verifikasi Dua Langkah
                                            </label>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-outline-primary me-md-2">Batal</button>
                                        <button type="submit" class="btn btn-primary">Perbaharui Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-info">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-info-circle fa-2x me-3"></i>
                        <div>
                            Pastikan informasi yang Anda berikan akurat dan terkini. Perubahan akan mempengaruhi pengalaman Anda menggunakan platform kami.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fungsi untuk mengganti foto profil
        document.getElementById('changePhotoBtn').addEventListener('click', function() {
            document.getElementById('photoUpload').click();
        });

        document.getElementById('photoUpload').addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    document.getElementById('profilePicture').src = event.target.result;
                }

                reader.readAsDataURL(e.target.files[0]);
            }
        });

        // Validasi formulir
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Validasi bisa ditambahkan di sini

                // Contoh notifikasi
                const toastHtml = `
                    <div class="toast show align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                <i class="fas fa-check-circle me-2"></i>
                                Perubahan berhasil disimpan!
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                `;

                const toastContainer = document.createElement('div');
                toastContainer.innerHTML = toastHtml;
                document.body.appendChild(toastContainer);

                // Hilangkan toast setelah 3 detik
                setTimeout(() => {
                    toastContainer.querySelector('.toast').classList.remove('show');
                    setTimeout(() => toastContainer.remove(), 150);
                }, 3000);
            });
        });
    </script>
</body>
</html>
