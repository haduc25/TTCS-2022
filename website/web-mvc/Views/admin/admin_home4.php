<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ID Thiên Ân">
    <title>Admin - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jvectormap -->
    <!-- <link rel="stylesheet" href="{{ asset('/css/jquery-jvectormap.css') }}"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="./public/css/style_admin.css">
    <link rel="stylesheet" href="./public/css/style_admin_skins.css">

    <!-- <link rel="stylesheet" href="{{ asset('/css/blue.css') }}"> -->
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/js/respond.min.js') }}"></script>
    <![endif]-->
  
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="main" class="wrapper">

<p>header</p>
<div class="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand navbar-brand-image" href="/">
                <div class="hidden-xs">
                    <img src="{{ $GetSetting->logo }}" style="margin-top:10px; margin-bottom:10px; width: 210px;" alt="clmm.me Logo">
                </div>
                <div class="visible-xs">
                    <img src="{{ $GetSetting->logo }}" style="margin-top:10px;margin:13px; width: 210px;" alt="clmm.me Logo">
                </div>
            </a>
        </div>

    </div>
</div>

<p>footer</p>
<div class="row">

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fas fa-award"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TỔNG DOANH THU</span>
            <span class="info-box-number">{{ number_format($doanhthu['tongdoanhthu']) }}<small> vnđ</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fas fa-calendar-day"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">DOANH THU HÔM NAY</span>
            <span class="info-box-number">{{ number_format($doanhthu['doanhthuhomnay']) }}<small> vnđ</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fas fa-calendar-day"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">DOANH THU THÁNG NẦY</span>
            <span class="info-box-number">{{ number_format($doanhthu['doanhthuthangnay']) }}<small> vnđ</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fas fa-calendar-day"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">DOANH THU NĂM NAY</span>
            <span class="info-box-number">{{ number_format($doanhthu['doanhthunamnay']) }}<small> vnđ</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

</div>

<br />

<div class="row">

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="far fa-hand-scissors"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TỔNG LƯỢT CHƠI CHẴN LẺ</span>
            <span class="info-box-number">{{ number_format($tongluotchoi['chanle']) }}<small> lượt</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fas fa-dice"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TỔNG LƯỢT CHƠI TÀI XỈU</span>
            <span class="info-box-number">{{ number_format($tongluotchoi['taixiu']) }}<small> lượt</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fas fa-hand-scissors"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TỔNG LƯỢT CHƠI CHẴN LẺ 2</span>
            <span class="info-box-number">{{ number_format($tongluotchoi['chanle2']) }}<small> lượt</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fas fa-cubes"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TỔNG LƯỢT CHƠI GẤP 3</span>
            <span class="info-box-number">{{ number_format($tongluotchoi['gap3']) }}<small> lượt</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fas fa-sort-numeric-up"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TỔNG LƯỢT CHƠI TỔNG 3 SỐ</span>
            <span class="info-box-number">{{ number_format($tongluotchoi['tong3so']) }}<small> lượt</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fas fa-percentage"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TỔNG LƯỢT CHƠI TỔNG 1 PHẦN 3</span>
            <span class="info-box-number">{{ number_format($tongluotchoi['1phan3']) }}<small> lượt</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

</div>

<br />

<div class="row">

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fas fa-bomb"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TỔNG LƯỢT CHƠI NỔ  HŨ</span>
            <span class="info-box-number">{{ number_format($tongluotchoi['nohu']) }}<small> lượt</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fab fa-joomla"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TỔNG DOANH THU NỔ HŨ</span>
            <span class="info-box-number">{{ number_format($doanhthu['nohu']) }}<small> vnđ</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fas fa-wine-glass-alt"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">TIỀN TRONG HŨ</span>
            <span class="info-box-number">{{ number_format($thongtin['tientronghu']) }}<small> vnđ</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

</div>
<p>footer</p>
<footer class="footer">
    <div class="container">

        <div class="row">
            <div class="col-xs-6 text-white">
                Copyright {{ date("Y") }} © CMSNT | Developer by <a style="color: #fff; text-decoration: none;" href="https://www.cmsnt.co/" target="_bank"><b>CMSNT.CO</b></a> 
            </div>


        </div>
    </div>

</footer>


    <?php 
        // include './Views/admin/header_admin.php';
        
        // include 'footer_admin.php';
    ?>

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
</body>
</html>
