<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name'     => 'Farah',
                'email'    => 'farah@gmail.com',
                'password' =>bcrypt('12345678'),
            ],
            [
                'name'     => 'Hussien',
                'email'    => 'hussien@gmail.com',
                'password' =>bcrypt('12345678'),   
            ],
            [
                'name'     => 'Ali',
                'email'    => 'ali@gmail.com',
                'password' =>bcrypt('12345678'),   
            ],
        
    
            ]);
    }
}
