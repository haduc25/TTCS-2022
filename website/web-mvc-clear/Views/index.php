<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
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
    </style>
  </head>
  <body>
    <!-- Header -->
    <header>
      <ul>
        <!-- <li><img src="./public/svg/apple.svg" alt="apple" /></li> -->
        <li><a href="">Trang chủ</a></li> 
        <li><a href="./mac">Mac</a></li>
        <li><a href="ipad">iPad</a></li>
        <li><a href="iphone">iPhone</a></li>
        <li><a href="">Watch</a></li>
        <li><a href="">Hỗ trợ</a></li>
        <li><a href="#"><img src="./public/svg/search.svg" alt="search" /></a></li>
        <li><a href="add-cart"><img src="./public/svg/shopping-bag.svg" alt="shopping bag" /></a></li>
      </ul>
    </header>
    <!-- SECTIONS -->
    <section class="section1">
      <div
        class="background"
        style="background-image: url(./<?= $prd1[0]->img_sp ?>)"
      ></div>
        
      <div class="top__title">
        <h1 style="color: #f5f5f7;"><?= $prd1[0]->ten_sp ?></h1>
        <h3 style="color: #f5f5f7;"><?= $prd1[0]->sub_ten_sp ?></h3>
        <div class="top__title--links">
          <a href=""
            >Xem thêm <img src="./public/svg/right-arrow-blue.svg" alt=""
          /></a>
          <a href="add-cart/add?id=<?= $prd1[0]->id_sp ?>">Mua ngay <img src="./public/svg/right-arrow-blue.svg" alt="" /></a>
        </div>
      </div>
    </section>

    <section class="section2">
      <div
        class="background"
        style="background-image: url(./<?= $prd2[0]->img_sp ?>"
      ></div>

      <div class="top__title2">
        <h1 class="black"><?= $prd2[0]->ten_sp ?></h1>
        <h3 class="black"><?= $prd2[0]->sub_ten_sp ?></h3>
        <div class="top__title--links">
          <a href="" class="dark-blue"
            >Xem thêm <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
          /></a>
          <a href="" class="dark-blue"
            >Mua ngay <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
          /></a>
        </div>
      </div>
    </section>

    <section class="section22">
      <div
        class="background"
        style="background-image: url(./<?= $prd3[0]->img_sp ?>)"
      ></div>

      <div class="top__title2">
        <img src="./public/img/logos/watch.png" alt="apple" />
        <h3><?= $prd3[0]->sub_ten_sp ?></h3>
        <div class="top__title--links">
          <a href="" class="dark-blue"
            >Xem thêm <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
          /></a>
          <a href="" class="dark-blue"
            >Mua ngay <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
          /></a>
        </div>
      </div>
    </section>

    <section class="section4">
      <div class="row">
        <div class="section4__item">
          <div
            class="background"
            style="background-image: url(./public/img/test/tile_macbookpro__cx0ur0qg9biq_large.jpg)"
          ></div>

          <div class="top__title">
            <h1 class="black"><?= $prd5[0]->ten_sp ?></h1>
            <h3 class="black"><?= $prd5[0]->sub_ten_sp ?></h3>
            <div class="top__title--links">
              <a href="" class="dark-blue"
                >Xem thêm <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
              /></a>
              <a href="" class="dark-blue"
                >Mua ngay <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
              /></a>
            </div>
          </div>
        </div>

        <div class="section4__item">
          <div
            class="background"
            style="background-image: url(./public/img/test/tile_airpods__fuv6vgn42y2q_large.jpg)"
          ></div>

          <div class="top__title">
            <div class="homePod">
              <h1 class="black">AirPods</h1>
              <h3 class="black">All-new with Spatial Audio.</h3>
              <div class="top__title--links">
                <a href="" class="dark-blue"
                  >Xem thêm <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
                /></a>
                <a href="" class="dark-blue"
                  >Mua ngay
                  <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="section4__item">
          <div
            class="background one"
            style="background-image: url(./public/img/test/promo_ipad_mini__spq4zjcuuaie_large.jpg)"
          ></div>

          <div class="top__title">
            <img src="./public/img/logos/iPadMini.png" alt="apple" />
            <h3 class="black">
              <?=$prd4[0]->sub_ten_sp?>
            </h3>
            <div class="top__title--links">
              <a href="" class="dark-blue"
                >Xem thêm <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
              /></a>
              <a href="" class="dark-blue"
              >Mua ngay
              <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
            /></a>
            </div>
          </div>
        </div>

        <div class="section4__item">
          <div
            class="background"
            style="background-image: url(./public/img/test/promo_airtag__e6b73a64nno2_large.jpg)"
          ></div>

          <div class="top__title">
            <img src="./public/img/logos/airtag.png" alt="airtag" />
            <h3 class="black">
              Tìm mọi thứ dễ dàng hơn
            </h3>
            <div class="top__title--links">
              <a href="" class="dark-blue"
                >Xem thêm <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
              /></a>
              <a href="" class="dark-blue"
                >Mua ngay <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
              /></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="section4__item">
          <div
            class="background"
            style="background-image: url(./public/img/test/title_1.jpg)"
          ></div>

          <div class="top__title">
            <img src="./public/img/logos/arcade.png" alt="arcade" />
            <h3 class="black">
                Kêu gọi tất cả người chơi.
            </h3>
            <div class="top__title--links">
              <a href="" class="dark-blue"
                >Xem thêm <img src="./public/svg/right-arrow-darkBlue.svg" alt=""
              /></a>
              <a href="" class="dark-blue"
                >Dùng thử miễn phí* <img src="./public/img/icons/icons8-up-right-48-darkBlue.png" alt=""
            /></a>
            </div>
          </div>
        </div>

        <div class="section4__item">
          <div
            class="background"
            style="background-image: url(./public/img/test/title_2.jpg)"
          ></div>


          <div class="top__title">
            <div class="homePod">
              <img src="./public/img/logos/TVPlus.png" alt="TV plus" />
              <h3 class="white">Get three months of Apple TV+. free when you Mua ngay an Apple device.</h3>
              <div class="top__title--links">
                <a href="" class="white"
                  >Xem thêm <img src="./public/img/icons/arrow-29-32-white.png" alt=""
                /></a>
                <a href="" class="white"
                  >Dùng thử miễn phí
                  <img src="./public/img/icons/icons8-up-right-48-white.png" alt=""
                /></a>
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
