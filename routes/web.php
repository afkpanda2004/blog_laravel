<?php

use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Main\IndexController;

use Illuminate\Support\Facades\Route;

Route::prefix('main')->group(function (){
    Route::get('/', IndexController::class);
});

Route::prefix('admin')->group(function (){
    Route::get('/', AdminController::class);
});
Auth::routes();

