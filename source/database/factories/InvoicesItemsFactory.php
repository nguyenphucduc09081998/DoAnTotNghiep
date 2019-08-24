<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\InvoicesItems;
use App\Model\Products;
use App\Model\Invoices;
use Faker\Generator as Faker;

$factory->define(InvoicesItems::class, function (Faker $faker) {
    $invoice = Invoices::all()->pluck('id')->toArray();
    $product = Products::all()->pluck('id')->toArray();
    return [
        //
        'invoice_id' => $faker->randomElement($invoice),       
        'product_id' =>$faker->randomElement($product),
        'quantity' => $faker->randomDigit(),
    ];
});
