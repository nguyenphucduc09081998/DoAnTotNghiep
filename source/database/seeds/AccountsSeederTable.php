<?php

use Illuminate\Database\Seeder;

class AccountsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Accounts::class, 5)->create();
        //
    }
}
