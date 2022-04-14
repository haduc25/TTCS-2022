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
    <link rel="stylesheet" href="./public/css/style_mac.css" />
    <link rel="icon" href="./public/img/icons/fav-icon-apple.png" type="image/x-icon" />
    <title>Mac - Apple (Hoàng Anh)</title>
</head>
<body>
        <!-- Header -->
        <header>
            <ul>
              <!-- <li><img src="./svg/apple.svg" alt="apple" /></li> -->
              <li><a href="./">Trang chủ</a></li>
              <li><a href="">Mac</a></li>
              <li><a href="">iPad</a></li>
              <li><a href="">iPhone</a></li>
              <li><a href="">Watch</a></li>
              <li><a href="">TV</a></li>
              <li><a href="">Music</a></li>
              <li><a href="">Support</a></li>
              <li><a href="#"><img src="./public/svg/search.svg" alt="search" /></a></li>
              <li><a href="#"><img src="./public/svg/shopping-bag.svg" alt="shopping bag" /></a></li>
            </ul>
        </header>

          <div class="container">
                <div class="under-header">
                    <ul>
                        <li>
                          <a href="#">
                            <img src="./public/svg/mac/macbookair_light.svg" alt="mac os" />
                              <p class="text-under-logos">
                                MacBook Air
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/mac/macbook_pro.svg" alt="mac os" />
                              <p class="text-under-logos">
                                MacBook Pro
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/mac/imac.svg" alt="mac os" />
                              <p class="text-under-logos">
                                iMac
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/mac/mac_pro_light.svg" alt="mac os" />
                              <p class="text-under-logos">
                                Mac Pro
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/mac/mac_mini_light.svg" alt="mac os" />
                              <p class="text-under-logos">
                                Mac mini
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/mac/mac_compare.svg" alt="mac os" />
                              <p class="text-under-logos">
                                Compare
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="./public/svg/mac/mac_pro_display_light.svg" alt="mac os" />
                              <p class="text-under-logos">
                                Pro Display XDR
                              </p>
                            </a>
                        </li>
                        <li>
                          <a href="#">
                            <img  style="width: 30px;" src="./public/svg/mac/mac_os.svg" alt="mac os" />
                              <p class="text-under-logos">
                                Monterey
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
                      style="background-image: url(./<?= $prd1item[0]->img_sp ?>)"
                    ></div>

                    <div class="top__title">
                      <!-- <h3 style="color: #1d1d1f;">MacBook Pro</h3> -->
                      <!-- cach lay du lieu u bien trong 1 obj -> trong 1 array: var_dump($prd1item[0]->ten_sp);
                        1. var_dump bien ra
                        2. neu o trong 1 obj & 1 array
                        3. [0] truy cap vao obj 
                        4. goi ten pt trong mang


                        ex:
                        array(1) { [0]=> object(Products)#5 (9) { ["tName"]=> string(8) "products" ["col"]=> array(1) { [0]=> string(47) "id_sp, id_dm, ten_sp, sub_ten_sp, img_sp, sl_sp" } ["conn"]=> object(PDO)#6 (0) { } ["id_sp"]=> string(1) "1" ["id_dm"]=> string(1) "3" ["ten_sp"]=> string(13) "iPhone 13 Pro" ["sub_ten_sp"]=> string(12) "Oh. So. Pro." ["img_sp"]=> string(0) "" ["sl_sp"]=> string(2) "10" } }
                    -->
                      <h3 style="color: #1d1d1f;"><?= $prd1item[0]->ten_sp ?></h3>
                      <h1 style="color: #1d1d1f;"><?= $prd1item[0]->sub_ten_sp ?></h1>
                      <div class="top__title--links">
                        <a class="btn-buy" href="">Mua ngay</a>
                        <a href="">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                      </div>
                    </div>
                  </section>

                  <!-- section2 -->
                  <section class="section2">
                    <div class="top__title2">
                      <h3 class="black">Which Mac is right for you?</h3>
                    </div>

                    <!-- products detail -->
                    <div class="container-products">
                        <!-- Begin: Note-nook -->
                        <div class="note-book"">

                        <?php foreach ($prd3item as $prd3) 
                        { ?>

                          <div class="note-book-details">
                            <img src="./<?= $prd3->img_sp ?>" alt="<?= $prd3->ten_sp ?>" />
                            <div class="color-icon">
                                <img src="./public/svg/mac/icon_color_2.png" alt="color" />
                            </div>

                            <!-- <h3>MacBook Air</h3> -->
                            <h3><?= $prd3->ten_sp ?></h3>

                            <div class="buy-btn-details">
                                <a class="btn-buy" href="">Mua ngay</a>
                                <a href="">Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt="learn more"/></a>
                            </div>

                            <!-- detail -->
                            <div class="details-pro">
                              <div class="detail-chip">
                                  <img src="./public/svg/mac/icons/icon_m1.png" alt="chipset">
                                  <!-- <p style="padding-bottom: 20px;">Apple M1 chip</p> -->
                                  <p style="padding-bottom: 20px;"><?= $prd3->chipset ?></p>

                                  <!-- cpu -->
                                  <div class="core-cpu">
                                    <!-- <h4>8-core</h4> -->
                                    <h4><?= $prd3->cpu ?></h4>
                                    <p>CPU</p>
                                  </div>

                                  <!-- gpu -->
                                  <div class="core-gpu">
                                    <p>Up to</p>
                                    <!-- <h4>8-core</h4> -->
                                    <h4><?= $prd3->gpu ?></h4>
                                    <p>GPU</p>
                                  </div>

                                  <!-- memory -->
                                  <div class="memory">
                                    <img src="./public/svg/mac/icons/icon_unified_memory.png" alt="memory">
                                    <!-- <p>Up to 16GB unified memory</p> -->
                                    <p><?= $prd3->memory ?></p>

                                    <!-- <h4>2TB</h4> -->
                                    <h4><?= $prd3->storage ?></h4>
                                    <p>Maximum configurable storage</p>

                                    <!-- display -->
                                    <!-- <h4>13.3”</h4> -->
                                    <h4><?= $prd3->screen ?></h4>
                                    <!-- <p>Retina display</p> -->
                                    <p><?= $prd3->sub_screen ?></p>
                                  </div>

                                  <!-- battery -->
                                  <div class="battery">
                                    <img src="./public/svg/mac/icons/icon_battery.png" alt="battery">
                                    <!-- <p>Up to 18 hours battery life</p> -->
                                    <p><?= $prd3->battery ?></p>
                                  </div>

                                  <!-- camera -->
                                  <div class="camera">
                                    <img src="./public/svg/mac/icons/icon_camera.png" alt="camera">
                                    <!-- <p>720p FaceTime HD camera</p> -->
                                    <p><?= $prd3->camera ?></p>

                                    <!-- Weight -->
                                    <!-- <h4>1.29kg</h4> -->
                                    <h4><?= $prd3->weight ?></h4>
                                    <p>Weight</p>
                                  </div>

                                  <!-- Touch ID -->
                                  <div class="touch-id">
                                    <img src="./public/svg/mac/icons/icon_touch_id.png" alt="camera">
                                    <!-- <p>Touch ID</p> -->
                                    <p><?= $prd3->sensor_id ?></p>
                                  </div>


                              </div>

                            </div>
                            
                          </div>

                          <?php } ?> 


                        </div>
                        <!-- End: Note-nook -->















                        <!-- desktop detail -->
                        <div class="desktop">

                        </div>

                      


                    </div>
                  </section>

                  <!-- section3 -->
                  <section class="section3">
                    <div class="background3" style="background-image: url(./public/img/mac/tile_monterey.jpg)"></div>
                    <!-- text inside -->
                    <div class="top__title3">
                      <h3>macOS Monterey</h3>
                      <h1>Hiệu năng cao đáp ứng mọi nhu cầu làm việc.</h1>
                      <h1>“Hi everyone.”</h1>
                    </div>
                  </section>
                  
                  <!-- BEGIN: section3-img  -->
                  <section class="section3">
                    <div class="background3" style="background-image: url(./public/img/mac/apple_at_work.jpg)"></div>
                  </section>

                  <section class="section3">
                    <div class="background3" style="background-image: url(./public/img/mac/education.jpg)"></div>
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