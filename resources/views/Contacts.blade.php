<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>Title</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1A1A1A">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1A1A1A">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1A1A1A">

    <style>body { opacity: 0; overflow-x: hidden; } html { background-image: url(img/top-bg.png) ; }</style>

    <link rel="stylesheet" href="css/libs.min.css">
    <script src="js/libs.min.js"></script>
</head>

<body>
<div>
    <header>
        <div class="title">
            КОНТАКТЫ
        </div>
        <div class="infoabout">
            <div class="info-ilya">
                <div class="info">
                    Илья Соловьёв - директор сети компьютерных клубов FANGSWEB
                </div>
                <div class="phone">
                    <span>Тел: <a href="tel:+7(927)2818456">89272818456</a></span>
                    <span>Почта: <a href="mailto:fangs@inbox.ru">fangs@inbox.ru</a></span>
                    <span>VK: <a href="https://vk.com/fangsweb">https://vk.com/fangsweb</a></span>
                </div>
            </div>

            <div class="decoration">
                <img src="img/decoration.png" alt="">
            </div>
        </div>
    </header>
    <div class="logotip" id="logotip">
        <img id="logotip" src="img/fangs-logo.png" alt="">
    </div>
</div>
<div class="menu">

    <ul>
        <li><a href="/">главная</a></li>
        <li><a href="{{route('tournament')}}">турниры</a></li>
        <li><a href="{{route('maps')}}">адреса клубов</a></li>
        <li><a href="{{route('partner')}}">наши партнеры</a></li>
        <li><a href="{{route('contact')}}">контакты</a></li>
    </ul>
</div>

<a href="javascript:menu()" class="menu-mobile" id="menu-mobile">
    <div class="circle">
        <img src="img/hamburger.png" alt="">
    </div>
</a>
<div class="menu-big" id="menu-big">
    <a href="javascript:CloseMenu()" class="back">
        <img src="img/krest.png" alt="">
    </a>
    <ul>
        <li><a href="/">главная</a></li>
        <li><a href="{{route('tournament')}}">турниры</a></li>
        <li><a href="{{route('maps')}}">адреса клубов</a></li>
        <li><a href="{{route('partner')}}">наши партнеры</a></li>
        <li><a href="{{route('contact')}}">контакты</a></li>
    </ul>
</div>
<link rel="stylesheet" href="css/contacts/main.min.css">
<script src="js/common.min.js"></script>
<!--menu-mobile-->
<script>
    function menu(){
        if($('#header').hasClass('bogdanbur')){
            $('#menu-mobile').removeClass('z-class');
            CloseMenu();
        }else{
            $('#menu-mobile').toggleClass('z-class');
            MenuOpen();
        }
    }
    function MenuOpen(){
        $('#menu-big').show();
        $('header').toggleClass('bogdanbur');
        $('header').removeClass('bogdanbur-1');
        $('#logotip').toggleClass('bogdanbur');
        $('#logotip').removeClass('bogdanbur-1');
    }

    function CloseMenu(){
        $('#menu-big').hide();
        $('header').toggleClass('bogdanbur-1');
        $('header').removeClass('bogdanbur');
        $('#logotip').toggleClass('bogdanbur-1');
        $('#logotip').removeClass('bogdanbur');


    }
</script>

</body>
</html>
