<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <title>Document</title>
</head>
<body>
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
                <a href="" class="link__nav__bag"><svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.91304 13.6203V5.75949C8.37681 4.50633 10.2087 2 13.8261 2C17.4435 2 19.2754 4.50633 19.7391 5.75949V13.6203M2 9.86076C2 15.2152 2 26.1291 2 26.9494C2 27.7696 4.08696 28.6582 5.13043 29C10.1159 29 20.5739 29 22.5217 29C24.4696 29 25.6522 26.9494 26 25.9241V9.86076H14H2Z" stroke="#C92F27" stroke-width="3"/>
                    </svg>
                    </a>
            </div>
        </div>
        <nav class="navigation__pc">
            <div class="nav__left">
                <div class="link___catalog">
                    <a href="" class="link__nav__catalog">Каталог</a>
                </div>
                <div class="link___about__us">
                    <a href="" class="link__nav__about__us">О нас</a>
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
        
    </header>
        <div class="container__header"> 
            <div class="top__header">
                <h1 class="title__header">Наша команда</h1>
                <div class="line">
                    <hr class="line__header">
                </div>
                
            </div>
            <div class="middle__header">
                <div class="middle__text__header">Свечи и ароматы для дома Candle изготавливаются вручную в мастерской в Москве, сохраняя индивидуальность крафтового производства, специально для людей, умеющих ценить красоту простых вещей, любящих и заботящихся об окружающем нас мире.
<br> <br>
                    Фитили изготовлены из неотбеленного хлопка или дерева, без вредных примесей тяжелых металлов, в особенности свинца. </div>
                <div class="middle__photo__header"></div>
            </div>
            <div class="bottom__header">
                <div class="bottom__photo__header"></div>
                <div class="bottom__text__header">
                    <h2 class="owner">Ксения Карпова</h2>
                    <p class="text__owner">Создатель бренда, занимается разработкой продуктов, отвечает за дизайн и творческое развитие проекта, наш вдохновитель в Candle.
                     <br>   <br>Выбирая визуал для своих продуктов, мы всегда стремимся к лаконичности и балансу. Это отражается в нашем внимании к деталям - начиная от формы свечи и заканчивая её упаковкой.
                    </p>
                </div>
            </div>
        </div>
    <section class="concern">
        <h2 class="concern__title">Мы заботимся о планете</h2>
        <div class="container__concern">
            <div class="left__concern">
                <p class="text_concern">Все свечи и аромасаше созданы нами вручную, в гармонии с природой, из экологичных растительных восков, натуральных эфирных масел и парфюмерных компонентов из парфюмерной столицы мира - Грасса</p>
            </div>
            <div class="right__concern">
                <p class="text_concern">Фитили изготовлены из неотбеленного хлопка или дерева, без вредных примесей тяжелых металлов, в особенности свинца. Упаковка может быть переработана, либо просто возвращена нам: мы создадим специально для Вас новую свечу с особой скидкой за шаг в сторону zero waste.</p>
            </div>
        </div>
        <div class="photo__concern">
            <div class="photo__concern02">
            
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
                    <a href="" class="about">О нас</a>
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