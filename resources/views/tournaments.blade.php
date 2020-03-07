@extends('layouts.app')
@section('content')
    <div  id="hui">
        <div id="body">
            <style>
                body{
                    overflow: hidden;
                }
            </style>
            <!--[if IE]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->

            <div class="head">
                <h1>Турниры</h1>
                <img src="img/line.png" alt="" class="line">
            </div>
            <style>
                .head{
                    animation: 1s fadeInLeft 2;
                }
            </style>
            <div class="announces">
                <div class="announces-1">
                    <h2>СВЕЖИЕ АНОНСЫ</h2>
                   
                </div>
                <div class="announces-2">
                    <h3>КАЖДЫЙ МЕСЯЦ МЫ ПРОВОДИМ ТУРНИРЫ РЕГИОНАЛЬНОГО И МЕЖДУНАРОДНОГО МАСШТАБА</h3>
                </div>
            </div>

            <div class="carousel">
                @foreach($tournaments as $tournament)
                    <div class="carousel__slide">
                        <div class="carousel__left" id="carousel__left_1" >
                            <div class="carousel__lefttext" >
                                <h4 class="carousel_slide1title">{{$tournament->name}}</h4>
                                <style>
                                    span.green{
                                        color:#0C8127;
                                    }
                                </style>
                                <p class="carousel_slide1text" >{!!  str_replace('<div>', '', str_replace('</div>', '', $tournament->description));!!}</p>
                            </div>
                        </div>
                        <div class="carousel__button">
                            <a href="{{$tournament->href}}" class="carousel_button_text"><h2>Подробнее</h2></a>
                            <style>
                                .carousel__button a{
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }
                                .carousel__button a h2{
                                    font-size: 1.7vw;
                                }
                            </style>
                        </div>
                    </div>
                @endforeach

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
<!--Slider-Scripts-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/js.js"></script>

@endsection
