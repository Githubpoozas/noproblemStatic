<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/swiper.min.css" />
    <link rel="stylesheet" href="../css/all.min.css"/>
    <link rel="stylesheet" href="../css/style.css" />

    <title>Home</title>
  </head>
  <body>
    <!-- header banner -->
    <header class="header__banner">
      <img src="../img/home/d1.1-01.jpg" alt="" />
    </header>

    <!-- navbar -->
    <div class="topnav" id="myTopnav">
      <a href="./index.html">HOME</a>
      <a href="./custom.html">CUSTOM</a>
      <a href="./product.html">สินค้า</a>
      <!-- <a href="./tshirt.html">T-Shirt</a>
      <a href="./tshirt32.html">T-Shirt32</a>
      <a href="./vtshirt0020.html">V T-shirt</a>
      <a href="./polo_mf_female.html">POLO MF หญิง</a>
      <a href="./polo_mf_male.html">POLO MF ชาย</a> -->
      <a href="./technique.html">เทคนิคสกรีน เทคนิคปัก</a>
      <a href="./about_us.html">เกี่ยวกับเรา</a>
      <a href="./contact_us.html">ติดต่อเรา</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <main>
      
      <!-- slide -->
      <section class="home__section-swiper u-margin-bottom-small underNav">
        <!-- Swiper -->
        <div class="swiper-container swiper-container__slide1">
          <ul class="swiper-wrapper swiper-wrapper__slide1">
            <!-- video from youtube -->
            <!-- <li class="swiper-slide swiper-slide__slide1" id="youtube"></li> -->
            <!-- video from local -->
            <!-- <li class="swiper-slide swiper-slide__slide1">
              <video autoplay muted playsinline id="localVideo" width="730">
                <source src="../video/movie.mp4" type="video/mp4" />
                Your browser does not support the video
              </video>
            </li> -->
            <li class="swiper-slide swiper-slide__slide1">
              <img src="../img/home/banner_client/01.jpg" />
            </li>
            <li class="swiper-slide swiper-slide__slide1">
              <img src="../img/home/banner_client/02.jpg" />
            </li>
            <li class="swiper-slide swiper-slide__slide1">
              <img src="../img/home/banner_client/03.jpg" />
            </li>
          </ul>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <?php
      include 'getItem.php';

      getProject('./img/home/logo_sponsor/','our project','ผลงานของเรา');
?>

      <!-- banner -->
      <section class="home__section-banner u-margin-bottom-medium">
        <div class="banner">
          <a href="#">
            <img
              src="../img/noproblem_logo.svg"
              data-src="../img/home/d6-03.jpg"
              alt=""
              class="banner__img lazy"
            />
          </a>
          <a href="#">
            <img
              src="../img/noproblem_logo.svg"
              data-src="../img/home/7-8-07-min.jpg"
              alt=""
              class="banner__img lazy"
            />
          </a>
          <a href="#">
            <img
              src="../img/noproblem_logo.svg"
              data-src="../img/home/7-8_Artboard_8-min.jpg"
              alt=""
              class="banner__img lazy"
            />
          </a>
        </div>
      </section>


<?php

      getProductSection('./img/item/lastest/','','#');

?>

      

      <!-- more product -->
      <section class="home__section-more u-margin-bottom-medium">
        <div class="more-button">
          <a href="./product.html" class="btn btn--white btn-shadow more-button-btn" lang="th"
            >สินค้าเพิ่มเติม</a
          >
        </div>
      </section>

    </main>

    <!-- social media bar -->
    <div class="socialmedia d-none d-md-block" id="socialmedia">
      <input
        type="checkbox"
        class="socialmedia__checkbox"
        id="socialmedia-toggle"
      />
      <label for="socialmedia-toggle" class="socialmedia__button">
        <div class="socialmedia__icon">
          <img src="../img/socialmedia/arrow.svg" alt="" />
        </div>
      </label>
      <nav class="socialmedia__nav">
        <ul class="socialmedia__list">
          <li class="socialmedia__item">
            <a href="https://wa.me/66817741166" target="_blank"><img class="btn-shadow" src="../img/socialmedia/whatsapp.svg" alt=""/></a>
          </li>
          <li class="socialmedia__item">
            <a href="https://www.facebook.com/130047820416542/" target="_blank">
              <img class="btn-shadow" src="../img/socialmedia/facebook.svg" alt=""/>
            </a>
          </li>
          <li class="socialmedia__item">
            <a href="http://line.me/ti/p/~nicknoproblem" target="_blank"><img class="btn-shadow" src="../img/socialmedia/line.svg" alt=""/></a>
          </li>
          <li class="socialmedia__item">
            <a href="https://m.me/Noproblemtshirt/" target="_blank"><img class="btn-shadow" src="../img/socialmedia/messenger.svg" alt=""/></a>
          </li>
          <li class="socialmedia__item">
            <a href="#wechat_bottom"><img class="btn-shadow wechat" src="../img/socialmedia/wechat.svg" alt=""/></a>
          </li>
        </ul>
      </nav>
      <label class="socialmedia__rotated" lang="th" for="socialmedia-toggle"
        >ติดต่อสอบถามได้ที่</label
      >
    </div>

    <!-- footer -->
    <footer class="footer" lang="th">
      <div class="footer__box">
        <div class="footer__logo">
          <img src="../img/noproblem_logo.svg" alt="" />
        </div>
        <div class="footer__contacts">
          <div class="footer__contact footer__contact-1" lang="en">
            <p class="footer__name">CONTACT</p>
          </div>
          <div class="footer__contact footer__contact-2">
            <p>
              เลขที่ 127 ซ.สุขสวัสดิ์ 14/19 แขวงจอมทอง เขตจอมทอง กทม 10150
            </p>
          </div>
          <div class="footer__contact footer__contact-3">
            <p>โทรศัพท์</p>
            <p><a href="tel:066-165-1987">0-2460-2200-11</a></p>
            <p>แฟกซ์</p>
            <p><a href="tel:024761866">0-2476-1866</a></p>
          </div>
          <div class="footer__contact footer__contact-4">
            <p>เวลาทำการ จันทร์-เสาร์ เวลา 08:00-17:00</p>
          </div>
        </div>
        <div class="footer__socials">
          <div class="footer__social footer__social-1" lang="en">
            <p class="footer__name">SOCIAL MEDIA</p>
          </div>
          <div class="footer__social footer__social-2">
            <a href="https://wa.me/66817741166" target="_blank"><img class="btn-shadow" src="../img/socialmedia/whatsapp.svg" alt=""/></a>
            <a href="https://www.facebook.com/130047820416542/" target="_blank">
              <img class="btn-shadow" src="../img/socialmedia/facebook.svg" alt=""/>
            </a>
            <a href="http://line.me/ti/p/~nicknoproblem" target="_blank"><img class="btn-shadow" src="../img/socialmedia/line.svg" alt=""/></a>
            <a href="https://m.me/Noproblemtshirt/" target="_blank"><img class="btn-shadow" src="../img/socialmedia/messenger.svg" alt=""/></a>

          </div>
          <div class="footer__social footer__social-wechat">
            <img id="wechat_bottom" class="btn-shadow wechat" src="../img/socialmedia/wechat.svg" alt=""/>
            <p id="wechatId">ID: nicknoproblem</p>
          </div>

          <div class="footer__social footer__social-3">
            <p>CALL</p>
            <p><a href="tel:0817741166">081-774-1166</a></p>
          </div>
          <div class="footer__social footer__social-4">
            <p>EMAIL</p>
            <p><a href="mailto:nicknoproblem@gmail.com">nicknoproblem@gmail.com</a></p>
          </div>
        </div>
      </div>
    </footer>

    <div class="footer__whitebar"></div>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="../js/swiper.min.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="../js/swiper_banner.js"></script>
    <script src="../js/swiper_project.js"></script>
    <script src="../js/swiper_product.js"></script>
    <script src="../js/socialmedia_bar.js"></script>
    <script src="../js/lazyload.min.js"></script>
    <script src="../js/lazy.js"></script>
    <script src="../js/scrollTo.js"></script>

  </body>
</html>
