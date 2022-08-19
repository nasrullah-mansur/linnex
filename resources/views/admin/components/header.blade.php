<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="brand-logo" alt="stack admin logo" src="{{ asset('admin/images/logo/stack-logo-light.png') }}" />
                        <h2 class="brand-text">Stack</h2>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                   
                    
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online"> <img src="{{ asset('admin/images/portrait/small/avatar-s-1.png') }}" alt="avatar" /><i></i></span>
                            <span class="user-name">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('admin.password') }}"><i class="ft-user"></i> Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            <a id="logout" class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
                            <form id="logoutForm" class="d-none" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                            <script>
                                logout.addEventListener('click', (e) => {
                                    e.preventDefault();
                                    logoutForm.submit();
                                })
                            </script>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
