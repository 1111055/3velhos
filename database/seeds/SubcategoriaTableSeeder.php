<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SubcategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('subcategorias')->insert([
            'titulo'   => 'Canecas',
            'subtitulo' => 'Canecas',
            'categoria_id' => 1,
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('subcategorias')->insert([
            'titulo'   => 'Frascos',
            'subtitulo' => 'Frascos',
            'categoria_id' => 1,
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('subcategorias')->insert([
            'titulo'   => 'Termos',
            'subtitulo' => 'Termos',
            'categoria_id' => 1,
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
