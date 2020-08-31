<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PaginasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paginas')->insert([
            'nome'   => 'Home',
            'titulo' => 'titulo home',
            'ordem' => '001',
            'activo' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Sobre Nós',
            'titulo' => 'titulo about',
            'ordem' => '002',
            'activo' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Serviços',
            'titulo' => 'titulo Serviços',
            'ordem' => '003',
            'activo' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Contactos',
            'titulo' => 'titulo contactos',
            'ordem' => '004',
            'activo' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Processos',
            'titulo' => 'titulo processos',
            'ordem' => '005',
            'activo' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('paginas')->insert([
            'nome'   => 'Soluções',
            'titulo' => 'titulo soluções',
            'ordem' => '006',
            'activo' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('paginas')->insert([
            'nome'   => 'Termos e Condições',
            'titulo' => 'titulo Termos e Condições',
            'ordem' => '007',
            'activo' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);


        DB::table('paginas')->insert([
            'nome'   => 'Politica de Privacidade',
            'titulo' => 'titulo Politica de Privacidade',
            'ordem' => '008',
            'activo' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('paginas')->insert([
            'nome'   => 'Perguntas Ferquentes',
            'titulo' => ' Titulo Perguntas Ferquentes',
            'ordem' => '009',
            'activo' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
