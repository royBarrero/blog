<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'] );
Route::get('/posts',function(){
return  "aqui se mostraran los posts"; 
});
Route::get('/posts/create',function(){
    return "aqui se mostrara el formulario para crear un post";
});
Route::get('/posts/{post}',function($post){
    return "aqui se mostrara el post {$post}";
});
