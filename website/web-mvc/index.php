<?php
    //kt neu url ton tai || co "/"
    $url = isset($_GET['url']) == true ? $_GET['url']:"/";

    require_once './Controllers/HomeController.php';


    switch($url)
    {
        case '/':
            $ctl = new HomeController();
            //goi index trong HomeController
            $ctl -> index();
            break;

        default:
            echo "error 404 ! Page not found... :<";
    }

?>