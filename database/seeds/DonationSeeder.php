<?php

use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('donations')->insert([
            [
                'user_id'     => '1',
                'request_id'    =>'1'
            ],
            ]
        );
    }
}
