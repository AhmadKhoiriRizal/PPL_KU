@extends('user.layouts.layouts')

@section('content')
    <!-- Galeri Grid-->
    <section class="page-section mt-5" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Galeri</h2>
                <h3 class="section-subheading text-muted">Berita Acara Saka Bhayangkara Polsek Mayong</h3>
            </div>
            <div class="row">
                @foreach($kegiatans as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#modalKegiatan{{ $item->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid galeri-img" src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $item->judul }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $item->kategori }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Detail Kegiatan -->
                    <div class="modal fade" id="modalKegiatan{{ $item->id }}" tabindex="-1"
                        aria-labelledby="modalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel{{ $item->id }}">{{ $item->judul }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}"
                                        class="img-fluid mb-3">
                                    <p><strong>Penulis:</strong> {{ $item->author }}</p>
                                    <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                    </p>
                                    <p><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
                                    <p>{{ $item->deskripsi }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
