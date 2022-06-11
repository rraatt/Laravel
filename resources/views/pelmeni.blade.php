@extends("base")

@section("title", "Пельмені")

@section("content")
<div class="container">
  <a href="{{url('/catalogue')}}">
    <div class="back-to-catalogue">
      <img src="../images/Arrow.png" alt="">
      <span>Назад до каталогу</span>
    </div>
  </a>
  <div class="info-container">
    <img src="../images/products/detailed/Pelmeni.jpg" alt="">
    <div class="info-container-text">
      <h1>Пельмені</h1>
      <h2>Ціна: 90грн</h2>
      <div class="info-buy-button">Купити</div>
      <div class="details"><p>Склад:</p>
<ul>
    <li>яловичина</li>
    <li>лавровий лист</li>
    <li>сіль</li>
    <li>перець</li>
</ul>
<p>Енергетична цінність 100 г продукту &ndash; 213 ккал</p>
<p>Поживна цінність 100 г продукту:</p>
<ul>
    <li>білки &ndash; 15</li>
    <li>жири &ndash; 17</li>
    <li>вуглеводи &ndash; 0</li>
</ul></div>
    </div>
  </div>
</div>
@endsection