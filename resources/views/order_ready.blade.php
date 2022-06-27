@extends("base")

@section("title", "Ваше замовлення")

@section("content")
    <?php $order = Session::get('order'); ?>
    <div class="container">
        <h1>Ваше замовлення №{{$order}} отримано</h1>
    </div>
@endsection
