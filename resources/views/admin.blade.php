@extends('layouts.asset')

@section('content')
    <h1>Панель администратора</h1>
    <a href="{{ route('addProduct.index') }}">Добавить новый товар</a>
@endsection