<?php

use Illuminate\Database\Seeder;
use App\Classificacao;
use Carbon\Carbon;
class ClassificacaoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('Classificacaos')->insert([
            'user_id' => 1,
            'pontos' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);


	  	DB::table('Classificacaos')->insert([
            'user_id' => 2,
            'pontos' => 4,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    	DB::table('Classificacaos')->insert([
            'user_id' => 3,
            'pontos' => 1,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

	   
    }
}
