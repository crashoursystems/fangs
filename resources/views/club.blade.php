@extends('layouts.app')

@section('content')
    <div id="hui">
        <header>
            <link rel="stylesheet" href="/css/app.css">
            <h1 class="title">
                <span>fangsweb Клуб</span><img src="/img/backgroundp.png" alt="">
            </h1>

            <style>
                .info-block .title .name{
                    font-size: 4vw ;
                }
                p{
                    margin-top: 0;
                }

            </style>
            <div class="price-list">
                <a href="{{route('pricelist')}}">
                    <p class="price">
                        <span>ПРАЙС ЛИСТ</span>
                        <img src="/img/Arrow.svg" alt="">
                    </p>
                    <style>
                        a{
                            text-decoration: none;
                            color: #fff;
                        }
                    </style>
                    <img src="/img/line.png" alt="" class="price-decor">
                </a>
            </div>
        </header>

        <div class="info-block" id="info-block" style="background-image: url({{$club->image}})">
            <div class="info-club">
                <div class="title">
                    <h1 class="name">{{$club->name}}</h1>
                    <p class="adress">{{$club->address}}</p>
                </div>

                <div class="info">
                    <p><span>Колличество игровых мест:</span> <span class="number">{{$club->place}}</span></p>
                    <div class="block-text-name">
                        {!!$club->priority!!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
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
        $('#info-block').toggleClass('bogdanbur');
        $('#info-block').removeClass('bogdanbur-1');
    }

    function CloseMenu(){
        $('#menu-big').hide();
        $('header').toggleClass('bogdanbur-1');
        $('header').removeClass('bogdanbur');
        $('#info-block').toggleClass('bogdanbur-1');
        $('#info-block').removeClass('bogdanbur');


    }
</script>
@endsection


@section('css')
    <link rel="stylesheet" href="/css/map/main.min.css">
    <link rel="stylesheet" href="/css/app.css">
@endsection

