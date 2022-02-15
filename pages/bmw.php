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
    <title>Аксессуары Audi</title>
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
            <li><a href="../pages/cart.php">Корзина</a></li>
          </ul>
        </nav>
    </header>
    <main>
      <section class="maintitle">
        <img src="../images/automobilelogo/bmwlogo.jpg" alt="">
        <h2>Аксессуары BMW</h2>
      </section>
      <section class="sidebar"> 
        <p><a href="bmw.php">Все товары</a></p>
        <p><a href="../pages/fobsbmw.php">Брелоки</a></p>
        <p><a href="../pages/umbrellabmw.php">Зонты</a></p>
        <p><a href="../pages/termocupbmw.php">Термокружки</a></p>
      </section>
      <section class="maininfo">

        <!-- Товар из базы данных -->
        <?php
          // require_once 'db.php';
          // $getItemDb = mysqli_query( $db, "SELECT * FROM `items`" );
          
          // while( $getItemArr = mysqli_fetch_assoc($getItemDb) ) {
          //     echo '
          //     <div class="fob card" data-id="'.$getItemArr['id_item'].'" >  
          //         <img class="product-img" src="'.$getItemArr['itemImg'].'" alt="">
          //         <h4 class="item-title">'.$getItemArr['itemtitle'].'</h4>
          //         <p><span class="item-price">'.$getItemArr['itemprice'].'</span> руб.</p>
          //         <div class="items counter-wrapper">
          //             <div class="items__control" data-action="minus">-</div>
          //             <div class="items__current" data-counter>1</div>
          //             <div class="items__control" data-action="plus">+</div>
          //         </div>
          //         <button class="to-cart button-primary" data-id="af01">В корзину</button>
          //     </div>
          //     ';
          // }
        ?>
        <!-- //Товар из базы данных// -->

        <div class="fob card" data-id="bf01">
          <img class="product-img" src="../images/fobs/fobbmw/fobbmw1.jpg" alt="">
          <h4 class="item-title">Брелок BMW</h4>
          <p><span class="item-price">150</span> руб.</p>
          <div class="items counter-wrapper">
            <div class="items__control" data-action="minus">-</div>
            <div class="items__current" data-counter>1</div>
            <div class="items__control" data-action="plus">+</div>
          </div>
          <button class="to-cart button-primary" data-id="bf01">В корзину</button>
        </div>
        <div class="fob card" data-id="bf02">
          <img class="product-img" src="../images/fobs/fobbmw/fobbmw2.jpg" alt="">
          <h4 class="item-title">Брелок BMW</h4>
          <p><span class="item-price">100</span> руб.</p>
          <div class="items counter-wrapper">
            <div class="items__control" data-action="minus">-</div>
            <div class="items__current" data-counter>1</div>
            <div class="items__control" data-action="plus">+</div>
          </div>
          <button class="to-cart button-primary" data-id="bf02">В корзину</button>
        </div>
        <div class="fob card" data-id="bf03">
          <img class="product-img" src="../images/fobs/fobbmw/fobbmw3.jpg" alt="">
          <h4 class="item-title">Брелок BMW</h4>
          <p><span class="item-price">100</span> руб.</p>
          <div class="items counter-wrapper">
            <div class="items__control" data-action="minus">-</div>
            <div class="items__current" data-counter>1</div>
            <div class="items__control" data-action="plus">+</div>
          </div>
          <button class="to-cart button-primary" data-id="bf03">В корзину</button>
        </div>
        <div class="umbrella card" data-id="bu01">
          <img class="product-img" src="../images/umbrella/bmw/umbrellabmw1.jpg" alt="">
          <h4 class="item-title">Зонт BMW</h4>
          <p><span class="item-price">800</span> руб.</p>
          <div class="items counter-wrapper">
            <div class="items__control" data-action="minus">-</div>
            <div class="items__current" data-counter>1</div>
            <div class="items__control" data-action="plus">+</div>
          </div>
          <button class="to-cart button-primary" data-id="bu01">В корзину</button>
        </div>
        <div class="umbrella card" data-id="bu02">
          <img class="product-img" src="../images/umbrella/bmw/umbrellabmw2.jpg" alt="">
          <h4 class="item-title">Зонт BMW</h4>
          <p><span class="item-price">1000</span> руб.</p>
          <div class="items counter-wrapper">
            <div class="items__control" data-action="minus">-</div>
            <div class="items__current" data-counter>1</div>
            <div class="items__control" data-action="plus">+</div>
          </div>
          <button class="to-cart button-primary" data-id="bu02">В корзину</button>
        </div>
        <div class="umbrella card" data-id="bu03">
          <img class="product-img" src="../images/umbrella/bmw/umbrellabmw3.jpg" alt="">
          <h4 class="item-title">Зонт BMW</h4>
          <p><span class="item-price">700</span> руб.</p>
          <div class="items counter-wrapper">
            <div class="items__control" data-action="minus">-</div>
            <div class="items__current" data-counter>1</div>
            <div class="items__control" data-action="plus">+</div>
          </div>
          <button class="to-cart button-primary" data-id="bu03">В корзину</button>
        </div>
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
      <section class="sidecart">
        <!-- Оформить заказ -->
        <div id="order-form" class="card-body border-top alertNone">
          <h5 class="card-title">Оформить заказ</h5>
          <form>
            <button type="submit" class="btn btn-primary">В корзину</button>
          </form>
        </div>
        <!-- // Оформить заказ -->
        <!-- Корзина -->
        <h5 class="card-title">Ваш заказ</h5> 
        <!-- Итоговая цена корзине -->
        <div class="cart-total">
          <p><span class="h5">Итого:</span> <span class="total-price">0</span> <span class="rouble">₽</span></p>
        </div>
        <div data-cart-empty class="alert alert-secondary" role="alert">
          Корзина пуста
        </div>
        <!-- cart-wrapper -->
        <div class="cart-wrapper">
          <!-- Выводим товар в корзину -->
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
    <script src="../js/calcCartPrice.js"></script>
    <script src="../js/cartStatus.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/sendOrder.js"></script>
  </body>
</html>