<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LightconeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lightcones')->insert([
            [
                'name' => "Along the Passing Shore",
                'path' => "Nihility",
                'rarity' => "5star",
                'detail' =>
                "Steerer\r\n
                Increases the wearer's CRIT DMG by 36%. When the wearer hits the enemy target, inflicts Mirage Fizzle on the enemy, lasting for 1 turn. This effect can be triggered 1 time against each target for every attack the wearer launches. The wearer deals 24% more DMG to targets afflicted with Mirage Fizzle, and DMG from the wearer's Ultimate additionally increases by 24%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058\r\n
                Base ATK (Lv.1-80): 28 - 635\r\n
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Event Warp",
                'image' => "Along the Passing Shore.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
