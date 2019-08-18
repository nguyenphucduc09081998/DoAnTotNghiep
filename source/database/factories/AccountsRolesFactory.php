<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\AccountsRoles;
use Faker\Generator as Faker;
use App\Model\Roles;
use App\Model\Accounts;
$factory->define(AccountsRoles::class, function (Faker $faker) {
    $account = Accounts::all()->pluck('id')->toArray();
    $role = Roles::all()->pluck('id')->toArray();
    return [
        //
        'account_id' => $faker->randomElement($account),
        'role_id' => $faker->randomElement($role),
    ];
});
