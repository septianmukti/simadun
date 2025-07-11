@extends('../web/layouts/base')

@section('tittle')
    <title>Syarat dan Ketentuan - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('header')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Syarat dan Ketentuan</h1>
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
                        <a href="{{ route('index') }}">Beranda</a><i class="fa fa-angle-double-right"></i><span>Syarat dan Ketentuan</span>
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
                        <h3 class="text-center">PERSYARATAN KUALIFIKASI<br>MEDIA CETAK, MEDIA SIBER DAN MEDIA ELEKTRONIK</h3>
                        <br>
                        <p>Berikut ini merupakan persyaratan kualifikasi untuk media cetak, media siber, dan media elektronik :</p>
                    </div> <!-- end of text-container-->
                    <div class="text-container">
                        <h5>I. KUALIFIKASI MEDIA CETAK</h5>
                        <ol class="li-space-lg">
                            <li>Memiliki badan hukum sebagai perusahaan pers. Bergerak di bidang usaha Media Pers dan tidak dicampur dengan usaha lain (sesuai dengan Undang Undang Nomor 40 Tahun 1999 tentang Pers dan Surat Edaran Dewan Pers Nomor 1/SE-DP/I/2014 tentang elaksanaan Undang-Undang Pers dan Standar Perusahaan Pers harus berbentuk Perseroan Terbatas (PT), Yayasan atau Koperasi.</li>
                            <li>Kelengkapan Administrasi Perusahaan atau Penerbit yaitu :</li>
                            <ol class="li-space-lg" style="list-style-type:lower-alpha">
                                <li>Surat penawaran;</li>
                                <li>Akta pendirian dan perubahan terakhir perusahaan;</li>
                                <li>Bukti pengesahan dari Kemenkumham;</li>
                                <li>Surat Izin Usaha Perdagangan (SIUP) yang bergerak pada Barang Jasa Dagangan Utama Percetakan/Hasil Cetakan dan Tanda Daftar Perusahaan (TDP) pada Bidang Penerbitan Surat Kabar, Jurnal dan Buletin atau Majalah. Sesuai Klasifikasi Baku Lapangan Usaha Indonesia (KBLI). Atau Nomor Induk Berusaha (NIB) menggantikan SIUP dan TDP;</li>
                                <li>Surat Izin Tempat Usaha (SITU);</li>
                                <li>Surat Keterangan Domisili Perusahaan;</li>
                                <li>Nomor Pokok Wajib Pajak (NPWP) Perusahaan;</li>
                                <li>SPT Tahun Terakhir Perusahaan;</li>
                                <li>Referensi Bank dan Nomor Rekening Bank Milik Perusahaan;</li>
                                <li>Media Sosial Perusahaan. (Facebook, Instagram, Tweeter, Tik-tok, Youtube).</li>
                            </ol>
                            <li>Surat pernyataan dari Pimpinan Redaksi/Pimpinan Perusahaan yang menyatakan  bahwa berapa oplah dalam satu tahunnya, selama 3 (tiga) bulan terakhir media/koran tidak pernah putus dalam penerbitannya;</li>
                            <li>Fotocopy Kartu Wartawan dan nomor telepon wartawan yang dapat dihubungi</li>
                            <li>Menunjukkan bukti asli/atau yang telah dilegalisir oleh Pejabat yang berwenang bermaterai.</li>
                        </ol>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <h5>II. KUALIFIKASI MEDIA SIBER</h5>
                        <ol class="li-space-lg">
                            <li>Memiliki badan hukum sebagai perusahaan pers. Bergerak di bidang usaha Media Pers dan tidak dicampur dengan usaha lain (sesuai dengan Undang Undang Nomor 40 Tahun 1999 tentang Pers dan Surat Edaran Dewan Pers Nomor 1/SE-DP/I/2014 tentang Pelaksanaan Undang-Undang Pers dan Standar Perusahaan Pers harus berbentuk Perseroan Terbatas (PT), Yayasan atau Koperasi.</li>
                            <li>Kelengkapan/Dokumen administrasi perusahaan atau penerbit, yaitu :</li>
                            <ol class="li-space-lg" style="list-style-type:lower-alpha">
                                <li>Surat penawaran;</li>
                                <li>Akta pendirian dan perubahan terakhir perusahaan;</li>
                                <li>Surat Izin Usaha Perdagangan (SIUP) yang bergerak pada Barang Jasa Dagangan Utama Percetakan/Hasil Cetakan dan Tanda Daftar Perusahaan (TDP) pada Bidang Media Siber. Sesuai Klasifikasi Baku Lapangan Usaha Indonesia (KBLI). Atau Nomor Induk Berusaha (NIB) menggantikan SIUP dan TDP;</li>
                                <li>Surat Izin Tempat Usaha (SITU);</li>
                                <li>Email perusahaan;</li>
                                <li>Alamat website; </li>
                                <li>Data pengunjung (Visitor) website berdasarkan situs similarweb.com;</li>
                                <li>Surat keterangan domisili perusahaan;</li>
                                <li>Nomor Pokok Wajib Pajak (NPWP) Perusahaan;</li>
                                <li>SPT Tahun Terakhir Perusahaan;</li>
                                <li>Referensi Bank dan Nomor Rekening Bank milik Perusahaan;</li>
                                <li>Profil Perusahaan Pers.</li>
                            </ol>
                            <li>Bukti pencantuman penampilan Home, nama penanggung jawab, dan data perusahaan media Siber sesuai Peraturan Dewan Pers No.1/Peraturan DP/III/2012 tentang Pedoman Pemberitaan Media Siber;</li>
                            <li>Surat pernyataan bahwa perusahaan yang bergerak di bidang media siber hanya untuk satu penerbitan media siber;</li>
                            <li>Data lalulintas situs web media;</li>
                            <li>Media Sosial Perusahaan. (Facebook, Instagram, Twitter, Tiktok, Youtube);</li>
                            <li>Fotocopy Kartu Wartawan dan nomor telepon wartawan yang dapat dihubungi;</li>
                            <li>Menunjukkan bukti asli/atau yang telah dilegalisir oleh Pejabat yang berwenang bermaterai.</li>
                        </ol>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <h5>III. KUALIFIKASI MEDIA ELEKTRONIK</h5>
                        <ol class="li-space-lg">
                            <li>Memiliki Izin Penyelenggaraan Penyiaran;</li>
                            <li>Kelengkapan/Dokumen administrasi perusahaan, yaitu :</li>
                            <ol class="li-space-lg" style="list-style-type:lower-alpha">
                                <li>Surat penawaran;</li>
                                <li>Akta pendirian dan perubahan terakhir perusahaan;</li>
                                <li>Surat Izin Usaha Perdagangan (SIUP) yang bergerak pada Barang Jasa  Dagangan Utama Percetakan/Hasil Cetakan dan Tanda Daftar Perusahaan (TDP) pada Bidang Media Elektronik. Sesuai Klasifikasi Baku Lapangan Usaha Indonesia (KBLI). Atau Nomor Induk Berusaha (NIB) menggantikan SIUP dan TDP;</li>
                                <li>Surat Izin Tempat Usaha (SITU);</li>
                                <li>Surat keterangan domisili perusahaan;</li>
                                <li>Nomor Pokok Wajib Pajak (NPWP) Perusahaan;</li>
                                <li>SPT Tahun Terakhir Perusahaan;</li>
                                <li>Referensi Bank dan Nomor Rekening Bank milik Perusahaan;</li>
                                <li>Profil Perusahaan Pers.</li>
                            </ol>
                            <li>Khusus media televisi, harus memiliki izin penyiaran, kalau tidak masuk ke media siber;</li>
                            <li>Media Sosial Perusahaan. (Facebook, Instagram, Twitter, Tiktok, Youtube);</li>
                            <li>Fotocopy Kartu Wartawan dan nomor telepon wartawan yang dapat dihubungi;</li>
                            <li>Menunjukkan bukti asli/atau yang telah dilegalisir oleh Pejabat yang berwenang bermaterai.</li>
                        </ol>
                    </div> <!-- end of text-container --> 
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
                        <a href="{{ route('index') }}">Beranda</a><i class="fa fa-angle-double-right"></i><span>Syarat dan Ketentuan</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
@endsection