<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            'titulo'   => 'Tamanho',
            'subtitulo' => 'Tamanho XS ',
            'tamanho' => 'xs',
            'ordem' => '001',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('sizes')->insert([
            'titulo'   => 'Tamanho',
            'subtitulo' => 'Tamanho S ',
            'tamanho' => 's',
            'ordem' => '002',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('sizes')->insert([
            'titulo'   => 'Tamanho',
            'subtitulo' => 'Tamanho M ',
            'tamanho' => 'm',
            'ordem' => '003',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('sizes')->insert([
            'titulo'   => 'Tamanho',
            'subtitulo' => 'Tamanho L ',
            'tamanho' => 'l',
            'ordem' => '004',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('sizes')->insert([
            'titulo'   => 'Tamanho',
            'subtitulo' => 'Tamanho XL ',
            'tamanho' => 'xl',
            'ordem' => '005',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('sizes')->insert([
            'titulo'   => 'Tamanho',
            'subtitulo' => 'Tamanho XXL ',
            'tamanho' => 'xxl',
            'ordem' => '006',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
