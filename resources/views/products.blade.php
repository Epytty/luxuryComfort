@extends('layouts.asset')
@section('content')
    <div class="content">
        <div class="productsPage">
            <div class="filters">
                <ul>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                </ul>
            </div>
            <div class="products">
                @foreach ($products as $product)
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
                        <form action="{{ route('cart.add', $product->id) }}" method="post" class="productsCartBtnForm">
                            @csrf
                            <button class="productsCartBtn">
                                <span>В корзину</span>
                            </button>
                        </form>
                        <form action="{{ route('favorites.add', $product->id) }}" method="post" class="productsFavoriteBtnForm">
                            @csrf
                            <button class="productsFavoriteBtn">
                                <img src="{{ asset('images/favorite.svg') }}" alt="favoriteItemImage" class="favoriteItemImage">
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection