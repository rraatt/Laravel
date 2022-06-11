@extends("base")

@section("title", "Сиркова маса")

@section("content")
<div class="container">
    <a href="{{url('/catalogue')}}">
        <div class="back-to-catalogue">
    <img src="../images/Arrow.png" alt="">
    <span>Назад до каталогу</span>
</div>
    </a>
<div class="info-container">
    <img src="../images/products/detailed/Quark.jpg" alt="">
    <div class="info-container-text">
      <h1>Сиркова маса</h1>
      <h2>Ціна: 65грн</h2>
      <div class="info-buy-button">Купити</div>
      <div class="details">
                <p>Склад:</p>
                <ul>
                  <li>сир кисломолочний</li>
                  <li>цукрова пудра</li>
                  <li>курага</li>
                  <li>сметана</li>
                  <li>ванільний цукор</li>
                </ul>
                <p>Енергетична цінність 100 г продукту &ndash; 282 ккал<br>Поживна цінність 100 г продукту:</p>
                <ul>
                  <li>білки &ndash; 15.3 г</li>
                  <li>жири &ndash; 20.7 г</li>
                  <li>вуглеводи &ndash; 10.3 г</li>
                </ul>
        </div>
    </div>
</div>
</div>
@endsection