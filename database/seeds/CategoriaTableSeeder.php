<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'titulo'   => 'Canecas, Frascos e Termos',
            'subtitulo' => 'Canecas',
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Casa e Decoração',
            'subtitulo' => 'Casa',
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Bonés e Chapeus',
            'subtitulo' => 'Bonés',
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Outlet',
            'subtitulo' => 'Outlet',
            'ordem' => '004',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Marcas',
            'subtitulo' => 'Marcas',
            'ordem' => '005',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Textil',
            'subtitulo' => 'Textil',
            'ordem' => '006',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Desporto e Aventura',
            'subtitulo' => 'Desporto',
            'ordem' => '007',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Presentes',
            'subtitulo' => 'Presentes',
            'ordem' => '008',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'titulo'   => 'Tecnologia e Acessórios',
            'subtitulo' => 'Tecnologia',
            'ordem' => '009',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
