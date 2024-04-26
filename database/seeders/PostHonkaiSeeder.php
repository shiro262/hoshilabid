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
                'title' => "Should you pull on Herrscher of Truth Banner",
                'detail' => "If you have enouch crystal/ticket to get her and all her equipment set, both weapon and stigmata\r\n
                because she won't be good enough without her full set equipment in my opinion",
                'user_Id' => 2,
                'image' => "blogtest1.jpg",
                'created_at' => now(7),
                'updated_at' => now(7),
            ],
            [
                'title' => "Alternative Build for Herrscher of Truth!",
                'detail' => "You successfully pull her but it cost all your crystal?\r\n
                Don't worry, i'm here to share my budget build\r\n
                Weapon: Star of Eden\r\n
                Stigmata set: Robert Peary set\r\n
                That's my budget build for Herrscher of Trutch, hope it's help you!",
                'user_Id' => 2,
                'image' => "blogtest1-2.png",
                'created_at' => now(7),
                'updated_at' => now(7),
            ],
        ]);
    }
}
