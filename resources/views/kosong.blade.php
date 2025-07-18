@extends('admin.layouts.layouts')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="header-title">
                    <h4 class="card-title ">Data Akun Management</h4>
                </div>
                <div class="">
                    <a href="#" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal"
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
                                    <h5 class="modal-title" id="staticBackdropLabel">Create New Admin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- <div class="form-group">
                                        <form action="{{ route('add.admin') }}" method="POST">
                                            @csrf
                                            <input type="email"
                                                class="form-control mb-2 @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" id="email" name="email"
                                                placeholder="name@example.com">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror

                                            <input type="text" class="form-control mb-2 @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}" id="name" name="name" placeholder="your name">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror

                                            <input type="password"
                                                class="form-control mb-2 @error('password') is-invalid @enderror"
                                                name="password" id="password" placeholder="Password">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror


                                            <input type="password"
                                                class="form-control mb-2 @error('confirm-password') is-invalid @enderror"
                                                name="confirm-password" id="confirm-password"
                                                placeholder="confirm-password">
                                            @error('confirm-password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="text-start mt-2">
                                        <button type="submit" class="btn btn-primary"
                                            data-bs-dismiss="modal">Create</button>
                                        <a href="/akun" type="button" class="btn btn-danger">Cancel</a>
                                    </div>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="manajemen-akun" class="table table-bordered " data-toggle="data-table">
                    <thead>
                        <tr>
                            <th class="bg-primary text-white">Id</th>
                            <th class="bg-primary text-white">Nama</th>
                            <th class="bg-primary text-white">Email</th>
                            <th class="bg-primary text-white">Password</th>
                            <th class="bg-primary text-white">Status</th>
                            <th class="bg-primary text-white">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="bg-primary text-white">Id</th>
                            <th class="bg-primary text-white">Nama</th>
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
