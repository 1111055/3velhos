<?php

use Illuminate\Database\Seeder;

class CategoriablogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Categoriablog::class, 11)->create();
    }
}
