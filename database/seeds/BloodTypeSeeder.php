<?php

use Illuminate\Database\Seeder;

class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blood_types')->insert([
            [
                'type'     => 'O-',
            
            ],
            [
                'type'     => 'O+',
            
            ],
            [
                'type'     => 'A-',
            
            ],
            [
                'type'     => 'A+',
            
            ],
            [
                'type'     => 'B-',
            
            ],
            [
                'type'     => 'B+',
            
            ],
            [
                'type'     => 'AB-',
            
            ],
            [
                'type'     => 'AB+',
            
            ],
            ]
        );
    }
}
