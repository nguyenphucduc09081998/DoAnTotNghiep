<?php

use Illuminate\Database\Seeder;

class InvoicesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\Invoices::class,5)->create();
    
    }
}
