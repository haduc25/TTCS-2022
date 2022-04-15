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
</head>
<body>
        <!-- Header -->
        <header>
            <ul>
              <!-- <li><img src="./svg/apple.svg" alt="apple" /></li> -->
              <li><a href="./">Trang chủ</a></li>
              <li><a href="mac">Mac</a></li>
              <li><a href="">iPad</a></li>
              <li><a href="">iPhone</a></li>
              <li><a href="">Watch</a></li>
              <li><a href="">TV</a></li>
              <li><a href="">Music</a></li>
              <li><a href="">Hỗ trợ</a></li>
              <li><a href="#"><img src="./public/svg/search.svg" alt="search" /></a></li>
              <li><a href="#"><img src="./public/svg/shopping-bag.svg" alt="shopping bag" /></a></li>
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
                                Compare
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
                                Keyboards
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
                        <a class="btn-buy" href="#">Mua ngay</a>
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
                        <a class="btn-buy" href="#">Mua ngay</a>
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
                        <a class="btn-buy" href="#">Mua ngay</a>
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
                        <a class="btn-buy" href="#">Mua ngay</a>
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
                                <a class="btn-buy" href="#">Mua ngay</a>
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
                      <ul>
                        <li>1. Apple Fitness+ is coming late 2020.</li>
                        <li>
                          2. The Apple One free trial includes only services that you are not
                          currently using through a free trial or a subscription. Plan
                          automatically renews after trial until cancelled. Restrictions and
                          other terms apply.
                        </li>
                        <li>
                          iPhone 12 mini and iPhone 12 Pro Max have not been authorized as
                          required by the rules of the Federal Communications Commission.
                          iPhone 12 mini and iPhone 12 Pro Max are not, and may not be,
                          offered for sale or lease, or sold or leased, until authorization is
                          obtained.
                        </li>
                        <li>
                          To access and use all the features of Apple Card, you must add Apple
                          Card to Wallet on an iPhone or iPad with iOS 12.4 or later or
                          iPadOS. To manage Apple Card Monthly Installments, you need an
                          iPhone with iOS 13.2 or later or an iPad with iPadOS 13.2 or later.
                          Update to the latest version of iOS or iPadOS by going to Settings >
                          General > Software Update. Tap Download and Install.
                        </li>
                        <li>Available for qualifying applicants in the United States.</li>
                        <li>
                          Apple Card is issued by Goldman Sachs Bank USA, Salt Lake City
                          Branch.
                        </li>
                        <li>
                          Apple TV+ is $4.99/month after free trial. One subscription per
                          Family Sharing group. Offer good for 3 months after eligible device
                          activation. Plan automatically renews until cancelled. Restrictions
                          and other terms apply.
                        </li>
                      </ul>

                      <div class="footer__links">
                        <div class="footer__links--column">
                          <div class="footer__links--column-title">Shop and Learn</div>
                          <a href="">Mac</a>
                          <a href="">iPad</a>
                          <a href="">iPhone</a>
                          <a href="">Watch</a>
                          <a href="">Music</a>
                          <a href="">AirPods</a>
                          <a href="">HomePod</a>
                          <a href="">iPod touch</a>
                          <a href="">Accessories</a>
                          <a href="">Gift Card</a>
                        </div>

                        <div class="footer__links--column">
                          <div class="footer__links--column-title">Services</div>
                          <a href="">Apple Music</a>
                          <a href="">Apple TV+</a>
                          <a href="">Apple Fitness+</a>
                          <a href="">Apple News+</a>
                          <a href="">Apple Arcade</a>
                          <a href="">iCloud</a>
                          <a href="">Apple One</a>
                          <a href="">Apple Card</a>
                          <a href="">Apple Books</a>
                          <a href="">App Store</a>
                          <div class="footer__links--column-title">Account</div>
                          <a href="">Manage Your Apple ID</a>
                          <a href="">Apple Store Account</a>
                          <a href="">iCloud.com</a>
                        </div>

                        <div class="footer__links--column">
                          <div class="footer__links--column-title">Apple Store</div>
                          <a href="">Find a Store</a>
                          <a href="">Shop Online</a>
                          <a href="">Genius Bar</a>
                          <a href="">Today at Apple</a>
                          <a href="">Apple Camp</a>
                          <a href="">Apple store App</a>
                          <a href="">Refurbished and Clearance</a>
                          <a href="">Apple Trade In</a>
                          <a href="">Order Status</a>
                          <a href="">Shopping Help</a>
                        </div>

                        <div class="footer__links--column">
                          <div class="footer__links--column-title">For Business</div>
                          <a href="">Apple and Business</a>
                          <a href="">Shop and Business</a>
                          <div class="footer__links--column-title">For Education</div>
                          <a href="">Apple and Education</a>
                          <a href="">Shop for K-12</a>
                          <a href="">Shop College</a>
                          <div class="footer__links--column-title">For Healthcare</div>
                          <a href="">Apple in Healthcare</a>
                          <a href="">Health on Apple Watch</a>
                          <a href="">Health Records on iPhone</a>
                          <div class="footer__links--column-title">For Government</div>
                          <a href="">Shop for Government</a>
                          <a href="">Shop for Veterans and Military</a>
                        </div>

                        <div class="footer__links--column">
                          <div class="footer__links--column-title">Apple Values</div>
                          <a href="">Accessibility</a>
                          <a href="">Education</a>
                          <a href="">Environment</a>
                          <a href="">Inclusion and Diversity</a>
                          <a href="">Privacy</a>
                          <a href="">Supplier Responsibility</a>
                          <div class="footer__links--column-title">About Apple</div>
                          <a href="">Newsroom</a>
                          <a href="">Apple Leadership</a>
                          <a href="">Job Opportunities</a>
                          <a href="">Investors</a>
                          <a href="">Events</a>
                          <a href="">Contact Apple</a>
                        </div>
                      </div>

                      <div class="footer__more">
                        More ways to shop: <a href="">Find an Apple Store</a> or
                        <a href="">other retailer</a> near you. Or call 1-800-MY-APPLE.
                      </div>

                      <div class="footer__copyright">
                        <p>Copyright © 2020 Apple Inc. All rights reserved.</p>
                        <a href="">United States</a>

                        <div class="links">
                          <a href="">Privacy Policy</a>
                          <a href="">Terms of Use</a>
                          <a href="">Sales and Refunds</a>
                          <a href="">Site Map</a>
                        </div>
                      </div>
                    </div>
                  </footer>
                </div>
                <!-- END: content -->

          </div>
</body>
</html>