@extends('admin.layouts.layouts')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="header-title">
                    <h4 class="card-title ">Manajement Data Akun</h4>
                </div>
                <div class="">
                    <a href="#" class=" text-center btn btn-outline-primary btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop-1">
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
                                    <h5 class="modal-title" id="staticBackdropLabel">Buat Admin Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.addUser') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="name"
                                                class="form-control mb-2 @error('name') is-invalid @enderror"
                                                placeholder="Nama Lengkap" value="{{ old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            <input type="email" name="email"
                                                class="form-control mb-2 @error('email') is-invalid @enderror"
                                                placeholder="Email" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            <input type="password" name="password"
                                                class="form-control mb-2 @error('password') is-invalid @enderror"
                                                placeholder="Password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            <input type="password" name="password_confirmation"
                                                class="form-control mb-2 @error('password_confirmation') is-invalid @enderror"
                                                placeholder="Konfirmasi Password">
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}
                                                </div>
                                            @enderror

                                            <select name="role" class="form-control mb-2" required>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>

                                            <select name="status" class="form-control mb-2" required>
                                                <option value="aktif">Aktif</option>
                                                <option value="nonaktif">Nonaktif</option>
                                            </select>
                                        </div>
                                        <div class="text-start mt-2">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="manajemen-akun" class="table table-bordered " data-toggle="data-table">
                    {{-- notifikasi error dan sukses --}}
                    @if (session('success') || session('error'))
                        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">
                            <div id="session-toast" class="toast align-items-center text-white {{ session('success') ? 'bg-success' : 'bg-danger' }} border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        {{ session('success') ?? session('error') }}
                                    </div>
                                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    @endif
                    <thead>
                        <tr>
                            <th class="bg-primary text-white">Id</th>
                            <th class="bg-primary text-white">Nama</th>
                            <th class="bg-primary text-white">Role</th>
                            <th class="bg-primary text-white">Email</th>
                            <th class="bg-primary text-white">Password</th>
                            <th class="bg-primary text-white">Status</th>
                            <th class="bg-primary text-white">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->email }}</td>
                                <td>********</td> {{-- Demi keamanan, password sebaiknya tidak ditampilkan --}}
                                <td>{{ $user->status }}</td>
                                <td>
                                    @if (!($user->id == 1 && $user->role === 'admin'))
                                        <!-- Tombol Edit -->
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editModal-{{ $user->id }}" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>

                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="editModal-{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{ route('admin.updateUser', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Akun</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="text" name="name"
                                                                class="form-control mb-2" value="{{ $user->name }}"
                                                                required>
                                                            <input type="email" name="email"
                                                                class="form-control mb-2" value="{{ $user->email }}"
                                                                required>
                                                            <select name="role" class="form-control mb-2" required>
                                                                <option value="admin"
                                                                    {{ $user->role === 'admin' ? 'selected' : '' }}>
                                                                    Admin</option>
                                                                <option value="user"
                                                                    {{ $user->role === 'user' ? 'selected' : '' }}>
                                                                    User</option>
                                                            </select>
                                                            <select name="status" class="form-control" required>
                                                                <option value="aktif"
                                                                    {{ $user->status === 'aktif' ? 'selected' : '' }}>Aktif
                                                                </option>
                                                                <option value="nonaktif"
                                                                    {{ $user->status === 'nonaktif' ? 'selected' : '' }}>
                                                                    Nonaktif</option>
                                                            </select>
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

                                        <!-- Tombol Hapus -->
                                        @if ($user->role !== 'admin')
                                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal-{{ $user->id }}" title="Hapus">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        @endif

                                        <!-- Modal Hapus -->
                                        <div class="modal fade" id="deleteModal-{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="deleteModalLabel{{ $user->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{ route('admin.deleteUser', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Hapus Akun</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Yakin ingin menghapus akun
                                                                <strong>{{ $user->name }}</strong>?</p>
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
                                    @else

                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="bg-primary text-white">Id</th>
                            <th class="bg-primary text-white">Nama</th>
                            <th class="bg-primary text-white">Role</th>
                            <th class="bg-primary text-white">Email</th>
                            <th class="bg-primary text-white">Password</th>
                            <th class="bg-primary text-white">Status</th>
                            <th class="bg-primary text-white">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    @endsection
