<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrcamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
         DB::table('orcamentos')->insert([
            'nome'       => 'Marco Mendes',
            'email'      => 'marco@marco.pt',
            'empresa'    => 'feelbit',
            'telemovel'  => '999333444',
            'obs'       => 'apenas para testes',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    
    }
}
