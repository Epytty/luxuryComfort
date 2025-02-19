@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1>Панель администратора</h1>
        <a href="{{ route('addProduct.index') }}">Добавить новый товар</a>
    </div>
@endsection