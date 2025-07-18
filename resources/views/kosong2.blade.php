<?php

// routes/web.php
Route::get('/pendaftaran-saka', 'PendaftaranController@index')->name('pendaftaran.form');
Route::post('/pendaftaran-saka', 'PendaftaranController@store')->name('pendaftaran.store');
Route::get('/pendaftaran-saka/success', 'PendaftaranController@success')->name('pendaftaran.success');

// app/Http/Controllers/PendaftaranController.php
class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // data pribadi
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'email' => 'required|email',

            // data sekolah
            'sekolah' => 'required|string|max:255',

            // data orang tua
            'nama_ortu' => 'required|string|max:255',
            'pekerjaan_ortu' => 'required|string|max:255',

            // data tambahan
            'hobi' => 'nullable|string',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'golongan_darah' => 'required|in:A,B,AB,O',

            // upload files
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file_pernyataan' => 'required|file|mimes:pdf,doc,docx|max:5120'
        ]);

        // Handle file uploads
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto_profil');
            $validated['foto'] = str_replace('public/', 'storage/', $fotoPath);
        }

        if ($request->hasFile('file_pernyataan')) {
            $pernyataanPath = $request->file('file_pernyataan')->store('public/file_pernyataan');
            $validated['file_pernyataan'] = str_replace('public/', 'storage/', $pernyataanPath);
        }

        // Simpan ke database
        $anggota = AnggotaSaka::create($validated);

        return redirect()->route('pendaftaran.success')
                         ->with('success', 'Pendaftaran berhasil!')
                         ->with('anggota', $anggota);
    }

    public function success()
    {
        return view('pendaftaran.success');
    }
}

// app/Models/AnggotaSaka.php
class AnggotaSaka extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'email',
        'sekolah',
        'nama_ortu',
        'pekerjaan_ortu',
        'hobi',
        'tinggi_badan',
        'berat_badan',
        'golongan_darah',
        'foto',
        'file_pernyataan'
    ];
}

// database/migrations/2023_01_01_create_anggota_sakas_table.php
Schema::create('anggota_sakas', function (Blueprint $table) {
    $table->id();
    $table->string('nama_lengkap');
    $table->string('tempat_lahir');
    $table->date('tanggal_lahir');
    $table->enum('jenis_kelamin', ['L', 'P']);
    $table->text('alamat');
    $table->string('no_hp');
    $table->string('email');
    $table->string('sekolah');
    $table->string('nama_ortu');
    $table->string('pekerjaan_ortu');
    $table->text('hobi')->nullable();
    $table->decimal('tinggi_badan', 5, 2);
    $table->decimal('berat_badan', 5, 2);
    $table->enum('golongan_darah', ['A', 'B', 'AB', 'O']);
    $table->string('foto');
    $table->string('file_pernyataan');
    $table->timestamps();
});

// resources/views/pendaftaran/form.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Anggota Saka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Formulir Pendaftaran Anggota Saka</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Data Pribadi -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Data Pribadi
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_L" value="L" required>
                                        <label class="form-check-label" for="jenis_kelamin_L">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_P" value="P">
                                        <label class="form-check-label" for="jenis_kelamin_P">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No. HP</label>
                                <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Tambahan -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Data Tambahan
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="sekolah" class="form-label">Asal Sekolah/Gudep</label>
                                <input type="text" class="form-control" id="sekolah" name="sekolah" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_ortu" class="form-label">Nama Orang Tua/Wali</label>
                                <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" required>
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan_ortu" class="form-label">Pekerjaan Orang Tua/Wali</label>
                                <input type="text" class="form-control" id="pekerjaan_ortu" name="pekerjaan_ortu" required>
                            </div>
                            <div class="mb-3">
                                <label for="hobi" class="form-label">Hobi/Bakat</label>
                                <input type="text" class="form-control" id="hobi" name="hobi">
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
                                    <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="berat_badan" class="form-label">Berat Badan (kg)</label>
                                    <input type="number" class="form-control" id="berat_badan" name="berat_badan" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="golongan_darah" class="form-label">Golongan Darah</label>
                                <select class="form-select" id="golongan_darah" name="golongan_darah" required>
                                    <option value="">Pilih...</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>

                            <!-- Upload Foto -->
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Profil (Format: JPG/PNG, max 2MB)</label>
                                <input class="form-control" type="file" id="foto" name="foto" accept="image/jpeg,image/png" required>
                            </div>

                            <!-- Upload File Pernyataan -->
                            <div class="mb-3">
                                <label for="file_pernyataan" class="form-label">File Pernyataan (Format: PDF/DOC, max 5MB)</label>
                                <input class="form-control" type="file" id="file_pernyataan" name="file_pernyataan" accept=".pdf,.doc,.docx" required>
                                <small class="text-muted">Silahkan lampirkan file pernyataan yang sudah ditandatangani</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 mb-5">
                <button type="submit" class="btn btn-primary btn-lg">Daftar Sekarang</button>
            </div>
        </form>
    </div>
</body>
</html>

// resources/views/pendaftaran/success.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header bg-success text-white">
                Pendaftaran Berhasil
            </div>
            <div class="card-body">
                <h1 class="text-success mb-4"><i class="bi bi-check-circle-fill"></i></h1>
                <h3 class="card-title">Terima kasih telah mendaftar!</h3>
                <p class="card-text lead">Pendaftaran Anda sebagai calon anggota Saka telah berhasil dicatat.</p>

                @if(session('anggota'))
                <div class="alert alert-info text-start mt-4">
                    <h5 class="alert-heading">Detail Pendaftaran:</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Nama Lengkap:</strong><br> {{ session('anggota')->nama_lengkap }}</p>
                            <p><strong>No. HP:</strong><br> {{ session('anggota')->no_hp }}</p>
                            <p><strong>Email:</strong><br> {{ session('anggota')->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Asal Sekolah:</strong><br> {{ session('anggota')->sekolah }}</p>
                            <p><strong>Waktu Pendaftaran:</strong><br> {{ session('anggota')->created_at->format('d F Y H:i') }}</p>
                        </div>
                    </div>
                    <hr>
                    <p class="mb-0">Kami akan menghubungi Anda untuk proses selanjutnya melalui email atau nomor HP yang terdaftar.</p>
                </div>
                @endif

                <div class="mt-4">
                    <a href="/" class="btn btn-primary">Kembali ke Beranda</a>
                </div>
            </div>
            <div class="card-footer text-muted">
                Saka Pramuka © {{ date('Y') }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
