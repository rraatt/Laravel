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
                <form action="{{ route('cart.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->title }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->imagepath }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                <button class="buy-button">
                    <img src="../images/cart.png" alt="">
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
</div>
@endsection
