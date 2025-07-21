@extends('user.layouts.layouts')

@section('content')
    <!-- Contact-->
    <section class="page-section mt-5" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                <h3 class="section-subheading text-white">Terbuka untuk konsultasi, kerja sama, atau pertanyaan seputar kegiatan</h3>
            </div>

            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1932977601655!2d110.75145817499474!3d-6.74626339325008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ddad0cde1003%3A0x4f907fc494811db!2sPolsek%20Mayong!5e0!3m2!1sen!2sid!4v1752647539336!5m2!1sen!2sid"
                        frameborder="0" allowfullscreen="">
                </iframe>
            </div>

            @if(session('success'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function () {
                        document.getElementById('success-alert')?.remove();
                    }, 5000); // hilang dalam 5 detik
                </script>
            @endif

            <form id="contactForm" method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="responsive-map-container form-control">
                            <div class="form-group text-center pt-3">
                                <h3>Kontak</h3>
                            </div>
                            <!-- Location -->
                            <div class="form-group d-flex align-items-start gap-3 m-3">
                                <i class="bi bi-geo-alt-fill text-warning fs-2 mt-1"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Polsek Mayong, Jl. Raya Mayong, Mayong, Jepara, Central Java, Indonesia</p>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="form-group d-flex align-items-start gap-3 m-3">
                                <i class="bi bi-envelope-fill text-warning fs-2 mt-1"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>sabharamayong@gmail.com</p>
                                </div>
                            </div>
                            <!-- Call -->
                            <div class="form-group d-flex align-items-start gap-3 m-3">
                                <i class="fab fa-instagram text-warning fs-2 mt-1"></i>
                                <div>
                                    <h4>Instagram:</h4>
                                    <p>@sakabhayangkara_mayong</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Inputs -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Nama Anda *" required />
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" name="email" type="email" placeholder="Email Anda *" required />
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="Nomor Handphone Anda *" required />
                        </div>
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" name="message" placeholder="Pesan Anda *" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase" type="submit">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
