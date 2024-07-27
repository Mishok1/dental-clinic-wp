<?php
get_header();
?>

<main class="page-index__main">
    <h1 class="visually-hidden">Главная</h1>
    <section class="page-index__hero hero">
        <div class="hero__container container">
            <h2 class="hero__title title"><?php the_field('hero-title'); ?></h2>
            <p class="hero__description"><?php the_field('hero-text'); ?></p>
            <picture class="hero__picture">
                <source media="(min-width: 1440px)" type="image/png"
                    srcset="<?php the_field('hero-image'); ?>" width="1194"
                    height="500">
                <img class="hero__image" src="<?php the_field('hero-image-mobile'); ?>"
                    width="335" height="250" alt="Team.">
            </picture>
            <div class="hero__buttons-wrapper">
                <button id="modal-button" class="hero__button button button--primary" type="button">Записаться</button>
                <button id="modal-button-whatsapp" class="hero__button button button--primary button--whatsapp"
                    type="button">Написать в WhatsApp</a>
            </div>
        </div>
    </section>

    <section class="page-index__rating rating">
        <div class="rating__container">
            <h2 class="visually-hidden">Рейтинг</h2>
            <div class="swiper swiper2">
                <div class="swiper-wrapper">

                
            <?php 
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'slider1',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>
                    <div class="swiper-slide">
                        <div class="rating__item">
                            <h3 class="visually-hidden"><?php the_title(); ?></h3>
                            <img class="rating__image"
                            src="<?php the_field('slider1-image'); ?>" width="180"
                            height="60" alt="Google.">
                            <p class="rating__text">Рейтинг</p>
                            <p class="rating__score">5.0/5</p>
                            <div class="rating__stars">
                                
                                <?php
                                $field = get_field('slider1-stars-count');
                                
                                switch ($field) {
                                    case '1 star':
                                        ?>
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                            
                                        <?php break;
                                    case '2 stars':
                                        ?>
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                        <?php break;
                                    case '3 stars':
                                        ?>
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                        <?php break;
                                    case '4 stars':
                                        ?>
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star-empty.png" width="20" height="20" alt="Звезда.">
                                        <?php break;
                                    case '5 stars':
                                        ?>
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                            <img src="<?php echo bloginfo("template_url"); ?>/assets/images/star.png" width="20" height="20" alt="Звезда.">
                                        <?php break;
                                }
                                ?>

                            </div>
                            <p class="rating__text">193 отзывов</p>
                        </div>
                    </div>
                    <?php
                }
                
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="page-index__most-popular most-popular">
        <div class="most-popular__container container">
            <h2 class="most-popular__title title">Три самые популярные услуги</h2>
            <ul class="most-popular__list">
                <li class="most-popular__item">
                    <h3 class="most-popular__subtitle title title--size-small">Чистка зубов</h3>
                    <p class="most-popular__price">3500₽</p>
                    <button id="modal-button" class="most-popular__button button button--primary"
                        type="button">Записаться</button>
                    <img class="most-popular__image"
                        src="<?php echo bloginfo("template_url"); ?>/assets/images/cleaning.svg" width="96" height="96"
                        alt="Чистка.">
                </li>
                <li class="most-popular__item">
                    <h3 class="most-popular__subtitle title title--size-small">Имплант</h3>
                    <p class="most-popular__price">от 20000₽</p>
                    <button id="modal-button" class="most-popular__button button button--primary"
                        type="button">Записаться</button>
                    <img class="most-popular__image"
                        src="<?php echo bloginfo("template_url"); ?>/assets/images/implanting.svg" width="96"
                        height="96" alt="Имплант.">
                </li>
                <li class="most-popular__item">
                    <h3 class="most-popular__subtitle title title--size-small">Удаление</h3>
                    <p class="most-popular__price">от 1500₽</p>
                    <button id="modal-button" class="most-popular__button button button--primary"
                        type="button">Записаться</button>
                    <img class="most-popular__image"
                        src="<?php echo bloginfo("template_url"); ?>/assets/images/deleting.svg" width="96" height="96"
                        alt="Удаление.">
                </li>
            </ul>
        </div>
    </section>



    <section class="page-index__before-after before-after">
        <div class="before-after__container container">
            <h2 class="before-after__title title">Наши работы до/после</h2>
            <div class="swiper swiper0">
                <div class="swiper-wrapper">
                    
                    <?php 
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'slider3',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
                            
                            global $post;
                            
                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>


                                    <div class="swiper-slide">
                                        <img class="before-after__image"
                                            src="<?php the_field('slider-image') ?>" width="335"
                                            height="300" alt="">
                                        <h3 class="before-after__subtitle title title--size-small"><?php the_title(); ?></h3>
                                        <p class="before-after__text"><?php the_field('slider-text'); ?></p>
                                    </div>


                            <?php
                                // формат вывода the_title() ...
                            }
                            
                            wp_reset_postdata();
                            ?>

                </div>


                <div class="swiper-container">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-index__promo-0 promo">
        <div class="promo__container container">
            <div class="promo__wrapper">
                <h2 class="promo__title title title--size-small"><?php the_field('promo0-title'); ?></h2>
                <?php the_field('promo0-text'); ?>
                <button id="modal-button" class="promo__button button button--primary">Записаться</button>
            </div>
            <picture class="promo__picture">
                <source media="(min-width: 1440px)" type="image/png"
                    srcset="<?php the_field('promo0-image-desktop'); ?>" width="582" height="358">
                <img class="promo__image" src="<?php the_field('promo0-image-mobile'); ?>" width="335" height="250"
                    alt="Чистка зубов.">
            </picture>
        </div>
    </section>

    <section class="page-index__services services">
        <div class="services__container container">
            <h2 class="services__title title title--color">Услуги</h2>
            <ul class="services__list">
                <li class="services__item">
                    <h3 class="services__subtitle title title--size-small">Ортодонтия</h3>
                    <p class="services__text">
                        <span>Первичная консультация</span>
                        <span>Диагностическая консультация</span>
                        <span>Брекет-система Damon Q</span>
                        <span>Активация брекет-системы</span>
                        <span>Брекет-система H4</span>
                        <span>Ортодонтические пластинки</span>
                        <span>Элайнеры</span>
                    </p>
                </li>
                <li class="services__item">
                    <h3 class="services__subtitle title title--size-small">Детская стоматология</h3>
                    <p class="services__text">
                        <span>Консультации и диагностика полости рта</span>
                        <span>Удаление зуба</span>
                        <span>Лечение кариеса</span>
                        <span>Лечение пульпита</span>
                        <span>Профессиональная гигиена полости рта</span>
                    </p>
                </li>
                <li class="services__item">
                    <h3 class="services__subtitle title title--size-small">Терапевтическая стоматология</h3>
                    <p class="services__text">
                        <span>Профессиональная чистка зубов 4-х этапная</span>
                        <span>Лечение кариеса</span>
                        <span>Лечение пульпита</span>
                        <span>Лечение периодонтита</span>
                        <span>Лечение под микроскопом</span>
                        <span>Удаление инструментов из корневых каналов</span>
                    </p>
                </li>
                <li class="services__item">
                    <h3 class="services__subtitle title title--size-small">Ортопедическая стоматология</h3>
                    <p class="services__text">
                        <span>Протезы с фиксацией на имплантах</span>
                        <span>Керамическая коронка Emax</span>
                        <span>Керамическая коронка из Диоксид циркония</span>
                        <span>Съемный протез</span>
                        <span>Бюгельный протез</span>
                        <span>Снятие и фиксация коронки</span>
                        <span>Виниры</span>
                        <span>Вкладки</span>
                        <span>Мосты</span>
                    </p>
                </li>
                <li class="services__item">
                    <h3 class="services__subtitle title title--size-small">Экстренная стоматологическая помощь</h3>
                    <p class="services__text">
                        <span>Помощь при острой зубной боли</span>
                        <span>Помощь при зубном абсцессе</span>
                        <span>Реставрация сломанного или выбитого зуба</span>
                        <span>Удаление зуба мудрости</span>
                        <span>Удаление зубов любой сложности</span>
                    </p>
                </li>
                <li class="services__item">
                    <h3 class="services__subtitle title title--size-small">Имплантация</h3>
                    <p class="services__text">
                        <span>Установка импланта</span>
                        <span>Синус-лифтинг открытый/закрытый</span>
                        <span>Пластика десны</span>
                        <span>Пластика десны</span>
                        <span>Удаление импланта</span>
                        <span>Имплантация ALL ON 4</span>
                        <span>Имплантация ALL ON 6</span>
                        <span>Одномоментная имплантация</span>
                    </p>
                </li>
                <li class="services__item">
                    <h3 class="services__subtitle title title--size-small">Хирургическая стоматология</h3>
                    <p class="services__text">
                        <span>Удаление зуба</span>
                        <span>Удаление зуба мудрости</span>
                        <span>Пластика уздечки</span>
                    </p>
                </li>
                <li class="services__item">
                    <h3 class="services__subtitle title title--size-small">Rg-диагностика</h3>
                    <p class="services__text">
                        <span>Прицельный снимок зуба</span>
                        <span>Фотопротокол зубов</span>
                        <span>3D сканирование зубов</span>
                        <span>Диагностика под микроскопом </span>
                        <span>Составление плана лечения с КТ</span>
                    </p>
                </li>
                <li class="services__item">
                    <img class="services__image"
                        src="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-working.png" width="335"
                        height="300" alt="Доктор работает.">
                </li>
            </ul>
        </div>
    </section>

    <section class="page-index__promotion promotion">
        <div class="promotion__container container">
            <h2 class="visually-hidden">Акция</h2>
            <p class="promotion__description title title--size-small">Восстановление винирами и коронками<br> за
                один день
            </p>
            <div class="promotion__prices">
                <span class="promotion__price">26 500 ₽</span>
                <span class="promotion__old-price">35 000 ₽</span>
            </div>
            <picture>
                <source media="(min-width: 1440px)" type="image/jpg"
                    srcset="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-watching-desktop.jpg"
                    width="582" height="810">
                <img class="promotion__image"
                    src="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-watching.png" width="335"
                    height="300" alt="Доктор смотрит.">
            </picture>
            <p class="promotion__description title title--size-small">Имплантация за</p>
            <div class="promotion__prices">
                <span class="promotion__price">28 000 ₽</span>
            </div>

            <div class="promotion__offer">
                <h3 class="promotion__offer-title">10% скидка</h3>
                <p class="promotion__offer-description">На первичное лечение зубов</p>
            </div>

            <div class="promotion__ads">
                <h3 class="promotion__ads-title">Акция!!!</h3>
                <p class="promotion__ads-text title title--size-small">Профессиональная чистка зубов</p>
                <p class="promotion__ads-price">3 500 ₽</p>
                <p class="promotion__ads-date">До 07.07.2024</p>
            </div>

            <p class="promotion__consultation">Консультация специалистов <span class="promotion__hyphen">-</span>
                <span>БЕСПЛАТНО</span>
            </p>
            <div class="promotion__wrapper">
                <button id="modal-button" class="promotion__button button button--primary">Записаться</button>
                <ul class="promotion__socials socials">
                    <li class="socials__social">
                        <a class="socials__link socials__link--whatsapp"
                            href="https://wa.me/<?php the_field('whatsapp'); ?>">
                            <span class="visually-hidden">What's App</span>
                        </a>
                    </li>
                    <li class="socials__social">
                        <a class="socials__link socials__link--instagram" href="<?php the_field('instagram'); ?>">
                            <span class="visually-hidden">Instagram</span>
                        </a>
                    </li>
                    <li class="socials__social">
                        <button id="modal-button" class="socials__link socials__link--mail button" type="button">
                            <span class="visually-hidden">Email</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="page-index__advantages advantages">
        <div class="advantages__container container">
            <h2 class="advantages__title title">Наши преимущества</h2>
            <ul class="advantages__list">
                <li class="advantages__item">
                    <div class="advantages__wrapper">
                        <h3 class="advantages__subtitle title title--size-small">Современное оборудование</h3>
                        <p class="advantages__description">В нашей клинике используется новейшее стоматологическое
                            оборудование,
                            имеющее все необходимые сертификаты и лицензии.</p>
                    </div>
                    <picture>
                        <source media="(min-width: 1440px)" type="image/jpg"
                            srcset="<?php echo bloginfo("template_url"); ?>/assets/images/new-items.png" width="428"
                            height="150">
                        <img class="advantages__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/new-items.png" width="335"
                            height="150" alt="">
                    </picture>
                </li>
                <li class="advantages__item">
                    <div class="advantages__wrapper">
                        <h3 class="advantages__subtitle title title--size-small">Комфорт и сервис</h3>
                        <p class="advantages__description">Наши администраторы позаботятся о вашем комфорте до и
                            после приема, а
                            кабинеты оборудованы удобными креслами, чтобы вы чувствовали себя на приеме спокойно и
                            расслаблено.</p>
                    </div>
                    <picture>
                        <source media="(min-width: 1440px)" type="image/jpg"
                            srcset="<?php echo bloginfo("template_url"); ?>/assets/images/new-items.png" width="428"
                            height="150">
                        <img class="advantages__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/new-items.png" width="335"
                            height="150" alt="">
                    </picture>
                </li>
                <li class="advantages__item">
                    <div class="advantages__wrapper">
                        <h3 class="advantages__subtitle title title--size-small">Индивидуальный подход</h3>
                        <p class="advantages__description">Мы всегда готовы принять во внимание все ваши пожелания и
                            найти
                            персональное решение проблемы в каждом отдельном случае.</p>
                    </div>
                    <picture>
                        <source media="(min-width: 1440px)" type="image/jpg"
                            srcset="<?php echo bloginfo("template_url"); ?>/assets/images/new-items.png" width="428"
                            height="150">
                        <img class="advantages__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/new-items.png" width="335"
                            height="150" alt="">
                    </picture>
                </li>
                <li class="advantages__item">
                    <div class="advantages__wrapper">
                        <h3 class="advantages__subtitle title title--size-small">Квалифицированные стоматологи</h3>
                        <p class="advantages__description">Наши специалисты имеют высшее профессиональное
                            образование, и высокую
                            квалификацию.</p>
                    </div>
                    <picture>
                        <source media="(min-width: 1440px)" type="image/jpg"
                            srcset="<?php echo bloginfo("template_url"); ?>/assets/images/new-items.png" width="428"
                            height="150">
                        <img class="advantages__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/new-items.png" width="335"
                            height="150" alt="">
                    </picture>
                </li>
            </ul>
        </div>
    </section>

    <section class="page-index__promo-1 promo">
        <div class="promo__container container">
            <div class="promo__wrapper">
                <h2 class="promo__title title title--size-small">Мы работаем с микроскопом!</h2>
                <p class="promo__text">Использование стоматологического микроскопа позволяет нам проводить
                    лечение с высокой точностью. Благодаря увеличению мы можем лучше видеть
                    мельчайшие детали, что обеспечивает более эффективное и безопасное
                    лечение для наших пациентов.</p>
                <button id="modal-button" class="promo__button button button--primary" type="button">Записаться</button>
            </div>
            <picture class="promo__picture">
                <source media="(min-width: 1440px)" type="image/png"
                    srcset="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-with-micro-desktop.png"
                    width="582" height="358">
                <img class="promo__image"
                    src="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-with-micro.jpg" width="335"
                    height="250" alt="Чистка зубов.">
            </picture>
        </div>
    </section>

    <section class="page-index__follow follow">
        <div class="follow__container container">
            <h2 class="follow__title title">Следите за нами в Instagram!</h2>
            <div class="follow__wrapper">
                <a class="follow__link" href="<?php the_field('instagram'); ?>" target="_blank"
                    rel="noopener noreferrer">
                    <img class="follow__logo"
                        src="<?php echo bloginfo("template_url"); ?>/assets/images/clinic-logo.png" width="67"
                        height="64" alt="Clinic Logo.">
                    <p class="follow__logo-text">sangov_clinic</p>
                </a>
                <a class="follow__button button button--primary" href="<?php the_field('instagram'); ?>" target="_blank"
                    rel="noopener noreferrer">Подписаться на
                    нас</a>
            </div>
            <ul class="follow__list">
                <li class="follow__item">
                    <a class="follow__item-link" href="#">
                        <picture>
                            <source media="(min-width: 1440px)" type="image/jpg"
                                srcset="<?php echo bloginfo("template_url"); ?>/assets/images/insta-block-desktop.jpg"
                                width="378" height="250">
                            <img class="follow__image"
                                src="<?php echo bloginfo("template_url"); ?>/assets/images/insta-block.jpg" width="335"
                                height="250" alt=".">
                        </picture>
                        <p class="follow__text">Почему зуб может потемнеть</p>
                    </a>
                </li>
                <li class="follow__item">
                    <a class="follow__item-link" href="#">
                        <picture>
                            <source media="(min-width: 1440px)" type="image/jpg"
                                srcset="<?php echo bloginfo("template_url"); ?>/assets/images/insta-block-desktop.jpg"
                                width="378" height="250">
                            <img class="follow__image"
                                src="<?php echo bloginfo("template_url"); ?>/assets/images/insta-block.jpg" width="335"
                                height="250" alt=".">
                        </picture>
                        <p class="follow__text">Почему зуб может потемнеть</p>
                    </a>
                </li>
                <li class="follow__item">
                    <a class="follow__item-link" href="#">
                        <picture>
                            <source media="(min-width: 1440px)" type="image/jpg"
                                srcset="<?php echo bloginfo("template_url"); ?>/assets/images/insta-block-desktop.jpg"
                                width="378" height="250">
                            <img class="follow__image"
                                src="<?php echo bloginfo("template_url"); ?>/assets/images/insta-block.jpg" width="335"
                                height="250" alt=".">
                        </picture>
                        <p class="follow__text">Почему зуб может потемнеть</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="page-index__about about">
        <div class="about__container container">
            <picture class="about__picture">
                <source media="(min-width: 1440px)" type="image/png"
                    srcset="<?php echo bloginfo("template_url"); ?>/assets/images/small-doctor-showing-desktop.png"
                    width="582" height="328">
                <img class="about__image"
                    src="<?php echo bloginfo("template_url"); ?>/assets/images/small-doctor-showing.png" width="335"
                    height="250" alt="Доктора.">
            </picture>
            <div class="about__wrapper">
                <h2 class="about__title title">О клинике</h2>
                <p class="about__description">Наша клиника открылась в 2022 году.
                    Мы предлагаем полный спектр стоматологических услуг: лечение зубов, имплантация, протезирование,
                    эстетическая
                    коррекция улыбки, хирургическая помощь и многое другое. Клиника оснащена новейшим оборудованием,
                    а в ней
                    работают высококвалифицированные врачи.
                    Также, оказывая стоматологическую помощь, мы не забываем и о маленьких пациентах. Благодаря
                    индивидуальному
                    подходу, наши пациенты с первого визита чувствуют себя уверенно и комфортно.
                </p>
                <button id="modal-button" class="about__button button button--primary" type="button">Записаться</button>
            </div>
        </div>
    </section>

    <section class="page-index__doctor doctor">
        <div class="doctor__container container">
            <h2 class="doctor__title title">Главный врач</h2>
            <p class="doctor__name">Сангов Абдулло Мамашарифович</p>
            <picture class="doctor__picture">
                <source media="(min-width: 1440px)" type="image/png"
                    srcset="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-foto-desktop.png" width="582"
                    height="818">
                <img class="doctor__image" src="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-foto.png"
                    width="335" height="300" alt="Доктор.">
            </picture>
            <p class="doctor__description">Главный врач стоматолог (хирург-имплантолог, ортопед, терапевт) Абдулло
                Мамашарифович – хирург-стоматолог со стажем более 8 лет.Специалист в реконструктивной хирургии
                (костная
                пластика, синус-лифтинг, аугментация). Проводит операции по микрохирургической пластике дёсен.
                Работает только
                с применением оптики, микроскопа. Как стоматолог-имплантолог, Абдулло Мамашарифович установил более
                1000
                имплантатов. Он обладает значительным опытом фиксации имплантатов на месте передних зубов и
                восстанавливает
                утраченные зубы по технологии одномоментной имплантации.
                Проводит зубосохраняющие операции
                и удаление зубов любой сложности, а также аутотрансплантацию зубов. Специализируется на съемном и
                несъёмном
                протезировании, протезировании с применением имплантов Dentium и Straumann. Проводит приём с
                составлением
                комплексных планов лечения. Занимается эстетической реабилитацией и протезированием керамическими
                реставрациями. В своей работе использует современные методики диагностики. Работает с применением
                новейших
                усовершенствованных технологий
                в стоматологии, таких как стоматологический микроскоп для улучшения визуализации рабочего поля.
                Также
                занимается эстетической и функциональной стоматологией и ведет фотопротокол зубов. Абдулло
                Мамашарифович-специализируется на лечении кариеса,художественной реставрации жевательной и
                центральной группы
                зубов, эндодонтическом лечении. Работа только под увеличением. </p>
            <p class="doctor__education">
                2016 г. – закончил Новосибирский
                Государственный Медицинский университет.
                2018 г. -ординатура по хирургической стоматологии.
                2019г - специализация по ортопедической стоматологии
            </p>
            <div class="doctor__wrapper">
                <button id="modal-button" class="doctor__button button button--primary"
                    type="button">Записаться</button>
                <ul class="doctor__socials socials">
                    <li class="socials__social">
                        <a class="socials__link socials__link--whatsapp"
                            href="https://wa.me/<?php the_field('whatsapp'); ?>">
                            <span class="visually-hidden">What's App</span>
                        </a>
                    </li>
                    <li class="socials__social">
                        <a class="socials__link socials__link--instagram" href="<?php the_field('instagram'); ?>">
                            <span class="visually-hidden">Instagram</span>
                        </a>
                    </li>
                    <li class="socials__social">
                        <button id="modal-button" class="socials__link socials__link--mail button" type="button">
                            <span class="visually-hidden">Email</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="page-index__certificates certificates">
        <div class="certificates__container container">
            <h2 class="certificates__title title">Сертификаты</h2>
            <p class="certificates__descritpion">Команда клиники Сангова выбирает самые эффективные и надежные
                методы для
                достижения долговечных результатов.
                Мы используем передовые международные программы для дополнительного обучения наших врачей и оснащаем
                клинику
                самым современным оборудованием.</p>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="certificates__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/certificate-desktop.png"
                            width="378" height="265" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="certificates__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/certificate-desktop.png"
                            width="378" height="265" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="certificates__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/certificate-desktop.png"
                            width="378" height="265" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="certificates__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/certificate-desktop.png"
                            width="378" height="265" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="certificates__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/certificate-desktop.png"
                            width="378" height="265" alt="">
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-index__team team">
        <div class="team__container container">
            <h2 class="team__title title title--color">Наши врачи</h2>

            <div class="swiper1 swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="team__swiper-list">
                            <div class="team__item">
                                <img class="team__image"
                                    src="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-sangov.png"
                                    width="335" height="250" alt="Доктор Сангов.">
                                <h3 class="team__subtitle"><span
                                        class="title title--size-small title--color">Сангов</span>Абдулло
                                    Мамашарифович</h3>
                                <p class="team__text">Главный врач стоматолог, хирург-имплантолог, ортопед,
                                    терапевт<br><br>Ксения
                                    Владимировна-специализируется на лечении кариеса,художественной реставрации
                                    жевательной и
                                    центральной
                                    группы зубов, эндодонтическом лечении. Стоматологический прием проводит только
                                    под микроскопом,
                                    в период лечения ведется фотопротокол.</p>
                                <ul class="team__socials socials">
                                    <li class="socials__social">
                                        <a class="socials__link socials__link--instagram socials__link--color"
                                            target="_blank" rel="noopener noreferrer"
                                            href="https://www.instagram.com/dr.sangov/">
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                    <li class="socials__social">
                                        <a class="socials__link socials__link--prodoctorov socials__link--color"
                                            target="_blank" rel="noopener noreferrer"
                                            href="<?php the_field('prodoctorov', 2); ?>">
                                            <span class="visually-hidden">Продокторов</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team__item">
                                <img class="team__image"
                                    src="<?php echo bloginfo("template_url"); ?>/assets/images/pasternak.png"
                                    width="335" height="250" alt="Доктор Сангов.">
                                <h3 class="team__subtitle"><span
                                        class="title title--size-small title--color">Пастернак</span>Ксения
                                    Владимировна </h3>
                                <p class="team__text">Врач стоматолог-терапевт
                                    микроскопист, ортопед<br><br>Ксения Владимировна-специализируется на лечении
                                    кариеса,художественной
                                    реставрации жевательной и центральной группы зубов, эндодонтическом лечении.
                                    Стоматологический прием
                                    проводит только под микроскопом,
                                    в период лечения ведется фотопротокол.</p>
                            </div>
                            <div class="team__item">
                                <img class="team__image"
                                    src="<?php echo bloginfo("template_url"); ?>/assets/images/masrurov.png" width="335"
                                    height="250" alt="Доктор Сангов.">
                                <h3 class="team__subtitle"><span
                                        class="title title--size-small title--color">Масруров</span>Шахриер
                                    Гафурович</h3>
                                <p class="team__text">Врач стоматолог общей практики<br><br>Специализируется на
                                    составлении
                                    индивидуального комплексного плана лечения, лечении кариеса и его осложнений,
                                    профессиональная
                                    чистка
                                    зубов. Делает реставрации жевательной группы зубов. Удаление зубов.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team__swiper-list">
                            <div class="team__item">
                                <img class="team__image"
                                    src="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-sangov.png"
                                    width="335" height="250" alt="Доктор Сангов.">
                                <h3 class="team__subtitle"><span
                                        class="title title--size-small title--color">Сангов</span>Абдулло
                                    Мамашарифович</h3>
                                <p class="team__text">Главный врач стоматолог, хирург-имплантолог, ортопед,
                                    терапевт<br><br>Ксения
                                    Владимировна-специализируется на лечении кариеса,художественной реставрации
                                    жевательной и
                                    центральной
                                    группы зубов, эндодонтическом лечении. Стоматологический прием проводит только
                                    под микроскопом,
                                    в период лечения ведется фотопротокол.</p>
                                <ul class="team__socials socials">
                                    <li class="socials__social">
                                        <a class="socials__link socials__link--instagram socials__link--color"
                                            target="_blank" rel="noopener noreferrer"
                                            href="https://www.instagram.com/dr.sangov/">
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                    <li class="socials__social">
                                        <a class="socials__link socials__link--prodoctorov socials__link--color"
                                            target="_blank" rel="noopener noreferrer"
                                            href="<?php the_field('prodoctorov', 2); ?>">
                                            <span class="visually-hidden">Продокторов</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team__item">
                                <img class="team__image"
                                    src="<?php echo bloginfo("template_url"); ?>/assets/images/pasternak.png"
                                    width="335" height="250" alt="Доктор Сангов.">
                                <h3 class="team__subtitle"><span
                                        class="title title--size-small title--color">Пастернак</span>Ксения
                                    Владимировна </h3>
                                <p class="team__text">Врач стоматолог-терапевт
                                    микроскопист, ортопед<br><br>Ксения Владимировна-специализируется на лечении
                                    кариеса,художественной
                                    реставрации жевательной и центральной группы зубов, эндодонтическом лечении.
                                    Стоматологический прием
                                    проводит только под микроскопом,
                                    в период лечения ведется фотопротокол.</p>
                            </div>
                            <div class="team__item">
                                <img class="team__image"
                                    src="<?php echo bloginfo("template_url"); ?>/assets/images/masrurov.png" width="335"
                                    height="250" alt="Доктор Сангов.">
                                <h3 class="team__subtitle"><span
                                        class="title title--size-small title--color">Масруров</span>Шахриер
                                    Гафурович</h3>
                                <p class="team__text">Врач стоматолог общей практики<br><br>Специализируется на
                                    составлении
                                    индивидуального комплексного плана лечения, лечении кариеса и его осложнений,
                                    профессиональная
                                    чистка
                                    зубов. Делает реставрации жевательной группы зубов. Удаление зубов.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team__swiper-list">
                            <div class="team__item">
                                <img class="team__image"
                                    src="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-sangov.png"
                                    width="335" height="250" alt="Доктор Сангов.">
                                <h3 class="team__subtitle"><span
                                        class="title title--size-small title--color">Сангов</span>Абдулло
                                    Мамашарифович</h3>
                                <p class="team__text">Главный врач стоматолог, хирург-имплантолог, ортопед,
                                    терапевт<br><br>Ксения
                                    Владимировна-специализируется на лечении кариеса,художественной реставрации
                                    жевательной и
                                    центральной
                                    группы зубов, эндодонтическом лечении. Стоматологический прием проводит только
                                    под микроскопом,
                                    в период лечения ведется фотопротокол.</p>
                                <ul class="team__socials socials">
                                    <li class="socials__social">
                                        <a class="socials__link socials__link--instagram socials__link--color"
                                            target="_blank" rel="noopener noreferrer"
                                            href="https://www.instagram.com/dr.sangov/">
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                    <li class="socials__social">
                                        <a class="socials__link socials__link--prodoctorov socials__link--color"
                                            target="_blank" rel="noopener noreferrer"
                                            href="<?php the_field('prodoctorov', 2); ?>">
                                            <span class="visually-hidden">Продокторов</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team__item">
                                <img class="team__image"
                                    src="<?php echo bloginfo("template_url"); ?>/assets/images/pasternak.png"
                                    width="335" height="250" alt="Доктор Сангов.">
                                <h3 class="team__subtitle"><span
                                        class="title title--size-small title--color">Пастернак</span>Ксения
                                    Владимировна </h3>
                                <p class="team__text">Врач стоматолог-терапевт
                                    микроскопист, ортопед<br><br>Ксения Владимировна-специализируется на лечении
                                    кариеса,художественной
                                    реставрации жевательной и центральной группы зубов, эндодонтическом лечении.
                                    Стоматологический прием
                                    проводит только под микроскопом,
                                    в период лечения ведется фотопротокол.</p>
                            </div>
                            <div class="team__item">
                                <img class="team__image"
                                    src="<?php echo bloginfo("template_url"); ?>/assets/images/masrurov.png" width="335"
                                    height="250" alt="Доктор Сангов.">
                                <h3 class="team__subtitle"><span
                                        class="title title--size-small title--color">Масруров</span>Шахриер
                                    Гафурович</h3>
                                <p class="team__text">Врач стоматолог общей практики<br><br>Специализируется на
                                    составлении
                                    индивидуального комплексного плана лечения, лечении кариеса и его осложнений,
                                    профессиональная
                                    чистка
                                    зубов. Делает реставрации жевательной группы зубов. Удаление зубов.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-button-prev1"></div>
                    <div class="swiper-pagination1"></div>
                    <div class="swiper-button-next1"></div>
                </div>
            </div>

        </div>
    </section>

    <section class="page-index__promo-2 promo">
        <div class="promo__container container">
            <div class="promo__wrapper">
                <h2 class="promo__title title title--size-small">Красивая Улыбка с Винирами и Коронками</h2>
                <p class="promo__text">Добейтесь совершенной улыбки с нашими высококачественными винирами и
                    коронками. Мы
                    предлагаем индивидуальные решения для восстановления и улучшения зубов, обеспечивая естественный
                    внешний вид
                    и долговечность.</p>
                <div class="promo__prices">
                    <span class="promo__price">26 500 ₽</span>
                    <span class="promo__old-price">35 000 ₽</span>
                </div>
                <button id="modal-button" class="promo__button button button--primary" type="button">Записаться</button>
            </div>
            <picture class="promo__picture">
                <source media="(min-width: 1440px)" type="image/png"
                    srcset="<?php echo bloginfo("template_url"); ?>/assets/images/girl-cleaning.png" width="582"
                    height="358">
                <img class="promo__image"
                    src="<?php echo bloginfo("template_url"); ?>/assets/images/girl-cleaning-small.png" width="357"
                    height="250" alt="Чистка зубов.">
            </picture>
        </div>
    </section>

    <section class="page-index__before-after before-after">
        <div class="before-after__container container">
            <h2 class="before-after__title title">Наши последние работы</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="before-after__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/implantation-1.png" width="335"
                            height="300" alt="">
                        <h3 class="before-after__subtitle title title--size-small">Хирургия / имплантация</h3>
                        <p class="before-after__text">Удаление одномоментная имплантация зуба 2.1.временная коронка
                            на следующий день.</p>
                    </div>
                    <div class="swiper-slide">
                        <img class="before-after__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/implantation-1.png" width="335"
                            height="300" alt="">
                        <h3 class="before-after__subtitle title title--size-small">Виниры</h3>
                        <p class="before-after__text">1Керамические виниры 6 единиц</p>
                    </div>
                    <div class="swiper-slide">
                        <img class="before-after__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/implantation-1.png" width="335"
                            height="300" alt="">
                        <h3 class="before-after__subtitle title title--size-small">Виниры</h3>
                        <p class="before-after__text">2Керамические виниры 6 единиц</p>
                    </div>
                    <div class="swiper-slide">
                        <img class="before-after__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/implantation-1.png" width="335"
                            height="300" alt="">
                        <h3 class="before-after__subtitle title title--size-small">Виниры</h3>
                        <p class="before-after__text">3Керамические виниры 6 единиц</p>
                    </div>
                    <div class="swiper-slide">
                        <img class="before-after__image"
                            src="<?php echo bloginfo("template_url"); ?>/assets/images/implantation-1.png" width="335"
                            height="300" alt="">
                        <h3 class="before-after__subtitle title title--size-small">Виниры</h3>
                        <p class="before-after__text">4Керамические виниры 6 единиц</p>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-index__review review">
        <div class="review__container">
            <h2 class="review__title title">Отзывы</h2>
            <div class="swiper swiper3">
                <div class="swiper-wrapper">

                <?php 
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'slider2',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                global $post;

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>

                    <div class="swiper-slide">
                        <div class="review__item">
                            <p class="review__date"><?php the_field('slider2-date') ?></p>
                            <div class="review__header-wrapper">
                                <h3 class="review__name"><?php the_title(); ?></h3>

                                <div class="review__stars">

                                    <?php
                                    $field = get_field('slider2-stars-count');
                                    
                                    switch ($field) {
                                        case '1 star':
                                            ?>
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                                
                                            <?php break;
                                        case '2 stars':
                                            ?>
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                            <?php break;
                                        case '3 stars':
                                            ?>
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                            <?php break;
                                        case '4 stars':
                                            ?>
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth-empty.png" width="20" height="20" alt="Звезда.">
                                            <?php break;
                                        case '5 stars':
                                            ?>
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                                <img src="<?php echo bloginfo("template_url"); ?>/assets/images/tooth.png" width="20" height="20" alt="Звезда.">
                                            <?php break;
                                    }
                                    ?>

                                </div>

                            </div>
                            <?php the_field('slider2-text') ?>

                            <?php
                                $field = get_field('slider2-button');

                                if ($field == 'on') {
                                    ?>
                                        <a href="<?php the_field('slider2-link') ?>" class="review__button button" target="_blank">Читать целиком</a>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                    // формат вывода the_title() ...
                }
                
                wp_reset_postdata();
                ?>
                </div>
            </div>
        </div>
    </section>

<section class="page-index__consultation consultation">
    <div class="consultation__container">
            <div class="consultation__wrapper">
                <h2 class="consultation__title title title--size-small">Записаться на консультацию</h2>
                <p class="consultation__text">Получите профессиональную помощь от наших экспертов, записавшись на
                    консультацию.</p>
                <form class="consultation__form" method="post" action="#">
                    <label class="consultation__control">
                        <input class="consultation__input" type="text" name="name" placeholder="Имя">
                    </label>
                    <label class="consultation__control">
                        <input class="consultation__input" type="number" name="tel" placeholder="+7 999 999 99 99">
                    </label>
                    <button class="consultation__button button button--primary" type="submit">Записаться</button>
                </form>
            </div>
            <picture class="consultation__picture">
                <source media="(min-width: 1440px)" type="image/png"
                    srcset="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-smile-desktop.png" width="582"
                    height="358">
                <img class="consultation__image"
                    src="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-smile.png" width="357"
                    height="250" alt="Чистка зубов.">
            </picture>
        </div>
    </section>

    <section class="page-index__map map">
        <div class="map__container container">
            <h2 class="visually-hidden">Карта</h2>
            <iframe class="map__frame"
                src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa80510c64053d66c050d8774e4cee13323b1f6e645742141a2ca7f4ef9774bcb&amp;source=constructor"
                width="100%" height="300" frameborder="0"></iframe>
        </div>
    </section>

</main>

<?php
get_footer();
?>