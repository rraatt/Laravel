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
        @foreach($top_products as $product)
            <div class="productlanding">
                <a href="{{route('product_details', $product->id)}}">
                <img src={{$product->imagepath}} alt="">
                </a>
                <a href="{{route('product_details', $product->id)}}">
                <span>{{$product->title}}</span>
                </a>
                <div class="price-buy-landing">
                    <span>{{number_format($product->price, 2, '.', ',')}}₴</span>
                    <form action="{{ route('cart.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->title }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->imagepath }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                    <button class="buy-button">
                        <img src="images/cart.png" alt="">
                    </button>
                    </form>
                </div>
                <form action="{{ route('cart.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->title }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->imagepath }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                <button class="price-buy-landing-mobile">
                    <span>{{number_format($product->price, 2, '.', ',')}}₴</span>
                </button>
                </form>
            </div>
        @endforeach
        </div>
        <a href="{{route('catalogue')}}">
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
