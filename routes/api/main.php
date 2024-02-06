<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Auth
Route::group(['prefix' => 'auth'], function () {
    require(__DIR__ . '/auth.php');
});

Route::get('product/', [ProductController::class, 'getAll']);
Route::get('product/{id}', [ProductController::class, 'getById']);

//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Authenticated
Route::group(['middleware' => 'auth'], function () {
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Category
    require(__DIR__ . '/category.php');
    // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Category
    require(__DIR__ . '/product.php');
    
});