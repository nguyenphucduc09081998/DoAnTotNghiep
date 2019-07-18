<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Account;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        //
        'a_user' => $faker->username,
        'a_email' => $faker->unique()->safeEmail,
        'a_pass' => Hash::make(12345678),         
        
    ];
});
