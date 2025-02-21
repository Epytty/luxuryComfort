@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1 class="contentTitle">{{ $product->title }}</h1>
        <a href="{{ route('products.index') }}">Назад</a>
        <a href="{{ route('product.edit', $product->id) }}">Изменить</a>
    </div>

    <form action="{{ route('product.show', $product->id) }}" method="get" class="addProductForm">
        @csrf
        <select name="brandId" value="{{ $product->brandId }}">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <select name="sex" value="{{ $product->sex }}">
            <option>Мужской</option>
            <option>Женский</option>
        </select>
        <select name="typeId" value="{{ $product->typeId }}">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <select name="collectionId" value="{{ $product->collectionId }}">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <select name="categoryId" value="{{ $product->categoryId }}">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <input name="title" value="{{ $product->title }}">
        <input name="shortTitle" value="{{ $product->shortTitle }}">
        <textarea name="description">{{ $product->description }}</textarea>
        <select name="color" value="{{ $product->color }}">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <select name="size" value="{{ $product->size }}">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <input name="price" value="{{ $product->price }}">
        <input name="image" value="{{ $product->image }}">
        <textarea name="composition">{{ $product->composition }}</textarea>
        <input name="designCountry" value="{{ $product->designCountry }}">
        <input name="manufacturenCountry" value="{{ $product->manufacturenCountry }}">
        <input name="importer" value="{{ $product->importer }}">
        <input type="checkbox" name="availability" value="{{ $product->availability }}">
        <button type="submit">Добавить</button>
    </form>

    <form action="{{ route('product.delete', $product->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Удалить</button>
    </form>
@endsection