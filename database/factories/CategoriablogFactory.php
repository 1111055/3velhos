<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categoriablog;
use Faker\Generator as Faker;

$factory->define(Categoriablog::class, function (Faker $faker) {
    return [
        'titulo'         => $faker->text(50),
        'descricao'      => $faker->text(200),
    ];
});
