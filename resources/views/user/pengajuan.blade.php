@extends('../layouts/admin/main')

@section('tittle')
    <title>Semua Pengajuan Kerjasama - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
      <h4 class="f-w-700">Semua Pengajuan Kerjasama</h4>
      <nav>
        <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
          <li class="breadcrumb-item"><a href="{{ route('view-dashboard') }}"> <i data-feather="home"> </i></a></li>
          <li class="breadcrumb-item f-w-400 active">Semua Pengajuan Kerjasama</li>
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
                <h4>Semua Pengajuan Kerjasama </h4><span>Semua Pengajuan Kerjasama Media anda dan Dinas Komunikasi dan Informatika Kabupaten Madiun.</span>
              </div>
              <div class="card-body">
                @include('../components/notif')
                @if ($pengajuan->isEmpty())
                <a class="btn btn-success mb-3" type="button" data-bs-toggle="tooltip" title="Buat Pengajuan" href="{{ route('view-form-pengajuan') }}">Buat Pengajuan</a>
                @endif
                <div class="table-responsive theme-scrollbar">
                  <table class="display" id="pengajuan-list">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Email</th>
                        <th>Nama Perusahaan</th>
                        <th>Jenis Perusahaan</th>
                        <th>Nama Media</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status Pengajuan</th>
                        <th class="text-center" data-orderable="false">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($pengajuan as $pengajuans)
                      <tr>
                        <td>{{ $no++ }}.</td>
                        <td>{{ Auth::user()->email }}</td>
                        <td>{{ Auth::user()->nama_perusahaan }}</td>
                        <td>{{ Auth::user()->jenis_perusahaan }}</td>
                        <td>{{ Auth::user()->media_name }}</td>
                        <td>{{ $pengajuans->created_at }}</td>
                        <td>
                          @if ($pengajuans->status == 'proses')
                          <span class="badge badge-warning">{{strtoupper($pengajuans->status)}}</span>
                          @elseif ($pengajuans->status == 'ditolak')
                          <span class="badge badge-danger">{{strtoupper($pengajuans->status)}}</span>
                          @elseif ($pengajuans->status == 'disetujui')
                          <span class="badge badge-success">{{strtoupper($pengajuans->status)}}</span>
                          @elseif ($pengajuans->status == 'perbaikan')
                          <span class="badge badge-secondary">{{strtoupper($pengajuans->status)}}</span>
                          @endif
                        </td>
                        <td class="text-center">
                          <a class="btn btn-pill btn-outline-primary btn-air-primary btn-sm m-b-5" type="button" title="Lihat" href="{{ route('lihat-pengajuan', $pengajuans->id) }}">Lihat</a>
                          @if ($pengajuans->status == 'proses')
                          <a href="{{ route('delete.pengajuan', $pengajuans->id) }}" class="btn btn-pill btn-outline-danger btn-air-danger btn-sm btn-hapus" data-toggle="tooltip" title='Hapus'>Hapus</a>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
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
      $(document).ready(function() {
        // Inisialisasi DataTable
        $("#pengajuan-list").DataTable();

        // Konfirmasi hapus
        $(document).on('click', '.btn-hapus', function(ev) {
          ev.preventDefault();
          const urlToRedirect = $(this).attr('href');

          swal({
            title: "Anda Yakin?",
            text: "Pengajuan yang dihapus tidak dapat dikembalikan.",
            icon: "warning",
            buttons: {
              cancel: "Batal",
              confirm: {
                text: "Ya, Hapus!",
                value: true,
                visible: true,
                className: "btn-danger"
              }
            },
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajaxSetup({
                headers: {
                  "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
              });

              $.ajax({
                type: "DELETE",
                url: urlToRedirect,
                success: function(data) {
                  sessionStorage.setItem('deleted', 'true');
                  location.reload();
                },
                error: function(xhr, status, error) {
                  swal("Gagal!", "Terjadi kesalahan saat menghapus: " + error, "error");
                }
              });
            }
          });
        });

        // Reload setelah hapus
        if (sessionStorage.getItem('deleted') === 'true') {
          swal("Sukses!", "Pengajuan berhasil dihapus.", "success");
          sessionStorage.removeItem('deleted');
        }
      });
    </script>
@endsection