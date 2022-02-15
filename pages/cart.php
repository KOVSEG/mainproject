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
    <link href="../css/forauto.css" rel="stylesheet">
    <title>Корзина</title>
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
              <li><a href="audi.php">Audi</a></li>
              <li><a href="../pages/bmw.php">BMW</a></li>
              <li><a href="../pages/mercedes.php">Mercedes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Доставка и оплата</a>
            <ul class="submenu">
              <li><a href="../pages/shipping.php">Доставка</a></li>
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
          <li><a href="cart.php">Корзина</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="cartMain">
        <img src="../images/cart/cart.jpg" alt="">
        <h2>Корзина</h2>
      </section>
      <section class="cartInfo">
        <div class="orderNumber">
            <!-- Выводим номер заказа -->
        </div>
        <div class="tableOrder">
        <!-- Сюда выводим товар из LocalStorage, который будет показан в заказе -->
        </div>
        <div class="totalPrice">
          <!-- Итоговая цена для вывода в заказе -->
        </div>
        <form enctype="multipart/form-data" class="to-order" method="POST">
          <label class="order-label">
            <span class="order-text">Ваше имя</span>
            <input type="text" name="Имя" class="order-input">
          </label>
          <label class="order-label">
            <span class="order-text">Номер телефона</span>
            <input type="tel" name="Телефон" class="order-input" placeholder="8(___)___-__-__";>
          </label>
          <label class="order-label">
            <span class="order-text">Email</span>
            <input type="email" name="Email" class="order-input" placeholder="post@mail.ru";>
          </label>
          <button class="order-btn"> Оформить заказ </button>
        </form>
      </section>
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
    <script src="../js/cart.js"></script>
  </body>
</html>