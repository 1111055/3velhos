<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('produtos')->insert([
            'titulo'   => 'CHÁVENA SUBLIMAÇÃO BORNEL',
            'subtitulo' => ' ',
            'cod_art'   => '3893',
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'CHÁVENA SUBLIMAÇÃO HARNET',
            'subtitulo' => ' ',
            'cod_art'   => '3894',
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'CHÁVENA WILEM',
            'subtitulo' => ' ',
            'cod_art'   => '5571',
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'CHÁVENA LOUSA',
            'subtitulo' => ' ',
            'cod_art'   => '5291',
            'ordem' => '004',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'CHÁVENA WITAR',
            'subtitulo' => ' ',
            'cod_art'   => '2495',
            'ordem' => '005',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'CHÁVENA KULMER',
            'subtitulo' => ' ',
            'cod_art'   => '5836',
            'ordem' => '006',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('produtos')->insert([
            'titulo'   => 'JARRA MELTIK',
            'subtitulo' => ' ',
            'cod_art'   => '5732',
            'ordem' => '007',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);


    }
}
