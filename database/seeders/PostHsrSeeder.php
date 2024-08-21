<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostHsrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_hsrs')->insert([
            [
                'title' => "Baru dapet Robin nih!",
                'detail' => "Disclaimer: ini hanya posting test ya!
                Baru dapet Robin nih!
                Kalian pada Gacha Robin ga?
                Rekomendasi Build nya dong!",
                'user_Id' => 2,
                'image' => "user1.png",
                'created_at' => now(7),
                'updated_at' => now(7),
            ],
        ]);
    }
}
