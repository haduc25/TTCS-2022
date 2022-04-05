<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/css/style_admin.css">
    <link rel="stylesheet" href="./public/css/style_admin_skins.css">
  
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php 
  // session_start();
  // $_SESSION['test'] = 'halo 123';

  if (!empty($_SESSION['test']))
  {
      echo "working ! " . $_SESSION['test'];
  } else
  {

      echo "not work! " . $_SESSION['test'];
  }

  // var_dump($admin); exit;

?>

<div id="main" class="wrapper">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{ route('login') }}" style="color: #fff;"><b>Admin</b>LTE</a>
        <!-- Administrator -->
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Đăng nhập để tiếp tục</p>
    
        <form action="admin/login" method="POST">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
  
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <!-- /.social-auth-links -->
    
      </div>
      <!-- /.login-box-body -->
    </div>
</div>
<!--/Footer-->
<script src="{{ asset('/js/sweetalert.min.js') }}"></script>

</body>
</html>
