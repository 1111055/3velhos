<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'titulo'   => 'Branco',
            'subtitulo' => 'Cor Branca ',
            'cor' => '#FFFFFF',
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('colors')->insert([
            'titulo'   => 'Preto',
            'subtitulo' => 'Cor Preta ',
            'cor' => '#000000',
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
         DB::table('colors')->insert([
            'titulo'   => 'Amarelo',
            'subtitulo' => 'Cor Amarela ',
            'cor' => '#FFF000',
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
         DB::table('colors')->insert([
            'titulo'   => 'Vermelho',
            'subtitulo' => 'Cor Vermelho ',
            'cor' => '#FF0000',
            'ordem' => '004',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
         DB::table('colors')->insert([
            'titulo'   => 'Azul',
            'subtitulo' => 'Cor Azul ',
            'cor' => '#009EFF',
            'ordem' => '005',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('colors')->insert([
            'titulo'   => 'Verde',
            'subtitulo' => 'Cor Verde ',
            'cor' => '#27FF00',
            'ordem' => '006',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
