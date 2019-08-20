<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Invoices;
use App\Model\Customers;
use Faker\Generator as Faker;

$factory->define(Invoices::class, function (Faker $faker) {
    $customer = Customers::all()->pluck('id')->toArray();
   
    return [
        //
        'customer_id'=>$faker->randomElement($customer),
        'invoice_status'=>$faker->biasedNumberBetween($min=0,$max =2),
        'total_invoice'=>$faker->randomNumber(),
        'notes'=>$faker->name,
       
    ];
});
