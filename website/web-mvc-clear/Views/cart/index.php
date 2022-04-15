<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="icon" href="./public/img/icons/fav-icon-apple.png" type="image/x-icon" />
    <title>Apple (Hoàng Anh)</title>
    <style>
      .space-200
      {
        width: 100%;
        height: 200px;
        background-color: #f5f5f7;
        border-bottom: 2px solid #ccc;
      }

      .pdt-80
      {
        padding-top: 80px;
      }

      body {
        background: #eecda3;
        background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
        background: linear-gradient(to right, #eecda3, #ef629f);
        min-height: 100vh;
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <header>
      <ul>
        <!-- <li><img src="./public/svg/apple.svg" alt="apple" /></li> -->
        <li><a href="./">Trang chủ</a></li> 
        <li><a href="mac">Mac</a></li>
        <li><a href="ipad">iPad</a></li>
        <li><a href="iphone">iPhone</a></li>
        <li><a href="">Watch</a></li>
        <li><a href="">Hỗ trợ</a></li>
        <li><a href="#"><img src="./public/svg/search.svg" alt="search" /></a></li>
        <li><a href=""><img src="./public/svg/shopping-bag.svg" alt="shopping bag" /></a></li>
      </ul>
    </header>
    <!-- SECTIONS -->
    <section>
      <div class="px-4 px-lg-0">
        <!-- For demo purpose -->
        <div class="container text-white py-5 text-center">
          <h1 class="display-4 pdt-80">Giỏ hàng</h1>
        </div>
        <!-- End -->

        <div class="pb-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                <!-- Shopping cart table -->
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="border-0 bg-light">
                          <div class="p-2 px-3 text-uppercase">Sản phẩm</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Giá</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Số lượng</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                          <div class="py-2 text-uppercase">Thành tiền</div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="border-0">
                          <div class="p-2">
                            <a href="./cart.php?action=delete&id=<?=$row['id']?>" class="text-dark" style="position: relative; left: -20px;"><i class="fa fa-trash"></i></a>
                            <img src="https://bootstrapious.com/i/snippets/sn-cart/product-1.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Thể loại: Watches</span>
                            </div>
                          </div>
                        </th>
                        <td class="border-0 align-middle"><strong>$79.00</strong></td>
                        <td class="border-0 align-middle">
                          <input class="quantity12" min="0" name="quantity" value="1" type="number" size="2" style="width: 50px;">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                <!-- btn -->
                  <a href="./"><input class="btn btn-dark px-4 rounded-pill" style="float: left;" type="button" name="back" value="Tiếp tục mua sắm";></a>
                  <input class="btn btn-dark px-4 rounded-pill" style="float: right; " type="submit" name="update_click" value="Cập nhật giỏ hàng">
                
                <!-- end: btn -->

                </div>
                <!-- End -->
              </div>
            </div>

            <div class="row py-5 p-4 bg-white rounded shadow-sm">
              <div class="col-lg-12">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold text-center">Thông tin khách hàng</div>
                <div class="p-4">
                  <!-- <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                  <div class="input-group mb-4 border rounded-pill p-2">
                    <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                    <div class="input-group-append border-0">
                      <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                    </div>
                  </div> -->
                  <p class='font-italic mb-4'>Bạn đã có tài khoản? <a href='#'>Đăng nhập</a></p>
                  <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Họ và tên</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="Họ và Tên"> </div>
                  <div class="row no-gutters">
                      <div class="col-sm-6 pr-sm-2">
                          <div class="form-group"> <label for="NAME" class="small text-muted mb-1">E-mail</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="Example@email.com"> </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Số điện thoại</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId"> </div>
                      </div>
                  </div>           
                  <div class="form-group"> <label for="NAME" class="small text-muted mb-1">Địa chỉ</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId"> </div>                
                  <div class="form-group"> 
                    <label for="NAME" class="small text-muted mb-1">Ghi chú</label>
                    <textarea name="" cols="30" rows="8" class="form-control"></textarea>
                  </div>
                </div>
                <a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Đặt hàng và đến phương thức thanh toán</a>
              </div>
            </div>

          </div>
        </div>
      </div>
</section>
    


    <!-- FOOTER -->
    <footer class="footer" style="margin-top: 60px;">
                    <div class="footer__wrapper">
                      <div class="space-200">
                        <h1 style= "text-align: center; padding-top: 80px;">Công ty điện thoại Hoàng Anh</h1>
                      </div>
                      <div class="footer__links">
                        <div class="footer__links--column">
                          <div class="footer__links--column-title">Hotline Mua Hàng</div>
                          <a href="">0969 740 337</a>
                          <a href="">0964 302 678</a>
                          <a href="">0973 652 911</a>
                        </div>

                        <div class="footer__links--column">
                          <div class="footer__links--column-title">Hotline CSKH</div>
                          <a href="">1900 6706</a>
                          <a href="">1900 8869</a>
                          <a href="">1800 8168</a>
                        </div>

                        <div class="footer__links--column">
                          <div class="footer__links--column-title">Email CSKH</div>
                          <a href="">hoanganh1206@gmail.com </a>
                        </div>

                        <div class="footer__links--column">
                          <div class="footer__links--column-title">Giấy phép kinh doanh số</div>
                          <a href="">41G8079632</a>
                        </div>

                        <div class="footer__links--column">
                          <div class="footer__links--column-title">Mạng xã hội</div>
                          <a href="">Facebook</a>
                          <a href="">Zalo</a>
                          <a href="">Youtube</a>
                          <a href="">Twitter</a>
                          <a href="">Instagram</a>
                        </div>
                      </div>

                      <div class="footer__copyright">
                        <p>Copyright © 2022 Hoàng Anh. All rights reserved.</p>
                        <a href="">Việt Nam</a>

                        <div class="links">
                          <a href="">Chính sách bảo mật</a>
                          <a href="">Điều khoản sử dụng</a>
                        </div>
                      </div>
                    </div>
                  </footer>
  </body>
</html>
