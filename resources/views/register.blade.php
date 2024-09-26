@extends('../layouts/admin/auth')

@section('tittle')
    <title>Register - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('form')
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{asset('assets/img/login/signup.jpg')}}" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo text-center" href="{{ route('login') }}"><img class="img-fluid for-light" src="{{asset('assets/img/logo/simadun.png')}}" alt="registerpage"></a></div>
                    <div class="login-main">
                        @if ($errors->any())
                        <div class="alert alert-light-danger" role="alert">
                            @foreach ($errors->all() as $error)
                            <p class="txt-danger">• {{ $error }}</p>
                            @endforeach
                        </div>
                        @endif
                        <form class="theme-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h4>Register</h4>
                            <p>Masukkan identitas anda untuk membuat akun</p>
                            <div class="form-group">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <label class="col-form-label pt-0">Nama Perusahaan</label>
                                        <input class="form-control" name="nama_perusahaan" type="text" required="" placeholder="Nama Perusahaan">
                                    </div>
                                    <div class="col-6">
                                        <label class="col-form-label pt-0">Nama Media</label>
                                        <input class="form-control" name="media_name" type="text" required="" placeholder="Nama Media">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Nama Lengkap Wartawan</label>
                                <input class="form-control" name="name" type="text" required="" placeholder="Nama Lengkap Wartawan">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Nomor Telepon/HP</label>
                                <input class="form-control" name="no_hp" type="text" required="" placeholder="Nomor Telepon/HP">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Pilih Jenis Media</label>
                                <select class="form-select" id="jenis_perusahaan" name="jenis_perusahaan" aria-label="Pilih Jenis Perusahaan" required="">
                                  <option value="">Pilih Jenis Media</option>
                                  <option value="media-cetak">Media Cetak </option>
                                  <option value="media-elektronik">Media Elektronik </option>
                                  <option value="media-siber">Media Siber </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input class="form-control" name="email" type="email" required="" placeholder="Test@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                                    <div class="show-hide"><span class="show"></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Konfirmasi Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password_confirmation" required="" placeholder="*********">
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-5">
                                <button class="btn btn-primary btn-block w-100" type="submit">Daftar</button>
                            </div>
                            <p class="mt-4 mb-0 text-center">Sudah punya akun?<a class="ms-2" href="{{ route('login') }}">Masuk Akun</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection