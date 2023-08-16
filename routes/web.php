<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

Route::get('products',[
    ProductsController::class,
    'index',
    'details'
]);

Route::get('products/{id}',[
    ProductsController::class,
    'detail'
]);

Route::get('/',[
    PagesController::class,
    'index'
]);

Route::get('/about',[
    PagesController::class,
    'about'
]);
