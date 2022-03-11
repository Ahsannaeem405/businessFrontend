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
                    <li><a href="{{url('admin/slider')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Banner</span></a>
                    </li>
                    <li><a href="{{url('admin/navtab')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Corporate Structures</span></a>
                    </li>
                    <li><a href="{{url('admin/table')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Comparison Chart</span></a>
                    </li>
                    <li><a href="{{url('admin/card')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Business Entity</span></a>
                    </li>
                    <li><a href="{{url('admin/launch')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Launch Business</span></a>
                    </li>
                    <li><a href="{{url('admin/Corporations')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Types of Corporations</span></a>
                    </li>
                    <li><a href="{{url('admin/serviceworks')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Service Works</span></a>
                    </li>



                                   </ul>
            </li>


            <li class="nav-item has-sub"><a href="#"><i class="feather icon-airplay"></i><span class="menu-title" data-i18n="Ecommerce">Manage</span></a>
                    <ul class="menu-content">
                        <li class="nav-item has-sub"><a href="#"><i class="feather icon-airplay"></i><span class="menu-title" data-i18n="Ecommerce">Annual Report</span></a>
                            <ul class="menu-content">

                                <li><a href="{{url('admin/annual_def')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Annual Report Detail</span></a>
                                </li>
                                <li><a href="{{url('admin/Formal')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">  Formal & Corporate </span></a>
                                </li>
                                <li><a href="{{url('admin/llc')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details"> Annual LLC </span></a>
                                </li>
                                <li><a href="{{url('admin/File')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">How to File</span></a>
                                </li>
                                <li><a href="{{url('admin/duedate')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Due Dates</span></a>
                                </li>
                                <li><a href="{{url('admin/Business&Financial')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Business and Financial</span></a>
                                </li>
                                <li><a href="{{url('admin/OtherBusinessReports')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Other Business Reports</span></a>
                                </li>
                                <li><a href="{{url('admin/HelpFile')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">HelpFile</span></a>
                                </li>







                            </ul>
                    </li>
                    <li class="nav-item has-sub"><a href="#"><i class="feather icon-airplay"></i><span class="menu-title" data-i18n="Ecommerce">Tax</span></a>
                        <ul class="menu-content">

                            <li><a href="{{url('admin/tax_description')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Tax Description</span></a>
                            </li>
                            <li><a href="{{url('admin/Employer')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Employer Identification</span></a>
                            </li>
                            <li><a href="{{url('admin/FederalEIN')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Federal EIN</span></a>
                            </li>
                            <li><a href="{{url('admin/UseanEIN')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Use an EIN</span></a>
                            </li>
                            <li><a href="{{url('admin/ObtainEIN')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details"> Obtain a EIN</span></a>
                            </li>
                            <li><a href="{{url('admin/taxfaq')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">FAQ</span></a>
                            </li>
                            <li><a href="{{url('admin/tax_card')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Bussiness Entity</span></a>
                            </li>







                        </ul>
                </li>

                <li class="nav-item has-sub"><a href="#"><i class="feather icon-airplay"></i><span class="menu-title" data-i18n="Ecommerce">Amendment</span></a>
                    <ul class="menu-content">

                        <li><a href="{{url('admin/ChangeLLC')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Change your LLC </span></a>
                        </li>
                        <li><a href="{{url('admin/HelpFile_amendment')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Help File</span></a>
                        </li>






                    </ul>
            </li>



                    </ul>
            </li>



































        </ul>
    </div>
</div>
