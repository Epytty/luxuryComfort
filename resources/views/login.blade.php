@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1>Логин</h1>
        <p>Если у вас нет аккаунта, <a href="{{ route('register.index') }}">зарегистрируйтесь</a></p>    
    </div>
@endsection