@extends('layouts.app')
@section('content')
<style>
    header .logotip img{
        animation: 1s pulse 2;
    }
    .decoration{
        animation: 1s fadeInRight     2;
    }
</style>
<header  id="hui">
    <div class="logotip">
        <img src="img/fangs-logo.png" alt="">

    </div>
    <style>
        @media only screen and (max-width:360px){
            .logotip img{
                width: чvw !important;
                margin-top: -10vw;
            }
        }
    </style>
    <div class="information">
        <h1 class="title">
            А ты вступил <br> в Волчью стаю?
        </h1>
        <p class="desctiption">
            <span>Один из лучших клубов ЮФО!</span><img src="img/backgroundp.png" alt="">
        </p>
        <div class="infodecor">
            <img src="img/line.png" alt="">
        </div>

        <a href="{{route('maps')}}" class="button button-header">
            <span>подобрать клуб</span><img src="img/Arrow.svg" alt="">
        </a>
    </div>
</header>

<div class="container-decoration">
    <div class="decoration">
        <div class="line first-line">



            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>

            <div class="decor-line">

            </div>
        </div>
        <div class="line second-line">
            <div class="decor-line">

            </div>
        </div>

        <div class="line third-line">


            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle">

            </div>
            <div class="decor-circle decor-last-circle">

            </div>

            <div class="decor-line">

            </div>
        </div>
    </div>
</div>

@endsection


@section('css')
    <link rel="stylesheet" href="/css/main.min.css">
@endsection

<!--menu-mobile-->
@section('script')
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
@endsection
