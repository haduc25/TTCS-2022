<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ID Thiên Ân">
    <title>Home - Admin</title>
    <link rel="shortcut icon" href="{{ asset('image/favicon.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/css/ionicons.min.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('/css/jquery-jvectormap.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/style_admin.css">
    <link rel="stylesheet" href="../public/css/style_admin_skins.css">
    <link rel="stylesheet" href="../public/css/blue.css">
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/js/respond.min.js') }}"></script>
    <![endif]-->
  
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      @yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="main" class="wrapper">
    @include('layouts.elements.header_admin')
    @yield('content')
    @include('layouts.elements.footer_admin')
</div>
<!--/Footer-->
<!-- jQuery 3 -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/js/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('/js/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ asset('/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('/js/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('/js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/js/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/js/demo.js') }}"></script>
<script src="{{ asset('/js/sweetalert.min.js') }}"></script>
@yield('script')
</body>
</html>
