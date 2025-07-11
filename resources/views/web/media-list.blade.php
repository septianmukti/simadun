@extends('../web/layouts/base')

@section('tittle')
    <title>Data Media - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css">
    <style>
        table.dataTable,
        .dataTables_wrapper {
            font-family: 'Poppins', sans-serif;
        }
    </style>
@endsection

@section('header')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Data Media</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ route('index') }}">Beranda</a><i class="fa fa-angle-double-right"></i><span>Data Media</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="display compact hover stripe row-border" id="data-media">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th>Nama Perusahaan</th>
                                <th>Jenis Perusahaan</th>
                                <th>Nama Media</th>
                                <th class="text-center" data-orderable="false">Status Media</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($media as $medias)
                            <tr>
                                <td class="text-center">{{ $no++ }}.</td>
                                <td>{{ $medias->name }}</td>
                                <td>{{ $medias->nama_perusahaan }}</td>
                                <td>{{ ucwords(str_replace('-', ' ', strtolower($medias->jenis_perusahaan))) }}</td>
                                <td>{{ $medias->media_name }}</td>
                                <td class="text-center">
                                <span class="badge badge-success">Terverifikasi</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>     
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ route('index') }}">Beranda</a><i class="fa fa-angle-double-right"></i><span>Data Media</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>

    <script>
        $('#data-media').DataTable( {
            scrollX: true,
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Tidak ada data yang ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data yang tersedia",
                "search": "Cari:",
            }
        } );
    </script>
@endsection