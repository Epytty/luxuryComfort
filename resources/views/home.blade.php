@extends('layouts.asset')
@section('content')
    <div class="contentHome">
        <div class="saleContainer">
            <a href="#">
                <img src="{{ asset('images/saleImage.webp') }}" alt="saleImage" class="homeBlockImage">
                <div class="homeBlockControls">
                    <h1 class="homeBlockTitle">Распродажа</h1>
                    <p class="homeBlockText">
                        Пора обновить гардероб! Максимальные скидки на модели мировых брендов.
                        В распродаже участвуют: Brunello Cucinelli, Dolce & Gabbana, Max Mara, Missoni, BOSS, Emporio
                        Armani, Peserico, Santoni, Herno, ZEGNA, ZILLI, Stefano Ricci, Etro и многих других
                    </p>
                    <button class="homeBlockButton">
                        <a href="#">Подробнее</a>
                    </button>
                </div>
            </a>
        </div>
        
        <div class="forSheContainer">
            <h1 class="homeBlockTitle">Новые послупления для неё</h1>
        </div>
    
        <div class="forHeContainer">
            <h1 class="homeBlockTitle">Новые послупления для него</h1>
        </div>
        
        <div class="celebritiesContainer">
            <a href="#">
                <img src="{{ asset('images/celebritiesImage.webp') }}" alt="celebritiesImage" class="homeBlockImage">
                <div class="homeBlockControls">
                    <h1 class="homeBlockTitle">Выбор знаменитостей</h1>
                    <p class="homeBlockText">
                        Образы итальянского бренда на красную дорожку выбирают Ума Турман, Анджелина Джоли и
                        Белла Хадид. Откройте для себя оду женственности, воплощенную в выверенных силуэтах, 
                        премиальных материалах и изысканном дизайне
                    </p>
                    <button class="homeBlockButton">
                        <a href="#">Подробнее</a>
                    </button>
                </div>
            </a>
        </div>
    
        <div class="accessoryContainer">
            <h1 class="homeTitle">Аксесуары</h1>
        </div>
    
        <div class="shoesContainer">
            <h1 class="homeTitle">Обувь</h1>
        </div>
    </div>
@endsection