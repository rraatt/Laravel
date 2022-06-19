@extends("base")

@section("title", "Каталог")

@section("content")

<div class="container">
    <div class="catalogue">
@foreach($products as $product)
        <div class="product-catalogue">
            <a href={{route('product_details', $product->id)}}>
            <img src={{$product->imagepath}} alt="">
            </a>
            <a href={{route('product_details', $product->id)}}>
            <span>{{$product->title}}</span>
            </a>
            <div class="price-buy-landing">
                <span>{{number_format($product->price, 2, '.', ',')}}₴</span>
                <div class="buy-button">
                    <img src="../images/cart.png" alt="">
                </div>
            </div>
            <div class="price-buy-landing-mobile">
                <span>{{number_format($product->price, 2, '.', ',')}}₴</span>
            </div>
        </div>
@endforeach
    </div>
</div>
@endsection
