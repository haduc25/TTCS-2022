<?php 
// require_once './Models/Products.php';
require_once './Models/Admin.php';
session_start();


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
        // var_dump($admin); exit;
        //login_admin(email, pwd, permission)
        $checker = $admin->login_admin($_email, $_pwd, 1);
        if(!$checker || $checker == NULL)
        {
            ?>
            <script language="javascript">alert("Email đăng nhập hoặc mật khẩu của bạn không chính xác, vui lòng thử lại !");
            window.location = '../admin';
            </script>
            <?php
        }
        else
        {
            //luu vao _SESSION
            // echo "number 1 <br> <pre>";
            // var_dump($checker);
            // echo "</pre>";

            // echo "<br>";

            // echo "number 2 <br> <pre>";
            // var_dump($checker[0]->ho_ten); exit;
            // var_dump($checker[0]); exit;
            // echo "</pre>";


            $_SESSION['admin_login'] = $checker[0]->email;
            // var_dump($_SESSION['admin_login']); exit;
            // header("Location: ../admin");
            // header("Location: ./home");


            require_once 'Views/admin/admin_home.php';
            // require_once 'Views/admin/index.php';

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


    public function home()
    {
        require_once 'Views/admin/admin_home.php';
        // require_once 'Views/admin/index.php';
    }

    //log out
    public function logout()
    {
        unset($_SESSION['admin_login']);
        ?>
        <script language="javascript">alert("Đã đăng xuất tài khoản thành công !");
        window.location = '../admin';
        </script>
        <?php
    }


}

?>