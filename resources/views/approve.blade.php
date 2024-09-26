@extends('../layouts/admin/main')

@section('tittle')
    <title>Approve - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('breadcrumb')
    <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700">Approve</h4>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('view-dashboard') }}"> <i data-feather="home"> </i></a></li>
                <li class="breadcrumb-item f-w-400 active">Approve</li>
            </ol>
        </nav>
    </div>
@endsection

@section('page-body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dashboard">
            <div class="row widget-grid">
                <div class="col-sm-12">
                    <div class="card profile-greeting p-0">
                        <div class="card-body">
                            <div class="img-overlay">
                                <h1>Selamat Datang di Aplikasi SiMadun, {{ Auth::user()->name }}!</h1>
                                <p>Akun anda sudah terdaftar. Silahkan menunggu Approval akun anda oleh Admin.</br><a class="btn" href="javascript:void(0)">Hubungi Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection