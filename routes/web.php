<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/hi', [NewsController::class, 'hi']); // Страница приветствия

Route::get('/', [NewsController::class, 'index']);

Route::get('/categories', [NewsController::class, 'categories'])
    ->name('categories.list');

Route::get('/categories/news/{categories}', [NewsController::class, 'news'])
    ->name('news.list');;

// Route::get('/news/{id}', [NewsController::class, 'idNews']);

// Route::get('/admin', [
//     'uses' => 'Admin\IndexController@index'
// ]);
