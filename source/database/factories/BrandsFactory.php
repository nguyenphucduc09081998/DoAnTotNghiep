<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Brands;
use Faker\Generator as Faker;

$factory->define(Brands::class, function (Faker $faker) {
    return [
        //
        'brand_name'=>$faker->name,
        'country'=>$faker->country,
        'short_description'=>$faker->name,
        'description'=>$faker->name,
       
    ];
});
