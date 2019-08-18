<?php

use Illuminate\Database\Seeder;

class AccountsRolesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\AccountsRoles::class, 5)->create();
        //
    }
}
