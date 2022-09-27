<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{ route('admin.dashboard') }}">
        <img src="{{ url('staradmin/images/logo.svg') }}" alt="logo" /> </a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}">
        <img src="{{ url('staradmin/images/logo-mini.svg') }}" alt="logo" /> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
    
    <form class=" search-form d-none d-md-block" action="#">
        <div class="form-group">
        <input type="search" class="form-control" placeholder="Search Here">
        </div>
    </form>
    <ul class="navbar-nav ml-auto">          
        <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="{{ url('staradmin/images/faces/face18.jpg') }}" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="{{ url('staradmin/images/faces/face18.jpg') }}" alt="Profile image">
            <p class="mb-1 mt-3 font-weight-semibold">John Doe</p>
            <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
            </div>
            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">My Profile<i class="dropdown-item-icon ti-dashboard"></i></a>
            <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i> <span class="badge badge-pill badge-danger">1</span></a>
            <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
            <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
        </div>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
    </button>
    </div>
</nav>