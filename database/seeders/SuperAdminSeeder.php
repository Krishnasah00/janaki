<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                'name' => 'Super Admin',
                'email' => 'krishna.cltech@gmail.com',
                'password' => bcrypt('123456'),
                'address' => 'Arnama, Siraha',
                'created_at' => Carbon::now(),
                'email_verified_at' => Carbon::now(),
                'first_time_login' => Carbon::now(),
            ],
        ]);
    }
}
