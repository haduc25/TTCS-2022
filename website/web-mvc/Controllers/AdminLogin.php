<?php 
// require_once './Models/Products.php';
require_once './Models/Admin.php';


class AdminController
{
    public function index()
    {
        //$prds: products
        //gán bien prds tro den function -> all() (lay tat ca dl trong bang)
        // $prds = Products::all();

        //import index view (home)
        require_once 'Views/admin/admin_login.php';
    }

    public function login()
    {
        $_email = $_POST['email'];
        $_pwd = $_POST['password'];
     
        // var_dump($_email); exit;
    
        $admin = new Admin();
        //login_admin(email, pwd, permission)
        $check = $admin->login_admin($_email, $_pwd, 1);
        if(!$check || $check == NULL)
        {
            ?>
            <script language="javascript">alert("Email đăng nhập hoặc mật khẩu của bạn không chính xác, vui lòng thử lại !");
            window.location = '../admin';
            </script>
            <?php
        }
        else
        {
            echo "sign done!";
            //luu vao _SESSION
        }

        ?>
        <br>
        <a href="../admin">back to admin login</a>

        <?php 
        // var_dump($check == NULL);
        exit;
        // var_dump($admin); exit;


        
        // require_once 'Views/admin/admin_login.php';
    }

}

?>