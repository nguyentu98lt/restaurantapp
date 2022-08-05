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
        DB::table('users')->insert([
            'name' => 'TNU',
            'email' => 'nguyentu98lt@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'TNU2',
            'email' => 'nguyentu@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
        
    
}

