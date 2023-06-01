<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="css/profile2.css">
  <title>Candellia</title>
</head>

<body>
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
  <div class="flex">
    <div class="info">
      <a href="../"><p class="logo">logo</p></a><br>
      <p class="roli">Aдминимтратор</p><br><br><br><br><br><br>
      <a class="people" >Пользователи</a><br><br>
      <a class="tovar" href="profile">Товары</a><br><br>
      <button class="bb2"><a href="#openModal2"> Добавить новый продукт</a></button><br>
      <a href="../logout"><button class="button">Выйти</button></a><br>

    </div>

    <div class="windows">
      <form action="../find" method="POST" class="div" style="height: auto;"> 
        @csrf
        <div class="border">
          <input name="find" class="Poisk" placeholder="найти пользователя" style="background-color: transparent; border: none; outline:none;">
          <button type="submit">Поиск</button>
        </div>
        </form>
        <div class="div">
          @foreach($users as $user)
            @if ($user['id'] != auth()->user()->id)
            <div 
                class="ban <?php 
                if(isset($_GET['find'])){
                  echo strpos($user['email'], $_GET['find']) === false ? 'hidden' : '';
                }
                ?>"
            >
              <p class="peoples"><?= $user['email'] ?></p>
              <button class="button_ban"><a href="../ban/<?= $user['id'] ?>"><?= $user['ban'] == 0 ? 'Бан' : 'Разбан' ?></a></button>
            </div> 
            @endif
          @endforeach
        </div>

  </div>

</body>

</html>