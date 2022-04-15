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

    <link rel="icon" href="../public/img/icons/fav-icon-apple.png" type="image/x-icon" />
    <title>Apple (Hoàng Anh)</title>
    <style>
      :root {
        --greyDark: #333333;
        --greyDark2: #1D1D1F;
        --greyLight: #d6d6d6;
        --greyLight2: #a1a1a6;
        --white: #f5f5f7;
        --text: #1d1d1f;
        --blue: #0071e3;
        --a: #2997ff;
      }

      * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
                box-sizing: border-box;
      }

      body {
        font-family: "Roboto", sans-serif;
        font-size: 14px;
      }

      a {
        text-decoration: none;
        font-weight: 300;
      }

      a:hover {
        text-decoration: underline;
      }

      .black {
        color: var(--text) !important;
      }

      .white {
        color: var(--white) !important;
      }

      .dark-blue {
        color: #06c !important;
      }


      header {
        width: 100%;
        height: 45px;
        background: rgba(0, 0, 0, 0.8);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        -webkit-backdrop-filter: saturate(180%) blur(20px);
                backdrop-filter: saturate(180%) blur(20px);
      }

      header ul {
        height: 100%;
        width: 100%;
        max-width: 1000px;
        margin: auto;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        list-style: none;
      }

      header ul li a{
        cursor: pointer;
        text-decoration: none;
        color: var(--greyLight);
      }

      header ul li a:hover {
        color: #fff;
        text-decoration: none;
      }

      header ul li img {
        width: 18px;
        height: 18px;
        opacity: .8;
      }

      header ul li img:hover {
        opacity: 1;

      }

      .information {
        height: 45px;
        width: 100%;
        background: var(--blue);
        text-align: center;
        line-height: 45px;
        margin-top: 45px;
      }

      .information img {
        width: 10px;
      }

      .information a {
        color: #fff;
      }

      .information-2 {
        background: #fff;
        color: var(--text);
        margin: 0;
      }

      .information-2 a {
        color: var(--blue);
      }

      .top__title {
        margin-top: 52px;
        color: var(--greyDark2);
        text-align: center;
        z-index: 3;
      }





      .top__title h1 {
        font-size: 52px;
        font-weight: 500;
        letter-spacing: -1px;
      }

      .top__title h3 {
        margin-top: 3px;
        font-size: 26px;
        font-weight: 400;
      }

      .top__title h4 {
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 3px;
        margin-bottom: 15px;
        color: #d01f2a;
      }

      .top__title--links {
        margin-top: 12px;
      }

      .top__title--links a {
        font-size: 21px;
        font-weight: 400;
        color: var(--a);
      }

      .top__title--links a:nth-child(2) {
        margin-left: 30px;
      }

      .top__title--links a img {
        width: 12px;
      }


      .top__title2 {
        position: absolute;
        top: 0;
        left: 40%;
        right: 40%;
        margin-top: 52px;
        color: var(--greyDark2);
        text-align: center;
        z-index: 3;
      }

      .top__title2 h1 {
        font-size: 52px;
        font-weight: 500;
        letter-spacing: -1px;
      }

      .top__title2 h3 {
        margin-top: 3px;
        font-size: 26px;
        font-weight: 400;
      }

      .top__title2 h4 {
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 3px;
        margin-bottom: 15px;
        color: #d01f2a;
      }

      .top__title2--links {
        margin-top: 12px;
      }

      .top__title2--links a {
        font-size: 21px;
        font-weight: 400;
        color: var(--a);
      }

      .top__title2--links a:nth-child(2) {
        margin-left: 30px;
      }

      .top__title2--links a img {
        width: 12px;
      }

      .bottom__title {
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
        bottom: 50px;
        text-align: center;
        z-index: 3;
      }

      /* .bottom__title h2 {
        font-size: 21px;
        font-weight: 400;
        line-height: 30px;
        color: var(--greyLight2);
      }

      .bottom__title h2:nth-child(1) {
        color: var(--white);
        font-weight: 600;
      }

      .bottom__title h2:nth-child(4) {
        margin-top: 20px;
      } */

      .background {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 120%;
        background-size: cover;
        background-position: center;
        z-index: -1;
      }

      .section1 {
        height: 820px;
        width: 100%;
        position: relative;
        overflow: hidden;
      }

      .section1 .background {
        top: -13%;
      }

      .section2 {
        height: 950px;
        position: relative;
        width: 100%;
        overflow: hidden;
        margin-top: 10px;
      }

      .section2 .background {
        top: -13%;
      }


      .section22 {
        height: 600px;
        position: relative;
        width: 100%;
        overflow: hidden;
        margin-top: 10px;
        padding-top: 350px;
      }

      .bottom__title2 {
        position: absolute;
        top: 600px;
        left: 0;
        right: 0;
        bottom: 50px;
        text-align: center;
        z-index: 3;
        background-color: #f5f5f7;
        width: 100%;
        height: 100%;
      }

      .section22 .background {
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 600px;
      }

      .section22 h1 {
        font-size: 38px;
        font-weight: 700;
        letter-spacing: 2px;
      }

      .section22 h1 img {
        width: 50px;
        /* margin-right: 5px;
        margin-top: 5px; */
      }

      .section3 {
        width: 100%;
        height: 690px;
        overflow: hidden;
        position: relative;
        background: #000;
      }

      .section3 h1 {
        font-size: 38px;
        font-weight: 700;
        letter-spacing: 2px;
      }

      .section3 h1 img {
        width: 38px;
      }

      .section3 .background {
        width: 280px;
        height: 450px;
        left: 50%;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
        z-index: 1;
      }

      .section4 {
        margin-top: 10px;
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
        overflow: hidden;
      }

      .section4 .row {
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        margin-bottom: 10px;
      }

      .section4__item {
        height: 590px;
        -webkit-box-flex: 0.497;
            -ms-flex: 0.497;
                flex: 0.497;
        position: relative;
        overflow: hidden;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        background: #fbfbfb;
      }

      .section4__item h1 {
        font-size: 40px;
      }

      .section4__item h1 img {
        width: 30px;
      }

      .section4__item h3 {
        max-width: 298px;
        font-size: 21px;
        font-weight: 400;
      }

      .section4__item h4 {
        font-size: 12px;
        letter-spacing: normal;
        margin-bottom: 0;
      }

      .section4__item a {
        font-size: 17px;
      }

      .section4__item a img {
        width: 10px;
      }

      .section4__item .background {
        height: 100%;
        left: 50%;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
        z-index: 2;
      }

      .section4__item .homePod {
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
        bottom: 50px;
      }

      .section4__item .one {
        width: 550px;
        height: 350px;
      }

      .section4__item .subTitle {
        position: absolute;
        bottom: 30px;
        left: 50%;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
      }

      .section4__item .subTitle a {
        height: 20px;
        width: 110px;
        margin: auto;
        margin-top: 10px;
        color: #000;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
      }

      .section4__item .subTitle a img {
        width: 18px;
        margin-left: 5px;
      }

      .footer {
        width: 100%;
        height: 810px;
        background: var(--white);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
      }

      .footer__wrapper {
        width: 970px;
      }

      .footer ul {
        font-size: 12px;
        list-style: none;
        color: #86868b;
        border-bottom: 1px solid var(--greyLight);
      }

      .footer ul li {
        margin: 15px 0;
        letter-spacing: 0.1px;
      }

      .footer__links {
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }

      .footer__links--column {
        width: 200px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
      }

      .footer__links--column-title {
        font-weight: 400;
        font-size: 12px;
        margin-top: 18px;
        margin-bottom: 15px;
        letter-spacing: 0.5px;
      }

      .footer__links--column a {
        font-size: 12px;
        color: #515154;
        margin-bottom: 12px;
      }

      .footer__more {
        font-size: 13px;
        color: #86868b;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--greyLight);
      }

      .footer__more a {
        color: #06c;
      }

      .footer__copyright {
        width: 100%;
        height: 20px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: justify;
            -ms-flex-pack: justify;
                justify-content: space-between;
        font-size: 13px;
        color: #86868b;
        margin-top: 4px;
        position: relative;
      }

      .footer__copyright .links {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
      }

      .footer__copyright .links a {
        padding: 0 10px;
        color: #515154;
        border-left: 1px solid var(--greyLight);
      }

      .footer__copyright .links a:nth-child(1) {
        border: none;
      }
      # sourceMappingURL=style.css.map
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
        <li><a href="../">Trang chủ</a></li> 
        <li><a href="../mac">Mac</a></li>
        <li><a href="../ipad">iPad</a></li>
        <li><a href="../iphone">iPhone</a></li>
        <li><a href="">Watch</a></li>
        <li><a href="">Hỗ trợ</a></li>
        <li><a href="#"><img src="../public/svg/search.svg" alt="search" /></a></li>
        <li><a href=""><img src="../public/svg/shopping-bag.svg" alt="shopping bag" /></a></li>
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
                            <img src="../<?=$value->img_sp?>" alt="<?=$value->ten_sp?>" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?=$value->ten_sp?></a></h5><span class="text-muted font-weight-normal font-italic d-block">Thể loại: <?php if($_id_dm != "empty"){echo $_id_dm;} ?></span>
                            </div>
                          </div>
                        </th>
                        <td class="border-0 align-middle"><strong>$799.00</strong></td>
                        <td class="border-0 align-middle">
                          <input class="quantity12" min="0" name="quantity" value="1" type="number" size="2" style="width: 50px;">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                <!-- btn -->
                  <a href="../"><input class="btn btn-dark px-4 rounded-pill" style="float: left;" type="button" name="back" value="Tiếp tục mua sắm";></a>
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
