<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Projects;
use Faker\Generator as Faker;

$factory->define(Projects::class, function (Faker $faker) {
    return [

        'title' => $faker->name,
        'description' => $faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),

    ];
});

