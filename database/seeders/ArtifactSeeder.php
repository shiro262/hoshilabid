<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtifactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artifacts')->insert([
            [
                'name' => "Gladiator Finale",
                'detail' =>
                "2-Piece: ATK +18%.\r\n
                4-Piece: If the wielder of this artifact set uses a Sword, Claymore or Polearm, increases their Normal Attack DMG by 35%.",
                'source' =>
                "Dropped by Weekly Bosses at World Level 2+\r\n
                Dropped by Normal Bosses at World Level 3+\r\n
                Domain Reliquary: Tier II",
                'image' => "Gladiator Finale.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Golden Troupe ",
                'detail' =>
                "2-Piece: Increases Elemental Skill DMG by 20%.\r\n
                4-Piece: Increases Elemental Skill DMG by 25%. Additionally, when not on the field, Elemental Skill DMG will be further increased by 25%. This effect will be cleared 2s after taking the field.",
                'source' => "Denouement of Sin",
                'image' => "Golden Troupe.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
