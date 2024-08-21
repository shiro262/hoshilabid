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
                'name' => "Belobog of the Architects",
                'detail' => "2-Piece Bonus: Meningkatkan DEF pengguna sebesar 15%. Ketika Effect Hit Rate 50% atau lebih tinggi, pengguna mendapat tambahan DEF 15%",
                'source' => "Simulated Universe: World 6",
                'image' => "Belobog of the Architects.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Broken Keel",
                'detail' => "2-Piece Bonus: Meningkatkan Effect RES pengguna sebesar 10%. Saat Effect RES pengguna mencapai 30% atau lebih, CRIT DMG semua tim meningkat sebesar 10%.",
                'source' => "Simulated Universe: World 7",
                'image' => "Broken Keel.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Celestial Differentiator",
                'detail' => "2-Piece Bonus: Meningkatkan CRIT DMG pengguna sebesar 16%. Ketika CRIT DMG pengguna saat ini mencapai 120% atau lebih, setelah memasuki pertempuran, CRIT Rate penggunanya meningkat sebesar 60% hingga akhir serangan pertama mereka.",
                'source' => "Simulated Universe: World 5",
                'image' => "Celestial Differentiator.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Firmament Frontline: Glamoth",
                'detail' => "2-Piece Bonus: Meningkatkan ATK pengguna sebesar 12%. Saat SPD pengguna sama dengan atau lebih tinggi dari 135/160, pengguna menimbulkan DMG 12%/18% lebih banyak.",
                'source' => "Simulated Universe: World 8",
                'image' => "Firmament Frontline Glamoth.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Fleet of the Ageless",
                'detail' => "2-Piece Bonus: Meningkatkan Max HP penggunanya sebesar 12%. Ketika SPD penggunanya mencapai 120 atau lebih, ATK semua tim meningkat sebesar 8%.",
                'source' => "Simulated Universe: World 3",
                'image' => "Fleet of the Ageless.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Inert Salsotto",
                'detail' => "2-Piece Bonus: Meningkatkan CRIT Rate penggunanya sebesar 8%. Ketika CRIT Rate pengguna saat ini mencapai 50% atau lebih, Ultimate dan Follow-Up DMG penggunanya meningkat sebesar 15%.",
                'source' => "Simulated Universe: World 6",
                'image' => "Inert Salsotto.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Izumo Gensei and Takama Divine Realm",
                'detail' => "2-Piece Bonus: Meningkatkan ATK pengguna sebesar 12%. Saat memasuki pertempuran, jika setidaknya dalam satu tim ada 1 yang mempunyai path yang sama dengan pengguna, maka CRIT Rate pengguna meningkat sebesar 12%.",
                'source' => "Simulated Universe: World 9",
                'image' => "Izumo Gensei and Takama Divine Realm.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Pan-Cosmic Commercial Enterprise",
                'detail' => "2-Piece Bonus: Meningkatkan Effect Hit Rate pengguna sebesar 10%. Sementara itu, ATK pengguna meningkat sebesar 25% dari Effect Hit Rate saat ini, hingga maksimum 25%.",
                'source' => "Simulated Universe: World 5",
                'image' => "Pan-Cosmic Commercial Enterprise.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Penacony, Land of the Dreams",
                'detail' => "2-Piece Bonus: Meningkatkan Energy Regeneration Rate pengguna sebesar 5%. Meningkatkan DMG sebesar 10% untuk semua tim yang bertipe sama dengan pengguna.",
                'source' => "Simulated Universe: World 8",
                'image' => "Penacony, Land of the Dreams.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rutilant Arena",
                'detail' => "2-Piece Bonus: Meningkatkan CRIT Rate pengguna sebesar 8%. Ketika CRIT Rate pengguna saat ini mencapai 70% atau lebih, Basic ATK dan Skill DMG pengguna meningkat sebesar 20%.",
                'source' => "Simulated Universe: World 7",
                'image' => "Rutilant Arena.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sigonia, the Unclaimed Desolation",
                'detail' => "2-Piece Bonus: Meningkatkan  CRIT Rate pengguna sebesar 4%. Saat target musuh dikalahkan, CRIT DMG pengguna meningkat sebesar 4%, dapat distack hingga 10 kali.",
                'source' => "Simulated Universe: World 9",
                'image' => "Sigonia, the Unclaimed Desolation.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Space Sealing Station",
                'detail' => "2-Piece Bonus: Meningkatkan ATK pengguna sebesar 12%. Saat SPD pengguna mencapai 120 atau lebih, ATK pengguna meningkat sebesar 12% tambahan.",
                'source' => "Simulated Universe: World 3",
                'image' => "Space Sealing Station.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sprightly Vonwacq",
                'detail' => "2-Piece Bonus: Meningkatkan Energy Regeneration Rate pengguna  sebesar 5%. Ketika SPD pengguna mencapai 120 atau lebih, Action pengguna maju segera sebesar 40% setelah memasuki pertempuran.",
                'source' => "Simulated Universe: World 4",
                'image' => "Sprightly Vonwacq.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Talia: Kingdom of Banditry",
                'detail' => "2-Piece Bonus: Meningkatkan Break Effect pengguna sebesar 16%. Saat SPD pengguna mencapai 145 atau lebih, Break Effect pengguna meningkat sebesar 20% tambahan.",
                'source' => "Simulated Universe: World 4",
                'image' => "Talia Kingdom of Banditry.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
