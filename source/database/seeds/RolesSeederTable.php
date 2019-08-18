<?php

use Illuminate\Database\Seeder;
use Illuminate\Validation\Factory;

class RolesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\Roles::class,5)->create();
    }
}
