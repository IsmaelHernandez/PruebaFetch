<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

//ruta productos
Route::get('/products', [ProductsController::class, 'index'])
    ->name('products.index');
