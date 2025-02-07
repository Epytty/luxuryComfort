<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P&K</title>
</head>
<body>
    <header>
        <div class="headerContainer">
            <a href="{{ route('home.index') }}"></a>
            <img src="#" class="#">
            
            <div class="headerControls">
                <a href="#">Поиск</a>
                <a href="#">Войти</a>
                <a href="#">Избранное</a>
                <a href="#">Корзина</a>
                <a href="#">Администратор</a>
            </div>

            <nav>
                <a href="#">Женщинам</a>
                <a href="#">Мужчинам</a>
                <a href="#">Аксессуары</a>
                <a href="#">Обувь</a>
                <a href="#">Детям</a>
                <a href="#">Бренды</a>
            </nav>
        </div>
    </header>

    <div class="contentContainer">
        @yield('content')
    </div>

    <footer>
        <div class="footerContainer">
            <div class="popularCategories">
                <h2>Популярные категории</h2>
            </div>

            <div class="customer">
                <h2>Покупателям</h2>

            </div>

            <div class="information">
                <h2>Информация</h2>
            </div>

            <div class="socialMedia">
                <h2>+375 (69) 6969696</h2>

            </div>

            <div class="shopInfo">
                <p></p>

            </div>

            <div class="payment">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>