@extends("base")

@section("title", "Запіканка")

@section("content")
<div class="container">
    <a href="{{url('/catalogue')}}">
        <div class="back-to-catalogue">
            <img src="../images/Arrow.png" alt="">
            <span>Назад до каталогу</span>
        </div>
    </a>
    <div class="info-container">
        <img src="../images/products/detailed/Casserole.jpg" alt="">
        <div class="info-container-text">
            <h1>Запіканка</h1>
            <h2>Ціна: 85грн</h2>
            <div class="info-buy-button">Купити</div>
            <div class="details">
                <p>Склад:</p>
                    <ul>
                        <li>сир кисломолочний</li>
                        <li>сметана</li>
                        <li>вершки</li>
                        <li>яйця курячі</li>
                        <li>гриби печериці</li>
                        <li>м&rsquo;ясо куряче</li>
                        <li>цибуля</li>
                        <li>масло рослинне</li>
                        <li>крупа манна</li>
                        <li>сіль</li>
                        <li>перець чорний</li>
                        <li>імбир мелений</li>
                        </ul>
                    <p>Енергетична цінність 100 г продукту &ndash; 320 ккал</p>
                    <p>Поживна цінність 100 г продукту:</p>
                    <ul>
                        <li>білки &ndash; 12.3 г</li>
                        <li>жири &ndash; 8.9 г</li>
                        <li>вуглеводи &ndash; 4.9 г</li>
                    </ul>
        </div>
    </div>
</div>
</div>
@endsection