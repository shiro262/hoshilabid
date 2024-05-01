<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StigmataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stigmatas')->insert([
            [
                'name' => "Wings of Reason",
                'detail' => "Bronya: N-EX (T), Bronya: N-EX (M), & Bronya: N-EX (B)
                Total Max Stats:
                HP : 1318 ATK 176 .DAN SETERUSNYA...",
                'source' => "Silverwing: N-EX debut expansion supply bonus",
                'image' => "Wings of Reason.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
