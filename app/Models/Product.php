<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'brandId',
        'sex',
        'typeId',
        'collectionId',
        'categoryId',
        'article',
        'title',
        'shortTitle',
        'description',
        'color',
        'size',
        'price',
        'image',
        'composition',
        'designCountry',
        'manufacturenCountry',
        'importer',
        'availability',
    ];
    
    protected $table = 'products';
}
