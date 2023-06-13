<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/zdorovie.css">

</head>
<body>
<section_header>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <div class="container-fluid">
        <!-- Background animtion-->
        <div class="background">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
<!--            <div class="cube"></div>-->
        </div>
        <!-- header -->
        <header>
            <nav>
                <ul>
                    <li><a href="/index.html">Главная</a></li>
                    <li><a href="/services.html">Услуги</a></li>
                    <li><a href="/contacts.html">Контакты</a></li>
                    <li><a href="/vxod.html">Пользователь</a></li>
                    <li><a href="./deleteuser.php">Выйти</a></li>
                </ul>
            </nav>
            <!-- logo -->
            <div class="logo"><span>Z</span></div>
            <!-- title & content -->
            <section class="header-content">
                <h1>Добро пожаловать</h1>
                <p>Добро пожаловать в сервис "Здоровье" Мы - увлеченная группа людей, производящих высококачественные продукты,
                    <br>призванные облегчить вашу жизнь.</p>
                <button>Узнать больше</button>
                <button><a href="#">Посмотреть услуги</a></button>
            </section>
        </header>
</section_header>



<section class="info">
    <div class="info_title">Наши сервисы</div>
    <div class="info_box">
        <img class="info_icon" src="/img/11.png">
        <h1 class="info_text">Запись к врачу</h1>
        <p class="info_subtext">Удобная онлайн-запись в государственные поликлиники без очередей и регистратуры для всей семьи</p>
    </div>

    <div class="info_box">
        <img class="info_icon" src="/img/22.png">
        <h1 class="info_text">Избранные поликлиники и врачи</h1>
        <p class="info_subtext">Быстрый доступ к любимым врачам и поликлиникам для записи и просмотра расписания</p>
    </div>

    <div class="info_box">
        <img class="info_icon" src="/img/33.png">
        <h1 class="info_text">Полис ОМС</h1>
        <p class="info_subtext">Определение номера вашего полиса, страховой компании и медицинских учреждений, к которым вы прикреплены</p>
    </div>

    <div class="info_box">
        <img class="info_icon" src="/img/44.png">
        <h1 class="info_text">Онлайн диагостика</h1>
        <p class="info_subtext">Бесплатные тесты на факторы риска заболеваний и рекомендации по посещению врачей и сдаче анализов</p>
    </div>

    <div class="info_box">
        <img class="info_icon" src="/img/55.png">
        <h1 class="info_text">Дневник здоровья</h1>
        <p class="info_subtext">Контроль и аналитика показателей здоровья: настроение, вес, давление, симптомы, стресс и более 50 показателей</p>
    </div>

    <div class="info_box">
        <img class="info_icon" src="/img/66.png">
        <h1 class="info_text">Медкарта(скоро)</h1>
        <p class="info_subtext">Хранение заключений, анализов и прочих медицинских документов в одном месте для всей семьи</p>
    </div>
</section>


<section class="info1">
    <div class="info_title1">Отзывы App Store и Google Play</div>

    <div class="info_box1">
        <h1 class="info_text1">За последенее время, это, пожалуй, самый удобный сервис, которым я пользовалась</h1>
        <p class="info_subtext1">В совокупности с Google fit дает возможность следить за своим здоровьем, узнавать интересные факты, достигать целей. Спасибо разработчикам!</p>
    </div>

    <div class="info_box1">
        <h1 class="info_text1">Прекрасное приложение</h1>
        <p class="info_subtext1">Очень удобно записаться к врачам, а главное, что все работает и нет никаких проблем непосредственно при посещении поликлиники. Это гораздо лучше, чем заходить на сайт поликлиники, искать кнопку "записаться к врачу" и по сто раз вводить одни и те же данные.</p>
    </div>

    <div class="info_box1">
        <h1 class="info_text1">Очень удобное приложение!</h1>
        <p class="info_subtext1">Есть возможность добавить членов семьи, записывать их к врачу, получать пуш-уведомления о приемах, добавлять поликлиники в свой список, читать интересные статьи, отслеживать свои показатели здоровья.</p>
    </div>

    <div class="info_box1">
        <h1 class="info_text1">Ровно то, чего я ожидала от онлайн-консультации.</h1>
        <p class="info_subtext1">Приятно удивлена уровнем, скоростью ответа, вежливостью доктора. В режиме офлайн я бы потрптила на это больше денег и нервов. Очень удобно, что консультация по видео. Это очень крутой серви.</p>
    </div>

    <div class="info_box1">
        <h1 class="info_text1">Как же здорово, что сейчас есть интеренет. </h1>
        <p class="info_subtext1">Отличное приложение для расшифровки анализов и консультаций с врачами. Грамотные и самое главное очень вежливые специалисты.</p>
    </div>

    <div class="info_box1">
        <h1 class="info_text1">Как далеко шагнул прогресс...</h1>
        <p class="info_subtext1">Сервис "Здоровье" можно забыть по хождению по кабинетам... врач вас видит через приложение. Особенно удобно приложние для тех, кто просто спросить</p>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Информация</h4>
                <ul>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Личный кабинет</a></li>
                    <li><a href="#">Политика конфиденциальности</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Контакты</h4>
                <ul>
                    <li><a href="#">Все наши контакты</a></li>
                    <li><a href="#">Тел: 8 800-555-45-34</a></li>
                    <li><a href="#">Почта</a></li>
                    <li><a href="#">Пн-Пт: 8:00 - 17:00</a></li>
                </ul>
            </div>
            <p class="footer_footer">© 2023 "Здоровье"</p>
        </div>
    </div>
</footer>

</body>
</html>
