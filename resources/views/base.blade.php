<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="icon" type="image/x-icon" href="{{url('images/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <title>@yield("title")</title>
</head>
<body>
    <header class="top-bar">
        <div class="container">
            <div class="menu">
                <a href="{{url('/')}}">
                <img class="menulogo" src="{{url('images/logo.png')}}" alt="">
                </a>
                <nav class="menu_options">
                <a href="{{url('/')}}">Головна</a>
                <a href="{{url('/catalogue')}}">Наша продукція</a>
                <a>Кар'єра</a>
                <a>Про нас</a>
                </nav>
                <a class="menucart" href="{{url('/cart')}}">
                <img class="menucart" src="{{url('images/cart.png')}}" alt="">
                </a>
            </div>
        </div>
    </header>
    <header class="mobile-top-bar">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <a href="{{url('/')}}">
        <div class="mobile-logo">
            <img src="{{url('images/logo.png')}}" alt="">
            <h1>Старояр</h1>
        </div>
        </a>
        <a href="{{url('/cart')}}">
        <img src="{{url('images/cart.png')}}" alt="">
        </a>
    </header>
    <div class="mobile-menu" id="myLinks">
        <a href="{{url('/')}}">Головна</a>
        <a href="{{url('/catalogue')}}">Наша продукція</a>
        <a>Кар'єра</a>
        <a>Про нас</a>
        </nav>
    </div>

    @yield("content")

    <footer class="footer">
    <div class="container">
        <div class="footer-section">
            <div class="footer-section">
                <h3>Про мережу</h3>
                <span>Про нас</span>
                <span>Наші магазини</span>
            </div>
            <div class="media-logos">
            <img src="{{url('images/instagram.png')}}" alt="">
            <img src="{{url('images/facebook.png')}}" alt="">
            <img src="{{url('images/youtube.png')}}" alt="">
            </div>
        </div>
        <div class="footer-section">
            <h3>Інформація</h3>
            <span>Питання та відповіді</span>
        </div>
        <div class="footer-section">
            <h3>Контакти</h3>
            <span>mail@gmail.com</span>
            <span>0 800 000 00 00</span>
        </div>
    </div>
</footer>
<footer class="footer-mobile">
    <div class="container">
        <div class="footer-section">
            <h3>Про мережу</h3>
            <span>Про нас</span>
            <span>Наші магазини</span>
        </div>
        <div class="footer-section">
            <h3>Інформація</h3>
            <span>Питання та відповіді</span>
        </div>
        <div class="footer-section">
            <h3>Контакти</h3>
            <span>mail@gmail.com</span>
            <span>0 800 000 00 00</span>
        </div>
        <div class="media-logos">
            <img src="{{url('images/instagram.png')}}" alt="">
            <img src="{{url('images/facebook.png')}}" alt="">
            <img src="{{url('images/youtube.png')}}" alt="">
        </div>
    </div>
</footer>
<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>
</body>
</html>