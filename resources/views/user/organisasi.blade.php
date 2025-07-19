@extends('user.layouts.layouts')

@section('content')
    <!-- Galeri Grid-->
    <section class="page-section mt-5" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Struktur Organisasi Dewan Saka</h2>
                <h3 class="section-subheading text-muted">Susunan Jabatan Dalam Organisasi Saka Bhayangkara Polsek Mayong
                </h3>
            </div>
            <!-- Ketua Dewan Saka -->
            @php
                $ketua = $anggota->first(function ($item) {
                    return $item->jabatan === 'Ketua Dewan Saka' && $item->status === 'aktif';
                });
            @endphp

            @if ($ketua)
                <div class="org-level">
                    <div class="org-level-title">Ketua Dewan Saka</div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="org-item text-center">
                                <div class="org-item-header justify-content-center">
                                    <div class="org-avatar">
                                        <img src="{{ asset($ketua->foto) }}" alt="{{ $ketua->nama_lengkap }}">
                                    </div>
                                    <div class="org-info">
                                        <h5>{{ $ketua->nama_lengkap }}</h5>
                                        <p>{{ $ketua->jabatan }}</p>
                                    </div>
                                </div>
                                <div class="org-details">
                                    <p><i class="bi bi-calendar"></i> {{ $ketua->masa_jabatan_mulai }} s/d
                                        {{ $ketua->masa_jabatan_selesai }}</p>
                                    <p><i class="bi bi-check-circle"></i> Status: {{ ucfirst($ketua->status) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Wakil Ketua, Sekretaris, Bendahara -->
            @php
                $pengurusInti = $anggota->filter(function ($item) {
                    return in_array($item->jabatan, ['Wakil Ketua Dewan Saka', 'Sekretaris', 'Bendahara']) &&
                        $item->status === 'aktif';
                });
            @endphp

            <div class="org-level level-connector">
                <div class="org-level-title">Pengurus Inti</div>
                <div class="row">
                    @foreach ($pengurusInti as $pengurus)
                        <div class="col-md-4">
                            <div class="org-item">
                                <div class="org-item-header">
                                    <div class="org-avatar">
                                        <img src="{{ asset($pengurus->foto) }}" alt="{{ $pengurus->jabatan }}">
                                    </div>
                                    <div class="org-info">
                                        <h5>{{ $pengurus->nama_lengkap }}</h5>
                                        <p>{{ $pengurus->jabatan }}</p>
                                    </div>
                                </div>
                                <div class="org-details">
                                    <p><i class="bi bi-calendar"></i> {{ $pengurus->masa_jabatan_mulai }} s/d
                                        {{ $pengurus->masa_jabatan_selesai }}</p>
                                    <p><i class="bi bi-check-circle"></i> Status: {{ ucfirst($pengurus->status) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Anggota -->
            @php
                $anggotaLain = $anggota->filter(function ($item) {
                    return !in_array($item->jabatan, [
                        'Ketua Dewan Saka',
                        'Wakil Ketua Dewan Saka',
                        'Sekretaris',
                        'Bendahara',
                    ]) && $item->status === 'aktif';
                });
            @endphp

            <div class="org-level level-connector">
                <div class="org-level-title">Anggota Dewan Saka</div>
                <div class="row">
                    @foreach ($anggotaLain as $person)
                        <div class="col-md-3">
                            <div class="org-item">
                                <div class="org-item-header">
                                    <div class="org-avatar">
                                        <img src="{{ asset($person->foto) }}" alt="{{ $person->nama_lengkap }}">
                                    </div>
                                    <div class="org-info">
                                        <h5>{{ $person->nama_lengkap }}</h5>
                                        <p>{{ $person->jabatan }}</p>
                                    </div>
                                </div>
                                <div class="org-details">
                                    <p><i class="bi bi-calendar"></i> {{ $person->masa_jabatan_mulai }} s/d
                                        {{ $person->masa_jabatan_selesai }}</p>
                                    <p><i class="bi bi-check-circle"></i> Status: {{ ucfirst($person->status) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection
