<?php

use Illuminate\Database\Seeder;

class ServicesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\Services::class,5)->create();
    }
}
