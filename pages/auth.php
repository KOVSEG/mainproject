<?php
session_start();
require_once '../pages/db.php';

$username = htmlspecialchars(trim( $_POST['name'] ));
$usermail = htmlspecialchars(trim( $_POST['email'] ));
$userpassword = htmlspecialchars(trim(md5( $_POST['password'] )));

if( isset( $_POST['login'] ) ) {      
  $checkAccess = mysqli_query( $db, "SELECT `id_user` FROM `users` WHERE `username` = '$username' AND `usermail` = '$usermail' AND `userpassword` = '$userpassword' ");
  $resultDB = mysqli_fetch_assoc( $checkAccess );
  $userId = $resultDB['id_user'];

  if( !$userId ) {
    echo 'Вы не зарегистрированы';
  } else {
    $_SESSION['Email'] = $usermail;
    $_SESSION['Name'] = $username;
    echo 'Добро пожаловать '.$username;
  }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/regauth.css">
    <title>Авторизация</title>
  </head>
  <body>
    <header>
      <section class="logo">
          <a href="../index.php"><img src="../images/logo/logo1.png" alt=""></a>
      </section>
      <section class="reg-auth">
          <?php require_once $_SERVER['DOCUMENT_ROOT']."../pages/panel.php"; ?>
          <!-- <a href="../pages/reg.php">Регистрация</a>
          <a href="auth.php">Авторизация</a> -->
      </section>
      <nav class="main-menu">
        <ul class="menu">
          <li>
            <a href="#">Каталог</a>
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
              <li><a href="../pages/contacts.php">Контакты</a></li>
            </ul>
          </li>
          <li><a href="../pages/cart.php">Корзина</a></li>
        </ul>
      </nav>
    </header>
    <form action="auth.php" method="post">
      <div class="container">
        <h1>Авторизация</h1>
        <hr>
        <label for="name"><b>Имя</b></label>
        <input type="text" placeholder="Введите Имя" name="name" required />
    
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Введите Email" name="email" required />
    
        <label for="psw"><b>Пароль</b></label>
        <input type="password" placeholder="Введите пароль" name="password" required /> 
        
        <button type="submit" class="authorizrbtn" name="login">Авторизоваться</button>
      </div>
    </form>
  </body>
</html>
