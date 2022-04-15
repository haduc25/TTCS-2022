<?php 
require_once './Models/Products.php';


class ProductsController
{
    public function index()
    {
        //$prds: products
        //gán bien prds tro den function -> all() (lay tat ca dl trong bang)
        $prd1item = Products::get1items(2, 1);
        $prd3item = Products::getNitems(1, 3); //$id_sp, $id_dm

        //import index view (home)
        require_once 'Views/mac/index.php';
    }

    public function index_iPad()
    {
        //$prds: products
        //gán bien prds tro den function -> all() (lay tat ca dl trong bang)
        // $prd1item = Products::get1items(2 ,1);
        $prd1 = Products::get1items(6, 2);
        $prd2 = Products::get1items(7, 2);
        $prd3 = Products::get1items(8, 2);
        $prd4 = Products::get1items(9, 2);
        // var_dump($prd4item); exit;


        $prd4item = Products::getNitems(2, 4);

        // $prd3item = Products::getNitems2(4);

        
        
        // $prd3item = Products::get3items();

        //import index view (home)
        require_once 'Views/iPad/index.php';
    }

    
    public function index_iPhone()
    {
        $prd1 = Products::get1items(1, 3);
        $prd2 = Products::get1items(47, 3);
        $prd3 = Products::get1items(48, 3);
        // var_dump($prd4item); exit;

        $prd4item = Products::getNitems(3, 4); //(id_dm, limit)

        //import index view (home)
        require_once 'Views/iPhone/index.php';
    }

}

?>