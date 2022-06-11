@extends("base")

@section("title", "Каталог")

@section("content")

<div class="container">
    <div class="catalogue">
@for ($i=0; $i < 8; $i++)
        <div class="product-catalogue">
            <a href="{{url('/jam')}}">
            <img src="../images/products/Jam.png" alt="">
            </a>
            <a href="{{url('/jam')}}">
            <span>Варення з полуниці</span>
            </a>
            <div class="price-buy-landing">
                <span>70.00₴</span>
                <div class="buy-button">
                    <img src="../images/cart.png" alt="">
                </div>
            </div>
            <div class="price-buy-landing-mobile">
                <span>70.00₴</span>
            </div>
        </div>
@endfor
    </div>
</div>
@endsection