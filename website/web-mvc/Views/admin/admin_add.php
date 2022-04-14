<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ID Thiên Ân">
    <title>Home - Admin (Home)</title>
    <link rel="shortcut icon" href="{{ asset('image/favicon.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../public/css/style_admin_jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../public/css/style_admin.css">
    <link rel="stylesheet" href="../../public/css/style_admin_skins.css">
    <link rel="stylesheet" href="../../public/css/blue.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
        .jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
        .mgl-28
        {
            margin-left: 28px;
        }

        .mgt-16
        {
            margin-top: 16px;
        }

        .form-control
        {
            width: 60%; 
            margin-left: 20px;
        }
    </style>
    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="main" class="wrapper">
    <?php
    include './Views/admin/header_admin.php';
    include './Views/admin/admin_body_add.php'; 


    // include './Views/admin/admin_home2.php';
    
    // if(!empty($_home) && isset($_home))
    // {
    //     include './Views/admin/admin_home2.php';
    // }else
    // {
    //     include './Views/admin/doimatkhau.blade.php';

    // }
    
    // if($_home == "pwd")
    // {
    //     include './Views/admin/admin_home2.php';
    // }else
    // {
    //     include './Views/admin/doimatkhau.blade.php';

    // }

    // if(!empty($this->_index_pages) && isset($this->_index_pages))
    // {
    //     switch($this->_index_pages)
    //     {
    //         case 'home':
    //             include './Views/admin/admin_home2.php';
    //             break;
            
    //         case 'changePassword':
    //             include './Views/admin/doimatkhau.blade.php';
    //             break;

    //         default:
    //             echo "some error there!";
    //             break;

    //     }
        
    // }else
    // {
    //     echo "loi o day ne!";
    // }
   



    // var_dump($checker); exit;


    ?>
</div>
<!--/Footer-->
<!-- jQuery 3 -->
<script src="../../public/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../public/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../public/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../public/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="../../public/js/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="../../public/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../public/js/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="../../public/js/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="../../public/js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../public/js/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../public/js/demo.js"></script>
<script src="../../public/js/sweetalert.min.js"></script>
</body>
</html>
