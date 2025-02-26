<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller {

    public function index() {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function create() {
        return view('addProduct');
    }

    public function store() {
        $data = request()->validate([
            'brandId' => 'required',
            'sex' => 'required',
            'typeId' => 'required',
            'collectionId' => 'required',
            'categoryId' => 'required',
            'title' => 'string',
            'shortTitle' => 'required',
            'description' => 'required',
            'color' => 'required',
            'price' => 'required',
            'image' => 'required',
            'composition' => 'required',
            'designCountry' => 'required',
            'manufacturenCountry' => 'required',
            'importer' => 'required',
            'availability' => 'string',
        ]);

        if (empty($data['article'])) {
            $data['article'] = Str::random(10);
        }
        
        Product::create($data);
        return redirect()->route('products.index');
    }

    public function show(Product $product) {
        return view('showProduct', compact('product'));
    }

    public function edit(Product $product) {
        return view('editProduct', compact('product'));
    }

    public function update(Product $product) {
        $data = request()->validate([
            'brandId' => 'required',
            'sex' => 'required',
            'typeId' => 'required',
            'collectionId' => 'required',
            'categoryId' => 'required',
            'title' => 'string',
            'shortTitle' => 'required',
            'description' => 'required',
            'color' => 'required',
            'price' => 'required',
            'price' => 'required',
            'image' => 'required',
            'composition' => 'required',
            'designCountry' => 'required',
            'manufacturenCountry' => 'required',
            'importer' => 'required',
            'availability' => 'string',
        ]);
        $product->update($data);
        return redirect()->route('product.show', $product->id);
    }

    public function delete(Product $product) {
        $product->delete();
        return redirect()->route('products.index');
    }
}