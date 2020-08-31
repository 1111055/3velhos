<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title'     => $faker->text(50),
        'body'      => $faker->text(200),
        'path'      => "https://fakeimg.pl/775x515/",
        'category'  => $faker->randomDigit(),       
    ];
});
