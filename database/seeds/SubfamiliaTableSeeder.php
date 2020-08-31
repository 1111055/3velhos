<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SubfamiliaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subfamilias')->insert([
            'titulo'   => 'Polos',
            'subtitulo' => 'Polos de Mulher',
            'familia_id' => 1,
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('subfamilias')->insert([
            'titulo'   => 'Polos',
            'subtitulo' => 'Polos de homem',
            'familia_id' => 2,
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('subfamilias')->insert([
            'titulo'   => 'Criança',
            'subtitulo' => 'Polos de Criança',
            'familia_id' => 3,
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
