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
    <link rel="stylesheet" href="./public/css/style_iPhone.css" />
    <link rel="icon" href="./img/icons/fav-icon-apple.png" type="image/x-icon" />
    <title>iPhone - Apple (Hoàng Anh)</title>
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
              <li><a href="ipad">iPad</a></li>
              <li><a href="">iPhone</a></li>
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
                            <img src="./public/svg/iPhone/iphone_13_pro_light.svg" alt="iPhone" />
                              <p class="text-under-logos">
                                iPhone 13 Pro
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPhone/iphone_13_light.svg" alt="iPhone" />
                              <p class="text-under-logos">
                                iPhone 13
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPhone/iphone_12_light.svg" alt="iPhone" />
                              <p class="text-under-logos">
                                iPhone 12
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPhone/iphone_se_light.svg" alt="iPhone" />
                              <p class="text-under-logos">
                                iPhone SE
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPhone/iphone_11_light.svg" alt="iPhone" />
                              <p class="text-under-logos">
                                iPhone 11
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPhone/iphone_compare_light.svg" alt="iPhone" />
                              <p class="text-under-logos">
                                So sánh
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/iPhone/airpods_light.svg" alt="iPhone" />
                              <p class="text-under-logos">
                                AirPods
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img  style="width: 30px;" src="./public/svg/iPhone/airtag_light.svg" alt="iPhone" />
                              <p class="text-under-logos">
                                AirTag
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img  style="width: 30px;" src="./public/svg/iPhone/iphone_ios_light.svg" alt="iPhone" />
                              <p class="text-under-logos">
                                iOS 15
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
                    <div style="width: 100%; height: 85px; background-color: black;"></div>
                    <div
                      class="background"
                      style="background: url('./<?=$prd1[0]->img_sp?>') top center / cover no-repeat;"
                    ></div>

                    <div class="top__title">
                      <!-- <h3>iPhone 13 Pro</h3> -->
                      <h3><?=$prd1[0]->ten_sp?></h3>
                      <h1><?=$prd1[0]->sub_ten_sp?></h1>
                      <div class="top__title--links">
                        <a class="btn-buy" href="add-cart/add?id=<?= $prd1[0]->id_sp ?>">Mua ngay</a>
                        <a href="">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>
                  <div class="space-15"></div>


                  <!-- section2 -->
                  <section class="section12">
                    <div
                      class="background12"
                      style="background: url('./<?= $prd2[0]->img_sp ?>') bottom center / auto no-repeat;"
                    ></div>

                    <div class="top__title" style="color: #1D1D1F;">
                      <h3><?= $prd2[0]->ten_sp ?></h3>
                      <h1><?= $prd2[0]->sub_ten_sp ?></h1>
                      <div class="top__title--links">
                        <a class="btn-buy" href="add-cart/add?id=<?= $prd2[0]->id_sp ?>">Mua ngay</a>
                        <a href="">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>
                  <div class="space-15"></div>


                  <!-- section3 -->
                  <section class="section12">
                    <div
                      class="background12"
                      style="background: url('./<?= $prd3[0]->img_sp ?>') bottom center / auto no-repeat;"
                    ></div>

                    <div class="top__title" style="color: #1D1D1F; margin-top: 150px">
                      <h3><?= $prd3[0]->ten_sp ?></h3>
                      <h1><?= $prd3[0]->sub_ten_sp ?></h1>
                      <div class="top__title--links">
                        <a class="btn-buy" href="add-cart/add?id=<?= $prd3[0]->id_sp ?>">Mua ngay</a>
                        <a href="">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>
                  <div class="space-30"></div>

                  <!-- section5 -->
                  <section class="section2">
                    <div class="top__title2">
                      <h3 class="black">iPhone nào phù hợp với bạn?</h3>
                    </div>

                    <!-- products detail -->
                    <div class="container-products">
                        <!-- Begin: Note-nook -->
                        <div class="note-book"">
                        <?php foreach ($prd4item as $prd4i) 
                        { ?>

                          <!-- Begin: product1 -->
                          <div class="note-book-details">
                            <img src="./<?= $prd4i->img_sp ?>" alt="<?= $prd4i->ten_sp ?>" />
                            <div class="color-icon">
                                <img src="./public/svg/iPhone//icons/color_5_ip13_pro.png" alt="color" />
                            </div>

                            <h3><?= $prd4i->ten_sp ?></h3>
                            
                            <div class="buy-btn-details">
                                <a class="btn-buy" href="add-cart/add?id=<?= $prd4i->id_sp ?>">Mua ngay</a>
                                <a href="">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                            </div>

                            <!-- detail -->
                            <div class="details-pro">
                              <div class="detail-chip">

                                  <!-- display -->
                                  <div class="display">
                                    <h4><?= $prd4i->screen ?></h4>
                                    <p><?= $prd4i->sub_screen ?></p>
                                    <p>&nbsp;</p>
                                  </div>

                                  <div class="camera">
                                    <img src="./public/svg/iPhone/icons/icon_13_pro_camera.png" alt="chipset" style="padding-top: 40px;">
                                    <p><?= $prd4i->camera ?></p>
                                    <p style="padding-bottom: 20px; opacity: .6;"><?= $prd4i->sub_camera ?></p>
                                  </div>

                                  <div class="chip">
                                    <img src="./public/svg/iPhone/icons/icon_a15.png" alt="chipset" style="padding-top: 40px;">
                                    <p><?= $prd4i->chipset ?></p>
                                    <p style="padding-bottom: 20px; opacity: .6;"><?= $prd4i->sub_chipset ?></p>
                                  </div>

                                  <div class="cellular">
                                    <img src="./public/svg/iPhone/icons/icon_5g.png" alt="chipset" style="padding-top: 40px;">
                                    <p style="padding-bottom: 20px;"><?= $prd4i->cellular ?></p>
                                  </div>

                                  <div class="battery">
                                    <img src="./public/svg/iPhone/icons/icon_battery.png" alt="chipset" style="padding-top: 40px;">
                                    <p style="padding-bottom: 20px;"><?= $prd4i->battery ?></p>
                                  </div>

                                  <div class="touch-id ">
                                    <img src="./public/svg/iPhone/icons/icon_face_id.png" alt="faceid" style="padding-top: 40px;">
                                    <p style="padding-bottom: 20px;">Face ID</p>
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
                  <section class="section3" style="margin-bottom: -50px;">
                    <div class="background3" style="background-image: url(./public/img/iPhone/why_apple.jpg); background-size: cover; background-position: top center;"></div>
                    <!-- text inside -->
                    <div class="top__title" style="color: #1D1D1F; ">
                      <h1 style="padding: 0 33%;">Cách tốt nhất để mua một chiếc iPhone là gì?</h1>
                      <p style="font-size: 18px; padding: 18px 512px">Có rất nhiều lựa chọn tuyệt vời để mua iPhone. Cho dù bạn mua từ nhà bán lẻ, nhà cung cấp dịch vụ hay trực tuyến, việc tìm kiếm lựa chọn tốt nhất chưa bao giờ dễ dàng đến thế.</p>
                    </div>
                  </section>
                  
                  <div class="space-30"></div>
                  <div class="noi-bat" style="width: 100%; height: 200px; background-color: #f5f5f7; text-align: center; font-size: 28px; padding-top: 100px;">
                    <h1>Phụ kiện nổi bật</h1>
                  </div>

                  <!-- BEGIN: section3-img  -->
                  <section class="section3">
                    <div class="background3" style="background-image: url(./public/img/iPhone/magsafe_.jpg); top: 40px;  width: 140%;"></div>
                    
                    <div class="left_title">
                      <h1>MagSafe</h1>
                      <p style="font-size: 18px; padding: 0 325px">Gắn vào ốp điện thoại, ví hoặc cả hai. Và sạc không dây nhanh hơn.</p>
                    </div>
                  </section>

                  <div class="space-15"></div>
                  <section class="section3" style="margin-bottom: -80px;">
                    <div class="background3" style="background-image: url(./public/img/iPhone/airtag.jpg); background-position: top left;"></div>
                    
                    <div class="right_title">
                      <h1>AirTag</h1>
                      <p>Gắn ngay một cái vào chìa khóa của bạn. Đặt một cái khác vào ba lô của bạn. Nếu chúng bị thất lạc, chỉ cần sử dụng ứng dụng Find My IPhone.</p>
                      <div class="right_title--links">
                        <a href="">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                  </section>

                  <div class="space-15"></div>
                  <section class="section3">
                    <div class="background3" style="background-image: url(./public/img/iPhone/airpods.jpg);"></div>

                    <div class="top__title" style="color: #1D1D1F;">
                      <h1>AirPods</h1>
                      <p style="font-size: 18px; padding: 0 600px;">Khám phá tất cả các loại AirPods và tìm những loại phù hợp nhất cho bạn.</p>
                      <div class="top__title--links">
                        <a href="">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>

                  <div class="space-15"></div>
                  <section class="section3" style="margin-bottom: -60px;">
                    <div class="background3" style="background-image: url(./public/img/iPhone/ios15_preview.jpg); background-position: top center; background-size: cover;"></div>

                    <div class="top__title" style="color: #1D1D1F; margin-top: 240px;">
                      <h1>iOS 15</h1>
                      <p style="font-size: 18px; padding: 0 600px;">In touch. In the moment.</p>
                      <div class="top__title--links">
                        <a href="">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
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