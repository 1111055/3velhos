<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
         DB::table('menus')->insert([
            'menu' => 'Top',
            'descricao' => 'Menu do Topo de página.',
            'ordem' => '001',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('menus')->insert([
            'menu' => 'Footer',
            'descricao' => 'Menu do fim de página.',
            'ordem' => '002',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('menus')->insert([
            'menu' => 'Home',
            'descricao' => 'Menu da página principal.',
            'submenu' => '1',
            'ordem' => '001',
            'link' => '#',
            'path' => 'home',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('menus')->insert([
            'menu' => 'Produtos',
            'descricao' => 'Menu da Listagem de Produtos.',
            'submenu' => '1',
            'ordem' => '002',
            'link' => '#',
            'path' => 'shop',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('menus')->insert([
            'menu' => 'Sobre Nós',
            'descricao' => 'Menu página sobre nós.',
            'submenu' => '1',
            'ordem' => '003',
            'link' => '#',
            'path' => 'about',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('menus')->insert([
            'menu' => 'Contactos',
            'descricao' => 'Menu página de contactos.',
            'submenu' => '1',
            'ordem' => '004',
            'link' => '#',
            'path' => 'contactos',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);


        DB::table('menus')->insert([
            'menu' => 'Textil',
            'descricao' => 'Menu textil.',
            'submenu' => '4',
            'ordem' => '004',
            'link' => '#',
            'path' => 'textil',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);


        DB::table('menus')->insert([
            'menu' => 'Termos e Condições',
            'descricao' => 'Termos e Condições.',
            'submenu' => '2',
            'ordem' => '001',
            'link' => '#',
            'path' => 'terms',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('menus')->insert([
            'menu' => 'Politica de Privacidade',
            'descricao' => 'Politica de Privacidade',
            'submenu' => '2',
            'ordem' => '002',
            'link' => '#',
            'path' => 'policy',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('menus')->insert([
            'menu' => 'Perguntas Frequentes',
            'descricao' => 'Perguntas Frequentes',
            'submenu' => '2',
            'ordem' => '003',
            'link' => '#',
            'path' => 'question',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);





      
    }
}
