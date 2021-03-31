<?php

use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('requests')->insert([
            [
                'first_name'     => 'Ali',
                'last_name'    => 'Hazimeh',
                'phone_nb' =>'12345678',
                'age' =>25,
                'user_id'  =>1,
                'reason'   =>'reason',
                'hospital'   =>'hospital',
                'blood_type_id'   =>1,
            
            ],
            ]
        );
    }
}
