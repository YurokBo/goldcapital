<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta id="vp" name="viewport" content="width=device-width, initial-scale=1">
    <!--<title><?php /*bloginfo('description'); */ ?></title>-->
    <title>Gold Capital</title>
    <meta name="description" content="Gold Capital">
    <meta name="keywords" content="legals, accounting, business">
    <meta name="google-site-verification" content="uRzsov0ESwF23AdyriQ_eBfYtsm8IizkANhb913bXtM"/>
    <meta name="yandex-verification" content="0494a74b68568cd8"/>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> -->
    <!-- OG Tags -->
    <meta property="og:title" content="Gold Capital">
    <meta property="og:description"
          content="Инвестиции в драгоценные металлы. Сезонный проект на росте золота, от 500% чистой прибыли">
    <meta property="og:type" content="Gold Capital">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/phone.jpg">
    <meta property="og:site_name" content="Gold Capital">
    <!-- Bootstrap CSS -->

    <!-- Main CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(66235159, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/66235159" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <?php wp_head(); ?>
</head>
<body>
<!-- preloader -->
<div class="preloader">
    <div class="preloader__wrapper">
        <!--        <img src="-->
        <?php //bloginfo('template_url'); ?><!--/assets/img/preloader-mobile.gif)" alt="preloader"-->
        <!--             class="preloader__gif">-->
        <img src="<?php bloginfo('template_url'); ?>/assets/img/gold-logo.svg)" alt="preloader"
             class="preloader__gif">
    </div>
</div>

<!--snow-->
<div id="particles-js"></div>

<!-- Header -->
<header class="header" id="header">
        <!--style="background-image: url(<?php /*bloginfo('template_url'); */?>/assets/img/background-header.png)"-->
    <div class="navigation">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-2 col-lg-2 col-6">
                    <a href="#header" class="header-logo">
                        <img src="<?php the_field('header-logo'); ?>" alt="GoldCapital" class="header-logo__img img">

                    </a>
                </div>
                <div class="d-none col-xl-6 col-lg-6 d-lg-block">
                    <ul class="menu d-flex justify-content-around">
                        <li class="menu__item">
                            <a href="#about" class="menu__link">
                                О компании
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="#services" class="menu__link">
                                Услуги
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="#creation" class="menu__link">
                                О проекте
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="#reviews" class="menu__link">
                                Отзывы
                            </a>
                        </li>
                        <li class="menu__item menu__item-contacts">
                            <a href="#contacts" class="menu__link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-4 col-6 d-flex justify-content-end align-items-center">
                    <a href="https://gobymylink.com/ru/registration/?partner_id=1256745&sub_id=GoldCapital"
                       target="_blank"
                       rel="nofollow noopener noreferrer" class="nav-btn btn mr-3"
                    >
                        Регистрация
                    </a>
                    <a href="https://gobymylink.com/ru/login/?partner_id=1256745&sub_id=GoldCapital"
                       target="_blank"
                       rel="nofollow noopener noreferrer" class="nav-btn btn ">
                        Вход
                    </a>
                    <button type="button" class="gamburger d-lg-none">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="offer">
        <ul class="networks">
            <li class="networks__call">
                <a href=".consultation" class="networks__link networks__link_call"
                   rel="nofollow noopener noreferrer">
                    Заказать звонок
                </a>
            </li>
            <li class="networks__item networks__item_telegram">
                <div href=".hover" target="_blank" class="networks__link networks__links_telegram"
                     rel="nofollow noopener noreferrer">
                    <i class="fab fa-telegram-plane"></i>
                </div>
                <div class="hover">
                    <div class="hover__block">
                        <div class="hover__icon">
                            <i class="fab fa-telegram-plane"></i>
                        </div>
                    </div>
                    <a href="https://t.me/GoldCapital_official" target="_blank" class="hover__link"
                       rel="nofollow noopener noreferrer">
                        Основной
                    </a>
                    <a href="https://t.me/joinchat/GJ5DAkYiCFXyQ0FBNqLVgQ" target="_blank" class="hover__link"
                       rel="nofollow noopener noreferrer">
                        Чат
                    </a>
                </div>
            </li>
            <li class="networks__item networks__item_inst">
                <a href="https://instagram.com/goldcapital_official" target="_blank" class="networks__link"
                   rel="nofollow noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="offer-slider">
                        <div class="offer-slider__item d-flex">
                            <div class="offer-slider__info">
                                <h1 class="offer-slider__title">
                                    <?php the_field('offer-slider__title-1'); ?>
                                </h1>
                                <p class="offer-slider__text">
                                    <?php the_field('offer-slider__text-1'); ?>

                                </p>
                                <a href=".jackpot" class="btn">
                                    Узнать подробнее
                                </a>
                            </div>
                            <img src="<?php the_field('offer-slider__img-1'); ?>" alt="phone"
                                 class="offer-slider__img img">

                        </div>
                        <div class="offer-slider__item d-flex">
                            <div class="offer-slider__info">
                                <h1 class="offer-slider__title">
                                    <?php the_field('offer-slider__title-2'); ?>
                                </h1>
                                <p class="offer-slider__text">
                                    <?php the_field('offer-slider__text-2'); ?>
                                </p>
                                <a href="#reviews" class="btn">
                                    Читать отзывы
                                </a>
                            </div>
                            <img src="<?php the_field('offer-slider__img-2'); ?>" alt="man"
                                 class="offer-slider__img img">

                        </div>
                        <div class="offer-slider__item d-flex">
                            <div class="offer-slider__info">
                                <h1 class="offer-slider__title">
                                    <?php the_field('offer-slider__title-3'); ?>

                                </h1>
                                <p class="offer-slider__text">
                                    <?php the_field('offer-slider__text-3'); ?>

                                </p>
                                <a href=".director" class="btn">
                                    Читать подробнее
                                </a>
                            </div>
                            <img src="<?php the_field('offer-slider__img-3'); ?>" alt="gold"
                                 class="offer-slider__img img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="offer-list d-flex justify-content-between">
                        <li class="offer-list__item">
                            <p class="offer-list__text">
                                <span>5 лет</span>
                                работы над сезонным проектом
                            </p>
                        </li>
                        <li class="offer-list__item">
                            <p class="offer-list__text">
                                <span>+1217,5%</span>
                                рекордные показатели по прибыли
                            </p>
                        </li>
                        <li class="offer-list__item">
                            <p class="offer-list__text">
                                <span>35</span>
                                и более способов ввода и вывода средств
                            </p>
                        </li>
                        <li class="offer-list__item">
                            <p class="offer-list__text">
                                <span>24/7</span>
                                персональный финансовый консультант
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
