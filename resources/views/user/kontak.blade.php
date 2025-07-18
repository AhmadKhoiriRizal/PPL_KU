@extends('user.layouts.layouts')

@section('content')
    <!-- Contact-->
    <section class="page-section mt-5" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                <h3 class="section-subheading text-white">Terbuka untuk konsultasi, kerja sama, atau pertanyaan seputar
                    kegiatan</h3>
            </div>
            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1932977601655!2d110.75145817499474!3d-6.74626339325008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ddad0cde1003%3A0x4f907fc494811db!2sPolsek%20Mayong!5e0!3m2!1sen!2sid!4v1752647539336!5m2!1sen!2sid"
                    frameborder="0" allowfullscreen=""></iframe>
            </div><!-- End Google Maps -->
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
                                    <p>sabharapolsekmayong@gmail.com</p>
                                </div>
                            </div>

                            <!-- Call -->
                            <div class="form-group d-flex align-items-start gap-3 m-3">
                                <i class="bi bi-telephone-fill text-warning fs-2 mt-1"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div>
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
