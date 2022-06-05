<?php

use App\Http\Controllers\api\v1\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



//user

// Route::prefix('/user')->group(function(){
//     Route::post('/login','\api\v1\LoginController@login');
//     Route::post('/login1','\api\v1\CategoryController@index');
// });
Route::post('/login', [LoginController::class, 'login']);


Route::middleware('auth:api')->group(function () {
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/show/{id}', [CategoryController::class, 'show']);
    Route::post('/category', [CategoryController::class, 'store']);
    Route::put('/category/{id}', [CategoryController::class, 'update']);
    Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

    Route::get('/article', [ArticleController::class, 'index']);
    Route::get('/article/show/{id}', [ArticleController::class, 'show']);
    Route::post('/article', [ArticleController::class, 'store']);
    Route::put('/article/{id}', [ArticleController::class, 'update']);
    Route::delete('/article/{id}', [ArticleController::class, 'destroy']);
 
});

