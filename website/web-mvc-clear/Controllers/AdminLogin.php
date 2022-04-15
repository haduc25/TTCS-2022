<?php 
require_once './Models/Products.php';
require_once './Models/Admin.php';
session_start();


class AdminController
{
    public $_index_pages = "index";
    public $_name_h1_1 = "empty";

    public function index()
    {
        require_once 'Views/admin/admin_login.php';
    }

    public function login()
    {
        $admin = new Admin();
        $prd = new Products();

        $products_1 = $prd->getAllAdmin(1);
        $products_2 = $prd->getAllAdmin(2);
        $products_3 = $prd->getAllAdmin(3);
        $products_4 = $prd->getAllAdmin(4);

        $this->_index_pages = "home";
        $this->_name_h1_1 = "Quản lý sản phẩm";

        if(!empty($_SESSION['admin_login']) && isset($_SESSION['admin_login']))
        {
            require_once 'Views/admin/admin_home.php';
        }else
        {
            
        $_email = $_POST['email'];
        $_pwd = $_POST['password'];
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
            $_SESSION['admin_login'] = $checker[0]->email;
            $_SESSION['admin_name'] = $checker[0]->ho_ten;
            require_once 'Views/admin/admin_home.php';
        }

        ?>
        <br>
        <a href="../admin">back to admin login</a>
        <?php 
        exit;
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


    //admin -> add -> products -> mac
    public function create_pages_insert()
    {
        $this->_name_h1_1 = "Thêm sản phẩm";
        require_once "Views/admin/admin_add.php";
    }

    //admin -> insert-prod
    public function admin_insert()
    {
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

        $products->ten_sp = $_tensp;
        $products->sub_ten_sp = $_sub_tensp;
        $products->sl_sp = $_slsp;

		$fileName = null;
		if($_imgsp['size'] > 0)
		{
			$fileName = 'upload/'.time()."-".$_imgsp['name'];
		}

		if(move_uploaded_file($_imgsp['tmp_name'], $fileName))
		{}else
		{
			$fileName = null;
		}

        $products->img_sp = $fileName;
        
        $products->insert();

        ?>
            <script language="javascript">alert("Đã thêm thành công!");
            window.location = '../login';
            </script>
        <?php
    }


    //admin -> del
    public function admin_del()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $prd = new Products();
			$prd->delete($_GET['id']);
            
            ?>
                <script language="javascript">alert("Đã xóa thành công!");
                window.location = '../login';
                </script>
            <?php
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

            //update
            if($_imgsp['size'] > 0)
            {
                //neu co img update
                // echo "have img";
                $fileName = 'upload/'.time()."-".$_imgsp['name'];
            }

            if(move_uploaded_file($_imgsp['tmp_name'], $fileName))
            {}else
            { $fileName = null;}

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
        }
    }
}

?>