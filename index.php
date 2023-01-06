<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="image/x-icon" href="img/favicon.png" rel="shortcut icon">
    <link type="Image/x-icon" href="img/favicon.png" rel="icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">

    <title>Главная страница</title>
</head>

<body>
    <!-- Modal window desctop -->
    <section class="modal-window">
        <div class="modal-window-block">
            <div class="modal-window-item">
                <h2 class="modal-header">Есть вопросы?</h2>
                <span class="close-modal">X</span>
            </div>
            <div>
                Оставьте заявку, наш менеджер свяжется с
                Вами в ближайшее время ответит на все интересующие
                вопросы и поможем даже в самых сложных случаях!
            </div>
            <div class="modal-callback-form-input-block">
                <div class="callback-form-input-item"><input type="text" placeholder="Имя"></div>
                <div class="callback-form-input-item"><label for="name">Номер телефона</label><input type="text" id="name"></div>
            </div>

            <div class="callback-form-input-submit"><input type="submit" value="Отправить"></div>
            <div class="callback-form-text modal-callback-form-text">
                <div class="callback-form-text-1"><img src="img/shield.svg" alt="shield"></div>
                <span>
                    Обращаясь к нам вы получаете не только профессиональную работу,
                    но и абсолютную конфиденциальность информации!
                </span>
            </div>
        </div>
    </section>

    <!-- Modal window mobile -->
    <section class="modal-window-mobile">
        <div class="modal-window-block">
            <div class="modal-window-item">
                <h2 class="modal-header">Есть вопросы?</h2>
                <span class="close-modal-mobile">X</span>
            </div>
            <div class="modal-window-mobile-text">
                Оставьте заявку, наш менеджер свяжется с
                Вами в ближайшее время ответит на все интересующие
                вопросы и поможем даже в самых сложных случаях!
            </div>
            <div class="modal-callback-form-input-block">
                <div class="callback-form-input-item"><input type="text" placeholder="Имя"></div>
                <div class="callback-form-input-item"><label for="name">Номер телефона</label><input type="text" id="name"></div>
            </div>

            <div class="callback-form-input-submit"><input type="submit" value="Отправить"></div>
            <div class="callback-form-text modal-callback-form-text">
                <div class="callback-form-text-1"><img src="img/shield.svg" alt="shield"></div>
                <span>
                    Обращаясь к нам вы получаете не только профессиональную работу,
                    но и абсолютную конфиденциальность информации!
                </span>
            </div>
        </div>
    </section>

    <header style="position: relative;">
        <div class="header">
            <div class="header-part-1"><a href="/"><img src="img/logo.svg" alt="Alliance Production"></a></div>
            <div class="container header-container">
                <div class="header-part-2">
                    <ul class="main-menu">
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Контрактное производство</a></li>
                        <li><a href="#">Собственные торговые марки</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="header-part-3">
                    <div><a href="tel:+375292829932" class="mobile-phone"><img src="img/phone.svg" alt="">+375 (29) 282-99-32</a></div>
                </div>
            </div>
            <div class="header-part-4">
                <p class="callback open-modal">Получить консультацию</p>
            </div>
        </div>

        <div class="mobile-menu-block">
            <div class="mobile-menu-item-3 open-modal-mobile"><img src="img/phone-white.svg" alt="phone-white"></div>
            <div class="mobile-menu-item-2"><a href="/"><img src="img/logo.svg" alt="Alliance Production"></a></div>
            <div class="mobile-menu-item-1">
                <div class="mobile-menu-block-2">
                    <div class="mobile-menu-part mobile-menu-part-first"></div>
                    <div class="mobile-menu-part mobile-menu-part-middle"></div>
                    <div class="mobile-menu-part mobile-menu-part-third"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu -->
    <div class="mobile-menu-hidden">
        <div class="mobile-menu-block-header">
            <div class="mobile-menu-item-3-header"></div>
            <div class="mobile-menu-item-2-header"><a href="/"></a></div>
            <div class="mobile-menu-item-1-header">
                <div class="close"></div>
            </div>
        </div>
        <div class="mobile-menu-hidden-body">
            <ul class="main-ul">
                <li><a href="#">О компании</a></li>
                <li><a href="#">Контрактное производство</a>
                    <ul class="pod-ul">
                        <li><a href="#">Автомобильная химия</a>
                        <li><a href="#">Бытовая химия</a>
                        <li><a href="#">Дезинфицирующие средства</a>
                        <li><a href="#">Пищевые аэрозоли</a>
                        <li><a href="#">Косметическая продукция</a>
                        <li><a href="#">Краски аэрозольные</a>
                    </ul>
                </li>
                <li><a href="#">Собственные торговые марки</a>
                    <ul class="pod-ul">
                        <li><a href="#">Автохимия AG-Tech</a>
                        <li><a href="#">Автохимия AP</a>
                    </ul>
                </li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
        <div class="mobile-menu-hidden-footer">
            <div class="footer-item-1 footer-item-phone footer-item-phone-mobile"><a href="#">+7 (499) 686-10-14</a></div>
            <div class="footer-item-1 footer-item-address-mobile" style="margin-top: 20px;">
                <span><img src="img/mark.svg" alt="mark"></span>
                <span>г. Мосвка, Холодильный пер. 4к1с8</span>
            </div>
            <div class="footer-item-1 footer-item-mail-mobile">
                <span><img src="img/mail.svg" alt="mail"></span>
                <a href="#">a.dragunov@tdaliance.ru</a>
            </div>
            <div class="footer-item-1 footer-item-social-mobile" style="margin-top: 20px;">
                <a href="#"><img src="img/vk.svg" alt="vk"></a>
                <a href="#"><img src="img/instagram.svg" alt="instagram"></a>
            </div>
        </div>
    </div>

    <section class="banner-section">
        <div class="header-background">
            <div class="header-background-dark">
                <div class="container text-on-main-banner">
                    <div class="part-of-border-main">
                        <div class="part-of-border"></div>
                    </div>

                    <h1 class="main-text">Комплексное обеспечение товарами<br>и расходными материалами бизнеса</h1>

                    <div class="add-text">
                        Высокий уровень вовлечения представителей целевой аудитории является четким
                        доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит
                        от анализа существующих паттернов поведения.
                    </div>

                    <div class="about-company"><a href="#" class="about-company-link">Подробнее о компании</a></div>

                    <div class="header-bottom-block">
                        <div class="header-bottom-item">
                            <div><img src="img/Hourglass.svg"></div>
                            <span>Непрерывная работа c 2017 года</span>
                        </div>
                        <div class="header-bottom-item">
                            <div><img src="img/List.svg"></div>
                            <span>Вся продукция сертифицирована</span>
                        </div>
                        <div class="header-bottom-item">
                            <div><img src="img/Builder.svg"></div>
                            <span>Контроль качества на всех этапах</span>
                        </div>
                        <div class="header-bottom-item">
                            <div><img src="img/Car.svg"></div>
                            <span>Возможны поставки по всей России</span>
                        </div>
                        <div class="header-bottom-item">
                            <div><img src="img/Speedtest.svg"></div>
                            <span>Оперативное производство</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <main>
            <div class="container content-part">
                <div class="part-of-border-main">
                    <div class="part-of-border"></div>
                    <h2 class="header-text">Схема работы</h2>
                    <div class="schema-block">
                        <div class="schema-item">
                            <div class="schema-number"><span>01</span><span class="schema-number-line"></span></div>
                            <div class="uniting-block-1">
                                <h3>Знакомство</h3>
                                <div class="schema-item-desc">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</div>
                                <div class="leave-app-block leave-app-block-1">
                                    <div class="leave-app-line"></div><a href="#" class="leave-app-link">Оставить заявку</a>
                                </div>
                            </div>
                        </div>
                        <div class="schema-item">
                            <div class="schema-number"><span>02</span><span class="schema-number-line"></span></div>
                            <div class="uniting-block-1">
                                <h3>Заключение договора</h3>
                                <div class="schema-item-desc">Лишь интерактивные прототипы призваны к ответу.</div>
                            </div>
                        </div>
                        <div class="schema-item">
                            <div class="schema-number"><span>03</span><span class="schema-number-line"></span></div>
                            <div class="uniting-block-1">
                                <h3>Производство</h3>
                                <div class="schema-item-desc">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</div>
                            </div>
                        </div>
                        <div class="schema-item">
                            <div class="schema-number"><span>04</span><span class="schema-number-line"></span></div>
                            <div class="uniting-block-1">
                                <h3>Доставка</h3>
                                <div class="schema-item-desc">В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над эмоциями.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container content-part">
                <div class="part-of-border-main">
                    <div class="part-of-border"></div>
                    <h2 class="header-text">Контрактное производство</h2>
                    <div class="сontract-production-block">
                        <div class="сontract-production-item">
                            <a href="#" class="big-a">
                                <div class="contracts-production-block">
                                    <h3>Автомобильная химия</h3>
                                    <div class="сontract-production-item-desc">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</div>
                                </div>
                                <div class="сontract-production-item-img"><img src="img/prod1.png" alt=""></div>
                            </a>
                        </div>
                        <div class="сontract-production-item">
                            <a href="#" class="big-a">
                                <div class="contracts-production-block">
                                    <h3>Бытовая химия</h3>
                                    <div class="сontract-production-item-desc">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</div>
                                </div>
                                <div class="сontract-production-item-img"><img src="img/prod2.png" alt=""></div>
                            </a>
                        </div>
                        <div class="сontract-production-item">
                            <a href="#" class="big-a">
                                <div class="contracts-production-block">
                                    <h3>Дезинфицирующие средства</h3>
                                    <div class="сontract-production-item-desc">Лишь интерактивные прототипы призваны к ответу.</div>
                                </div>
                                <div class="сontract-production-item-img"><img src="img/prod3.png" alt=""></div>
                            </a>
                        </div>
                        <div class="сontract-production-item">
                            <a href="#" class="big-a">
                                <div class="contracts-production-block">
                                    <h3>Пищевые аэрозоли</h3>
                                    <div class="сontract-production-item-desc">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</div>
                                </div>
                                <div class="сontract-production-item-img"><img src="img/prod4.png" alt=""></div>
                            </a>
                        </div>
                        <div class="сontract-production-item">
                            <a href="#" class="big-a">
                                <div class="contracts-production-block">
                                    <h3>Косметическая продукция</h3>
                                    <div class="сontract-production-item-desc">Лишь интерактивные прототипы призваны к ответу.</div>
                                </div>
                                <div class="сontract-production-item-img"><img src="img/prod5.png" alt=""></div>
                            </a>
                        </div>
                        <div class="сontract-production-item">
                            <a href="#" class="big-a">
                                <div class="contracts-production-block">
                                    <h3>Краски аэрозольные</h3>
                                    <div class="сontract-production-item-desc">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</div>
                                </div>
                                <div class="сontract-production-item-img"><img src="img/prod6.png" alt=""></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container content-part">
                <div class="part-of-border-main part-of-border-main-1">
                    <div class="part-of-border"></div>
                    <h2 class="header-text">Собственные торговые марки</h2>
                    <div class="own-trademarks-block">
                        <div class="own-trademarks-item">
                            <a href="#" class="big-a-2">
                                <div class="own-trademarks-item-img"><img src="img/ag-tech.svg" alt="ag-tech"></div>
                                <div class="own-trademarks-poditem">
                                    <h3>Автохимия AG-Tech</h3>
                                    <div class="own-trademarks-poditem-text">
                                        Для современного мира разбавленное изрядной долей эмпатии,
                                        рациональное мышление создаёт предпосылки для поставленных обществом задач.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="own-trademarks-item">
                            <a href="#" class="big-a-2">
                                <div class="own-trademarks-item-img"><img src="img/aliance-production.svg" alt="ag-tech"></div>
                                <div class="own-trademarks-poditem">
                                    <h3>Автохимия AP</h3>
                                    <div class="own-trademarks-poditem-text">
                                        Для современного мира разбавленное изрядной долей эмпатии,
                                        рациональное мышление создаёт предпосылки для поставленных обществом задач.
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="business-and-clients-item business-and-clients-item-hidden-img"></div>
            <div class="container content-part-dop-1">
                <div class="part-of-border-main">
                    <div class="business-and-clients-block">
                        <div class="business-and-clients-item business-and-clients-item-hidden-img-1"><img src="img/men.png" alt=""></div>
                        <div class="business-and-clients-item">
                            <div class="part-of-border-dop-1"></div>
                            <h2 class="header-text">Отношение к делу и к клиентам</h2>
                            <div class="business-and-clients-poditem">
                                Кстати, интерактивные прототипы описаны максимально подробно.
                                Повседневная практика показывает, что укрепление и развитие
                                внутренней структуры говорит о возможностях соответствующих
                                условий активизации. Внезапно, независимые государства,
                                которые представляют собой яркий пример континентально-европейского
                                типа политической культуры, будут подвергнуты целой серии независимых
                                исследований. С учётом сложившейся международной обстановки,
                                синтетическое тестирование выявляет срочную потребность системы
                                массового участия.<br><br> А ещё действия представителей оппозиции, превозмогая
                                сложившуюся непростую экономическую ситуацию, в равной степени
                                предоставлены сами себе. Не следует, однако, забывать, что выбранный
                                нами инновационный путь в значительной степени обусловливает
                                важность дальнейших направлений развития.
                            </div>
                            <div class="leave-app-block">
                                <div class="leave-app-line"></div><a href="#" class="leave-app-link">Подробнее о компании</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container content-part">
                <div class="we-produce-block">
                    <div class="part-of-border-main we-produce-item we-produce-item-1">
                        <div class="border-and-text">
                            <div class="part-of-border"></div>
                            <h2 class="header-text">Производим аэрозольную продукцию для разных сфер</h2>
                        </div>
                        <div class="various-areas-block-main">
                            <ul class="various-areas-block">
                                <li class="various-areas-item"><img src="img/list-img/img1.svg"><span>Химические производства</span></li>
                                <li class="various-areas-item"><img src="img/list-img/img2.svg"><span>Автомойки</span></li>
                                <li class="various-areas-item"><img src="img/list-img/img3.svg"><span>Пищевая продукция</span></li>
                                <li class="various-areas-item"><img src="img/list-img/img4.svg"><span>Лаки и краски</span></li>
                                <li class="various-areas-item"><img src="img/list-img/img5.svg"><span>Косметические средства</span></li>
                                <li class="various-areas-item"><img src="img/list-img/img6.svg"><span>Автомобильная косметика</span></li>
                                <li class="various-areas-item"><img src="img/list-img/img7.svg"><span>Косметика по уходу за одеждой</span></li>
                                <li class="various-areas-item"><img src="img/list-img/img8.svg"><span>Косметика по уходу за обувью</span></li>
                                <li class="various-areas-item"><img src="img/list-img/img9.svg"><span>Строительные материалы</span></li>
                                <li class="various-areas-item"><img src="img/list-img/img10.svg"><span>И многих других</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="we-produce-item we-produce-item-2">
                        <div class="we-produce-poditem"><img src="img/Burger_King_logo.png" alt="Burger_King_logo"></div>
                        <div class="we-produce-poditem"><img src="img/Burger_King_logo.png" alt="Burger_King_logo"></div>
                        <div class="we-produce-poditem"><img src="img/Burger_King_logo.png" alt="Burger_King_logo"></div>
                        <div class="we-produce-poditem"><img src="img/Burger_King_logo.png" alt="Burger_King_logo"></div>
                        <div class="we-produce-poditem"><img src="img/Burger_King_logo.png" alt="Burger_King_logo"></div>
                        <div class="we-produce-poditem"><img src="img/Burger_King_logo.png" alt="Burger_King_logo"></div>
                        <div class="we-produce-poditem"><img src="img/Burger_King_logo.png" alt="Burger_King_logo"></div>
                        <div class="we-produce-poditem"><img src="img/Burger_King_logo.png" alt="Burger_King_logo"></div>
                        <div class="we-produce-poditem"><img src="img/Burger_King_logo.png" alt="Burger_King_logo"></div>
                    </div>
                </div>
            </div>

            <div class="container content-part">
                <div class="part-of-border-main">
                    <div class="part-of-border"></div>
                    <h2 class="header-text">Блог экспертов в области производства</h2>
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide swiper-slide-1">
                                <div class="slide-block">
                                    <div class="slide-item-1 slide-item-with-padding-1">Современная методология разработки одухотворила всех причастных</div>
                                    <div class="slide-item-2">
                                        Действия представителей оппозиции, превозмогая сложившуюся непростую
                                        экономическую ситуацию, в равной степени предоставлены...
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-2">
                                <div class="slide-block">
                                    <div class="slide-item-1 slide-item-with-padding-1">Сложно сказать, почему жизнь прекрасна</div>
                                    <div class="slide-item-2">
                                        Сложно сказать, почему элементы политического процесса функционально разнесены на независимые
                                        элементы. Безусловно, высокотехнологичная...
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>
                </div>
                <div class="leave-app-block">
                    <div class="leave-app-line"></div><a href="#" class="leave-app-link">Весь блог</a>
                </div>
            </div>

            <div class="full-width-container">
                <div class="container content-part content-part-dop-2">
                    <div class="want-to-cooperate-block">
                        <div class="want-to-cooperate-item want-to-cooperate-item-1"><img src="img/spray-paint.png" class="img-1" alt="spray paint"></div>
                        <div class="want-to-cooperate-item want-to-cooperate-item-2">
                            <h2 class="header-text header-text-1">Хотите сотрудничать?</h2>
                            <div class="business-and-clients-poditem">
                                Оставьте заявку, наш менеджер свяжется с Вами
                                в ближайшее время ответит на все интересующие
                                вопросы и поможем даже в самых сложных случаях!
                            </div>
                            <div class="callback-form-input-block">
                                <div class="callback-form-input-item"><input type="text" placeholder="Имя"></div>
                                <div class="callback-form-input-item"><label for="name">Номер телефона</label><input type="text" id="name"></div>
                            </div>
                            <div class="callback-form-input-block callback-form-input-block-1">
                                <div class="callback-form-input-submit"><input type="submit" value="Отправить"></div>
                                <div class="callback-form-text">
                                    <div class="callback-form-text-1"><img src="img/shield.svg" alt="shield"></div>
                                    <span>
                                        Обращаясь к нам вы получаете не только профессиональную<br> работу,
                                        но и абсолютную конфиденциальность информации!
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </section>
    <footer>
        <div class="full-width-container-footer-1">
            <div class="container content-part content-part-footer">
                <div class="footer-block-1">
                    <div class="footer-item-1 footer-item-logo"><a href="/"><img src="img/bottom-logo.svg" alt="bottom-logo"></a></div>
                    <div class="footer-item-1 footer-item-phone"><a href="#">+7 (499) 686-10-14</a></div>
                    <div class="footer-item-1 footer-item-address">
                        <span><img src="img/mark.svg" alt=""></span>
                        <span>г. Мосвка, Холодильный пер. 4к1с8</span>
                    </div>
                    <div class="footer-item-1 footer-item-mail">
                        <span><img src="img/mail.svg" alt=""></span>
                        <a href="#">a.dragunov@tdaliance.ru</a>
                    </div>
                    <div class="footer-item-1 footer-item-social">
                        <a href="#"><img src="img/vk.svg" alt="vk"></a>
                        <a href="#"><img src="img/instagram.svg" alt="instagram"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-width-container-footer-2" style="border-bottom: solid 1px #EBEBF0;">
            <div class="container container-footer">
                <div class="container-footer-block container-footer-block-1">
                    <p>Контрактное производство</p>
                    <ul class="container-footer-item-1">
                        <li><a href="#">Автомобильная химия</a></li>
                        <li><a href="#">Бытовая химия</a></li>
                        <li><a href="#">Дезинфицирующие средства</a></li>
                        <li><a href="#">Пищевые аэрозоли</a></li>
                        <li><a href="#">Косметическая продукция</a></li>
                        <li><a href="#">Краски аэрозольные</a></li>
                    </ul>
                </div>
                <div class="container-footer-block container-footer-block-2">
                    <p>Собственные марки</p>
                    <ul>
                        <li><a href="#">Автохимия AG-Tech</a></li>
                        <li><a href="#">Автохимия AP</a></li>
                    </ul>
                </div>
                <div class="container-footer-block container-footer-block-3">
                    <p>О компании</p>
                    <ul>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="full-width-container-footer-2 last-full-width-container-footer-2">
            <div class="container container-footer-2">
                <div class="last-footer-item-1">© 2022 «Aliance Production». Все права защищены.</div>
                <div class="last-footer-item-2"><a href="#">Политики конфиденциальности</a></div>
                <div class="last-footer-item-3"><span>Сделано в</span><img src="img/ruso.svg" alt="ruso"></div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="swiper.js"></script>
    <script src="script.js"></script>
</body>

</html>