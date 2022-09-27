<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('staradmin/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('staradmin/vendors/iconfonts/ionicons/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ url('staradmin/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ url('staradmin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('staradmin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('staradmin/vendors/css/vendor.bundle.addons.css') }}">

    <link rel="stylesheet" href="{{ url('staradmin/vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('staradmin/css/shared/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('staradmin/css/demo_1/style.css') }}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ url('staradmin/images/favicon.png') }}" />

    <!-- <link rel="stylesheet" href=""> -->
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @yield('header')
        <!-- partial -->

        <!-- partial:partials/_sidebar.html -->
        @yield('sidebar')
        <!-- partial -->

        @yield('content')
      </div>
      <!-- page-body-wrapper ends -->

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!--FOOTER SCRIPTS-->
  </body>
</html>



