<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::resource('/Livros',LivroController::class);
