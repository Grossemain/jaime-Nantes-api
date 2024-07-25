<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'user_name' => 'admin',
                'first_name'=>'romain',
                'last_name'=>'maillet',
                'email' => 'admin@example.com',
                'password' => Hash::make('azertyuiop'),
                'email_verified_at' => now(),
            ],
            [
                'user_name' => 'user1',
                'first_name'=>'john',
                'last_name'=>'doe',
                'email' => 'user@example.com',
                'password' => Hash::make('azertyuiop'),
                'email_verified_at' => now(),
            ],
        ]);
        User::factory(3)->create();
    }
}
