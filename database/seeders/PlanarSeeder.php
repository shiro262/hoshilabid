<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planars')->insert([
            [
                'name' => "Izumo Gensei and Takama Divine Realm",
                'detail' => "2-Piece Bonus: Increases the wearer's ATK by 12%. When entering battle, if at least one other ally follows the same Path as the wearer, then the wearer's CRIT Rate increases by 12%.",
                'source' => "Simulated Universe: World 9",
                'image' => "Izumo Gensei and Takama Divine Realm.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
