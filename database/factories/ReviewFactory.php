<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
   return [
        'nome'       => $faker->text(10),
        'email'      => $faker->text(10),
        'website'    => $faker->text(10),
        'comentario' => $faker->text(300),   
        'article_id'  => $faker->randomDigit(),   
        'aprovado'   => 1,   
    ];
});
