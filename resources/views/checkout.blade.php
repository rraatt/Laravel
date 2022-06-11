@extends("base")

@section("title", "Старояр")

@section("content")
<div class="container" style="margin-bottom:150px;">
        <div class="Header">
            <h3 class="Heading">Корзина</h3>
            <h5 class="Action">Видалити все</h5>
        </div>
@for ($i = 0; $i < 4; $i++)
        <div class="Cart-Items">
            <div class="image-box">
                <img src="images/products/Beef.png" alt="" />
            </div>
            <div class="about">
                <h1 class="title">Яловичина тушкована</h1>
            </div>

            <div class="counter">
                <div class="btn">+</div>
                <div class="count">2</div>
                <div class="btn">-</div>
            </div>
            <div class="prices">
                <div class="amount">155₴</div>
                <div class="remove"><u>Видалити</u></div>
            </div>
        </div>
@endfor
        <hr>
        <div class="checkout">
            <div class="total">
                <div>
                    <div class="Subtotal">Разом</div>
                    <div class="items">4 позиції</div>
                </div>
                <div class="total-amount">310₴</div>
            </div>
            <button class="button">Оформити замовлення</button></div>
    </div>
@endsection