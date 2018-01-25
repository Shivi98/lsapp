<?php

use Faker\Generator as Faker;

$factory->define(App\attendence::class, function (Faker $faker) {
    return [
        // Isme bhi likhle kuch bc 
        'student_id' => $factory->randomDigitNotNull,
        'subject_id' => 'secret'
    ];
});
