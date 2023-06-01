<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="css/profile.css">
<title>Candellia</title>
</head>
<body>
  <DIV class="PK">
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
          <form action="/candle" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Введите название</label><br>
            <input type="text" name="title" required><br>
            @error('aroma')
              <label>{{ $message }}</label><br>
            @enderror
            <select name="aroma" required>
              <option value="null">Выберите аромат</option>
              <option>Травяной</option>
              <option>Древесный</option>
              <option>Пряный</option>
              <option>Сладкий</option>
              <option>Фруктовый</option>
              <option>Цветочный</option>
              <option>Ягодный</option>
            </select><br>
            <select name="universe" required>
              <option value="null">Выберите вселенную</option>
              <option>Genshin Impact</option>
              <option>Гарри Поттер</option>
              <option>Клуб Винкс</option>
            </select><br>
            <label>Добавить цену</label><br>
            <input name="price" type="text" required><br>
            <label>Указать объем</label><br>
            <input name="volume" type="text" required><br>
	          <label class="input-file">   	
 	   	        <span class="input-file-btn">Выберите изображение</span> <br>
 	          </label>
            @error('files')
              <label>{{ $message }}</label><br>
            @enderror
            <input type="file" name="img_main" required>
            <input type="file" name="img_1" required>
            <input type="file" name="img_2" required>
            <input type="file" name="img_3" required>
            <textarea name="description" cols="30" rows="10" placeholder="Добавить описание" required></textarea><br>
            <button class="bb" type="submit">Добавить</button><br>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="flex">
 <div class="info">
<a href="../"><p class="logo">logo</p></a><br>
<p class="roli">Aдминимтратор</p><br><br><br><br><br><br>
<a class="people" href="profile2" >Пользователи</a><br><br>
<a class="tovar" href="">Товары</a><br><br>
<button class="bb2"><a  href="#openModal2"> Добавить новый продукт</a></button><br>
<a href="../logout"><button class="button">Выйти</button></a><br>

 </div>

  <div class="windows">
    @foreach ($candles as $candle)
    <a href="../candle/<?= $candle['id'] ?>#openModal3" class="infor">
      <img class="images" src="<?= $candle['img_main'] ?>" alt="">
      <p class="name"><?= $candle['title'] ?></p>
    </a>
    @endforeach
  </div>

  </div>
  </DIV>
<div class="MOBILE">
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
      <a href="del" class="link__nav__bag"><svg width="28" height="31" viewBox="0 0 28 31" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M7.91304 13.6203V5.75949C8.37681 4.50633 10.2087 2 13.8261 2C17.4435 2 19.2754 4.50633 19.7391 5.75949V13.6203M2 9.86076C2 15.2152 2 26.1291 2 26.9494C2 27.7696 4.08696 28.6582 5.13043 29C10.1159 29 20.5739 29 22.5217 29C24.4696 29 25.6522 26.9494 26 25.9241V9.86076H14H2Z"
            stroke="#C92F27" stroke-width="3" />
        </svg>
      </a>
    </div>
  </div>
  <div class="poiskss">
    <p class="poisk_text">Найти пользователя</p>
  </div>
  <div class="ban">

    <p class="text">Kseniia.karpova1@gmail.com</p>
    <button class="but_ban">Бан</button>
  </div>
  <div class="ban">

    <p class="text">Kseniia.karpova1@gmail.com</p>
    <button class="but_ban">Бан</button>
  </div>
  <div class="ban">

    <p class="text">Kseniia.karpova1@gmail.com</p>
    <button class="but_ban">Бан</button>
  </div>
  <div class="ban">

    <p class="text">Kseniia.karpova1@gmail.com</p>
    <button class="but_ban">Бан</button>
  </div>
  <div class="ban">

    <p class="text">Kseniia.karpova1@gmail.com</p>
    <button class="but_ban">Бан</button>
  </div>
  <div class="ban">

    <p class="text">Kseniia.karpova1@gmail.com</p>
    <button class="but_ban">Бан</button>
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
</div>
</body>
</html>