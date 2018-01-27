<?php

use Faker\Generator as Faker;

$factory->define(App\teach::class, function (Faker $faker) {
    return [
        //
        'tname'=>$faker->word,
        'class'=>$faker->numberbetween(1,12)
    ];
});
