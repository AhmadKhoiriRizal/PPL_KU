@extends('user.layouts.layouts')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">"Sabhara Polsek Mayong"</div>
            <div class="masthead-heading text-uppercase">Satuan Karya Pramuka Bhayangkara</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Jelajah</a>
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
                    <p><a class="btn" href="#">Info Lebih lanjut <i class="fas fa-angle-right"></i></a></p>
                </div>
                <div class="col-md-4">
                    <img class="logo_tentang_saka" src="{{ asset('dashboard/assets/img/logo_saka.png')}}">
                </div>
                <div class="col-md-4">
                    <img class="logo_tentang_saka"
                        src="{{ asset('dashboard/assets/img/gallery/4Krida-SakaBhayangkara.png')}}">
                </div>
            </div>
        </div>
    </section>
    <!-- Galeri Grid-->
    <section class="page-section" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Galeri</h2>
                <h3 class="section-subheading text-muted">Berita Acara Saka Bhayangkara Polsek Mayong</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('dashboard/assets/img/portfolio/1.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Threads</div>
                            <div class="portfolio-caption-subheading text-muted">Illustration</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('dashboard/assets/img/portfolio/2.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Explore</div>
                            <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('dashboard/assets/img/portfolio/3.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Finish</div>
                            <div class="portfolio-caption-subheading text-muted">Identity</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('dashboard/assets/img/portfolio/4.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Lines</div>
                            <div class="portfolio-caption-subheading text-muted">Branding</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('dashboard/assets/img/portfolio/5.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Southwest</div>
                            <div class="portfolio-caption-subheading text-muted">Website Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('dashboard/assets/img/portfolio/6.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Window</div>
                            <div class="portfolio-caption-subheading text-muted">Photography</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                <h3 class="section-subheading text-white">Terbuka untuk konsultasi, kerja sama, atau pertanyaan seputar
                    kegiatan</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group responsive-map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1932977601655!2d110.75145817499474!3d-6.74626339325008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ddad0cde1003%3A0x4f907fc494811db!2sPolsek%20Mayong!5e0!3m2!1sen!2sid!4v1752647539336!5m2!1sen!2sid"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Nama Anda *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Email Anda *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Nomer Handphone Anda *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Pesan Anda *"
                                data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Terjadi Error Saat Mengirim Pesan!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton"
                        type="submit">Kirim Pesan</button></div>
            </form>
        </div>
    </section>
@endsection
