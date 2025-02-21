@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1 class="contentTitle">Каталог</h1>
        <a href="{{ route('home.index') }}">Назад</a>
        <a href="{{ route('addProduct.index') }}">Добавить</a>
        @foreach ($products as $product)
            <div><a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</div>
        @endforeach
    </div>
@endsection