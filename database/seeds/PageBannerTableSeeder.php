<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PageBannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('pagebanners')->insert([
            'idpage' => '1',
            'idbanner' => '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
         DB::table('pagebanners')->insert([
            'idpage' => '1',
            'idbanner' => '2',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
         DB::table('pagebanners')->insert([
            'idpage' => '1',
            'idbanner' => '3',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
