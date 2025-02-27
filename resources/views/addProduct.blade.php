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
                        <h3>Фото</h3>
                        <input type="file" name="images[]" multiple required>
                    </div>
                    <div class="brandInputContainer">
                        <h3>Бренд</h3>
                        <select name="brandId" required>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="sexInputContainer">
                        <h3>Пол</h3>
                        <select name="sex" required>
                            <option value="Мужской">Мужской</option>
                            <option value="Женский">Женский</option>
                            <option value="Унисекс">Унисекс</option>
                        </select>
                    </div>
                    
                    <div class="typeInputContainer">
                        <h3>Тип одежды</h3>
                        <select name="typeId" required>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="categoryInputContainer">
                        <h3>Категории</h3>
                        <select name="categoryId" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="collectionInputContainer">
                        <h3>Коллекция</h3>
                        <select name="collectionId" required>
                            @foreach($collections as $collection)
                                <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="titleInputContainer">
                        <h3>Название товара</h3>
                        <input name="title" placeholder="Название товара" required>
                    </div>
                    <div class="shortTitleInputContainer">
                        <h3>Короткое название товара</h3>
                        <input name="shortTitle" placeholder="Краткое название" required>
                    </div>
                    <div class="descriptionInputContainer">
                        <h3>Описание товара</h3>
                        <textarea name="description" placeholder="Описание" required></textarea>
                    </div>
                    <div class="colorInputContainer">
                        <h3>Цвета</h3>
                        <input name="color" placeholder="Цвет" required>
                    </div>
                    <div class="sizeInputContainer">
                        <h3>Размеры</h3>
                        <input name="size" placeholder="Размер" required>
                    </div>
                    <div class="priceInputContainer">
                        <h3>Цена</h3>
                        <input name="price" type="number" step="0.01" required>
                    </div>
                    <div class="compositionInputContainer">
                        <h3>Состав</h3>
                        <textarea name="composition" placeholder="Состав" required></textarea>
                    </div>
                    <div class="designCountryInputContainer">
                        <h3>Страна разработки дизайна</h3>
                        <input name="designCountry" required>
                    </div>
                    <div class="manufacturenCountryInputContainer">
                        <h3>Страна производства</h3>
                        <input name="manufacturenCountry" required>
                    </div>
                    <div class="importerInputContainer">
                        <h3>Импортер</h3>
                        <input name="importer" required>
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