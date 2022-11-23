<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Models\Category;
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

Route::redirect('/', '/books');
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book:id}', [BookController::class, 'detail']);


Route::get('/category/{category:id}', [CategoryController::class, 'index']);


Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/publishers/{publisher:id}', [PublisherController::class, 'detail']);


Route::get('/contact', function(){
    $categories = Category::all();
    return view('contact', compact('categories'));
});