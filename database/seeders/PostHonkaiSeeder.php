<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostHonkaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_honkais')->insert([
            [
                'title' => "Alternative Build untuk Herrscher of Truth!",
                'detail' => "Disclaimer: ini hanya posting test ya!
                Kalian berhasil dapetin HoTruth tapi crystalnya abis?
                Jangan khawatir, disini aku bakal share build budgetku!
                Weapon: Star of Eden
                Stigmata set: Robert Peary set
                Ini dia semoga membantu",
                'user_Id' => 2,
                'image' => "blogtest1-2.png",
                'created_at' => now(7),
                'updated_at' => now(7),
            ],
        ]);
    }
}
