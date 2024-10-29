<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Add Users
         *
         */
        if (User::where('email', '=', 'admin@builtbypixel.com')->first() === null) {

            $newUser = User::create([
                'name' => 'BuiltByPixel',
                'email' => 'admin@builtbypixel.com',
                'password' => bcrypt('adminadmin'),
            ]);

        }
    }
}