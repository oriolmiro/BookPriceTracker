<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookStoreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookPriceUpdateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/books', [BookController::class,'APIindex']);
Route::get('/bookStores', [BookStoreController::class, 'APIindex']);
Route::get('/bookPriceUpdate/', [BookPriceUpdateController::class, 'takeISBM']);
Route::post('/bookPriceUpdate/', [BookPriceUpdateController::class,'updatePrice']);
Route::get('/createSitemap', [BookController::class, 'createSitemap']);
