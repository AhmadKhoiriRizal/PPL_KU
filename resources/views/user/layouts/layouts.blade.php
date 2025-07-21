<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sabhara Mayong</title>
    <!-- Favicon-->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('dashboard/assets/img/logo_saka.png') }}">
    <!-- Font Awesome icons (free version)-->
    {{-- CSS Bootstrap Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    {{-- Bootstrap 5.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('dashboard/css/styles.css') }}" rel="stylesheet" />
    {{-- Styles Extra --}}
    <link href="{{ asset('dashboard/css/styles_extra.css') }}" rel="stylesheet" />
</head>

<body id="page-top">

    {{-- Navbar --}}
    @include('user.layouts.navbar')

    @yield('content')

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-start">Copyright &copy; Sabraha Mayong 2025</div>
                <div class="col-lg-2 text-lg-start">Develop By: <a href="https://github.com/AhmadKhoiriRizal">Ahkhriz</a></div>
                <div class="col-lg-4 my-3 my-lg-0">
                    {{-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a> --}}
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/sakabhayangkara_mayong?igsh=MWdnaXFsNGljb2prag=="><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/sakabhayangkaramayong.mayong"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://m.youtube.com/channel/UCy98V_RP1WvroKLTnQSiZZA?fbclid=PAQ0xDSwLrinNleHRuA2FlbQIxMAABp23An87I4hYYfSDO-fJRt6B3dnzWOLJEhDcmGV8-hpuGqZkgaCILh1qQdg_-_aem_llW7T1udUMpv1aiFUCzLmQ"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@sakabhayangkaramayong?_t=ZS-8yDrH0WVRv5&_r=1"><i class="fab fa-tiktok"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="mailto:sabharamayong@gmail.com"><i
                            class="fas fa-envelope"></i></a>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="https://themewagon.com/">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showLoginAlert() {
            Swal.fire({
                icon: 'info',
                title: 'Sudah Login',
                text: 'Silakan isi formulir pendaftaran.',
                confirmButtonText: 'Isi Formulir'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('pendaftaran.form') }}";
                }
            });
        }

        // Pengiriman pesan no Whatsapp
        function sendToWhatsApp(event) {
            event.preventDefault(); // cegah form submit default

            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const phone = document.getElementById("phone").value.trim();
            const message = document.getElementById("message").value.trim();

            if (!name || !email || !phone || !message) {
                alert("Mohon lengkapi semua kolom!");
                return;
            }

            const waNumber = "628988933524"; // Ganti 0 dengan 62 (kode negara Indonesia)
            const text = `Halo! Saya ingin menghubungi Anda.\n\nNama: ${name}\nEmail: ${email}\nNo HP: ${phone}\nPesan: ${message}`;
            const encodedText = encodeURIComponent(text);

            const waUrl = `https://wa.me/${waNumber}?text=${encodedText}`;
            window.open(waUrl, "_blank");
        }
    </script>
</body>

</html>
