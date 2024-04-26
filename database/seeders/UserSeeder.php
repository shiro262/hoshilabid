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
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'role'=>'admin'
        ]);

        DB::table('users')->insert([
            'username'=>'user1',
            'email'=>'user1@gmail.com',
            'password'=>Hash::make('testuser123'),
            'role'=>'member'
        ]);
    }
}
