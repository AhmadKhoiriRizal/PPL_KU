@extends('admin.layouts.layouts')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="header-title">
                    <h4 class="card-title ">Manajemen Data Kegiatan</h4>
                </div>
                <div class="">
                    <a href="#" class=" text-center btn btn-outline-primary btn-icon mt-lg-0 mt-md-0 mt-3"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop-1">
                        <i class="btn-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </i>
                    </a>
                    <div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Buat Kegiatan Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.addKegiatan') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group mb-2">
                                            <input type="text" class="form-control @error('author') is-invalid @enderror"
                                                name="author" value="{{ old('author') }}" placeholder="Penulis Kegiatan"
                                                required>
                                            @error('author')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2">
                                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                                name="judul" value="{{ old('judul') }}" placeholder="Judul Kegiatan"
                                                required>
                                            @error('judul')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2">
                                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="3"
                                                placeholder="Deskripsi Kegiatan" required>{{ old('deskripsi') }}</textarea>
                                            @error('deskripsi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2">
                                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                                name="foto" required>
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2">
                                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror"
                                                name="lokasi" value="{{ old('lokasi') }}" placeholder="Lokasi Kegiatan"
                                                required>
                                            @error('lokasi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2">
                                            <input type="text"
                                                class="form-control @error('kategori') is-invalid @enderror" name="kategori"
                                                value="{{ old('kategori') }}" placeholder="Kategori" required>
                                            @error('kategori')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2">
                                            <input type="date"
                                                class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                                                value="{{ old('tanggal') }}" required>
                                            @error('tanggal')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="text-start mt-2">
                                            <button type="submit" class="btn btn-outline-primary">Buat</button>
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="data-kegiatan" class="table table-bordered " data-toggle="data-table">
                    <thead>
                        <tr>
                            <th class="bg-primary text-white">Id</th>
                            <th class="bg-primary text-white">Foto</th>
                            <th class="bg-primary text-white">Author</th>
                            <th class="bg-primary text-white">Judul</th>
                            <th class="bg-primary text-white">Lokasi</th>
                            <th class="bg-primary text-white">Kategori</th>
                            <th class="bg-primary text-white">Tanggal</th>
                            <th class="bg-primary text-white">Deskripsi</th>
                            <th class="bg-primary text-white">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kegiatans as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    @if ($item->foto)
                                        <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" width="60"
                                            height="60" style="object-fit: cover;">
                                    @else
                                        <span class="text-muted">Tidak Ada</span>
                                    @endif
                                </td>
                                <td>{{ $item->author }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->lokasi }}</td>
                                <td>{{ ucfirst($item->kategori) }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                                <td>{{ Str::limit($item->deskripsi, 50, '...') }}</td>
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
                                            <form action="{{ route('admin.updateKegiatan', $item->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Kegiatan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="text" name="author" class="form-control mb-2"
                                                            value="{{ $item->author }}" placeholder="Author" required>
                                                        <input type="text" name="judul" class="form-control mb-2"
                                                            value="{{ $item->judul }}" placeholder="Judul" required>
                                                        <textarea name="deskripsi" class="form-control mb-2" rows="3" placeholder="Deskripsi">{{ $item->deskripsi }}</textarea>
                                                        <input type="text" name="lokasi" class="form-control mb-2"
                                                            value="{{ $item->lokasi }}" placeholder="Lokasi" required>

                                                        <input type="text" name="kategori" class="form-control mb-2"
                                                            value="{{ $item->kategori }}" placeholder="Kategori"
                                                            required>

                                                        <input type="date" name="tanggal" class="form-control mb-2"
                                                            value="{{ $item->tanggal }}" required>

                                                        <label for="foto">Foto Kegiatan (optional)</label>
                                                        <input type="file" name="foto" class="form-control mb-2">
                                                        @if ($item->foto)
                                                            <small class="text-muted">Foto saat ini: <a
                                                                    href="{{ asset('storage/' . $item->foto) }}"
                                                                    target="_blank">Lihat</a></small>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Tombol Lihat -->
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                        data-bs-target="#showModal-{{ $item->id }}" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <!-- Modal Detail -->
                                    <div class="modal fade" id="showModal-{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="showModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Detail Kegiatan: {{ $item->judul }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Tutup"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Author:</strong> {{ $item->author }}</p>
                                                    <p><strong>Judul:</strong> {{ $item->judul }}</p>
                                                    <p><strong>Deskripsi:</strong> {{ $item->deskripsi }}</p>
                                                    <p><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
                                                    <p><strong>Kategori:</strong> {{ ucfirst($item->kategori) }}</p>
                                                    <p><strong>Tanggal:</strong>
                                                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</p>
                                                    <p><strong>Foto:</strong><br>
                                                        @if ($item->foto)
                                                            <img src="{{ asset('storage/' . $item->foto) }}"
                                                                alt="Foto" width="200" class="img-thumbnail">
                                                        @else
                                                            Tidak ada foto.
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
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
                                            <form action="{{ route('admin.deleteKegiatan', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Yakin ingin menghapus item <strong>{{ $item->judul }}</strong>?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
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
                            <th class="bg-primary text-white">Id</th>
                            <th class="bg-primary text-white">Foto</th>
                            <th class="bg-primary text-white">Author</th>
                            <th class="bg-primary text-white">Judul</th>
                            <th class="bg-primary text-white">Lokasi</th>
                            <th class="bg-primary text-white">Kategori</th>
                            <th class="bg-primary text-white">Tanggal</th>
                            <th class="bg-primary text-white">Deskripsi</th>
                            <th class="bg-primary text-white">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    @endsection
