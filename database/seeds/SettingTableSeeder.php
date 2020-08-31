<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('settings')->insert([
            'nome' => 'FeelBit',
            'contacto1' => '912 747706',
            'contacto2' => '912 747706',
            'rua' => 'RuaDa Industria, 15',
            'localidade' => 'Lagoa',
            'codigopostal' => '4770-287',
            'cidade' => 'Vila Nova de Famalicao',
            'latitude' => ' ',
            'longitude' => ' ',
            'email1' =>  'geral@feelbit.pt',
            'email2' =>  'geral@feelbit.pt',
            'website' =>  'www.feelbit.pt'
        ]);

    }
}
