<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
	public function index(){
	return view('livros.index');
	}
	public function show($isbn){
	    if($isbn=='123456')
	$livro = "Quincas Borba - Machado de Assis";
	    else
	$livro = "Livro Não indentigicado";

	return view('livros.show',[
	    'livro' => $livro,
	]);
	}
}
