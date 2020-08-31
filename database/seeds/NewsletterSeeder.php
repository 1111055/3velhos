<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('newsletters')->insert([
            'email'      => 'teste@teste.pt',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
