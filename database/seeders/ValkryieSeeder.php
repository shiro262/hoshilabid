<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValkryieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valkryies')->insert([
            [
                'name' => "Silverwing N-EX",
                'type' => "Mech",
                'element' => "Ice",
                'role' => "DPS",
                'detail' => "Bronya Zaychik battlesuit, Ranged Ice DPS, Use Combo ATK and Ultimate to deploy a scatter barrier for burst ATKs and to boost DPS.",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 1,
                'weapon_alt1_hi3_id' => 1,
                'weapon_alt2_hi3_id' => 1,
                'stigmata_sign_id' => 1,
                'stigmata_alt_id' => 1,
                'image' => "Silverwing N EX.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
