@extends("base")

@section("title", "Старояр")

@section("content")
    @if(count($cartItems)!=0)
        <div class="container" style="margin-bottom:150px;">
            <div class="Header">
                <h3 class="Heading">Корзина</h3>
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                <button class="Action">Видалити все</button>
                </form>
            </div>
        @foreach($cartItems as $item)
                <div class="Cart-Items">
                    <div class="image-box">
                        <img src="{{$item->attributes->image}}" alt="" />
                    </div>
                    <div class="about">
                        <a href={{route('product_details', $item->id)}}>
                        <h1 class="title">{{$item->name}}</h1>
                        </a>
                    </div>

                    <div class="counter">
                        <div class="btn">+</div>
                        <div class="count">{{$item->quantity}}</div>
                        <div class="btn">-</div>
                    </div>
                    <div class="prices">
                        <div class="amount">{{$item->price}}₴</div>
                        <div class="remove"><u>Видалити</u></div>
                    </div>
                </div>
        @endforeach
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
@else
        <div class="container">
            <h1>Кошик порожній</h1>
        </div>
@endif
@endsection
