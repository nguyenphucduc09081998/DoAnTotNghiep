<?php

use Illuminate\Database\Seeder;

class BrandsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\Brands::class,5)->create();
    }
}
