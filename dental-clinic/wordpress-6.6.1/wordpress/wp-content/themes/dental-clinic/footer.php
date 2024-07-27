<footer class="page-index__footer footer">
        <div class="footer__container">
            <div class="footer__logo-wrapper">
                <a class="footer__logo logo" href="index.html">
                    <img class="logo__image" src="<?php echo bloginfo("template_url"); ?>/assets/images/clinic-logo.png" width="59" height="64" alt="Clinic Logo.">
                    <p class="logo__description">Стоматологическая<br>клиника Сангова</p>
                </a>
                <button id="modal-button-whatsapp" class="footer__button button button--primary button--whatsapp"
                    type="button">Написать в WhatsApp</button>
                <button id="modal-button" class="footer__button button button--primary"
                    type="button">Записаться</button>
            </div>
            <address class="footer__address address">
                <ul class="address__list address__list--direction address__list--color">
                    <li class="address__item address__item--color address__item--map">
                        <p><?php the_field('address-address', 2); ?></p>
                    </li>
                    <li class="address__item address__item--color address__item--clock">
                        <p><?php the_field('address-clock', 2); ?></p>
                    </li>
                    <li class="address__item address__item--color address__item--tel">
                        <a href="tel:<?php the_field('address-phone1-hide', 2); ?>"><?php the_field('address-phone1-show', 2); ?></a>
                    </li>
                    <li class="address__item address__item--color address__item--tel">
                        <a href="tel:+<?php the_field('address-phone2-hide', 2); ?>"><?php the_field('address-phone2-show', 2); ?></a>
                    </li>
                </ul>

                <a class="address__eye address__eye--color" href="#">
                    <span class="address__eye-text">Версия для слабовидящих</span>
                </a>

                <ul class="address__socials socials">
                    <li class="socials__social">
                        <a class="socials__link socials__link--color socials__link--whatsapp"
                            href="https://wa.me/<?php the_field('whatsapp', 2); ?>">
                            <span class="visually-hidden">What's App</span>
                        </a>
                    </li>
                    <li class="socials__social">
                        <a class="socials__link socials__link--color socials__link--instagram"
                            href="<?php the_field('instagram', 2); ?>">
                            <span class="visually-hidden">Instagram</span>
                        </a>
                    </li>
                    <li class="socials__social">
                        <button id="modal-button" class="socials__link socials__link--color socials__link--mail button"
                            type="button">
                            <span class="visually-hidden">Email</span>
                        </button>
                    </li>
                </ul>
            </address>
            <div class="footer__bottom">
                <div class="footer__menu-wrapper menu-wrapper">
                    <ul class="menu-wrapper__list menu-wrapper__list--column menu">
                        <li class="menu__item">
                            <a href="services.html">Услуги</a>
                        </li>
                        <li class="menu__item">
                            <a href="prices.html">Цены</a>
                        </li>
                        <li class="menu__item">
                            <a href="our-works.html">Наши работы</a>
                        </li>
                        <li class="menu__item">
                            <a href="our-doctors.html">Врачи</a>
                        </li>
                        <li class="menu__item">
                            <a href="about.html">О нас</a>
                        </li>
                        <li class="menu__item">
                            <a href="contacts.html">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__cards">
            <img class="footer__image" src="<?php echo bloginfo("template_url"); ?>/assets/images/cards.png" width="275" height="169" alt="Способы оплаты.">
        </div>
    </footer>

    <div id="modal" class="request request--modal">
        <div class="request__wrapper container">
            <h2 class="request__title title">Свяжитесь с нами</h2>
            <form class="request__form" method="post" action="">
                <label class="request__control">
                    <input class="request__input" type="text" name="name" placeholder="Имя">
                </label>
                <label class="request__control">
                    <input class="request__input" type="number" name="tel" placeholder="+7 999 999 99 99">
                </label>
                <button id="modal-submit-button" class="request__button button button--primary"
                    type="submit">Отправить</button>
            </form>
        </div>
    </div>

    <div id="modal-whatsapp" class="request request--whatsapp">
        <div class="request__wrapper container">
            <h2 class="request__title title">Свяжитесь с нами</h2>
            <form class="request__form" method="post" action="#">
                <label class="request__control">
                    <input class="request__input" type="text" name="name" placeholder="Имя">
                </label>
                <label class="request__control">
                    <input class="request__input" type="number" name="tel" placeholder="+7 999 999 99 99">
                </label>
                <button id="modal-whatsapp-submit-button"
                    class="request__button request__button--whatsapp button button--primary" type="submit">Получить
                    предложение в вотсап</button>
            </form>
        </div>
    </div>
    <?php
    wp_footer();
    ?>
</body>

</html>