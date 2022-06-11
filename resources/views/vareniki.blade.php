@extends("base")

@section("title", "Вареники")

@section("content")
<div class="container">
    <a href="{{url('/catalogue')}}">
        <div class="back-to-catalogue">
            <img src="../images/Arrow.png" alt="">
            <span>Назад до каталогу</span>
        </div>
    </a>
    <div class="info-container">
        <img src="../images/products/detailed/Vareniki.jpg" alt="">
        <div class="info-container-text">
            <h1>Вареники</h1>
            <h2>Ціна: 80грн</h2>
            <div class="info-buy-button">Купити</div>
            <div class="details">
                <p>Порція 450 г</p>
                <p>Склад:</p>
                <ul>
                    <li>картопля варена</li>
                    <li>цибуля ріпчаста смажена</li>
                    <li>сіль кухонна</li>
                    <li>перець чорний мелений</li>
                    <li>борошно вищого ґатунку</li>
                    <li>олія рафінована, сіль</li>
                </ul>
                <p>Енергетична цінність 100 г продукту &ndash; 157,37 ккал</p>
                <p>Поживна цінність 100 г продукту:</p>
                <ul>
                    <li>білки &ndash; 5,4 г</li>
                    <li>жири &ndash; 4,5 г</li>
                    <li>вуглеводи &ndash; 25,6 г</li>
                </ul>
            </div>
                </div>
        </div>
    </div>
</div>
@endsection