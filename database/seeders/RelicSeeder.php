<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relics')->insert([
            [
                'name' => "Pioneer Diver of Dead Waters",
                'detail' =>
                "2-Piece Bonus: Increases DMG dealt to enemies with debuffs by 12%.\r\n
                4-Piece Bonus: Increases CRIT Rate by 4%. The wearer deals 8%/12% increased CRIT DMG to enemies with at least 2/3 debuffs. After the wearer inflicts a debuff on enemy targets, the aforementioned effects increase by 100%, lasting for 1 turn(s).",
                'source' => "Cavern of Corrosion: Path of Dreamdive",
                'image' => "Pioneer Diver of Dead Waters.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
