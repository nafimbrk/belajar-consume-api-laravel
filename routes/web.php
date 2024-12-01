<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('fetch', [QuestionController::class, 'fetchInsert']);
Route::get('/', [QuestionController::class, 'show']);
