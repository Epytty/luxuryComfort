<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('branding');
            $table->string('sex')->nullable();
            $table->string('productType');
            $table->string('collection');
            $table->string('category');
            $table->string('article');
            $table->string('title');
            $table->string('shortTitle');
            $table->text('description');
            $table->string('color');
            $table->string('size');
            $table->double('price');
            $table->string('image');
            $table->string('composition');
            $table->string('designCountry');
            $table->string('manufacturenCountry');
            $table->string('importer');
            $table->boolean('availability');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
