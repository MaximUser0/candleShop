<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/delete.css">
  <link rel="stylesheet" href="css/accordion.min.css">
  <title>Candelia</title>
</head>

<body>

  <div class="flex">


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
          <li><a href="#" class="link__nav__sign__in">Войти</a>
            <a href="contact" class="link__nav__contact">Контакты</a>
        </ul>
      </nav>
    </div>
    <p class="logotip">Сandelia</p>
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
  <div class="div2">
<img class="imgg" src="img/brand__photo_02.png" alt="">
<p class="name">name</p>
<button class="b">Удалить</button>

  </div>
  <div class="div2">
    <img class="imgg" src="img/brand__photo_02.png" alt="">
    <p class="name">name</p>
    <button class="b">Удалить</button>
  
  </div>
  <div class="div2">
    <img class="imgg" src="img/brand__photo_02.png" alt="">
    <p class="name">name</p>
    <button class="b">Удалить</button>
  
  </div>
  <div class="div2">
    <img class="imgg" src="img/brand__photo_02.png" alt="">
    <p class="name">name</p>
    <button class="b">Удалить</button>
  
  </div>
  <div class="new"><a class="a" href="#openModal2"> Добавить продукт</a></div>
  <script src="js/main.js"></script>
  <script src="js/accordion.min.js"></script>
  <script src="js/index.js"></script>
  <div id="openModal2" class="modal2">
    <div class="modal-dialog2">
      <div class="modal-content2">
        <div class="modal-header2">
          <a href="">
            <p class="vxod"> Добавить продукт</p>
          </a>

          <a href="#close" title="Close" class="close"><svg class="closes" width="20" height="20" viewBox="0 0 20 20"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 1L1.44337 19M18.5566 19L1 1" stroke="#C92F27" stroke-width="2" />
            </svg>
          </a>
        </div>
        <div class="modal-body2">
          <form action="">
            <label for="">Введите название</label><br>
            <input type="text"><br>
            <select>
              <option>Выберите аромат</option>
              <option>Травяной</option>
              <option>Древесный</option>
              <option>Пряный</option>
              <option>Сладкий</option>
              <option>Фруктовый</option>
              <option>Цветочный</option>
              <option>Ягодный</option>

            </select><BR>
            <label for="">Добавить цену</label><br>
            <input type="text"><br>

            <label class="input-file">

              <span class="input-file-btn">Выберите изображение</span> <br>

            </label>


            <textarea name="" id="" cols="30" rows="10" placeholder="Добавить описание"></textarea><br>
            <button class="bb">Добавить</button><br>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>

</html>