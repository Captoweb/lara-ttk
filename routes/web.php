<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});

// роут главной страницы
Route::get('/', [BooksController::class, 'index']);

Route::get('/admin', [BooksController::class, 'admin'])->name('admin');

Route::get('/books/create_author', [BooksController::class, 'create_author'])->name('create_author');

Route::post('/store_author', [BooksController::class, 'store_author'])->name('store_author');


Route::resource('books', BooksController::class);




