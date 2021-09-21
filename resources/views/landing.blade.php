<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Nada Ruzandah Music</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fietra Prabaskara <fprabaskara@gmail.com>">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/goblol.png') }}" type="image/png">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="assets/images/goblol.png" width="200" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#jadwal">Jadwal</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Kontak</a></li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                @if(auth()->guard('member')->check())
                                <li><a class="solid" href="{{ route('admin.dashboard') }}">PROFIL</a></li>
                                @else
                                <li><a class="solid" href="{{ route('admin.login') }}">LOGIN</a></li>
                                
                                @endif
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            {{-- <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol> --}}

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Nada Ruzandah Music</h1>
                                    <p class="text">Kami Menerima Layanan Panggung Luar Kota.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><p style="color:#ffffff;"> <strong>Penggunaan Aplikasi</strong><br>
                                        1.  Membuat akun. <br>
                                        2.  Login.  <br>
                                        3. Melakukan pemesanan -> mengisi tanggal acara -> lokasi acara -> keperluan acara.<br>
                                        4. Menunggu proses persetujuan.<br>
                                        5. Melakukan pembayaran DP dengan Transfer ke BANK BRI no rek. 729901005459533 An. Ananda Hidayah.<br>
                                        6. Upload bukti transfer.<br>
                                        7. Pemesanan berhasil dilakukan.<br>
                                        </p>
                                        </li>
                                        <li>
                                        <p style="color:#ffffff;"> <strong>Syarat dan Ketentuan</strong>
                                        Pemesanan di lakukan harus dp setengah harga / minimal Rp.500.000 , apabila terjadi pembatalan maka bisa pindah ke tanggal yang akan di tentukan
                                        Pemesanan harus login dulu sebelum pesan dan pembayaran di lakukan melalui struk
                                        </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end" style="margin-top:-300px;">
                        <div class="slider-image">
                            <img src="https://image.flaticon.com/icons/png/512/1238/1238802.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            {{-- <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a> --}}
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Layanan Kami </h3>
                        <p class="text">Beberapa Layanan Yang Tersedia Di Dalam Orkes Music Kami. Buat Acaramu Jadi Lebih Meriah!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Acara Tasmiyah</a></h4>
                            <div class="features-icon">
                                <img src="https://image.flaticon.com/icons/png/512/940/940632.png" width="100">
                                <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                            {{-- <a class="features-btn" href="#">LEARN MORE</a> --}}
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Acara Pernikahan</a></h4>
                            <div class="features-icon">
                                <img src="https://image.flaticon.com/icons/png/512/1227/1227532.png" width="140">
                                <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                            {{-- <a class="features-btn" href="#">LEARN MORE</a> --}}
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Acara Lainnya </a></h4>
                            <div class="features-icon">
                                <img src="https://image.flaticon.com/icons/png/512/1214/1214816.png" width="100">
                                <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                            {{-- <a class="features-btn" href="#">LEARN MORE</a> --}}
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->

    <!--====== PORTFOLIO PART START ======-->

    <section id="jadwal" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-center pb-10">
                        <h3 class="title mb-5">Jadwal Pemesanan</h3>
                    </div> <!-- section title -->
                <table class="table table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th>Acara</th>
                            <th>Tanggal Main</th>
                            <th>Customer</th>
                            <th>Daerah</th>
                        </tr>
                    </thead>
                    @php
                        $sewa = App\Models\Sewa::where('status', '!=', 0)->latest()->get();
                    @endphp
                    <tbody>
                        @foreach ($sewa as $sewaan)
                            <tr>
                                <td>{{ $sewaan->acara }}</td>
                                <td>{{ date('d F Y', strtotime($sewaan->tgl_acara)) }}</td>
                                <td>{{ $sewaan->member->name }}</td>
                                <td>{{ $sewaan->tempat->daerah }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PORTFOLIO PART ENDS ======-->

    <!--====== PRINICNG START ======-->

    <section id="pricing" class="pricing-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">Rangkuman Biaya</h3>
                        <p class="text">Beberapa Estimasi Biaya Yang Dikenakan Mengacu dari Daerah Yang Akan Di Kunjungi.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/pro.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Dalam Kota</h5>
                            <p class="month">Rp. 3.000.000 / Day</p>
                        </div>
                        {{-- <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div> --}}
                        <div class="pricing-btn rounded-buttons text-center">
                            @if(auth()->guard('member')->check())
                            <a class="main-btn rounded-one" href="{{ route('member-sewa.create') }}">PEMESANAN</a>
                            @else
                            <a class="main-btn rounded-one" href="{{ route('admin.login') }}">PEMESANAN</a>
                            @endif
                        </div>
                    </div> <!-- pricing style one -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="https://image.flaticon.com/icons/png/512/543/543885.png" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Luar Kota</h5>
                            <p class="month">Rp. 3.000.000 - 5.000.000 / Day</p>
                        </div>
                        {{-- <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div> --}}
                        <div class="pricing-btn rounded-buttons text-center">
                            @if(auth()->guard('member')->check())
                            <a class="main-btn rounded-one" href="{{ route('member-sewa.create') }}">PEMESANAN</a>
                            @else
                            <a class="main-btn rounded-one" href="{{ route('admin.login') }}">PEMESANAN</a>
                            @endif
                        </div>
                    </div> <!-- pricing style one -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/enterprise.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Luar Pulau</h5>
                            <p class="month">Harga Menyesuaikan Tiket.</p>
                        </div>
                        {{-- <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div> --}}
                        <div class="pricing-btn rounded-buttons text-center">
                            @if(auth()->guard('member')->check())
                            <a class="main-btn rounded-one" href="{{ route('member-sewa.create') }}">PEMESANAN</a>
                            @else
                            <a class="main-btn rounded-one" href="{{ route('admin.login') }}">PEMESANAN</a>
                            @endif
                        </div>
                    </div> <!-- pricing style one -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Kontak</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                        <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.621736130315!2d117.1480575!3d-0.5177318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe6d4db6e684d86a8!2sNada%20Ruzandah%20Music!5e0!3m2!1sid!2sid!4v1626566194515!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"> </iframe>

                    </div> <!-- row -->
                </div>
            </div> <!-- row -->

            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text"> Gg. Sanggam, Rapak Dalam, Kec. Loa Janan Ilir, Kota Samarinda, Kalimantan Timur 75251</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-instagram"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">nada_ruzandah_music</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-whatsapp"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">0812-5572-572</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="assets/images/goblol.png" width="100" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    {{-- <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social --> --}}
                    <div class="footer-support text-center">
                        <span class="number">081228110335</span>
                        <span class="mail">Support By <b>anandahidayah@gmail.com</b></span>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('assets/js/ajax-contact.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrolling-nav.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>

</body>

</html>