<!doctype html>
<html lang="en">
  <head>
    <title>pizza-order-app</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--  Fonts and icons  -->
      <!--     Fonts and icons     -->
      <link href="{{ asset('/css/admin/black-dashboard.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Black Dashboard CSS -->
    <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  </head>
  <body>
<div class="wrapper ">
  <div class="sidebar" data-color="purple" data-background-color="white">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="#" class="simple-text logo-mini">
        ADM
      </a>

    </div>

    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="tim-icons icon-chart-pie-36"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('admin.product') }}">
                <i class="tim-icons icon-chart-pie-36"></i>
                <p>Products</p>
            </a>
        </li>
         <!-- your sidebar here -->
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">

          <a class="navbar-brand" href="#pablo">Dashboard</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="tim-icons icon-bell-55"></i>  Notifications
              </a>
            </li>
             <!-- your navbar here -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
         @yield('content')
      </div>
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <nav class="float-left">

        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>

        </div>

         <!-- your footer here -->
      </div>
    </footer>
  </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('/js/admin/jquery.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/admin/popper.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/admin/bootstrap.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/admin/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{ asset('/js/admin/chartjs.min.js') }}" type="text/javascript"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('/js/admin/bootstrap-notify.js') }}" type="text/javascript"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('/js/admin/black-dashboard.js') }}" type="text/javascript"></script>


</body>



</html>
