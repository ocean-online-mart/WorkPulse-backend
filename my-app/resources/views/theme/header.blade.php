<div class="header">
    <div class="main-header">
        <div class="header-left">
            <a href="{{ route('dashboard') }}" class="logo">
                <img src="{{ asset('theme/img/logo.svg') }}" alt="Logo">
            </a>
            <a href="{{ route('dashboard') }}" class="dark-logo">
                <img src="{{ asset('theme/img/logo-white.svg') }}" alt="Logo">
            </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <div class="header-user">
            <div class="nav user-menu nav-list">
                <div class="me-auto d-flex align-items-center" id="header-search">
                    <a id="toggle_btn" href="javascript:void(0);" class="btn btn-menubar me-1">
                        <i class="ti ti-arrow-bar-to-left"></i>
                    </a>
                </div> 
                <!-- /Horizontal Single -->
                <div class="d-flex align-items-center">
                    <div class="me-1">
                        <a href="#" class="btn btn-menubar btnFullscreen">
                            <i class="ti ti-maximize"></i>
                        </a>
                    </div>
                    <a href="#" class="btn btn-menubar position-relative me-1" id="notification_popup"
                        data-bs-toggle="dropdown">
                        <i class="ti ti-bell"></i>
                        <span class="notification-status-dot"></span>
                    </a>            
                    <div class="dropdown profile-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <span class="avatar avatar-sm online">
                                <img src="{{ asset('theme/img/profiles/avatar-12.jpg') }}"
                                    alt="Img" class="img-fluid rounded-circle">
                            </span>
                        </a>
                        <div class="dropdown-menu shadow-none">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg me-2 avatar-rounded">
                                            <img src="{{ asset('theme/img/profiles/avatar-12.jpg') }}"
                                                alt="img">
                                        </span>
                                        <div>
                                            <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                                            <p class="fs-12 fw-medium mb-0"><a href="#"
                                                    class="__cf_email__">{{ Auth::user()->email }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
                                        href="{{ route('profile.edit') }}">
                                        <i class="ti ti-user-circle me-1"></i>My Profile
                                    </a>
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
                                        href="#">
                                        <i class="ti ti-status-change me-1"></i>Status
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="ti ti-login me-2"></i>Logout
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="{{ route('profile.edit') }}">My Profile</a>
                <div class="dropdown-item d-flex align-items-center justify-content-between">
            <span>Status</span>
            <div class="form-check form-switch m-0">
                <input class="form-check-input" type="checkbox" id="statusToggle" onchange="toggleStatus(this)">
            </div>
        </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
            </div>
        </div>
        <!-- /Mobile Menu -->
    </div>
</div> 