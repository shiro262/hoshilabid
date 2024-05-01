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
                'name' => "Band of Sizzling Thunder",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Lightning DMG sebesar 10%.
                4-Piece Bonus: Ketika pengguna menggunakan skillnya, meningkatkan ATK nya sebesar 20% untuk 1 turn(s).",
                'source' => "Cavern of Corrosion: Path of Holy Hymn",
                'image' => "Band of Sizzling Thunder.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Champion of Streetwise Boxing",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Physical DMG sebesar 10%.
                4-Piece Bonus: Setelah pengguna melakukan serangan atau terkena pukulan, meningkatkan ATK sebesar 5% hingga pertempuran selesai. Efek ini dapat di stack hingga 5 kali.",
                'source' => "Cavern of Corrosion: Path of Jabbing Punch",
                'image' => "Champion of Streetwise Boxing.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Eagle of Twilight Line",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Wind DMG sebesar 10%.
                4-Piece Bonus: Setelah pengguna menggunakan Ultimatenya, Action akan maju segera sebesar 25%.",
                'source' => "Cavern of Corrosion: Path of Gelid Wind",
                'image' => "Eagle of Twilight Line.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Firesmith of Lava-Forging",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Fire DMG sebesar 10%.
                4-Piece Bonus: Meningkatkan Skill DMG pengguna sebesar 12%. Setelah mengaktifkan Ultimate, meningkatkan Fire DMG pengguna sebesar 12% untuk serangan selanjutnya.",
                'source' => "Cavern of Corrosion: Path of Conflagration",
                'image' => "Firesmith of Lava-Forging.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Genius of Brilliant Stars",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Quantum DMG sebesar 10%.
                4-Piece Bonus: Ketika pengguna memberi DMG ke target musuh, mengurangi 10% DEF musuh. Jika target musuh memiliki Quantum Weakness, tambahan pengurangan 10% DEF.",
                'source' => "Cavern of Corrosion: Path of Providence",
                'image' => "Genius of Brilliant Stars.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Guard of Wuthering Snow",
                'detail' =>
                "2-Piece Bonus: Mengurangi DMG yang diterima sebesar 8%.
                4-Piece Bonus: Pada turn awal, jika HP pengguna sama atau kurang dari 50%, Memulihkan HP sebesar 8% dari HP Maksimum pengguna dan memulihkan 5 Energy.",
                'source' => "Cavern of Corrosion: Path of Providence",
                'image' => "Guard of Wuthering Snow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hunter of Glacial Forest",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Ice DMG sebesar 10%.
                4-Piece Bonus: Setelah pengguna menggunakan Ultimatenya, CRIT DMG pengguna meningkat sebesar 25% untuk 2 turn(s).",
                'source' => "Cavern of Corrosion: Path of Gelid Wind",
                'image' => "Hunter of Glacial Forest.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Knight of Purity Palace",
                'detail' =>
                "2-Piece Bonus: Meningkatkan DEF sebesar 15%.
                4-Piece Bonus: Meningkatkan DMG maksimum yang dapat diserap oleh Shield yang dibuat pengguna sebesar 20%.",
                'source' => "Cavern of Corrosion: Path of Holy Hymn",
                'image' => "Knight of Purity Palace.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Longevous Disciple",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Max HP sebesar 12%.
                4-Piece Bonus: Ketika pengguna terkena pukulan atau HP pengguna dikonsumsi oleh timnya sendiri, CRIT RATE pengguna akan meningkat sebesar 8% untuk 2 turn(s) dan dapat di stack hingga 2 kali.",
                'source' => "Cavern of Corrosion: Path of Elixir Seekers",
                'image' => "Longevous Disciple.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Messenger Traversing Hackerspace",
                'detail' =>
                "2-Piece Bonus: Meningkatkan SPD sebesar 6%.
                4-Piece Bonus: Ketika pengguna menggunakan Ultimatenya di dalam tim, SPD untuk semua tim meningkat sebesar 12% untuk 1 turn(s). Efek ini tidak dapat di stack.",
                'source' => "Cavern of Corrosion: Path of Elixir Seekers",
                'image' => "Messenger Traversing Hackerspace.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Musketeer of Wild Wheat",
                'detail' =>
                "2-Piece Bonus: ATK meningkat sebesar 12%.
                4-Piece Bonus: SPD pengguna meningkat sebesar 6% dan Basic ATK DMG meningkat sebesar 10%.",
                'source' => "Cavern of Corrosion: Path of Drifting",
                'image' => "Musketeer of Wild Wheat.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Passerby of Wandering Cloud",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Outgoing Healing sebesar 10%.
                4-Piece Bonus: Pada awal pertempuran, Instan Memulihkan 1 Skill Point.",
                'source' => "Cavern of Corrosion: Path of Drifting",
                'image' => "Passerby of Wandering Cloud.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Pioneer Diver of Dead Waters",
                'detail' =>
                "2-Piece Bonus: Meningkatkan DMG yang diberikan terhadap musuh dengan debuff sebesar 12%.
                4-Piece Bonus: Meningkatkan CRIT Rate sebesar 4%. Pengguna mendapatkan 8%/12% peningkatan CRIT DMG terhadap musuh yang setidaknya 2/3 debuffs. Setelah pengguna menimbulkan debuff ke target musuh, After the wearer inflicts a debuff on enemy targets, Efek yang disebutkan meningkat sebesar 100%, berlangsung selama 1 turn(s).",
                'source' => "Cavern of Corrosion: Path of Dreamdive",
                'image' => "Pioneer Diver of Dead Waters.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prisoner in Deep Confinement",
                'detail' =>
                "2-Piece Bonus: ATK meningkat sebesar 12%.
                4-Piece Bonus: Untuk setiap DoT For every DoT yang diterima target musuh, pengguna akan mengabaikan 6% dari DEF ketika memberikan DMG terhadap musuh tersebut. Efek ini berlaku untuk maksimum 3 DoT.",
                'source' => "Cavern of Corrosion: Path of Darkness",
                'image' => "Prisoner in Deep Confinement.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Ashblazing Grand Duke",
                'detail' =>
                "2-Piece Bonus: Meningkatkan DMG yang diberikan dari follow-up attacks sebesar 20%.
                4-Piece Bonus: Ketika pengguna menggunakan follow-up attacks, Meningkatkan ATK pengguna sebesar 6% untuk setiap kali Follow-up attacks memberikan DMG. Efek ini dapat distack hingga 8 kali dan bertahan hingga 3 turn. Efek ini akan hilang ketika pengguna menggunakan follow-up Attack pada turn selanjutnya.",
                'source' => "Cavern of Corrosion: Path of Darkness",
                'image' => "The Ashblazing Grand Duke.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Thief of Shooting Meteor",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Break Effect sebesar 16%.
                4-Piece Bonus: Meningkatkan Break Effect pengguna sebesar 16%. Setelah pengguna menimbulkan Weakness Break terhadap musuh, memulihkan 3 Energy.",
                'source' => "Cavern of Corrosion: Path of Jabbing Punch",
                'image' => "Thief of Shooting Meteor.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Wastelander of Banditry Desert",
                'detail' =>
                "2-Piece Bonus: Meningkatkan Imaginary DMG sebesar 10%.
                4-Piece Bonus: Ketika menyerang musuh yang terdapat debuff, CRIT RATE pengguna meningkat sebesar 10%, dan CRIT DMG meningkat sebesar 20% terhadap musuh Improsined.",
                'source' => "Cavern of Corrosion: Path of Conflagration",
                'image' => "Wastelander of Banditry Desert.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Watchmaker, Master of Dream Machinations",
                'detail' =>
                "2-Piece Bonus:  Meningkatkan Break Effect sebesar 16%.
                4-Piece Bonus: Ketika pengguna menggunakan ultimatenya dalam tim, Break Effect semua tim meningkat sebesar 30% untuk 2 turn. Efek ini tidak dapat di stack.",
                'source' => "Cavern of Corrosion: Path of Dreamdive",
                'image' => "Watchmaker, Master of Dream Machinations.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
        ]);
    }
}
