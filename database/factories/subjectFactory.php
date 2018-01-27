<?php

use Faker\Generator as Faker;

$factory->define(App\subject::class, function (Faker $faker) {
    return [
        //
        'id' => $faker->unique()->word,
        'sub_name' =>$faker->word,
        'clas'=>$faker->numberbetween(1,12),
        'teach_id' => function () {
            return factory(App\teach::class)->create()->id;
        }
        

    ];
});
