@extends("base")

@section("title", "$product->title")

@section("content")
<div class="container">
  <a href="{{route('catalogue')}}">
    <div class="back-to-catalogue">
      <img src="../images/Arrow.png" alt="">
      <span>Назад до каталогу</span>
    </div>
  </a>
  <div class="info-container">
    <img src={{$product->imagepath}} alt="">
    <div class="info-container-text">
      <h1>{{$product->title}}</h1>
      <h2>Ціна: {{number_format($product->price, 2, '.', ',')}}грн</h2>

        <form action="{{ route('cart.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $product->id }}" name="id">
            <input type="hidden" value="{{ $product->title }}" name="name">
            <input type="hidden" value="{{ $product->price }}" name="price">
            <input type="hidden" value="{{ $product->imagepath }}"  name="image">
            <input type="hidden" value="1" name="quantity">
            <button class="info-buy-button">Купити</button>
        </form>
      <div class="details">
          {!!$product->description!!}
      </div>
    </div>
    </div>
    </div>
@endsection
