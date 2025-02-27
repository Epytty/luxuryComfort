@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1 class="contentTitle">Регистрация</h1>
        <form action="{{ route('registerCreate') }}" method="post">
            @csrf
            <input name="name" placeholder="Имя">
            <input name="email" type="email" placeholder="Почта">
            <input name="password" type="password" placeholder="Пароль">
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
@endsection