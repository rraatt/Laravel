@extends("base")

@section("title", "Варення з полуниці")

@section("content")
<div class="container">
  <a href="{{url('/catalogue')}}">
    <div class="back-to-catalogue">
      <img src="../images/Arrow.png" alt="">
      <span>Назад до каталогу</span>
    </div>
  </a>
  <div class="info-container">
    <img src="../images/products/detailed/Jam.jpg" alt="">
    <div class="info-container-text">
      <h1>Варення з полуниці</h1>
      <h2>Ціна: 70грн</h2>
      <div class="info-buy-button">Купити</div>
      <div class="details">
        <p>Порція&nbsp;300&nbsp;г</p>
        <p>Склад:</p>
        <ul>
          <li>полуниця</li>
          <li>ревінь</li>
          <li>цукор</li>
        </ul>
        <p>Поживна цінність 100 г продукту:</p>
        <ul>
          <li>білки &ndash; 0.2 г</li>
          <li>жири &ndash; 0.1 г</li>
          <li>вуглеводи &ndash; 72 г</li>
        </ul>
        <p>Енергетична цінність 100 г продукту &ndash; 280 ккал</p>
      </div>
    </div>
    </div>
    </div>
@endsection