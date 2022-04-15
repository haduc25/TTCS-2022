<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="./public/css/style_iPad.css" />
    <link rel="icon" href="./img/icons/fav-icon-apple.png" type="image/x-icon" />
    <title>iPad - Apple (Hoàng Anh)</title>
    <style>
      .space-200
      {
        width: 100%;
        height: 200px;
        background-color: #f5f5f7;
        border-bottom: 2px solid #ccc;
      }
    </style>
</head>
<body>
        <!-- Header -->
        <header>
            <ul>
              <!-- <li><img src="./svg/apple.svg" alt="apple" /></li> -->
              <li><a href="./">Trang chủ</a></li>
              <li><a href="mac">Mac</a></li>
              <li><a href="">iPad</a></li>
              <li><a href="iphone">iPhone</a></li>
              <li><a href="">Watch</a></li>
              <li><a href="">Hỗ trợ</a></li>
              <li><a href="#"><img src="./public/svg/search.svg" alt="search" /></a></li>
              <li><a href="add-cart"><img src="./public/svg/shopping-bag.svg" alt="shopping bag" /></a></li>
            </ul>
        </header>

          <div class="container">
                <div class="under-header">
                    <ul>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPad/ipadpro_light.svg" alt="iPad" />
                              <p class="text-under-logos">
                                iPad Pro
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPad/ipad_air_light.svg" alt="iPad" />
                              <p class="text-under-logos">
                                iPad Air
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPad/ipad_light.svg" alt="iPad" />
                              <p class="text-under-logos">
                                iPad
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPad/ipad_mini_light.svg" alt="iPad" />
                              <p class="text-under-logos">
                                iPad mini
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPad/mac_compare.svg" alt="iPad" />
                              <p class="text-under-logos">
                                So sánh
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPad/apple_pencil_light.svg" alt="iPad" />
                              <p class="text-under-logos">
                                Apple Pencil
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPad/keyboard_light.svg" alt="iPad" />
                              <p class="text-under-logos">
                                Bàn phím
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img  style="width: 30px;" src="./public/svg/iPad/airpods_light.svg" alt="iPad" />
                              <p class="text-under-logos">
                                AirPods
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img  style="width: 30px;" src="./public/svg/iPad/ipad_os_light.svg" alt="iPad" />
                              <p class="text-under-logos">
                                iPadOS
                              </p>
                            </a>
                        </li>
                      </ul>
                </div>

                <!--========================= SECTIONS =========================-->
                <!-- BEGIN: content -->
                <div class="content">
                  <!-- SECTIONS -->
                  <!-- section1 -->
                  <section class="section1">
                    <div
                      class="background"
                      style="background: url('./<?=$prd1[0]->img_sp; ?>') top center / auto no-repeat;"

                    ></div>

                    <div class="left_title">
                      <img src="./public/img/logos/iPadMini.png" alt="iPAd">
                      <!-- <h3>Mega power. Mini sized.</h3> -->
                      <h3><?=$prd1[0]->sub_ten_sp; ?></h3>
                      
                      <div class="left_title--links">
                        <a class="btn-buy" href="add-cart/add?id=<?= $prd1[0]->id_sp ?>">Mua ngay</a>
                        <a href="#">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>
                  <div class="space-15"></div>


                  <!-- section2 -->
                  <section class="section12">
                    <div
                      class="background12"
                      style="background: url('./<?=$prd2[0]->img_sp; ?>') center / auto no-repeat;"
                    ></div>

                    <div class="right_title">
                      <h1><?=$prd2[0]->ten_sp; ?></h1>
                      <h3><?=$prd2[0]->sub_ten_sp; ?></h3>
                      <div class="right_title--links">
                        <a class="btn-buy" href="add-cart/add?id=<?= $prd2[0]->id_sp ?>">Mua ngay</a>
                        <a href="#">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>
                  <div class="space-15"></div>

                  <!-- section3 -->
                  <section class="section1">
                    <div
                      class="background"
                      style="background: url('./<?=$prd3[0]->img_sp; ?>') center / auto no-repeat;"
                    ></div>

                    <div class="left_title">
                      <!-- <h1>iPad Air</h1> -->
                      <h1><?=$prd3[0]->ten_sp; ?></h1>
                      <h3><?=$prd3[0]->sub_ten_sp; ?></h3>
                      <div class="left_title--links">
                        <a class="btn-buy" href="add-cart/add?id=<?= $prd3[0]->id_sp ?>">Mua ngay</a>
                        <a href="#">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>
                  <div class="space-15"></div>
                  
                  <!-- section4 -->
                  <section class="section12">
                    <div
                      class="background"
                      style="background: url('./<?=$prd4[0]->img_sp; ?>') center / auto no-repeat;"
                    ></div>

                    <div class="top__title">
                      <h1><?=$prd4[0]->ten_sp; ?></h1>
                      <h3><?=$prd4[0]->sub_ten_sp; ?></h3>
                      <div class="top__title--links">
                        <a class="btn-buy" href="add-cart/add?id=<?= $prd4[0]->id_sp ?>">Mua ngay</a>
                        <a href="#">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>
                  <div class="space-30"></div>

                  <!-- section5 -->
                  <section class="section2">
                    <div class="top__title2">
                      <h3 class="black">iPad nào phù hợp với bạn?</h3>
                    </div>

                    <!-- products detail -->
                    <div class="container-products">
                        <!-- Begin: Note-nook -->
                        <div class="note-book"">
                        <?php foreach ($prd4item as $prd4i) 
                        { ?>
                          <div class="note-book-details">
                            <img src="./<?=$prd4i->img_sp; ?>" alt="<?=$prd4i->ten_sp; ?>" />
                            <div class="color-icon">
                                <img src="./public/svg/iPad/icons/color_2.jpg" alt="color" />
                            </div>

                            <h3><?=$prd4i->ten_sp; ?></h3>
                            
                            <div class="buy-btn-details">
                                <a class="btn-buy" href="add-cart/add?id=<?= $prd4i->id_sp ?>">Mua ngay</a>
                                <a href="#">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                            </div>

                            <!-- detail -->
                            <div class="details-pro">
                              <div class="detail-chip">

                                  <!-- display -->
                                  <div class="display">
                                    <h4><?=$prd4i->screen ?></h4>
                                    <p><?=$prd4i->sub_screen ?></p>
                                    <p>&nbsp;</p>
                                  </div>

                                  <div class="chip">
                                    <img src="./public/svg/iPad/icons/m1_chip.png" alt="chipset" style="padding-top: 40px;">
                                    <p style="padding-bottom: 20px;"><?=$prd4i->chipset ?></p>
                                  </div>

                                  <div class="usb">
                                    <img src="./public/svg/iPad/icons/usbc_thunderbolt.png" alt="chipset" style="padding-top: 40px;">
                                    <p style="padding-bottom: 20px;">USB-C / USB 4</p>
                                  </div>

                                  <div class="cellular">
                                    <img src="./public/svg/iPad/icons/cellular_5g.png" alt="chipset" style="padding-top: 40px;">
                                    <p style="padding-bottom: 20px;"><?=$prd4i->cellular ?></p>
                                  </div>

                                  <div class="pencil">
                                    <img src="./public/svg/iPad/icons/pencil.png" alt="chipset" style="padding-top: 40px;">
                                    <p style="padding-bottom: 20px;">Apple Pencil</p>
                                  </div>

                                  <div class="keyboard ">
                                    <img src="./public/svg/iPad/icons/magic_keyboard.png" alt="chipset" style="padding-top: 40px;">
                                    <p style="padding-bottom: 20px;">Magic Keyboard</p>
                                  </div>

                              </div>

                            </div>
                            
                          </div>
                          <!-- end1 -->
                          <?php } ?> 

                        </div>
                        <!-- End: Note-nook -->





                      


                    </div>
                  </section>

                  <div class="space-30"></div>
                  <!-- section3 -->
                  <section class="section3">
                    <div class="background3" style="background-image: url(./public/img/iPad/airpods__.jpg)"></div>
                    <!-- text inside -->
                    <!-- <div class="top__title3">
                      <h3>macOS Monterey</h3>
                      <h1>Hiệu năng cao đáp ứng mọi nhu cầu làm việc.</h1>
                      <h1>“Hi everyone.”</h1>
                    </div> -->
                  </section>
                  
                  <div class="space-30"></div>
                  <!-- BEGIN: section3-img  -->
                  <section class="section3">
                    <div class="background3" style="background-image: url(./public/img/iPad/why_ipad.jpg); top: 40px;  width: 60%;"></div>
                    
                    <div class="right_title">
                      <h1>Tại sao là iPad?</h1>
                      <p>Yes, it does that.</p>
                      <p>And then some.</p>
                      <div class="right_title--links">
                        <a href="#">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>

                  <div class="space-30"></div>
                  <section class="section3">
                    <div class="background3" style="background-image: url(./public/img/iPad/ipados_preview.jpg)"></div>
                    
                    <div class="top__title" style="margin-top: 30px; margin-left: 0px;">
                      <h1>iPadOS 15</h1>
                      <h3>Làm việc một cách dễ dàng.</h3>
                      <div class="top__title--links">
                        <a href="#">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                  </section>

                  <div class="space-30"></div>
                  <section class="section3">
                    <div class="background3" style="background-image: url(./public/img/iPad/icloud__.jpg); width: 60%;"></div>

                    <div class="right_title">
                      <h1>iCloud</h1>
                      <p>Nơi tốt nhất để lưu tất cả ảnh, tệp của bạn và hơn thế nữa.</p>
                      <div class="right_title--links">
                        <a href="#">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>
                  <!-- END: section3-img  -->
                  

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
                </div>
                <!-- END: content -->

          </div>
</body>
</html>