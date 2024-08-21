<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostGenshinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_genshins')->insert([
            [
                'title' => "Baru Selesaiin Event Baru nih!",
                'detail' => "Disclaimer: ini hanya posting test ya!
                Baru selesaiin event ini!
                Menurut kalian gimana cerita nya?
                Menurut aku sih seru!",
                'user_Id' => 2,
                'image' => "user1.png",
                'created_at' => now(7),
                'updated_at' => now(7),
            ],
        ]);
    }
}
