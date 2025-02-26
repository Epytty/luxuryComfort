@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1 class="contentTitle">Добавить новый бренд</h1>
        <form action="{{ route('brand.store') }}" method="post" class="addProductForm">
            @csrf
            
        </form>
        <button><a href="{{ route('admin.index') }}">Назад</a></button>
    </div>
@endsection