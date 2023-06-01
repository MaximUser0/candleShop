<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  
  <!-- HTML кнопки -->
  
  <div class="modal" id="modal-name">
    <div class="modal-sandbox"></div>
    <div class="modal-box">
      <div class="modal-header">
  
        <div class="divv">
  
          <h1 class="h12">Продукт</h1>
          <h1 class="h11">Цена</h1>
        </div>
  
      </div>
  
      <div class="modal-body">
        <div class="t1">
          <div class="div1"><img class="img_tovar" src="img/Photo_prouct.png" alt=""></div>
          <div class="div2">
            <p class="name">Ароматическая свеча “Кли”</p>
            <div class="quantity_inner">
              <button class="bt_minus">-</button>
              <input type="text" class="quantity" value="1" data-max-count="20">
              <button class="bt_plus">+</button>
  
            </div>
            <h1 class="price">920руб.</h1>
          </div>
  
  
        </div>
        <div class="t1">
          <div class="div1"><img class="img_tovar" src="img/Photo_prouct.png" alt=""></div>
          <div class="div2">
            <p class="name">Ароматическая свеча “Кли”</p>
            <div class="quantity_inner">
              <button class="bt_minus">-</button>
              <input type="text" class="quantity" value="1" data-max-count="20">
              <button class="bt_plus">+</button>
  
            </div>
            <h1 class="price">920руб.</h1>
          </div>
  
  
        </div>
        <div class="t1">
          <div class="div1"><img class="img_tovar" src="img/Photo_prouct.png" alt=""></div>
          <div class="div2">
            <p class="name">Ароматическая свеча “Кли”</p>
            <div class="quantity_inner">
              <button class="bt_minus">-</button>
              <input type="text" class="quantity" value="1" data-max-count="20">
              <button class="bt_plus">+</button>
  
            </div>
            <h1 class="price">920руб.</h1>
          </div>
        </div>
        <div class="t1">
          <div class="div1"><img class="img_tovar" src="img/Photo_prouct.png" alt=""></div>
          <div class="div2">
            <p class="name">Ароматическая свеча “Кли”</p>
            <div class="quantity_inner">
              <button class="bt_minus">-</button>
              <input type="text" class="quantity" value="1" data-max-count="20">
              <button class="bt_plus">+</button>
  
            </div>
            <h1 class="price">920руб.</h1>
          </div>
        </div>
  
      </div>
      <div class="divv2">
  
        <h1 class="h12a">Итогo</h1>
        <h1 class="h11a">3100руб.</h1>
      </div>
      <button class="button_korz">Оформление заказа</button>
    </div>
  </div>
  <script src="main.js"></script>
  <!-- Aditional Styles -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" />
  
  
  
  
 
  
  
  
  <header class="home">
    <div class="mobile__head">
      <div class="container__mobile">
        <input type="checkbox" id="nav-toggle" hidden>
  
        <nav class="nav">
  
          <label for="nav-toggle" class="nav-toggle" onclick></label>
          <h2 class="logo">
            <a href="//dbmast.ru/">Candle</a>
          </h2>
          <ul>
            <li><a href="" class="link__nav__catalog">Каталог</a>
            <li><a href="about" class="link__nav__about__us">О нас</a>
            <li><a href="delivery" class="link__nav__payment__delivery">Оплата и доставка</a>
            <li><a href="<?= $user ? '/logout' : '../#openModal3' ?>" class="link__nav__sign__in"><?= $user ? 'Выйти' : 'Войти' ?></a>
              <a href="contact" class="link__nav__contact">Контакты</a>
          </ul>
        </nav>
      </div>
      <div class="link__logo">
        <a href="/" class="logo">Logo</a>
      </div>
      <div class="link___bag">
        <a href="" class="link__nav__bag"><svg width="28" height="31" viewBox="0 0 28 31" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M7.91304 13.6203V5.75949C8.37681 4.50633 10.2087 2 13.8261 2C17.4435 2 19.2754 4.50633 19.7391 5.75949V13.6203M2 9.86076C2 15.2152 2 26.1291 2 26.9494C2 27.7696 4.08696 28.6582 5.13043 29C10.1159 29 20.5739 29 22.5217 29C24.4696 29 25.6522 26.9494 26 25.9241V9.86076H14H2Z"
              stroke="#C92F27" stroke-width="3" />
          </svg>
        </a>
      </div>
    </div>
  
  

  
    <nav class="navigation__pc">
      <div class="nav__left">
        <div class="link___catalog">
          <a href="catalog" class="link__nav__catalog">Каталог</a>
        </div>
        <div class="link___about__us">
          <a href="about" class="link__nav__about__us">О нас</a>
        </div>
        <div class="link___payment__delivery">
          <a href="delivery" class="link__nav__payment__delivery">Оплата и доставка</a>
        </div>
      </div>
  
      <div class="link__logo">
        <a href="/" class="logo">Logo</a>
      </div>
  
      <div class="nav__right">
        <div class="link___sign__in">
          <a href="<?= $user ? '/logout' : '../#openModal3' ?>" class="link__nav__sign__in"><?= $user ? 'Выйти' : 'Войти' ?></a>
        </div>
        <div class="link___sign__in">
          <a href="#openModal2" class="link__nav__sign__in">Регистрация</a>
        </div>
        <div class="link___bag">
          <a href="#" class="modal-trigger" data-modal="modal-name">Корзина</a>
        </div>
        <div class="link___contact">
          <a href="contact" class="link__nav__contact">Контакты</a>
        </div>
      </div>
    </nav>













<div class="flexx">
   <div class="category">

    <p class="category_1">Главная/Каталог</p>
    <p class="category_2">Каталог</p>
    <p class="category_3">Вселенные</p>
    <?php $universe = ['Genshin Impact', 'Гарри Поттер', 'Клуб Винкс'] ?>
    @foreach ($universe as $item)
    <a href="<?php 
      if(isset($_GET['universe'])){
        echo $_GET['universe'] == $item ? 'catalog' :  "catalog/?universe=$item";
      } else {
        echo "catalog/?universe=$item";
      }?>">
      <label class="container"><?=$item?>
        <!--<input class="box2" type="checkbox" checked="checked" readonly>-->
        <span class="checkmark <?php 
        if(isset($_GET['universe'])){
          echo $_GET['universe'] == $item ? 'checkM' :  '';
        }?>"></span>
      </label>
    </a>  
    @endforeach

   <p class="category_4">Аромат</p>
   <?php $aroma = ['Травяной', 'Древесный', 'Пряный', 'Сладкий','Фруктовой', 'Цветочный', 'Ягодный'] ?>
    @foreach ($aroma as $item)
    <a href="<?php 
      if(isset($_GET['aroma'])){
        echo $_GET['aroma'] == $item ? 'catalog' :  "catalog/?aroma=$item";
      } else {
        echo "catalog/?aroma=$item";
      }?>">
      <label class="container"><?=$item?>
        <!--<input class="box2" type="checkbox" checked="checked" readonly>-->
        <span class="checkmark <?php 
        if(isset($_GET['aroma'])){
          echo $_GET['aroma'] == $item ? 'checkM' :  '';
        }?>"></span>
      </label>
    </a>  
    @endforeach

   </div>
   <div class="drid">
    @foreach ($candles as $candle)
    <a href="../candle/<?= $candle['id'] ?>#openModal3" class="block<?php 
      if(isset($_GET['aroma'])){
        echo $candle['aroma'] != $_GET['aroma'] ? ' hidden' : '';
      }
      if(isset($_GET['universe'])){
        echo $candle['universe'] != $_GET['universe'] ? ' hidden' : '';
      }
      ?>"> 
      <img class="img_catalog" src="<?= $candle['img_main'] ?>" alt="">
      <p class="names" style="text-overflow: ellipsis; width: 278px; white-space: nowrap; overflow: hidden;"><?= $candle['title'] ?></p>
      <div class="flexxx">
        <p class="price"><?= $candle['price'] ?> руб.</p>
        <svg class="korzina" width="33" height="37" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M9.14493 16.2025V6.59494C9.70531 5.06329 11.9188 2 16.2899 2C20.6609 2 22.8744 5.06329 23.4348 6.59494V16.2025M2 11.6076C2 18.1519 2 31.4911 2 32.4937C2 33.4962 4.52174 34.5823 5.78261 35C11.8068 35 24.4435 35 26.7971 35C29.1507 35 30.5797 32.4937 31 31.2405V11.6076H16.5H2Z"
            stroke="#C92F27" stroke-width="3" 
          />
        </svg>
      </div>
    </a>
    @endforeach

   </div>

</div>


    <footer>
      <hr class="line__footer">
      <div class="footer__container">
        <div class="left__footer">
          <div class="link__logo">
            <a href="/" class="logo">Logo</a>
          </div>
          <div class="politica">
            <a href="" class="privacy_policy">Политика конфиденциальности</a>
          </div>
        </div>
        <div class="right__footer">
          <div class="link__catalog">
            <a href="" class="catalog">Каталог</a>
          </div>
          <div class="link__about">
            <a href="about" class="about">О нас</a>
          </div>
          <div class="link__delivery">
            <a href="delivery" class="delivery">Доставка и оплата</a>
          </div>
          <div class="link__contact">
            <a href="contact" class="contact">Контакты</a>
          </div>
        </div>
      </div>
      <!-- mobile -->
    
      <div class="footer__container__mobile">
        <div class="link__logo">
          <a href="/" class="logo">Logo</a>
        </div>
        <div class="link__catalog">
          <a href="" class="catalog">Каталог</a>
        </div>
        <div class="link__about">
          <a href="about" class="about">О нас</a>
        </div>
        <div class="link__delivery">
          <a href="delivery" class="delivery">Доставка и оплата</a>
        </div>
        <div class="link__contact">
          <a href="contact" class="contact">Контакты</a>
        </div>
        <div class="politica">
          <a href="" class="privacy_policy">Политика конфиденциальности</a>
        </div>
      </div>
    
    
    
    </footer>
    
    
    
    
    <div class="modal hidden"></div>
    <script src="js/main.js"></script>
    <script src="js/accordion.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>