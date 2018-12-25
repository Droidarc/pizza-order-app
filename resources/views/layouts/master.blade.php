<!doctype html>
<html lang="en">
  <head>
    <title>pizza-order-app</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="{{ asset('/css/material-kit.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
  </head>
  <body>
    @include('partials.navbar')
    @include('partials.navbar2')

    @yield('content')

    @include('partials.footer')
<!--   Core JS Files   -->
<script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/popper.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/bootstrap-material-design.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/moment.min.js') }}" type="text/javascript"></script>

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('/js/nouslider.min.js') }}" type="text/javascript"></script>

<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('/js/material-kit.js') }}" type="text/javascript"></script>

</body>
</html>
