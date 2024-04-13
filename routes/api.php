<?php

use App\Http\Controllers\Api\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('articles', [ArticleController::class, 'index'])->name('api.articles.index');
Route::get('articles/{article}', [ArticleController::class, 'show'])->name('api.articles.show');
Route::post('articles', [ArticleController::class, 'create'])->name('api.articles.create');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
