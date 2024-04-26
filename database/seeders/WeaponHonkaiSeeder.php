<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponHonkaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weapon_honkais')->insert([
            [
                'name' => "Falcon Flare: FINAL",
                'type' => "Canon",
                'rarity' => "5star",
                'detail' =>
                "ATK = 300\r\n
                CRT = 17\r\n
                Brought to you by La Vita Nuova, St. 1504 Labs. A passion project by director Nagamitsu 18th, this gun is made of soulium and then machine gilded to give a charming, aged look. It is currently on display at E.T. Studio's exhibition hall. It is cared for by two employees, cleaned once a month, with maintenance every other month. Feel free to come check it out.",
                'stats' => "300 ATK",
                'source' => "Foundry",
                'image' => "Falcon Flare FINAL.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
