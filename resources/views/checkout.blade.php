@extends("base")

@section("title", "Оформлення замовлення")

@section("content")
    <div class="container">
        <div class="title">
            <h2>Оформлення замовлення</h2>
        </div>
        <div class="checkout_form">
            <form id="checkout_form" class="checkout_input" action="{{route('ordercreation')}}" method="post">
                @csrf
                <label>
                    <span class="fname">Ім'я </span>
                    <input type="text" name="name" id="name" required>
                </label>
                <label>
                    <span class="lname">Прізвище</span>
                    <input type="text" name="surname" id="surname" required>
                </label>
                <label>
                    <span>Адреса</span>
                    <input type="text" name="address" id="address" required>
                </label>
                <label>
                    <span>Електронна пошта</span>
                    <input type="email" name="email" id="email">
                </label>
            </form>
            <div class="Yorder">
                <table>
                    <tr>
                        <th colspan="2">Ваше замовлення</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}} x {{$product->quantity}}</td>
                        <td>{{$product->quantity*$product->price}}₴</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>До сплати</td>
                        <td>{{Cart::getTotal()}}₴</td>
                    </tr>
                </table><br>
                @if(!Cart::isEmpty())
                <button type="submit" form="checkout_form">Замовити</button>
                @endif
            </div>
        </div>
    </div>
@endsection
