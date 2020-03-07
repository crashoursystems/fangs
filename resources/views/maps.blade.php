@extends('layouts.app')
@section('content')
    <style>
        body{
            overflow: hidden;
        }
    </style>
    <div>
        <header >
            <h1 class="title">
                <span>Адреса Клубов</span><img src="img/backgroundp.png" alt="">
            </h1>
            <div class="price-list">
                <a href="{{route('pricelist')}}">
                    <p class="price">
                        <span>ПРАЙС ЛИСТ</span>
                        <img src="/img/Arrow.svg" alt="">
                    </p>
                    <img src="img/line.png" alt="" class="price-decor">
                </a>
                <style>
                    a{
                        text-decoration: none;
                        color: #fff;
                    }
                </style>
            </div>

        </header>
    </div>

<div class="maps" id="maps">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7af04c2a750e8488c2097f2fff115ece1563b782399282d3b75342ef3865b958&amp;source=constructor" width="100%" height="560" frameborder="0"></iframe></div>

@endsection

@section('css')
<link rel="stylesheet" href="css/maps/main.min.css">
@endsection
<script src="js/common.min.js"></script>

<!--menu-mobile-->
@section('script')
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
        $('#maps').toggleClass('bogdanbur');
        $('#maps').removeClass('bogdanbur-1');
    }

    function CloseMenu(){
        $('#menu-big').hide();
        $('header').toggleClass('bogdanbur-1');
        $('header').removeClass('bogdanbur');
        $('#maps').toggleClass('bogdanbur-1');
        $('#maps').removeClass('bogdanbur');


    }
</script>
@endsection
</body>
</html>
