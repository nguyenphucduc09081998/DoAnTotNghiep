<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesSeederTable::class);
        $this->call(AccountsSeederTable::class);
        $this->call(AccountsRolesSeederTable::class);
        $this->call(BrandsSeederTable::class);
        $this->call(ProductsSeederTable::class);
        $this->call(CustomersSeederTable::class);
        $this->call(InvoicesSeederTable::class);
        $this->call(InvoicesItemsSeederTable::class);
        $this->call(ServicesSeederTable::class);
    }
}
