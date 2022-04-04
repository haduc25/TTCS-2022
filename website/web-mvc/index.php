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

        case 'admin':
            $ctl = new AdminController();
            $ctl->index();
            // echo "hello guys !";
            break;

        default:
            echo "error 404 ! Page not found... :<";
    }

?>