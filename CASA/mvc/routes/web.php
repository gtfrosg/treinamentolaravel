<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::get('/Livros',[LivroController::class,'index']);
Route::get('/Livros/{isbn}',[LivroController::class,'show']);
