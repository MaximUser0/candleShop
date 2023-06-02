<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/delivery.css">
    <title>Document</title>
</head>
<body>
    <header class="home">
        <!-- mobile -->
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
                <a href="" class="link__nav__bag"><svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.91304 13.6203V5.75949C8.37681 4.50633 10.2087 2 13.8261 2C17.4435 2 19.2754 4.50633 19.7391 5.75949V13.6203M2 9.86076C2 15.2152 2 26.1291 2 26.9494C2 27.7696 4.08696 28.6582 5.13043 29C10.1159 29 20.5739 29 22.5217 29C24.4696 29 25.6522 26.9494 26 25.9241V9.86076H14H2Z" stroke="#C92F27" stroke-width="3"/>
                    </svg>
                    </a>
            </div>
        </div>
        <!-- pc -->
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
                <div class="link___bag">
                    <a href="" class="link__nav__bag">Корзина</a>
                </div>
                <div class="link___contact">
                    <a href="contact" class="link__nav__contact">Контакты</a>
                </div>
            </div>
        </nav>
        <!-- block -->
        <div class="container__header">
            <div class="header__left">
                <h2 class="title__header">Упаковка свеч</h2>
                <p class="text__header">К каждой свече в подарок прилагается подарочная упаковка!
                <br>    Так же, внутри коробочки со свечой вас будет ждать много других сюрпризов!
             <br>   После того, как вы оплатили свой заказ, мы начинаем его собирать и упаковывать. 
            </p>
            </div>
            <div class="header__right">
                <div class="photo__header"></div>
            </div>
        </div>
    </header>


    <section class="payment">
        <h2 class="title__pay">Способы оплаты</h2>
        <div class="pay__container">
            <div class="pay__left">
                <div class="top">
                    <div class="photo__pay__01"></div>
                    <div class="text__pay">Оплата банковской картой</div>
                </div>
                <div class="bottom">
                    <div class="photo__pay__02"></div>
                    <div class="text__pay">Оплата электронным кошельком</div>
                </div>
            </div>
            <div class="pay__right">
                <div class="top top__right">
                    <div class="photo__pay__03"></div>
                    <div class="text__pay">Наличными при получении товара</div>
                </div>
                <div class="bottom">
                    <div class="photo__pay__04"></div>
                    <div class="text__pay">Оплата с банковского счета</div>
                </div>
            </div>
        </div>

    </section>



    <section class="delivery">

<!-- pc -->

        <h2 class="title__delivery">Доставка</h2>
    <div class="container__delivery">
        <div class="top__delivery">
            <div class="top__delivery__2 top__left">
                <p class="number__top">01</p>
                <p class="text__top">Самовывоз</p>
            </div>
            <div class="top__delivery__2 top__middle">
                <p class="number__top">02</p>
                <p class="text__top">Доставка по Москве</p>
            </div>
            <div class="top__delivery__2 top__right">
                <p class="number__top">03</p>
                <p class="text__top">Доставка по России</p>
            </div>
        </div>
        <hr class="middle__delivery">
        <div class="bottom__delivery">
            <div class="bottom__delivery__2 bottom__left">Вы можете забрать свою посылку по адресу: <br>     г. Москва, ул. Касаткина, д.3-А, стр. 8, территория завода “Стрела”.</div>
            <div class="bottom__delivery__2 bottom__middle">Осуществляется сервисами:
            <br>    СДЭК или Boxberry до пункта выдачи или курьером до двери
            <br>    Достависта или ЯндексGO до двери (согласовывается индивидуально)
            <br>    Для заказа срочной доставки по Москве - свяжитесь с нами по телефону.</div>
            <div class="bottom__delivery__2 bottom__right">Мы доставляем по России и ближайшим странам компаниями СДЭК, Почта России согласнотарифам логистических компаний</div>
        </div>
    </div>
<!-- mobile -->

<div class="container__delivery__mobile">
    <div class="top__delivery">
        <div class="box__01">
            <div class="top__delivery__2 top__left">
                <p class="number__top">01</p>
                <p class="text__top">Самовывоз</p>
            </div>
            <hr class="middle__delivery">
            <div class="bottom__delivery__2 bottom__left">Вы можете забрать свою посылку по адресу: <br>     г. Москва, ул. Касаткина, д.3-А, стр. 8, территория завода “Стрела”.</div>
            
        </div>
        <div class="box__02">
            <div class="top__delivery__2 top__middle">
                <p class="number__top">02</p>
                <p class="text__top">Доставка по Москве</p>
            </div>
            <hr class="middle__delivery">
            <div class="bottom__delivery__2 bottom__middle">Осуществляется сервисами:
                <br>    СДЭК или Boxberry до пункта выдачи или курьером до двери
                <br>    Достависта или ЯндексGO до двери (согласовывается индивидуально)
                <br>    Для заказа срочной доставки по Москве - свяжитесь с нами по телефону.</div>
        
        </div>
        <div class="box__03">
            <div class="top__delivery__2 top__right">
                <p class="number__top">03</p>
                <p class="text__top">Доставка по России</p>
    
            </div>
            <hr class="middle__delivery">
            <div class="bottom__delivery__2 bottom__right">Мы доставляем по России и ближайшим странам компаниями СДЭК, Почта России согласнотарифам логистических компаний</div>
            
        </div>
        
        
        
    
    </div>
    
</div>




    </section>
    


    <section class="pickup">
        <h2 class="title__pickup">Самовывоз</h2>
        <!-- pc -->
        <div class="container__pickup">
            <div class="pickup__left">
                <div class="maps">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5e91ca51a0473ae0243ad5fd4b45f210e38aaf017d20fbac2586c1adcb38fcff&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2241.0236975032067!2d37.653976077408146!3d55.82754797311193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b535d5b902191d%3A0xa91521078a68f969!2z0YPQuy4g0JrQsNGB0LDRgtC60LjQvdCwLCAz0JAg0YHRgtGA0L7QtdC90LjQtSA4LCDQnNC-0YHQutCy0LAsIDEyOTMwMQ!5e0!3m2!1sru!2sru!4v1681824012091!5m2!1sru!2sru" width="700" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
            </div>
            <div class="pickup__right">
                <h3 class="title__text__pickup">Наш офис</h3>
                <p class="text__top__pickup">г. Москва, ул. Касаткина, д.3-А, стр. 8, территория завода “Стрела”</p>
                <h3 class="title__text__pickup">Время работы пункта выдачи</h3>
                <p class="middle__text__pickup">Будние дни с 10-00 до 17-00</p>
                <p class="bottom__text__pickup">Все декоративные свечи, купленные в интернет-магазине Candle, можно забрать самостоятельно в нашем офисе в Москве. Обращаем Ваше внимание, что собранные заказы, не востребованные в течение 2-х недель, расформировываются (если не оговорено с заказчиком иначе). Самовывоз осуществляется после предварительного согласования по телефону <b>+7 (495) 502-2200</b>  или электронной почте <b>manager@candles.ru.</b> </p>
            </div>
        </div>
        <!-- mobile -->
        <div class="container__pickup__mobile">
            <div class="pickup__left">
                <div class="maps">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5e91ca51a0473ae0243ad5fd4b45f210e38aaf017d20fbac2586c1adcb38fcff&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            <div class="pickup__right">
                <h3 class="title__text__pickup">Наш офис</h3>
                <p class="text__top__pickup">г. Москва, ул. Касаткина, д.3-А, стр. 8, территория завода “Стрела”</p>
                <h3 class="title__text__pickup">Время работы пункта выдачи</h3>
                <p class="middle__text__pickup">Будние дни с 10-00 до 17-00</p>
                <p class="bottom__text__pickup">Все декоративные свечи, купленные в интернет-магазине Candle, можно забрать самостоятельно в нашем офисе в Москве. Обращаем Ваше внимание, что собранные заказы, не востребованные в течение 2-х недель, расформировываются (если не оговорено с заказчиком иначе). Самовывоз осуществляется после предварительного согласования по телефону <b>+7 (495) 502-2200</b>  или электронной почте <b>manager@candles.ru.</b> </p>
            </div>
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
</body>
</html>