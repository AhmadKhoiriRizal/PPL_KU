@extends('user.layouts.layouts')

@section('content')
<!-- partial -->
<section class="page-section bg-light mt-5" id="pendaftaran">
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container text-center">
            <h2 class="text-uppercase mb-3">Pendaftaran Berhasil</h2>

            <h1 class="text-success mb-4">
                <i class="bi bi-check-circle-fill" style="font-size: 4rem;"></i>
            </h1>

            <h3 class="card-title mb-2">Terima kasih telah mendaftar!</h3>
            <p class="lead">Pendaftaran Anda sebagai calon anggota Saka telah berhasil dicatat.</p>

            @if(isset($anggota))
                <div class="alert alert-info text-start mt-4">
                    <h5 class="alert-heading">Detail Pendaftaran:</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Nama Lengkap:</strong><br> {{ $anggota->nama_lengkap }}</p>
                            <p><strong>No. HP:</strong><br> {{ $anggota->no_hp }}</p>
                            <p><strong>Email:</strong><br> {{ $anggota->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Asal Sekolah:</strong><br> {{ $anggota->sekolah }}</p>
                            <p><strong>Waktu Pendaftaran:</strong><br> {{ $anggota->created_at->format('d F Y H:i') }}</p>
                        </div>
                    </div>
                    <hr>
                    <p class="mb-0">Kami akan menghubungi Anda untuk proses selanjutnya melalui email atau nomor HP yang
                        terdaftar.</p>
                </div>
            @endif

            <a href="/" class="btn btn-primary mt-4">Kembali ke Beranda</a>
        </div>
    </div>
</div>
</section>
@endsection
