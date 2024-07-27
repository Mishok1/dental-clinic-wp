<!DOCTYPE html>
<html class="page-index" lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="preload" href="#" type="font/woff2" as="font">
    <?php
    wp_head();
    ?>
</head>

<body class="page-index__body">
    <header class="page-index__header header">
        <div class="header__container container">
            <address class="header__address address">
                <ul class="address__list">
                    <li class="address__item address__item--map">
                        <p><?php the_field('address-address', 2); ?></p>
                    </li>
                    <li class="address__item address__item--clock">
                        <p><?php the_field('address-clock', 2); ?></p>
                    </li>
                    <li class="address__item address__item--tel">
                        <a
                            href="tel:<?php the_field('address-phone1-hide', 2); ?>"><?php the_field('address-phone1-show', 2); ?></a>
                    </li>
                    <li class="address__item address__item--tel">
                        <a
                            href="tel:<?php the_field('address-phone2-hide', 2); ?>"><?php the_field('address-phone2-show', 2); ?></a>
                    </li>
                </ul>

                <a class="address__eye" href="#">
                    <span class="address__eye-text address__eye-text--hidden">Версия для слабовидящих</span>
                </a>

                <ul class="address__socials socials">
                    <li class="socials__social ">
                        <a class="socials__link socials__link--whatsapp"
                            href="https://wa.me/<?php the_field('whatsapp', 2); ?>">
                            <span class="visually-hidden">What's App</span>
                        </a>
                    </li>
                    <li class="socials__social">
                        <a class="socials__link socials__link--instagram" href="<?php the_field('instagram', 2); ?>">
                            <span class="visually-hidden">Instagram</span>
                        </a>
                    </li>
                    <li class="socials__social">
                        <button id="modal-button" class="socials__link socials__link--mail button" type="button">
                            <span class="visually-hidden">Email</span>
                        </button>
                    </li>
                </ul>
            </address>

            <div class="header__bottom">
                <a class="header__logo logo" href="index.html">
                    <img class="logo__image" src="<?php echo bloginfo("template_url"); ?>/assets/images/clinic-logo.png"
                        width="59" height="64" alt="Clinic Logo.">
                    <p class="logo__description">Стоматологическая<br>клиника Сангова</p>
                </a>

                <div class="header__menu-wrapper menu-wrapper">
                    <ul class="menu-wrapper__list menu">
                        <li class="menu__item">
                            <a class="menu__link" href="services.html">Услуги</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="prices.html">Цены</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="our-works.html">Наши работы</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="our-doctors.html">Врачи</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="about.html">О нас</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="contacts.html">Контакты</a>
                        </li>
                    </ul>
                </div>

                <div class="menu-wrapper__search">
                    <form class="menu-wrapper__form" action="#" method="post">
                        <label>
                            <input class="menu-wrapper__input" type="text" name="search" placeholder="Поиск">
                        </label>
                    </form>
                    <button id="modal-button" class="menu-wrapper__button button button--primary"
                        type="button">Записаться</button>
                </div>

                <button class="header__mobile-button button" type="button">
                    <span class="visually-hidden">Кнопка открытыя меню</span>
                </button>

            </div>


            <div class="header__mobile mobile">
                <ul class="mobile__menu menu">
                    <li class="menu__item">
                        <a class="menu__link" href="services.html">Услуги</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="prices.html">Цены</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="our-works.html">Наши работы</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="our-doctors.html">Врачи</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="about.html">О нас</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="contacts.html">Контакты</a>
                    </li>
                </ul>
                <address class="mobile__address address">
                    <ul class="mobile__address-list address__list">
                        <li class="mobile__address-item address__item--map">
                            <p><?php the_field('address-address', 2); ?></p>
                        </li>
                        <li class="mobile__address-item address__item--clock">
                            <p><?php the_field('address-clock', 2); ?></p>
                        </li>
                        <li class="mobile__address-item address__item--tel">
                            <a href="tel:<?php the_field('address-phone1-hide', 2); ?>"><?php the_field('address-phone1-show', 2); ?></a>
                        </li>
                        <li class="mobile__address-item address__item--tel">
                            <a href="tel:<?php the_field('address-phone2-hide', 2); ?>"><?php the_field('address-phone2-show', 2); ?></a>
                        </li>
                    </ul>

                    <ul class="socials">
                        <li class="socials__social ">
                            <a class="socials__link socials__link--whatsapp"
                                href="https://wa.me/<?php the_field('whatsapp', 2); ?>">
                                <span class="visually-hidden">What's App</span>
                            </a>
                        </li>
                        <li class="socials__social">
                            <a class="socials__link socials__link--instagram"
                                href="<?php the_field('instagram', 2); ?>">
                                <span class="visually-hidden">Instagram</span>
                            </a>
                        </li>
                        <li class="socials__social">
                            <button id="modal-button" class="socials__link socials__link--mail button" type="button">
                                <span class="visually-hidden">Email</span>
                            </button>
                        </li>
                    </ul>
                </address>

                <div class="mobile__search">
                    <button id="modal-button" class="mobile__button button button--primary"
                        type="button">Записаться</button>
                    <form class="mobile__form" action="#" method="post">
                        <label>
                            <input class="mobile__input" type="text" name="search" placeholder="Поиск">
                        </label>
                    </form>
                </div>
            </div>

        </div>


    </header>