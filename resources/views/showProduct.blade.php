@extends('layouts.asset')
@section('content')
    <div class="content">
        <a href="{{ route('products.index') }}">Назад</a>
        <a href="{{ route('product.edit', $product->id) }}">Изменить</a>
    </div>

    <form action="{{ route('product.show', $product->id) }}" method="get" class="addProductForm">
        @csrf
        <div class="productCard">
            <div class="photos">
                <?php //TODO отображение фотокарточек ?>
                <div class="photosColumn">
                    <span>1</span>
                    <span>1</span>
                    <span>1</span>
                    <span>1</span>
                </div>
                <div class="bigPhoto">
                    <span>1</span>
                </div>
            </div>

            <div class="infos">
                <div class="productInfo">
                    <h1>
                        <span name="title" class="title">{{ $product->title }}</span>
                    </h1>
                    <h3>
                        <span name="shortTitle" class="shortTitle">{{ $product->shortTitle }}</span>
                    </h3>

                    <label for="article">Артикул:</label>
                    <span name="article" class="article">{{ $product->article }}</span>
                    
                    <label for="brandId">Бренд:</label>
                    <span name="brandId" class="brandId">{{ optional($product->brand)->name ?? 'Не указано' }}</span>

                    <label for="collectionId">Коллекция:</label>
                    <span name="collectionId" class="collectionId">{{ optional($product->collection)->name ?? 'Не указано' }}</span>

                    <label for="categoryId">Категория:</label>
                    <span name="categoryId" class="categoryId">{{ optional($product->category)->name ?? 'Не указано' }}</span>

                    <label for="typeId">Тип:</label>
                    <span name="typeId" class="typeId">{{ optional($product->type)->name ?? 'Не указано' }}</span>

                    <label for="color">Цвет:</label>
                    <select name="color" class="collectionId" value="{{ $product->color }}">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>

                    <label for="sex">Пол:</label>
                    <span name="sex" class="sex">{{ $product->sex }}</span>

                    <label for="size">Размер:</label>
                    <select name="size" class="size" value="{{ $product->size }}">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>

                    <h1>
                        <span name="price" class="price">{{ $product->price }}
                            <span class="priceSpan">byn</span>
                        </span>
                    </h1>

                    <?php //TODO сделать кнопки ?>
                    <div class="btnsContainer">
                        <button class="cartBtn">В корзину</button>
                        <button class="favoriteBtn">Избранное</button>
                    </div>

                    <div class="descriptionBlock">
                        <label for="description">Описание</label>
                        <span>
                            <span name="description" class="description">{{ $product->description }}</span>
                        </span>

                        <label for="composition">Состав:</label>
                        <span name="composition" class="composition">{{ $product->composition }}</span>

                        <label for="designCountry">Страна дизайна:</label>
                        <span name="designCountry" class="designCountry">{{ $product->designCountry }}</span>

                        <label for="manufacturenCountry">Страна производитель:</label>
                        <span name="manufacturenCountry" class="manufacturenCountry">{{ $product->manufacturenCountry }}</span>

                        <label for="importer">Импоретр:</label>
                        <span name="importer" class="importer">{{ $product->importer }}</span>

                        <label for="availability">Наличие в магазинах:</label>
                        <span type="checkbox" name="availability" class="availability">{{ $product->availability }}</span>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="{{ route('product.delete', $product->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Удалить</button>
    </form>

    <div class="sameCollectionProducts">
        <h1>Товары из той же коллекции</h1>
    </div>
    
@endsection
