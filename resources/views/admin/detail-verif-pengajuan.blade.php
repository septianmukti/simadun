@extends('../layouts/admin/main')

@section('tittle')
    <title>Detail Verifikasi Pengajuan Kerjasama - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
      <h4 class="f-w-700">Detail Pengajuan Kerjasama</h4>
      <nav>
        <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
          <li class="breadcrumb-item"><a href="{{ route('view-dashboard') }}"> <i data-feather="home"> </i></a></li>
          <li class="breadcrumb-item f-w-400 active">Detail Verifikasi Pengajuan Kerjasama</li>
        </ol>
      </nav>
    </div>
@endsection

@section('page-body')
    <div class="page-body">
      <!-- Container-fluid starts-->
      <div class="container-fluid dashboard-4">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header card-no-border pb-0">
                <div class="header-top">
                  <h4>Detail Verifikasi Pengajuan Kerjasama Media</h4>
                </div>
              </div>
              <div class="card-body p-0 featured-table">
                <div class="table-responsive theme-scrollbar">
                  <table class="table display" id="detail-pengajuan" style="width:100%">
                    <thead>
                      <tr>
                        <th class="text-center">No.</th>
                        <th>Nama Dokumen</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1.</td>
                        <td>Surat Permohonan Kerjasama kepada Kepala Dinas</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.kerjasama', $pengajuan->surat_permohonan_kerjasama)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">2.</td>
                        <td>Akta Pendirian dan Perubahan Terakhir Perusahaan</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('akta.pendirian', $pengajuan->akta_pendirian_dan_perubahan)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">3.</td>
                        <td>Bukti Pengesahan dari Kemenkumham</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('bukti.pengesahan', $pengajuan->bukti_pengesahan)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">4.</td>
                        <td>NIB/SIUP/SITU</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('nib.siup.situ', $pengajuan->nib_siup_situ)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">5.</td>
                        <td>Surat Keterangan Domisili Perusahaan</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('sk.domisili.perusahaan', $pengajuan->sk_domisili_perusahaan)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">6.</td>
                        <td>NPWP Perusahaan</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('npwp.perusahaan', $pengajuan->npwp_perusahaan)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">7.</td>
                        <td>SPT Tahun Terakhir</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('spt', $pengajuan->spt_terakhir)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">8.</td>
                        <td>Daftar Harga</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('harga', $pengajuan->daftar_harga)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">9.</td>
                        <td>Referend dan Rekening Bank milik Perusahaan</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('referend.rekening', $pengajuan->referend_dan_rekening_bank)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">10.</td>
                        <td>Surat tugas dari perusahaan kepada wartawan yang bertugas</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.tugas', $pengajuan->surat_tugas)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">11.</td>
                        <td>Kartu Pers wartawan yang bertugas</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('kartu.pers', $pengajuan->kartu_pers)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">12.</td>
                        <td>Surat Pernyataan nama Penanggungjawab</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.penanggungjawab', $pengajuan->surat_pernyataan_penanggungjawab)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">13.</td>
                        <td>Surat Kuasa apabila penanggungjawab selain pimpinan</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.kuasa', $pengajuan->surat_kuasa)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">14.</td>
                        <td>Sertifikat Verifikasi Dewan Pers</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('sertifikat.pers', $pengajuan->sertifikat_verif_dewan_pers)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">15.</td>
                        <td>Surat Pernyataan kelengkapan yang dikumpulkan benar adanya</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.kebenaran', $pengajuan->surat_pernyataan_kebenaran)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">16.</td>
                        <td>Link e-Katalog</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Kunjungi Katalog" target="_blank" href="{{ url($pengajuan->link_e_katalog) }}">Lihat</a>
                        </td>
                      </tr>
                      @if($pengajuan->user_jenis_perusahaan == 'media-cetak')
                      <tr>
                        <td class="text-center">17.</td>
                        <td>Surat Pernyataan selama 3 Bulan Terakhir Media Cetak</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('pernyataan.media.cetak', $pengajuan->surat_pernyataan_media_cetak)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">18.</td>
                        <td>Surat Pernyataan Jumlah Oplah per Sekali Terbit</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('pernyataan.oplah', $pengajuan->surat_pernyataan_jumlah_oplah)}}">Lihat</a>
                        </td>
                      </tr>
                      @elseif($pengajuan->user_jenis_perusahaan == 'media-elektronik')
                      <tr>
                        <td class="text-center">17.</td>
                        <td>Izin Penyelenggaraan Siaran Media Elektronik</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('surat.izin', $pengajuan->izin_siaran_media_elektronik)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">18.</td>
                        <td>Surat Pernyataan bahwa siaran dapat diakses masyarakat</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('pernyataan.media.elektronik', $pengajuan->surat_pernyataan_media_elektronik)}}">Lihat</a>
                        </td>
                      </tr>
                      @elseif($pengajuan->user_jenis_perusahaan == 'media-siber')
                      <tr>
                        <td class="text-center">17.</td>
                        <td>Surat Pernyataan Perusahaan Bergerak di Bidang Media Online/Siber</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('pernyataan.media.siber', $pengajuan->surat_pernyataan_media_siber)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">18.</td>
                        <td>Screenshoot URL dan Halaman Utama Web, dan Data Perusahaan Media Online/Siber</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('screenshoot.web', $pengajuan->screenshoot_perusahaan_media_siber)}}">Lihat</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">19.</td>
                        <td>Screenshoot Data Pengunjung Web Berdasarkan Situs similarweb.com atau lainnya</td>
                        <td>
                          <a class="btn btn-sm btn-outline-primary-2x" type="button" title="Lihat Dokumen" target="_blank" href="{{route('screenshoot.data.pengunjung', $pengajuan->screenshoot_data_pengunjung_web)}}">Lihat</a>
                        </td>
                      </tr>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col">
                    <div class="text-end">
                      @if ($pengajuan->status == 'ditolak' || $pengajuan->status == 'proses')
                      <form action="{{ route('approved.pengajuan', $pengajuan->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('PUT')
                        <a type="submit" onclick="return false" class="btn btn-success me-1 approved-confirm" data-toggle="tooltip" title='Setujui'>Setujui</a>
                      </form>
                      @elseif ($pengajuan->status == 'disetujui' || $pengajuan->status == 'proses')
                      <form action="{{ route('reject.pengajuan', $pengajuan->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('PUT')
                        <a type="submit" onclick="return false" class="btn btn-danger me-1 reject-confirm" data-toggle="tooltip" title='Tolak'>Tolak</a>
                      </form>
                      @endif
                      <a class="btn btn-secondary" href="{{ route('list.verif.pengajuan') }}">Kembali</a>
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
      $('.approved-confirm').on('click', function (e) {
        e.preventDefault();
        let form = $(this).closest('form');
        swal({
          title: `Setujui Pengajuan?`,
          text: "Anda akan menyetujui pengajuan kerjasama ini.",
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
    <script type="text/javascript">
      $('.reject-confirm').on('click', function (e) {
        e.preventDefault();
        let form = $(this).closest('form');
        swal({
          title: `Tolak Pengajuan?`,
          text: "Anda akan menolak pengajuan kerjasama ini.",
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