<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookStoreController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/books/{title}/{author}/{id}', [BookController::class,'show'])->name('books.show');
Route::get('books', [BookController::class,'index'])->name('books.index');


Route::get('/test', function () {
    return view('wireframe.testhome');
});
Route::get('/testsearch', function () {
    return view('wireframe.testsearch');
});
Route::get('/testbook', function () {
    return view('wireframe.testbook');
});
Route::get('/books/{name}/{id}',[BookController::class,'index'])->name('book.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
