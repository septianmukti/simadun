@extends('../layouts/admin/main')

@section('tittle')
    <title>Akun Aktif - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatable-extension.css') }}">
@endsection

@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
      <h4 class="f-w-700">Akun Aktif</h4>
      <nav>
        <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
          <li class="breadcrumb-item"><a href="{{ route('view-dashboard') }}"> <i data-feather="home"> </i></a></li>
          <li class="breadcrumb-item f-w-400 active">Akun Aktif</li>
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
                <h4>Akun Aktif </h4><span>Semua Akun dibawah ini merupakan semua Akun yang telah aktif di Aplikasi SiMadun dan sudah di Approve/Setujui oleh Admin.</span>
              </div>
              <div class="card-body">
                <div class="table-responsive theme-scrollbar">
                  <table class="display" id="list-account-active">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Lengkap Wartawan</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Nama Media</th>
                        <th>Status Akun</th>
                        <th>Tanggal Approve</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($useractive as $active)
                      <tr>
                        <td>{{ $no++ }}.</td>
                        <td>{{ucfirst($active->name)}}</td>
                        <td>{{$active->email}}</td>
                        <td>{{$active->no_hp}}</td>
                        <td>{{$active->media_name}}</td>
                        <td> <span class="badge badge-success">{{ucfirst($active->account_status)}}</span></td>
                        <td>{{$active->updated_at}}</td>
                        <td>
                          @if ($active->role == 'user')
                          <span class="badge badge-light-success">{{ucfirst($active->role)}}</span>
                          @elseif ($active->role == 'admin')
                          <span class="badge badge-light-danger">{{ucfirst($active->role)}}</span>
                          @endif
                        </td>
                        <td>
                          @if ($active->role === 'user')
                          <ul class="action">
                            <li class="edit">
                              <a href="#" class="btn btn-xs btn-outline-secondary btn-air-secondary" data-toggle="tooltip" title="Edit">Edit</a>
                            </li>
                            <li>
                              <a href="{{ route('delete.aktif.akun', $active->id) }}" class="btn btn-xs btn-outline-danger btn-air-danger btn-delete" data-toggle="tooltip" title="Hapus">Hapus</a>
                            </li>
                          </ul>
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
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>

    <script>
      $(document).ready(function () {
        // Inisialisasi DataTables
        const table = $("#list-account-active").DataTable({
          dom: "Bfrtip",
          buttons: [
            {
              extend: 'copy',
              text: '<i class="fa fa-copy"></i> Copy',
              titleAttr: 'Salin ke clipboard'
            },
            {
              extend: 'excelHtml5',
              text: '<i class="fa fa-file-excel-o"></i> Excel',
              titleAttr: 'Ekspor ke Excel'
            },
            {
              extend: 'pdfHtml5',
              text: '<i class="fa fa-file-pdf-o"></i> PDF',
              titleAttr: 'Ekspor ke PDF'
            }
          ],
          language: {
            emptyTable: "Tidak ada data yang tersedia.",
            zeroRecords: "Tidak ditemukan data yang sesuai.",
          }
        });
        // Konfirmasi hapus
        $(document).on('click', '.btn-delete', function(ev) {
          ev.preventDefault();
          const urlToRedirect = $(this).attr('href');
          swal({
            title: "Hapus akun ini?",
            text: "Data kerjasama yang sudah diupload juga akan dihapus.",
            icon: "error",
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
        if (sessionStorage.getItem('deleted') === 'true') {
          swal("Sukses!", "Akun telah berhasil dihapus.", "success");
          sessionStorage.removeItem('deleted');
        }
      });
    </script>
@endsection