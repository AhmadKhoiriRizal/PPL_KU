@extends('user.layouts.layouts')

@section('content')
    <!-- Alur Pendaftaran -->
    <section class="page-section bg-light mt-5" id="pendaftaran">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Pendaftaran</h2>
                <h3 class="section-subheading text-muted">Alur Pendaftaran Anggota Baru Saka Bhayangkara</h3>
            </div>
            <ul class="timeline">
                <!-- 1. Pengumuman & Sosialisasi -->
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('dashboard/assets/img/about/pamflet.png') }}"
                            alt="Sosialisasi" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>1. Pengumuman & Sosialisasi</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Open recruitment diumumkan melalui pamflet, media sosial, atau langsung ke
                                sekolah/masyarakat. Dilakukan sosialisasi mengenai manfaat, syarat usia, krida, serta izin
                                orang tua/wali dan pembina gugus depan.<br>
                                Silakan melakukan pendaftaran melalui tombol di bawah ini:
                            </p>
                            <a href="{{ route('login') }}"
                                class="btn btn-primary mt-2">
                                Daftar Anggota
                            </a>
                        </div>
                    </div>
                </li>

                <!-- 2. Pengisian Formulir Pendaftaran -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('dashboard/assets/img/about/pendaftaran.png') }}"
                            alt="Formulir" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2. Pengisian Formulir Pendaftaran</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Calon anggota mengisi formulir pendaftaran yang berisi data pribadi, riwayat kepramukaan,
                                serta surat izin dari orang tua/wali dan pembina gugus depan. Dilengkapi pas foto dan
                                fotokopi identitas bila diperlukan.<br>
                                Silakan unduh berkas formulir dan surat izin melalui tombol di bawah ini:
                            </p>
                            <a href="{{ asset('dashboard/files/Surat Izin Orang Tua.docx') }}"
                                class="btn btn-primary mt-2" target="_blank">
                                Download Berkas
                            </a>
                        </div>
                    </div>
                </li>

                <!-- 3. Pelatihan dan Assessmen -->
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('dashboard/assets/img/about/pelatihan.png') }}"
                            alt="Pelatihan" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>3. Pelatihan & Assessmen</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Calon anggota mengikuti pelatihan dasar (camp/perkemahan, materi krida
                                seperti Kamtibmas, Lalu Lintas, TKP, PPB), serta penilaian kedisiplinan dan pemahaman
                                materi.</p>
                        </div>
                    </div>
                </li>

                <!-- 4. Pengumuman & Pelantikan -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('dashboard/assets/img/about/pengumuman.png') }}"
                            alt="Pelantikan" />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>4. Pengumuman & Pelantikan</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Panitia mengumumkan calon yang lolos assessmen dan mengadakan acara
                                pelantikan resmi, sering dalam bentuk upacara perkemahan untuk pemasangan tanda anggota dan
                                pengukuhan secara formal.</p>
                        </div>
                    </div>
                </li>

                <!-- 5. Mulai Kegiatan Rutin -->
                <li>
                    <div class="timeline-image">
                        <h4>Mulai<br />Kegiatan<br />Rutin</h4>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>5. Kegiatan Rutin</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Anggota aktif mengikuti latihan rutin mingguan, kegiatan sosial atau bakti
                                masyarakat, serta event antar‑Saka sesuai bidang krida yang dipilih.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
