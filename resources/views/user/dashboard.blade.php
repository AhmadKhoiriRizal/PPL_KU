@extends('user.layouts.layouts')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">"Sabhara Polsek Mayong"</div>
            <div class="masthead-heading text-uppercase">Satuan Karya Pramuka Bhayangkara</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#beranda">Jelajah</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="beranda">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                <h3 class="section-subheading text-muted">Visi, Misi, dan Tujuan Saka Bhayangkara</h3>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="my-3 text-uppercase">Visi</h3>
                    <p class="text-muted mx-auto col-md-8">Menjadi generasi muda yang disiplin, berkarakter, dan berperan
                        aktif dalam mewujudkan keamanan serta ketertiban masyarakat melalui semangat kepramukaan</p>
                </div>
                <div class="col-md-6">
                    <h3 class="my-3 text-uppercase text-center">Misi</h3>
                    <ol>
                        <li class="text-muted">Meningkatkan pengetahuan, keterampilan, dan kesadaran anggota pramuka di
                            bidang keamanan dan ketertiban masyarakat.</li>
                        <li class="text-muted">Menanamkan nilai-nilai kedisiplinan, tanggung jawab, kepemimpinan, dan
                            pengabdian kepada masyarakat.</li>
                        <li class="text-muted">Membina kerja sama antara pramuka dan kepolisian dalam rangka pembinaan
                            generasi muda yang peduli terhadap lingkungan sosial.</li>
                        <li class="text-muted">Melaksanakan kegiatan-kegiatan preventif dan edukatif dalam rangka mendukung
                            tugas Kepolisian Negara Republik Indonesia.</li>
                        <li class="text-muted">Menumbuhkan jiwa patriotisme dan nasionalisme melalui kegiatan kepramukaan
                            yang berwawasan kebangsaan.</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h4 class="my-3 text-uppercase text-center">Tujuan</h4>
                    <ol>
                        <li class="text-muted">Membentuk anggota pramuka yang memiliki wawasan kebangsaan serta peduli
                            terhadap keamanan dan ketertiban masyarakat.</li>
                        <li class="text-muted">Membekali anggota dengan keterampilan praktis di bidang kepolisian seperti
                            lalu lintas, reserse, pengamanan, dan lainnya.</li>
                        <li class="text-muted">Menjadikan pramuka sebagai mitra strategis dalam mendukung tugas-tugas
                            pembinaan masyarakat oleh aparat keamanan.</li>
                        <li class="text-muted">Meningkatkan peran serta pemuda dalam pencegahan kenakalan remaja, narkoba,
                            dan pelanggaran hukum lainnya.</li>
                        <li class="text-muted">Mendorong terbentuknya kader-kader pemuda yang siap menjadi pelopor dan
                            teladan dalam kehidupan bermasyarakat.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang Saka Bhayangkara -->
    <section class="page-section bg-light" id="sejarah">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Sejarah</h2>
                <h3 class="section-subheading text-muted">Tentang Saka Bhayangkara</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h4 class="my-3">Sejarah Saka Bhayangkara</h4>
                    <p>Sejarah berdirinya Saka Bhayangkara diawali dengan dikeluarkannya instruksi bersama Menteri/Panglima
                        Polisi dan Kwartir Nasional nomor Pol. 28/Inst./MK/1966 dan SK Kwarnas Nomor 4/1966 tertanggal 1
                        Juli 1966. Instruksi bersama tersebut berisi tentang pembentukan Pramuka Kamtibmas (Keamanan dan
                        Ketertiban Masyarakat).</p>
                    <p class="text-muted">Pramuka Kamtibmas sendiri memiliki sembilan krida, yaitu Krida Lalu Lintas, Krida
                        SAR, Krida Pemadam Kebakaran, Krida Tindakan Pertama pada Kejadian Perkara, Krida Pengawal, Krida
                        Komlek, Krida Pelacak, dan Krida Pengamat.</p>
                    <p><a class="btn" href="{{ route('sejarah')}}">Info Lebih lanjut <i class="fas fa-angle-right"></i></a></p>
                </div>
                <div class="col-md-4">
                    <img class="logo_tentang_saka" src="{{ asset('dashboard/assets/img/logo_saka.png') }}">
                </div>
                <div class="col-md-4">
                    <img class="logo_tentang_saka"
                        src="{{ asset('dashboard/assets/img/gallery/4Krida-SakaBhayangkara.png') }}">
                </div>
            </div>
        </div>
    </section>
    <!-- Alur Pendaftaran -->
    <section class="page-section" id="pendaftaran">
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
                            @auth
                                <a href="#" onclick="event.preventDefault(); showLoginAlert();"
                                    class="btn btn-primary mt-2">Daftar Anggota</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary mt-2">Daftar Anggota</a>
                            @endauth
                        </div>
                    </div>
                </li>

                <!-- 2. Pengisian Formulir Pendaftaran -->
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid"
                            src="{{ asset('dashboard/assets/img/about/pendaftaran.png') }}" alt="Formulir" />
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
                            <a href="{{ asset('dashboard/files/Surat Izin Orang Tua.docx') }}" class="btn btn-primary mt-2"
                                target="_blank">
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
                            <p class="text-muted">Anggota aktif mengikuti latihan rutin mingguan, kegiatan sosial atau
                                bakti
                                masyarakat, serta event antar‑Saka sesuai bidang krida yang dipilih.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
            <h3 class="section-subheading text-white">Terbuka untuk konsultasi, kerja sama, atau pertanyaan seputar kegiatan</h3>
        </div>

        @if(session('success'))
            <div class="alert alert-success" id="success-alert">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function () {
                    const alert = document.getElementById('success-alert');
                    if(alert) alert.remove();
                }, 5000); // Hilang setelah 5 detik
            </script>
        @endif

        <form id="contactForm" method="POST" action="{{ route('contact.send') }}">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group responsive-map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1932977601655!2d110.75145817499474!3d-6.74626339325008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ddad0cde1003%3A0x4f907fc494811db!2sPolsek%20Mayong!5e0!3m2!1sen!2sid!4v1752647539336!5m2!1sen!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            style="width: 100%; height: 400px; border: 0;"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Nama Anda *" required />
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" id="email" name="email" type="email" placeholder="Email Anda *" required />
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Nomer Handphone Anda *" required />
                    </div>
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" name="message" placeholder="Pesan Anda *" required></textarea>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase" type="submit">Kirim Pesan</button>
            </div>
        </form>
    </div>
</section>
@endsection
