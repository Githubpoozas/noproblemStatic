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

    <title>T-Shirt OV.101</title>



  </head>
  <body>
    <!-- header banner -->
    <header class="header__bannerGray">
      <img
        src="../img/noproblem_logo.svg"
        alt="logo"
        class="header__bannerGray-logo"
      />
    </header>

    <!-- navbar -->
    <div class="topnav" id="myTopnav">
      <a href="./index.html">HOME</a>
      <a href="./custom.html">CUSTOM</a>
      <a href="./product.html">สินค้า</a>

      <a href="./technique.html">เทคนิคสกรีน เทคนิคปัก</a>
      <a href="./about_us.html">เกี่ยวกับเรา</a>
      <a href="./contact_us.html">ติดต่อเรา</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <main>
        <?php
include 'getItem.php';
getItemSection('./img/item/tshirt_ov101/','unisex','');
getProductSection('./img/item/tshirt_ov101/','seemore');

?>


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
    <script src="../js/swiper.min.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="../js/socialmedia_bar.js"></script>
    <script src="../js/swiper_detail.js"></script>
    <script src="../js/size-table.js"></script>
    <script src="../js/color-picker.js"></script>
    <script src="../js/swiper_product.js"></script>
    <script src="../js/scrollTo.js"></script>


  </body>
</html>
