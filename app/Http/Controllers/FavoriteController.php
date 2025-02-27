<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller {
    
    public function index() {
        if (!Auth::check()) {
            return redirect()->route('login.index');
        }
    
        $userId = Auth::id();
        $favorites = Favorite::where('userId', $userId)->get();
    
        $totalPrice = 0;

        foreach ($favorites as $favorite) {
            $product = Product::find($favorite->productId);
            if ($product) {
                $totalPrice += $product->price;
            }
        }
        return view('favorite', compact('favorites', 'totalPrice', 'product'));
    }

    public function addToFavorites($productId)
    {
        $userId = Auth::id();

        if (!Favorite::where('userId', $userId)->where('productId', $productId)->exists()) {
            Favorite::create([
                'userId' => $userId,
                'productId' => $productId,
            ]);
        }

        return redirect()->back();
    }

    public function showFavorites()
    {
        $userId = Auth::id();
        $favorites = Favorite::with('product')->where('userId', $userId)->get();

        return view('favorite', compact('favorites'));
    }
}
