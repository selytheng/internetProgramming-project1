<?php
//:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Project

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CartController::class, 'getAll'])->middleware('authorization:1,2,');
    Route::get('/user', [CartController::class, 'getByUser'])->middleware('authorization:1,2');
    Route::post('/', [CartController::class, 'create'])->middleware('authorization:1,2');
    Route::delete('/{id}', [CartController::class, 'delete'])->middleware('authorization:1,2'); 
    Route::put('/userup/{id}',   [CartController::class, 'update'])->middleware('authorization:1,2');
});