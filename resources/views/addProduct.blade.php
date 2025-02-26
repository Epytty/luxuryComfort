@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1 class="contentTitle">Добавление</h1>
        <div class="menusContainer">
            <div class="leftMenu">
                <button class="leftMenuBtn">
                    <a href="{{ route('addProduct.index') }}">
                        <span>Товар</span>
                    </a>
                </button>
                <button class="leftMenuBtn">
                    <a href="{{ route('addBrand.index') }}">
                        <span>Бренд одежды</span>
                    </a>
                </button>
                <button class="leftMenuBtn">
                    <a href="{{ route('addCollection.index') }}">
                        <span>Коллекция одежды</span>
                    </a>
                </button>
            </div>
            <div class="rightMenu">
                <form action="{{ route('product.store') }}" method="post" class="addProductForm">
                    @csrf
                    <div class="photoContainer">
                        <div class="firstPhoto">
                            <button>
                                <span class="photoContainerSpan">
                                    <img src="{{ asset('images/plus.svg') }}" alt="plus" class="photoContaierImage">
                                    <input type="file" class="photoInput">
                                </span>
                            </button>
                        </div>
                        
                        <div class="secondPhoto">
                            <button>
                                <span class="photoContainerSpan">
                                    <img src="{{ asset('images/plus.svg') }}" alt="plus" class="photoContaierImage">
                                    <input type="file" class="photoInput">
                                </span>
                            </button>
                        </div>
                        <div class="thirdPhoto">
                            <button>
                                <span class="photoContainerSpan">
                                    <img src="{{ asset('images/plus.svg') }}" alt="plus" class="photoContaierImage">
                                    <input type="file" class="photoInput">
                                </span>
                            </button>
                        </div>
                        <div class="fourthPhoto">
                            <button>
                                <span class="photoContainerSpan">
                                    <img src="{{ asset('images/plus.svg') }}" alt="plus" class="photoContaierImage">
                                    <input type="file" class="photoInput">
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="brandInputContainer">
                        <h3>Бренд</h3>
                        <select name="brandId">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="sexInputContainer">
                        <h3>Пол</h3>
                        <select name="sex">
                            <option>Мужской</option>
                            <option>Женский</option>
                        </select>
                    </div>
                    <div class="typeInputContainer">
                        <h3>Тип одежды</h3>
                        <select name="typeId">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="categoryInputContainer">
                        <h3>Категории</h3>
                        <select name="categoryId">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="collectionInputContainer">
                        <h3>Коллекция</h3>
                        <select name="collectionId">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="titleInputContainer">
                        <h3>Название товара</h3>
                        <input name="title" placeholder="Название товара">
                    </div>
                    <div class="shortTitleInputContainer">
                        <h3>Короткое название товара</h3>
                        <input name="shortTitle" placeholder="Краткое название">
                    </div>
                    <div class="descriptionInputContainer">
                        <h3>Описание товара</h3>
                        <textarea name="description" placeholder="Описание"></textarea>
                    </div>
                    <div class="colorInputContainer">
                        <h3>Цвета</h3>
                        <select name="color">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="sizeInputContainer">
                        <h3>Размеры</h3>
                        <select name="size">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="priceInputContainer">
                        <h3>Цена</h3>
                        <input name="price">
                    </div>
                    {{-- image input --}}
                    <div class="compositionInputContainer">
                        <h3>Состав</h3>
                        <textarea name="composition" placeholder="Состав"></textarea>
                    </div>
                    <div class="designCountryInputContainer">
                        <h3>Страна разработки дизайна</h3>
                        <input name="designCountry">
                    </div>
                    <div class="manufacturenCountryInputContainer">
                        <h3>Страна производства</h3>
                        <input name="manufacturenCountry">
                    </div>
                    <div class="importerInputContainer">
                        <h3>Импортер</h3>
                        <input name="importer">
                    </div>
                    <div class="availabilityInputContainer">
                        <h3>Наличие</h3>
                        <input type="checkbox" name="availability">
                    </div>
                    <button type="submit">Добавить</button>
                </form>
            </div>
        </div>
        
        <button><a href="{{ route('admin.index') }}">Назад</a></button>
    </div>
@endsection