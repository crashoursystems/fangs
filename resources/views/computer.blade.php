@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/app.css">
    <div  id="hui">

        <header>
            <h1 class="title">
                <span>Компьютеры</span><img src="img/backgroundp.png" alt="">
            </h1>
            <!--	<div class="price-list">-->
            <!--		<p class="price">-->
            <!--			<span>ПРАЙС ЛИСТ</span>-->
            <!--			<img src="/img/Arrow.svg" alt="">-->
            <!--		</p>-->
            <!--		<img src="img/line.png" alt="" class="price-decor">-->
            <!--	</div>-->
        </header>
        <div class="computers" id="app">
            <h1 ></h1>
            <div class="button-wrapper">
                <div @click="open(1)" class="fangs">
                    <span>FANGS ARENA</span>
                </div>

                <div @click="open(2)" class="fangs">
                    <span>FANGS STUDENT CAMP</span>
                </div>
            </div>

            <div v-if="fangseen" class="button-wrapper"  id="fangsweb">
                <div @click="show(1)" class="button-comp">
                    <span>Standart</span>
                </div>
                <div @click="show(2)" class="button-comp">
                    <span>pro</span>
                </div>
                <div @click="show(3)" class="button-comp">
                    <span>vip 1</span>
                </div>
                <div @click="show(4)" class="button-comp">
                    <span>vip 2</span>
                </div>
            </div>
            <div v-if="campseen" class="button-wrapper"  id="fangscamp">
                <div  @click="show(5)" class="button-comp">
                    <span>Standart</span>
                </div>

                <div @click="show(6)" class="button-comp">
                    <span>vip</span>
                </div>

            </div>

            <style>

            </style>
            <div class="comp-wrapper">

                <div v-for="item in main" class="comp">
                    <div class="img">
                        <img :src="item.src" alt="">
                    </div>
                    <div  class="info">
                        <h1> @{{item.name }}</h1>
                        <p> @{{item.text}}</p>
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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>

        new Vue({
            el : '#app',
            data : {
                main: [],
                standart : [
                    {
                        src: '/img/computer/standart/monitor.png',
                        name: 'Монитор BENQ XL2411',
                        text: 'Монитор BenQ XL2411Z ZOWIE – отличный вариант для геймеров. Он использует технологию Motion Blur Reduction, которая повышает уровень резкости, значительно облегчая восприятие информации и ориентирование в трехмерном пространстве.'
                    },
                    {
                        src: '/img/computer/standart/proc.png',
                        name: 'Intel Core I5-7500',
                        text: 'INTEL Core i5 7500 – процессор с сокетом LGA 1151 и четырьмя ядрами, который подходит для сборки офисного или домашнего компьютера. '
                    },
                    {
                        src: '/img/computer/standart/videokarta.png',
                        name: 'PALIT GeForce GTX 1060 6Gb',
                        text: 'Видеокарта Palit GeForce GTX 1060 DUAL [NE51060015J9-1061D] станет отличным выбором для комплектации производительного игрового компьютера. Модель поддерживает стандарты DirectX 12 и OpenGL 4.5. '
                    },
                    {
                        src: '/img/computer/standart/operat.png',
                        name: 'Оперативки HyperX Predator RGB DDR4-3200 8GB',
                        text: 'HyperX Cloud Alpha™ – это идеальная гарнитура для геймеров, которым нужно устройство с небольшим весом, превосходным качеством звучания и исключительным удобством пользования.'
                    },
                    {
                        src: '/img/computer/standart/naush.png',
                        name: 'Гарнитура RED SQUARE ECHO',
                        text : 'Игровые наушники Red Square Echo – очень прочные: в их оголовье вставлен стальной каркас. При этом весят они совсем немного (всего 320 г) и отлично охватывают голову большими и мягкими амбушюрами из искусственной кожи.'
                    },
                    {
                        src: '/img/computer/standart/mouse.png',
                        name: 'Мышь A4Tech X-710BK',
                        text: 'Представляем новое поколение игровых мышей A4Tech c увеличенной скоростью обмена данных! Такая мышка мгновенно среагирует даже на молниеносное движение руки - в восемь раз быстрее, чем обычная USB-мышка! - и даст вам решающее преимущество, которое может предопределить исход игры.'
                    },
                ],
                pro: [
                    {
                        src: '/img/computer/standart/monitor.png',
                        name: 'Монитор BENQ XL2411',
                        text: 'Монитор BenQ XL2411Z ZOWIE – отличный вариант для геймеров. Он использует технологию Motion Blur Reduction, которая повышает уровень резкости, значительно облегчая восприятие информации и ориентирование в трехмерном пространстве.'
                    },
                    {
                        src: '/img/computer/standart/proc.png',
                        name: 'Intel Core I5-8500 ',
                        text: '6-ядерный процессор Intel Core i5-8500 OEM, для установки которого используется сокет LGA 1151-v2, произведен по 14-нанометровому техпроцессу. Основу модели составляет ядро Coffee Lake S. Базовая частота устройства равна 3000 МГц. В турборежиме частота может достигать 4100 МГц.'
                    },
                    {
                        src: '/img/computer/standart/videokarta.png',
                        name: 'PALIT Geforce RTX 2060 6Gb',
                        text: 'Видеокарта Palit GeForce RTX 2060 Gaming Pro OC [NE62060T18J9-1062A] рассчитана на интенсивную эксплуатацию в составе мощного игрового компьютера. Для установки видеоадаптера применяется интерфейс PCI-E. Мультипроцессорная конфигурация не поддерживается: видеокарта предназначена для использования в единственном числе.'
                    },
                    {
                        src: '/img/computer/standart/operat.png',
                        name: 'Оперативки HyperX Predator RGB DDR4-3200 16GB',
                        text: 'Оперативная память Kingston HyperX Predator RGB [HX429C15PB3AK2/16] создана для геймеров, которые привыкли добиваться победы при прохождении многочисленных игр. Для этого нужен мощный компьютер, собранный из высокопроизводительный комплектующих, одним из представителей которых и является данная модель. '
                    },
                    {
                        src: '/img/computer/standart/naush.png',
                        name: 'Гарнитура RED SQUARE AVALANCHE',
                        text : 'Игровые наушники RED SQUARE AVALANCHE – очень прочные: в их оголовье вставлен стальной каркас. При этом весят они совсем немного (всего 320 г) и отлично охватывают голову большими и мягкими амбушюрами из искусственной кожи.'
                    },
                    {
                        src: '/img/computer/standart/2.png',
                        name: 'Мышь Logitech gaming mouse g102',
                        text: 'Представляем новое поколение игровых мышей Logitech gaming mouse g102 c увеличенной скоростью обмена данных! Такая мышка мгновенно среагирует даже на молниеносное движение руки - в восемь раз быстрее, чем обычная USB-мышка! - и даст вам решающее преимущество, которое может предопределить исход игры.'
                    },
                ],
                top1: [
                    {
                        src: '/img/computer/top/monitor.png',
                        name: 'Монитор AOC Gaming C27G1',
                        text: 'Игровой монитор AOC Gaming C27G1 27" выполнен с использованием матрицы по технологии МVA с 27-дюймовым дисплеем, разрешением 1920×1080 и отношением сторон 16:9. Поддерживается технологией AMD FreeSync. '
                    },
                    {
                        src: '/img/computer/standart/proc.png',
                        name: 'Intel Core I5-8500 ',
                        text: '6-ядерный процессор Intel Core i5-8500 OEM, для установки которого используется сокет LGA 1151-v2, произведен по 14-нанометровому техпроцессу. Основу модели составляет ядро Coffee Lake S. Базовая частота устройства равна 3000 МГц. В турборежиме частота может достигать 4100 МГц.'
                    },
                    {
                        src: '/img/computer/standart/videokarta.png',
                        name: 'PALIT GeForce RTX 2070 8 Gb',
                        text: 'Видеокарта Palit GeForce RTX 2070 DUAL [NE62070015P2-1062A] – ультрапроизводительный видеоадаптер, возможностей которого хватит для обеспечения скоростных возможностей мощной игровой системы. При производстве видеокарты был применен 12-нанометровый техпроцесс. '
                    },
                    {
                        src: '/img/computer/standart/operat.png',
                        name: 'Оперативки HyperX Predator RGB DDR4-3200 16GB',
                        text: 'Оперативная память Kingston HyperX Predator RGB [HX429C15PB3AK2/16] создана для геймеров, которые привыкли добиваться победы при прохождении многочисленных игр. Для этого нужен мощный компьютер, собранный из высокопроизводительный комплектующих, одним из представителей которых и является данная модель. '
                    },
                    {
                        src: '/img/computer/top/klava.png',
                        name: 'Клавиатура RED SQUARE TESLA RGB',
                        text: 'Если вам нужно отличное игровое решение, с RGB подсветкой, при этом по приемлемой стоимости, то лучше клавиатуры, чем Tesla RGB, не существует. Стильная, с множеством световых эффектов и в то же время отличная помощница в руках любого геймера.'
                    },
                    {
                        src: '/img/computer/standart/naush.png',
                        name: 'Гарнитура RED SQUARE AVALANCHE',
                        text : 'Игровые наушники RED SQUARE AVALANCHE – очень прочные: в их оголовье вставлен стальной каркас. При этом весят они совсем немного (всего 320 г) и отлично охватывают голову большими и мягкими амбушюрами из искусственной кожи.'
                    },
                    {
                        src: '/img/computer/standart/2.png',
                        name: 'Мышь Logitech gaming mouse g102',
                        text: 'Представляем новое поколение игровых мышей Logitech gaming mouse g102 c увеличенной скоростью обмена данных! Такая мышка мгновенно среагирует даже на молниеносное движение руки - в восемь раз быстрее, чем обычная USB-мышка! - и даст вам решающее преимущество, которое может предопределить исход игры.'
                    },
                ],
                top2:[
                    {
                        src: '/img/computer/top/monitor.png',
                        name: 'Монитор AOC Gaming G2790PX',
                        text: 'Монитор AOC G2790PX диагональю 27 дюймов порадует наличием матового покрытия, препятствующего постоянному оседанию частиц пыли и скапливанию загрязнений. В основу устройства положена матрица TN, которая отвечает за детализацию и контрастность каждого изображения. '
                    },
                    {
                        src: '/img/computer/standart/proc.png',
                        name: 'Intel Core I5-9400F',
                        text: '6-ядерный процессор Intel Core i5-9400F, для установки которого используется сокет LGA1151-v2, представляет из себя надежнейшее устройство, возможностей которого достаточно для эффективной работы в составе большинства эксплуатируемых в настоящее время системных блоков. '
                    },
                    {
                        src: '/img/computer/standart/videokarta.png',
                        name: 'PALIT GeForce RTX 2070 8 Gb',
                        text: 'Видеокарта Palit GeForce RTX 2070 DUAL [NE62070015P2-1062A] – ультрапроизводительный видеоадаптер, возможностей которого хватит для обеспечения скоростных возможностей мощной игровой системы. При производстве видеокарты был применен 12-нанометровый техпроцесс. '
                    },
                    {
                        src: '/img/computer/standart/operat.png',
                        name: 'Оперативки HyperX Predator RGB DDR4-3200 16GB',
                        text: 'Оперативная память Kingston HyperX Predator RGB [HX429C15PB3AK2/16] создана для геймеров, которые привыкли добиваться победы при прохождении многочисленных игр. Для этого нужен мощный компьютер, собранный из высокопроизводительный комплектующих, одним из представителей которых и является данная модель. '
                    },
                    {
                        src: '/img/computer/top/klava.png',
                        name: 'Клавиатура RED SQUARE TESLA RGB',
                        text: 'Если вам нужно отличное игровое решение, с RGB подсветкой, при этом по приемлемой стоимости, то лучше клавиатуры, чем Tesla RGB, не существует. Стильная, с множеством световых эффектов и в то же время отличная помощница в руках любого геймера.'
                    },
                    {
                        src: '/img/computer/standart/naush.png',
                        name: 'Гарнитура RED SQUARE TESLA RGB',
                        text : 'Игровые наушники RED SQUARE TESLA RGB – очень прочные: в их оголовье вставлен стальной каркас. При этом весят они совсем немного (всего 320 г) и отлично охватывают голову большими и мягкими амбушюрами из искусственной кожи.'
                    },
                    {
                        src: '/img/computer/standart/2.png',
                        name: 'Мышь Logitech gaming mouse g102',
                        text: 'Представляем новое поколение игровых мышей Logitech gaming mouse g102 c увеличенной скоростью обмена данных! Такая мышка мгновенно среагирует даже на молниеносное движение руки - в восемь раз быстрее, чем обычная USB-мышка! - и даст вам решающее преимущество, которое может предопределить исход игры.'
                    },
                ],
                standart1:[
                    {
                        src: '/img/computer/standart/monitor.png',
                        name: 'Монитор BENQ 2460',
                        text: 'Описание 24" Монитор BenQ GL2460 [9H.LA6LB.DPE]\n' +
                            'Монитор BenQ GL2460 черного цвета подойдет как для офисного, так и для домашнего пользования, так как имеет классический дизайн и все необходимые функции. Матовое покрытие экрана исключит неприятные блики.'
                    },
                    {
                        src: '/img/computer/standart/proc.png',
                        name: 'Intel Core I5-7500',
                        text: 'INTEL Core i5 7500 – процессор с сокетом LGA 1151 и четырьмя ядрами, который подходит для сборки офисного или домашнего компьютера. '
                    },
                    {
                        src: '/img/computer/standart/videokarta.png',
                        name: 'PALIT GeForce GTX 1060 6Gb',
                        text: 'Видеокарта Palit GeForce GTX 1060 DUAL [NE51060015J9-1061D] станет отличным выбором для комплектации производительного игрового компьютера. Модель поддерживает стандарты DirectX 12 и OpenGL 4.5. '
                    },
                    {
                        src: '/img/computer/standart/operat.png',
                        name: 'Оперативки HyperX Predator RGB DDR4-3200 16GB',
                        text: 'Оперативная память Kingston HyperX Predator RGB [HX429C15PB3AK2/16] создана для геймеров, которые привыкли добиваться победы при прохождении многочисленных игр. Для этого нужен мощный компьютер, собранный из высокопроизводительный комплектующих, одним из представителей которых и является данная модель. '
                    },

                    {
                        src: '/img/computer/standart/naush.png',
                        name: 'Гарнитура RED SQUARE ECHO',
                        text : 'Игровые наушники Red Square Echo – очень прочные: в их оголовье вставлен стальной каркас. При этом весят они совсем немного (всего 320 г) и отлично охватывают голову большими и мягкими амбушюрами из искусственной кожи.'
                    },
                    {
                        src: '/img/computer/standart/mouse.png',
                        name: 'Мышь A4Tech X-710BK',
                        text: 'Представляем новое поколение игровых мышей A4Tech c увеличенной скоростью обмена данных! Такая мышка мгновенно среагирует даже на молниеносное движение руки - в восемь раз быстрее, чем обычная USB-мышка! - и даст вам решающее преимущество, которое может предопределить исход игры.'
                    },
                ],
                vip:[
                    {
                        src: '/img/computer/standart/monitor.png',
                        name: 'Монитор LG 24GM79G',
                        text: 'Описание 24" Монитор BenQ GL2460 [9H.LA6LB.DPE] Монитор BenQ GL2460 черного цвета подойдет как для офисного, так и для домашнего пользования, так как имеет классический дизайн и все необходимые функции. Матовое покрытие экрана исключит неприятные блики.'
                    },
                    {
                        src: '/img/computer/standart/proc.png',
                        name: 'Intel Core I5-9400F',
                        text: 'INTEL Core i5 7500 – процессор с сокетом LGA 1151 и четырьмя ядрами, который подходит для сборки офисного или домашнего компьютера. '
                    },
                    {
                        src: '/img/computer/top/videokarta.png',
                        name: 'MSI geforce rtx 2060',
                        text: 'Видеокарта MSI PCI-E RTX 2060 предназначена для мощных игровых станций. Она отвечает за качественное воспроизведение динамичных сцен и сложных визуальных эффектов. Устройство поддерживает разрешение монитора, максимальное значение которого может достигать 7680×4320 пикселей.'
                    },
                    {
                        src: '/img/computer/standart/operat.png',
                        name: 'Оперативки HyperX Predator RGB DDR4-3200 16GB',
                        text: 'Оперативная память Kingston HyperX Predator RGB [HX429C15PB3AK2/16] создана для геймеров, которые привыкли добиваться победы при прохождении многочисленных игр. Для этого нужен мощный компьютер, собранный из высокопроизводительный комплектующих, одним из представителей которых и является данная модель. '
                    },
                    {
                        src: '/img/computer/standart/naush.png',
                        name: 'Гарнитура RED SQUARE ECHO',
                        text : 'Игровые наушники Red Square Echo – очень прочные: в их оголовье вставлен стальной каркас. При этом весят они совсем немного (всего 320 г) и отлично охватывают голову большими и мягкими амбушюрами из искусственной кожи.'
                    },
                    {
                        src: '/img/computer/top/klava.png',
                        name: 'Клавиатура Dark Project KD2 Blue Switch',
                        text: 'Клавиатура Dark Project KD2 разработана специально для геймеров и удовлетворяет самым взыскательным требованиям. Механическое переключение клавиш всегда чётко срабатывает и позволяет чувствовать себя уверенно в самых напряжённых онлайн-противостояниях. '
                    },
                    {
                        src: '/img/computer/standart/2.png',
                        name: 'Мышь Logitech gaming mouse g102',
                        text: 'Представляем новое поколение игровых мышей Logitech gaming mouse g102 c увеличенной скоростью обмена данных! Такая мышка мгновенно среагирует даже на молниеносное движение руки - в восемь раз быстрее, чем обычная USB-мышка! - и даст вам решающее преимущество, которое может предопределить исход игры.'
                    },
                ],
                fangseen: false,
                campseen:false
            },

            methods :{
                open(id){
                    this.hide()
                    if(id === 1){
                        this.fangseen = true;
                    }else{
                        this.campseen = true
                    }
                },
                hide(){
                   this.hide_comp();
                   this.fangseen = false;
                   this.campseen = false;

                },
                hide_comp(){
                    this.main = []
                },
                show(id){
                    this.hide_comp();
                    if(id === 1){
                        this.main = this.standart
                    }
                    if(id === 2){
                        this.main = this.pro
                    }
                    if(id === 3){
                        this.main = this.top1
                    }
                    if(id === 4){
                        this.main = this.top2
                    }
                    if(id === 5){
                        this.main = this.standart1
                    }
                    if(id === 6){
                        this.main = this.vip
                    }
                }
            },
            mounted(){

            }
        });
        $('#vip').hide();
        function hideVip(){
            $('#tipical').show();
            $('#vip').hide();
        }

        function hideType(){
            $('#vip').show();
            $('#tipical').hide();
        }
    </script>
    <style>

    </style>
@endsection
