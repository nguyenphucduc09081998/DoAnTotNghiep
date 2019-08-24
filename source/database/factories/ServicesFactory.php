<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Services;
use Faker\Generator as Faker;

$factory->define(Services::class, function (Faker $faker) {
    return [
        //
        'service_name' =>$faker->name(),
        'short_description' =>$faker->name(),
        'description' =>$faker->name(),
    ];
});
