<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Website Desa Pangombusan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Flaticon Font -->
    <link href="{{ asset('/frontend/lib/flaticon/font/flaticon.css') }}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/frontend/css/style.css') }}" rel="stylesheet" />


    @stack('style')

</head>

<body>
    @include('masyarakat.partials.navbar')
    <h1>@yield('title')</h1>

    @yield('content')

    @include('masyarakat.partials.footer')
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('/frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/forntend/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/frontend/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('/frontend/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('/frontend/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('/frontend/js/main.js')}}"></script>

    @stack('script')

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</body>

</html>
