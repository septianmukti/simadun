<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="{{ route('view-dashboard') }}"><img class="img-fluid" src="{{asset('assets/img/logo/logo-kominfo-kecil.png')}}" alt="logo-kominfo-kecil"></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('assets/svg/icon-sprite.svg').'#toggle-icon'}}"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('view-dashboard') }}"><img class="img-fluid" src="{{asset('assets/img/logo/logo-kampung-pesilat.png')}}" alt="logo-kampung-pesilat"></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li></li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Menu Pinned</h6>
                        </div>
                    </li>
                    @if (Auth::user()->account_status == 'inactive')
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Approval Akun</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav {{ request()->is('approve') ? 'active' : '' }}" href="{{ route('approval') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg').'#stroke-task'}}"></use>
                        </svg><span class="lan-3">Approve </span></a>
                    </li>
                    @endif
                    @if (Auth::user()->account_status == 'active')
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Menu Utama</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav {{ request()->is('approve', 'dashboard') ? 'active' : '' }}" href="{{ route('view-dashboard') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg').'#stroke-home'}}"></use>
                        </svg><span class="lan-3">Dashboard </span></a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="javascript:void(0)">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg').'#stroke-knowledgebase'}}"></use>
                        </svg><span class="lan-3">Pengaturan Akun </span></a>
                    </li>
                    @endif
                    @if (Auth::user()->role == 'user' && Auth::user()->account_status == 'active')
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Pengajuan Kerjasama</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav {{ request()->is('list-pengajuan', 'lihat-pengajuan/*', 'pengajuan/*') ? 'active' : '' }}" href="{{ route('view-pengajuan') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg').'#stroke-layout'}}"></use>
                        </svg><span>Semua Pengajuan</span></a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav {{ request()->is('pengajuan-form') ? 'active' : '' }}" href="{{ route('view-form-pengajuan') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg').'#stroke-table'}}"></use>
                        </svg><span>Buat Pengajuan</span></a>
                    </li>
                    @endif
                    @if (Auth::user()->role == 'admin' && Auth::user()->account_status == 'active')
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Verif Pengajuan Kerjasama</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav {{ request()->is('list-verif-pengajuan') ? 'active' : '' }}" href="{{ route('list.verif.pengajuan') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg').'#stroke-layout'}}"></use>
                        </svg><span>Semua Pengajuan</span></a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Manajemen Akun</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav {{ request()->is('approval-account') ? 'active' : '' }}" href="{{ route('view-approval-akun') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg').'#stroke-user'}}"></use>
                        </svg><span>Approve User</span></a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->