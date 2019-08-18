<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Accounts;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Accounts::class, function (Faker $faker) {
    return [
        //
        'username' => $faker->username,
        'userpassword' => Hash::make(123456),
        'email' => $faker->unique()->safeEmail,
        'gender' =>$faker->biasedNumberBetween($min=0, $max=2),
        'address' =>$faker->address,         
        
    ];
});
