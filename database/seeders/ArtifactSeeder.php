<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

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
                "2-Piece: ATK +18%.
                4-Piece: Jika pengguna set artefak ini menggunakan Pedang, Claymore, atau Polearm, akan meningkatkan DMG Serangan Normal sebesar 35%.",
                'source' =>
                "Dropped by Weekly Bosses at World Level 2+
                Dropped by Normal Bosses at World Level 3+
                Domain Reliquary: Tier II",
                'image' => "Gladiator Finale.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Golden Troupe",
                'detail' =>
                "2-Piece: Meningkatkan Elemental Skill DMG sebesar 20%.
                4-Piece: Meningkatkan Elemental Skill DMG sebesar 25%. Selain itu, saat tidak berada di lapangan, Elemental Skill DMG akan semakin meningkat sebesar 25%. Efek ini akan hilang dalam 2 detik setelah masuk ke field.",
                'source' => "Denouement of Sin",
                'image' => "Golden Troupe.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Adventurer",
                'detail' =>
                "2-Piece: Maks HP meningkat sebesar 1000.
                4-Piece: Membuka peti akan memulihkan 30% Maks HP selama 5 detik.",
                'source' => "Chest
                Investigasi Map",
                'image' => "Adventurer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Wanderer's Troupe",
                'detail' =>
                "2-Piece: Meningkatkan Elemental Mastery sebesar 80.
                4-Piece: Meningkatkan Charged Attack DMG sebesar 35% jika karakter menggunakan Katalis atau Bow.",
                'source' => "Dropped by Weekly Bosses at World Level 2+
                Domain Reliquary: Tier II",
                'image' => "Wanderer's Troupe.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Archaic Petra",
                'detail' =>
                "2-Piece: Geo DMG Bonus +15%.
                4-Piece: Setelah mendapatkan Pecahan Elemen yang dibuat melalui Reaksi Mengkristal, semua anggota party mendapatkan Bonus DMG 35% untuk elemen tersebut selama 10 detik. Hanya satu bentuk Bonus DMG Elemen yang dapat diperoleh dengan cara ini pada satu waktu.",
                'source' => "Domain of Guyun",
                'image' => "Archaic Petra.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Berserker",
                'detail' =>
                "2-Piece: CRIT Rate +12%.
                4-Piece: Ketika HP di bawah 70%, CRIT Rate meningkat sebesar 24%.",
                'source' => "Dropped by all Elite Enemies
                Dropped by some Normal Bosses
                Dropped by all Weekly Bosses
                Domain Reliquary: Tier III
                Chests",
                'image' => "Berserker.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blizzard Strayer",
                'detail' =>
                "2-Piece: Cryo DMG Bonus +15%.
                4-Piece: Ketika karakter menyerang lawan yang terkena Cryo, CRIT Rate mereka akan meningkat 20%. Jika lawan terkena Frozen, CRIT Rate akan meningkat sebesar 20%.",
                'source' => "Peak of Vindagnyr (Levels I-IV)",
                'image' => "Blizzard Strayer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Bloodstained Chivalry",
                'detail' =>
                "2-Piece: Physical DMG Bonus +25%.
                4-Piece: Setelah mengalahkan lawan, meningkatkan Charged Attack DMG sebesar 50%, dan mengurangi biaya Stamina menjadi 0 selama 10 detik. Juga memicu dengan hewan liar seperti babi hutan, tupai, dan katak.",
                'source' => "Clear Pool and Mountain Cavern",
                'image' => "Bloodstained Chivalry.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Brave Heart",
                'detail' =>
                "2-Piece: ATK +18%.
                4-Piece: Meningkatkan DMG sebesar 30% melawan lawan dengan HP lebih dari 50%.",
                'source' => "Domain of Guyun
                Ridge Watch
                Slumbering Court
                City of Gold",
                'image' => "Brave Heart.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Crimson Witch of Flames",
                'detail' =>
                "2-Piece: Pyro DMG Bonus +15%.
                4-Piece: Meningkatkan Overloaded dan Burning, dan Burgeon DMG sebesar 40%. Meningkatkan Vaporize dan Melt DMG sebesar 15%. Menggunakan Skill Elemental meningkatkan Bonus Set 2-Piece sebesar 50% dari nilai awal selama 10 detik. Maksimal 3 tumpukan.",
                'source' => "Hidden Palace of Zhou Formula",
                'image' => "Crimson Witch of Flames.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Deepwood Memories",
                'detail' =>
                "2-Piece: Dendro DMG Bonus +15%.
                4-Piece: Setelah Skill Elemental atau Burst mengenai lawan, Dendro RES target akan berkurang 30% selama 8 detik. Efek ini dapat dipicu meskipun karakter yang melengkapi tidak berada di lapangan.",
                'source' => "Spire of Solitary Enlightenment",
                'image' => "Deepwood Memories.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Defender's Will",
                'detail' =>
                "2-Piece: DEF +30%.
                4-Piece: Untuk setiap elemen berbeda yang ada di dalam party Anda, Elemental RES pemakainya untuk elemen yang sesuai akan meningkat sebesar 30%.",
                'source' => "",
                'image' => "Defender's Will.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Desert Pavilion Chronicle",
                'detail' =>
                "2-Piece: Anemo DMG Bonus +15%.
                4-Piece: Ketika Charged Attacks mengenai lawan, SPD Serangan Normal karakter yang melengkapi akan meningkat sebesar 10% sementara DMG Serangan Normal, Charged, dan Plunging  akan meningkat sebesar 40% selama 15 detik.",
                'source' => "City of Gold",
                'image' => "Desert Pavilion Chronicle.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Echoes of an Offering",
                'detail' =>
                "2-Piece: ATK +18%.
                4-Piece: Ketika Serangan Normal mengenai lawan, ada kemungkinan 36% akan memicu Valley Rite, yang akan meningkatkan DMG Serangan Normal sebesar 70% ATK.
                Efek ini akan hilang 0,05 detik setelah Serangan Normal memberikan DMG.
                Jika Serangan Normal gagal memicu Valley Rite, peluang untuk memicu di lain waktu akan meningkat sebesar 20%.
                Pemicunya bisa terjadi setiap 0.2 detik sekali.",
                'source' => "The Lost Valley
                Domain Reliquary: Tier II",
                'image' => "Echoes of an Offering.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Emblem of Severed Fate",
                'detail' =>
                "2-Piece: Energy Recharge +20%.
                4-Piece: Meningkatkan Elemental Burst DMG sebesar 25% dari Energy Recharge. Maksimal 75% bonus DMG dapat diperoleh dengan cara ini.",
                'source' => "Momiji-Dyed Court",
                'image' => "Emblem of Severed Fate.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Flower of Paradise Lost",
                'detail' =>
                "2-Piece: Meningkatkan Elemental Mastery sebesar 80.
                4-Piece: Reaksi Bloom, Hyperbloom, dan Burgeon DMG dari karakter yang dilengkapi akan meningkat sebesar 40%. Selain itu, setelah karakter yang dilengkapi memicu Bloom, Hyperbloom, atau Burgeon, mereka akan mendapatkan bonus 25% untuk efek yang disebutkan sebelumnya. Setiap tumpukan ini berlangsung selama 10 detik. Maksimal 4 tumpukan secara bersamaan. Efek ini hanya dapat dipicu sekali per detik. Karakter yang melengkapi ini masih dapat memicu efeknya saat tidak berada di lapangan.",
                'source' => "City of Gold",
                'image' => "Flower of Paradise Lost.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Fragment of Harmonic Whimsy",
                'detail' =>
                "2-Piece: ATK +18%.
                4-Piece: Ketika nilai Bond of Life meningkat atau menurun, karakter ini memberikan 18% peningkatan DMG selama 6 detik. Maksimal 3 tumpukan.",
                'source' => "Faded Theater",
                'image' => "Fragment of Harmonic Whimsy.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Gambler",
                'detail' =>
                "2-Piece: Meningkatkan Elemental Skill DMG sebesar 20%.
                4-Piece: Mengalahkan lawan memiliki peluang 100% untuk menghapus CD Skill Elemental. Hanya dapat terjadi sekali setiap 15 detik.",
                'source' => "Clear Pool and Mountain Cavern
                Peak of Vindagnyr
                The Lost Valley",
                'image' => "Gambler.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Gilded Dreams",
                'detail' =>
                "2-Piece: Meningkatkan Elemental Mastery sebesar 80.
                4-Piece: Dalam waktu 8 detik setelah memicu Reaksi Elemen, karakter yang melengkapi ini akan mendapatkan buff berdasarkan Tipe Elemen anggota party lainnya. ATK meningkat 14% untuk setiap anggota party yang Tipe Elemennya sama dengan karakter yang melengkapi, dan Elemental Mastery meningkat 50 untuk setiap anggota party dengan Tipe Elemen yang berbeda. Setiap buff yang disebutkan di atas akan dihitung hingga 3 karakter. Efek ini dapat dipicu setiap 8 detik sekali. Karakter yang melengkapi ini masih dapat memicu efeknya saat tidak berada di field.",
                'source' => "Spire of Solitary Enlightenment",
                'image' => "Gilded Dreams.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Heart of Depth",
                'detail' =>
                "2-Piece: Hydro DMG Bonus +15%
                4-Piece: Setelah menggunakan Skill Elemental, meningkatkan Normal Attack dan Charged Attack DMG sebesar 30% selama 15 detik.",
                'source' => "Peak of Vindagnyr (Levels I-IV)",
                'image' => "Heart of Depth.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Husk of Opulent Dreams",
                'detail' =>
                "2-Piece: DEF +30%
                4-Piece: Karakter yang dilengkapi dengan set Artefak ini akan mendapatkan efek Curiosity dalam kondisi berikut:
                Saat berada di lapangan, karakter mendapatkan 1 stack setelah mengenai lawan dengan serangan Geo, memicu maksimal sekali setiap 0,3 detik.
                Saat berada di luar lapangan, karakter mendapatkan 1 tumpukan setiap 3 detik.
                Curiosity dapat ditumpuk hingga 4 kali, masing-masing memberikan 6% DEF dan 6% Bonus Geo DMG.
                Ketika 6 detik berlalu tanpa mendapatkan tumpukan Curiosity, 1 tumpukan akan hilang.",
                'source' => "",
                'image' => "Husk of Opulent Dreams.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Instructor",
                'detail' =>
                "2-Piece: Meningkatkan Elemental Mastery sebesar 80.
                4-Piece: Setelah memicu Reaksi Elemen, meningkatkan Elemental Mastery semua anggota party sebesar 120 selama 8 detik.",
                'source' => "Dropped by all Elite Enemies
                Domain Reliquary: Tier III
                Chests",
                'image' => "Instructor.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Lavawalker",
                'detail' =>
                "2-Piece: Pyro RES meningkat sebesar 40%.
                4-Piece: Meningkatkan DMG terhadap lawan yang terkena dampak Pyro sebesar 35%.",
                'source' => "
                Hidden Palace of Zhou Formula",
                'image' => "Lavawalker.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Lucky Dog",
                'detail' =>
                "2-Piece: DEF meningkat sebesar 100.
                4-Piece: Mengambil Mora akan memulihkan 300 HP.",
                'source' => "Chest
                Inverstagsi Map",
                'image' => "Lucky Dog.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Maiden Beloved",
                'detail' =>
                "2-Piece: Efektivitas Heal dari Karakter +15%
                4-Piece: Menggunakan Skill Elemental atau Burst meningkatkan penyembuhan yang diterima oleh semua anggota party sebesar 20% selama 10 detik.",
                'source' => "Valley of Remembrance",
                'image' => "Maiden Beloved.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Marechaussee Hunter",
                'detail' =>
                "2-Piece: Normal dan Charged Attack DMG +15%.
                4-Piece: Ketika HP saat ini meningkat atau menurun, CRIT Rate akan meningkat 12% selama 5 detik. Maksimal 3 tumpukan.",
                'source' => "Denouement of Sin",
                'image' => "Marechaussee Hunter.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Martial Artist",
                'detail' =>
                "2-Piece: Normal dan Charged Attack DMG +15%.
                4-Piece: Setelah menggunakan Skill Elemental, meningkatkan Normal Attack dan Charged Attack DMG sebesar 25% selama 8 detik.",
                'source' => "Hidden Palace of Zhou Formula
                Adventurer Handbook Experience",
                'image' => "Martial Artist.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Nighttime Whispers in the Echoing Woods",
                'detail' =>
                "2-Piece: ATK +18%.
                4-Piece: Setelah menggunakan Skill Elemen, dapatkan Bonus Geo DMG 20% selama 10 detik. Saat berada di bawah perisai yang diberikan oleh reaksi Mengkristal, efek di atas akan meningkat 150%, dan peningkatan tambahan ini akan hilang 1 detik setelah perisai itu hilang.",
                'source' => "Waterfall Wen",
                'image' => "Nighttime Whispers in the Echoing Woods.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Noblesse Oblige",
                'detail' =>
                "2-Piece: Elemental Burst DMG +20%
                4-Piece: Menggunakan Elemental Burst akan meningkatkan ATK semua anggota party sebesar 20% selama 12 detik. Efek ini tidak dapat ditumpuk.",
                'source' => "Clear Pool and Mountain Cavern",
                'image' => "Noblesse Oblige.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Nymph's Dream",
                'detail' =>
                "2-Piece: Hydro DMG Bonus +15%
                4-Piece: Setelah Normal, Charged, dan Plunging Attack, Elemental Skill, dan Elemental Burst mengenai lawan, 1 stack Mirrored Nymph akan terpicu, berlangsung selama 8 detik. Saat berada di bawah pengaruh 1, 2, atau 3 tumpukan Mirrored Nymph atau lebih, ATK akan meningkat sebesar 7%/16%/25%, dan Hydro DMG akan meningkat sebesar 4%/9%/15%. Mirrored Nymph yang tercipta dari Normal, Charged, dan Plunging Attack, Elemental Skill, dan Elemental Burst berdiri sendiri-sendiri.",
                'source' => "Molten Iron Fortress",
                'image' => "Nymph's Dream.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Ocean-Hued Clam",
                'detail' =>
                "2-Piece: Healing Bonus +15%.
                4-Piece: Ketika karakter yang melengkapi set artefak ini menyembuhkan karakter dalam party, Busa yang Dicelup Laut akan muncul selama 3 detik, mengakumulasi jumlah HP yang dipulihkan dari penyembuhan (termasuk penyembuhan yang melimpah).
                Di akhir durasi, Sea-Dyed Foam akan meledak, memberikan DMG ke lawan terdekat berdasarkan 90% dari akumulasi penyembuhan.
                (DMG ini dihitung mirip dengan Reaksi seperti Electro-Charged, dan Superconduct, tetapi tidak terpengaruh oleh Penguasaan Elemen, Level Karakter, atau Bonus DMG Reaksi).
                Hanya satu Sea-Dyed Foam yang dapat diproduksi setiap 3,5 detik.
                Setiap Sea-Dyed Foam dapat mengakumulasi hingga 30.000 HP (termasuk penyembuhan yang melimpah).
                Tidak boleh ada lebih dari satu Sea-Dyed Foam yang aktif pada waktu tertentu.
                Efek ini masih dapat dipicu bahkan ketika karakter yang menggunakan set artefak ini tidak berada di lapangan.",
                'source' => "Slumbering Court",
                'image' => "Ocean-Hued Clam.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Pale Flame",
                'detail' =>
                "2-Piece: Physical DMG Bonus +25%
                4-Piece: Ketika Skill Elemen mengenai lawan, ATK meningkat sebesar 9% selama 7 detik. Efek ini ditumpuk hingga 2 kali dan dapat dipicu setiap 0,3 detik. Setelah 2 tumpukan tercapai, efek 2 set akan meningkat 100%.",
                'source' => "Ridge Watch",
                'image' => "Pale Flame.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prayers for Destiny",
                'detail' =>
                "1-Piece: Dipengaruhi oleh Hydro selama 40% lebih sedikit.",
                'source' => "Normal Bosses",
                'image' => "Prayers for Destiny.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prayers for Illumination",
                'detail' =>
                "1-Piece: Dipengaruhi oleh Pyro selama 40% lebih sedikit.",
                'source' => "Normal Bosses",
                'image' => "Prayers for Illumination.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prayers for Wisdom",
                'detail' =>
                "1-Piece: Dipengaruhi oleh Electro selama 40% lebih sedikit.",
                'source' => "Normal Bosses",
                'image' => "Prayers for Wisdom.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prayers to Springtime",
                'detail' =>
                "1-Piece: Dipengaruhi oleh Cryo selama 40% lebih sedikit.",
                'source' => "Normal Bosses",
                'image' => "Prayers to Springtime.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Resolution of Sojourner",
                'detail' =>
                "2-Piece: ATK +18%.
                4-Piece: Meningkatkan CRIT Rate Charged Attack sebesar 30%.",
                'source' => "
                Adventurer Handbook Experience
                Adventure Rank Rewards",
                'image' => "Resolution of Sojourner.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Retracing Bolide",
                'detail' =>
                "2-Piece: Meningkatkan Kekuatan Shield sebesar 35%.
                4-Piece: Saat dilindungi oleh shield, dapatkan tambahan 40% Normal dan Charged Attack DMG.",
                'source' => "Domain of Guyun",
                'image' => "Retracing Bolide.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Scholar",
                'detail' =>
                "2-Piece: Energy Recharge +20%.
                4-Piece: Mendapatkan Partikel Elemen atau Orb memberikan 3 Energi kepada semua anggota party yang memiliki busur atau katalis yang dilengkapi. Hanya dapat terjadi sekali setiap 3 detik.",
                'source' => "Adventurer Handbook Experience
                Molten Iron Fortress",
                'image' => "Scholar.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shimenawa's Reminiscence",
                'detail' =>
                "2-Piece: ATK +18%.
                4-Piece: Saat mengeluarkan Skill Elemental, jika karakter memiliki 15 Energi atau lebih, mereka akan kehilangan 15 Energi dan Normal/Charged/Plunging Attack DMG akan meningkat 50% selama 10 detik. Efek ini tidak akan terpicu lagi selama durasi tersebut.",
                'source' => "Momiji-Dyed Court",
                'image' => "Shimenawa's Reminiscence.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Song of Days Past",
                'detail' =>
                "2-Piece: Healing Bonus +15%.
                4-Piece: Ketika karakter yang melengkapi menyembuhkan anggota party, efek Kerinduan akan tercipta selama 6 detik, yang mencatat jumlah total penyembuhan yang diberikan (termasuk penyembuhan yang melimpah). Saat durasi berakhir, efek Kerinduan akan berubah menjadi efek “Waves of Days Past”: Ketika anggota party aktif Anda mengenai lawan dengan Serangan Normal, Serangan Bermuatan, Serangan Terjun, Skill Elemen, atau Ledakan Elemen, DMG yang diberikan akan meningkat sebesar 8% dari jumlah total penyembuhan yang dicatat oleh efek Kerinduan. Efek “Waves of Days Past” akan dihapus setelah efek tersebut berlaku 5 kali atau setelah 10 detik. Satu contoh efek Kerinduan dapat merekam hingga 15.000 penyembuhan, dan hanya satu contoh yang dapat ada sekaligus, tetapi dapat merekam penyembuhan dari beberapa karakter yang dilengkapi. Melengkapi karakter dalam keadaan siaga masih dapat memicu efek ini.",
                'source' => "Waterfall Wen",
                'image' => "Song of Days Past.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Tenacity of the Millelith",
                'detail' =>
                "2-Piece: HP +20%.
                4-Piece: Ketika Skill Elemental mengenai lawan, ATK semua anggota party di dekatnya akan meningkat 20% dan Kekuatan Perisai mereka meningkat 30% selama 3 detik. Efek ini dapat dipicu setiap 0,5 detik sekali. Efek ini masih dapat dipicu bahkan ketika karakter yang menggunakan set artefak ini tidak berada di lapangan.",
                'source' => "Ridge Watch",
                'image' => "Tenacity of the Millelith.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Exile",
                'detail' =>
                "2-Piece: Energy Recharge +20%
                4-Piece: Menggunakan Elemental Burst akan meregenerasi 2 Energi untuk semua anggota party (tidak termasuk pemakainya) setiap 2 detik selama 6 detik. Efek ini tidak dapat ditumpuk.",
                'source' => "Domain Reliquary: Tier III",
                'image' => "The Exile.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Thundering Fury",
                'detail' =>
                "2-Piece: Electro DMG Bonus +15%.
                4-Piece: Meningkatkan DMG yang disebabkan oleh Overloaded, Electro-Charged, Superconduct, dan Hyperbloom sebesar 40%, dan Bonus DMG yang diberikan oleh Aggravate meningkat 20%. Ketika Quicken atau Elemental Reactions yang disebutkan di atas terpicu, CD Skill Elemental berkurang 1 detik. Hanya dapat terjadi sekali setiap 0.8 detik.",
                'source' => "Midsummer Courtyard",
                'image' => "Thundering Fury.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Thundersoother",
                'detail' =>
                "2-Piece: Electro RES meningkat sebesar 40%.
                4-Piece: Meningkatkan DMG terhadap lawan yang terkena Electro sebesar 35%.",
                'source' => "Midsummer Courtyard",
                'image' => "Thundersoother.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Tiny Miracle",
                'detail' =>
                "2-Piece: Semua Elemental RES meningkat sebesar 20%.
                4-Piece: DMG Elemen yang masuk meningkatkan RES Elemen yang sesuai sebesar 30% selama 10 detik. Hanya dapat terjadi sekali setiap 10 detik.",
                'source' => "Valley of Remembrance",
                'image' => "Tiny Miracle.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Traveling Doctor",
                'detail' =>
                "2-Piece: Meningkatkan penyembuhan yang masuk sebesar 20%.
                4-Piece: Menggunakan Elemental Burst akan memulihkan 20% HP.",
                'source' => "Chests",
                'image' => "Traveling Doctor.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Unfinished Reverie",
                'detail' =>
                "2-Piece: ATK +18%.
                4-Piece: Setelah meninggalkan pertempuran selama 3 detik, DMG yang diberikan meningkat 50%. Dalam pertempuran, jika tidak ada lawan yang terbakar di dekatnya selama lebih dari 6 detik, Bonus DMG ini akan berkurang 10% per detik hingga mencapai 0%. Jika ada lawan yang terbakar, maka akan meningkat 10% hingga mencapai 50%. Efek ini tetap terpicu jika karakter yang melengkapi berada di luar field.",
                'source' => "Faded Theater",
                'image' => "Unfinished Reverie.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Vermillion Hereafter",
                'detail' =>
                "2-Piece: ATK +18%.
                4-Piece: Setelah menggunakan Elemental Burst, karakter ini akan mendapatkan efek Nascent Light, meningkatkan ATK mereka sebesar 8% selama 16 detik. Ketika HP karakter berkurang, ATK mereka akan bertambah 10%. Peningkatan ini dapat terjadi dengan cara ini maksimal 4 kali. Efek ini dapat dipicu setiap 0.8 detik sekali. Nascent Light akan dihilangkan ketika karakter meninggalkan lapangan. Jika Elemental Burst digunakan lagi selama durasi Nascent Light, Nascent Light yang asli akan dihilangkan.",
                'source' => "The Lost Valley",
                'image' => "Vermillion Hereafter.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Viridescent Venerer",
                'detail' =>
                "2-Piece: Anemo DMG Bonus +15%
                4-Piece: Meningkatkan Swirl DMG sebesar 60%. Mengurangi RES Elemen lawan ke elemen yang dimasukkan ke dalam Swirl sebesar 40% selama 10 detik.",
                'source' => "Valley of Remembrance",
                'image' => "Viridescent Venerer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Vourukasha's Glow",
                'detail' =>
                "2-Piece: HP +20%.
                4-Piece: Elemental Skill dan Elemental Burst DMG akan meningkat 10%. Setelah karakter yang melengkapi mengambil DMG, Bonus DMG yang disebutkan di atas akan meningkat 80% selama 5 detik. Peningkatan efek ini bisa mencapai 5 tumpukan. Durasi setiap tumpukan dihitung secara independen. Efek ini dapat dipicu bahkan ketika karakter yang melengkapi tidak berada di field.",
                'source' => "Molten Iron Fortress",
                'image' => "Vourukasha's Glow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
