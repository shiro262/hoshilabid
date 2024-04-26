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
                'name' => "Gladiator Nostalgia",
                'detail' =>
                "2-Piece: ATK +18%.\r\n
                4-Piece: If the wielder of this artifact set uses a Sword, Claymore or Polearm, increases their Normal Attack DMG by 35%.",
                'source' => "",
                'image' => "Gladiator Nostalgia.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
