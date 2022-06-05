<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/article', [App\Http\Controllers\Article\IndexArticleController::class, 'index'])->name('article');
// Route::get('/article/show/{id}', [App\Http\Controllers\Article\IndexArticleController::class, 'show'])->name('article');
// Route::get('/article/{id}', [App\Http\Controllers\Article\IndexArticleController::class, 'destroy'])->name('article');

// Route::get('/category', [App\Http\Controllers\Category\IndexCategoryController::class, 'index'])->name('category');
// Route::get('/category/show/{id}', [App\Http\Controllers\Category\IndexCategoryController::class, 'show'])->name('category');
// Route::get('/category/{id}/edit', [App\Http\Controllers\Category\IndexCategoryController::class, 'edit'])->name('category');
// Route::put('/category/edit/{id}', [App\Http\Controllers\Category\IndexCategoryController::class, 'update'])->name('category');
// Route::delete('/category/{id}', [App\Http\Controllers\Category\IndexCategoryController::class, 'destroy'])->name('category');
Route::resource('article', 'App\Http\Controllers\Article\IndexArticleController');
Route::resource('category', 'App\Http\Controllers\Category\IndexCategoryController');

