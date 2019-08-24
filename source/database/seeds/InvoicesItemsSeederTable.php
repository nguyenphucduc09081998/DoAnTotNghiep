<?php

use Illuminate\Database\Seeder;

class InvoicesItemsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\InvoicesItems::class,5)->create();
    }
}
