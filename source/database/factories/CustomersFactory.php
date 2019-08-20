<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Customers;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Customers::class, function (Faker $faker) {
    return [
        //
        'customer_name'=>$faker->name,
        'customer_mail'=>$faker->unique()->safeEmail,
        'customer_address'=>$faker->address,
        'customer_phone' =>$faker->phoneNumber,
        //'customer_phone' =>Str::random(10),
    ];
});
