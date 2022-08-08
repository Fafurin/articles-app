<?php

use App\Http\Controllers\Api\V1\ArticleListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', ArticleListController::class);

