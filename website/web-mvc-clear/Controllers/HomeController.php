<?php 
require_once './Models/Products.php';


class HomeController
{
    public function index()
    {
        $prd1 = Products::get1items(1, 3);
        $prd2 = Products::get1items(53, 3);
        $prd3 = Products::get1items(54, 4);
        $prd4 = Products::get1items(6, 2);
        $prd5 = Products::get1items(2, 1);

        //import index view (home)
        require_once 'Views/index.php';
    }

    public function page404()
    {
        require_once 'Views/page_404.php';
    }

}

?>