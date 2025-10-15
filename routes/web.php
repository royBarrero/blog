<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeController::class );

Route::get('/posts',[PostController::class,'index']);

Route::get('/posts/create',[PostController::class , 'create']);

Route::get('/posts/{post}',[PostController::class,'show']);
