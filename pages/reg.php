<?php
session_start();
require_once 'db.php';

$username = htmlspecialchars(trim($_POST['name']));
$usermail = htmlspecialchars(trim($_POST['email']));
$userphone = htmlspecialchars(trim($_POST['phone']));
$userpassword = htmlspecialchars(trim(md5($_POST['password'])));
$userpassword2 = htmlspecialchars(trim(md5($_POST['password_2'])));

if(isset( $_POST['send'])){

  if($userpassword != $userpassword2){
    exit('Пароли не совпадают');
  }

  $checkDb = mysqli_query( $db, "SELECT `id_user` FROM `users` WHERE `userphone` = '$userphone' OR `usermail` = '$usermail' ");
  $resultDb = mysqli_fetch_assoc( $checkDb );
  $userId = $resultDb['id_user'];
  
  if( !$userId ) {
    $signIn = mysqli_query( $db, "INSERT INTO `users` ( `username`, `usermail`, `userphone`, `userpassword`) VALUES ('$username', '$usermail', '$userphone', '$userpassword')" );
    header('Location: auth.php');
  } else {
    exit ('Такой аккаунт уже существует');
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
    <title>Регистрация</title>
  </head>
  <body>
    <header>
      <section class="logo">
        <a href="../index.php"><img src="../images/logo/logo1.png" alt=""></a>
      </section>
      <section class="reg-auth">
        <?php require_once $_SERVER['DOCUMENT_ROOT']."../pages/panel.php"; ?>
        <!-- <a href="reg.php">Регистрация</a>
        <a href="../pages/auth.php">Авторизация</a> -->
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
    <form action="reg.php" method="post">
      <div class="container">
        <h1>Регистрация</h1>
        <p>Необходимо заполнить все поля формы.</p>
        <hr>
        <label for="name"><b>Имя</b></label>
        <input type="text" placeholder="Введите Имя" name="name" required>
    
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Введите Email" name="email" required>

        <label for="phone"><b>Телефон</b></label>
        <input type="tel" placeholder="Введите телефон" name="phone" required>
    
        <label for="psw"><b>Пароль</b></label>
        <input type="password" placeholder="Введите пароль" name="password" required>
    
        <label for="psw2"><b>Повторите пароль</b></label>
        <input type="password" placeholder="Введите пароль" name="password_2" required>
        <hr>
    
        <p>Создавая аккаунт, Вы соглашаетесь с нашими <a href="#">Правилами и Политикой конфиденциальности</a>.</p>
        <button type="submit" class="registerbtn" name="send">Зарегистрироваться</button>
      </div>    
      <div class="container signin">
        <p>Уже есть аккаунт? <a href="../pages/auth.php">Авторизуйтесь</a>.</p>
      </div>
    </form>
  </body>
</html>