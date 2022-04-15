<?php 
require_once './Models/Products.php';


class ProductsController
{
    public function index()
    {
        $prd1item = Products::get1items(2, 1);
        $prd3item = Products::getNitems(1, 3); //$id_sp, $id_dm

        //import index view (home)
        require_once 'Views/mac/index.php';
    }

    public function index_iPad()
    {
        $prd1 = Products::get1items(6, 2);
        $prd2 = Products::get1items(7, 2);
        $prd3 = Products::get1items(8, 2);
        $prd4 = Products::get1items(9, 2);

        $prd4item = Products::getNitems(2, 4);

        //import index view (home)
        require_once 'Views/iPad/index.php';
    }

    
    public function index_iPhone()
    {
        $prd1 = Products::get1items(1, 3);
        $prd2 = Products::get1items(47, 3);
        $prd3 = Products::get1items(48, 3);

        $prd4item = Products::getNitems(3, 4); //(id_dm, limit)

        //import index view (home)
        require_once 'Views/iPhone/index.php';
    }
    
    public function pages_cart()
    {
        // $prd1 = Products::get1items(1, 3);
        // $prd2 = Products::get1items(47, 3);
        // $prd3 = Products::get1items(48, 3);

        // $prd4item = Products::getNitems(3, 4); //(id_dm, limit)

        //import index view (home)
        require_once 'Views/cart/index.php';
    }
    
    public function add_cart()
    {
        if(!empty($_GET['id']) && isset($_GET['id']))
        {
            $prd = new Products();
            $value = $prd->find($_GET['id']);
            switch($value->id_dm)
            {
                case 1:
                    $_id_dm = "Macbook";
                    break;
                
                case 2:
                    $_id_dm = "iPad";
                    break;
                
                case 3:
                    $_id_dm = "iPhone";
                    break;
                
                case 4:
                    $_id_dm = "Apple Watch";
                    break;
                
                case 5:
                    $_id_dm = "Apple TV";
                    break;
                
                case 6:
                    $_id_dm = "Apple Music";
                    break;
                default:
                    $_id_dm = "empty";
                    echo "Lỗi danh mục k hợp lệ! vui lòng thử lại.";
                    break;
            }
            // var_dump($value->ten_sp); exit;
             require_once 'Views/cart/index.php';

        }
        //import index view (home)
        // require_once 'Views/cart/index.php';
    }

}

?>