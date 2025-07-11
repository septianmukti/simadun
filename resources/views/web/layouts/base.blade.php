<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ config('app.url') }}">
    <meta name="description" content="SiMadun merupakan aplikasi milik Diskominfo Kabupaten Madiun yang digunakan untuk mengajukan proposal kerja sama antara Pemkab Madiun dan Perusahaan Media.">
    <meta name="keywords" content="SiMadun, Kabupaten Madiun, Kampung Pesilat, Diskominfo Kabupaten Madiun">
    <meta name="author" content="Yan">
    <link rel="icon" href="{{ asset('assets/img/logo/logo-pemkab.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/logo-pemkab.png') }}" type="image/x-icon">
    @yield('tittle')

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('web/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/styles.css') }}" rel="stylesheet">
    @yield('css')

    <style>
        .logo-image-new {
            width: 10.5375rem;
            display: flex;
            align-items: center;
            height: 4rem;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image logo-image-new" href="{{ route('index') }}">
            <img src="{{asset('assets/img/logo/logo-pemkab.png')}}" alt="logo pemkab">
            <img src="{{asset('assets/img/logo/kampung-pesilat.png')}}" alt="logo kampung pesilat">
            <img src="{{asset('assets/img/logo/simadun.png')}}" alt="logo simadun">
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('index') }}">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('index') }}#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('index') }}#tutorial">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('index') }}#contact">Kontak Kami</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Media</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('media.list') }}"><span class="item-text">Data Media</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ route('syarat.ketentuan') }}"><span class="item-text">Syarat dan Ketentuan</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://diskominfo.madiunkab.go.id/" target="_blank" title="Website">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fa fa-globe fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.instagram.com/kominfokabmadiun/" target="_blank" title="Instagram">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    @yield('header')

    @yield('content')

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>Tentang SiMadun</h4>
                        <p>SiMadun merupakan aplikasi milik Diskominfo Kabupaten Madiun yang digunakan untuk mengajukan proposal kerja sama antara Pemkab Madiun dan Perusahaan Media.</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Menu Utama</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="{{ route('media.list') }}">Data Media</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="{{ route('about') }}">Tentang Aplikasi</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="{{ route('syarat.ketentuan') }}">Syarat dan Ketentuan</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Sosial Media</h4>
                        <span class="fa-stack">
                            <a href="https://diskominfo.madiunkab.go.id/" target="_blank" title="Website">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fa fa-globe fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/kominfokabmadiun/" target="_blank" title="Instagram">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2024 - <?php echo date("Y"); ?> <a href="https://diskominfo.madiunkab.go.id" target="_blank">Dinas Komunikasi dan Informatika</a> Kabupaten Madiun - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="{{ asset('web/assets/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('web/assets/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('web/assets/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('web/assets/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('web/assets/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('web/assets/js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('web/assets/js/scripts.js') }}"></script> <!-- Custom scripts -->
    @yield('scripts')
    
</body>

</html>