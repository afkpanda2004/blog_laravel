<?php

use App\Http\Controllers\Admin\Category as Category;
use App\Http\Controllers\Admin\Tag as Tag;
use App\Http\Controllers\Admin\Post as Post;

use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::prefix('main')->group(function (){
    Route::get('/', IndexController::class);
});

Route::prefix('admin')->group(function (){
    Route::get('/', AdminController::class);

    Route::prefix('category')->group(function (){
       Route::get('/', Category\IndexController::class)->name('admin.category.index');
       Route::get('/create', Category\CreateController::class)->name('admin.category.create');
       Route::post('/', Category\StoreController::class)->name('admin.category.store');
       Route::get('/{category}', Category\ShowController::class)->name('admin.category.show');
       Route::get('/{category}/edit', Category\EditController::class)->name('admin.category.edit');
       Route::patch('/{category}', Category\UpdateController::class)->name('admin.category.update');
       Route::delete('/{category}', Category\DestroyController::class)->name('admin.category.destroy');

    });

Route::prefix('tag')->group(function () {
    Route::get('/', Tag\IndexController::class)->name('admin.tag.index');
    Route::get('/create', Tag\CreateController::class)->name('admin.tag.create');
    Route::post('/', Tag\StoreController::class)->name('admin.tag.store');
    Route::get('/{tag}', Tag\ShowController::class)->name('admin.tag.show');
    Route::get('/{tag}/edit', Tag\EditController::class)->name('admin.tag.edit');
    Route::patch('/{tag}', Tag\UpdateController::class)->name('admin.tag.update');
    Route::delete('/{tag}', Tag\DestroyController::class)->name('admin.tag.destroy');

});

Route::prefix('post')->group(function (){
    Route::get('/',  Post\IndexController::class)->name('admin.post.index');
    Route::get('/create', Post\CreateController::class)->name('admin.post.create');
    Route::post('/', Post\StoreController::class)->name('admin.post.store');
    Route::get('/{post}', Post\ShowController::class)->name('admin.post.show');
    Route::get('/{post}/edit', Post\EditController::class)->name('admin.post.edit');
    Route::patch('/{post}', Post\UpdateController::class)->name('admin.post.update');
    Route::delete('/{post}', Post\DestroyController::class)->name('admin.post.destroy');

});

});

Auth::routes();

