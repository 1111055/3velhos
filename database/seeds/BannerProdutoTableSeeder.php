<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BannerProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bannerprodutos')->insert([
            'banner_id'  => '4',
            'produto_id' => '2',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('bannerprodutos')->insert([
            'banner_id'  => '4',
            'produto_id' => '3',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    	DB::table('bannerprodutos')->insert([
            'banner_id'  => '5',
            'produto_id' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    	DB::table('bannerprodutos')->insert([
            'banner_id'  => '5',
            'produto_id' => '2',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
