@extends('admin.layouts.layouts')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="header-title">
                    <h4 class="card-title ">Data Pendaftaran</h4>
                </div>
            </div>
            <div class="table-responsive">
                <table id="datapendaftar" class="table table-bordered " data-toggle="data-table">
                    <thead>
                        <tr>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Id</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Nama Lengkap</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Tempat Lahir</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Tanggal Lahir</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Jenis Kelamin</th>
                            <th class="bg-primary text-white" style="white-space: nowrap; min-width: 300px;">Alamat</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">No HP</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Email</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Sekolah</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Nama Orang Tua</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Pekerjaan Orang Tua</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Hobi</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Tinggi Badan</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Berat Badan</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Golongan Darah</th>
                            <th class="bg-primary text-white" style="white-space: nowrap; min-width: 120px;">Foto</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">File Pernyataan</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->sekolah }}</td>
                                <td>{{ $item->nama_ortu }}</td>
                                <td>{{ $item->pekerjaan_ortu }}</td>
                                <td>{{ $item->hobi }}</td>
                                <td>{{ $item->tinggi_badan }}</td>
                                <td>{{ $item->berat_badan }}</td>
                                <td>{{ $item->golongan_darah }}</td>
                                <td>
                                    @if($item->foto)
                                        <img src="{{ asset($item->foto) }}" width="75" alt="Foto">
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($item->file_pernyataan)
                                        <a href="{{ asset($item->file_pernyataan) }}" target="_blank">Lihat File</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editModal-{{ $item->id }}" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <form action="{{ route('admin.pendaftaran.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Pendaftaran</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Data Pribadi -->
                                                        <input type="text" name="nama_lengkap" class="form-control mb-2" value="{{ $item->nama_lengkap }}" placeholder="Nama Lengkap" required>
                                                        <input type="text" name="tempat_lahir" class="form-control mb-2" value="{{ $item->tempat_lahir }}" placeholder="Tempat Lahir" required>
                                                        <input type="date" name="tanggal_lahir" class="form-control mb-2" value="{{ $item->tanggal_lahir }}" required>

                                                        <select name="jenis_kelamin" class="form-control mb-2" required>
                                                            <option value="L" {{ $item->jenis_kelamin === 'L' ? 'selected' : '' }}>Laki-laki</option>
                                                            <option value="P" {{ $item->jenis_kelamin === 'P' ? 'selected' : '' }}>Perempuan</option>
                                                        </select>

                                                        <input type="text" name="alamat" class="form-control mb-2" value="{{ $item->alamat }}" placeholder="Alamat" required>
                                                        <input type="text" name="no_hp" class="form-control mb-2" value="{{ $item->no_hp }}" placeholder="Nomor HP" required>
                                                        <input type="email" name="email" class="form-control mb-2" value="{{ $item->email }}" placeholder="Email" required>

                                                        <!-- Data Sekolah -->
                                                        <input type="text" name="sekolah" class="form-control mb-2" value="{{ $item->sekolah }}" placeholder="Sekolah" required>

                                                        <!-- Data Orang Tua -->
                                                        <input type="text" name="nama_ortu" class="form-control mb-2" value="{{ $item->nama_ortu }}" placeholder="Nama Orang Tua" required>
                                                        <input type="text" name="pekerjaan_ortu" class="form-control mb-2" value="{{ $item->pekerjaan_ortu }}" placeholder="Pekerjaan Orang Tua" required>

                                                        <!-- Data Tambahan -->
                                                        <input type="text" name="hobi" class="form-control mb-2" value="{{ $item->hobi }}" placeholder="Hobi (opsional)">
                                                        <input type="number" name="tinggi_badan" class="form-control mb-2" value="{{ $item->tinggi_badan }}" placeholder="Tinggi Badan (cm)" required>
                                                        <input type="number" name="berat_badan" class="form-control mb-2" value="{{ $item->berat_badan }}" placeholder="Berat Badan (kg)" required>

                                                        <select name="golongan_darah" class="form-control mb-2" required>
                                                            <option value="A" {{ $item->golongan_darah === 'A' ? 'selected' : '' }}>A</option>
                                                            <option value="B" {{ $item->golongan_darah === 'B' ? 'selected' : '' }}>B</option>
                                                            <option value="AB" {{ $item->golongan_darah === 'AB' ? 'selected' : '' }}>AB</option>
                                                            <option value="O" {{ $item->golongan_darah === 'O' ? 'selected' : '' }}>O</option>
                                                        </select>

                                                        <select name="status" class="form-control mb-2" required>
                                                            <option value="aktif" {{ $item->status === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                                            <option value="nonaktif" {{ $item->status === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                                        </select>

                                                        <!-- Upload File -->
                                                        <div class="mb-2">
                                                            <label for="foto" class="form-label">Foto (jpg/png/jpeg)</label>
                                                            <input type="file" name="foto" class="form-control">
                                                            @if($item->foto)
                                                                <small class="text-muted">File saat ini: <a href="{{ asset($item->foto) }}" target="_blank">Lihat</a></small>
                                                            @endif
                                                        </div>

                                                        <div class="mb-2">
                                                            <label for="file_pernyataan" class="form-label">File Pernyataan (pdf/doc/docx)</label>
                                                            <input type="file" name="file_pernyataan" class="form-control">
                                                            @if($item->file_pernyataan)
                                                                <small class="text-muted">File saat ini: <a href="{{ asset($item->file_pernyataan) }}" target="_blank">Lihat</a></small>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Tombol Lihat Detail -->
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                        data-bs-target="#showModal-{{ $item->id }}" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <!-- Modal Lihat Detail -->
                                    <div class="modal fade" id="showModal-{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="showModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Detail Pendaftaran: {{ $item->nama_lengkap }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row mb-2">
                                                        <div class="col-md-6">
                                                            <strong>Nama Lengkap:</strong><br>{{ $item->nama_lengkap }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Email:</strong><br>{{ $item->email }}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-md-6">
                                                            <strong>Tempat, Tanggal Lahir:</strong><br>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Jenis Kelamin:</strong><br>{{ $item->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-md-6">
                                                            <strong>Alamat:</strong><br>{{ $item->alamat }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>No HP:</strong><br>{{ $item->no_hp }}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-md-6">
                                                            <strong>Sekolah:</strong><br>{{ $item->sekolah }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Golongan Darah:</strong><br>{{ $item->golongan_darah }}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-md-6">
                                                            <strong>Nama Orang Tua:</strong><br>{{ $item->nama_ortu }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Pekerjaan Orang Tua:</strong><br>{{ $item->pekerjaan_ortu }}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-md-6">
                                                            <strong>Tinggi / Berat Badan:</strong><br>{{ $item->tinggi_badan }} cm / {{ $item->berat_badan }} kg
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Hobi:</strong><br>{{ $item->hobi ?? '-' }}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-md-6">
                                                            <strong>Status:</strong><br>{{ ucfirst($item->status) }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Foto:</strong><br>
                                                            @if ($item->foto)
                                                                <img src="{{ asset($item->foto) }}" alt="Foto" width="100" class="img-thumbnail">
                                                            @else
                                                                Tidak ada
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="mt-3">
                                                        <strong>File Pernyataan:</strong><br>
                                                        @if ($item->file_pernyataan)
                                                            <a href="{{ asset($item->file_pernyataan) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                                Lihat File
                                                            </a>
                                                        @else
                                                            Tidak ada
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tombol Hapus -->
                                    <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal-{{ $item->id }}" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                    <!-- Modal Hapus -->
                                    <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="{{ route('admin.pendaftaran.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Yakin ingin menghapus data <strong>{{ $item->nama_lengkap }}</strong>?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Id</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Nama Lengkap</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Tempat Lahir</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Tanggal Lahir</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Jenis Kelamin</th>
                            <th class="bg-primary text-white" style="white-space: nowrap; min-width: 300px;">Alamat</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">No HP</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Email</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Sekolah</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Nama Orang Tua</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Pekerjaan Orang Tua</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Hobi</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Tinggi Badan</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Berat Badan</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Golongan Darah</th>
                            <th class="bg-primary text-white" style="white-space: nowrap; min-width: 120px;">Foto</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">File Pernyataan</th>
                            <th class="bg-primary text-white" style="white-space: nowrap;">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
@endsection
