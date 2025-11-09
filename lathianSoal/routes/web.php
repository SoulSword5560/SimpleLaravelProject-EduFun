<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/home', [ArticleController::class, 'index']);
Route::get('/', [ArticleController::class, 'index']);

Route::get('/category/{category}', [ArticleController::class, 'showByCategory']);

Route::get('/article/{id}', [ArticleController::class, 'show']);
Route::get('/author/{id}', [WriterController::class, 'show']);
Route::get('/writers', [WriterController::class, 'index']);

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/popular', [ArticleController::class, 'popular']);