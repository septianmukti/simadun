@extends('../web/layouts/base')

@section('tittle')
    <title>Tentang SiMadun - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('header')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Tentang SiMadun</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ route('index') }}">Beranda</a><i class="fa fa-angle-double-right"></i><span>Tentang SiMadun</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="text-container">
                        <h3>APA ITU SIMADUN?</h3>
                        <p>SIMADUN (Sistem Informasi Media di Madiun) merupakan inovasi dari Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Madiun, dalam rangka menjalankan tugas kerjasama media Pemerintah Kabupaten Madiun dengan media partner, secara transparan, efektif dan efisien.</p>
                        <p>Selain itu SIMADUN diharap dapat memenuhi kebutuhan atas data yang akurat, terbuka, dan interoperabel atau mudah dibagi pakaikan kepada masyarakat Magetan terkait perusahaan media, wartawan maupun kegiatan kejurnalistikan.</p>
                    </div> <!-- end of text-container-->
                    
                    <div class="text-container">
                        <h4>Kegunaan SIMADUN</h4>
                        <p>Aplikasi SiMadun memiliki beberapa kegunaan, antara lain:</p>
                        <ol class="li-space-lg">
                            <b><li>Bagi Perusahaan Media dan Wartawan</li></b>
                            <ul class="list-unstyled li-space-lg indent">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Mengefektifkan perusahaan media untuk mengajukan kerjasama dengan pemerintah daerah.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Memberikan wadah bagi wartawan yang bertugas di Kabupaten Madiun mempublikasikan karya jurnalistik.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Sebagai monitor keaktifan dari wartawan dan perusahaan media yang menjalankan aktivitas jurnalistik di Kabupaten Madiun.</div>
                                </li>
                            </ul>
                            <b><li>Bagi Pemerintah Kabupaten Madiun</li></b>
                            <ul class="list-unstyled li-space-lg indent">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Mengefektifan Pemkab. Madiun dalam melakukan pendataan perusahaan media dan wartawan yang menjalankan aktivitas jurnalistik di Kabupaten Madiun.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Mengefektifan Pemkab. Madiun melakukan kerjasama dengan perusahaan media yang menjalankan aktivitas jurnalistik di Kabupaten Madiun.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Sebagai monitor keaktifan dari wartawan dan perusahaan media yang menjalankan aktivitas jurnalistik di Kabupaten Madiun.</div>
                                </li>
                            </ul>
                            <b><li>Bagi Masyarakat Kabupaten Madiun</li></b>
                            <ul class="list-unstyled li-space-lg indent">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Untuk mengetahui keaktifan dari wartawan dan perusahaan media yang menjalankan aktivitas jurnalistik di Kabupaten Madiun.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Untuk mendapatkan informasi (berita) terkait Kabupaten Madiun.</div>
                                </li>
                            </ul>
                        </ol>
                    </div> <!-- end of text-container -->

                    <div class="text-container">
                        <h4>Mekanisme Bekerjasama dengan Pemerintah Kabupaten Madiun</h4>
                        <div class="row">
                            <ul class="list-unstyled li-space-lg indent">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Perusahaan media melakukan registrasi pada SIMADUN</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Perusahaan media memenuhi persyaratan dan ketentuan dari Pemkab Madiun.</div>
                                </li>
                            </ul>
                        </div> <!-- end of row -->
                    </div> <!-- end of text-container-->
                     
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ route('index') }}">Beranda</a><i class="fa fa-angle-double-right"></i><span>Tentang SiMadun</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
@endsection