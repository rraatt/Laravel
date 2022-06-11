@extends("base")

@section("title", "Моцарела")

@section("content")
<div class="container">
    <a href="{{url('/catalogue')}}">
        <div class="back-to-catalogue">
            <img src="../images/Arrow.png" alt="">
            <span>Назад до каталогу</span>
        </div>
    </a>
    <div class="info-container">
        <img src="../images/products/detailed/Mozarela.jpg" alt="">
        <div class="info-container-text">
            <h1>Сир моцарела</h1>
            <h2>Ціна: 27.50грн</h2>
            <div class="info-buy-button">Купити</div>
            <div class="details">
                <p>Склад:</p>
                <ul>
                    <li>молоко коров&rsquo;яче пастеризоване</li>
                    <li>сіль харчова</li>
                    <li>закваска бактеріальна</li>
                    <li>фермент сичужний</li>
                </ul>
                <p>Енергетична цінність 100 г продукту &ndash; 336 ккал<br>Поживна цінність 100 г продукту:</p>
                <ul>
                    <li>білки &ndash; 27.5 г</li>
                    <li>жири &ndash; 22.0 г</li>
                    <li>вуглеводи &ndash; 0.0 г</li>
                </ul>
        </div>
    </div>
</div>
</div>
@endsection