<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Products;
use App\Model\Brands;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    $brand = Brands::all()->pluck('id')->toArray();
    return [
        //
        'product_name'=>$faker->name,
        'short_description'=>$faker->name,
        'description'=>$faker->name,
        'brand_id' =>$faker->randomElement($brand),

    ];
});
