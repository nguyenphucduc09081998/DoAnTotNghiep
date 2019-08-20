<?php

use Illuminate\Database\Seeder;

class ProductsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\Products::class,5)->create();
    }
}
