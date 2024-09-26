@extends('../layouts/admin/main')

@section('tittle')
    <title>Approval Akun - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
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
                <h4>Approval Akun </h4><span>Semua Akun dibawah ini merupakan semua Akun yang telah terdaftar di Aplikasi SiMadun dan belum di Approve oleh Admin.</span>
              </div>
              <div class="card-body">
                @include('../components/notif')
                <div class="table-responsive theme-scrollbar">
                  <table class="display" id="approval-account">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Lengkap Wartawan</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Nama Media</th>
                        <th>Status Akun</th>
                        <th>Action</th>
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
                        <td> <span class="badge badge-danger">{{ucfirst($inactive->account_status)}}</span></td>
                        <td>
                          <form action="{{ route('proses-active-akun', $inactive->id) }}" method="POST">
                              @method('PUT')
                              @csrf
                              <button class="btn btn-success" type="submit" title="Approve">Approve</button>
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
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4>Daftar Akun </h4><span>Semua Akun dibawah ini merupakan semua Akun yang telah terdaftar di Aplikasi SiMadun dan sudah di Approve oleh Admin.</span>
              </div>
              <div class="card-body">
                <div class="table-responsive theme-scrollbar">
                  <table class="display" id="list-account">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Lengkap Wartawan</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Nama Media</th>
                        <th>Status Akun</th>
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
                        <td>
                          @if ($active->role == 'user')
                          <span class="badge badge-light-success">{{ucfirst($active->role)}}</span>
                          @elseif ($active->role == 'admin')
                          <span class="badge badge-light-danger">{{ucfirst($active->role)}}</span>
                          @endif 
                        </td>
                        <td>
                          <ul class="action">
                            <li class="detail"><a data-bs-toggle="tooltip" title="Detail" href="javascript:void()"><i class="icon-eye"></i></a></li>
                            <li class="edit"> <a data-bs-toggle="tooltip" title="Edit" href="javascript:void()"><i class="icon-pencil-alt"></i></a></li>
                            <li class="delete"><a data-bs-toggle="tooltip" title="Hapus" href="javascript:void()"><i class="icon-trash"></i></a></li>
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
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
      $("#approval-account, #list-account").DataTable();
    </script>
@endsection