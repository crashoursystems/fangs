@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/app.css">
    <div  id="hui" class="price-lists">
        <div class="logotip">
            <img src="img/fangs-logo.png" alt="">
        </div>
        <div class="list">
            <div class="title">
                прайс-лист
            </div>
            <div class="links">
                <a onclick="showArena()" >Fangs Arena</a>
                <a onclick="showCamp()" >Fangs Student Camp</a>
                <a onclick="showWeb()" >Fangs Web</a>
            </div>

            <div id="arena" class="block-price ">
                <div class="block-price-item">
                    <div class="name">
                        <span>STANDART</span>
                    </div>
                    <div class="price-listing">
                        <div class="price-item">
                        <span class="time">
                            <span>1 час</span>
                            <span>ПАКЕТ (5ч)</span>
                            <span>НОЧЬ(пн-ср)</span>
                            <span>НОЧЬ(чт-вс)</span>
                        </span>
                            <div class="pricing">
                                <span>50 рублей</span>
                                <span>200 рублей</span>
                                <span>250 рублей</span>
                                <span>300 рублей</span>
                            </div>
                        </div>

                    </div>

                </div>
                <hr>
                <div class="block-price-item">
                    <div class="name">
                        <span>PRO</span>
                    </div>
                    <div class="price-listing">
                        <div class="price-item">
                        <span class="time">
                            <span>1 час</span>
                            <span>ПАКЕТ (5ч)</span>
                            <span>НОЧЬ(пт-вс)</span>
                            <span>НОЧЬ(пн-ср)</span>
                        </span>
                            <div class="pricing">
                                <span>60 рублей</span>
                                <span>250 рублей</span>
                                <span>400 рублей</span>
                                <span>350 рублей</span>
                            </div>
                        </div>

                    </div>

                </div>
                <hr>
                <div class="block-price-item">
                    <div class="name">
                        <span>VIP</span>
                    </div>
                    <div class="price-listing">
                        <div class="price-item">
                        <span class="time">
                            <span>1 час</span>
                            <span>ПАКЕТ (5ч)</span>
                            <span>НОЧЬ(пн-ср)</span>
                            <span>НОЧЬ(чт-вс)</span>
                        </span>
                            <div class="pricing">
                                <span>70 рублей</span>
                                <span>300 рублей</span>
                                <span>400 рублей</span>
                                <span>500 рублей</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div id="camp" class="block-price ">
                <div class="block-price-item">
                    <div class="name">
                        <span>STANDART</span>
                    </div>
                    <div class="price-listing">
                        <div class="price-item">
                        <span class="time">
                            <span>1 час</span>
                            <span>ПАКЕТ (5ч)</span>
                            <span>НОЧЬ(пн-ср)</span>
                            <span>НОЧЬ(чт-вс)</span>
                        </span>
                            <div class="pricing">
                                <span>50 рублей</span>
                                <span>200 рублей</span>
                                <span>250 рублей</span>
                                <span>300 рублей</span>
                            </div>
                        </div>

                    </div>

                </div>
                <hr>
                <div class="block-price-item">
                    <div class="name">
                        <span>PRO</span>
                    </div>
                    <div class="price-listing">
                        <div class="price-item">
                        <span class="time">
                            <span>1 час</span>
                            <span>ПАКЕТ (5ч)</span>
                            <span>НОЧЬ(пн-ср)</span>
                            <span>НОЧЬ(чт-вс)</span>
                        </span>
                            <div class="pricing">
                                <span>60 рублей</span>
                                <span>250 рублей</span>
                                <span>300 рублей</span>
                                <span>350 рублей</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div id="web" class="block-price Arena">
                <div class="block-price-item">
                    <div class="name">
                        <span>STANDART</span>
                    </div>
                    <div class="price-listing">
                        <div class="price-item">
                        <span class="time">
                            <span>1 час</span>
                        </span>
                            <div class="pricing">
                                <span>50 рублей</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="css/new/main.min.css">
@endsection
@section('script')
    <script>
        $('#camp').hide();
        $('#web').hide();

        function showArena(){
            $('#arena').show();
            $('#camp').hide();
            $('#web').hide();
        }

        function showCamp(){
            $('#arena').hide();
            $('#camp').show ();
            $('#web').hide();
        }

        function showWeb(){
            $('#arena').hide();
            $('#camp').hide();
            $('#web').show();
        }
    </script>
@endsection
