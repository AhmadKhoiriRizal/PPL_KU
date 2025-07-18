<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Sabhara Mayong</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.4/css/buttons.dataTables.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
    {{-- CSS Extra --}}
    <link rel="stylesheet" href="{{ asset('admin/css/style_extra.css') }}">
    <!-- endinject -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('dashboard/assets/img/logo_saka.png') }}">
</head>

<body>
    <div class="container-scroller">

        {{-- Navbar --}}
        @include('admin.layouts.navbar')
        {{-- Setting dan Menu SIdebar --}}
        @include('admin.layouts.sidebar')

        <!-- partial Panel -->
        @yield('content')
        {{-- End Partial Panel --}}

        <!-- Footer-->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a
                                href="https://www.bootstrapdash.com/" class="text-muted"
                                target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a
                                href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap
                                dashboard</a> templates from Bootstrapdash.com</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @include('admin.layouts.script')
</body>

</html>
