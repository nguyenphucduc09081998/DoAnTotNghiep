<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Roles;
use Faker\Generator as Faker;

$factory->define(Roles::class, function (Faker $faker) {
    return [
        //
        'role_name' => $faker->name,
        'view_menu_name' => $faker->text($maxNbchars =20),
    ];
});
