<?php 
require_once './Models/Products.php';


class ProductsController
{
    public function index()
    {
        //$prds: products
        //gán bien prds tro den function -> all() (lay tat ca dl trong bang)
        $prd1item = Products::get1items(2 ,1);
        
        $prd3item = Products::get3items();

        //import index view (home)
        require_once 'Views/mac/index.php';
    }

}

?>