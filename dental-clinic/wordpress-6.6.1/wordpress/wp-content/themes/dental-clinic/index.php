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


                    <?php 
                        $my_posts = get_posts( array(
                            'numberposts' => 3,
                            'category_name'    => 'most-popular-services',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
                            
                            global $post;
                            
                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>


                                <li class="most-popular__item">
                                    <h3 class="most-popular__subtitle title title--size-small"><?php the_title(); ?></h3>
                                    <p class="most-popular__price"><?php the_field('most-popular-services-price') ?></p>
                                    <button id="modal-button" class="most-popular__button button button--primary"
                                        type="button">Записаться</button>
                                    <img class="most-popular__image" src="<?php the_field('most-popular-services-image') ?>" width="96" height="96" alt="Чистка.">
                                </li>


                        <?php
                            }
                            
                            wp_reset_postdata();
                    ?>


               
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
                <h2 class="promo__title title title--size-small"><?php the_field('promo-title'); ?></h2>
                <?php the_field('promo-text'); ?>
                <button id="modal-button" class="promo__button button button--primary">Записаться</button>
            </div>
            <div class="promo__picture">
                <img class="promo__image" src="<?php the_field('promo-image'); ?>" width="335" height="250"
                alt="Чистка зубов.">
            </div>
        </div>
    </section>

    <section class="page-index__services services">
        <div class="services__container container">
            <h2 class="services__title title title--color">Услуги</h2>
            <ul class="services__list">

            <?php 
                        $my_posts = get_posts( array(
                            'numberposts' => 8,
                            'category_name'    => 'main-services',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
                            
                            global $post;
                            
                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>


                                <li class="services__item">
                                    <h3 class="services__subtitle title title--size-small"><?php the_title(); ?></h3>
                                    <div class="services__text">
                                        <?php the_field('main-services-list') ?>
                                    </div>
                                </li>


                            <?php
                                // формат вывода the_title() ...
                            }
                            
                            wp_reset_postdata();
                            ?>


                <li class="services__item">
                    <img class="services__image" src="<?php echo bloginfo("template_url"); ?>/assets/images/doctor-working.png" width="335" height="300" alt="Доктор работает.">
                </li>
            </ul>
        </div>
    </section>

    <section class="page-index__promotion promotion">
        <div class="promotion__container container">
            <h2 class="visually-hidden">Акция</h2>
            <p class="promotion__description title title--size-small"><?php the_field('promotion-title-1') ?></p>
            <div class="promotion__prices">
                <div class="promotion__price">
                    <?php the_field('promotion-new-price') ?>
                </div>
                <div class="promotion__old-price">
                    <?php the_field('promotion-old-price') ?>
                </div>
            </div>
            <img class="promotion__image" src="<?php the_field('promotion-image') ?>" width="335" height="300" alt="Доктор смотрит.">
            <div class="promotion__description title title--size-small">
                <?php the_field('promotion-title-2') ?>
            </div>

            <div class="promotion__prices">
                <div class="promotion__price">
                    <?php the_field('promotion-price') ?>
                </div>
            </div>

            <div class="promotion__offer">
                <h3 class="promotion__offer-title">
                    <?php the_field('promotion-sale') ?>
                </h3>
                <div class="promotion__offer-description">
                    <?php the_field('promotion-sale-description') ?>
                </div>
            </div>

            <div class="promotion__ads">
                <h3 class="promotion__ads-title">
                    <?php the_field('promotion-promotion-title') ?>
                </h3>
                <div class="promotion__ads-text title title--size-small">
                    <?php the_field('promotion-promotion-description') ?>
                </div>
                <div class="promotion__ads-price">
                    <?php the_field('promotion-promotion-price') ?>
                </div>
                <div class="promotion__ads-date">
                    <?php the_field('promotion-promotion-date') ?>
                </div>
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


            <?php 
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'advantages',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
                            
                            global $post;
                            
                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>


                                <li class="advantages__item">
                                    <div class="advantages__wrapper">
                                        <h3 class="advantages__subtitle title title--size-small"><?php the_title(); ?></h3>
                                        <!-- <p class="advantages__description"> -->
                                            <div class="advantages__description">
                                                <?php the_field('advantages-text') ?>
                                            </div>
                                        <!-- </p> -->
                                    </div>
                                    <img class="advantages__image" src="<?php the_field('advantages-image') ?>" width="335" height="150" alt="">
                                </li>


                            <?php
                            }
                            
                            wp_reset_postdata();
                            ?>

            </ul>
        </div>
    </section>

    <section class="page-index__promo-1 promo">
        <div class="promo__container container">
            
            <div class="promo__wrapper">
                <h2 class="promo__title title title--size-small"><?php the_field('promo1-title'); ?></h2>
                <?php the_field('promo1-description'); ?>
                <button id="modal-button" class="promo__button button button--primary">Записаться</button>
            </div>
            <div class="promo__picture">
                <img class="promo__image" src="<?php the_field('promo1-image'); ?>" width="335" height="250"
                alt="Чистка зубов.">
            </div>
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




            <?php 
                        $my_posts = get_posts( array(
                            'numberposts' => 3,
                            'category_name'    => 'follow',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
                            
                            global $post;
                            
                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>


                                    <li class="follow__item">
                                        <img class="follow__image"
                                            src="<?php the_field('follow-image') ?>" width="335"
                                            height="250" alt=".">
                                        <div class="follow__text">
                                            <?php the_field('follow-description') ?>
                                        </div>
                                    </li>


                            <?php
                            }
                            
                            wp_reset_postdata();
                            ?>

                
            </ul>
        </div>
    </section>

    <section class="page-index__about about">
        <div class="about__container container">
            <picture class="about__picture">
                <img class="about__image" src="<?php the_field('about-image') ?>" width="335" height="250" alt="Доктора.">
            <div class="about__wrapper">
                <h2 class="about__title title"><?php the_field('about-title') ?></h2>
                <div class="about__description">
                    <?php the_field('about-description') ?>
                </div>
                <button id="modal-button" class="about__button button button--primary" type="button">Записаться</button>
            </div>
        </div>
    </section>

    <section class="page-index__doctor doctor">
        <div class="doctor__container container">
            <h2 class="doctor__title title"><?php the_field('doctor-title') ?></h2>
            <div class="doctor__name">
                <?php the_field('doctor-name') ?>
            </div>
            <img class="doctor__image" src="<?php the_field('doctor-image') ?>"
                width="335" height="300" alt="Доктор.">
                <div class="doctor__description">
                    <?php the_field('doctor-description') ?>
                </div>
            <div class="doctor__education">
                <?php the_field('doctor-education') ?>
            </div>
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
            <div class="swiper swiper0">
                <div class="swiper-wrapper">


                <?php 
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'certificates',
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
                                    <img class="certificates__image"
                                        src="<?php the_field('certificates-image'); ?>"
                                        width="378" height="265" alt="">
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

    <section class="page-index__team team"> 
        <div class="team__container container">
            <h2 class="team__title title title--color">Наши врачи</h2>
                
            <div class="swiper1 swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                            
                            <?php 
                                $my_posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category_name'    => 'slider5',
                                    'orderby'     => 'date',
                                    'order'       => 'DESC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true, // vernutsya posje peredelat
                                    ) );
                                    
                                    global $post;
                                    
                                    foreach( $my_posts as $post ){
                                        setup_postdata( $post );
                                        ?>
                                        

                                            <div class="swiper-slide">

                                                <ul class="team__slider">
                                                    <li class="team__item">

                                                    
                                                        <img class="team__image" src="<?php the_field('big-slider-image'); ?>" width="335" height="250" alt=".">
                                                        <h3 class="team__subtitle title title--size-small title--color"><?php the_field('big-slider-title'); ?><span><?php the_field('big-slider-subtitle'); ?></span></h3>
                                                        <div class="team__text">
                                                            <?php the_field('big-slider-description'); ?>
                                                        </div>

                                                        <?php
                                                        $field = get_field('big-slider-socials');

                                                        if ($field == 'on') {
                                                            ?>
                                                                <ul class="team__socials socials">
                                                            <li class="socials__social">
                                                                <a class="socials__link socials__link--instagram socials__link--color"
                                                                    target="_blank" rel="noopener noreferrer"
                                                                    href="<?php the_field('big-slider-instagram'); ?>">
                                                                    <span class="visually-hidden">Instagram</span>
                                                                </a>
                                                            </li>
                                                            <li class="socials__social">
                                                                <a class="socials__link socials__link--prodoctorov socials__link--color"
                                                                    target="_blank" rel="noopener noreferrer"
                                                                    href="<?php the_field('big-slider-prodoctorov'); ?>">
                                                                    <span class="visually-hidden">Продокторов</span>
                                                                </a>
                                                            </li>
                                                                </ul>
                                                            <?php
                                                        }
                                                    ?>

                                                    </li>
                                                    
                                                    <li class="team__item">
                                                        <img class="team__image" src="<?php the_field('big-slider-image-2'); ?>" width="335" height="250" alt=".">
                                                        <h3 class="team__subtitle title title--size-small title--color"><?php the_field('big-slider-title-2'); ?><span><?php the_field('big-slider-subtitle-2'); ?></span></h3>
                                                        <div class="team__text">
                                                            <?php the_field('big-slider-description-2'); ?>
                                                        </div>

                                                        <?php
                                                        $field2 = get_field('big-slider-socials-2');

                                                        if ($field2 == 'on') {
                                                            ?>
                                                                <ul class="team__socials socials">
                                                                    <li class="socials__social">
                                                                        <a class="socials__link socials__link--instagram socials__link--color"
                                                                            target="_blank" rel="noopener noreferrer"
                                                                            href="<?php the_field('big-slider-instagram-2'); ?>">
                                                                            <span class="visually-hidden">Instagram</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="socials__social">
                                                                        <a class="socials__link socials__link--prodoctorov socials__link--color"
                                                                            target="_blank" rel="noopener noreferrer"
                                                                            href="<?php the_field('big-slider-prodoctorov-2'); ?>">
                                                                            <span class="visually-hidden">Продокторов</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            <?php
                                                        }
                                                    ?>

                                                    </li>
                                                    
                                                    <li class="team__item">
                                                        <img class="team__image" src="<?php the_field('big-slider-image-3'); ?>" width="335" height="250" alt=".">
                                                        <h3 class="team__subtitle title title--size-small title--color"><?php the_field('big-slider-title-3'); ?><span><?php the_field('big-slider-subtitle-3'); ?></span></h3>
                                                        <div class="team__text">
                                                            <?php the_field('big-slider-description-3'); ?>
                                                        </div>

                                                        <?php
                                                        $field3 = get_field('big-slider-socials-3');

                                                        if ($field3 == 'on') {
                                                            ?>
                                                                <ul class="team__socials socials">
                                                            <li class="socials__social">
                                                                <a class="socials__link socials__link--instagram socials__link--color"
                                                                    target="_blank" rel="noopener noreferrer"
                                                                    href="<?php the_field('big-slider-instagram-3'); ?>">
                                                                    <span class="visually-hidden">Instagram</span>
                                                                </a>
                                                            </li>
                                                            <li class="socials__social">
                                                                <a class="socials__link socials__link--prodoctorov socials__link--color"
                                                                    target="_blank" rel="noopener noreferrer"
                                                                    href="<?php the_field('big-slider-prodoctorov-3'); ?>">
                                                                    <span class="visually-hidden">Продокторов</span>
                                                                </a>
                                                            </li>
                                                                </ul>
                                                            <?php
                                                        }
                                                    ?>

                                                    </li>
                                                </ul>

                                                
                                            </div>

                            <?php
                                        // формат вывода the_title() ...
                                    }
                                    
                                    wp_reset_postdata();
                        ?>



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
                <h2 class="promo__title title title--size-small"><?php the_field('promo-with-price-title') ?></h2>
                <?php the_field('promo-with-price-text') ?>
                <div class="promo__prices">
                    <span class="promo__price"><?php the_field('promo-with-price-new') ?></span>
                    <span class="promo__old-price"><?php the_field('promo-with-price-old') ?></span>
                </div>
                <button id="modal-button" class="promo__button button button--primary">Записаться</button>
            </div>
            <div class="promo__picture">
                <img class="promo__image" src="<?php the_field('promo-with-price-image') ?>" width="335" height="250"
                alt="Чистка зубов.">
            </div>
        </div>
    </section>

     <section class="page-index__before-after before-after">
        <div class="before-after__container container">
            <h2 class="before-after__title title">Наши последние работы</h2>
            <div class="swiper swiper0">
                <div class="swiper-wrapper">
                    
                    <?php 
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'slider4',
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