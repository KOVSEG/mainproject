<?php
session_start();
require_once 'pages/db.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <title>Автоаксессуары</title>
  </head>
  <body>
    <header>
      <section class="logo">
        <a href="index.php"><img src="images/logo/logo1.png" alt="Логотип"></a>
      </section>
      <section class="reg-auth">
        <?php require_once $_SERVER['DOCUMENT_ROOT']."/pages/panel.php"; ?>
        <!-- <a href="pages/reg.php">Регистрация</a>
        <a href="pages/auth.php">Авторизация</a> -->
      </section>
      <nav class="main-menu">
        <ul class="menu">
          <li>
            <a href="#">Каталог</a>
            <ul class="submenu">
              <li><a href="pages/audi.php">Audi</a></li>
              <li><a href="pages/bmw.php">BMW</a></li>
              <li><a href="pages/mercedes.php">Mercedes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Доставка и оплата</a>
            <ul class="submenu">
              <li><a href="pages/shipping.php">Доставка</a></li>
              <li><a href="pages/order.php">Как сделать заказ</a></li>
            </ul>
          </li>
          <li><a href="pages/feedback.php">Обратная связь</a></li>
          <li>
            <a href="#">О магазине</a>
            <ul class="submenu">
              <li><a href="pages/contacts.php">Контакты</a></li>
            </ul>
          </li>
          <li><a href="pages/cart.php">Корзина</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <!-- Slideshow container -->
      <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 4</div>
            <img class="slider" src="images/slider/antirain.jpg" style="width:100%" alt="Антидождь">
          <div class="text">Антидождь</div>
          </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 4</div>
            <img class="slider" src="images/slider/autoaccessories1.jpg" style="width:100%" alt="Аксессуары для защиты">
          <div class="text">Аксессуары для интерьера, экстерьера и защиты</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 4</div>
            <img class="slider" src="images/slider/autoaccessories2.jpg" style="width:100%" alt="Все виды аксессуаров">
          <div class="text">Все виды аксессуаров для автомобилей</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">4 / 4</div>
            <img class="slider" src="images/slider/avtohimiya.jpg" style="width:100%" alt="Автохимия">
          <div class="text">Автохимия</div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>            
        <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
      <div class="autologo">
        <!-- billboard -->
        <div class="minilogo">
          <a href="pages/audi.php"><img src="images/automobilelogo/audilogo.jpg" alt="Audi"></a>
        </div>
        <div class="minilogo">
          <a href="pages/bmw.php"><img src="images/automobilelogo/bmwlogo.jpg" alt="BMW"></a>
        </div>
        <div class="minilogo">
          <a href="pages/mercedes.php"><img src="images/automobilelogo/mercedeslogo.jpg" alt="Mercedes"></a>
        </div>
      </div>
    </main>
    <footer>
      <section class="uppefooter">
        <section class="footernav">
          <p><a href="pages/contacts.php"><b>Контакты</b></a></p>
          <p><a href="#"><b>Сотрудничество</b></a></p>
        </section>
        <section class="socialmedia">
          <p><b>Мы в соцсетях:</b></p>
          <a href="#"><img src="images/socialmedia/Instagramlogo.jpg" alt="Instagram"></a>
          <a href="#"><img src="images/socialmedia/vklogo.jpg" alt="Вконтакте"></a>
          <a href="#"><img src="images/socialmedia/youtobelogo.jpg" alt="YouTube"></a>
        </section>
      </section>
      <section class="endlist">
        <p>&copy;2022 ООО "АКСЕССУАР"</p>
        <p>Все права защищены</p>
      </section>
    </footer>

    <script src="js/slider.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>