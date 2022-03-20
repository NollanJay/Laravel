<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
        'name' => 'John Smith',
        'password' => 'passwordsample',
        'balance' => '5000'
        ]);
    }
}
