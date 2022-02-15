<?php
session_start();
require_once '../pages/db.php';
$mail = $_SESSION['Email'];
$name = $_SESSION['Name'];
$headerfb = $_POST['headerfb'];
$contentfb = $_POST['contentfb'];
if($_POST['sendfb']) {
  $dbId = mysqli_query($db, "SELECT `id_user` FROM `users` WHERE `username` = '$name' AND `usermail` = '$mail'");    
  $linkId = mysqli_fetch_assoc($dbId);
  $userId = $linkId['id_user'];    
  $msg = mysqli_query($db, "INSERT INTO `message` (`username`, `id_user`, `header`, `content`) VALUES ('$name', '$userId', '$headerfb', '$contentfb')");
}
?>

<!DOCTYPE html>
  <html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet">    
    <title>Обратная связь</title>
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
          <li><a href="feedback.php">Обратная связь</a></li>
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

      <?php 
      if(!$name) {
        echo '<p>Отправлять сообщения могут только зарегистрированные пользователи.<p>
        <form action="feedback.php" method="POST" class="form-fb">
          <input disabled type="text" name="name" placeholder="Имя">
          <br>
          <input disabled type="email" name="email" placeholder="Email" >
          <br>
          <input disabled size="30" name="header" type="text" placeholder="Тема" required>
          <br>
          <textarea disabled name="message" placeholder="Текст сообщения"></textarea>
          <hr>
          <input type="submit" value="Отправить" onclick="return false"/>
        </form>';
      } else {
        echo '
        <form action="feedback.php" method="POST" class="form-fb">
          <input disabled type="text" name="name" value='.$name.'>
          <br>
          <input disabled type="email" name="email" value='.$mail.' >
          <br>
          <input size="30" name="headerfb" type="text" placeholder="Тема" required>
          <br>
          <textarea name="contentfb" placeholder="Текст сообщения"></textarea>
          <hr>
          <input type="submit" value="Отправить" name="sendfb"/>
        </form>';
      }
      ?>

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
  </body>
</html>