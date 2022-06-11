@extends("base")

@section("title", "Мед")

@section("content")
<div class="container">
  <a href="{{url('/catalogue')}}">
    <div class="back-to-catalogue">
      <img src="../images/Arrow.png" alt="">
      <span>Назад до каталогу</span>
    </div>
  </a>
  <div class="info-container">
    <img src="../images/products/detailed/Honey.jpg" alt="">
    <div class="info-container-text">
      <h1>Мед</h1>
      <h2>Ціна: 255грн</h2>
      <div class="info-buy-button">Купити</div>
      <div class="details"><div>
        <p>Порція 650 г</p>
        <p>Склад:</p>
        <ul>
          <li>Мед натуральний гречаний</li>
        </ul>
    </div>
  </div>
</div>
</div>
@endsection