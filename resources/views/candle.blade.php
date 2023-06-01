<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">
    <title>Candellia</title>
</head>
<body>
  <div id="openModal4" class="modal2">
    <div class="modal-dialog2">
      <div class="modal-content2">
        <div class="modal-header2">
          <a href="">
            <p class="vxod"> Добавить продукт</p>
          </a>
         
          <a href="#openModal3" title="Close" class="close"><svg class="closes" width="20" height="20" viewBox="0 0 20 20"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 1L1.44337 19M18.5566 19L1 1" stroke="#C92F27" stroke-width="2" />
            </svg>
          </a>
        </div>
        <div class="modal-body2">
          <form action="/candle/<?= $candle['id'] ?>" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Измените название</label><br>
            <input type="text" name="title" required value="<?= $candle['title'] ?>"><br>
            @error('aroma')
              <label>{{ $message }}</label><br>
            @enderror
            <select name="aroma" required>
              <option value="null">Измените аромат</option>
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
            <label>Изменить цену</label><br>
            <input name="price" type="text" required value="<?= $candle['price'] ?>"><br>
            <label>Изменить объем</label><br>
            <input name="volume" type="text" required  value="<?= $candle['volume'] ?>"><br>
	          <label class="input-file">   	
 	   	        <span class="input-file-btn">Изменить изображение</span> <br>
 	          </label>
            @error('files')
              <label>{{ $message }}</label><br>
            @enderror
            <input type="file" name="img_main">
            <input type="file" name="img_1">
            <input type="file" name="img_2">
            <input type="file" name="img_3">
            <textarea name="description" cols="30" rows="10" placeholder="Изменить описание" required><?= $candle['description'] ?></textarea><br>
            <button class="bb" type="submit">Добавить</button><br>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="openModal3" class="modal3" style="opacity: 100%; position: unset;">
        <div class="modal-dialog">
          <div class="modal-content3" style="padding-bottom: 5vw;">
            <div class="modal-header3">
             
              <a href="../catalog" style="min-width: 1vw;"><svg class="closes" width="20" height="20" viewBox="0 0 20 20"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19 1L1.44337 19M18.5566 19L1 1" stroke="#C92F27" stroke-width="2" />
                </svg>
              </a>
            </div>
            <div>
              <div class="flex">
                <DIV class="block_img">
                <img class="imggg1" src="../<?= $candle['img_main'] ?>" alt="">
                <div class="flex">
                  <img class="imggg2" src="../<?= $candle['img_1'] ?>" alt="">
                  <img class="imggg3" src="../<?= $candle['img_2'] ?>" alt="">
                  <img class="imggg4" src="../<?= $candle['img_3'] ?>" alt="">
                </div>
                </DIV>
                <DIV class="block_info">
      
                 <p class="p1"><?= $candle['title'] ?></p>
                 @if (auth()->user()->role == 1)
                    <form action="../candle/delete/<?= $candle['id'] ?>" method="GET">
                      <a href="#openModal4">Обновить</a>
                      <button type="submit">Удалить</button>
                    </form>
                 @endif
                 <p class="p2">Аромат: <?= $candle['aroma'] == null ? 'без аромата' :  $candle['aroma'] ?></p>
                 <p class="p2">Вселенная: <?= $candle['universe'] == null ? 'без вселенной' :  $candle['universe'] ?></p>
                 <p class="p3"><?= $candle['volume'] ?> мл</p>
                 <p class="p4">Количество</p>
                <div class="quantity_inner">
                  <button class="bt_minus">
                    <svg viewBox="0 0 24 24">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </button>
                  <input type="text" value="1" size="2" class="quantity" data-max-count="20" />
                  <button class="bt_plus">
                    <svg viewBox="0 0 24 24">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                  </button>
                 
                </div>
                <p class="p5"><?= $candle['price'] ?>p.</p>
                <div class="flex"><button class="pay">Купить</button>
                <button class="corzinka">Корзина</button></div>
                
                </DIV>
                
              </div>
                <div class="op">
                  <p class="opisan">Описание</p>
                  <p class="more_rext"><?= $candle['description'] ?></p>
                
                </div>
                <div class="otzivu">
                  <p class="ot2">Отзывы</p>
                  <p></p>
                  <div class="flex">
                    <p class="star">Ваша оценка:</p>
                    <svg class="stars" width="211" height="37" viewBox="0 0 211 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M18.5 1.61804L22.178 12.9377L22.2902 13.2832H22.6535H34.5557L24.9266 20.2791L24.6327 20.4926L24.745 20.8381L28.423 32.1578L18.7939 25.1619L18.5 24.9483L18.2061 25.1619L8.57703 32.1578L12.255 20.8381L12.3673 20.4926L12.0734 20.2791L2.4443 13.2832H14.3465H14.7098L14.822 12.9377L18.5 1.61804Z"
                        stroke="#C92F27" />
                      <path
                        d="M105.259 1.61804L108.937 12.9377L109.049 13.2832H109.412H121.314L111.685 20.2791L111.392 20.4926L111.504 20.8381L115.182 32.1578L105.553 25.1619L105.259 24.9483L104.965 25.1619L95.3358 32.1578L99.0138 20.8381L99.1261 20.4926L98.8322 20.2791L89.2031 13.2832H101.105H101.469L101.581 12.9377L105.259 1.61804Z"
                        stroke="#C92F27" />
                      <path
                        d="M61.8794 1.61804L65.5574 12.9377L65.6696 13.2832H66.0329H77.9351L68.306 20.2791L68.0121 20.4926L68.1244 20.8381L71.8024 32.1578L62.1733 25.1619L61.8794 24.9483L61.5855 25.1619L51.9564 32.1578L55.6344 20.8381L55.7467 20.4926L55.4528 20.2791L45.8237 13.2832H57.7259H58.0892L58.2014 12.9377L61.8794 1.61804Z"
                        stroke="#C92F27" />
                      <path
                        d="M148.638 1.61804L152.316 12.9377L152.428 13.2832H152.791H164.693L155.064 20.2791L154.77 20.4926L154.883 20.8381L158.561 32.1578L148.932 25.1619L148.638 24.9483L148.344 25.1619L138.715 32.1578L142.393 20.8381L142.505 20.4926L142.211 20.2791L132.582 13.2832H144.484H144.847L144.96 12.9377L148.638 1.61804Z"
                        stroke="#C92F27" />
                      <path
                        d="M192.017 1.61804L195.695 12.9377L195.807 13.2832H196.171H208.073L198.444 20.2791L198.15 20.4926L198.262 20.8381L201.94 32.1578L192.311 25.1619L192.017 24.9483L191.723 25.1619L182.094 32.1578L185.772 20.8381L185.884 20.4926L185.59 20.2791L175.961 13.2832H187.864H188.227L188.339 12.9377L192.017 1.61804Z"
                        fill="#E8DABF" stroke="#C92F27" />
                    </svg>
      
                  </div>
                  
                  <p class="u">Ваш отзыв:</p>
                  <textarea class="textarea" name="" id="" cols="30" rows="10"></textarea>
                  <button class="otpr">Отправить</button>
                
                </div>
                <div class="otz_people">
                  <div class="flex">
          <p class="star">Пользлватель1</p>
          <svg class="stars" width="211" height="37" viewBox="0 0 211 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M18.5 1.61804L22.178 12.9377L22.2902 13.2832H22.6535H34.5557L24.9266 20.2791L24.6327 20.4926L24.745 20.8381L28.423 32.1578L18.7939 25.1619L18.5 24.9483L18.2061 25.1619L8.57703 32.1578L12.255 20.8381L12.3673 20.4926L12.0734 20.2791L2.4443 13.2832H14.3465H14.7098L14.822 12.9377L18.5 1.61804Z"
              stroke="#C92F27" />
            <path
              d="M105.259 1.61804L108.937 12.9377L109.049 13.2832H109.412H121.314L111.685 20.2791L111.392 20.4926L111.504 20.8381L115.182 32.1578L105.553 25.1619L105.259 24.9483L104.965 25.1619L95.3358 32.1578L99.0138 20.8381L99.1261 20.4926L98.8322 20.2791L89.2031 13.2832H101.105H101.469L101.581 12.9377L105.259 1.61804Z"
              stroke="#C92F27" />
            <path
              d="M61.8794 1.61804L65.5574 12.9377L65.6696 13.2832H66.0329H77.9351L68.306 20.2791L68.0121 20.4926L68.1244 20.8381L71.8024 32.1578L62.1733 25.1619L61.8794 24.9483L61.5855 25.1619L51.9564 32.1578L55.6344 20.8381L55.7467 20.4926L55.4528 20.2791L45.8237 13.2832H57.7259H58.0892L58.2014 12.9377L61.8794 1.61804Z"
              stroke="#C92F27" />
            <path
              d="M148.638 1.61804L152.316 12.9377L152.428 13.2832H152.791H164.693L155.064 20.2791L154.77 20.4926L154.883 20.8381L158.561 32.1578L148.932 25.1619L148.638 24.9483L148.344 25.1619L138.715 32.1578L142.393 20.8381L142.505 20.4926L142.211 20.2791L132.582 13.2832H144.484H144.847L144.96 12.9377L148.638 1.61804Z"
              stroke="#C92F27" />
            <path
              d="M192.017 1.61804L195.695 12.9377L195.807 13.2832H196.171H208.073L198.444 20.2791L198.15 20.4926L198.262 20.8381L201.94 32.1578L192.311 25.1619L192.017 24.9483L191.723 25.1619L182.094 32.1578L185.772 20.8381L185.884 20.4926L185.59 20.2791L175.961 13.2832H187.864H188.227L188.339 12.9377L192.017 1.61804Z"
              fill="#E8DABF" stroke="#C92F27" />
          </svg>
          </div>
          <p class="pp1">Отзыв:</p>
          <p class="pp2">Одна из самых любимых свеч, особенно прекрасен Кли на упаковке!!!
          А запах просто настолько прекрасен, собираюсь покупать и дальше.</p>
          </div>
      
      
                </div>
            </div>
          </div>
        </div>
        <script src="../js/main.js"></script>
    <script src="../js/accordion.min.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>