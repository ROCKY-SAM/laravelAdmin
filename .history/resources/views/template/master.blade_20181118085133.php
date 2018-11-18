<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
      <meta name="author" content="Creative Tim">
      <title>@yield('title','Dashboard')</title>
      <!-- Favicon -->
      <link href="{{URL::asset('img/brand/favicon.png')}}" rel="icon" type="image/png">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <!-- Icons -->
      <link href="{{URL::asset('vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
      <link href="{{URL::asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
      <!-- Argon CSS -->
      <link type="text/css" href="{{URL::asset('css/argon.css?v=1.0.0')}}" rel="stylesheet">
    </head>
    
    <body>
      <!-- Sidenav -->
      @include('template.nav') 
      <!-- Main content -->
      <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
          <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a>
            <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
              <div class="form-group mb-0">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                  <input class="form-control" placeholder="Search" type="text">
                </div>
              </div>
            </form>
            <!-- User -->
            @include('template.user') 
          </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
          <div class="container-fluid">
            <div class="header-body">
              <!-- Card stats -->
 
            </div>
          </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
          @yield('content')
          <!-- Footer -->
          @include('template.footer') 
        </div>
      </div>




      <!-- Argon Scripts -->
      <!-- Core -->
      <script src="{{URL::asset('vendor/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Optional JS -->
      <script src="{{URL::asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
      <script src="{{URL::asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>
      <!-- Argon JS -->
      <script src="{{URL::asset('js/argon.js?v=1.0.0')}}"></script>
    </body>
 
</html>
