<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add 2 users to the database
        for($index = 1; $index <=2; $index++){
            User::create([
                'username' => "user$index",
                'email' => "user$index@gmail.com",
                'password' => bcrypt('Aa123456'),
                'active' => true
            ]);
        }
    }
}