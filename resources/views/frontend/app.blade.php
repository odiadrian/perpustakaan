<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="{{ url('assets/frontend/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{ url('assets/frontend/plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ url('assets/frontend/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{ url('assets/frontend/plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ url('assets/frontend/plugins/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="{{ url('assets/frontend/plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
  <link href="{{ url('assets/frontend/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
  <link href="{{ url('assets/frontend/plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ url('assets/frontend/css/style.css') }}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">

<!-- HEADER -->
@include('frontend._partials.header')
<!-- END HEADER -->

<!-- KONTEN -->
@yield('content')
<!-- END KONTEN -->

<!-- FOOTER -->
@include('frontend._partials.footer')
<!-- END FOOTER -->

  <!-- JAVASCRIPTS -->
  <script src="{{ url('assets/frontend/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/tether/js/tether.min.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/raty/jquery.raty-fa.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/bootstrap/dist/js/popper.min.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ url('assets/frontend/plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="{{ url('assets/frontend/js/scripts.js') }}"></script>
  @yield('scripts')
</body>

</html>