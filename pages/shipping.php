<?php
session_start();
require_once '../pages/db.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet">
    <title>Доставка</title>
  </head>
  <body>
    <header>
      <section class="logo">
        <a href="../index.php"><img src="../images/logo/logo1.png" alt=""></a>
      </section>
      <section class="reg-auth">
        <?php require_once $_SERVER['DOCUMENT_ROOT']."../pages/panel.php"; ?>
        <!-- <a href="../pages/reg.php">Регистрация</a>
        <a href="../pages/auth.php">Авторизация</a> -->
      </section>
      <nav class="main-menu">
        <ul class="menu">
          <li>
            <a href="../index.php">Каталог</a>
            <ul class="submenu">
              <li><a href="../pages/audi.php">Audi</a></li>
              <li><a href="../pages/bmw.php">BMW</a></li>
              <li><a href="../pages/mercedes.php">Mercedes</a></li> 
            </ul>
          </li>
          <li>
            <a href="#">Доставка и оплата</a>
            <ul class="submenu">
              <li><a href="shipping.php">Доставка</a></li>
              <li><a href="../pages/order.php">Как сделать заказ</a></li>
            </ul>
          </li>
          <li><a href="../pages/feedback.php">Обратная связь</a></li>
          <li>
            <a href="#">О магазине</a>
            <ul class="submenu">
              <li><a href="../pages/contacts.php">Контакты</a></li>
            </ul>
          </li>
          <li><a href="../pages/contacts.php">Корзина</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h1>Доставка по СПБ и ЛО</h1>
      <p>
        <pre>
          Курьерская доставка по СПб (в пределах КАД)
          Заказ < 5000 р. - 250 руб.
          Заказ > 5000 р. - БЕСПЛАТНО
          Крупногабариты* - 700 рублей вне зависимости от суммы заказа.
          
          Курьерская доставка по ЛО (не более 5 км. от КАД)
          Заказ < 10000 р. - 500 руб.
          Заказ > 10000 р. - БЕСПЛАТНО
          Крупногабариты* - 900 рублей вне зависимости от суммы заказа.
          
          Курьерская доставка по ЛО (более 5 км. от КАД)
          Дополнительно к стоимости доставки (по тарифам ближайшей области) оплачивается километраж из расчета 40 руб/км, начиная от 5-го километра за КАДом.
          * Крупногабаритные товары – сумма измерений упаковки по длине, ширине и высоте превышает 120 см.
        </pre>
      </p>
      <h3>Самовывоз:</h3>
      <p>
        Вы можете самостоятельно забрать заказ у нас в офисе - сообщите об этом нам при оформлении заказа. 
        Наш офис располагается по адресу: г.СПб, Невский пр., дом 114-116, 4-й этаж, офис 400. Часы работы: только в будни с 9-00 до 18-00.
      </p>
      <p>
        Вы можете задать свой вопрос через форму обратной связи. Обработка сообщений производится по будням в рабочее время.
        Если Ваш вопрос носит срочный характер, пожалуйста, свяжитесь с нами по телефону, указанному на сайте.
      </p>
    </main>
    <footer>
      <section class="uppefooter">
        <section class="footernav">
          <p><a href="../pages/contacts.php"><b>Контакты</b></a></p>
          <p><a href="#"><b>Сотрудничество</b></a></p>
        </section>
        <section class="socialmedia">
          <p><b>Мы в соцсетях:</b> </p>
          <a href="#"><img src="../images/socialmedia/Instagramlogo.jpg" alt=""></a>
          <a href="#"><img src="../images/socialmedia/vklogo.jpg" alt=""></a>
          <a href="#"><img src="../images/socialmedia/youtobelogo.jpg" alt=""></a>
        </section>
      </section>
      <section class="endlist">
        <p>&copy;2022 ООО "АКСЕССУАР"</p>
        <p>Все права защищены</p>
      </section>
    </footer>
    <script src="../js/script.js"></script>
  </body>
</html>