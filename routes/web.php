<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

//llamar a una funcion en especifico del controlador 
Route::get('/', [PostController::class,'index'])->name('posts.index');
//llamar a una funcion en especifico del controlador 
Route::get('posts/{post}', [PostController::class,'show'])->name('posts.show');
//llamar a una funcion en especifico del controlador 
Route::get('category/{category}', [PostController::class,'category'])->name('posts.category');
//llamar a una funcion en especifico del controlador 
Route::get('tag/{tag}', [PostController::class,'tag'])->name('posts.tag');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


