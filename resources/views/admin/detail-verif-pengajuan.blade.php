@extends('../layouts/admin/main')

@section('tittle')
    <title>Detail Verifikasi Pengajuan Kerja Sama - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
      <h4 class="f-w-700">Detail Pengajuan Kerja Sama</h4>
      <nav>
        <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
          <li class="breadcrumb-item"><a href="{{ route('view-dashboard') }}"> <i data-feather="home"> </i></a></li>
          <li class="breadcrumb-item f-w-400 active">Detail Verifikasi Pengajuan Kerja Sama</li>
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
              <form action="{{ route('simpan.pengajuan', $pengajuan->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('PUT')
                <div class="card-header card-no-border pb-0">
                  <div class="header-top">
                    @foreach ($media as $medias)
                    <h4>Detail Verifikasi Pengajuan Kerja Sama Media {{$medias->name}}</h4>
                    @endforeach
                  </div>
                </div>
                <div class="card-body p-10 projects">
                  <div class="table-responsive theme-scrollbar">
                    <table class="table display" id="detail-pengajuan" style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-center">No.</th>
                          <th width="60%">Nama Dokumen</th>
                          <th class="text-center">Aksi</th>
                          <th>Cheklist</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">1.</td>
                          <td>Surat Permohonan Kerja Sama kepada Kepala Dinas</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.kerjasama', $pengajuan->surat_permohonan_kerjasama)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="checkbox checkbox-dashed-success">
                              <input id="doc1" type="checkbox" value="" {{ ($checklist->is_surat_permohonan_kerjasama=="1")? "checked" : "" }}>
                              <label for="doc1">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">2.</td>
                          <td>Akta Pendirian dan Perubahan Terakhir Perusahaan</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('akta.pendirian', $pengajuan->akta_pendirian_dan_perubahan)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="checkbox checkbox-dashed-success">
                              <input id="doc2" type="checkbox" value="" {{ ($checklist->is_akta_pendirian_dan_perubahan==true)? "checked" : "" }}>
                              <label for="doc2">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">3.</td>
                          <td>Bukti Pengesahan dari Kemenkumham</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('bukti.pengesahan', $pengajuan->bukti_pengesahan)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="checkbox checkbox-dashed-success">
                              <input id="doc3" type="checkbox" value="" {{ ($checklist->is_bukti_pengesahan==true)? "checked" : "" }}>
                              <label for="doc3">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">4.</td>
                          <td>NIB Berbasis Risiko/SIUP/SITU</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('nib.siup.situ', $pengajuan->nib_siup_situ)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">5.</td>
                          <td>Surat Keterangan Domisili Perusahaan</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('sk.domisili.perusahaan', $pengajuan->sk_domisili_perusahaan)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">6.</td>
                          <td>NPWP Perusahaan</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('npwp.perusahaan', $pengajuan->npwp_perusahaan)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">7.</td>
                          <td>SPT Tahun Terakhir</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('spt', $pengajuan->spt_terakhir)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">8.</td>
                          <td>Daftar Harga</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('harga', $pengajuan->daftar_harga)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">9.</td>
                          <td>Referend dan Rekening Bank milik Perusahaan</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('referend.rekening', $pengajuan->referend_dan_rekening_bank)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">10.</td>
                          <td>Surat tugas dari perusahaan kepada wartawan yang bertugas</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.tugas', $pengajuan->surat_tugas)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">11.</td>
                          <td>Kartu Pers wartawan yang bertugas</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('kartu.pers', $pengajuan->kartu_pers)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">12.</td>
                          <td>Surat Pernyataan nama Penanggung jawab</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.penanggungjawab', $pengajuan->surat_pernyataan_penanggungjawab)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">13.</td>
                          <td>Surat Kuasa apabila penanggung jawab selain pimpinan</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.kuasa', $pengajuan->surat_kuasa)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">14.</td>
                          <td>Sertifikat Verifikasi Dewan Pers</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('sertifikat.pers', $pengajuan->sertifikat_verif_dewan_pers)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">15.</td>
                          <td>Surat Pernyataan kelengkapan yang dikumpulkan benar adanya</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.kebenaran', $pengajuan->surat_pernyataan_kebenaran)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">16.</td>
                          <td>Sertifikat Uji Kompetensi Wartawan (UKW) yang bertugas di Kabupaten Madiun</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('sertifikat.ukw', $pengajuan->sertifikat_ukw)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">17.</td>
                          <td>Link e-Katalog / 6</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Kunjungi Katalog" target="_blank" href="{{ url($pengajuan->link_e_katalog) }}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        @if($pengajuan->user_jenis_perusahaan == 'media-cetak')
                        <tr>
                          <td class="text-center">18.</td>
                          <td>Surat Pernyataan selama 3 Bulan Terakhir Media Cetak</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('pernyataan.media.cetak', $pengajuan->surat_pernyataan_media_cetak)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">19.</td>
                          <td>Surat Pernyataan Jumlah Oplah per Sekali Terbit</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('pernyataan.oplah', $pengajuan->surat_pernyataan_jumlah_oplah)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        @elseif($pengajuan->user_jenis_perusahaan == 'media-elektronik')
                        <tr>
                          <td class="text-center">18.</td>
                          <td>Izin Penyelenggaraan Siaran Media Elektronik</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.izin', $pengajuan->izin_siaran_media_elektronik)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">19.</td>
                          <td>Surat Pernyataan bahwa siaran dapat diakses masyarakat</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('pernyataan.media.elektronik', $pengajuan->surat_pernyataan_media_elektronik)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        @elseif($pengajuan->user_jenis_perusahaan == 'media-siber')
                        <tr>
                          <td class="text-center">18.</td>
                          <td>Surat Pernyataan Perusahaan Bergerak di Bidang Media Online/Siber</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('pernyataan.media.siber', $pengajuan->surat_pernyataan_media_siber)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">19.</td>
                          <td>Screenshoot URL dan Halaman Utama Web, dan Data Perusahaan Media Online/Siber</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('screenshoot.web', $pengajuan->screenshoot_perusahaan_media_siber)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">20.</td>
                          <td>Screenshoot Data Pengunjung Web Berdasarkan Situs similarweb.com atau lainnya</td>
                          <td class="text-center">
                            <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('screenshoot.data.pengunjung', $pengajuan->screenshoot_data_pengunjung_web)}}">Lihat</a>
                          </td>
                          <td>
                            <div class="form-check checkbox checkbox-dashed-success">
                              <input class="form-check-input" type="checkbox" value="">
                              <label class="form-check-label">OK</label>
                            </div>
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
                        <label>** CATATAN</label>
                        <textarea class="form-control input-air-primary" name="catatan" placeholder="Masukkan Catatan" rows="5">{{$pengajuan->catatan}}</textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="mb-3">
                        <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                          <h6 class="sub-title">Pilih Status Pengajuan</h6>
                          <div class="form-check radio radio-success">
                            <input class="form-check-input" id="radio55" type="radio" name="status" value="disetujui" {{ ($pengajuan->status=="disetujui")? "checked" : "" }}>
                            <label class="form-check-label" for="radio55">Setuju </label>
                          </div>
                          <div class="form-check radio radio-danger">
                            <input class="form-check-input" id="radio44" type="radio" name="status" value="ditolak" {{ ($pengajuan->status=="ditolak")? "checked" : "" }}>
                            <label class="form-check-label" for="radio44">Tolak </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="text-end">
                        <a type="submit" onclick="return false" class="btn btn-success me-1 confirm" data-toggle="tooltip" title='Simpan'>Simpan</a>
                        <a class="btn btn-secondary" href="{{ route('list.verif.pengajuan') }}">Kembali</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
      $('#detail-pengajuan').DataTable({
        "ordering": false,
        "searchable": false,
        "paging": false,
        "info": false,
        "pageLength": 20
      });
    </script>
    <script type="text/javascript">
      $('.confirm').on('click', function(e) {
        e.preventDefault();
        let form = $(this).closest('form');
        swal({
            title: `Simpan Pengajuan?`,
            text: "Pengajuan telah selesai di verifikasi dan akan di dimpan.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willApproved) => {
            if (willApproved) {
              form.submit();
            }
          });
      });
    </script>
@endsection