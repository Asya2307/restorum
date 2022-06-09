<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Корзина</title>
    <meta name="theme-color" content="#c9e0e04d">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=9d49d437-f513-4245-8477-e6cdbafd0623&lang=ru_RU"
        type="text/javascript"></script>
    <link rel="stylesheet" href="/styles/main.css">
</head>

<body class="blocked_body">
    <div class="main__page">
        <div class="common__section common__section--inside">
            @@include("../../blocks/modules/header/header.php")
            @@include("../../blocks/modules/navigation/navigation-fix.php")
            @@include("../../blocks/modules/breadcrumbs/breadcrumbs.php")
            <div class="common__page">
                <div class="common__container">
                    <h2 class="common__title">Корзина</h2>
                    <div class="common__inner">
                        @@include("../../blocks/modules/basket/basket.php")
                    </div>
                </div>
            </div>
            @@include("../../blocks/modules/footer/footer__inside.php")
        </div>
        @@include("../../blocks/modules/modal/modal.php")
        <div id="modal_container" class="open_container">
            <div class="modal_overlay" data-key="1" style="opacity: 1;">
                <div class="modal popup_block open_modal" style="width: 529px"><a class="modal_close" title="Закрыть"
                        href="#"></a>

                    <h2>Войти</h2>
                    <div class="popup_block_content">
                        <form method="post" enctype="multipart/form-data" class="objectform modalform ajaxform"
                            action="/modal/autorization.html" id="autorization_form">
                            <div id="newmodal_item_login" class="newmodal_item">
                                <div class="ordering_form_caption">Телефон</div>
                                <div class="newmodal_field"><input type="text" name="login" id="login"
                                        value="+7 (___) ___-__-__" visiblemask="visible" phonemask="+7 (___) ___-__-__"
                                        currentmask="true" class="phonemask notnull rusavto_inputtext"><span
                                        id="login_info" class="field_info"></span></div>
                                <div class="clearer"></div>
                            </div>
                            <div id="newmodal_item_pass" class="newmodal_item">
                                <div class="ordering_form_caption">Пароль</div>
                                <div class="newmodal_field">
                                    <input autocomplete="off" type="password"
                                         name="pass" value="" id="pass"
                                        class="notnull rusavto_inputtext placeholder"><span id="pass_info"
                                        class="field_info"></span></div>
                                <div class="clearer"></div>
                            </div>

                            <div class="forgot_link" id="newmodal_forgotlink"><span onclick="forgot_go()"
                                    class="pseudolink">Забыли пароль?</span></div>
                            <div class="newmodal_submit autorization_submit"><input type="hidden" name="posted"
                                    value=""><input type="hidden" name="form_compiled" value="1654750038"><input
                                    type="text" name="tel" value="" class="engine_form_tel"><input type="hidden"
                                    name="table" id="basetable" value="users"><input type="hidden" name="thisvalue"
                                    id="base_thisvalue" value="0"><input callerror="" type="button"
                                    class="rusavto_button autorization_button" id="objectformsubmit" value="Войти"
                                    onclick="form_ajax('autorization_form', log_in)">
                                <div class="rusavto_button4 register_button"
                                    onclick="ajax_modal('/modal/register.html');">Зарегистрироваться</div>
                            </div>

                            <div class="clearer"></div>
                        </form>
                    </div>
                </div>
                <div class="modal_after"></div>
            </div>
        </div>
    </div>
    <script src="/js/vendor.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>