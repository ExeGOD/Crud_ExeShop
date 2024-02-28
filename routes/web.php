<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/create', [CreateController::class, 'create']);