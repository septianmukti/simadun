@extends('../layouts/admin/main')

@section('tittle')
    <title>Approval Akun - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
      <h4 class="f-w-700">Approval Akun</h4>
      <nav>
        <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
          <li class="breadcrumb-item"><a href="{{ route('view-dashboard') }}"> <i data-feather="home"> </i></a></li>
          <li class="breadcrumb-item f-w-400 active">Approval Akun</li>
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
                <h4>Pengajuan Pembuatan Akun </h4><span>Semua Akun dibawah ini merupakan semua Akun yang telah terdaftar di Aplikasi SiMadun dan belum di Approve oleh Admin.</span>
              </div>
              <div class="card-body">
                <div class="table-responsive theme-scrollbar">
                  <table class="display" id="approval-account">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Lengkap Wartawan</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Nama Media</th>
                        <th>Tanggal Daftar</th>
                        <th>Status Akun</th>
                        <th class="text-center" data-orderable="false">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ($userinactive as $inactive)
                      <tr>
                        <td>{{ $no++ }}.</td>
                        <td>{{ucfirst($inactive->name)}}</td>
                        <td>{{$inactive->email}}</td>
                        <td>{{$inactive->no_hp}}</td>
                        <td>{{$inactive->media_name}}</td>
                        <td>{{$inactive->created_at}}</td>
                        <td> <span class="badge badge-danger">{{ucfirst($inactive->account_status)}}</span></td>
                        <td>
                          <ul class="action">
                            <li class="detail">
                              <a href="#" class="btn btn-xs btn-outline-success btn-air-success approve" data-url="{{ route('proses-active-akun', $inactive->id) }}"data-toggle="tooltip" title="Approve">Approve</a>
                            </li>
                            <li>
                              <a href="{{ route('delete.approval.akun', $inactive->id) }}" class="btn btn-xs btn-outline-danger btn-air-danger btn-delete" data-toggle="tooltip" title="Hapus">Hapus</a>
                            </li>
                          </ul>  
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
      $(document).ready(function () {
        // Inisialisasi DataTables
        const table = $("#approval-account").DataTable({
          language: {
            emptyTable: "Tidak ada data yang tersedia.",
            zeroRecords: "Tidak ditemukan data yang sesuai.",
          }
        });
        // Setup CSRF token untuk AJAX
        $.ajaxSetup({
          headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          },
        });
        // Event saat klik tombol hapus
        $(document).on("click", ".btn-delete", function (ev) {
          ev.preventDefault();
          const urlToRedirect = $(this).attr("href");
          const row = $(this).closest("tr");
          swal({
            title: "Anda Yakin?",
            text: "Anda akan menghapus pembuatan akun ini.",
            icon: "error",
            buttons: {
              cancel: "Batal",
              confirm: {
                text: "Ya, Hapus!",
                value: true,
                className: "btn-danger"
              }
            },
            dangerMode: true,
          }).then((willDelete) => {
            if (willDelete) {
              $.ajax({
                type: "POST",
                url: urlToRedirect,
                data: {
                  _method: "DELETE"
                },
                success: function (response) {
                  // Hapus baris dari DataTable
                  table.row(row).remove().draw();
                  swal("Sukses!", "Pengajuan pembuatan akun berhasil dihapus.", "success");
                },
                error: function (xhr) {
                  let msg = "Terjadi kesalahan saat menghapus.";
                  if (xhr.responseJSON && xhr.responseJSON.error) {
                    msg = xhr.responseJSON.error;
                  }
                  swal("Gagal!", msg, "error");
                }
              });
            }
          });
        });

        $(document).ready(function () {
          // Event saat klik tombol approve
          $(document).on("click", ".approve", function (ev) {
            ev.preventDefault();
            const urlToRedirect = $(this).data("url");
            if (!urlToRedirect) {
              swal("Error", "URL tujuan tidak ditemukan.", "error");
              return;
            }
            swal({
              title: "Anda Yakin?",
              text: "Anda akan menyetujui pembuatan akun ini.",
              icon: "warning",
              buttons: {
                cancel: "Batal",
                confirm: {
                  text: "Ya, Setujui!",
                  value: true,
                  visible: true,
                  className: "btn-success",
                },
              },
              dangerMode: true,
            }).then((willApprove) => {
              if (willApprove) {
                $.ajaxSetup({
                  headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                  },
                });
                // Tampilkan loading
                swal({
                  title: "Memproses!",
                  text: "Mohon tunggu sebentar...",
                  buttons: false,
                  closeOnClickOutside: false,
                  closeOnEsc: false,
                });

                $.ajax({
                  type: "POST",
                  url: urlToRedirect,
                  success: function (response) {
                    const message = response.message || "Pengajuan akun berhasil disetujui.";
                    sessionStorage.setItem("approved", message);
                    location.reload();
                  },
                  error: function (xhr, status, error) {
                    let errMsg = "Terjadi kesalahan saat menyetujui.";
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                      errMsg = xhr.responseJSON.message;
                    }
                    swal("Gagal!", errMsg, "error");
                  },
                });
              }
            });
          });

          // Notifikasi setelah reload
          const approvedMessage = sessionStorage.getItem("approved");
          if (approvedMessage) {
            swal("Sukses!", approvedMessage, "success");
            sessionStorage.removeItem("approved");
          }
        });

      });
    </script>
@endsection