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
    <title>Контакты</title>
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
              <li><a href="../pages/order.php">Как сделать заказ</a></li>
            </ul>
          </li>
          <li><a href="../pages/feedback.php">Обратная связь</a></li>
          <li>
            <a href="#">О магазине</a>
            <ul class="submenu">
              <li><a href="contacts.php">Контакты</a></li>
            </ul>
          </li>
          <li><a href="../pages/cart.php">Корзина</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h2>РЕЖИМ РАБОТЫ МАГАЗИНА: 9-18 по будням</h2>
      <p>
        Многоканальный телефон: +7 (812) 777-77-77 <br />
        Номер для бесплатных звоноков из любого региона России: 8 800 444-44-44 <br />
        Форма обратной связи представлена на многих страницах, включая данную, см. ниже. <br />
      </p>
      <p>
        Также Вы можете воспользоваться чатом WhatsApp: +7 888 888-88-88
      </p>
      <p>
        Заказы, вопросы: accessorinfo@mail.ru <br />
        Трудоустройство: accessorjob@mail.ru <br />
        Сотрудничество: accessorpartner@mail.ru <br />
        Написать директору: accessordir@mail.ru <br />
      </p>
      <h3>Учетные данные нашей Компании</h3>
      <p>
        Наименование юридического лица: ООО "АКСЕССУАР" <br />
        Юридический и фактический адрес: 111111, г.СПб, Невский пр., дом 114-116, 4-й этаж, офис 400. <br />
        ОГРН 000000000001 <br />
        ИНН 0000000002 <br />
        КПП 000000003 <br />
        <a href="#">Загрузить свидетельство о регистрации ООО "АКСЕССУАР"</a> <br />
        <a href="#">Загрузить свидетельство о постановке на учет в налоговом органе</a> <br />
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