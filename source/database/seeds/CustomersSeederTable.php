<?php

use Illuminate\Database\Seeder;

class CustomersSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\Customers::class,5)->create();
    }
}
