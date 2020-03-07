@extends('layouts.app')
@section('content')
    <style>
        body{
            overflow: hidden;
        }
    </style>
    <div  id="hui">
        <div id="partbody">

            <link href="https://fonts.googleapis.com/css?family=Nunito|Play:700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Nunito:300&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="css/nonsass.css">
            <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
            <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

            <!--[if IE]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->
            <style>
                @media only screen and (max-width: 480px){
                   .headpartners {
                       margin-left: 2vw;
                    }
                }
            </style>
            <div class="headpartners">
                <h1 style=" ">Наши партнёры</h1>
                <style>
                    @media only screen and (max-width: 480px){
                        .headpartners h1 {
                            font-size: 8vw!important;
                            padding-left: 2vw;

                        }
                    }
                </style>
                <img src="img/line.png" alt="" class="line">
            </div>
            <style>
                .headpartners{
                    animation: 1s fadeInLeft 2;
                }
            </style>
            <div class="partners">
                <div class="partners_left">
                    <a href="https://www.nvidia.com/ru-ru/"><img src="img/NVIDIA.png" data-depth="0.2" alt="" class="partner"></a>
                    <a href="http://red-square.org/"><img src="img/REDSQUARE.png" data-depth="0.4" alt="" class="partner"></a>
                </div>
                <div class="partners_right">
                    <a href="https://vk.com/tornado_energy"><img src="img/TORNADO.png" data-depth="0.1" alt="" class="partner"></a>
                    <a href="https://real.su/"><img src="img/REAL.png" data-depth="0.5" alt="" class="partner  "></a>
                </div>
            </div>

            <div class="prime">
                <h3 class="primetext">Играйте на лучших девайсах, используя <br> на полную мощность видеокарту с технологией RTX</h3>
                <h3 class="primetext">Вы имеете лучшее соединение и<br> не испываете проблем с пингом</h3>
                <h3 class="primetext">Вы играете на самых комфортных,<br> стилизованных под атмосферу киберспорта креслах!</h3>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/nonsass.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito|Play:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.min.css">
@endsection

@section('script')
<!--parallax-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/js1.js"></script>

@endsection

