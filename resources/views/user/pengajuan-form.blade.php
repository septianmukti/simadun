@extends('../layouts/admin/main')

@section('tittle')
    <title>Formulir Pengajuan Kerjasama - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700">Formulir Pengajuan Kerjasama</h4>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('view-dashboard') }}"> <i data-feather="home"> </i></a></li>
                <li class="breadcrumb-item f-w-400">Pengajuan</li>
                <li class="breadcrumb-item f-w-400 active">Formulir Pengajuan Kerjasama</li>
            </ol>
        </nav>
    </div>
@endsection

@section('page-body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Upload Dokumen Pengajuan Kerjasama</h4>
                            <p class="mt-3 mb-1">* Dokumen yang akan diupload memiliki persyaratan sebagai berikut:</p>
                            <p class="mb-0 m-l-10">1. Dokumen harus berformat .pdf</p>
                            <p class="mb-0 m-l-10">2. Dokumen berukuran maksimal 3 MB</p>
                        </div>
                        <div class="card-body">
                            <div class="form theme-form">
                                <form method="POST" action="{{ route('upload-pengajuan') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">1. Surat Permohonan Kerjasama kepada Kepala Dinas</label>
                                                <input class="form-control btn-pill" name="surat_kerjasama" type="file" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">2. Akta Pendirian dan Perubahan Terakhir Perusahaan</label>
                                                <input class="form-control btn-pill" name="akta_pendirian" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">3. Bukti Pengesahan dari Kemenkumham</label>
                                                <input class="form-control btn-pill" name="bukti_pengesahan" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">4. NIB/SIUP/SITU</label>
                                                <input class="form-control btn-pill" name="nib_siup_situ" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">5. Surat Keterangan Domisili Perusahaan</label>
                                                <input class="form-control btn-pill" name="sk_domisili_perusahaan" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">6. NPWP Perusahaan</label>
                                                <input class="form-control btn-pill" name="npwp_perusahaan" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">7. SPT Tahun Terakhir</label>
                                                <input class="form-control btn-pill" name="spt" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">8. Daftar Harga</label>
                                                <input class="form-control btn-pill" name="harga" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">9. Referend dan Rekening Bank milik Perusahaan</label>
                                                <input class="form-control btn-pill" name="referend_rekening" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">10. Surat tugas dari perusahaan kepada wartawan yang bertugas</label>
                                                <input class="form-control btn-pill" name="surat_tugas" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">11. Kartu Pers wartawan yang bertugas</label>
                                                <input class="form-control btn-pill" name="kartu_pers" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">12. Surat Pernyataan nama Penanggungjawab</label>
                                                <input class="form-control btn-pill" name="surat_penanggungjawab" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">13. Surat Kuasa apabila penanggungjawab selain pimpinan</label>
                                                <input class="form-control btn-pill" name="surat_kuasa" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">14. Sertifikat Verifikasi Dewan Pers</label>
                                                <input class="form-control btn-pill" name="sertifikat_pers" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">15. Surat Pernyataan kelengkapan yang dikumpulkan benar adanya</label>
                                                <input class="form-control btn-pill" name="surat_kebenaran" type="file" required="">
                                                <div class="invalid-feedback">Invalid form file selected</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>16. Masukkan Link e-Katalog</label>
                                                <input class="form-control btn-pill" name="link_katalog" type="text" placeholder="Masukkan Link e-Katalog" required="">
                                                <div class="invalid-feedback">Invalid select feedback</div>
                                            </div>
                                        </div>
                                        @if(Auth::user()->jenis_perusahaan == 'media-cetak')
                                        <div class="row">
                                            <h4 class="mb-3 mt-3">Upload Dokumen Ketentuan Khusus Media Cetak</h4>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Surat Pernyataan selama 3 Bulan Terakhir Media Cetak</label>
                                                    <input class="form-control btn-pill" name="pernyataan_media_cetak" type="file" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Surat Pernyataan Jumlah Oplah per Sekali Terbit</label>
                                                    <input class="form-control btn-pill" name="pernyataan_oplah" type="file" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif(Auth::user()->jenis_perusahaan == 'media-elektronik')
                                        <div class="row">
                                            <h4 class="mb-3 mt-3">Upload Dokumen Ketentuan Khusus Media Elektronik</h4>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Izin Penyelenggaraan Siaran Media Elektronik</label>
                                                    <input class="form-control btn-pill" name="surat_izin" type="file" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Surat Pernyataan bahwa siaran dapat diakses masyarakat</label>
                                                    <input class="form-control btn-pill" name="pernyataan_media_elektronik" type="file" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif(Auth::user()->jenis_perusahaan == 'media-siber')
                                        <div class="row">
                                            <h4 class="mb-3 mt-3">Upload Dokumen Ketentuan Khusus Media Siber</h4>
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Surat Pernyataan Perusahaan Bergerak di Bidang Media Online/Siber</label>
                                                    <input class="form-control btn-pill" name="pernyataan_media_siber" type="file" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Screenshoot URL dan Halaman Utama Web, dan Data Perusahaan Media Online/Siber</label>
                                                    <input class="form-control btn-pill" name="screenshoot_web" type="file" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Screenshoot Data Pengunjung Web Berdasarkan Situs similarweb.com atau lainnya</label>
                                                    <input class="form-control btn-pill" name="screenshoot_data_pengunjung" type="file" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <button class="btn btn-success me-3" type="submit">Upload Dokumen Pengajuan</button>
                                                <a class="btn btn-danger" href="{{ route('view-pengajuan') }}">Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection