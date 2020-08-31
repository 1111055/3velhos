<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('socials')->insert([
            'menomonica' => 'fb',
            'nome' => 'Facebook',
            'ordem' => '001',
            'class' => 'fab fa-facebook',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('socials')->insert([
            'menomonica' => 'tw',
            'nome' => 'Twitter',
            'ordem' => '002',
            'class' => 'fab fa-twitter',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('socials')->insert([
            'menomonica' => 'lk',
            'nome' => 'Linkedin',
            'ordem' => '003',
            'class' => 'fab fa-linkedin',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('socials')->insert([
            'menomonica' => 'it',
            'nome' => 'Instagram',
            'ordem' => '004',
            'class' => 'fab fa-instagram',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('socials')->insert([
            'menomonica' => 'pt',
            'nome' => 'Pinterest',
            'ordem' => '005',
            'class' => 'fab fa-pinterest',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
