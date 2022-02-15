<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/forauto.css" rel="stylesheet">
    <title>Аксессуары Audi</title>
  </head>
  <body>
    <header>
      <section class="logo">
        <a href="../index.php"><img src="../images/logo/logo1.png" alt=""></a>
      </section>
      <section class="reg-auth">
        <a href="../pages/reg.php">Регистрация</a>
        <a href="../pages/auth.php">Авторизация</a>
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
          <li><a href="../pages/contacts.php">Корзина</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="maintitle">
        <img src="../images/automobilelogo/bmwlogo.jpg" alt="">
        <h2>Аксессуары BMW</h2>
      </section>
      <section class="sidebar">
        <p><a href="../pages/bmw.php">Все товары</a></p>
        <p><a href="../pages/fobsbmw.php">Брелоки</a></p>
        <p><a href="../pages/umbrellabmw.php">Зонты</a></p>
        <p><a href="termocupbmw.php">Термокружки</a></p>
      </section>
      <section class="maininfo">
        <div class="termocup card" data-id="bt01">
          <img class="product-img" src="../images/termocup/bmw/termocupbmw1.jpg" alt="">
          <h4 class="item-title">Термокружка BMW</h4>
          <p><span class="item-price">300</span> руб.</p>
          <div class="items counter-wrapper">
            <div class="items__control" data-action="minus">-</div>
            <div class="items__current" data-counter>1</div>
            <div class="items__control" data-action="plus">+</div>
          </div>
          <button class="to-cart button-primary" data-id="bt01">В корзину</button>
        </div>
        <div class="termocup card" data-id="bt02">
          <img class="product-img" src="../images/termocup/bmw/termocupbmw2.jpg" alt="">
          <h4 class="item-title">Термокружка BMW</h4>
          <p><span class="item-price">250</span> руб.</p>
          <div class="items counter-wrapper">
            <div class="items__control" data-action="minus">-</div>
            <div class="items__current" data-counter>1</div>
            <div class="items__control" data-action="plus">+</div>
          </div>
          <button class="to-cart button-primary" data-id="bt02">В корзину</button>
        </div>
        <div class="termocup card" data-id="bt03">
          <img class="product-img" src="../images/termocup/bmw/termocupbmw3.jpg" alt="">
          <h4 class="item-title">Термокружка BMW</h4>
          <p><span class="item-price">200</span> руб.</p>
          <div class="items counter-wrapper">
            <div class="items__control" data-action="minus">-</div>
            <div class="items__current" data-counter>1</div>
            <div class="items__control" data-action="plus">+</div>
          </div>
          <button class="to-cart button-primary" data-id="bt03">В корзину</button>
        </div>
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
    <script src="../js/script.js"></script>
  </body>
</html>