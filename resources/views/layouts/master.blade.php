@extends('layouts.app1')
@section('content')
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <h4>Stock System</h4>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                {{-- <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span> --}}
              </div>
              {{-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> --}}
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"  aria-haspopup="true" aria-expanded="false" v-pre>
                <strong>Welcome {{ Auth::user()->name }}</strong>  <i class="ti-settings text-primary"></i>             
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              {{-- <a class="dropdown-item"> <i class="ti-settings text-primary"></i> Settings</a> --}}
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="ti-power-off text-primary"></i>
                Logout
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </a>
            </div>
          </li>        
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->segment(1) == 'client') ? 'active' : 'deactive' }}">
            <a class="nav-link {{ (request()->segment(1) == 'client') ? 'active' : 'deactive' }}" href="{{ route('client.list') }}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Clients</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->segment(1) == 'company') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('company.list') }}">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Companies</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->segment(1) == 'buy') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('buy.list') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Buy Records</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->segment(1) == 'sell') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('sell.list') }}">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Sell Records</span>
            </a>
          </li>
          <li class="nav-item {{ (request()->segment(1) == 'ltp') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('ltp.list') }}">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Last Treding Price</span>
            </a>
          </li>
          {{-- <li class="nav-item {{ (request()->segment(1) == 'client') ? 'active' : '' }}">
            <a class="nav-link {{ (request()->segment(1) == 'client') ? 'collapsed' : '' }}" data-toggle="collapse" href="#ui-basic" aria-expanded="{{ (request()->segment(1) == 'client') ? 'true' : 'false' }}" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Clients</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="{{ (request()->segment(1) == 'client') ? 'collapse show' : 'collapse' }}" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('client.list') }}">All Clients</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('client.add') }}">New Client</a></li>
              </ul>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Companies</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('company.list') }}">All Companies</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('company.add') }}">New Company</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Buy Records</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('buy.list') }}">All Buy Records</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('buy.add') }}">Add Buy Record</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Sell Records</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('sell.list') }}">All Sell Records</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('sell.add') }}">Add Sell Record</a></li>
              </ul>
            </div>
          </li> --}}


          
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- main panel start -->      
      @yield('panelcontent')
      <!-- main panel End -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection





                   