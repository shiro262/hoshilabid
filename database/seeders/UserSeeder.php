<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'admin',
            'password'=>Hash::make('ilhamisthegod'),
            'role'=>'admin',
            'profile_picture' => 'ame.jpg',
            'recovery_answer'=>'Windah Basudara'
        ]);

        DB::table('users')->insert([
            'username'=>'user1',
            'password'=>Hash::make('testuser123'),
            'role'=>'member',
            'recovery_answer'=>'Windah Basudara'
        ]);

        DB::table('users')->insert([
            'username'=>'user2',
            'password'=>Hash::make('testuser321'),
            'role'=>'member',
            'profile_picture' => 'rushia2.jpg',
            'recovery_answer'=>'Windah Basudara'
        ]);
    }
}
