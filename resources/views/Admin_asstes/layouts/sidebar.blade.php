<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('/admin/index')}}">
                    <div class="" ></div>
                    {{-- <h2 class="brand-text mb-0">@if (isset(Auth::user()->name)) {{Auth::user()->name}}  @else ICS @endif</h2> --}}
                    <h2 class="brand-text mb-0">Admin</h2>


                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

              <li class=" navigation-header">.
            </li>
            <li class="{{ Request::is('adminn')? 'active' : '' }}"><a href="{{url('admin/index')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class="nav-item has-sub"><a href="#"><i class="feather icon-airplay"></i><span class="menu-title" data-i18n="Ecommerce">Home</span></a>
                <ul class="menu-content">
                    <li><a href="{{url('admin/slider')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Slider</span></a>
                    </li>
                    <li><a href="{{url('admin/navtab')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Nav Tabs</span></a>
                    </li>
                    <li><a href="{{url('admin/table')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Table</span></a>
                    </li>
                    <li><a href="{{url('#')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Cards</span></a>
                    </li>
                    <li><a href="{{url('#')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Image Div</span></a>
                    </li>
                    <li><a href="{{url('#')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Form Div</span></a>
                    </li>


                                   </ul>
            </li>



































        </ul>
    </div>
</div>
