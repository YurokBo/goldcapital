<!-- connect -->
<section class="connect" id="connect">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="connect-title">
                    Остались вопросы?
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form class="form  connect-form d-flex justify-content-between">

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="goldcapital.pro">
                    <input type="hidden" name="admin_email" value="GoldCapital116@gmail.com">
                    <input type="hidden" name="form_subject" value="Заявка с нижней формы">
                    <!-- END Hidden Required Fields -->

                    <input type="search" class="wpcf7__input" name="Имя" placeholder="Ваше имя" required
                           autocomplete="off" id="id_field3">
                    <input type="tel" class="wpcf7__input" name="Номер телефона" placeholder="Номер телефона" required
                           autocomplete="off" id="id_field4">

                    <button type="submit" class="wpcf7__btn btn" id="form-btn-2">
                        Заказать звонок
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- contacts -->
<section class="contacts" id="contacts">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="contacts-title">
                    Контакты
                </h4>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-12">
                <p class="contacts-adress">
                    <span>Адрес:</span> <?php the_field('footer-address'); ?>
                </p>
            </div>
            <div class="col-xl-4 col-lg-8">
                <div class="contacts-phone d-flex">
                    <p>Телефон:</p>
                    <a href="tel:+79631239792">
                        +7 (963) 123-97-92
                    </a>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4">
                <ul class="social d-flex">
                    <li class="social__item">
                        <a href="https://t.me/GoldCapital_official" target="_blank" class="social__link"
                           rel="nofollow noopener noreferrer">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="https://instagram.com/goldcapital_official" target="_blank" class="social__link"
                           rel="nofollow noopener noreferrer">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer" id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <a href="#" class="footer-logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/footer-logo.png" alt="GoldCapital"
                         class="footer-logo__img img">
                </a>
            </div>
            <div class="col-md-8 ">
                <ul class="menu footer-menu d-flex justify-content-lg-between">
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
                    <li class="menu__item menu__item-contacts">
                        <a href="#contacts" class="menu__link">
                            Контакты
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="#reviews" class="menu__link">
                            Отзывы
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="javascript: desktop();" class="full-version" id="full-version">
                            Версия для ПК
                        </a>
                    </li>
                    <li class="menu__item angle-up">
                        <a href="#header" class="angle">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="row align-items-center">
            Начиная работать на финансовых рынках, убедитесь, что вы осознаете риски, с которыми сопряжена торговля с
            использованием кредитного плеча, и что вы имеете достаточный уровень подготовки.
        </p>
    </div>
</footer>
<!-- Modal window -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content"
             style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/modal-body-bg.jpg)">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/close-btn.png" alt="close">
                </button>
            </div>
            <div class="modal-body">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/modal-icon.png" alt="modal-icon"
                     class="modal__icon">
                <div class="modal__title">Спасибо за Вашу заявку!</div>
                <div class="modal__text">Менеджер свяжется с Вами в ближайшее время</div>
                <div class="modal-social__box col-xl-2 col-lg-4"
                     style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/model-border.svg)">
                    <ul class="modal-social d-flex">
                        <li class="social__title">
                            Следите за новостями!
                        </li>
                        <li class="social__item">
                            <a href="https://t.me/GoldCapital_official" target="_blank" class="social__link"
                               rel="nofollow noopener noreferrer">
                                <i class="fab fa-telegram-plane"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="https://instagram.com/goldcapital_official" target="_blank" class="social__link"
                               rel="nofollow noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- menu-collapse -->
<div class="d-none menu-collapse">
    <ul class="menu-collapse__list d-flex ">
        <a href="#" class="menu-collapse-logo mr-auto">

            <img src="<?php bloginfo('template_url'); ?>/assets/img/menu-collapse-logo.png" alt="GoldCapital"
                 class="menu-collapse-logo__img img">

        </a>
        <li class="menu-collapse__item">
            <a href="#about" class="menu-collapse__link">
                О компании
            </a>
        </li>
        <li class="menu-collapse__item">
            <a href="#services" class="menu-collapse__link">
                Услуги
            </a>
        </li>
        <li class="menu-collapse__item">
            <a href="#creation" class="menu-collapse__link">
                О проекте
            </a>
        </li>
        <li class="menu-collapse__item">
            <a href="#reviews" class="menu-collapse__link">
                Отзывы
            </a>
        </li>
        <li class="menu-collapse__item menu__item-contacts">
            <a href="#contacts" class="menu-collapse__link">
                Контакты
            </a>
        </li>
        <button type="button" class="gamburger close d-lg-none">
            <i class="fa fa-close"></i>
        </button>
        <ul class="networks-collapse ">
            <li class="networks-collapse__call">
                <a href=".consultation-title" target="_blank"
                   class="networks-collapse__link networks-collapse__link_call" rel="nofollow noopener noreferrer">
                    Заказать звонок
                </a>
            </li>
            <div class="bot">
                <li class="networks-collapse__item">
                    <a href="https://instagram.com/goldcapital_official" target="_blank" class="networks-collapse__link"
                       rel="nofollow noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="networks-collapse__item networks-collapse__item_telegram">
                    <div class="networks-collapse__link networks-collapse__links_telegram">
                        <i class="fab fa-telegram-plane"></i>
                    </div>
                    <div class="hover-collapse">
                        <a href="https://t.me/GoldCapital_official" target="_blank" class="hover-collapse__link"
                           rel="nofollow noopener noreferrer">
                            Основной
                        </a>
                        <a href="https://t.me/joinchat/GJ5DAkYiCFXyQ0FBNqLVgQ" target="_blank"
                           class="hover-collapse__link" rel="nofollow noopener noreferrer">
                            Чат
                        </a>
                    </div>
                </li>
            </div>
            <a href="https://gobymylink.com/ru/registration/?cpa_partner_id=12555567&sub_id=GoldCapital" target="_blank"
               rel="nofollow noopener noreferrer" class="nav-btn menu-collapse-btn btn ">
                Регистрация
            </a>
            <a href="https://gobymylink.com/ru/login/?cpa_partner_id=12555567&sub_id=GoldCapital" target="_blank"
               rel="nofollow noopener noreferrer" class="nav-btn menu-collapse-btn btn ">
                Вход
            </a>
        </ul>
    </ul>
</div>
<!-- Yandex.Metrika counter -->
<div><img src="https://mc.yandex.ru/watch/66235159" style="position:absolute; left:-9999px;" alt="metrica"/></div>
<!-- /Yandex.Metrika counter -->
<!-- Script -->

<script src="//taplink.cc/emilkzn/widget/" async></script>
<?php wp_footer(); ?>

</body>
</html>
