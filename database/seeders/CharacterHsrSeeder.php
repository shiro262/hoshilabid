<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterHsrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('character_hsrs')->insert([
            [
                'name' => "Acheron",
                'path' => "Nihility",
                'element' => "Lightning",
                'role' => "DPS",
                'detail' => "A drifter claiming to be a Galaxy Ranger. Her true name is unknown, and she walks the cosmos alone, carrying with her a long sword.
                Though aloof and taciturn, her blade flicks out like lashing lightning. And yet, she always strikes with her scabbard, never drawing the sword free.",
                'rarity' => "5star",
                'tier' => "S+",
                'lightcone_id' => 1,
                'relic_id' => 1,
                'planar_id' => 1,
                'image' => "Acheron.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
