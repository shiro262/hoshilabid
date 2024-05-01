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
                "Dawn and Dusk by the Lake
                Ketika HP karakter yang dilengkapi saat ini bertambah atau berkurang, Elemental Skill DMG yang diberikan akan bertambah 8% selama 6 detik. Maksimal 3 tumpukan. Efek ini dapat dipicu setiap 0,2 detik sekali. Ketika HP anggota party lain saat ini bertambah atau berkurang, HP maksimal karakter yang melengkapi akan bertambah 14% selama 6 detik. Maksimal 2 tumpukan. Efek ini dapat dipicu setiap 0,2 detik sekali. Efek yang disebutkan di atas dapat dipicu meskipun pengguna berada di luar lapangan.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 19.2% - 88.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Splendor of Tranquil Waters.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "A Thousand Floating Dreams",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "A Thousand Nights' Dawnsong
                Anggota party selain karakter yang melengkapi akan memberikan buff kepada karakter yang melengkapi berdasarkan apakah Tipe Elemen mereka sama dengan karakter tersebut atau tidak. Jika Tipe Elemen mereka sama, tingkatkan Penguasaan Elemen sebesar 32. Jika tidak, tingkatkan Bonus DMG karakter yang melengkapi dari Tipe Elemen mereka sebesar 10%. Setiap efek yang disebutkan di atas dapat memiliki hingga 3 tumpukan. Selain itu, semua anggota party terdekat selain karakter yang melengkapi akan meningkatkan Elemental Mastery mereka sebesar 40. Beberapa efek dari beberapa senjata tersebut dapat ditumpuk.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 58 - 265 Elemental Mastery",
                'source' => "Weapon Event Wishes",
                'image' => "A Thousand Floating Dreams.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Aqua Simulacra",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "The Cleansing Form
                HP meningkat sebesar 16~32%. Ketika ada lawan di dekatnya, DMG yang diberikan oleh pengguna senjata ini meningkat 20~40%. Hal ini akan berlaku baik saat karakter berada di lapangan maupun tidak.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 19.2% - 88.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Aqua Simulacra.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Amos' Bow",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "Strong-Willed
                Meningkatkan Normal Attack dan Charged Attack DMG sebesar 12~24%. Setelah Serangan Normal atau Serangan Bermuatan ditembakkan, DMG yang diberikan meningkat 8~16% lebih lanjut setiap 0,1 detik anak panah berada di udara hingga 5 kali.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 10.8% - 49.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Amos' Bow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Aquila Favonia",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Falcon's Defiance
                ATK meningkat sebesar 20~40%. Pemicu saat mengambil DMG: jiwa Falcon of the West terbangun, memegang panji perlawanan tinggi-tinggi, meregenerasi HP sebesar 100~160% ATK dan memberikan 200~320% ATK sebagai DMG kepada lawan di sekitarnya. Efek ini hanya dapat terjadi sekali setiap 15 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 9% - 41.3% Physical DMG Bonus ",
                'source' => "Wishes",
                'image' => "Aquila Favonia.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Beacon of the Reed Sea",
                'type' => "Claymore",
                'rarity' => "5star",
                'detail' =>
                "Desert Watch
                Setelah Skill Elemental karakter mengenai lawan, ATK mereka akan meningkat 20~40% selama 8 detik. Setelah karakter menggunakan DMG, ATK mereka akan meningkat sebesar 20~40% selama 8 detik. Kedua efek yang disebutkan di atas dapat dipicu bahkan ketika karakter tidak berada di lapangan. Selain itu, saat tidak dilindungi oleh perisai, HP maksimal karakter akan meningkat sebesar 32~64%.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 7.2% - 33.1% CRIT Rate ",
                'source' => "Weapon Event Wishes",
                'image' => "Beacon of the Reed Sea.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Calamity Queller",
                'type' => "Polearm",
                'rarity' => "5star",
                'detail' =>
                "Extinguishing Precept
                Mendapatkan 12~24% Bonus DMG Semua Elemen. Mendapatkan Consummation selama 20 detik setelah menggunakan Skill Elemental, menyebabkan ATK meningkat sebesar 3,2~6,4% per detik. Peningkatan ATK ini memiliki maksimum 6 tumpukan. Ketika karakter yang dilengkapi dengan senjata ini tidak berada di lapangan, peningkatan ATK dari Consummation akan berlipat ganda.",
                'stats' =>
                "Base ATK (Lv.1-90): 49 - 741
                2nd Stat (Lv.1-90): 3.6% - 16.5% ATK ",
                'source' => "Weapon Event Wishes",
                'image' => "Calamity Queller.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Cashflow Supervision",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Golden Blood-Tide
                ATK meningkat sebesar 16~32%. Ketika HP saat ini meningkat atau menurun, Normal Attack DMG akan meningkat sebesar 16~32% dan Charged Attack DMG akan meningkat sebesar 14~28% selama 4 detik. Maksimal 3 tumpukan. Efek ini dapat dipicu setiap 0,3 detik sekali. Ketika pemain memiliki 3 stack, ATK SPD akan meningkat sebesar 8~16%.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 - 674
                2nd Stat (Lv.1-90): 4.8% - 22.1% CRIT Rate",
                'source' => "Weapon Event Wishes",
                'image' => "Cashflow Supervision.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Elegy for the End",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "The Parting Refrain
                Bagian dari “Gerakan Milenial” yang mengembara di tengah-tengah angin. Meningkatkan Penguasaan Elemen sebesar 60~120. Ketika Elemental Skill atau Elemental Burst dari karakter yang menggunakan senjata ini mengenai lawan, karakter tersebut akan mendapatkan Sigil of Remembrance. Efek ini dapat dipicu setiap 0.2 detik sekali dan dapat dipicu meskipun karakter tersebut tidak berada di lapangan. Ketika Anda memiliki 4 Sigil of Remembrance, semuanya akan dikonsumsi dan semua anggota party di dekatnya akan mendapatkan efek “Millennial Movement: Lagu Perpisahan” selama 12 detik. “Millennial Movement: Farewell Song” meningkatkan Penguasaan Elemen sebesar 100~200 dan meningkatkan ATK sebesar 20~40%. Setelah efek ini terpicu, Anda tidak akan mendapatkan Sigils of Remembrance selama 20 detik. Dari sekian banyak efek “Millennial Movement,” buff dengan tipe yang sama tidak akan ditumpuk.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 12% - 55.1% Energy Recharge",
                'source' => "Weapon Event Wishes",
                'image' => "Elegy for the End.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //SWORD
            [
                'name' => "Freedom-Sworn",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Revolutionary Chorale
                Bagian dari “Gerakan Milenial” yang mengembara di tengah-tengah angin. Meningkatkan DMG sebesar 10 ~ 20%. Ketika karakter yang menggunakan senjata ini memicu Elemental Reactions, mereka akan mendapatkan Sigil of Rebellion. Efek ini dapat dipicu setiap 0.5 detik sekali dan dapat dipicu meskipun karakter tersebut tidak berada di lapangan.
                Ketika Anda memiliki 2 Sigil of Rebellion, semuanya akan dikonsumsi dan semua anggota party di dekatnya akan mendapatkan “Millennial Movement: Song of Resistance” selama 12 detik.
                “Millennial Movement: Song of Resistance” meningkatkan Normal, Charged, dan Plunging Attack DMG sebesar 16~32% dan meningkatkan ATK sebesar 20~40%. Setelah efek ini terpicu, kamu tidak akan mendapatkan Sigils of Rebellion selama 20 detik.
                Dari sekian banyak efek “Millennial Movement”, buff dengan tipe yang sama tidak akan bertumpuk.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 43 - 198 Elemental Mastery ",
                'source' => "Weapon Event Wishes",
                'image' => "Freedom-Sworn.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Haran Geppaku Futsu",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Honed Flow
                Mendapatkan 12~24% Bonus DMG Semua Elemen. Ketika anggota party lain di dekatnya menggunakan Skill Elemental, karakter yang melengkapi senjata ini akan mendapatkan 1 tumpukan Wavespike. Maksimal 2 tumpukan. Efek ini dapat dipicu setiap 0.3 detik sekali. Saat karakter yang melengkapi senjata ini menggunakan Skill Elemen, semua tumpukan Wavespike akan dikonsumsi untuk mendapatkan Rippling Upheaval: setiap tumpukan Wavespike yang dikonsumsi akan meningkatkan Normal Attack DMG sebesar 20~40% selama 8 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 7.2% - 33.1% CRIT Rate",
                'source' => "Weapon Event Wishes",
                'image' => "Haran Geppaku Futsu.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Key of Khaj-Nisut",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Sunken Song of the Sands
                HP meningkat sebesar 20~40%. Ketika Skill Elemen mengenai lawan, Anda mendapatkan efek Grand Hymn selama 20 detik. Efek ini meningkatkan Penguasaan Elemen karakter yang dilengkapi sebesar 0,12~0,24% dari HP Maks. Efek ini dapat terpicu setiap 0.3 detik sekali. Maksimal 3 tumpukan. Ketika efek ini mendapatkan 3 tumpukan, atau ketika durasi tumpukan ketiga di-refresh, Penguasaan Elemen dari semua anggota party di dekatnya akan meningkat sebesar 0.2~0.4% dari HP maksimal karakter yang melengkapi selama 20 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 14.4% - 66.2% HP",
                'source' => "Weapon Event Wishes",
                'image' => "Key of Khaj-Nisut.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Light of Foliar Incision",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Whitemoon Bristle
                CRIT Rate meningkat 4~8%. Setelah Serangan Normal memberikan Elemental DMG, efek Foliar Incision akan didapatkan, meningkatkan DMG yang diberikan oleh Serangan Normal dan Skill Elemental sebesar 120~240% dari Elemental Mastery. Efek ini akan hilang setelah 28 DMG atau 12 detik. Anda bisa mendapatkan Foliar Incision setiap 12 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 19.2% - 88.2% ",
                'source' => "Weapon Event Wishes",
                'image' => "Light of Foliar Incision.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Mistsplitter Reforged",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Mistsplitter's Edge
                Dapatkan Bonus Elemental DMG sebesar 12~24% untuk semua elemen dan dapatkan kekuatan Emblem Mistsplitter. Pada level stack 1/2/3, Emblem Mistsplitter memberikan Bonus DMG Elemen sebesar 8/16/28~16/32/56% untuk Tipe Elemen karakter. Karakter akan mendapatkan 1 tumpukan Mistsplitter's Emblem di setiap skenario berikut: Serangan Normal memberikan Elemental DMG (tumpukan berlangsung selama 5 detik), mengeluarkan Elemental Burst (tumpukan berlangsung selama 10 detik); Energi kurang dari 100% (tumpukan menghilang saat Energi penuh). Durasi setiap tumpukan dihitung secara independen.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 - 674
                2nd Stat (Lv.1-90): 9.6% - 44.1% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Mistsplitter Reforged.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Primordial Jade Cutter",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Protector's Virtue
                HP meningkat sebesar 20~40%. Selain itu, memberikan Bonus ATK berdasarkan 1,2~2,4% dari HP Maks pengguna.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 9.6% - 44.1 CRIT Rate% ",
                'source' => "Weapon Event Wishes",
                'image' => "Primordial Jade Cutter.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Skyward Blade",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Sky-Piercing Fang
                CRIT Rate meningkat 4~8%. Mendapatkan Skypiercing Might saat menggunakan Elemental Burst: Meningkatkan Movement SPD sebesar 10%, meningkatkan ATK SPD sebesar 10%, dan serangan Normal dan Charged memberikan tambahan DMG sebesar 20~40% dari ATK. Skypiercing Might berlangsung selama 12 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 12% - 55.1% Energy Recharge",
                'source' => "Weapon Event Wishes",
                'image' => "Skyward Blade.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Summit Shaper",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Golden Majesty
                Meningkatkan Kekuatan Perisai sebesar 20~40%. Mencetak hit pada lawan meningkatkan ATK sebesar 4~8% selama 8 detik. Maksimal 5 tumpukan. Hanya dapat terjadi sekali setiap 0,3 detik. Saat dilindungi oleh perisai, efek peningkatan ATK ini meningkat 100%.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 10.8% - 49.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Summit Shaper.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Uraku Misugiri",
                'type' => "Sword",
                'rarity' => "5star",
                'detail' =>
                "Brocade Bloom, Shrine Sword
                Normal Attack DMG meningkat 16~32% dan Elemental Skill DMG meningkat 24~48%. Setelah karakter aktif di dekatnya memberikan Geo DMG, efek yang disebutkan di atas meningkat 100% selama 15 detik. Selain itu, DEF pemain meningkat sebesar 20~40%.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 19.2% - 88.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Uraku Misugiri.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Amenoma Kageuchi",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Iwakura Succession
                Setelah menggunakan Skill Elemen, dapatkan 1 Biji Suksesi. Efek ini dapat dipicu setiap 5 detik sekali. Benih Suksesi bertahan selama 30 detik. Hingga 3 Biji Suksesi dapat muncul secara bersamaan. Setelah menggunakan Elemental Burst, semua Biji Suksesi akan dikonsumsi dan setelah 2 detik, karakter akan meregenerasi 6~12 Energi untuk setiap biji yang dikonsumsi.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 12% - 55.1% ATK",
                'source' => "Forging",
                'image' => "Amenoma Kageuchi.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blackcliff Longsword",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Press the Advantage
                Setelah mengalahkan lawan, ATK akan meningkat 12~24% selama 30 detik. Efek ini memiliki maksimum 3 tumpukan, dan durasi setiap tumpukan tidak bergantung pada yang lain.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 8% - 36.8% CRIT DMG",
                'source' => "Paimon's Bargains",
                'image' => "Blackcliff Longsword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Cinnabar Spindle",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Spotless Heart
                Elemental Skill DMG meningkat sebesar 40~80% dari DEF. Efeknya akan terpicu tidak lebih dari sekali setiap 1,5 detik dan akan hilang 0,1 detik setelah Skill Elemen memberikan DMG.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 15% - 69.0% DEF",
                'source' => "Shadows Amidst Snowstorms Event",
                'image' => "Cinnabar Spindle.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Favonius Sword",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Windfall
                Serangan CRIT memiliki peluang 60% untuk menghasilkan sejumlah kecil Partikel Elemen, yang akan meregenerasi 6 Energi untuk karakter. Hanya dapat terjadi sekali setiap 12 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 13.3% - 61.3% Energy Recharge ",
                'source' => "Wishes",
                'image' => "Favonius Sword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Festering Desire",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Undying Admiration
                Meningkatkan Elemental Skill DMG sebesar 16% dan Elemental Skill CRIT Rate sebesar 6%.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 10.0% - 45.9% Energy Recharge ",
                'source' => "The Chalk Prince and the Dragon Event",
                'image' => "Festering Desire.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Finale of the Deep",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "An End Sublime
                Saat menggunakan Skill Elemental, ATK akan meningkat 12% selama 15 detik, dan Bond of Life senilai 25% dari Max HP akan diberikan. Efek ini dapat dipicu setiap 10 detik sekali. Saat Bond of Life dibersihkan, maksimum 150 ATK akan diperoleh berdasarkan 2,4% dari jumlah total Ikatan Kehidupan yang dibersihkan, yang berlangsung selama 15 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Forging",
                'image' => "Finale of the Deep.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Fleuve Cendre Ferryman",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Ironbone
                Meningkatkan Tingkat CRIT Skill Elemen sebesar 8%. Selain itu, meningkatkan Energy Recharge sebesar 16% selama 5 detik setelah menggunakan Skill Elemen.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 10.0% - 45.9% Energy Recharge",
                'source' => "Fontaine Fishing Association (Sold by Delaroche)",
                'image' => "Fleuve Cendre Ferryman.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Iron Sting",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Infusion Stinger
                Melakukan Elemental DMG meningkatkan semua DMG sebesar 6% selama 6 detik. Maksimal 2 tumpukan. Hanya dapat terjadi sekali setiap 1 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 36 - 165 Elemental Mastery ",
                'source' => "Forging",
                'image' => "Iron Sting.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Kagotsurube Isshin",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Isshin Art Clarity
                Ketika Serangan Normal, Charged, atau Plunging Attack mengenai lawan, itu akan menghasilkan Hewing Gale, menghasilkan AoE DMG sebesar 180% dari ATK dan meningkatkan ATK sebesar 15% selama 8 detik. Efek ini dapat dipicu setiap 8 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK ",
                'source' => "Ere the End, a Glance Back Quest",
                'image' => "Kagotsurube Isshin.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Lion's Roar",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Bane of Fire and Thunder
                Meningkatkan DMG terhadap musuh yang terkena Pyro atau Electro sebesar 20~36.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Wishes",
                'image' => "Lion's Roar.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prototype Rancour",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Smashed Stone
                Saat terkena, Serangan Normal atau Serangan Bermuatan meningkatkan ATK dan DEF sebesar 4 ~ 8% selama 6 detik. Maksimal 4 tumpukan. Efek ini hanya dapat terjadi sekali setiap 0,3 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 7.5% - 34.5% Physical DMG Bonus",
                'source' => "Forging",
                'image' => "Prototype Rancour.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Royal Longsword",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Focus
                Setelah memberikan kerusakan pada lawan, meningkatkan CRIT Rate sebesar 8~16%. Maksimal 5 tumpukan. Serangan CRIT akan menghapus semua tumpukan yang ada.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Paimon's Bargains",
                'image' => "Royal Longsword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sacrificial Sword",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Composed
                Setelah memberikan kerusakan pada lawan dengan Skill Elemen, skill tersebut memiliki peluang 40~80% untuk mengakhiri CD-nya sendiri. Hanya dapat terjadi sekali setiap 30~16 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 13.3% - 61.3% Energy Recharge",
                'source' => "Wishes",
                'image' => "Sacrificial Sword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sapwood Blade",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Forest Sanctuary
                Setelah memicu Burning, Quicken, Aggravate, Spread, Bloom, Hyperbloom, atau Burgeon, Leaf of Consciousness akan dibuat di sekitar karakter selama maksimal 10 detik. Saat diambil, Leaf akan memberikan karakter tersebut 60~120 Elemental Mastery selama 12 detik. Hanya 1 Daun yang dapat dihasilkan dengan cara ini setiap 20 detik. Efek ini masih dapat dipicu jika karakter tidak berada di lapangan. Efek Leaf of Consciousness tidak dapat ditumpuk.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Forging",
                'image' => "Sapwood Blade.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sword of Descension",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Descension
                Memukul musuh dengan Serangan Normal atau Serangan Bermuatan memberikan peluang 50% untuk memberikan 200% ATK sebagai DMG dalam AoE kecil. Efek ini hanya dapat terjadi sekali setiap 10 detik. Selain itu, jika Traveler melengkapi Sword of Descension, ATK mereka akan bertambah 66.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 440
                2nd Stat (Lv.1-90): 7.7% - 35.2% ATK",
                'source' => "Diberikan melalui Mail di PS4/PS5.",
                'image' => "Sword of Descension.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sword of Narzissenkreuz",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Hero's Blade
                Ketika karakter yang melengkapi tidak memiliki Arkhe: Ketika Serangan Normal, Serangan Bermuatan, atau Serangan Terjun terjadi, ledakan energi Pneuma atau Ousia akan dilepaskan, menghasilkan 160~320% ATK sebagai DMG. Efek ini dapat dipicu setiap 12 detik sekali. Jenis ledakan energi ditentukan oleh jenis Pedang Narzissenkreuz saat ini.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Quest Reward",
                'image' => "Sword of Narzissenkreuz.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Alley Flash",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Itinerant Hero
                Meningkatkan DMG yang diberikan oleh karakter yang menggunakan senjata ini sebesar 12~24%. Mengambil DMG akan menonaktifkan efek ini selama 5 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 45 - 620
                2nd Stat (Lv.1-90): 12 - 55 Elemental Mastery",
                'source' => "Weapon Event Wishes",
                'image' => "The Alley Flash.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Black Sword",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Justice
                Meningkatkan DMG yang diberikan oleh Serangan Normal dan Serangan Bermuatan sebesar 20~40%. Selain itu, meregenerasi 60~100% ATK sebagai HP ketika Serangan Normal dan Serangan Bermuatan menghasilkan CRIT Hit. Efek ini dapat terjadi setiap 5 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 6% - 27.6% CRIT Rate",
                'source' => "Battle Pass",
                'image' => "The Black Sword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Dockhand's Assistant",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Sea Shanty
                Saat pengguna disembuhkan atau menyembuhkan orang lain, mereka akan mendapatkan Simbol Stoic yang bertahan selama 30 detik, hingga maksimal 3 Simbol. Saat menggunakan Skill Elemen atau Burst, semua Simbol akan dikonsumsi dan efek Roused akan diberikan selama 10 detik. Untuk setiap Simbol yang dikonsumsi, dapatkan 40~80 Penguasaan Elemen, dan 2 detik setelah efek terjadi, 2~4 Energi per Simbol yang dikonsumsi akan dipulihkan untuk karakter tersebut. Efek Roused dapat dipicu setiap 15 detik sekali, dan Simbol dapat diperoleh bahkan ketika karakter tidak berada di lapangan.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% HP",
                'source' => "Weapon Event Wishes",
                'image' => "The Dockhand's Assistant.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Flute",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Chord
                Serangan Normal atau Serangan Bermuatan memberikan Harmonik pada serangan. Mendapatkan 5 Harmonik akan memicu kekuatan musik dan memberikan 100~200% ATK DMG kepada musuh di sekitarnya. Harmonik bertahan hingga 30 detik, dan maksimum 1 dapat diperoleh setiap 0,5 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Wishes",
                'image' => "The Flute.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Toukabou Shigure",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Kaidan: Rainfall Earthbinder
                Setelah serangan mengenai lawan, serangan itu akan memberikan contoh Cursed Parasol pada salah satu dari mereka selama 10 detik. Efek ini dapat dipicu setiap 15 detik sekali. Jika lawan ini dikalahkan selama durasi Cursed Parasol, CD Cursed Parasol akan segera di-refresh. Karakter yang menggunakan senjata ini akan memberikan 16~32% lebih banyak DMG kepada lawan yang terkena Cursed Parasol.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 36 - 165 Elemental Mastery",
                'source' => "Akitsu Kimodameshi Event",
                'image' => "Toukabou Shigure.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Wolf-Fang",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Northwind Wolf
                DMG yang diberikan oleh Elemental Skill dan Elemental Burst meningkat 16~32%. Ketika Skill Elemen mengenai lawan, CRIT Rate-nya akan meningkat 2~4%. Saat Elemental Burst mengenai lawan, CRIT Rate-nya akan meningkat 2~4%. Kedua efek ini berlangsung selama 10 detik secara terpisah, memiliki 4 tumpukan maksimum, dan dapat dipicu setiap 0,1 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 6% - 27.6% CRIT Rate",
                'source' => "Battle Pass",
                'image' => "Wolf-Fang.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Xiphos' Moonlight",
                'type' => "Sword",
                'rarity' => "4star",
                'detail' =>
                "Jinni's Whisper
                Efek berikut akan terpicu setiap 10 detik: Karakter yang melengkapi akan mendapatkan 0,036~0,072% Pengisian Ulang Energi untuk setiap poin Penguasaan Elemen yang mereka miliki selama 12 detik, dengan anggota party di dekatnya mendapatkan 30% dari buff ini untuk durasi yang sama. Beberapa kali penggunaan senjata ini dapat membuat buff ini bertumpuk. Efek ini akan tetap terpicu meskipun karakter tidak berada di field.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 36 - 165 Elemental Mastery",
                'source' => "Weapon Event Wishes",
                'image' => "Xiphos' Moonlight.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Cool Steel",
                'type' => "Sword",
                'rarity' => "3star",
                'detail' =>
                "Bane of Water and Ice
                Meningkatkan DMG terhadap lawan yang terkena Hydro atau Cryo sebesar 12~24%.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 7.7% - 35.2% ATK",
                'source' => "Wishes",
                'image' => "Cool Steel.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dark Iron Sword",
                'type' => "Sword",
                'rarity' => "3star",
                'detail' =>
                "Overloaded
                Setelah menyebabkan reaksi Overloaded, Superconduct, Electro-Charged, Quicken, Aggresive, Hyperbloom, atau Electro-infused Swirl, ATK akan meningkat 20~40% selama 12 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 7.7% - 35.2% ATK",
                'source' => "Wishes",
                'image' => "Dark Iron Sword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Fillet Blade",
                'type' => "Sword",
                'rarity' => "3star",
                'detail' =>
                "Gash
                Saat terkena, memiliki 50% peluang untuk memberikan 240~400% ATK DMG ke satu musuh. Hanya dapat terjadi sekali setiap 15~11 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 7.7% - 35.2% ATK",
                'source' => "Chests",
                'image' => "Fillet Blade.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Harbinger of Dawn",
                'type' => "Sword",
                'rarity' => "3star",
                'detail' =>
                "Vigorous
                Apabila HP di atas 90%, meningkatkan CRIT Rate sebesar 14~28%.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 10.2% - 46.9% CRIT DMG",
                'source' => "Wishes",
                'image' => "Harbinger of Dawn.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Skyrider Sword",
                'type' => "Sword",
                'rarity' => "3star",
                'detail' =>
                "Determination
                Menggunakan Elemental Burst memberikan peningkatan ATK dan Movement SPD sebesar 12~24% selama 15 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 38 - 354
                2nd Stat (Lv.1-90): 11.3% - 51.7% Energy Recharge",
                'source' => "Wishes",
                'image' => "Skyrider Sword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Traveler's Handy Sword",
                'type' => "Sword",
                'rarity' => "3star",
                'detail' =>
                "Journey
                Setiap Elemental Orb atau Partikel yang dikumpulkan akan memulihkan 1~2% HP.",
                'stats' =>
                "Base ATK (Lv.1-90): 40 - 448
                2nd Stat (Lv.1-90): 6.4% - 29.3% DEF",
                'source' => "Chests",
                'image' => "Traveler's Handy Sword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dull Blade",
                'type' => "Sword",
                'rarity' => "1star",
                'detail' => "-",
                'stats' =>
                "Base ATK (Lv.1-70): 23 - 185",
                'source' => "Weapon Event Wishes",
                'image' => "Dull Blade.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Silver Sword",
                'type' => "Sword",
                'rarity' => "2star",
                'detail' => "-",
                'stats' =>
                "Base ATK (Lv.1-70): 33 - 243",
                'source' => "Chests",
                'image' => "Silver Sword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Claymore
            [
                'name' => "Redhorn Stonethresher",
                'type' => "Claymore",
                'rarity' => "5star",
                'detail' =>
                "Gokadaiou Otogibanashi
                DEF meningkat sebesar 28~56%. DMG Serangan Normal dan Terisi meningkat 40~80% dari DEF.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 19.2% - 88.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Redhorn Stonethresher.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Skyward Pride",
                'type' => "Claymore",
                'rarity' => "5star",
                'detail' =>
                "Sky-ripping Dragon Spine
                Meningkatkan semua DMG sebesar 8~16%. Setelah menggunakan Elemental Burst, sebuah bilah vakum yang memberikan 80~160% ATK sebagai DMG kepada lawan di sepanjang jalurnya akan tercipta saat Serangan Normal atau Serangan Bermuatan mengenai. Berlangsung selama 20 detik atau 8 bilah vakum.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 - 674
                2nd Stat (Lv.1-90): 8% - 36.8% Energy Recharge",
                'source' => "Wishes",
                'image' => "Skyward Pride.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Song of Broken Pines",
                'type' => "Claymore",
                'rarity' => "5star",
                'detail' =>
                "Rebel's Banner-Hymn
                Bagian dari “Gerakan Milenial” yang mengembara di tengah angin. Meningkatkan ATK sebesar 16~32%, dan ketika Serangan Normal atau Serangan Bermuatan mengenai lawan, karakter akan mendapatkan Sigil of Whispers. Efek ini dapat dipicu setiap 0.3 detik sekali. Ketika Anda memiliki empat Sigil of Whispers, semuanya akan dikonsumsi dan semua anggota party di dekatnya akan mendapatkan efek “Millennial Movement: Banner-Hymn” selama 12 detik. “Millennial Movement: Banner-Hymn” meningkatkan Normal ATK SPD sebesar 12~24% dan meningkatkan ATK sebesar 20~40%. Setelah efek ini terpicu, Anda tidak akan mendapatkan Sigils of Whispers selama 20 detik. Dari sekian banyak efek “Millennial Movement”, buff dengan tipe yang sama tidak akan bertumpuk.",
                'stats' =>
                "Base ATK (Lv.1-90): 49 - 741
                2nd Stat (Lv.1-90): 4.5% - 20.7% Physical DMG Bonus",
                'source' => "Weapon Event Wishes",
                'image' => "Song of Broken Pines.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Unforged",
                'type' => "Claymore",
                'rarity' => "5star",
                'detail' =>
                "Golden Majesty
                Meningkatkan Kekuatan Perisai sebesar 20~40%. Mencetak hit pada lawan meningkatkan ATK sebesar 4~8% selama 8 detik. Maksimal 5 tumpukan. Hanya dapat terjadi sekali setiap 0,3 detik. Saat dilindungi oleh perisai, efek peningkatan ATK ini meningkat 100%.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 10.8% - 49.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "The Unforged.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Verdict",
                'type' => "Claymore",
                'rarity' => "5star",
                'detail' =>
                "Many Oaths of Dawn and Dusk
                Meningkatkan ATK sebesar 20~40%. Ketika karakter dalam party Anda mendapatkan Pecahan Elemen dari reaksi Kristalisasi, karakter yang dilengkapi akan mendapatkan 1 Seal, meningkatkan Elemental Skill DMG sebesar 18~36%. Segel bertahan selama 15 detik, dan yang dilengkapi dapat memiliki hingga 2 Segel sekaligus. Semua Segel milik equipper akan menghilang 0,2 detik setelah Skill Elemental mereka memberikan DMG.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 -674
                2nd Stat (Lv.1-90): 4.8% -22.1% CRIT Rate",
                'source' => "Weapon Event Wishes",
                'image' => "Verdict.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Wolf's Gravestone",
                'type' => "Claymore",
                'rarity' => "5star",
                'detail' =>
                "Wolfish Tracker
                Meningkatkan ATK sebesar 20~40%. Saat terkena, serangan terhadap lawan dengan HP kurang dari 30% akan meningkatkan ATK semua anggota party sebesar 40~80% selama 12 detik. Hanya dapat terjadi sekali setiap 30 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 10.8% - 49.6% ATK",
                'source' => "Wishes",
                'image' => "Wolf's Gravestone.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Ultimate Overlord's Mega Magic Sword",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Melussistance!
                ATK meningkat sebesar 12~24%. Bukan hanya itu saja! Dukungan dari semua Melusin yang telah Anda bantu di Desa Merusea mengisi Anda dengan kekuatan! Berdasarkan jumlah Melusine yang telah Anda bantu, ATK Anda meningkat hingga 12~24%.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Roses and Muskets Event",
                'image' => "Ultimate Overlord's Mega Magic Sword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Akuoumaru",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Watatsumi Wavewalker
                Untuk setiap poin dari kapasitas Energi maksimum gabungan seluruh party, Elemental Burst DMG dari karakter yang melengkapi senjata ini akan meningkat sebesar 0,12~0,24%. Maksimal 40~80% peningkatan Elemental Burst DMG dapat dicapai dengan cara ini.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Akuoumaru.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blackcliff Slasher",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Press the Advantage
                Setelah mengalahkan lawan, ATK akan meningkat 12~24% selama 30 detik. Efek ini memiliki maksimum 3 tumpukan, dan durasi setiap tumpukan tidak bergantung pada yang lain.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 12% - 55.1% CRIT DMG",
                'source' => "Paimon's Bargains",
                'image' => "Blackcliff Slasher.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Favonius Greatsword",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Windfall
                Serangan CRIT memiliki peluang 60~100% untuk menghasilkan sejumlah kecil Partikel Elemen, yang akan meregenerasi 6 Energi untuk karakter. Hanya dapat terjadi sekali setiap 12~6 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 13.3% - 61.3% Energy Recharge",
                'source' => "Wishes",
                'image' => "Favonius Greatsword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Forest Regalia",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Forest Sanctuary
                Setelah memicu Burning, Quicken, Aggravate, Spread, Bloom, Hyperbloom, atau Burgeon, Leaf of Consciousness akan dibuat di sekitar karakter selama maksimal 10 detik. Saat diambil, Leaf akan memberikan karakter tersebut 60~120 Elemental Mastery selama 12 detik. Hanya 1 Daun yang dapat dihasilkan dengan cara ini setiap 20 detik. Efek ini masih dapat dipicu jika karakter tidak berada di lapangan. Efek Leaf of Consciousness tidak dapat ditumpuk.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Forging",
                'image' => "Forest Regalia.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Katsuragikiri Nagamasa",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Samurai Conduct
                Meningkatkan Elemental Skill DMG sebesar 6~12%. Setelah Elemental Skill mengenai lawan, karakter akan kehilangan 3 Energi tetapi meregenerasi 3~5 Energi setiap 2 detik selama 6 detik berikutnya. Efek ini dapat terjadi setiap 10 detik sekali. Dapat dipicu bahkan ketika karakter tidak berada di lapangan.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 10.0% - 45.9% Energy Recharge",
                'source' => "Forging",
                'image' => "Katsuragikiri Nagamasa.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Lithic Blade",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Lithic Axiom: Unity
                Untuk setiap karakter dalam party yang berasal dari Liyue, karakter yang melengkapi senjata ini akan mendapatkan peningkatan ATK sebesar 7~11% dan peningkatan CRIT Rate sebesar 3~7%. Efek ini bertumpuk hingga 4 kali.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Lithic Blade.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Luxurious Sea-Lord",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Oceanic Victory
                Meningkatkan Elemental Burst DMG sebesar 12~24%. Ketika Elemental Burst mengenai lawan, ada peluang 100% untuk memanggil serbuan besar tuna yang menghasilkan 100~200% ATK sebagai AoE DMG. Efek ini dapat terjadi setiap 15 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 12% - 55.1% ATK",
                'source' => "Moonlight Merriment Event",
                'image' => "Luxurious Sea-Lord.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Mailed Flower",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Whispers of Wind and Flower
                Dalam waktu 8 detik setelah Skill Elemen karakter mengenai lawan atau karakter memicu Reaksi Elemen, ATK dan Penguasaan Elemen mereka akan meningkat masing-masing sebesar 12~24% dan 48~96.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 24 - 110 Elemental Mastery",
                'source' => "Windblume's Breath Event",
                'image' => "Mailed Flower.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Makhaira Aquamarine",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Desert Pavilion
                Efek berikut akan terpicu setiap 10 detik: Karakter yang melengkapi akan mendapatkan 24~48% dari Penguasaan Elemen mereka sebagai bonus ATK selama 12 detik, dengan anggota party di dekatnya mendapatkan 30% dari buff ini untuk durasi yang sama. Beberapa kali penggunaan senjata ini dapat membuat buff ini bertumpuk. Efek ini akan tetap terpicu meskipun karakter tidak berada di lapangan.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 36 - 165 Elemental Mastery",
                'source' => "Weapon Event Wishes",
                'image' => "Makhaira Aquamarine.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Portable Power Saw",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Sea Shanty
                Saat pengguna disembuhkan atau menyembuhkan orang lain, mereka akan mendapatkan Simbol Stoic yang bertahan selama 30 detik, hingga maksimal 3 Simbol. Saat menggunakan Skill Elemen atau Burst, semua Simbol akan dikonsumsi dan efek Roused akan diberikan selama 10 detik. Untuk setiap Simbol yang dikonsumsi, dapatkan 40~80 Penguasaan Elemen, dan 2 detik setelah efek terjadi, 2~4 Energi per Simbol yang dikonsumsi akan dipulihkan untuk karakter tersebut. Efek Roused dapat dipicu setiap 15 detik sekali, dan Simbol dapat diperoleh bahkan ketika karakter tidak berada di field.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 12% - 55.1% HP",
                'source' => "Weapon Event Wishes",
                'image' => "Portable Power Saw.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prototype Archaic",
                'type' => "Claymore",
                'rarity' => "star",
                'detail' =>
                "Crush
                Saat terkena, Serangan Normal atau Serangan Bermuatan memiliki peluang 50% untuk memberikan tambahan 240~480% ATK DMG kepada lawan dalam AoE kecil. Hanya dapat terjadi sekali setiap 15 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Forging",
                'image' => "Prototype Archaic.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rainslasher",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Bane of Storm and Tide
                Meningkatkan DMG terhadap lawan yang terkena Hydro atau Electro sebesar 20~36%.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 36 - 165 Elemental Mastery",
                'source' => "Wishes",
                'image' => "Rainslasher.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Royal Greatsword",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Focus
                Setelah memberikan kerusakan pada lawan, meningkatkan CRIT Rate sebesar 8~16%. Maksimal 5 tumpukan. Serangan CRIT akan menghapus semua tumpukan yang ada.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Paimon's Bargains",
                'image' => "Royal Greatsword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sacrificial Greatsword",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Composed
                Setelah memberikan kerusakan pada lawan dengan Skill Elemen, skill tersebut memiliki peluang 40~80% untuk mengakhiri CD-nya sendiri. Hanya dapat terjadi sekali setiap 30~16 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Wishes",
                'image' => "Sacrificial Greatsword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Serpent Spine",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Wavesplitter
                Setiap 4 detik karakter berada di lapangan, mereka akan memberikan 6~10% lebih banyak DMG dan mengambil 3~2% lebih banyak DMG. Efek ini memiliki maksimum 5 tumpukan dan tidak akan direset jika karakter meninggalkan lapangan, tetapi akan berkurang 1 tumpukan saat karakter mengambil DMG.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 6% - 27.6% CRIT Rate",
                'source' => "Battle Pass",
                'image' => "Serpent Spine.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Snow-Tombed Starsilver",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Frost Burial
                Menabrak lawan dengan Serangan Normal dan Charged memiliki peluang 60~100% untuk membentuk dan menjatuhkan Es Beku di atas mereka, menghasilkan AoE DMG sebesar 80~140% ATK. Lawan yang terkena Cryo akan mendapatkan DMG sebesar 200~360% ATK. Hanya dapat terjadi sekali setiap 10 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 7.5% - 34.5% Physical DMG Bonus",
                'source' => "Forging",
                'image' => "Snow-Tombed Starsilver.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Talking Stick",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "The Silver Tongue
                ATK akan meningkat 16~32% selama 15 detik setelah terkena efek Pyro. Efek ini dapat dipicu setiap 12 detik sekali. Bonus DMG Semua Elemen akan meningkat 12~24% selama 15 detik setelah terkena Hydro, Cryo, Electro, atau Dendro. Efek ini dapat dipicu setiap 12 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 4% - 18.4% CRIT Rate",
                'source' => "Battle Pass",
                'image' => "Talking Stick.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Bell",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Rebellious Guardian
                Mengambil DMG menghasilkan perisai yang menyerap DMG hingga 20~32% dari HP maksimal. Perisai ini bertahan selama 10 detik atau hingga rusak, dan hanya dapat dipicu setiap 45 detik. Saat dilindungi oleh perisai, karakter mendapatkan 12~24% peningkatan DMG.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% HP",
                'source' => "Wishes",
                'image' => "The Bell.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Tidal Shadow",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "White Cruising Wave
                Setelah pemain disembuhkan, ATK akan meningkat sebesar 24~48% selama 8 detik. Hal ini dapat dipicu bahkan ketika karakter tidak berada di lapangan.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Forging",
                'image' => "Tidal Shadow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Whiteblind",
                'type' => "Claymore",
                'rarity' => "4star",
                'detail' =>
                "Infusion Blade
                Saat terkena, Serangan Normal atau Serangan Bermuatan meningkatkan ATK dan DEF sebesar 6~12% selama 6 detik. Maksimal 4 tumpukan (total 24~48%). Hanya dapat terjadi sekali setiap 0,5 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 11.3% - 51.7% DEF",
                'source' => "Forging",
                'image' => "Whiteblind.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Bloodtainted Greatsword",
                'type' => "Claymore",
                'rarity' => "3star",
                'detail' =>
                "Bane of Fire and Thunder
                Increases DMG against opponents affected by Pyro or Electro by 12~24%.",
                'stats' =>
                "Base ATK (Lv.1-90): 38 - 354
                2nd Stat (Lv.1-90): 41 - 187 Elemental Mastery",
                'source' => "Wishes",
                'image' => "Bloodtainted Greatsword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Debate Club",
                'type' => "Claymore",
                'rarity' => "3star",
                'detail' =>
                "Blunt Conclusion
                Setelah menggunakan Skill Elemental, Serangan Normal atau Serangan Bermuatan, saat terkena, memberikan tambahan 60~120% ATK DMG di area kecil. Efek berlangsung selama 15 detik. DMG hanya dapat terjadi sekali setiap 3 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 7.7% - 35.2% ATK",
                'source' => "Wishes",
                'image' => "Debate Club.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Ferrous Shadow",
                'type' => "Claymore",
                'rarity' => "3star",
                'detail' =>
                "Unbending
                Ketika HP turun di bawah 70~90%, meningkatkan Charged Attack DMG sebesar 30~50%, dan Charged Attack menjadi lebih sulit untuk diinterupsi.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 7.7% - 35.2% HP",
                'source' => "Wishes",
                'image' => "Ferrous Shadow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Skyrider Greatsword",
                'type' => "Claymore",
                'rarity' => "3star",
                'detail' =>
                "Courage
                Saat terkena, Serangan Normal atau Serangan Bermuatan meningkatkan ATK sebesar 6 ~ 10% selama 6 detik. Maksimal 4 tumpukan. Hanya dapat terjadi sekali setiap 0,5 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 9.6% - 43.9% Physical DMG Bonus",
                'source' => "Chests",
                'image' => "Skyrider Greatsword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "White Iron Greatsword",
                'type' => "Claymore",
                'rarity' => "3star",
                'detail' =>
                "Cull the Weak
                Mengalahkan lawan akan memulihkan 8~16% HP.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 9.6% - 43.9% DEF",
                'source' => "Chests",
                'image' => "White Iron Greatsword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Old Merc's Pal",
                'type' => "Claymore",
                'rarity' => "2star",
                'detail' => "-",
                'stats' =>
                "Base ATK (Lv.1-70): 33 - 243",
                'source' => "Chests",
                'image' => "Old Merc's Pal.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Waster Greatsword",
                'type' => "Claymore",
                'rarity' => "1star",
                'detail' => "-",
                'stats' =>
                "Base ATK (Lv.1-70): 23 - 185",
                'source' => "Chests",
                'image' => "Waster Greatsword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Polearm
            [
                'name' => "Crimson Moon's Semblance",
                'type' => "Polearm",
                'rarity' => "5star",
                'detail' =>
                "Ashen Sun's Shadow
                Memberikan Bond of Life sebesar 25% dari HP Maks ketika Charged Attack mengenai lawan. Efek ini dapat dipicu hingga 14 detik sekali. Selain itu, ketika karakter yang dilengkapi memiliki Bond of Life, mereka mendapatkan Bonus 12~28% DMG; jika nilai Bond of Life lebih besar dari atau sama dengan 30% HP Maks, maka dapatkan tambahan 24~56% DMG.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 - 674
                2nd Stat (Lv.1-90): 4.8% -22.1% CRIT Rate",
                'source' => "Weapon Event Wishes",
                'image' => "Crimson Moon's Semblance.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Engulfing Lightning",
                'type' => "Polearm",
                'rarity' => "5star",
                'detail' =>
                "Timeless Dream: Eternal Stove
                ATK meningkat sebesar 28~56% dari Isi Ulang Energi di atas 100%. Anda bisa mendapatkan bonus maksimum 80~120% ATK. Mendapatkan 30~50% Energy Recharge selama 12 detik setelah menggunakan Elemental Burst.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 12% - 55.1% Energy Recharge",
                'source' => "Weapon Event Wishes",
                'image' => "Engulfing Lightning.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Primordial Jade Winged-Spear",
                'type' => "Polearm",
                'rarity' => "5star",
                'detail' =>
                "Eagle Spear of Justice
                Saat terkena, meningkatkan ATK sebesar 3,2 ~ 6,0% selama 6 detik. Maksimal 7 tumpukan. Efek ini hanya dapat terjadi sekali setiap 0,3 detik. Saat memiliki tumpukan maksimum yang mungkin, DMG yang diberikan meningkat sebesar 12~24%.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 - 674
                2nd Stat (Lv.1-90): 4.8% - 22.1% CRIT Rate",
                'source' => "Weapon Event Wishes",
                'image' => "Primordial Jade Winged-Spear.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Skyward Spine",
                'type' => "Polearm",
                'rarity' => "5star",
                'detail' =>
                "Black Wing
                Meningkatkan CRIT Rate sebesar 8~16% dan meningkatkan Normal ATK SPD sebesar 12%. Selain itu, Serangan Normal dan Serangan Bermuatan yang mengenai lawan memiliki peluang 50% untuk memicu bilah vakum yang menghasilkan 40~100% ATK sebagai DMG dalam AoE kecil. Efek ini dapat terjadi tidak lebih dari sekali setiap 2 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 - 674
                2nd Stat (Lv.1-90): 8% - 36.8% Energy Recharge",
                'source' => "Wishes",
                'image' => "Skyward Spine.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Staff of Homa",
                'type' => "Polearm",
                'rarity' => "5star",
                'detail' =>
                "Reckless Cinnabarr\n
                HP meningkat sebesar 20~40%. Selain itu, memberikan Bonus ATK berdasarkan 0,8~1,6% dari HP Maks pengguna. Ketika HP pengguna kurang dari 50%, bonus ATK ini meningkat dengan tambahan 1~1,8% dari HP Maks.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 14.4% - 66.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Staff of Homa.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Staff of the Scarlet Sands",
                'type' => "Polearm",
                'rarity' => "5star",
                'detail' =>
                "Heat Haze at Horizon's End
                Karakter yang melengkapi mendapatkan 52~104% dari Penguasaan Elemen mereka sebagai bonus ATK. Ketika Skill Elemen mengenai lawan, efek Dream of the Scarlet Sands akan diperoleh selama 10 detik: Karakter yang melengkapi akan mendapatkan 28~56% dari Penguasaan Elemen sebagai bonus ATK. Maksimal 3 tumpukan.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 9.6% - 44.1% CRIT Rate",
                'source' => "Weapon Event Wishes",
                'image' => "Staff of the Scarlet Sands.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Vortex Vanquisher",
                'type' => "Polearm",
                'rarity' => "5star",
                'detail' =>
                "Golden Majesty
                Meningkatkan Kekuatan Perisai sebesar 20~40%. Mencetak hit pada lawan meningkatkan ATK sebesar 4~8% selama 8 detik. Maksimal 5 tumpukan. Hanya dapat terjadi sekali setiap 0,3 detik. Saat dilindungi oleh perisai, efek peningkatan ATK ini meningkat 100%.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 10.8% - 49.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Vortex Vanquisher.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Catch",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Shanty
                Meningkatkan Elemental Burst DMG sebesar 16~32% dan Elemental Burst CRIT Rate sebesar 6~12%.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 10.0% - 45.9% Energy Recharge",
                'source' => "Inazuma Fishing Association (Sold by Kujirai Momiji)",
                'image' => "The Catch.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Ballad of the Fjords",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Tales of the Tundra
                Ketika ada setidaknya 3 Jenis Elemen yang berbeda dalam party Anda, Penguasaan Elemen akan meningkat sebesar 120~240.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 6% - 27.6% CRIT Rate",
                'source' => "Battlepass",
                'image' => "Ballad of the Fjords.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blackcliff Pole",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Press the Advantage
                Setelah mengalahkan lawan, ATK akan meningkat 12~24% selama 30 detik. Efek ini memiliki maksimum 3 tumpukan, dan durasi setiap tumpukan tidak bergantung pada yang lain.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 12% - 55.1% CRIT DMG",
                'source' => "Paimon's Bargain",
                'image' => "Blackcliff Pole.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Crescent Pike",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Infusion Needle
                Setelah mengambil Elemental Orb/Partikel, Serangan Normal dan Serangan Bermuatan memberikan tambahan 20~40% ATK sebagai DMG selama 5 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 7.5% - 34.5% Physical DMG Bonus",
                'source' => "Forging",
                'image' => "Crescent Pike.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Deathmatch",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Gladiator
                Jika ada setidaknya 2 lawan di dekatnya, ATK meningkat 16~32% dan DEF meningkat 16~32%. Jika ada kurang dari 2 lawan di dekatnya, ATK meningkat 24~48%.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 -454
                2nd Stat (Lv.1-90): 8% - 36.8% CRIT Rate",
                'source' => "Battlepass",
                'image' => "Deathmatch.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dialogues of the Desert Sages",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Principle of Equilibrium
                Saat pemain melakukan penyembuhan, pulihkan 8~16 Energi. Efek ini dapat dipicu setiap 10 detik sekali dan dapat terjadi bahkan ketika karakter tidak berada di field.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% HP",
                'source' => "Alchemical Ascension Event",
                'image' => "Dialogues of the Desert Sages.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dragon's Bane",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Bane of Flame and Water
                Meningkatkan DMG terhadap lawan yang terkena Hydro atau Pyro sebesar 20~36%.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 48 - 221 Elemental Mastery",
                'source' => "Wishes",
                'image' => "Dragon's Bane.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dragonspine Spear",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Frost Burial
                Menyerang lawan dengan Serangan Normal dan Serangan Bermuatan memiliki peluang 60~100% untuk membentuk dan menjatuhkan Es Beku di atas mereka, menghasilkan 80~140% AoE ATK DMG. Lawan yang terkena Cryo akan mendapatkan 200~360% ATK DMG dari es tersebut. Hanya dapat terjadi sekali setiap 10 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 15% - 69.0% Physical DMG Bonus",
                'source' => "Forging",
                'image' => "Dragonspine Spear.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Favonius Lance",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Windfall
                CRIT Hit memiliki peluang 60~100% untuk menghasilkan sejumlah kecil Partikel Elemen, yang akan meregenerasi 6 Energi untuk karakter. Hanya dapat terjadi sekali setiap 12~6 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Wishes",
                'image' => "Favonius Lance.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Kitain Cross Spear",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Samurai Conduct
                Meningkatkan Elemental Skill DMG sebesar 6~12%. Setelah Elemental Skill mengenai lawan, karakter akan kehilangan 3 Energi tetapi meregenerasi 3~5 Energi setiap 2 detik selama 6 detik berikutnya. Efek ini dapat terjadi setiap 10 detik sekali. Dapat dipicu bahkan ketika karakter tidak berada di field.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 24 - 110 Elemental Mastery",
                'source' => "Forging",
                'image' => "Kitain Cross Spear.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Lithic Spear",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Lithic Axiom: Unity
                Untuk setiap karakter dalam party yang berasal dari Liyue, karakter yang melengkapi senjata ini akan mendapatkan peningkatan ATK sebesar 7~11% dan peningkatan CRIT Rate sebesar 3~7%. Efek ini bertumpuk hingga 4 kali.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Lithic Spear.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Missive Windspear",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "The Wind Unattained
                Dalam waktu 10 detik setelah Reaksi Elemen dipicu, ATK meningkat 12~24% dan Penguasaan Elemen meningkat 48~96.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Of Ballads and Brews Event",
                'image' => "Missive Windspear.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Moonpiercer",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Stillwood Moonshadow
                Setelah memicu Burning, Quicken, Aggravate, Spread, Bloom, Hyperbloom, atau Burgeon, sebuah Leaf of Revival akan tercipta di sekitar karakter selama maksimal 10 detik. Saat diambil, Leaf akan memberikan karakter 16~32% ATK selama 12 detik. Hanya 1 Leaf yang dapat dihasilkan dengan cara ini setiap 20 detik. Efek ini masih dapat dipicu jika karakter tidak berada di lapangan.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 24 - 110 Elemental Mastery",
                'source' => "Forging",
                'image' => "Moonpiercer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prospector's Drill",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Masons' Ditty
                Ketika pemain disembuhkan atau menyembuhkan orang lain, mereka akan mendapatkan Simbol Persatuan yang bertahan selama 30 detik, hingga maksimal 3 Simbol. Saat menggunakan Skill Elemen atau Burst, semua Simbol akan dikonsumsi dan efek Perjuangan akan diberikan selama 10 detik. Untuk setiap Simbol yang dikonsumsi, dapatkan 3~7% ATK dan 7~13% Bonus DMG Semua Elemen. Efek Struggle dapat dipicu setiap 15 detik sekali, dan Simbol dapat diperoleh bahkan ketika karakter tidak berada di field.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Prospector's Drill.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prototype Starglitter",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Magic Affinity
                Setelah menggunakan Skill Elemental, meningkatkan Normal dan Charged Attack DMG sebesar 8~16% selama 12 detik. Maksimal 2 tumpukan.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 10.0% - 45.9% Energy Recharge",
                'source' => "Forging",
                'image' => "Prototype Starglitter.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rightful Reward",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Tip of the Spear
                Saat pemain disembuhkan, pulihkan 8~16 Energi. Efek ini dapat dipicu setiap 10 detik sekali, dan dapat terjadi bahkan ketika karakter tidak berada di field.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% HP",
                'source' => "Forging",
                'image' => "Rightful Reward.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Royal Spear",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Focus
                Setelah memberikan kerusakan pada lawan, meningkatkan CRIT Rate sebesar 8~16%. Maksimal 5 tumpukan. Serangan CRIT akan menghapus semua tumpukan yang ada.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Paimon's Bargains",
                'image' => "Royal Spear.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Wavebreaker's Fin",
                'type' => "Polearm",
                'rarity' => "4star",
                'detail' =>
                "Watatsumi Wavewalker
                Untuk setiap poin dari kapasitas Energi maksimum gabungan seluruh party, Elemental Burst DMG dari karakter yang melengkapi senjata ini akan meningkat sebesar 0,12~0,24%. Maksimal 40~80% peningkatan Elemental Burst DMG dapat dicapai dengan cara ini.",
                'stats' =>
                "Base ATK (Lv.1-90): 45 - 620
                2nd Stat (Lv.1-90): 3% - 13.8% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Wavebreaker's Fin.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Black Tassel",
                'type' => "Polearm",
                'rarity' => "3star",
                'detail' =>
                "Bane of the Soft
                Meningkatkan DMG terhadap slime sebesar 40 ~ 80%.",
                'stats' =>
                "Base ATK (Lv.1-90): 38 - 354
                2nd Stat (Lv.1-90): 10.2% - 46.9% HP",
                'source' => "Wishes",
                'image' => "Black Tassel.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Halberd",
                'type' => "Polearm",
                'rarity' => "3star",
                'detail' =>
                "Heavy
                Serangan Normal memberikan tambahan 160~320% DMG. Hanya dapat terjadi sekali setiap 10 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 40 - 448
                2nd Stat (Lv.1-90): 5.1% - 23.4% ATK",
                'source' => "Chests",
                'image' => "Halberd.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "White Tassel",
                'type' => "Polearm",
                'rarity' => "3star",
                'detail' =>
                "Sharp
                Meningkatkan DMG Serangan Normal sebesar 24~48%.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 5.1% - 23.4% CRIT Rate",
                'source' => "Chests",
                'image' => "White Tassel.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Beginner's Protector",
                'type' => "Polearm",
                'rarity' => "1star",
                'detail' =>
                "-",
                'stats' =>
                "Base ATK (Lv.1-70): 23 - 185",
                'source' => "Chests",
                'image' => "Beginner's Protector.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Iron Point",
                'type' => "Polearm",
                'rarity' => "2star",
                'detail' =>
                "-",
                'stats' =>
                "Base ATK (Lv.1-70): 33 - 243",
                'source' => "Chests",
                'image' => "Iron Point.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Catalyst
            [
                'name' => "Crane's Echoing Call",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Cloudfall Axiom
                Setelah karakter yang melengkapi mengenai lawan dengan Serangan Terjun, semua anggota party di dekatnya akan memberikan 28~80% peningkatan DMG selama 20 detik. Ketika anggota party terdekat mengenai lawan dengan Serangan Terjun, mereka akan memulihkan 2.5~3.5 Energi ke karakter yang melengkapi. Energi dapat dipulihkan dengan cara ini setiap 0,7 detik. Efek pemulihan energi ini dapat dipicu meskipun karakter yang melengkapi tidak berada di lapangan.",
                'stats' =>
                "Base ATK (Lv.1-90): 49 - 741
                2nd Stat (Lv.1-90): 3.6% - 16.5% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Crane's Echoing Call.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Everlasting Moonglow",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Byakuya Kougetsu
                Bonus Penyembuhan meningkat 10~20%, DMG Serangan Normal meningkat 1~3.0% dari HP Maks karakter yang melengkapi senjata ini. Selama 12 detik setelah menggunakan Elemental Burst, Serangan Normal yang mengenai lawan akan memulihkan 0,6 Energi. Energi dapat dipulihkan dengan cara ini setiap 0.1 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 10.8% - 49.6% HP",
                'source' => "Weapon Event Wishes",
                'image' => "Everlasting Moonglow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Jadefall's Splendor",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Primordial Jade Regalia
                Selama 3 detik setelah menggunakan Elemental Burst atau membuat perisai, karakter yang dilengkapi bisa mendapatkan efek Primordial Jade Regalia: Memulihkan 4.5~6.5 Energi setiap 2.5 detik, dan mendapatkan 0.3~1.1% Bonus Elemental DMG untuk Jenis Elemen yang sesuai untuk setiap 1.000 HP Maks yang dimiliki, hingga 12~44%. Primordial Jade Regalia akan tetap berlaku meskipun karakter yang dilengkapi tidak berada di field",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 10.8% - 49.6% ",
                'source' => "Weapon Event Wishes",
                'image' => "Jadefall's Splendor.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Kagura's Verity",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Kagura Dance of the Sacred Sakura
                Mendapatkan efek Kagura Dance saat menggunakan Elemental Skill, menyebabkan Elemental Skill DMG dari karakter yang menggunakan senjata ini meningkat 12~24% selama 16 detik. Maksimal 3 tumpukan. Karakter ini akan mendapatkan 12~24% Bonus All Elemental DMG ketika mereka memiliki 3 stack.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 14.4% - 66.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Kagura's Verity.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Lost Prayer to the Sacred Winds",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Boundless Blessing
                Meningkatkan Movement SPD sebesar 10%. Saat bertempur, dapatkan Bonus Elemental DMG sebesar 8~16% setiap 4 detik. Maksimal 4 tumpukan. Berlangsung hingga karakter jatuh atau meninggalkan pertempuran.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 7.2% - 33.1% CRIT Rate",
                'source' => "Wishes",
                'image' => "Lost Prayer to the Sacred Winds.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Memory of Dust",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Golden Majesty
                Meningkatkan Kekuatan Perisai sebesar 20~40%. Mencetak hit pada lawan meningkatkan ATK sebesar 4~8% selama 8 detik. Maksimal 5 tumpukan. Hanya dapat terjadi sekali setiap 0,3 detik. Saat dilindungi oleh perisai, efek peningkatan ATK ini meningkat 100%.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 10.8% - 49.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Memory of Dust.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Skyward Atlas",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Wandering Clouds
                Meningkatkan Bonus Elemental DMG sebesar 12~24%. Serangan Normal Attack memiliki peluang 50% untuk mendapatkan bantuan awan. yang secara aktif mencari lawan terdekat untuk menyerang selama 15 detik, memberikan 160 ~ 320% ATK DMG. Hanya dapat terjadi sekali setiap 30 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 - 674
                2nd Stat (Lv.1-90): 7.2% - 33.1% ATK",
                'source' => "Wishes",
                'image' => "Skyward Atlas.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Tome of the Eternal Flow",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Aeon Wave
                HP meningkat sebesar 16~32%. Ketika HP saat ini meningkat atau menurun, Charged Attack DMG akan meningkat 14~30% selama 4 detik. Maksimal 3 tumpukan, dapat dipicu setiap 0,3 detik sekali. Ketika Anda memiliki 3 tumpukan atau menyegarkan durasi tumpukan ketiga, 8~12 Energi akan dipulihkan. Efek pemulihan Energi ini dapat dipicu setiap 12 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 19.2% - 88.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Tome of the Eternal Flow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Tulaytullah's Remembrance",
                'type' => "Catalyst",
                'rarity' => "5star",
                'detail' =>
                "Bygone Azure Teardrop
                SPD Serangan Normal meningkat 10~20%. Setelah pengguna mengeluarkan Skill Elemental, DMG Serangan Normal akan meningkat 4,8~9,6% setiap detik selama 14 detik. Setelah karakter ini mengenai lawan dengan Serangan Normal selama durasi tersebut, DMG Serangan Normal akan meningkat sebesar 9,6~19,2%. Peningkatan ini dapat dipicu setiap 0.3 detik sekali. Peningkatan DMG Serangan Normal maksimum per durasi tunggal dari keseluruhan efek adalah 48~96%. Efeknya akan hilang ketika pemain meninggalkan lapangan, dan menggunakan Skill Elemen lagi akan mereset semua buff DMG.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 - 674
                2nd Stat (Lv.1-90): 9.6% - 44.1% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Tulaytullah's Remembrance.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Ballad of the Boundless Blue",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Azure Skies
                Dalam waktu 6 detik setelah Serangan Normal atau Serangan Bermuatan mengenai lawan, DMG Serangan Normal akan meningkat 8~16% dan DMG Serangan Bermuatan akan meningkat 6~12%. Maksimal 3 tumpukan. Efek ini dapat dipicu setiap 0,3 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Waterborne Poetry Event",
                'image' => "Ballad of the Boundless Blue.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blackcliff Agate",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Press the Advantage
                Setelah mengalahkan lawan, ATK akan meningkat 12~24% selama 30 detik. Efek ini memiliki maksimum 3 tumpukan, dan durasi setiap tumpukan tidak bergantung pada yang lain.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 12% - 55.1% CRIT DMG",
                'source' => "Paimon's Bargain",
                'image' => "Blackcliff Agate.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dodoco Tales",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Dodoventure!
                Serangan Normal yang mengenai lawan meningkatkan Charged Attack DMG sebesar 16~32% selama 6 detik. Serangan Charged Attack pada lawan meningkatkan ATK sebesar 8~16% selama 6 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 -454
                2nd Stat (Lv.1-90): 12% - 55.1% ATK",
                'source' => "Midsummer Island Adventure Event",
                'image' => "Dodoco Tales.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Eye of Perception",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Echo
                Serangan Normal dan Serangan Bermuatan memiliki peluang 50% untuk menembakkan Bolt of Perception, menghasilkan 240~360% ATK sebagai DMG. Baut ini dapat memantul di antara lawan maksimal 4 kali. Efek ini dapat terjadi setiap 12~8 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 12% - 55.1% ATK",
                'source' => "Wishes",
                'image' => "Eye of Perception.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Favonius Codex",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Windfall
                Serangan CRIT memiliki peluang 60~100% untuk menghasilkan sejumlah kecil Partikel Elemen, yang akan meregenerasi 6 Energi untuk karakter. Hanya dapat terjadi sekali setiap 12~6 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 10.0% - 45.9% Energy Recharge",
                'source' => "Wishes",
                'image' => "Favonius Codex.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Flowing Purity",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Unfinished Masterpiece
                Saat menggunakan Skill Elemental, Bonus DMG Semua Elemen akan meningkat 8~16% selama 15 detik, dan Ikatan Kehidupan senilai 24% dari HP Maks akan diberikan. Efek ini dapat dipicu setiap 10 detik sekali. Ketika Bond Of Life selesai, setiap 1.000 HP yang dihilangkan dalam proses tersebut akan memberikan 2~4% All Elemental DMG Bonus, hingga maksimum 12~24%. Efek ini berlangsung selama 15 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Forging",
                'image' => "Flowing Purity.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Frostbearer",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Frost Burial
                Menabrak lawan dengan Serangan Normal dan Serangan Bermuatan memiliki peluang 60~100% untuk membentuk dan menjatuhkan Es Beku di atas mereka, menghasilkan 80~140% AoE ATK DMG. Lawan yang terkena Cryo akan mendapatkan 200~360% ATK DMG dari es tersebut. Hanya dapat terjadi sekali setiap 10 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Forging",
                'image' => "Frostbearer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Fruit of Fulfillment",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Full Circle
                Dapatkan efek “Wax and Wane” setelah Reaksi Elemen dipicu, mendapatkan 24~36 Penguasaan Elemen sambil kehilangan 5% ATK. Untuk setiap 0.3 detik, 1 tumpukan Wax and Wane dapat diperoleh. Maksimal 5 tumpukan. Untuk setiap 6 detik yang berlalu tanpa Reaksi Elemen yang dipicu, 1 tumpukan akan hilang. Efek ini dapat dipicu bahkan ketika karakter berada di luar field.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 10.0% - 45.9% Energy Recharge",
                'source' => "Forging",
                'image' => "Fruit of Fulfillment.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hakushin Ring",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Sakura Saiguu
                Setelah karakter yang dilengkapi dengan senjata ini memicu reaksi elemen Elektro, anggota party terdekat dengan Tipe Elemen yang terlibat dalam reaksi elemen menerima Bonus DMG Elemen sebesar 10~20% untuk elemen mereka, yang berlangsung selama 6 detik. Bonus Elemen yang diperoleh dengan cara ini tidak dapat ditumpuk.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Forging",
                'image' => "Hakushin Ring.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Mappa Mare",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Infusion Scroll
                Memicu reaksi Elemental akan memberikan Bonus DMG Elemental sebesar 8~16% selama 10 detik. Maksimal 2 tumpukan.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 24 - 110 Elemental Mastery",
                'source' => "Forging",
                'image' => "Mappa Mare.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Oathsworn Eye",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "People of the Faltering Light
                Meningkatkan Isi Ulang Energi sebesar 24~48% selama 10 detik setelah menggunakan Skill Elemen.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Three Realms Gateway Offering Event",
                'image' => "Oathsworn Eye.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prototype Amber",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Gilding
                Menggunakan Elemental Burst akan meregenerasi 4~6 Energi setiap 2 detik selama 6 detik. Semua anggota party akan meregenerasi 4~6% HP setiap 2 detik selama durasi ini.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% HP",
                'source' => "Forging",
                'image' => "Prototype Amber.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Royal Grimoire",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Focus
                Setelah memberikan kerusakan pada lawan, meningkatkan CRIT Rate sebesar 8~16%. Maksimal 5 tumpukan. Serangan CRIT akan menghapus semua tumpukan yang ada.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Paimon's Bargain",
                'image' => "Royal Grimoire.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sacrificial Fragments",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Composed
                Setelah memberikan kerusakan pada lawan dengan Skill Elemen, skill tersebut memiliki peluang 40~80% untuk mengakhiri CD-nya sendiri. Hanya dapat terjadi sekali setiap 30~16 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 48 - 221 Elemental Mastery",
                'source' => "Wishes",
                'image' => "Sacrificial Fragments.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sacrificial Jade",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Jade Circulation
                Ketika tidak berada di lapangan selama lebih dari 5 detik, HP Maks akan meningkat 32~64% dan Penguasaan Elemen akan meningkat 40~80. Efek ini akan dibatalkan setelah pemain berada di lapangan selama 10 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 8% - 36.8% CRIT Rate",
                'source' => "Battlepass",
                'image' => "Sacrificial Jade.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Solar Pearl",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Solar Shine
                Serangan Normal Attack meningkatkan Elemental Skill dan Elemental Burst DMG sebesar 20~40% selama 6 detik. Demikian juga, serangan Elemental Skill atau Elemental Burst meningkatkan Normal Attack DMG sebesar 20~40% selama 6 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 6% - 27.6% CRIT Rate",
                'source' => "Battlepass",
                'image' => "Solar Pearl.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Widsith",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Debut
                Ketika karakter mengambil alih lapangan, mereka akan mendapatkan lagu tema secara acak selama 10 detik. Ini hanya dapat terjadi sekali setiap 30 detik. Pengulangan: ATK meningkat sebesar 60~120%. Aria: Meningkatkan semua Elemental DMG sebesar 48~96%. Selingan: Penguasaan Elemen meningkat sebesar 240~480.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 12% - 55.1% CRIT DMG",
                'source' => "Wishes",
                'image' => "The Widsith.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Wandering Evenstar",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Wildling Nightstar
                Efek berikut akan terpicu setiap 10 detik: Karakter yang melengkapi akan mendapatkan 24~48% dari Penguasaan Elemen mereka sebagai bonus ATK selama 12 detik, dengan anggota party di dekatnya mendapatkan 30% dari buff ini untuk durasi yang sama. Beberapa kali penggunaan senjata ini dapat membuat buff ini bertumpuk. Efek ini akan tetap terpicu meskipun karakter tidak berada di field.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 36 - 165 Elemental Mastery",
                'source' => "Weapon Event Wishes",
                'image' => "Wandering Evenstar.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Wine and Song",
                'type' => "Catalyst",
                'rarity' => "4star",
                'detail' =>
                "Ever-Changing
                Menyerang lawan dengan Serangan Normal akan mengurangi konsumsi Stamina Sprint atau Alternate Sprint sebesar 14~22% selama 5 detik. Selain itu, menggunakan kemampuan Sprint atau Alternate Sprint meningkatkan ATK sebesar 20~40% selama 5 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Weapon Event Wishes",
                'image' => "Wine and Song.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Emerald Orb",
                'type' => "Catalyst",
                'rarity' => "3star",
                'detail' =>
                "Rapids
                Setelah menyebabkan reaksi Vaporize, Electro-Charged, Frozen, Bloom, atau Hydro-infused Swirl, meningkatkan ATK sebesar 20 ~ 40% selama 12 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 40 - 448
                2nd Stat (Lv.1-90): 20 - 94 Elemental Mastery",
                'source' => "Wishes",
                'image' => "Emerald Orb.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Magic Guide",
                'type' => "Catalyst",
                'rarity' => "3star",
                'detail' =>
                "Bane of Storm and Tide
                Meningkatkan DMG terhadap lawan yang terkena Hydro atau Electro sebesar 12~24%.",
                'stats' =>
                "Base ATK (Lv.1-90): 38 - 354
                2nd Stat (Lv.1-90): 41 - 187 Elemental Mastery",
                'source' => "Wishes",
                'image' => "Magic Guide.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Otherworldly Story",
                'type' => "Catalyst",
                'rarity' => "3star",
                'detail' =>
                "Energy Shower
                Setiap Elemental Orb atau Partikel yang dikumpulkan akan memulihkan 1~2% HP.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 8.5% - 39.0% Energy Recharge",
                'source' => "Chests",
                'image' => "Otherworldly Story.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Thrilling Tales of Dragon Slayers",
                'type' => "Catalyst",
                'rarity' => "3star",
                'detail' =>
                "Heritage
                Ketika berganti karakter, karakter baru yang mengambil alih medan akan meningkatkan ATK sebesar 24~48% selama 10 detik. Efek ini hanya dapat terjadi sekali setiap 20 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 7.7% - 35.2% HP",
                'source' => "Wishes",
                'image' => "Thrilling Tales of Dragon Slayers.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Twin Nephrite",
                'type' => "Catalyst",
                'rarity' => "3star",
                'detail' =>
                "Guerilla Tactics
                Mengalahkan lawan akan meningkatkan Movement SPD dan ATK sebesar 12~20% selama 15 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 40 - 448
                2nd Stat (Lv.1-90): 3.4% - 15.6% CRIT Rate",
                'source' => "Chests",
                'image' => "Twin Nephrite.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Pocket Grimoire",
                'type' => "Catalyst",
                'rarity' => "2star",
                'detail' =>
                "-",
                'stats' =>
                "Base ATK (Lv.1-70): 33 - 243",
                'source' => "Chests",
                'image' => "Pocket Grimoire.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Apprentice's Notes",
                'type' => "Catalyst",
                'rarity' => "1star",
                'detail' =>
                "-",
                'stats' =>
                "Base ATK (Lv.1-70): 23 - 185",
                'source' => "Chests",
                'image' => "Apprentice's Notes.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Bow
            [
                'name' => "Hunter's Path",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "At the End of the Beast-Paths
                Dapatkan 12 ~ 24% Bonus DMG Semua Elemen. Dapatkan efek Tireless Hunt setelah mengenai lawan dengan Serangan Bermuatan. Efek ini meningkatkan Charged Attack DMG sebesar 160~320% dari Elemental Mastery. Efek ini akan hilang setelah 12 kali Serangan Bermuatan atau 10 kali. Hanya 1 contoh Tireless Hunt yang dapat diperoleh setiap 12 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 542
                2nd Stat (Lv.1-90): 9.6% - 44.1% CRIT Rate",
                'source' => "Weapon Event Wishes",
                'image' => "Hunter's Path.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => "Polar Star",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "Daylight's Augury
                Elemental Skill dan Elemental Burst DMG meningkat 12~24%. Setelah Serangan Normal, Serangan Bermuatan, Skill Elemental, atau Elemental Burst mengenai lawan, 1 tumpukan Ashen Nightstar akan diperoleh selama 12 detik. Ketika 1/2/3/4 tumpukan Ashen Nightstar hadir, ATK meningkat sebesar 10/20/30/48~20/40/60/96%. Tumpukan Ashen Nightstar yang dihasilkan dari Normal Attack, Charged Attack, Elemental Skill, atau Elemental Burst akan dihitung secara terpisah dari yang lain.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 7.2% - 33.1% CRIT Rate",
                'source' => "Weapon Event Wishes",
                'image' => "Polar Star.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The First Great Magic",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "Parsifal the Great
                DMG yang diberikan oleh Serangan Bermuatan meningkat sebesar 16~32%. Untuk setiap anggota party dengan Tipe Elemen yang sama dengan pengguna (termasuk pengguna itu sendiri), dapatkan 1 tumpukan Gimmick. Untuk setiap anggota party dengan Tipe Elemen yang berbeda dari pengguna, dapatkan 1 tumpukan Teater. Ketika pemain memiliki 1/2/3 atau lebih tumpukan Gimmick, ATK akan meningkat sebesar 16% / 32% / 48% ~ 32% / 64% / 96%. Saat pemain memiliki 1/2/3 atau lebih tumpukan Theatrics, Movement SPD akan meningkat sebesar 4% / 7% / 10% ~ 12% / 15% / 18%.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 14.4% -66.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "The First Great Magic",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Skyward Harp",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "Echoing Ballad
                Meningkatkan CRIT DMG sebesar 20~40%. Serangan memiliki peluang 60~100% untuk memberikan serangan AoE kecil, memberikan 125% ATK Fisik DMG. Hanya dapat terjadi sekali setiap 4~2 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 48 - 674
                2nd Stat (Lv.1-90): 4.8% - 22.1% CRIT Rate",
                'source' => "Wishes",
                'image' => "Skyward Harp.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Thundering Pulse",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "Rule By Thunder
                Meningkatkan ATK sebesar 20~40% dan memberikan kekuatan Emblem Guntur. Pada level tumpukan 1/2/3, Emblem Guntur meningkatkan DMG Serangan Normal sebesar 12/24/40~24/48/80%. Karakter akan mendapatkan 1 tumpukan Emblem Guntur di setiap skenario berikut: Serangan Normal memberikan DMG (tumpukan berlangsung selama 5 detik), mengeluarkan Skill Elemen (tumpukan berlangsung selama 10 detik); Energi kurang dari 100% (tumpukan menghilang saat Energi penuh). Durasi setiap tumpukan dihitung secara independen.",
                'stats' =>
                "Base ATK (Lv.1-90): 46 - 608
                2nd Stat (Lv.1-90): 14.4% - 66.2% CRIT DMG",
                'source' => "Weapon Event Wishes",
                'image' => "Thundering Pulse.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Alley Hunter",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Oppidan Ambush
                Ketika karakter yang dilengkapi dengan senjata ini berada di dalam party tetapi tidak berada di lapangan, DMG mereka akan meningkat sebesar 2~4% setiap detiknya hingga maksimal 20~40%. Ketika karakter berada di lapangan selama lebih dari 4 detik, buff DMG yang disebutkan di atas akan berkurang 4~8% per detik hingga mencapai 0%.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Alley Hunter.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blackcliff Warbow",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Press the Advantage
                Setelah mengalahkan lawan, ATK akan meningkat 12~24% selama 30 detik. Efek ini memiliki maksimum 3 tumpukan, dan durasi setiap tumpukan tidak bergantung pada yang lain.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 8% - 36.8% CRIT DMG",
                'source' => "Paimon's Bargain",
                'image' => "Blackcliff Warbow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Compound Bow",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Infusion Arrow
                Serangan Normal Attack dan Charged Attack meningkatkan ATK sebesar 4~8% dan Normal ATK SPD sebesar 1,2~2,4% selama 6 detik. Maksimal 4 tumpukan. Hanya dapat terjadi sekali setiap 0,3 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 15% - 69.0% Physical DMG Bonus",
                'source' => "Forging",
                'image' => "Compound Bow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "End of the Line",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Net Snapper
                Memicu efek Flowrider setelah menggunakan Skill Elemen, memberikan 80~160% ATK sebagai AoE DMG saat mengenai lawan dengan serangan. Flowrider akan hilang setelah 15 detik atau setelah menyebabkan 3 kali AoE DMG. Hanya 1 contoh AoE DMG yang dapat dihasilkan setiap 2 detik dengan cara ini. Flowrider dapat dipicu setiap 12 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 10.0% - 45.9% Energy Recharge",
                'source' => "Sumeru Fishing Association (Sold by Loumelat)",
                'image' => "End of the Line.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Fading Twilight",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Radiance of the Deeps
                Memiliki tiga status, Evengleam, Afterglow, dan Dawnblaze, yang meningkatkan DMG yang diberikan masing-masing sebesar 6% / 10% / 14% ~ 12% / 20% / 28%. Saat serangan mengenai lawan, senjata ini akan beralih ke status berikutnya. Senjata ini dapat berganti status setiap 7 detik sekali. Karakter yang melengkapi senjata ini masih dapat memicu pergantian status saat tidak berada di lapangan.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Perilous Trail Event",
                'image' => "Fading Twilight.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Favonius Warbow",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Windfall
                Serangan CRIT memiliki peluang 60~100% untuk menghasilkan sejumlah kecil Partikel Elemen, yang akan meregenerasi 6 Energi untuk karakter. Hanya dapat terjadi sekali setiap 12~6 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 13.3% - 61.3% Energy Recharge",
                'source' => "Wishes",
                'image' => "Favonius Warbow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hamayumi",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Full Draw
                Meningkatkan Normal Attack DMG sebesar 16~32% dan Charged Attack DMG sebesar 12~24%. Ketika Energi karakter yang dilengkapi mencapai 100%, efek ini akan meningkat 100%.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 12% - 55.1% ATK",
                'source' => "Forging",
                'image' => "Hamayumi.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Ibis Piercer",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Secret Wisdom's Favor
                Penguasaan Elemen karakter akan meningkat sebesar 40~80 dalam waktu 6 detik setelah Serangan Bermuatan mengenai lawan. Maksimal 2 tumpukan. Efek ini dapat dipicu setiap 0,5 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Duel! The Summoners' Summit! Event",
                'image' => "Ibis Piercer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "King's Squire",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Labyrinth Lord's Instruction
                Dapatkan efek Teachings of the Forest saat melepaskan Elemental Skill dan Burst, meningkatkan Elemental Mastery sebesar 60~140 selama 12 detik. Efek ini akan hilang saat berganti karakter. Ketika efek Teachings of the Forest berakhir atau dihilangkan, efek ini akan memberikan 100~180% ATK sebagai DMG kepada 1 lawan terdekat. Efek Teachings of the Forest dapat dipicu setiap 20 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 41 - 454
                2nd Stat (Lv.1-90): 12% - 55.1% ATK",
                'source' => "Forging",
                'image' => "King's Squire.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Mitternachts Waltz",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Evernight Duet
                Serangan Normal yang mengenai lawan meningkatkan Elemental Skill DMG sebesar 20~40% selama 5 detik. Serangan Elemental Skill pada lawan meningkatkan Normal Attack DMG sebesar 20~40% selama 5 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 11.3% - 51.7% Physical DMG Bonus",
                'source' => "Weapon Event Wishes",
                'image' => "Mitternachts Waltz.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Mouun's Moon",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Watatsumi Wavewalker
                Untuk setiap poin dari kapasitas Energi maksimum gabungan seluruh party, Elemental Burst DMG dari karakter yang melengkapi senjata ini akan meningkat sebesar 0,12~0,24%. Maksimal 40~80% peningkatan Elemental Burst DMG dapat dicapai dengan cara ini.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Mouun's Moon.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Predator",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Strong Strike
                Memberikan Cryo DMG kepada lawan akan meningkatkan Normal dan Charged Attack DMG karakter ini sebesar 10% selama 6 detik. Efek ini dapat memiliki maksimal 2 tumpukan. Selain itu, ketika Aloy menggunakan Predator, ATK meningkat sebesar 66.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Diberikan melalui Mail di PS4/PS5 antara Versi 2.1-2.2",
                'image' => "Predator.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prototype Crescent",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Unreturning
                Serangan Charged Attack pada titik lemah meningkatkan Movement SPD sebesar 10% dan ATK sebesar 36~72% selama 10 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Forging",
                'image' => "Prototype Crescent.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Range Gauge",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Masons' Ditty
                Ketika pemain disembuhkan atau menyembuhkan orang lain, mereka akan mendapatkan Simbol Persatuan yang bertahan selama 30 detik, hingga maksimal 3 Simbol. Saat menggunakan Skill Elemen atau Burst, semua Simbol akan dikonsumsi dan efek Perjuangan akan diberikan selama 10 detik. Untuk setiap Simbol yang dikonsumsi, dapatkan 3~7% ATK dan 7~13% Bonus DMG Semua Elemen. Efek Struggle dapat dipicu setiap 15 detik sekali, dan Simbol dapat diperoleh bahkan ketika karakter tidak berada di field.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6% - 27.6% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Range Gauge.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Royal Bow",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Focus
                Setelah memberikan kerusakan pada lawan, meningkatkan CRIT Rate sebesar 8~16%. Maksimal 5 tumpukan. Serangan CRIT akan menghapus semua tumpukan yang ada.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Paimon's Bargain",
                'image' => "Royal Bow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rust",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Rapid Firing
                Meningkatkan DMG Serangan Normal sebesar 40~80% tetapi mengurangi DMG Charged Attack sebesar 10%.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Weapon Event Wishes",
                'image' => "Rust.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sacrificial Bow",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Composed
                Setelah memberikan kerusakan pada lawan dengan Skill Elemen, skill tersebut memiliki peluang 40~80% untuk mengakhiri CD-nya sendiri. Hanya dapat terjadi sekali setiap 30~16 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 6.7% - 30.6% Energy Recharge",
                'source' => "Wishes",
                'image' => "Sacrificial Bow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Scion of the Blazing Sun",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "The Way of Sunfire
                Setelah Charged Attack mengenai lawan, Panah Api Matahari akan turun ke arah lawan yang terkena, memberikan 60~120% ATK sebagai DMG, dan memberikan efek Heartsearer kepada lawan yang terkena serangan Panah tersebut selama 10 detik. Lawan yang terkena Heartsearer menerima 28~56% lebih banyak Charged Attack DMG dari pengguna. Panah Api Matahari dapat dipicu setiap 10 detik sekali.",
                'stats' =>
                "Base ATK (Lv.1-90): 44 - 565
                2nd Stat (Lv.1-90): 4% - 18.4% CRIT Rate",
                'source' => "Battlepass",
                'image' => "Scion of the Blazing Sun.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Song of Stillness",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Benthic Pulse
                Setelah pengguna disembuhkan, mereka akan memberikan 16 ~ 32% lebih banyak DMG selama 8 detik. Hal ini dapat dipicu bahkan ketika karakter tidak berada di lapangan.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 9% - 41.3% ATK",
                'source' => "Forging",
                'image' => "Song of Stillness.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Stringless",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Arrowless Song
                Meningkatkan Elemental Skill dan Elemental Burst DMG sebesar 24~48%.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 36 - 156 Elemental Mastery",
                'source' => "Wishes",
                'image' => "The Stringless.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Viridescent Hunt",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Verdant Wind
                Setelah terkena, Serangan Normal dan Serangan Tembakan Bertarget memiliki peluang 50% untuk menghasilkan Topan, yang akan terus menarik lawan di sekitarnya, memberikan 40~80% ATK sebagai DMG kepada lawan-lawan ini setiap 0,5 detik selama 4 detik. Efek ini hanya dapat terjadi sekali setiap 14~10 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 6% - 27.6% CRIT Rate",
                'source' => "Battlepass",
                'image' => "The Viridescent Hunt.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Windblume Ode",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Windblume Wish
                Setelah menggunakan Skill Elemental, dapatkan anugerah dari keinginan kuno Windblume, meningkatkan ATK sebesar 16~32% selama 6 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 42 - 510
                2nd Stat (Lv.1-90): 36 - 156 Elemental Mastery",
                'source' => "Invitation of Windblume Event",
                'image' => "Windblume Ode.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Messenger",
                'type' => "Bow",
                'rarity' => "3star",
                'detail' =>
                "Archer's Message
                Serangan Charged Attack pada titik lemah memberikan tambahan 100~200% ATK DMG sebagai CRIT DMG. Hanya dapat terjadi sekali setiap 10 detik.",
                'stats' =>
                "Base ATK (Lv.1-90): 40 - 448
                2nd Stat (Lv.1-90): 6.8% - 31.2% CRIT DMG",
                'source' => "Chests",
                'image' => "Messenger.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Raven Bow",
                'type' => "Bow",
                'rarity' => "3star",
                'detail' =>
                "Bane of Flame and Water
                Meningkatkan DMG terhadap lawan yang terkena Hydro atau Pyro sebesar 12~24%.",
                'stats' =>
                "Base ATK (Lv.1-90): 40 - 448
                2nd Stat (Lv.1-90): 20 - 94 Elemental Mastery",
                'source' => "Wishes",
                'image' => "Raven Bow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Recurve Bow",
                'type' => "Bow",
                'rarity' => "3star",
                'detail' =>
                "Cull the Weak
                Mengalahkan lawan akan memulihkan 8~16% HP.",
                'stats' =>
                "Base ATK (Lv.1-90): 38 - 354
                2nd Stat (Lv.1-90): 10.2% - 46.9% HP",
                'source' => "Chests",
                'image' => "Recurve Bow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sharpshooter's Oath",
                'type' => "Bow",
                'rarity' => "3star",
                'detail' =>
                "Precise
                Meningkatkan DMG terhadap titik lemah sebesar 24~48%.",
                'stats' =>
                "Base ATK (Lv.1-90): 39 - 401
                2nd Stat (Lv.1-90): 10.2% - 46.9% CRIT DMG",
                'source' => "Wishes",
                'image' => "Sharpshooter's Oath.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Slingshot",
                'type' => "Bow",
                'rarity' => "3star",
                'detail' =>
                "Slingshot
                Jika Serangan Normal atau Serangan Bermuatan mengenai target dalam waktu 0,3 detik setelah ditembakkan, meningkatkan DMG sebesar 36 ~ 60%. Jika tidak, mengurangi DMG sebesar 10%.",
                'stats' =>
                "Base ATK (Lv.1-90): 38 - 354
                2nd Stat (Lv.1-90): 6.8% - 31.2% CRIT Rate",
                'source' => "Wishes",
                'image' => "Slingshot.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Seasoned Hunter's Bow",
                'type' => "Bow",
                'rarity' => "2star",
                'detail' =>
                "-",
                'stats' =>
                "Base ATK (Lv.1-70): 33 - 243",
                'source' => "Chests",
                'image' => "Seasoned Hunter's Bow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hunter's Bow",
                'type' => "Bow",
                'rarity' => "1star",
                'detail' =>
                "-",
                'stats' =>
                "Base ATK (Lv.1-70): 23 - 185",
                'source' => "Chests",
                'image' => "Hunter's Bow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
