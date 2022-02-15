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
    <title>Как сделать заказ</title>
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
              <li><a href="../pages/shipping.php">Доставка</a></li>
              <li><a href="order.php">Как сделать заказ</a></li>                           
            </ul>
          </li>
          <li><a href="../pages/feedback.php">Обратная связь</a></li>
          <li>
            <a href="#">О магазине</a>
            <ul class="submenu">
              <li><a href="../pages/contacts.php">Контакты</a></li>
            </ul>
          </li>
          <li><a href="../pages/cart.php">Корзина</a></li>
        </ul>
      </nav>                   
    </header> 
    <main>
        <h2>Как сделать заказ</h2>
        <p>
          Обработка и доставка заказов происходит в будни с 9-00 до 18-00. 
          Если Вам необходимо срочное исполнение заказа в будни, пожалуйста, укажите это в заказе или позвоните нам по телефону, указанному на сайте. 
          Менеджеры нашего магазина постараются ускорить исполнение Вашего заказа.
        </p>
        <p>
          Перед оплатой проверьте выбранный товар и оформите заказ. Оформление заказов через сайт работает круглосуточно.                 
        </p>
        <p>
          Вы можете написать нам письмо с указанием заинтересовавшего Вас товара и наши менеджеры свяжутся с Вами. 
          Пожалуйста, укажите в письме артикул товара, Ваше имя и контактный телефон. Сервис по приему заказов через электронную почту работает круглосуточно. 
          Обработка заказов через электронную почту производится в будни с 9-00 до 18-00.
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