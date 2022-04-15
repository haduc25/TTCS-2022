<?php 
require_once './Models/Products.php';
require_once './Models/Admin.php';
session_start();


class AdminController
{
    public $_index_pages = "index";
    public $_name_h1_1 = "empty";
    // public $_admin_name = "empty";

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
        $admin = new Admin();
        $prd = new Products();

        $products_1 = $prd->getAllAdmin(1);
        $products_2 = $prd->getAllAdmin(2);

        $this->_index_pages = "home";
        $this->_name_h1_1 = "Quản lý sản phẩm";
        



        if(!empty($_SESSION['admin_login']) && isset($_SESSION['admin_login']))
        {
            require_once 'Views/admin/admin_home.php';
        }else
        {
            
        $_email = $_POST['email'];
        $_pwd = $_POST['password'];
        $_well = "haha123";
        // var_dump($this->_index_pages); exit;
     
        // var_dump($_email); exit;
    
        // $admin = new Admin();
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
            $_SESSION['admin_name'] = $checker[0]->ho_ten;
            // var_dump($_SESSION['admin_login']); exit;
            // header("Location: ../admin");
            // header("Location: ./home");


            //
            // $products_1 = $admin->getAllAdmin(1);
            // $products_2 = $admin->getAllAdmin(2);

            //
            //  $this->_name_h1_1 = "Quản lý sản phẩm";

            // var_dump($admin->getAllAdmin()); exit;

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


    //change_password
    public function changePassword()
    {
        
        
        // $_email = $_POST['email'];
        // $_pwd = $_POST['password'];
        // $_home = "home";
     
        // // var_dump($_email); exit;
    
        // $admin = new Admin();
        // // var_dump($admin); exit;
        // //login_admin(email, pwd, permission)
        // $checker = $admin->login_admin($_email, $_pwd, 1);
        // var_dump($checker); exit;
        // if(!$checker || $checker == NULL)
        // {
        //     ?>
        <!-- //     <script language="javascript">alert("Email đăng nhập hoặc mật khẩu của bạn không chính xác, vui lòng thử lại !");
        //     window.location = '../admin';
        //     </script> -->
        //     <?php
        // }
        // else
        // {
        //     //luu vao _SESSION
        //     // echo "number 1 <br> <pre>";
        //     // var_dump($checker);
        //     // echo "</pre>";

        //     // echo "<br>";

        //     // echo "number 2 <br> <pre>";
        //     // var_dump($checker[0]->ho_ten); exit;
        //     // var_dump($checker[0]); exit;
        //     // echo "</pre>";


        //     $_SESSION['admin_login'] = $checker[0]->email;
        //     // var_dump($_SESSION['admin_login']); exit;
        //     // header("Location: ../admin");
        //     // header("Location: ./home");


        //     require_once 'Views/admin/admin_home.php';
        //     // require_once 'Views/admin/index.php';
        // }


    }


    //admin -> add -> products -> mac
    public function create_pages_insert()
    {
        $this->_name_h1_1 = "Thêm sản phẩm";
        // $this->_admin_name = "adm1";
        require_once "Views/admin/admin_add.php";
    }

    //admin -> insert-prod
    public function admin_insert()
    {
		// echo "clicked to insert-prod";
        // var_dump($_POST['tensp']); exit;
        // var_dump($_POST['id_dm']); exit;

        /*danh muc*/
        $check_id_dm = $_POST['id_dm'];

        switch($check_id_dm)
        {
            case 'macbook':
                $_id_dm = 1;
                break;
            
            case 'ipad':
                $_id_dm = 2;
                break;
            
            case 'iphone':
                $_id_dm = 3;
                break;
            
            case 'aWatch':
                $_id_dm = 4;
                break;
            
            case 'aTV':
                $_id_dm = 5;
                break;
            
            case 'aMusic':
                $_id_dm = 6;
                break;
            default:
                echo "Lỗi danh mục k hợp lệ! vui lòng thử lại.";
                break;
        }

        /**/
        


		$_tensp = $_POST['tensp'];
		$_sub_tensp = $_POST['sub_tensp'];
		$_slsp = $_POST['slsp'];
		$_imgsp = $_FILES['imgsp'];

		$fileName = $_imgsp['name']; //set name 
        // $admin = new Admin();
        $products = new Products();

        if(!empty($_id_dm) && isset($_id_dm))
        {
            $products->id_dm = $_id_dm;
        }

        // $products->id_dm = "1";

        $products->ten_sp = $_tensp;
        $products->sub_ten_sp = $_sub_tensp;
        $products->sl_sp = $_slsp;

        // var_dump($products->id_dm); exit;






		$fileName = null;
		if($_imgsp['size'] > 0)
		{
			$fileName = 'upload/'.time()."-".$_imgsp['name'];
		}

		if(move_uploaded_file($_imgsp['tmp_name'], $fileName))
		{
			//have image
			// $sql.=" ,avatar=:avatar";
		}else
		{
			//no image
			$fileName = null;
		}

        $products->img_sp = $fileName;
        
        $products->insert();

        ?>
            <script language="javascript">alert("Đã thêm thành công!");
            window.location = '../login';
            </script>
        <?php

        // header("Location: ../login");

        // $products->insert();
        // echo "done!";

		// //exit();
		// $users->avatar = $fileName;
		// $users->insert();
		// header("Location: ../index.php");
    }


    //admin -> del
    public function admin_del()
    {
        // require_once "Views/admin/admin_del.php";
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $prd = new Products();
			// echo $_GET['id'];
			// var_dump($_GET['id']); exit();

			$prd->delete($_GET['id']);
            
            ?>
                <script language="javascript">alert("Đã xóa thành công!");
                window.location = '../login';
                </script>
            <?php
            // var_dump($prd->delete($_GET['id'])); exit;
			// header("Location: ../login");
        }
    }
    

    //admin -> edit page
    public function admin_pages_edit()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $prd = new Products();
            
            if(($prd->find($_GET['id']) != NULL))
            {
                $value = $prd->find($_GET['id']);
                // var_dump($value->id_sp); exit;
                // var_dump($value->id_dm); exit;
                // var_dump($value->img_sp); exit;

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

                $this->_name_h1_1 = "Chỉnh sửa sản phẩm";
                require_once "Views/admin/admin_edit.php";
            }
        }
    }

    //admin -> submit edit
    public function admin_edit()
    {
        // require_once "Views/admin/admin_del.php";
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $prd = new Products();

            // $check_id_dm = $_POST['id_dm'];
            // var_dump($_POST['id_dm']); exit;
            
            
            /*danh muc*/
            $check_id_dm = $_POST['id_dm'];

            switch($check_id_dm)
            {
                case 'macbook':
                    $_id_dm = 1;
                    break;
                
                case 'ipad':
                    $_id_dm = 2;
                    break;
                
                case 'iphone':
                    $_id_dm = 3;
                    break;
                
                case 'aWatch':
                    $_id_dm = 4;
                    break;
                
                case 'aTV':
                    $_id_dm = 5;
                    break;
                
                case 'aMusic':
                    $_id_dm = 6;
                    break;
                    
                case "Macbook":
                    $_id_dm = 1;
                    break;
                
                case "iPad":
                    $_id_dm = 2;
                    break;
                
                case "iPhone":
                    $_id_dm = 3;
                    break;
                
                case "Apple Watch":
                    $_id_dm = 4;
                    break;
                
                case "Apple TV":
                    $_id_dm = 5;
                    break;
                
                case "Apple Music":
                    $_id_dm = 6;
                    break;
                default:
                    echo "Lỗi danh mục k hợp lệ! vui lòng thử lại.";
                    break;
            }

            /**/

            $_tensp = $_POST['tensp'];
            $_sub_tensp = $_POST['sub_tensp'];
            $_slsp = $_POST['slsp'];
            $_imgsp = $_FILES['imgsp'];
            $fileName = $_imgsp['name']; //set name 
            $fileName = null;

            // var_dump($_SESSION['img']); exit;
            // var_dump($_imgsp); exit;

            //update
            if($_imgsp['size'] > 0)
            {
                //neu co img update
                // echo "have img";
                $fileName = 'upload/'.time()."-".$_imgsp['name'];
            }

            if(move_uploaded_file($_imgsp['tmp_name'], $fileName))
            {
                //have image
                // $sql.=" ,avatar=:avatar";
            }else
            {
                //no image
                $fileName = null;
            }

            $prd->id_dm = $_id_dm;
            $prd->ten_sp = $_tensp;
            $prd->sub_ten_sp = $_sub_tensp;
            $prd->sl_sp = $_slsp;
            $prd->img_sp = $fileName;


            $prd->update($_GET['id']);
            ?>
                <script language="javascript">alert("Đã cập nhập thành công!");
                 window.location = '../login';
                </script>
            <?php

            // if(!empty($_id_dm) && isset($_id_dm))
            // {
            //     $products->id_dm = $_id_dm;
            // }

            // $products->id_dm = "1";




			// echo $_GET['id'];
			// var_dump($_GET['id']); exit();

			// $prd->delete($_GET['id']);
            
            // var_dump($prd->delete($_GET['id'])); exit;
			// header("Location: ../login");
        }
    }


    
    //change_password2
    public function changePassword2()
    {
        if (isset($_GET['doimatkhau'])) {
            $this->_index_pages = "changePassword";
            // echo "done!";
            // header("Location: ../admin");
            require_once 'Views/admin/admin_home.php';

        }
    }

}

?>