<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return "aqui se mostraran todos los posts";
    }
    public function create(){
        return "aqui se mostrara el formulario para crear un post";
    }
    public function show($post){
         return "aqui se mostrara el post {$post}";
    }
}
