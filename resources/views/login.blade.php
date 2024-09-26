@extends('../layouts/admin/auth')

@section('tittle')
    <title>Login - Aplikasi SiMadun Pemerintah Kabupaten Madiun</title>
@endsection

@section('form')
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{asset('assets/img/login/signin.jpg')}}" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo text-center" href="{{ route('login') }}"><img class="img-fluid for-light" src="{{asset('assets/img/logo/simadun.png')}}" alt="loginpage"></a></div>
                    <div class="login-main">
                        @if ($errors->any())
                        <div class="alert alert-light-danger" role="alert">
                            @foreach ($errors->all() as $error)
                            <p class="txt-danger">{{ $error }}</p>
                            @endforeach
                        </div>
                        @endif
                        @session('status')
                        <div class="alert txt-error border-error outline-2x alert-dismissible fade show alert-icons" role="alert"><i data-feather="x-square"></i>
                            <p><b> {{ $value }} </b></p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endsession
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4>Login</h4>
                            <p>Masukkan email & password anda untuk login</p>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-5">
                                <button class="btn btn-primary btn-block w-100" type="submit">Login</button>
                            </div>
                            <p class="mt-4 mb-0 text-center">Belum punya akun?<a class="ms-2" href="{{ route('register') }}">Buat Akun</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection