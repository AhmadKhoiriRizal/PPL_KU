@extends('admin.layouts.layouts')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="header-title">
                    <h4 class="card-title ">Dashboard Admin</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                                <div>
                                    <p class="mb-2 text-md-center text-lg-left">Jumlah Pengguna</p>
                                    <h1 class="mb-0">{{ $jumlahUsers }}</h1>
                                </div>
                                <i class="bi bi-person-circle icon-xl text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <canvas id="users-chart" height="80"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                                <div>
                                    <p class="mb-2 text-md-center text-lg-left">Jumlah Anggota</p>
                                    <h1 class="mb-0">{{ $jumlahAnggota }}</h1>
                                </div>
                                <i class="bi bi-people-fill icon-xl text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <canvas id="anggota-chart" height="80"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                                <div>
                                    <p class="mb-2 text-md-center text-lg-left">Jumlah Pendaftar</p>
                                    <h1 class="mb-0">{{ $jumlahAnggota }}</h1>
                                </div>
                                <i class="bi bi-person-plus-fill icon-xl text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <canvas id="anggota-chart" height="80"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                                <div>
                                    <p class="mb-2 text-md-center text-lg-left">Jumlah Kegiatan</p>
                                    <h1 class="mb-0">{{ $jumlahKegiatan }}</h1>
                                </div>
                                <i class="bi bi-calendar-event-fill icon-xl text-secondary" style="font-size: 2.5rem;"></i>
                            </div>
                            <canvas id="kegiatan-chart" height="80"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
@endsection
