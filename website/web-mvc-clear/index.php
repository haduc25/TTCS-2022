<?php
    //kt neu url ton tai || co "/"
    $url = isset($_GET['url']) == true ? $_GET['url']:"/";

    require_once './Controllers/HomeController.php';
    require_once './Controllers/ProductsController.php';
    require_once './Controllers/AdminLogin.php';


    switch($url)
    {
        case '/':
            $ctl = new HomeController();
            //goi index trong HomeController
            $ctl->index();
            break;

        case 'mac':
            $ctl = new ProductsController();
            $ctl->index();
            break;

        case 'ipad':
            $ctl = new ProductsController();
            $ctl->index_iPad();
            break;

        case 'iphone':
            $ctl = new ProductsController();
            $ctl->index_iPhone();
            break;

        // Admin
        case 'admin':
            $ctl = new AdminController();
            $ctl->index();
            // echo "hello guys !";
            break;

        case 'admin/login':
            $ctl = new AdminController();
            $ctl->login();
            // echo "hello guys !";
            break;

        case 'admin/home':
            $ctl = new AdminController();
            $ctl->home();
            break;

        //logout
        case 'admin/logout':
            $ctl = new AdminController();
            // echo "wanna log out";
            $ctl->logout();
            break;

        //admin/add
        case 'admin/login/add':
            $ctl = new AdminController();
            // echo "click to add";
            $ctl->create_pages_insert();
            break;

        //admin/insert-prod
        case 'admin/login/insert-prod':
            $ctl = new AdminController();
            // echo "click to insert-prod";
            $ctl->admin_insert();
            break;

        //admin/del
        case 'admin/login/del':
            $ctl = new AdminController();
            // echo "click to del";
            $ctl->admin_del();
            break;

        //admin/edit -> pages
        case 'admin/login/edit':
            $ctl = new AdminController();
            // echo "click to edit page create!";
            $ctl->admin_pages_edit();
            break;

        //admin/edit
        case 'admin/login/edit-prod':
            $ctl = new AdminController();
            // echo "click to edit-prod";
            $ctl->admin_edit();
            break;

        //doi mat khau
        case 'admin/login/change_password':
            $ctl = new AdminController();
            // echo "wanna change password";
            $ctl->changePassword();
            break;

        //doi mat khau2
        case 'admin/settings':
            // echo "doi pwd 2";
            $ctl = new AdminController();
            // // echo "wanna change password";
            $ctl->changePassword2();
            break;

        default:
            $ctl = new HomeController();
            $ctl->page404();
            break;
    }

?>