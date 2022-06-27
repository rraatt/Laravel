@extends("base")

@section("title", "Відстеження замовлення")

@section("content")
    <?php $message = Session::get('message'); ?>
    <div class="container">
        <h1>Відстеження замовлення</h1>
        @if($message)
            <h2 style="color:red;">{{$message}}</h2>
        @endif
        <div class="ordersearch">
        <form id="order_id" class="checkout_input" style="width:auto;" action="{{route('searchorder')}}" method="post">
            @csrf
            <label>
                <span>Номер замовлення</span>
                <input type="number" name="trackid" id="trackid" required>
            </label>
        </form>
        <button class="searchbutton" type="submit" form="order_id">Відcтежити</button>
        </div>
    </div>
@endsection
