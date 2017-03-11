<!DOCTYPE HTML>
<!--
    Веб-студия bulash.ru
    Автор: Валерий Булаш
-->


<title>Веб-студия Валерия и Натальи Булаш</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

<!-- Темы JQuery UI -->
<!--<link href="assets/jquery-ui-themes-1.12.1/themes/base/jquery-ui.min.css" rel="stylesheet" type="text/css"/>-->
<!--<link href="assets/jquery-ui-themes-1.12.1/themes/start/jquery-ui.min.css" rel="stylesheet" type="text/css"/>-->
<!--<link href="assets/jquery-ui-themes-1.12.1/themes/cupertino/jquery-ui.min.css" rel="stylesheet" type="text/css"/>-->
<!--    <link href="assets/jquery-ui-themes-1.12.1/themes/le-frog/jquery-ui.min.css" rel="stylesheet" type="text/css"/>-->
<!--<link href="assets/jquery-ui-themes-1.12.1/themes/dark-hive/jquery-ui.min.css" rel="stylesheet" type="text/css"/>-->
<link href="assets/jquery-ui-themes-1.12.1/themes/humanity/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

<style>
    .offer-text {
        font-size: 0.75em;
    }

    .offer-title {
        display: none;
    }

    .offer-buttons {
        display: none;
    }

    .mountains {
        background-size: cover;
        background-image: url(images/IMG_3827.JPG) !important;
        opacity: 0.25; /* Значение прозрачности */
        filter: alpha(Opacity=25); /* Прозрачность в IE */
    }
</style>

<!--<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>-->

<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

<script>
    $(function () {
        $("#offer-dialog").dialog({
            autoOpen: false,
            modal: true,
            resizable: false,
            width: 800,
            show: {
                effect: "drop",
                duration: 1000
            },
            hide: {
                effect: "drop",
                duration: 1000
            },
            classes: {
                "ui-dialog-title": "offer-title",
                "ui-dialog-content": "offer-text",
                "ui-dialog-buttonpane": "offer-buttons"
            }
        });
    });

    function showOffer(title, description) {
        $("#offer-dialog").dialog("option", "title", title);
        $("#offer-description").html(description);
        /*
         var themeClass = $("#offer-dialog").dialog("option", "classes.ui-widget-header");
         alert(themeClass);*/
        $("#offer-dialog").dialog("open");
    }
    ;

    String.prototype.format = function () {
        var args = arguments;
        return this.replace(/\{(\d+)\}/g, function (m, n) {
            return args[n] ? args[n] : m;
        });
    };

    function customer_mail() {
        // Если необходимо - сделать препроцессинг перед отправкой почты
        $("#feedback").submit();
    }
    ;
</script>

<body>

    <div><!-- style="margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline;"> -->
        <div id="offer-dialog" title="Basic dialog"> <!-- style='display: none; '> -->
            <p id="offer-description">This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
        </div>
    </div>

    <!-- Sidebar -->
    <section id="sidebar">
        <div class="inner">
            <nav>
                <ul>
                    <li><a href="#intro">Добро пожаловать</a></li>
                    <li><a href="#portfolio">Что мы сделали</a></li>
                    <li><a href="#knowledge">Что мы умеем делать</a></li>
                    <li><a href="#contact-us">Связаться с нами</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Intro -->
        <section id="intro" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h1>Веб-студия Валерия и Натальи Булаш</h1>
                <p>Мы решили для себя, что создание сайтов, рассчитанных на реальный бизнес, не только наше занятие, но и благородное дело - попытка сблизить людей, дать возможность найти друг друга.<br>
                    А наше портфолио скажет само за себя - мы постарались сделать красивые и функциональные сайты.
                </p>
                <ul class="actions">
                    <li><a href="#portfolio" class="button scrolly">Наше портфолио</a></li>
                </ul>
            </div>
        </section>

        <!-- Портфолио -->
        <section id="portfolio" class="wrapper style2 spotlights">
            <p class="intro">Мы представляем здесь наши работы, которыми по праву гордимся:</p>
            <section>
                <a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
                <div class="content">
                    <div class="inner">
                        <h2>Sed ipsum dolor</h2>
                        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Посмотрите детали</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
                <div class="content">
                    <div class="inner">
                        <h2>Feugiat consequat</h2>
                        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Посмотрите детали</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
                <div class="content">
                    <div class="inner">
                        <h2>Ultricies aliquam</h2>
                        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Посмотрите детали</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>

        <!-- Что мы умеем делать -->
        <section id="knowledge" class="wrapper style3 fade-up">
            <div class="inner">
                <h2>Что мы умеем делать</h2>
                <p>Разумеется, ваш сайт уникален и не похож на уже сделанные нами. Но наш успех базируется на глубокие знания, опыт и наши предложения заказчикам.<br>
                    Убедитесь сами в прозачности, честности и выгоде наших предложений:
                </p>
                <div class="features">
                    <section>
                        <span class="icon major fa-code"></span>
                        <h3>Создание интернет-магазинов под ключ</h3>
                        <p id="im">Мы предлагаем нашим заказчикам решения на основе специализированного программного обеспечения OpenCart и PrestaShop...</p>
                        <ul class="actions">
                            <li>
                                <a href="#knowledge" class="button" onclick='showOffer("Создание интернет-магазинов под ключ",
                                                "<p>Мы предлагаем нашим заказчикам решения на основе специализированного программного обеспечения OpenCart и PrestaShop</p>" +
                                                "<p>И не только устанавливаем программное  обеспечение интернет-магазина, но и настраиваем его для использования \"под ключ\".</p>" +
                                                "<p>В комплект поставки интернет-магазина входит также услуга системного и прикладного администрирования интернет-магазина в течение 30 дней с момента сдачи - " +
                                                "на этот период нашей проблемой станет не только работоспособность интернет-магазина, но и актуальность информации и надежный обмен информацией по каталогу товаров и " +
                                                "заказам между интернет-магазином и вашей учетной системой 1С.</p>"
                                                );'>
                                    Наше предложение полностью</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <span class="icon major fa-lock"></span>
                        <h3>Aliquam sed nullam</h3>
                        <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                        <ul class="actions">
                            <li>
                                <a href="#knowledge" class="button" onclick='showOffer("Создание интернет-магазинов под ключ",
                                                "<p>Мы предлагаем нашим заказчикам решения на основе специализированного программного обеспечения OpenCart и PrestaShop</p>" +
                                                "<p>И не только устанавливаем программное  обеспечение интернет-магазина, но и настраиваем его для использования \"под ключ\".</p>" +
                                                "<p>В комплект поставки интернет-магазина входит также услуга системного и прикладного администрирования интернет-магазина в течение 45 дней с момента сдачи - " +
                                                "на этот период нашей проблемой станет не только работоспособность интернет-магазина, но и актуальность информации и надежный обмен информацией по каталогу товаров и " +
                                                "заказам между интернет-магазином и вашей учетной системой 1С.</p>"
                                                );'>
                                    Наше предложение полностью</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <span class="icon major fa-cog"></span>
                        <h3>Sed erat ullam corper</h3>
                        <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                    </section>
                    <section>
                        <span class="icon major fa-desktop"></span>
                        <h3>Veroeros quis lorem</h3>
                        <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                    </section>
                    <section>
                        <span class="icon major fa-chain"></span>
                        <h3>Urna quis bibendum</h3>
                        <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                    </section>
                    <section>
                        <span class="icon major fa-diamond"></span>
                        <h3>Aliquam urna dapibus</h3>
                        <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                    </section>
                </div>
                <ul class="actions">
                    <li><a href="#" class="button">Learn more</a></li>
                </ul>
            </div>
        </section>

        <!-- Связь -->
        <section id="contact-us" class="wrapper style1 fade-up">
            <div class="inner">
                <h2>Будем на связи!</h2>
                <p>Вы можете связаться всеми перечисленными ниже способами - по электронной почте через форму ниже, написав простое или электронное письмо.</p>
                <!-- Обратите внимание - ниже есть кнопка мгновенной оплаты услуг веб-студии-->
                <div class="split style1">
                    <section>
                        <!-- TODO: Сделать отправку информации по почте -->
                        <form method="post" action="server/mail.php" id="feedback" onsubmit="customer_mail();">
                            <div class="field half first">
                                <label for="customer-name">ФИО</label>
                                <input type="text" name="name" id="customer-name" placeholder="Ваши имя и фамилия" required />
                            </div>
                            <div class="field half">
                                <label for="customer-email">Электронная почта</label>
                                <input type="email" name="email" id="customer-email" placeholder="Ваш адрес электронной почты" required />
                            </div>
                            <div class="field">
                                <label for="customer-message">Сообщение</label>
                                <textarea name="message" id="customer-message" rows="5" placeholder="Ваше сообщение в адрес Веб-студии" required></textarea>
                            </div>
                            <!--<input type="hidden" name="customer" id="customer"/>-->
                            <!--                            <ul class="actions">
                                                            <li><a href="" class="button submit">Переслать сообщение</a></li>
                                                        </ul>-->
                            <input type="submit" value="Переслать сообщение">
                        </form>
                    </section>
                    <section>
                        <ul class="contact">
                            <li>
                                <h3>Адрес</h3>
                                <span>125459 Туристская улица, 16-4-207<br />
                                    Москва<br />
                                    Россия</span>
                            </li>
                            <li>
                                <h3>Электронная почта</h3>
                                <a href="#">info@bulash.ru</a>
                            </li>
                            <li>
                                <h3>Телефон</h3>
                                <span>+7 (909) 921-75-15</span>
                            </li>
                            <!--                                <li>
                                                                <h3>Social</h3>
                                                                <ul class="icons">
                                                                    <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
                                                                    <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
                                                                    <li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
                                                                    <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                                                                    <li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
                                                                </ul>
                                                            </li>-->
                        </ul>
                    </section>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <footer id="footer" class="wrapper style1-alt">
        <div class="inner">
            <ul class="menu">
                <li>Веб-студия Валерия и Натальи Булаш</li>
                <li>Дизайн темы сайта: <a href="http://html5up.net">HTML5 UP</a>
            </ul>
        </div>
    </footer>

    <!-- Яндекс -->

    <?php
    //
    ?>
</body>
