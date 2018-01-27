<?php

use Faker\Generator as Faker;

$factory->define(App\time_table::class, function (Faker $faker) {
    return [
        //
        'subject_id' => function () {
            return factory(App\subject::class)->create()->id;
        },
        'start_time'=>$faker->time,
        'end_time'=>$faker->time,
        'clas'=>$faker->numberbetween(1,12),
        'section'=>$faker->randomelement($array=array('a','b','c')),

    ];
});
