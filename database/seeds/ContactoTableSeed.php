<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContactoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('contactos')->insert([
            'nome'       => 'Marco Mendes',
            'email'      => 'Teste@teste.pt',
            'telefone'   => '963258741',
            'assunto'    => 'Teste Assunto',
            'message'    => 'Teste Mensagem',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
