<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sistem Informasi</title>
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

    <!-- Flaticon Font -->
    <link href="{{ asset('/frontend/lib/flaticon/font/flaticon.css') }}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/frontend/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navbar Start -->
    @include('masyarakat.partials.navbar')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h2 class="display-4 font-weight-bold text-white">
                    Apa Itu Sistem Informasi Desa??
                </h2>
                <p class="text-white mb-4">
                    Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed
                    sit. Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed
                    ipsum at ipsum nonumy amet. Clita lorem dolore sed stet et est justo
                    dolore.
                </p>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img src="{{ '/frontend/img/pengertian-desa.jpg' }}" alt="" class="img-fluid m-3">
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Berita</span>
                </p>
                <h1 class="mb-4">Berita Terbaru</h1>
            </div>
            <div class="row pb-3">

                @foreach ($news as $item)
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm mb-2">
                            <img class="card-img-top mb-2" src="{{ asset('images/berita/' . $item->image) }}"
                                alt="" />

                            <div class="card-body bg-light text-center p-4">
                                <h4 class="">{{ $item->judul }}</h4>
                                <p>{!! Str::limit($item->isi, 50) !!}</p>
                                <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Footer Start -->
    @include('masyarakat.partials.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
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
</body>

</html>
