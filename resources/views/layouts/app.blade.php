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
    <link rel="stylesheet" href="/css/preloader.css">
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1A1A1A">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1A1A1A">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1A1A1A">

    <style>body {  overflow-x: hidden; } html {  background-image: url(/img/top-bg.png)}</style>

    <link rel="stylesheet" href="/css/libs.min.css">
    <script src="/js/libs.min.js"></script>
</head>

<body id="body">
<div class="preloader">
    <div class="loader">
        <div class="back-black"></div>
        <div class="banter-loader">
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
        </div>
    </div>
</div>
@yield('content')


<div style="font-size: 1.4vw !important;" class="menu">

    <ul>
        <li><a href="/">главная</a></li>
        <li><a href="{{route('tournament')}}">турниры</a></li>
        <li><a href="{{route('maps')}}">адреса клубов</a></li>
        <li><a href="{{route('partner')}}">наши партнеры</a></li>
        <li><a href="{{route('contact')}}">контакты</a></li>
        <li><a href="{{route('computer')}}">компьютеры</a></li>
    </ul>
</div>


<a href="javascript:menu()" class="menu-mobile" id="menu-mobile">
    <div class="circle">
        <img src="img/hamburger.png" alt="">
    </div>
</a>

<style>
    .menu-mobile{
        display: none;
    }
    .menu-big{
        display: none;
    }
    .menu ul li a{
        font-size: 1.5vw;
    }
    .menu ul li a:hover{
        font-size: 2.1vw !important;
    }
</style>
<div class="menu-big" id="menu-big">
    <a href="javascript:CloseMenu()" class="back">
        <img src="img/krest.png" alt="">
    </a>
    <ul style="margin-top: 10vw;">
        <li><a href="/">главная</a></li>
        <li><a href="{{route('tournament')}}">турниры</a></li>
        <li><a href="{{route('maps')}}">адреса клубов</a></li>
        <li><a href="{{route('partner')}}">наши партнеры</a></li>
        <li><a href="{{route('contact')}}">контакты</a></li>
        <li><a href="{{route('computer')}}">компьютеры</a></li>
    </ul>
</div>


@yield('css')

<script>
    function menu(){
        if($('#hui').hasClass('bogdanbur')){
            $('#menu-mobile').removeClass('z-class');
            CloseMenu();
        }else{
            $('#menu-mobile').toggleClass('z-class');
            MenuOpen();
        }
    }
    function MenuOpen(){
        $('#menu-big').show();
        $('#hui').toggleClass('bogdanbur');
        $('#hui').removeClass('bogdanbur-1');
    }

    function CloseMenu(){
        $('#menu-big').hide();
        $('#hui').toggleClass('bogdanbur-1');
        $('#hui').removeClass('bogdanbur');
    }
</script>
<script src="/js/common.min.js"></script>
<link rel="stylesheet" href="/css/main.css">

<!--menu-mobile-->

@yield('script')

</body>
</html>
