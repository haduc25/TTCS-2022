<?php 
require_once './Models/Products.php';


class ProductsController
{
    public function index()
    {
        //$prds: products
        //gán bien prds tro den function -> all() (lay tat ca dl trong bang)
        $prds = Products::all();

        //import index view (home)
        require_once 'Views/mac/index.php';
    }

}

?>