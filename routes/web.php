<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/hi', [NewsController::class, 'hi']); // Страница приветствия

Route::get('/test', [NewsController::class, 'test'])
    ->name('test');

Route::get('/', [NewsController::class, 'index'])
    ->name('index');

Route::get('/categories', [NewsController::class, 'categories'])
    ->name('categories/list');

Route::get('/categories/news/{categories}', [NewsController::class, 'news'])
    ->name('news/list');

Route::get('/admin', [AdminController::class, 'add'])
    ->name('admin');

Route::get('/admin/store', [AdminController::class, 'store'])
    ->name('admin/store');


// Route::get('/news/{id}', [NewsController::class, 'idNews']);

// Route::get('/admin', [
//     'uses' => 'Admin\IndexController@index'
// ]);
