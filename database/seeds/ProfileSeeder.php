<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profiles')->insert([
            [
                'lat'     => '10',
                'lon'    => '10',
                'first_name' =>'Ali',
                'last_name' =>'Hazimeh',
                'phone_nb'  =>'12345678',
                'age'   =>26,
                'gender'   =>0,
                'user_id'   =>1,
                'blood_type_id'   =>1,
            
            ],
            ]
        );
    }
}
