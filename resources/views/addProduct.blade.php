@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1 class="contentTitle">Добавить новый товар</h1>
        <form action="{{ route('product.store') }}" method="post" class="addProductForm">
            @csrf
            <select name="brandId">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <select name="sex">
                <option>Мужской</option>
                <option>Женский</option>
            </select>
            <select name="typeId">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <select name="collectionId">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <select name="categoryId">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <input name="title">
            <input name="shortTitle">
            <textarea name="description"></textarea>
            <select name="color">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <select name="size">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <input name="price">
            <input name="image">
            <textarea name="composition"></textarea>
            <input name="designCountry">
            <input name="manufacturenCountry">
            <input name="importer">
            <input type="checkbox" name="availability">
            <button type="submit">Добавить</button>
        </form>
        <button><a href="{{ route('admin.index') }}">Назад</a></button>
    </div>
@endsection