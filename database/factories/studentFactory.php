<?php

use Faker\Generator as Faker;

$factory->define(App\student::class, function (Faker $faker) {
    return [
        //
        'sname'=>$faker->word,
        'class'=>$faker->numberbetween(1,12)

    ];
});
