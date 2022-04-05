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

        default:
            echo "error 404 ! Page not found... :<";
    }

?>