<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class AccountTableSeeder extends Seeder
{
  
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // for( $i = 0; $i <= 2;$i++) {
        //     DB::table('account')->insert([
        //         'a_user' => Str::random(10),
        //         'a_email' => Str::random(10).'@gmail.com',
        //         'a_pass' => bcrypt('secret'),
        //     ]);
        // }
       
      factory(App\Model\Account::class, 5)->create();
           
    }
}
