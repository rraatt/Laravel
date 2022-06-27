@extends("base")

@section("title", "Кошик")

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
                        <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id}}" >
                            <input type="hidden" name="quantity" value="1"/>
                        <button class="btn">+</button>
                        </form>
                        <div class="count">{{$item->quantity}}</div>
                        <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id}}" >
                            <input type="hidden" name="quantity" value="-1"/>
                            <button class="btn">-</button>
                        </form>
                    </div>
                    <div class="prices">
                        <div class="amount">{{$item->quantity*$item->price}}₴</div>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id}}" >
                            <button class="remove"><u>Видалити</u></button>
                        </form>
                    </div>
                </div>
        @endforeach
                <hr>
                <div class="checkout">
                    <div class="total">
                        <div>
                            <div class="Subtotal">Разом</div>
                            <div class="items">{{Cart::getTotalQuantity()}} @if(Cart::getTotalQuantity()>1)
                                    позиції@elseпозиція@endif</div>
                        </div>
                        <div class="total-amount">{{Cart::getTotal()}}₴</div>
                    </div>
                    <a href="{{route('checkout')}}">
                    <button class="button">Оформити замовлення</button>
                    </a>
                </div>
            </div>
@else
        <div class="container">
            <h1>Кошик порожній</h1>
        </div>
@endif
@endsection
