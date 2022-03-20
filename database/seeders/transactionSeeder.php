<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class transactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactionhistory')->insert([
            'transaction' => 'Withdraw',
            'dateAndTimeofTheTransaction' => '02/14/2022'
            ]);
}
}
