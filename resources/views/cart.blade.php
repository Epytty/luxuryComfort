@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1 class="contentTitle">Корзина</h1>
        <div class="cart">
            @foreach($carts as $cart)
                <div class="productsItem">
                    <div class="itemPhoto">
                        <a href="{{ route('product.show', $product->id) }}">
                            <img src="{{ asset('images/re.webp') }}" alt="productItemImage" class="productItemImage">
                        </a>
                    </div>
                    <div class="itemInfo">
                        <h1>
                            <span>{{ $product->price }}</span>
                            <span>byn</span>
                        </h1>
                        <span>{{ $product->shortTitle }}</span>
                    </div>
                    <div class="productsBtnsContainer">
                        <button class="productsCartBtn">
                            <span>В корзину</span>
                        </button>
                        <button class="productsFavoriteBtn">
                            <img src="{{ asset('images/favorite.svg') }}" alt="favoriteItemImage" class="favoriteItemImage">
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection