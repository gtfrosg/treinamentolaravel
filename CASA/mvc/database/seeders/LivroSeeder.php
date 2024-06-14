<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
	$livro = [
            'titulo' => 'Quincas Borba',
            'autor'  => 'Machado de Assis',
            'isbn'   => '12345678'
	];
	Livro::create($livro);
	Livro::factory(150)->create();
    }
}
