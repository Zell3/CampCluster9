<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class basicFormSeeder extends Seeder
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
        Carbon::setLocale('th');
        // Generate sample data for your table
        $data = [
            [
                'bdu_ro_id' => 1,
                'bdu_form_id' => 1,
                'bdu_adu_id' => NULL,
                'bdu_name' => "Pornchai",
                'bdu_lastname' => "Lortae",
                'bdu_phone' => "091-868-5148",
                'bdu_email' => "Sudlor@gmail.com",
                'bdu_language_program' => "Java, Lua",
                'bdu_additional_data' => "ผมหล่อสุดใน SE",
                'bdu_resume_name' => NULL,
                'bdu_working' => "University",
                'bdu_talent' => "Badminton",
                'bdu_education' => "BUU",
                'bdu_language' => "Chinese",
                'bdu_skill' => "Fullstack",
                'bdu_performance' => "NSC-23",
                'bdu_register_date' => Carbon::now('Asia/Bangkok'),
            ]
            // Add more data as needed
        ];

        // Insert data into the database
        DB::table('basic_data_users')->insert($data);
    }
}
