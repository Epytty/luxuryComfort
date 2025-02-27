<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller {

    public function index() {
        if (!Auth::check()) {
            return redirect()->route('login.index');
        }
    
        $userId = Auth::id();
        $carts = Cart::where('userId', $userId)->get();
    
        $totalPrice = 0;

        foreach ($carts as $cart) {
            $product = Product::find($cart->productId);
            if ($product) {
                $totalPrice += $product->price;
            }
        }
        return view('cart', compact('carts', 'totalPrice', 'product'));
    }

    public function addToCart($productId)
    {
        $userId = Auth::id();

        if (!Cart::where('userId', $userId)->where('productId', $productId)->exists()) {
            Cart::create([
                'userId' => $userId,
                'productId' => $productId,
            ]);
        }

        return redirect()->back();
    }

    public function showCart()
    {
        $userId = Auth::id();
        $carts = Cart::with('product')->where('userId', $userId)->get();

        return view('cart', compact('carts'));
    }
}
