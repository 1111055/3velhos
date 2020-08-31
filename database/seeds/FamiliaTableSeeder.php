<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FamiliaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('familias')->insert([
            'titulo'   => 'Mulher',
            'subtitulo' => 'Teste Mulher',
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('familias')->insert([
            'titulo'   => 'Homem',
            'subtitulo' => ' Material de homem',
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('familias')->insert([
            'titulo'   => 'Criança',
            'subtitulo' => 'Familia das Crianças',
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
