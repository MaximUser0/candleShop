<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/accordion.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Candellia</title>
</head>
<body>


<!-- HTML модального окна регистрации -->
<div id="openModal2" class="modal2">
  <div class="modal-dialog2">
    <div class="modal-content2">
      <div class="modal-header2">
      <a href=""><p class="vxod">Регистрация</p></a> 
      <a href="#openModal3"><p class="create">Вход</p></a> 
        <a href="#close" title="Close" class="close"><svg class="closes" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M19 1L1.44337 19M18.5566 19L1 1" stroke="#C92F27" stroke-width="2" />
        </svg>
        </a>
      </div>
      <div class="modal-body2">
        <form method="POST" action="registration">
            @csrf
            <label for="email">Введите почту</label><br>
            @error('email')
            <label>{{ $message }}</label><br>
            @enderror
            <input name="email" type="email"><br>
            
            <label for="password">Введите пароль</label><br>
            <input name="password" type="password"><br>
            <label for="password_confirmation">Введите пароль еще раз</label><br>
            @error('password')
            <label>{{ $message }}</label><br>
            @enderror
            <input name="password_confirmation" type="password"><br>
            <button class="bb">Войти</button><br>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- HTML модального окна входа -->
<div id="openModal3" class="modal2">
    <div class="modal-dialog2">
      <div class="modal-content2">
        <div class="modal-header2">
          <a href="">
            <p class="vxod">Вход</p>
          </a>
          <a href="#openModal2">
            <p class="create">Cоздать аккаунт</p>
          </a>
          <a href="#close" title="Close" class="close"><svg class="closes" width="20" height="20" viewBox="0 0 20 20"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 1L1.44337 19M18.5566 19L1 1" stroke="#C92F27" stroke-width="2" />
            </svg>
          </a>
        </div>
        <div class="modal-body2">
          <form method="POST" action="login">
            @csrf
            @error('form')
            <label>{{ $message }}</label><br>
            @enderror
            <label for="email">Введите почту</label><br>
            <input name="email" type="email"><br>
            <label for="password">Введите пароль</label><br>
            <input name="password" type="password"><br>
          
            <button class="bb">Войти</button><br>
  
          </form>
        </div>
      </div>
    </div>
  </div>

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
            <li><a href="<?= $user ? '/logout' : '#openModal3' ?>" class="link__nav__sign__in"><?= $user ? 'Выйти' : 'Войти' ?></a>
            <a href="contact" class="link__nav__contact">Контакты</a>
        </ul>
        </nav>
            </div>
              <div class="link__logo">
                <a href="/" class="logo">Logo</a>
              </div>
              <div class="link___bag">
                <a href="" class="link__nav__bag"><svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.91304 13.6203V5.75949C8.37681 4.50633 10.2087 2 13.8261 2C17.4435 2 19.2754 4.50633 19.7391 5.75949V13.6203M2 9.86076C2 15.2152 2 26.1291 2 26.9494C2 27.7696 4.08696 28.6582 5.13043 29C10.1159 29 20.5739 29 22.5217 29C24.4696 29 25.6522 26.9494 26 25.9241V9.86076H14H2Z" stroke="#C92F27" stroke-width="3"/>
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
                @if ($role == 1)
                    <div class="link">
                        <a href="<?=route('profile')?>">Адмика</a>
                    </div> 
                @endif
                <div class="link___sign__in">
                    <a href="<?= $user ? '/logout' : '#openModal3' ?>" class="link__nav__sign__in"><?= $user ? 'Выйти' : 'Войти' ?></a>
                </div>
                <div class="link___bag">
                    <a href="#" class="modal-trigger" data-modal="modal-name">Корзина</a>
                </div>
                <div class="link___contact">
                    <a href="contact" class="link__nav__contact">Контакты</a>
                </div>
            </div>
        </nav>
        <div class="header__block">
            <div class="block__left">
                <div class="container__header">
                    <div class="header__title">
                        <h1 class="title__slogan">
                            Эксклюзивные ароматы ваших вселенных
                        </h1>
                    </div>
                    <div class="header__text">
                        <p class="text__slogan">
                            Наполните свой дом теплом, уютом и прекрасным ароматом.
                        </p>
                    </div>
                    <div class="header__button__catalog">
                        <button class="button_catalog">Каталог</button>
                    </div>
                </div>
            </div>

            <div class="block__right">
                <div class="header__photo"></div>
            </div>
        </div>
    </header>
    <section class="Why">
        <div class="block__top">
            <div class="why__title">
                <p class="title__why">Почему мы?</p>
            </div>
            <div class="why__line">
                <hr class="line__top">
            </div>
        </div>



        <div class="text__midlle">
            <div class="item__work__middle text__middle__02">
                <div class="item__text__work">02</div>
                <div class="text__work">Длительное горение более - 8 часов</div>
            </div>

            <div class="item__work__middle text__middle__04">
                <div class="item__text__work">04</div>
                <div class="text__work text__work__04">Уникальные ароматы</div>
            </div>
        </div>


        <div class="block__middle">
            <div class="block__fair">
                <div class="block__fair__1"></div>
                <div class="block__fair__2"></div>
                <div class="block__fair__3"></div>
                <div class="block__fair__4"></div>
            </div>

            <div class="middle__line">
                <hr class="line__middle">
            </div>
        </div>


        <div class="text__midlle">
            <div class="item__work__middle text__middle__01">
                <div class="item__text__work">01</div>
                <div class="text__work">Натуральные аромамасла и соевый воск</div>
            </div>

            <div class="item__work__middle text__middle__03">
                <div class="item__text__work">03</div>
                <div class="text__work">Гипоаллергенные и безопасные для всех</div>
            </div>
        </div>
<!-- mobile -->
        <div class="why__mobile">

            <div class="box__left">
                <div class="item__work__middle text__middle__01">
                    <div class="box01">
                        <div class="item__text__work">01</div>
                        <div class="block__fair__1"></div>
                    </div>
                    
                    <div class="text__work">Натуральные аромамасла и соевый воск</div>
                </div>
                <div class="item__work__middle text__middle__03">
                    <div class="box03">
                        <div class="item__text__work">03</div>
                        <div class="block__fair__3"></div>
                    </div>
                    
                    <div class="text__work">Гипоаллергенные и безопасные для всех</div>    
                </div>
            </div>
            



            <div class="middle__line">
                <hr class="line__middle">
            </div>

            
            <div class="box__right">
                <div class="item__work__middle text__middle__02">
                    <div class="box02">
                        <div class="block__fair__2"></div>
                        <div class="item__text__work number__02">02</div>
                        
                    </div>
                    <div class="text__work text__work__02">Длительное горение более - 8 часов</div>
                </div>
                <div class="item__work__middle text__middle__04">
                    <div class="box04">
                        <div class="block__fair__4"></div>
                        <div class="item__text__work number__04">04</div>
                        
                    </div>
                    
                    <div class="text__work text__work__04">Уникальные ароматы</div>
                </div>
            </div>
            
        </div>
    
    





            
            


                
<!-- pc -->
        <div class="block__bottom">
            <div class="universe__line">
                <hr class="line__bottom">
            </div>
            <div class="universe__title">
                <p class="title__universe">Вселенные</p>
            </div>
        </div>
<!-- mobile -->
<div class="block__bottom__mobile">
    <div class="universe__title">
        <p class="title__universe">Вселенные</p>
    </div>
</div>
<!-- pc -->
        <div class="photo__universe">
            <div class="photo__text__universe universr__photo__item01">
                <div class="photo__item01__uni"></div>
                <div class="link__universe__text">
                    <a class="text__link__uni" href="catalog/?universe=Genshin Impact">Genshin Impact</a>
                    <div class="arrow__link__uni"></div>
                </div>
            </div>
            <div class="photo__text__universe universr__photo__item01">
                <div class="photo__item02__uni"></div>
                <div class="link__universe__text">
                    <a class="text__link__uni" href="catalog/?universe=Клуб Винкс">Клуб Winx</a>
                    <div class="arrow__link__uni"></div>
                </div>
            </div>
            <div class="photo__text__universe universr__photo__item01">
                <div class="photo__item03__uni"></div>
                <div class="link__universe__text">
                    <a class="text__link__uni" href="catalog/?universe=Гарри Поттер">Гарри Поттер</a>
                    <div class="arrow__link__uni"></div>
                </div>
            </div>
        </div>
    </section>  
    <section class="Brand">
        <h1 class="brand__title">О бренде</h1>
        <div class="brand__container__top">
            <div class="brand__top__left">
                <p class="brand__logo">Candle</p>
                <p class="brand__text">
                    Настоящая магия всегда связана с творчеством и воображением. <br>

                   <br> У нас вы можете найти и купить свечи ручной работы — самые необычные, впитавшие частицу души изготовившего их мастера. <br>
                    
                   <br> Вы можете почувствовать аромат наших свеч и ассоциировать их с вашими любимыми персонажами.</p>
            </div>
            <div class="brand__top__right">
                <div class="brand__top__photo"></div>
            </div>
        </div>
        <div class="brand__container__bottom">
            <div class="brand__bottom__left">
                <div class="photo__left__brand"></div>
                <div class="link__universe__text">
                    <a class="text__link__brend" href="">Узнать больше О Нас</a>
                    <div class="arrow__link__uni"></div>
                </div>
            </div>
            <div class="brand__bottom__right">
                <h1 class="title__barnd__right">Скидка 10%</h1>
                <p class="text__brand__right">Промокод 10% на первый заказ на нашем сайте.</p>
                <div class="header__button__catalog catalog__brand__button">
                    <button class="button_catalog catalog__brand">Перейти в каталог</button>
                </div>
                <div class="photo__brand__right"></div>
            </div>
        </div>
    </section>
    <section class="FAQ">
        <div class="block__top">
            <div class="why__title">
                <p class="title__why">FAQ</p>
            </div>
            <div class="why__line">
                <hr class="line__top line__faq">
            </div>
        </div>
        <div class="container__faq">
            <ul class="list accordion-container">
                <li class="list__item ac">
                    <div class="faq__line">
                        <hr class="line__top line__faq__top">
                    </div>
                    <h3 class="list__item__title ac-header ac-trigger">Какие ароматизаторы используется для свечей
                        <svg class="arrow_bottom" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 1.66602L28.6667 28.3327M28.6667 28.3327V1.66602M28.6667 28.3327H2" stroke="#C92F27" stroke-width="4"/>
                            </svg>
                                                        
                    </h3>
                    <p class="list_item_text ac-panel">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem quam quibusdam assumenda sapiente nobis tempora a sint error nesciunt. Nemo itaque dolorem, eius ratione quis, ea neque similique doloribus aspernatur eum tempora voluptas nobis. Laboriosam debitis illum totam inventore blanditiis accusantium assumenda nisi. Animi minima fugit iusto numquam tempore velit, voluptatibus rerum cumque saepe accusamus aspernatur rem! Quo fuga veniam tempora cupiditate hic, delectus fugiat? Natus deleniti perferendis nam eveniet architecto laudantium odit dolores minima et repellat facilis dolorum, libero alias reiciendis, quasi voluptatum illum nisi accusamus? Illo, nostrum. Recusandae, at fugit. Aliquam quia perferendis vitae quisquam eos. Ipsum corporis modi unde minima mollitia quasi dignissimos saepe corrupti nam ab, quia alias perspiciatis? Dolor perspiciatis voluptas eaque modi molestias.
                    </p>
                </li>
                <li class="list__item ac">
                    <div class="faq__line__bottom">
                        <hr class="line__top line__faq__bottom">
                    </div>
                    <h3 class="list__item__title ac-header ac-trigger">Какой воск используется для свечей
                        <svg class="arrow_bottom" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 1.66602L28.6667 28.3327M28.6667 28.3327V1.66602M28.6667 28.3327H2" stroke="#C92F27" stroke-width="4"/>
                            </svg>
                                                        
                    </h3>
                    <p class="list_item_text ac-panel">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem quam quibusdam assumenda sapiente nobis tempora a sint error nesciunt. Nemo itaque dolorem, eius ratione quis, ea neque similique doloribus aspernatur eum tempora voluptas nobis. Laboriosam debitis illum totam inventore blanditiis accusantium assumenda nisi. Animi minima fugit iusto numquam tempore velit, voluptatibus rerum cumque saepe accusamus aspernatur rem! Quo fuga veniam tempora cupiditate hic, delectus fugiat? Natus deleniti perferendis nam eveniet architecto laudantium odit dolores minima et repellat facilis dolorum, libero alias reiciendis, quasi voluptatum illum nisi accusamus? Illo, nostrum. Recusandae, at fugit. Aliquam quia perferendis vitae quisquam eos. Ipsum corporis modi unde minima mollitia quasi dignissimos saepe corrupti nam ab, quia alias perspiciatis? Dolor perspiciatis voluptas eaque modi molestias.
                    </p>
                </li>
                <li class="list__item ac">
                    <div class="faq__line">
                        <hr class="line__top line__faq__top">
                    </div>
                    <h3 class="list__item__title ac-header ac-trigger">Как оформить заказ
                        <svg class="arrow_bottom" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 1.66602L28.6667 28.3327M28.6667 28.3327V1.66602M28.6667 28.3327H2" stroke="#C92F27" stroke-width="4"/>
                            </svg>
                                                        
                    </h3>
                    <p class="list_item_text ac-panel">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem quam quibusdam assumenda sapiente nobis tempora a sint error nesciunt. Nemo itaque dolorem, eius ratione quis, ea neque similique doloribus aspernatur eum tempora voluptas nobis. Laboriosam debitis illum totam inventore blanditiis accusantium assumenda nisi. Animi minima fugit iusto numquam tempore velit, voluptatibus rerum cumque saepe accusamus aspernatur rem! Quo fuga veniam tempora cupiditate hic, delectus fugiat? Natus deleniti perferendis nam eveniet architecto laudantium odit dolores minima et repellat facilis dolorum, libero alias reiciendis, quasi voluptatum illum nisi accusamus? Illo, nostrum. Recusandae, at fugit. Aliquam quia perferendis vitae quisquam eos. Ipsum corporis modi unde minima mollitia quasi dignissimos saepe corrupti nam ab, quia alias perspiciatis? Dolor perspiciatis voluptas eaque modi molestias.
                    </p>
                </li>
                <li class="list__item ac">
                    <div class="faq__line__bottom">
                        <hr class="line__top line__faq__bottom">
                    </div>
                    <h3 class="list__item__title ac-header ac-trigger">Способы оплаты заказа
                        <svg class="arrow_bottom" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 1.66602L28.6667 28.3327M28.6667 28.3327V1.66602M28.6667 28.3327H2" stroke="#C92F27" stroke-width="4"/>
                            </svg>
                                                        
                    </h3>
                    <p class="list_item_text ac-panel">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem quam quibusdam assumenda sapiente nobis tempora a sint error nesciunt. Nemo itaque dolorem, eius ratione quis, ea neque similique doloribus aspernatur eum tempora voluptas nobis. Laboriosam debitis illum totam inventore blanditiis accusantium assumenda nisi. Animi minima fugit iusto numquam tempore velit, voluptatibus rerum cumque saepe accusamus aspernatur rem! Quo fuga veniam tempora cupiditate hic, delectus fugiat? Natus deleniti perferendis nam eveniet architecto laudantium odit dolores minima et repellat facilis dolorum, libero alias reiciendis, quasi voluptatum illum nisi accusamus? Illo, nostrum. Recusandae, at fugit. Aliquam quia perferendis vitae quisquam eos. Ipsum corporis modi unde minima mollitia quasi dignissimos saepe corrupti nam ab, quia alias perspiciatis? Dolor perspiciatis voluptas eaque modi molestias.
                    </p>
                </li>
                <li class="list__item ac">
                    <div class="faq__line">
                        <hr class="line__top line__faq__top">
                    </div>
                    <h3 class="list__item__title ac-header ac-trigger">Правила ухода
                        <svg class="arrow_bottom" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 1.66602L28.6667 28.3327M28.6667 28.3327V1.66602M28.6667 28.3327H2" stroke="#C92F27" stroke-width="4"/>
                            </svg>
                                                        
                    </h3>
                    <p class="list_item_text ac-panel">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem quam quibusdam assumenda sapiente nobis tempora a sint error nesciunt. Nemo itaque dolorem, eius ratione quis, ea neque similique doloribus aspernatur eum tempora voluptas nobis. Laboriosam debitis illum totam inventore blanditiis accusantium assumenda nisi. Animi minima fugit iusto numquam tempore velit, voluptatibus rerum cumque saepe accusamus aspernatur rem! Quo fuga veniam tempora cupiditate hic, delectus fugiat? Natus deleniti perferendis nam eveniet architecto laudantium odit dolores minima et repellat facilis dolorum, libero alias reiciendis, quasi voluptatum illum nisi accusamus? Illo, nostrum. Recusandae, at fugit. Aliquam quia perferendis vitae quisquam eos. Ipsum corporis modi unde minima mollitia quasi dignissimos saepe corrupti nam ab, quia alias perspiciatis? Dolor perspiciatis voluptas eaque modi molestias.
                    </p>
                </li>
                <li class="list__item ac">
                    <div class="faq__line__bottom">
                        <hr class="line__top line__faq__bottom">
                    </div>
                    <h3 class="list__item__title ac-header ac-trigger">Способы доставки заказы
                        <svg class="arrow_bottom" width="25" height="25" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 1.66602L28.6667 28.3327M28.6667 28.3327V1.66602M28.6667 28.3327H2" stroke="#C92F27" stroke-width="4"/>
                            </svg>
                                                        
                    </h3>
                    <p class="list_item_text ac-panel">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem quam quibusdam assumenda sapiente nobis tempora a sint error nesciunt. Nemo itaque dolorem, eius ratione quis, ea neque similique doloribus aspernatur eum tempora voluptas nobis. Laboriosam debitis illum totam inventore blanditiis accusantium assumenda nisi. Animi minima fugit iusto numquam tempore velit, voluptatibus rerum cumque saepe accusamus aspernatur rem! Quo fuga veniam tempora cupiditate hic, delectus fugiat? Natus deleniti perferendis nam eveniet architecto laudantium odit dolores minima et repellat facilis dolorum, libero alias reiciendis, quasi voluptatum illum nisi accusamus? Illo, nostrum. Recusandae, at fugit. Aliquam quia perferendis vitae quisquam eos. Ipsum corporis modi unde minima mollitia quasi dignissimos saepe corrupti nam ab, quia alias perspiciatis? Dolor perspiciatis voluptas eaque modi molestias.
                    </p>
                </li>
                <li class="list__item ac">
                    <div class="faq__line">
                        <hr class="line__top line__faq__top">
                    </div>
                    <h3 class="list__item__title ac-header ac-trigger">Осуществляется ли доставка заграницу
                        <svg class="arrow_bottom" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 1.66602L28.6667 28.3327M28.6667 28.3327V1.66602M28.6667 28.3327H2" stroke="#C92F27" stroke-width="4"/>
                            </svg>
                                                        
                    </h3>
                    <p class="list_item_text ac-panel">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorem quam quibusdam assumenda sapiente nobis tempora a sint error nesciunt. Nemo itaque dolorem, eius ratione quis, ea neque similique doloribus aspernatur eum tempora voluptas nobis. Laboriosam debitis illum totam inventore blanditiis accusantium assumenda nisi. Animi minima fugit iusto numquam tempore velit, voluptatibus rerum cumque saepe accusamus aspernatur rem! Quo fuga veniam tempora cupiditate hic, delectus fugiat? Natus deleniti perferendis nam eveniet architecto laudantium odit dolores minima et repellat facilis dolorum, libero alias reiciendis, quasi voluptatum illum nisi accusamus? Illo, nostrum. Recusandae, at fugit. Aliquam quia perferendis vitae quisquam eos. Ipsum corporis modi unde minima mollitia quasi dignissimos saepe corrupti nam ab, quia alias perspiciatis? Dolor perspiciatis voluptas eaque modi molestias.
                    </p>
                    <div class="faq__line__bottom">
                        <hr class="line__top line__faq__bottom">
                    </div>
                </li>
            </ul>
        </div>
    </section>
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