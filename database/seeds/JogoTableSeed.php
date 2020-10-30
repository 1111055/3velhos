<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JogoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('Jogos')->insert([
            'eq1' => 'PSG',
            'eq2' => 'FC Bayern Munique ',
            'data_encontro' => Carbon::now(),
            'situacao' => 0,
            'resultado' => '0',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
            'hora' =>  '09:00 PM'
        ]);
    }
}
