<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'titulo' => 'Home Top',
            'descricao' => 'Banner Topo ',
            'ordem' => '001',
            'activo' => '1',
            'produto' => '0',
            'activo' => '1',
            'width' => '1920',
            'height' => '560',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('banners')->insert([
            'titulo' => 'Home Middel',
            'descricao' => 'Banner do meio. ',
            'ordem' => '002',
            'activo' => '1',
            'produto' => '0',
            'width' => '570',
            'height' => '255',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
         DB::table('banners')->insert([
            'titulo' => 'Home Down',
            'descricao' => 'Banner do ultimo (Informações). ',
            'ordem' => '003',
            'activo' => '1',
            'produto' => '0',
            'width' => '570',
            'height' => '255',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('banners')->insert([
            'titulo' => 'Home Produtos Topo',
            'descricao' => 'Banner dos produtos de topo',
            'ordem' => '001',
            'activo' => '1',
            'produto' => '1',
            'width' => '570',
            'height' => '255',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('banners')->insert([
            'titulo' => 'Home Produtos Meio',
            'descricao' => 'Banner dos produtos Meio',
            'ordem' => '002',
            'activo' => '1',
            'produto' => '1',
            'width' => '570',
            'height' => '255',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
