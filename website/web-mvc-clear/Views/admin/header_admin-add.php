<style>
    .iconx {
        color: #fff;
    }

    .iconx:hover {
        color: #fff;
        height: 47px;
    }

</style>

<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" data-toggle="push-menu" role="button" style="color: #fff;">
            <i class="fas fa-bars btn btn-lg iconx" style="margin-top: 3px;"></i>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../../public/img/avatar2.jpg"
                            class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= $_SESSION['admin_name'] ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../../public/img/avatar2.jpg"
                                class="img-circle" alt="User Image">

                            <p>
                                <?= $_SESSION['admin_name'] ?>
                                <small>( Quản trị viên )</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="../logout" class="btn btn-default btn-flat">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>

    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../public/img/avatar2.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <!-- <p><?php/*$checker[0]->ho_ten; */?>  <?php /*var_dump($checker[0]->ho_ten);*/ ?></p> -->
                <p><?php /*$checker[0]->ho_ten;*/?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            
            <li class="treeview">
                <a href="#">
                    <!-- <i class="fas fa-history"></i> -->
                    <!-- <i class="fas fa-cogs"></i>  -->
                    <i class="fas fa-dolly"></i>
                    <span>Quản lý sản phẩm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Quản lý Macbook</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Quản lý iPAd</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Quản lý iPhone</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Quản lý Apple Watch</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Quản lý Hỗ trợ</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <!-- <i class="fas fa-gamepad"></i>  -->
                    <i class="fas fa-envelope"></i>
                    <span>Hộp thư</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin_setting_chanle') }}"><i class="fa fa-circle-o"></i> Hộp thư đến</a></li>
                    <li><a href="{{ route('admin_setting_taixiu') }}"><i class="fa fa-circle-o"></i> Hộp thư đã gửi</a></li>
                    <li><a href="{{ route('admin_setting_taixiu') }}"><i class="fa fa-circle-o"></i> Trợ giúp & hỗ trợ</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fas fa-cogs"></i> 
                    <span>Thiết lập</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="{{ route('admin_setting') }}"><i class="fa fa-circle-o"></i> Cài đặt website</a></li>
                    <!-- <li><a href="login/change_password"><i class="fa fa-circle-o"></i> Đổi mật khẩu</a></li> -->
                    <li><a href="settings?doimatkhau=true"><i class="fa fa-circle-o"></i> Đổi mật khẩu</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Cập nhật phiên bản mới</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $this->_name_h1_1 ?>
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Quản lý sản phẩm</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
