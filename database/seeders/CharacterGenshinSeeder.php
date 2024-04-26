<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterGenshinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('character_genshins')->insert([
            [
                'name' => "Furina",
                'type' => "Sword",
                'element' => "Hydro",
                'role' => "Sub-DPS",
                'detail' => "Furina de Fontaine is a playable Hydro character in Genshin Impact who can alternate between Pneuma and Ousia alignments.",
                'rarity' => "5star",
                'tier' => "S+",
                'weaponhgenshin_id' => 1,
                'artifact_id' => 1,
                'image' => "Furina.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
