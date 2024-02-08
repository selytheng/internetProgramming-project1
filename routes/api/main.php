<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//  Auth
Route::group(['prefix' => 'auth'], function () {
    require(__DIR__ . '/auth.php');
});

// user can view all product without login
Route::get('product/', [ProductController::class, 'getAll']);

//  Authenticated
Route::group(['middleware' => 'auth'], function () {
    //  Category
    require(__DIR__ . '/category.php');
    //  Product
    require(__DIR__ . '/product.php');
    //  cart
    require(__DIR__ . '/cart.php');
});