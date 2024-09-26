<div class="page-header row">
    <div class="header-logo-wrapper col-auto">
        <div class="logo-wrapper"><a href="{{ route('view-dashboard') }}"><img class="img-fluid for-light" src="{{asset('assets/img/logo/logo-kominfo-kecil.png')}}" alt="logo-admin" /></a></div>
    </div>
    @yield('breadcrumb')
    <!-- Page Header Start-->
    <div class="header-wrapper col m-0">
        <div class="row">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="toggle-sidebar">
                    <svg class="stroke-icon sidebar-toggle status_toggle middle">
                        <use href="{{ asset('assets/svg/icon-sprite.svg').'#toggle-icon'}}"></use>
                    </svg>
                </div>
            </div>
            <div class="nav-right col-xxl-8 col-xl-8 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                <ul class="nav-menus">
                    <li></li>
                    <li></li>
                    <li class="profile-nav onhover-dropdown px-0 py-0">
                        <div class="d-flex profile-media align-items-center"><img class="img-30" src="{{ asset('assets/images/dashboard/profile.png') }}" alt="">
                            <div class="flex-grow-1"><span>{{ Auth::user()->name }}</span>
                                <p class="mb-0 font-outfit">{{ Auth::user()->media_name }}<i class="fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a href="javascript:void()" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-out"> </i><span>Log out</span></a>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->
</div>