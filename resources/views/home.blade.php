@extends("base")

@section("title", "Старояр")

@section("content")

<div class="branding">
        <h1 class="brandname">Старояр</h1>
        <h2 class="brandingtext">Найчистіша продукція з<br>українського села</h2>
    </div>
    <div class="container">
        <h1 class="sectiontitle">Топ наших<br>продуктів</h1>
        <div class="productslanding">
        @for ($i=0; $i < 4; $i++)
            <div class="productlanding">
                <a href="{{url('/jam')}}">
                <img src="images/products/Jam.png" alt="">
                </a>
                <a href="{{url('/jam')}}">
                <span>Варення з полуниці</span>
                </a>
                <div class="price-buy-landing">
                    <span>70.00₴</span>
                    <div class="buy-button">
                        <img src="images/cart.png" alt="">
                    </div>
                </div>
                <div class="price-buy-landing-mobile">
                    <span>70.00₴</span>
                </div>
            </div>
        @endfor
        </div>
        <a href="{{url('/catalogue')}}">
        <div class="view-more">
            <span>Переглянути ще</span>
        </div>
        </a>
    </div>
    <div class="why-us">
    <h1>Чому саме ми</h1>
    <img src="images/why%20us/cows.png" alt="">
        <h1>Свіжі органічні продукти</h1>
        <h2>Наші корови та кури харчуються лише найсвіжішою травичкою на<br> українських лугах</h2>
        <img src="images/why%20us/handlabor.png" alt="">
        <h1>Виключно ручна робота</h1>
        <h2>Наші майстри вручну роблять усю нашу продукцію, використовуючи<br>найвищі стандарти якості</h2>
        <img src="images/why%20us/field.png" alt="">
        <h1>Підтримай українське село</h1>
        <h2>Уся наша продукція походить від малих фермерів з українських сіл</h2>
    </div>
    @endsection