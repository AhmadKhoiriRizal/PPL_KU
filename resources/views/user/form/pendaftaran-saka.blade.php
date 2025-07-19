<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Saka</title>
    <link rel="icon" type="image/png" href="{{ asset('dashboard/assets/img/logo_saka.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .step {
            display: none;
            animation: fadeIn 0.5s ease-out;
        }

        .step.active {
            display: block;
        }

        .progress-bar {
            height: 6px;
            transition: width 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .step-indicator {
            width: 40px;
            height: 40px;
            transition: all 0.3s ease;
        }

        .step-indicator.active {
            background-color: #3b82f6;
            color: white;
        }

        .step-indicator.completed {
            background-color: #10b981;
            color: white;
        }

        input:invalid {
            border-color: #ef4444;
        }

        input:valid:not(:placeholder-shown) {
            border-color: #10b981;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-7xl bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-600 text-white p-6">
            <h1 class="text-2xl font-bold text-center">PENDAFTARAN ANGGOTA BARU SAKA BHAYANGKARA POLSEK MAYONG</h1>
            <div class="flex justify-between items-center mt-6 px-4">
                <div class="text-center flex flex-col items-center">
                    <div class="step-indicator active" id="step1-indicator">1</div>
                    <div class="text-sm mt-2">Data Diri</div>
                </div>
                <div class="text-center flex flex-col items-center">
                    <div class="step-indicator" id="step2-indicator">2</div>
                    <div class="text-sm mt-2">Pendidikan</div>
                </div>
                <div class="text-center flex flex-col items-center">
                    <div class="step-indicator" id="step3-indicator">3</div>
                    <div class="text-sm mt-2">Berkas</div>
                </div>
                <div class="text-center flex flex-col items-center">
                    <div class="step-indicator" id="step4-indicator">4</div>
                    <div class="text-sm mt-2">Konfirmasi</div>
                </div>
            </div>
            <div class="mt-4 bg-blue-400 h-2 rounded-full">
                <div class="progress-bar bg-white w-1/4 rounded-full" id="progress-bar"></div>
            </div>
        </div>

        <!-- Form Steps -->
        <div class="p-6">
            <form id="registration-form" method="POST" action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Step 1: Data Diri -->
            <div id="registration-form" class="step active" data-step="1">
                <h2 class="text-xl font-semibold mb-4">Data Pribadi</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="Masukkan nama lengkap">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="Masukkan tempat lahir">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Jenis Kelamin</label>
                    <div class="flex space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="jenis_kelamin" value="L" class="form-radio h-4 w-4 text-blue-600"
                                required>
                            <span class="ml-2">Laki-laki</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="jenis_kelamin" value="P" class="form-radio h-4 w-4 text-blue-600"
                                required>
                            <span class="ml-2">Perempuan</span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="alamat">Alamat</label>
                    <textarea id="alamat" name="alamat"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="Masukkan alamat"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="no_hp">Nomor Telepon</label>
                    <input type="tel" id="no_hp" name="no_hp"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="08xxxxxxxxxx" pattern="[0-9]{10,15}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="contoh@email.com">
                </div>
                <div class="flex justify-between">
                    <a type="button"
                        class="btn prev-btn bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400 transition" href="{{ route('beranda')}}">Kembali</a>
                    <button type="button"
                        class="next-btn bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Lanjut</button>
                </div>
            </div>

            <!-- Step 2: Data Sekolah -->
            <div class="step" data-step="2">
                <h2 class="text-xl font-semibold mb-4">Data Sekolah</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="sekolah">Nama Sekolah</label>
                    <input type="text" id="sekolah" name="sekolah"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="Nama sekolah/universitas">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="nama_ortu">Nama Orang Tua</label>
                    <input type="text" id="nama_ortu" name="nama_ortu"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="Nama orang tua">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="pekerjaan_ortu">Pekerjaan Orang Tua</label>
                    <input type="text" id="pekerjaan_ortu" name="pekerjaan_ortu"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="Pekerjaan orang tua">
                </div>
                <div class="flex justify-between">
                    <button type="button"
                        class="prev-btn bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400 transition">Kembali</button>
                    <button type="button"
                        class="next-btn bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Lanjut</button>
                </div>
            </div>

            <!-- Step 3: Data Tambahan -->
            <div class="step" data-step="3">
                <h2 class="text-xl font-semibold mb-4">Data Tambahan</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="hobi">Hobi</label>
                    <input type="text" id="hobi" name="hobi"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan hobi (opsional)">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="tinggi_badan">Tinggi Badan (cm)</label>
                    <input type="number" id="tinggi_badan" name="tinggi_badan"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="Tinggi badan dalam cm">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="berat_badan">Berat Badan (kg)</label>
                    <input type="number" id="berat_badan" name="berat_badan"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required placeholder="Berat badan dalam kg">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Golongan Darah</label>
                    <select id="golongan_darah" name="golongan_darah"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option value="" disabled selected>Pilih golongan darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="flex justify-between">
                    <button type="button"
                        class="prev-btn bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400 transition">Kembali</button>
                    <button type="button"
                        class="next-btn bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Lanjut</button>
                </div>
            </div>

            <!-- Step 4: Upload Files -->
            <div class="step" data-step="4">
                <h2 class="text-xl font-semibold mb-4">Upload Berkas</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="foto">Foto Profil (3x4)</label>
                    <input type="file" id="foto" name="foto"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        accept="image/*" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="file_pernyataan">File Pernyataan</label>
                    <input type="file" id="file_pernyataan" name="file_pernyataan"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        accept=".pdf,.doc,.docx" required>
                </div>
                <div class="flex justify-between">
                    <button type="button"
                        class="prev-btn bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400 transition">Kembali</button>
                    <button type="button"
                        class="next-btn bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Lanjut</button>
                </div>
            </div>

            <!-- Step 5: Konfirmasi Data -->
            <div class="step" data-step="5">
                <h2 class="text-xl font-semibold mb-4">Konfirmasi Data</h2>
                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <h3 class="font-medium text-lg mb-3 text-blue-600">Data Pribadi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-500">Nama Lengkap</p>
                            <p id="confirm-nama" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Tempat Lahir</p>
                            <p id="confirm-tempat_lahir" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Tanggal Lahir</p>
                            <p id="confirm-tanggal_lahir" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Jenis Kelamin</p>
                            <p id="confirm-jenis_kelamin" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Alamat</p>
                            <p id="confirm-alamat" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Nomor Telepon</p>
                            <p id="confirm-no_hp" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Email</p>
                            <p id="confirm-email" class="font-medium"></p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <h3 class="font-medium text-lg mb-3 text-blue-600">Data Sekolah</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-500">Nama Sekolah</p>
                            <p id="confirm-sekolah" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Nama Orang Tua</p>
                            <p id="confirm-nama_ortu" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Pekerjaan Orang Tua</p>
                            <p id="confirm-pekerjaan_ortu" class="font-medium"></p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <h3 class="font-medium text-lg mb-3 text-blue-600">Data Tambahan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-500">Hobi</p>
                            <p id="confirm-hobi" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Tinggi Badan</p>
                            <p id="confirm-tinggi_badan" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Berat Badan</p>
                            <p id="confirm-berat_badan" class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-500">Golongan Darah</p>
                            <p id="confirm-golongan_darah" class="font-medium"></p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <h3 class="font-medium text-lg mb-3 text-blue-600">Berkas</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-500">Foto Profil</p>
                            <img id="confirm-foto-preview" src="https://placehold.co/120x160"
                                alt="Pratinjau foto profil yang diunggah" class="w-24 h-32 object-cover rounded border">
                        </div>
                        <div>
                            <p class="text-gray-500">File Pernyataan</p>
                            <p id="confirm-file_pernyataan" class="font-medium"></p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" id="agree" name="agree" class="form-checkbox h-5 w-5 text-blue-600"
                            required>
                        <span class="ml-2">Saya menyatakan bahwa data yang diisi adalah benar dan dapat
                            dipertanggungjawabkan.</span>
                    </label>
                </div>

                <div class="flex justify-between">
                    <button type="button"
                        class="prev-btn bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400 transition">Kembali</button>
                    <button type="submit"
                        class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition">Kirim
                        Pendaftaran</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <script>
        const formData = {};

        document.addEventListener('DOMContentLoaded', function () {
            const steps = document.querySelectorAll('.step');
            const stepIndicators = document.querySelectorAll('.step-indicator');
            const progressBar = document.getElementById('progress-bar');
            const nextButtons = document.querySelectorAll('.next-btn');
            const prevButtons = document.querySelectorAll('.prev-btn');
            const registrationForm = document.getElementById('registration-form');

            let currentStep = 1;

            // Update step indicators
            function updateStepIndicators() {
                stepIndicators.forEach((indicator, index) => {
                    indicator.classList.remove('active', 'completed');
                    if (index + 1 === currentStep) {
                        indicator.classList.add('active');
                    } else if (index + 1 < currentStep) {
                        indicator.classList.add('completed');
                    }
                });

                // Update progress bar
                progressBar.style.width = `${(currentStep - 1) * 25}%`;
            }

            // Show current step
            function showStep(stepNumber) {
                function updateConfirmation() {
                    document.getElementById('confirm-nama').textContent = formData.nama_lengkap || '';
                    document.getElementById('confirm-tempat_lahir').textContent = formData.tempat_lahir || '';
                    document.getElementById('confirm-tanggal_lahir').textContent = formData.tanggal_lahir || '';
                    document.getElementById('confirm-jenis_kelamin').textContent = formData.jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan';
                    document.getElementById('confirm-alamat').textContent = formData.alamat || '';
                    document.getElementById('confirm-no_hp').textContent = formData.no_hp || '';
                    document.getElementById('confirm-email').textContent = formData.email || '';

                    document.getElementById('confirm-sekolah').textContent = formData.sekolah || '';
                    document.getElementById('confirm-nama_ortu').textContent = formData.nama_ortu || '';
                    document.getElementById('confirm-pekerjaan_ortu').textContent = formData.pekerjaan_ortu || '';

                    document.getElementById('confirm-hobi').textContent = formData.hobi || '-';
                    document.getElementById('confirm-tinggi_badan').textContent = formData.tinggi_badan ? formData.tinggi_badan + ' cm' : '';
                    document.getElementById('confirm-berat_badan').textContent = formData.berat_badan ? formData.berat_badan + ' kg' : '';
                    document.getElementById('confirm-golongan_darah').textContent = formData.golongan_darah || '';

                    // File preview
                    const fotoFile = formData.foto;
                    if (fotoFile) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            document.getElementById('confirm-foto-preview').src = e.target.result;
                        };
                        reader.readAsDataURL(fotoFile);
                    }

                    document.getElementById('confirm-file_pernyataan').textContent = formData.file_pernyataan?.name || '';
                }

                steps.forEach(step => {
                    if (parseInt(step.dataset.step) === stepNumber) {
                        step.classList.add('active');
                    } else {
                        step.classList.remove('active');
                    }
                });
                if (stepNumber === 5) {
                    updateConfirmation();
                }
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            // Next button click handler
            nextButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const currentStepForm = this.closest('.step');
                    const inputs = currentStepForm.querySelectorAll('input[required], select[required]');
                    let isValid = true;

                    inputs.forEach(input => {
                        if (!input.checkValidity()) {
                            input.classList.add('border-red-500');
                            isValid = false;
                        } else {
                            input.classList.remove('border-red-500');
                        }
                    });

                    if (!isValid) {
                        alert('Harap lengkapi semua field yang diperlukan!');
                        return;
                    }

                    // Simpan data ke formData sesuai step
                    if (currentStep === 1) {
                        formData.nama_lengkap = document.getElementById('nama_lengkap').value;
                        formData.tempat_lahir = document.getElementById('tempat_lahir').value;
                        formData.tanggal_lahir = document.getElementById('tanggal_lahir').value;
                        formData.jenis_kelamin = document.querySelector('input[name="jenis_kelamin"]:checked')?.value;
                        formData.alamat = document.getElementById('alamat').value;
                        formData.no_hp = document.getElementById('no_hp').value;
                        formData.email = document.getElementById('email').value;
                    } else if (currentStep === 2) {
                        formData.sekolah = document.getElementById('sekolah').value;
                        formData.nama_ortu = document.getElementById('nama_ortu').value;
                        formData.pekerjaan_ortu = document.getElementById('pekerjaan_ortu').value;
                    } else if (currentStep === 3) {
                        formData.hobi = document.getElementById('hobi').value;
                        formData.tinggi_badan = document.getElementById('tinggi_badan').value;
                        formData.berat_badan = document.getElementById('berat_badan').value;
                        formData.golongan_darah = document.getElementById('golongan_darah').value;
                    } else if (currentStep === 4) {
                        formData.foto = document.getElementById('foto').files[0];
                        formData.file_pernyataan = document.getElementById('file_pernyataan').files[0];
                    }

                    if (currentStep < steps.length) {
                        currentStep++;
                        updateStepIndicators();
                        showStep(currentStep);
                        if (currentStep === 5) {
                            updateConfirmation();
                        }
                    }
                });
            });

            // Previous button click handler
            prevButtons.forEach(button => {
                button.addEventListener('click', function () {
                    if (currentStep > 1) {
                        currentStep--;
                        updateStepIndicators();
                        showStep(currentStep);
                    }
                });
            });

            // Initialize
            updateStepIndicators();
        });
    </script>
</body>

</html>
