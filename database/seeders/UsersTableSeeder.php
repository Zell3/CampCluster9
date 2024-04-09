<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate sample data for your table
        $data = [
            [
                'email' => 'admin@gmail.com',
                'hr_id' => 1,
                'hr_username' => 'admin',
                'password' => Hash::make('admin'), // Hashing password
            ]
            // Add more data as needed
        ];

        // Insert data into the database
        DB::table('hrs')->insert($data);
    }
}
