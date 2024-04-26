<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponGenshinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weapon_genshins')->insert([
            [
                'name' => "Splendor of Tranquil Waters",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Dawn and Dusk by the Lake\r\n
                When the equipping character's current HP increases or decreases, Elemental Skill DMG dealt will be increased by 8% for 6s. Max 3 stacks. This effect can be triggered once every 0.2s. When other party members' current HP increases or decreases, the equipping character's Max HP will be increased by 14% for 6s. Max 2 stacks. This effect can be triggered once every 0.2s. The aforementioned effects can be triggered even if the wielder is off-field.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542\r\n
                2nd Stat (Lv.1-90): 19.2% - 88.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Splendor of Tranquil Waters.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
