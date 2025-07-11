@extends('../layouts/admin/main')

@section('tittle')
    <title>Detail Pengajuan Kerjasama - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
      <h4 class="f-w-700">Detail Pengajuan Kerjasama</h4>
      <nav>
        <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
          <li class="breadcrumb-item"><a href="{{ route('view-dashboard') }}"> <i data-feather="home"> </i></a></li>
          <li class="breadcrumb-item f-w-400 active">Detail Pengajuan Kerjasama</li>
        </ol>
      </nav>
    </div>
@endsection

@section('page-body')
    <div class="page-body">
      <!-- Container-fluid starts-->
      <div class="container-fluid default-dashboard">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header card-no-border pb-0">
                <div class="header-top">
                  <h4>Detail Pengajuan Kerjasama Media</h4>
                </div>
              </div>
              <div class="card-body p-10 projects">
                @if (session('success'))
                <div class="alert alert-light-success" role="alert">
                  <p class="txt-success"><b> Sukses! </b>{{ session('success') }}</p>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-light-danger" role="alert">
                  @foreach ($errors->all() as $error)
                  <p class="txt-danger">• {{ $error }}</p>
                  @endforeach
                </div>
                @endif
                <div class="table-responsive theme-scrollbar">
                  <table class="table display" id="detail-pengajuan" style="width:100%">
                    <thead>
                      <tr>
                        <th class="text-center">No.</th>
                        <th width="60%">Nama Dokumen</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1.</td>
                        <td>Surat Permohonan Kerja Sama kepada Kepala Dinas</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'surat_kerjasama', 'filename' => $pengajuan->surat_permohonan_kerjasama]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">2.</td>
                        <td>Akta Pendirian dan Perubahan Terakhir Perusahaan</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'akta_pendirian', 'filename' => $pengajuan->akta_pendirian_dan_perubahan]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">3.</td>
                        <td>Bukti Pengesahan dari Kemenkumham</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'bukti_pengesahan', 'filename' => $pengajuan->bukti_pengesahan]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">4.</td>
                        <td>NIB/SIUP/SITU</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'nib_siup_situ', 'filename' => $pengajuan->nib_siup_situ]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">5.</td>
                        <td>Surat Keterangan Domisili Perusahaan</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'sk_domisili_perusahaan', 'filename' => $pengajuan->sk_domisili_perusahaan]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">6.</td>
                        <td>NPWP Perusahaan</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'npwp_perusahaan', 'filename' => $pengajuan->npwp_perusahaan]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">7.</td>
                        <td>SPT Tahun Terakhir</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'spt', 'filename' => $pengajuan->spt_terakhir]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">8.</td>
                        <td>Daftar Harga</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'harga', 'filename' => $pengajuan->daftar_harga]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">9.</td>
                        <td>Referend dan Rekening Bank milik Perusahaan</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'referend_rekening', 'filename' => $pengajuan->referend_dan_rekening_bank]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">10.</td>
                        <td>Surat tugas dari perusahaan kepada wartawan yang bertugas</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'surat_tugas', 'filename' => $pengajuan->surat_tugas]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">11.</td>
                        <td>Kartu Pers wartawan yang bertugas</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'kartu_pers', 'filename' => $pengajuan->kartu_pers]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">12.</td>
                        <td>Surat Pernyataan nama Penanggungjawab</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'surat_penanggungjawab', 'filename' => $pengajuan->surat_pernyataan_penanggungjawab]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">13.</td>
                        <td>Surat Kuasa apabila penanggungjawab selain pimpinan</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'surat_kuasa', 'filename' => $pengajuan->surat_kuasa]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">14.</td>
                        <td>Sertifikat Verifikasi Dewan Pers</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'sertifikat_pers', 'filename' => $pengajuan->sertifikat_verif_dewan_pers]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">15.</td>
                        <td>Surat Pernyataan kelengkapan yang dikumpulkan benar adanya</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'surat_kebenaran', 'filename' => $pengajuan->surat_pernyataan_kebenaran]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">16.</td>
                        <td>Sertifikat Uji Kompetensi Wartawan (UKW) yang bertugas di Kabupaten Madiun</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'sertifikat_ukw', 'filename' => $pengajuan->sertifikat_ukw]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">17.</td>
                        <td>Link e-Katalog / V6</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Kunjungi Katalog" target="_blank" href="{{ url($pengajuan->link_e_katalog) }}">Lihat</a>
                        </td>
                      </tr>
                      @if($pengajuan->user_jenis_perusahaan == 'media-cetak')
                      <tr>
                        <td class="text-center">18.</td>
                        <td>Surat Pernyataan selama 3 Bulan Terakhir Media Cetak</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'pernyataan_media_cetak', 'filename' => $pengajuan->surat_pernyataan_media_cetak]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">19.</td>
                        <td>Surat Pernyataan Jumlah Oplah per Sekali Terbit</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'pernyataan_oplah', 'filename' => $pengajuan->surat_pernyataan_jumlah_oplah]) }}">Lihat</a>
                        </td>
                      </tr>
                      @elseif($pengajuan->user_jenis_perusahaan == 'media-elektronik')
                      <tr>
                        <td class="text-center">18.</td>
                        <td>Izin Penyelenggaraan Siaran Media Elektronik</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'surat_izin', 'filename' => $pengajuan->izin_siaran_media_elektronik]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">19.</td>
                        <td>Surat Pernyataan bahwa siaran dapat diakses masyarakat</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'pernyataan_media_elektronik', 'filename' => $pengajuan->surat_pernyataan_media_elektronik]) }}">Lihat</a>
                        </td>
                      </tr>
                      @elseif($pengajuan->user_jenis_perusahaan == 'media-siber')
                      <tr>
                        <td class="text-center">18.</td>
                        <td>Surat Pernyataan Perusahaan Bergerak di Bidang Media Online/Siber</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'pernyataan_media_siber', 'filename' => $pengajuan->surat_pernyataan_media_siber]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">19.</td>
                        <td>Screenshoot URL dan Halaman Utama Web, dan Data Perusahaan Media Online/Siber</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'screenshoot_web', 'filename' => $pengajuan->screenshoot_perusahaan_media_siber]) }}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">20.</td>
                        <td>Screenshoot Data Pengunjung Web Berdasarkan Situs similarweb.com atau lainnya</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{ route('download.file', ['folder' => 'screenshoot_data_pengunjung', 'filename' => $pengajuan->screenshoot_data_pengunjung_web]) }}">Lihat</a>
                        </td>
                      </tr>
                      @endif
                    </tbody>
                  </table>
                </div>        
              </div>
              <div class="card-footer"> 
                <div class="row">
                  <div class="col-sm-12">
                    <div class="mb-3">
                      <label>CATATAN *</label>
                      <textarea class="form-control input-air-primary" rows="5" disabled="">{{$pengajuan->catatan}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="text-end">
                      @if ($pengajuan->status == 'perbaikan')
                        <a class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target=".bd-upload-modal-lg">Perbaiki Dokumen</a>
                      @endif
                      <a class="btn btn-outline-primary-2x me-5" href="{{ route('view-pengajuan') }}">Kembali</a>
                    </div>
                    <div class="modal fade bd-upload-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModal" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="myExtraLargeModal">Upload Dokumen Baru</h4>
                            <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body dark-modal">
                            <div class="col-md-12">
                              <div class="mb-3">
                                <div class="large-modal-header mb-2"><i data-feather="chevrons-right"></i>
                                  <h5 class="f-w-600">Pilih jenis Dokumen yang akan diperbaiki :</h5>
                                </div>
                                <select class="form-select mb-3" name="file_type" required="" aria-label="select example" id="formType">
                                  <option value="">Pilih Jenis Dokumen</option>
                                  <option id="upload" value="1">Surat Permohonan Kerja Sama kepada Kepala Dinas</option>
                                  <option id="upload" value="2">Akta Pendirian dan Perubahan Terakhir Perusahaan</option>
                                  <option id="upload" value="3">Bukti Pengesahan dari Kemenkumham</option>
                                  <option id="upload" value="4">NIB/SIUP/SITU</option>
                                  <option id="upload" value="5">Surat Keterangan Domisili Perusahaan</option>
                                  <option id="upload" value="6">NPWP Perusahaan</option>
                                  <option id="upload" value="7">SPT Tahun Terakhir</option>
                                  <option id="upload" value="8">Daftar Harga</option>
                                  <option id="upload" value="9">Referend dan Rekening Bank milik Perusahaan</option>
                                  <option id="upload" value="10">Surat tugas dari perusahaan kepada wartawan yang bertugas</option>
                                  <option id="upload" value="11">Kartu Pers wartawan yang bertugas</option>
                                  <option id="upload" value="12">Surat Pernyataan nama Penanggungjawab</option>
                                  <option id="upload" value="13">Surat Kuasa apabila penanggungjawab selain pimpinan</option>
                                  <option id="upload" value="14">Sertifikat Verifikasi Dewan Pers</option>
                                  <option id="upload" value="15">Surat Pernyataan kelengkapan yang dikumpulkan benar adanya</option>
                                  <option id="upload" value="16">Sertifikat Uji Kompetensi Wartawan (UKW) yang bertugas di Kabupaten Madiun</option>
                                  <option id="text" value="17">Link e-Katalog / V6</option>
                                  @if($pengajuan->user_jenis_perusahaan == 'media-cetak')
                                  <option id="upload" value="18">Surat Pernyataan selama 3 Bulan Terakhir Media Cetak</option>
                                  <option id="upload" value="19">Surat Pernyataan Jumlah Oplah per Sekali Terbit</option>
                                  @elseif($pengajuan->user_jenis_perusahaan == 'media-elektronik')
                                  <option id="upload" value="20">Izin Penyelenggaraan Siaran Media Elektronik</option>
                                  <option id="upload" value="21">Surat Pernyataan bahwa siaran dapat diakses masyarakat</option>
                                  @elseif($pengajuan->user_jenis_perusahaan == 'media-siber')
                                  <option id="upload" value="22">Surat Pernyataan Perusahaan Bergerak di Bidang Media Online/Siber</option>
                                  <option id="upload" value="23">Screenshoot URL dan Halaman Utama Web, dan Data Perusahaan Media Online/Siber</option>
                                  <option id="upload" value="24">Screenshoot Data Pengunjung Web Berdasarkan Situs similarweb.com atau lainnya</option>
                                  @endif
                                </select>
                                <!-- Form Upload -->
                                <form id="uploadForm" action="{{ route('update-pengajuan') }}" method="POST" enctype="multipart/form-data"  style="display: none;">
                                    @csrf
                                    <div class="col-12 mb-3"> 
                                      <div class="large-modal-header mb-2"><i data-feather="chevrons-right"></i>
                                        <h5 class="f-w-600">Pilih File :</h5>
                                      </div>
                                      <input type="hidden" name="id" value="{{ $pengajuan->id }}">
                                      <input type="hidden" name="file_type" id="hiddenFileType">
                                      <input class="form-control" name="document_file" type="file" aria-label="Pilih File" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>
                                <!-- Form Text -->
                                <form id="textForm" action="{{ route('update-pengajuan') }}" method="POST" style="display: none;">
                                    @csrf
                                    <div class="col-12 mb-3">
                                      <div class="large-modal-header mb-2"><i data-feather="chevrons-right"></i>
                                        <h5 class="f-w-600">Masukkan Link Katalog Baru :</h5>
                                      </div>
                                      <input type="hidden" name="id" value="{{ $pengajuan->id }}">
                                      <input type="hidden" name="file_type" id="hiddenFileType">
                                      <input class="form-control" name="link_katalog" type="text" placeholder="Masukkan Link Katalog Baru" required="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
      $('#detail-pengajuan').DataTable({
        "ordering": false,
        "searchable": false,
        "paging": false,
        "info": false,
        "pageLength": 4
      });
    </script>
    <script>
      document.getElementById('formType').addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        const selectedId = selectedOption.id;
        const selectedValue = selectedOption.value;

        const uploadForm = document.getElementById('uploadForm');
        const textForm = document.getElementById('textForm');

          // Set hidden input value on both forms
          document.querySelectorAll('#hiddenFileType').forEach(input => {
              input.value = selectedValue;
          });

          if (selectedId === 'upload') {
              uploadForm.style.display = 'block';
              textForm.style.display = 'none';
          } else if (selectedId === 'text') {
              textForm.style.display = 'block';
              uploadForm.style.display = 'none';
          } else {
              uploadForm.style.display = 'none';
              textForm.style.display = 'none';
          }
      });
    </script>
@endsection