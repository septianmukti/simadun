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
                <h4>Semua Pengajuan Kerjasama </h4><span>Semua Pengajuan Kerjasama Media dan Dinas Komunikasi dan Informatika Kabupaten Madiun.</span>
              </div>
              <div class="card-body">
                @include('../components/notif')
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
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($pengajuan as $pengajuans)
                      <tr>
                        <td>{{ $no++ }}.</td>
                        <td>{{ $pengajuans->email }}</td>
                        <td>{{ $pengajuans->nama_perusahaan }}</td>
                        <td>{{ $pengajuans->user_jenis_perusahaan }}</td>
                        <td>{{ $pengajuans->media_name }}</td>
                        <td>{{ $pengajuans->created_at }}</td>
                        <td>
                          @if ($pengajuans->status == 'proses')
                          <span class="badge badge-warning">{{strtoupper($pengajuans->status)}}</span>
                          @elseif ($pengajuans->status == 'ditolak')
                          <span class="badge badge-danger">{{strtoupper($pengajuans->status)}}</span>
                          @elseif ($pengajuans->status == 'disetujui')
                          <span class="badge badge-success">{{strtoupper($pengajuans->status)}}</span>
                          @endif
                        </td>
                        <td>
                          <a class="btn btn-xs btn-outline-primary-2x" type="button" title="Lihat" href="{{ route('detail.verif.pengajuan', $pengajuans->id) }}">Lihat</a>
                          <form action="{{ route('delete.pengajuan', $pengajuans->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a type="submit" onclick="return false" class="btn btn-xs btn-outline-danger-2x delete-confirm" data-toggle="tooltip" title='Hapus'>Hapus</a>
                          </form>
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
      $("#pengajuan-list").DataTable();
    </script>
    <script type="text/javascript">
      $('.delete-confirm').on('click', function (e) {
        e.preventDefault();
        let form = $(this).closest('form');
        swal({
          title: `Anda Yakin?`,
          text: "Pengajuan yang dihapus tidak dapat dikembalikan.",
          icon: "error",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
      });
    </script>
@endsection