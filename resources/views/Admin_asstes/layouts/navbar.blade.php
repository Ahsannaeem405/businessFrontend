<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                    <h3 class="m-auto">@yield('heading')</h3>
                </div>
                <ul class="nav navbar-nav float-right">

                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        {{-- @if (Auth::user()->name==null)
                        <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">Admin</span></div>
                       @else --}}
                       <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">Admin</span></div>
                        {{-- @endif --}}

                        {{-- @if (Auth::user()->image!=null)
                        <span><img class="round" src="{{asset('upload/admin_profile/'.Auth::user()->image)}}" alt="avatar" height="40" width="40"></span>
                        @else
                        <span><img class="round" src="{{asset('upload/images.jpg')}}" alt="avatar" height="40" width="40"></span>
                        @endif --}}
                        <span><img class="round" src="{{asset('image/avatar.png')}}" alt="avatar" height="40" width="40"></span>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('/logout')}}"><i class="feather icon-power"></i> Logout</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
