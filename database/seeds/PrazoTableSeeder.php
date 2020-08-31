<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PrazoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('prazos')->insert([
            'titulo'    => 'Lento',
            'descricao' => 'Entrega em 10 dias',
            'dias'      => 10,
            'ordem'     => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('prazos')->insert([
            'titulo'    => 'Meio rapido',
            'descricao' => 'Entrega em 5 dias',
            'dias'      => 5,
            'ordem'     => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('prazos')->insert([
            'titulo'    => 'Rapido',
            'descricao' => 'Entrega em 2 dias',
            'dias'      => 2,
            'ordem'     => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
