<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sushi</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
   
    <div class="project">
        <div class="left-bar">
        <div class="main-menu">
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="/name_category">Категория</a></li>
                <li><a href="/name_product">Карточка товара</a></li>
                <li><a href="/reviews">Отзывы</a></li>
                <li><a href="/order">Оформление заказа</a></li>
            </ul>
        </div>      
        </div>
        <div class="main">
            <header class="header">
                <div class="header__contact">
                    <h4 class="contact-text">Наш телефон</h4>
                    <p class="header__contact-telephone">+996 705 188 955</p>
                    <p class="header__contact-telephone">+996 555 188 955</p>
                   <p class="contact__time"><img src="{{ URL::asset('images/clock_ico.jpg') }}" alt="">работаем с 10:00 до 00:00</p>
                </div>
                
                <div class="header__wrap">
                    <div class="header__wrap-city">
                        <p>Город:</p>
                        <p class="city">Бишкек</p>
                    </div>
                    <div class="header__wrap-content">
                        <h3 class="header__comment">Отзывы</h3>
                        <h3 class="header__render">Доставка и оплата</h3>
                        <div><img src="{{ URL::asset('images/search_ico.png') }}" alt=""></div>
                    </div>
                </div>
            </header>
        </div>
        <div class="right-bar"></div>
    </div>
    <script src="main.js"></script>
</body>
</html>