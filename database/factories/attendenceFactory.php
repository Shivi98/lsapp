<?php

use Faker\Generator as Faker;

$factory->define(App\attendence::class, function (Faker $faker) {
    return [
        //
        'student_id' => function () {
            return factory(App\student::class)->create()->id;
                 },    
        'subject_id' => function () {
            return factory(App\subject::class)->create()->id;
                 }
    ];
});
