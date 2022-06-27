@extends("base")

@section("title", "Замовлення №$order->id")

@section("content")
    <div class="container">
        <h1>Замовлення №{{$order->id}}</h1>
        <h2>Статус: {{$order->status}}</h2>
        <span>
            Замовник: {{$order->client_name}} {{$order->client_surname}}<br>
            Адреса доставки: {{$order->client_address}}<br>
            Сума замовлення: {{$order->total}}₴<br>
        </span>
        <h3>Ваше замовлення:</h3>
        @foreach($order->ordersproducts as $item)
            <div class="Cart-Items youritems">
                <div class="image-box">
                    <img src="{{$item->product->imagepath}}" alt="" />
                </div>
                <div class="about">
                    <a href={{route('product_details', $item->product_id)}}>
                        <h1 class="title">{{$item->product->title}}</h1>
                    </a>
                </div>
                <div class="count">{{$item->quantity}} шт</div>
            </div>
        @endforeach
    </div>
@endsection
