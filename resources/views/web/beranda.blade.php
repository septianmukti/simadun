@extends('../web/layouts/base')

@section('tittle')
    <title>Selamat Datang - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('header')
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Selamat Datang</span> di SiMadun</h1>
                            <p class="p-large">Daftarkan media anda.</p>
                            @if (Auth::user())
                            <a class="btn-solid-lg page-scroll" href="{{ route('view-dashboard') }}">DASHBOARD</a>
                            @else
                            <a class="btn-solid-lg page-scroll" href="{{ route('login') }}">MASUK</a>
                            @endif
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('web/assets/images/header-teamwork.svg')}}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
@endsection

@section('content')
    <!-- Details 1 -->
    <div id="about" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Tentang SiMadun</h2>
                        <p>SIMADUN (Sistem Informasi Media di Madiun) merupakan inovasi dari Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Madiun, dalam rangka menjalankan tugas kerjasama media Pemerintah Kabupaten Madiun dengan media partner, secara transparan, efektif dan efisien.<br>Selain itu SIMADUN diharap dapat memenuhi kebutuhan atas data yang akurat, terbuka, dan interoperabel atau mudah dibagi pakaikan kepada masyarakat Madiun terkait perusahaan media, wartawan maupun kegiatan kejurnalistikan.</p>
                        <a class="btn-solid-reg" href="{{ route('about') }}">Baca Lebih Lanjut</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('web/assets/images/details-1-office-worker.svg')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('web/assets/images/details-2-office-team-work.svg')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Persyaratan Kualifikasi Media</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Kualifikasi Media Cetak</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Kualifikasi Media Siber</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Kualifikasi Media Elektronik</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg" href="{{ route('syarat.ketentuan') }}">Baca Lebih lanjut</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Video -->
    <div id="tutorial" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Video Tutorial</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="#" data-effect="fadeIn">
                                <img class="img-fluid" src="{{asset('web/assets/images/video-frame.svg')}}" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->
                    <p><strong>*</strong> Video ini merupakan tutorial tentang alur penggunaan aplikasi SiMadun.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of video -->

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h2>KONTAK KAMI</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.4699387708197!2d111.5300891!3d-7.6325033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bef30d42555f%3A0x847f919823db8db!2sDinas%20Komunikasi%20Dan%20Informatika%20Kabupaten%20Madiun!5e0!3m2!1sid!2sid!4v1746409845332!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h3 class="text-center">Alamat Kantor</h3>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address mb-3">Silahkan datang ke kantor kami atau menghubungi kami melalui kontak yang tertera dibawah ini :</li>
                        <li><i class="fas fa-map-marker-alt"></i>Jl. Mastrip No.23, Mojorejo, Kec. Taman, Kota Madiun, 63139</li><br>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:0351462927">(0351)462927</a></li><br>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:diskominfo@madiunkab.go.id">diskominfo@madiunkab.go.id</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5>LINK TERKAIT</h5>
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <a href="https://katalog.inaproc.id/" target="_blank"><img class="img-responsive" src="{{asset('web/assets/images/logo-katalog-elektronik.svg')}}" alt="alternative"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <a href="https://lpse.madiunkab.go.id/eproc4" target="_blank"><img class="img-responsive" src="{{asset('web/assets/images/logo-lpse.png')}}" alt="alternative"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <a href="https://www.komdigi.go.id/" target="_blank"><img class="img-responsive" src="{{asset('web/assets/images/komdigi.png')}}" alt="alternative"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <a href="https://madiunkab.go.id/" target="_blank"><img class="img-responsive" src="{{asset('web/assets/images/kabmadiun-logo.jpg')}}" alt="alternative"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <a href="https://diskominfo.madiunkab.go.id/" target="_blank"><img class="img-responsive" src="{{asset('assets/img/logo/logo-kominfo-kecil.png')}}" alt="alternative"></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <a href="https://www.lapor.go.id/" target="_blank"><img class="img-responsive" src="{{asset('web/assets/images/lapor.png')}}" alt="alternative"></a>
                                    </div>
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->
@endsection
