<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LightconeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lightcones')->insert([
            [
                'name' => "Along the Passing Shore",
                'path' => "Nihility",
                'rarity' => "5star",
                'detail' =>
                "Steerer
                Meningkatkan CRIT DMG pengguna sebesar 36%. Saat pengguna mengenai target musuh, menimbulkan Mirage Fizzle pada musuh, berlangsung selama 1 turn.  Efek ini dapat dipicu 1 kali terhadap setiap target untuk setiap serangan yang dilancarkan pengguna. Pengguna menimbulkan 24% lebih banyak DMG ke target yang terkena Mirage Fizzle, dan DMG dari Ultimate pengguna juga meningkat sebesar 24%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 28 - 635
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Event Warp",
                'image' => "Along the Passing Shore.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "A Secret Vow",
                'path' => "Destruction",
                'rarity' => "4star",
                'detail' =>
                "Spare No Effort
                Meningkatkan DMG yang diberikan oleh pengguna sebesar 20~40%. Pengguna juga menimbulkan 20~40% DMG tambahan kepada musuh yang persentase HP saat ini sama dengan atau lebih tinggi dari persentase HP pengguna saat ini.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "A Secret Vow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Adversial",
                'path' => "The Hunt",
                'rarity' => "3star",
                'detail' =>
                "Alliance
                Saat pengguna mengalahkan musuh, SPD meningkat sebesar 10~18% selama 2 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 33 - 740
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Adversarial.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Amber",
                'path' => "Preservation",
                'rarity' => "3star",
                'detail' =>
                "Stasis
                Meningkatkan DEF pengguna sebesar 16~32%. Jika HP pengguna saat ini kurang dari 50% HP Maksimum, DEF meningkat sebanyak 16~32%.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 12 - 264
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Amber.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "An Instant Before A Gaze",
                'path' => "Erudition",
                'rarity' => "5star",
                'detail' =>
                "A Knight's Pilgrimage
                Meningkatkan CRIT DMG pengguna sebesar 36~60%. Saat pengguna menggunakan Ultimate, Ultimate DMG pengguna meningkat berdasarkan energi maksimumnya. Setiap poin Energi meningkatkan Ultimate DMG sebesar 0,36~0,60%, hingga 180 poin Energi.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "An Instant Before A Gaze.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Arrows",
                'path' => "The Hunt",
                'rarity' => "3star",
                'detail' =>
                "Crisis
                Di awal pertarungan, CRIT Rate pengguna meningkat 12~24% selama 3 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 14 - 317
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Arrows.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Baptism of Pure Thought",
                'path' => "The Hunt",
                'rarity' => "5star",
                'detail' =>
                "Mental Training
                Meningkatkan CRIT DMG pengguna sebesar 20~32%. Untuk setiap debuff pada target musuh, CRIT DMG pengguna yang diberikan terhadap target ini meningkat sebesar 8~12%, distack hingga 3 kali. Saat menggunakan Ultimate mereka untuk menyerang target musuh, pengguna akan menerima Disputation effect yang meningkatkan DMG yang diberikan sebesar 36~60% dan memungkinkan follow-up attacks mengabaikan 24~40% DEF target. Efek ini bertahan selama 2 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 24 - 529",
                'source' => "Event Warp",
                'image' => "Baptism of Pure Thought.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Before Dawn",
                'path' => "Erudition",
                'rarity' => "5star",
                'detail' =>
                "Long Night
                Meningkatkan CRIT DMG pengguna sebesar 36~60%. Meningkatkan Skill dan Ultimate DMG pengguna sebesar 18~30%. Setelah pengguna menggunakan Skill atau Ultimate, mereka mendapatkan Somnus Corpus. Setelah memicu follow-up attack, Somnus Corpus akan dikonsumsi dan follow-up attack DMG meningkat sebesar 48~80%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "Before Dawn.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Before the Tutorial Mission Starts",
                'path' => "Nihility",
                'rarity' => "4star",
                'detail' =>
                "Quick on the Draw
                Meningkatkan Effect Hit Rate pengguna sebesar 20~40%. Saat pengguna menyerang musuh yang DEF-nya dikurangi, memulihkan 4~8 Energy.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Before the Tutorial Mission Starts.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Brighter Than the Sun",
                'path' => "Destruction",
                'rarity' => "5star",
                'detail' =>
                "Defiant Till Death
                Meningkatkan CRIT Rate pengguna  sebesar 18~30%. Saat pengguna menggunakan Basic ATK, mereka akan mendapatkan 1 stack Dragon's Call, yang berlangsung selama 2 turns. Setiap Stack dari Dragon’sCall meningkatkan ATK pengguna sebesar 18~30% dan Energy Regeneration Rate sebesar 6,0~10,0%. Dragon's Call dapat di-stack hingga 2 kali.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 28 - 635
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Event Warp",
                'image' => "Brighter Than the Sun.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "But the Battle Isn't Over",
                'path' => "Harmony",
                'rarity' => "5star",
                'detail' =>
                "Heir
                Meningkatkan Energy Regeneration Rate pengguna sebesar 10~18% dan meregenerasi 1 Skill Point ketika pengguna menggunakan Ultimate mereka pada tim. Efek ini dapat dipicu setiap 2 kali penggunaan Ultimate pengguna. Saat pengguna menggunakan Skill, tim berikutnya yang mengambil tindakan (kecuali pengguna) menimbulkan 30~50% DMG lebih banyak selama 1 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 52 - 1164
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Warp, Starlight Exchange",
                'image' => "But the Battle Isn't Over.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Carve the Moon, Weave the Clouds",
                'path' => "Harmony",
                'rarity' => "4star",
                'detail' =>
                "Secret
                Di awal pertempuran dan setiap kali giliran pengguna dimulai, salah satu efek berikut diterapkan secara acak: ATK semua tim meningkat 10~20%, CRIT DMG semua tim meningkat 12~24%, atau Energy Regeneration Rate semua tim meningkat 6~12%. Efek yang diterapkan tidak boleh sama dengan efek terakhir yang diterapkan, dan akan menggantikan efek sebelumnya. Efek yang diterapkan akan hilang ketika penggunanya knocked down. Efek dengan tipe serupa tidak dapat di-stack",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Nameless Honor, Warp",
                'image' => "Carve the Moon, Weave the Clouds.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Chorus",
                'path' => "Harmony",
                'rarity' => "3star",
                'detail' =>
                "Concerted
                Setelah memasuki pertempuran, meningkatkan ATK semua tim sebesar 8~12%. Efek dengan tipe yang sama tidak dapat di-stack.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 14 - 317
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Chorus.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Collapsing Sky",
                'path' => "Destruction",
                'rarity' => "3star",
                'detail' =>
                "Havoc
                Meningkatkan Basic ATK dan Skill DMG pengguna sebesar 20~40%.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 9  - 198",
                'source' => "Warp",
                'image' => "Collapsing Sky.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Concert for Two",
                'path' => "Preservation",
                'rarity' => "4star",
                'detail' =>
                "Inspire
                Meningkatkan DEF pengguna sebesar 16~32%. Untuk setiap karakter di lapangan yang memiliki Shield, DMG yang ditimbulkan oleh pengguna meningkat sebesar 4~8%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 948
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 21  - 463",
                'source' => "Warp",
                'image' => "Concert for Two.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Cornucopia",
                'path' => "Abundance",
                'rarity' => "3star",
                'detail' =>
                "Prosperity
                Saat pengguna menggunakan Skill atau Ultimate mereka, Outgoing Healing mereka meningkat sebesar 12~24%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 12 - 264
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Cornucopia.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Cruising in the Stellar Sea",
                'path' => "The Hunt",
                'rarity' => "5star",
                'detail' =>
                "Chase
                Meningkatkan CRIT rate pengguna sebesar 8~16%, dan meningkatkan CRIT rate mereka terhadap musuh dengan HP kurang dari atau sama dengan 50% dengan tambahan 8~16%. Saat pengguna mengalahkan musuh, ATK mereka meningkat sebesar 20~40% selama 2 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Herta's Store",
                'image' => "Cruising in the Stellar Sea.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dance! Dance! Dance!",
                'path' => "Harmony",
                'rarity' => "4star",
                'detail' =>
                "Cannot Stop It!
                Saat pengguna menggunakan Ultimatenya, semua action tim akan maju segera sebesar 16~24%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp",
                'image' => "Dance! Dance! Dance!.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Darting Arrow",
                'path' => "The Hunt",
                'rarity' => "3star",
                'detail' =>
                "War Cry
                Saat pengguna mengalahkan musuh, meningkatkan ATK sebesar 24~48% selama 3 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 33 - 740
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Darting Arrow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Data Bank",
                'path' => "Erudition",
                'rarity' => "3star",
                'detail' =>
                "Learned
                Meningkatkan Ultimate DMG pengguna sebesar 28~56%.",
                'stats' =>
                "Base HP (Lv.1-80): 33 - 740
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Data Bank.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Day One of My Life",
                'path' => "Preservation",
                'rarity' => "4star",
                'detail' =>
                "At This Very Moment
                Meningkatkan DEF pengguna sebesar 16~24%. Setelah memasuki pertempuran, meningkatkan All-Type RES semua tim sebesar 8~12%. Efek dengan jenis yang sama tidak dapat di-stack.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Warp",
                'image' => "Day One of My Life.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Defense",
                'path' => "Preservation",
                'rarity' => "3star",
                'detail' =>
                "Revitalization
                Saat pengguna mengeluarkan Ultimatenya, mereka memulihkan HP sebesar 18~30% dari Max HP mereka.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 12 - 264
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Defense.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Destiny's Threads Forewoven",
                'path' => "Preservation",
                'rarity' => "4star",
                'detail' =>
                "Insight
                Meningkatkan Effect RES pengguna sebesar 12~20%. Untuk setiap 100 DEF yang dimiliki pengguna, Meningkatkan DMG yang diberikan pengguna sebesar 0.8~1.2%, hingga peningkatan maksimum sebesar 32~48%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Warp",
                'image' => "Destiny's Threads Forewoven.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dreamville Adventure",
                'path' => "Harmony",
                'rarity' => "4star",
                'detail' =>
                "Solidarity
                Setelah pengguna menggunakan jenis ability tertentu seperti Basic ATK, Skill, atau Ultimate, semua tim mendapatkan Childishness, yang meningkatkan DMG tim untuk jenis ability yang sama seperti yang digunakan oleh pengguna sebesar 12~20%. Childishness hanya berlaku untuk jenis ability terbaru yang digunakan pengguna dan tidak dapat di-stack.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Clockie's Offering, Light Cone Manifest",
                'image' => "Dreamville Adventure.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Earthly Escapade",
                'path' => "Harmony",
                'rarity' => "5star",
                'detail' =>
                "Capriciousness
                Meningkatkan CRIT DMG pengguna sebesar 32~60%. Di awal pertempuran, pengguna mendapatkan Mask, yang bertahan selama 3 turn. Saat pemakainya menggunakan Mask, tim pengguna akan mendapatkan CRIT Rate sebesar 10~14% dan CRIT DMG sebesar 28~56%. Untuk setiap 1 Poin Skill yang dipulihkan oleh pengguna(termasuk Poin Skill yang melebihi batas), mereka mendapatkan 1 stack Radiant Flame. Dan ketika pengguna memiliki 4 stack Radiant Flame, semua stack tersebut akan dihilangkan, dan mereka mendapatkan Mask, yang bertahan selama 4 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 52 - 1164
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "Earthly Escapade.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Echoes of the Coffin",
                'path' => "Abundance",
                'rarity' => "5star",
                'detail' =>
                "Thorns
                Meningkatkan ATK pengguna sebesar 24~40%.Setelah pengguna menggunakan serangan, untuk setiap target musuh yang berbeda yang diserang pengguna, meregenerasi 3~5 Energi. Setiap serangan dapat meregenerasi Energi hingga 3 kali dengan cara ini.Setelah pengguna menggunakan Ultimate, semua tim mendapatkan 12~20 SPD selama 1 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 52 - 1164
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Event Warp",
                'image' => "Echoes of the Coffin.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Eyes of the Prey",
                'path' => "Nihility",
                'rarity' => "4star",
                'detail' =>
                "Self-Confidence
                Meningkatkan Effect Hit Rate pengguna sebesar 20~40% dan meningkatkan DoT sebesar 24~48%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Eyes of the Prey.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Fermata",
                'path' => "Nihility",
                'rarity' => "4star",
                'detail' =>
                "Semibreve Rest
                Meningkatkan Break Effect yang diberikan oleh pengguna sebesar 16~32%, dan meningkatkan DMG ke musuh yang terkena Shock atau Wind Shear sebesar 16~32%. Ini juga berlaku untuk DoT.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Underground Shop, Echo of War, Memo-Keeping Light Casket, Light Cone Manifest",
                'image' => "Fermata.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Final Victor",
                'path' => "The Hunt",
                'rarity' => "4star",
                'detail' =>
                "All In
                Meningkatkan ATK pengguna sebesar 12 ~ 20%. Ketika pengguna mendaratkan serangan CRIT pada musuh, mendapatkan stack Good Fortune, yang dapat distack hingga 4 kali. Setiap stack Good Fortune yang dimiliki pengguna akan meningkatkan CRIT DMG sebesar 8~12%. Good Fortune akan hilang di akhir giliran pengguna.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Lady Vermilion's Great Tree (The Reverie (Dreamscape),Young Master Gold's Great Tree (Clock Studios Theme Park), Light Cone Manifest",
                'image' => "Final Victor.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Fine Fruit",
                'path' => "Abundance",
                'rarity' => "3star",
                'detail' =>
                "Savor
                Di awal pertempuran, instan regenerasi 6~12 Energi untuk semua tim.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 14 - 317
                Base DEF (Lv.1-80): 9  - 198",
                'source' => "Warp",
                'image' => "Fine Fruit.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Flames Afar",
                'path' => "Destruction",
                'rarity' => "4star",
                'detail' =>
                "Deflagration
                Ketika kumulatif HP yang hilang dari pengguna selama satu serangan melebihi 25% dari Max HP mereka, atau jika jumlah HP yang mereka konsumsi pada satu waktu lebih besar dari 25% dari Max HP mereka, segera heals pengguna sebesar 15% dari Max HP mereka. Pada saat yang sama, meningkatkan DMG yang ditimbulkannya sebesar 25~50% selama 2 turn(s). Efek ini hanya dapat dipicu sekali setiap 3 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "A Walk Among the Tombstones Mission Reward, Light Cone Manifest",
                'image' => "Flames Afar.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Geniuses' Repose",
                'path' => "Erudition",
                'rarity' => "4star",
                'detail' =>
                "Each Now Has a Role to Play
                Meningkatkan ATK pengguna sebesar 16~32%. Saat pengguna mengalahkan musuh, CRIT DMG pengguna meningkat sebesar 24~48% selama 3 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp",
                'image' => "Geniuses' Repose.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Good Night and Sleep Well",
                'path' => "Nihility",
                'rarity' => "4star",
                'detail' =>
                "Toiler
                Untuk setiap debuff yang dimiliki target musuh, DMG yang ditimbulkan oleh pengguna meningkat sebesar 12~24%, di-stack hingga 3 kali. Efek ini juga berlaku untuk DoT.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Good Night and Sleep Well.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hey, Over Here",
                'path' => "Abundance",
                'rarity' => "4star",
                'detail' =>
                "I'm Not Afraid!
                Meningkatkan Max HP pengguna sebesar 8~12%. Saat pengguna menggunakan Skill, meningkatkan Outgoing Healing sebesar 16~28%, berlangsung selama 2 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "A Foxian Tale of the Haunted event (Limited)",
                'image' => "Hey, Over Here.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hidden Shadow",
                'path' => "Nihility",
                'rarity' => "3star",
                'detail' =>
                "Mechanism
                Setelah menggunakan Skill, Basic ATK pengguna berikutnya menimbulkan Additional DMG setara dengan 60~120% ATK ke target musuh.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 14 - 317
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Hidden Shadow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "I Shall Be My Own Sword",
                'path' => "Destruction",
                'rarity' => "5star",
                'detail' =>
                "With This Evening Jade
                Meningkatkan CRIT DMG pengguna sebesar 20~32%. Ketika tim (tidak termasuk pengguna) diserang atau kehilangan HP, pengguna memperoleh 1 stack of Eclipse, hingga maksimal 3 stack(s). Setiap stack of Eclipse meningkatkan DMG serangan berikutnya pengguna sebesar 14,0~24,0%. Ketika 3 stack tercapai, memungkinkan serangan tambahan untuk mengabaikan 12~20% DEF musuh. Efek ini akan hilang setelah pengguna menggunakan serangan.",
                'stats' =>
                "Base HP (Lv.1-80): 52 - 1164
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Event Warp",
                'image' => "I Shall Be My Own Sword.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "In the Name of the World",
                'path' => "Nihility",
                'rarity' => "5star",
                'detail' =>
                "Inheritor
                Meningkatkan DMG pengguna untuk debuffed musuh sebesar 24~40%. Saat pengguna menggunakan Skillnya, Effect Hit Rate untuk serangan ini meningkat sebesar 18~30%, dan ATK meningkat sebesar 24~40%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Warp, Starlight Exchange",
                'image' => "In the Name of the World.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "In the Night",
                'path' => "The Hunt",
                'rarity' => "5star",
                'detail' =>
                "Flowers and Butterflies
                Meningkatkan CRIT Rate pengguna sebesar 18~30%. Saat pengguna dalam pertempuran, untuk setiap 10 SPD yang melebihi 100, DMG dari Basic ATK dan Skill pengguna meningkat sebesar 6~10% dan CRIT DMG dari Ultimatenya meningkat sebesar 12~20%. Efek ini dapat ditumpuk hingga 6 stack(s).",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "In the Night.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Incessant Rain",
                'path' => "Nihility",
                'rarity' => "5star",
                'detail' =>
                "Mirage of Reality
                Meningkatkan Effect Hit Rate pengguna sebesar 24~40%. Saat pengguna menimbulkan DMG ke musuh yang saat ini memiliki 3 debuff atau lebih, meningkatkan CRIT Rate pengguna sebesar 12~20%. Setelah pengguna menggunakan Basic ATK, Skill, atau Ultimate, ada peluang basic 100% untuk menanamkan Aether Code pada target yang terkena secara acak yang belum memilikinya. Target dengan Aether Code menerima 12~20% peningkatan DMG selama 1 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "Incessant Rain.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Indelible Promise",
                'path' => "Destruction",
                'rarity' => "4star",
                'detail' =>
                "Inheritance
                Meningkatkan Break Effect pengguna sebesar 28~56%. Saat pengguna menggunakan Ultimate-nya, meningkatkan CRIT Rate mereka sebesar 15~30%, berlangsung selama 2 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Event Warp",
                'image' => "Indelible Promise.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Inherently Unjust Destiny",
                'path' => "Preservation",
                'rarity' => "5star",
                'detail' =>
                "All-In
                Meningkatkan DEF pengguna sebesar 40~64%. Saat pengguna memberikan Shield kepada tim, CRIT DMG pengguna meningkat sebesar 40~64%, berlangsung selama 2 turn(s). Ketika serangan lanjutan pengguna mengenai target musuh, terdapat 100~160% peluang dasar untuk meningkatkan DMG yang diterima oleh target musuh yang diserang sebesar 10,0~16%, yang berlangsung selama 2 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 30 - 661",
                'source' => "Event Warp",
                'image' => "Inherently Unjust Destiny.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "It's Showtime",
                'path' => "Nihility",
                'rarity' => "4star",
                'detail' =>
                "Self-Amusement
                Saat pengguna memberikan debuff pada musuh, mendapatkan a stack of Trick. Setiap stack of Trick meningkatkan DMG pengguna sebesar 6~10%, di-stack hingga 3 kali. Efek ini bertahan selama 1 turn. Ketika Effect Hit Rate pengguna 80% atau lebih tinggi, meningkatkan ATK sebesar 20~36%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Aideen Park: Golden Capsule Machine Humongous Prize, Light Cone Manifest",
                'image' => "It's Showtime.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Landau's Choice",
                'path' => "Preservation",
                'rarity' => "4star",
                'detail' =>
                "Time Fleets Away
                Pengguna lebih mungkin diserang, dan DMG yang diterima berkurang 16~24%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp",
                'image' => "Landau's Choice.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Loop",
                'path' => "Nihility",
                'rarity' => "3star",
                'detail' =>
                "Pursuit
                Meningkatkan DMG yang diberikan dari pengguna ke musuh yang Slowed sebesar 24~48%.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 14 - 317
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Loop.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Make the World Clamor",
                'path' => "Erudition",
                'rarity' => "4star",
                'detail' =>
                "The Power of Sound
                Pengguna memulihkan 20~32 Energy segera setelah memasuki pertempuran, dan meningkatkan DMG Ultimate sebesar 32~64%.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp",
                'image' => "Make the World Clamor.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Mediation",
                'path' => "Harmony",
                'rarity' => "3star",
                'detail' =>
                "Family
                Saat memasuki pertempuran, tingkatkan SPD semua tim sebanyak 12~20 selama 1 turn(s).",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 14 - 317
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Mediation.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Memories of the Past",
                'path' => "Harmony",
                'rarity' => "4star",
                'detail' =>
                "Old Photo
                Meningkatkan Break Effect pengguna sebesar 28~56%. Ketika pengguna menyerang, ia juga memulihkan 4~8 Energy. Efek ini tidak dapat dipicu berulang kali dalam single turn.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp",
                'image' => "Memories of the Past.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Meshing Cogs",
                'path' => "Harmony",
                'rarity' => "3star",
                'detail' =>
                "Fleet Triumph
                Setelah pengguna menggunakan serangan atau terkena serangan, tambahan pemulihan 4~8 Energi. Efek ini hanya dapat dipicu 1 kali per turn.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 14 - 317
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Meshing Cogs.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Moment of Victory",
                'path' => "Preservation",
                'rarity' => "5star",
                'detail' =>
                "Verdict
                Meningkatkan DEF pengguna sebesar 24~40% dan Effect Hit Rate sebesar 24~40%. Meningkatkan kemungkinan pengguna diserang musuh. Saat pengguna diserang, tingkatkan DEF mereka sebanyak 24~40% hingga akhir turn pengguna.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 27 - 595",
                'source' => "Warp, Starlight Exchange",
                'image' => "Moment of Victory.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Multiplication",
                'path' => "Abundance",
                'rarity' => "3star",
                'detail' =>
                "Denizens of Abundance
                Setelah pengguna menggunakan Basic ATK mereka, action selanjutnya akan maju segera sebesar 12 ~ 20%.
                ",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 14 - 317
                Base DEF (Lv.1-80): 9  - 198",
                'source' => "Warp",
                'image' => "Multiplication.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Mutual Demise",
                'path' => "Destruction",
                'rarity' => "3star",
                'detail' =>
                "Legion
                Jika HP pengguna saat ini lebih rendah dari 80%, CRIT Rate meningkat 12~24%.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 9  - 198",
                'source' => "Warp",
                'image' => "Mutual Demise.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Night of Fright",
                'path' => "Abundance",
                'rarity' => "5star",
                'detail' =>
                "Deep, Deep Breaths
                Meningkatkan Energy Regeneration Rate pengguna sebesar 12~20%. Ketika ada tim yang menggunakan Ultimate mereka, pengguna memulihkan HP untuk tim yang saat ini memiliki persentase HP terendah dengan jumlah yang sama dengan 10~14% dari HP Maks tim yang disembuhkan. Ketika penggunanya memberikan penyembuhan untuk tim, meningkatkan ATK tim yang disembuhkan sebesar 2,4~4,0%. Efek ini dapat stack hingga 5 kali dan berlangsung selama 2 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 52 - 1164
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 24 - 529",
                'source' => "Event Warp",
                'image' => "Night of Fright.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Night on the Milky Way",
                'path' => "Erudition",
                'rarity' => "5star",
                'detail' =>
                "Meteor Swarm
                Untuk setiap musuh di lapangan, meningkatkan ATK pengguna sebesar 9,0~15,0%, hingga 5 stack. Ketika musuh terkena Weakness Break, DMG yang diberikan oleh pengguna meningkat 30~50% selama 1 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 52 - 1164
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp, Starlight Exchange",
                'image' => "Night on the Milky Way.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Nowhere to Run",
                'path' => "Destruction",
                'rarity' => "4star",
                'detail' =>
                "Desperate Times
                Meningkatkan ATK pengguna sebesar 24~48%. Setiap kali pengguna mengalahkan musuh, mereka memulihkan HP sebesar 12~24% dari ATK mereka.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Nameless Honor",
                'image' => "Nowhere to Run.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "On the Fall of an Aeon",
                'path' => "Destruction",
                'rarity' => "5star",
                'detail' =>
                "Moth To Flames
                Setiap kali pengguna menyerang, ATK mereka meningkat 8~16% dalam pertempuran ini. Efek ini dapat distack hingga 4 kali. Setelah karakter memberikan Weakness Break kepada musuh, DMG pengguna meningkat 12~24% selama 2 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Herta's Store",
                'image' => "On the Fall of an Aeon.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Only Silence Remains",
                'path' => "The Hunt",
                'rarity' => "4star",
                'detail' =>
                "Record
                Meningkatkan ATK pengguna sebesar 16~32%. Jika ada 2 atau lebih sedikit musuh di lapangan, meningkatkan CRIT Rate pengguna sebesar 12~24%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Only Silence Remains.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Passkey",
                'path' => "Erudition",
                'rarity' => "3star",
                'detail' =>
                "Epiphany
                Setelah pengguna menggunakan Skill mereka, tambahan regenerasi 8~12 Energi. Efek ini tidak dapat dipicu berulang kali dalam satu turn.",
                'stats' =>
                "Base HP (Lv.1-80): 33 - 740
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Passkey.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Past Self in Mirror",
                'path' => "Harmony",
                'rarity' => "5star",
                'detail' =>
                "The Plum Fragrance In My Bones
                Meningkatkan Break Effect pengguna sebesar 60~100%. Saat pengguna menggunakan Ultimate, meningkatkan DMG semua tim sebesar 24~40%, berlangsung selama 3 turn. Jika Break Effect pengguna melebihi atau sama dengan 150%, 1 Poin Skill akan dipulihkan. Di awal setiap wave, semua tim akan memulihkan 10~20 Energi dengan segera. Efek dengan tipe yang sama tidak dapat distack.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 24 - 529",
                'source' => "Event Warp",
                'image' => "Past Self in Mirror.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Past and Future",
                'path' => "Harmony",
                'rarity' => "4star",
                'detail' =>
                "Kites From the Past
                Ketika pengguna menggunakan Skill mereka, maka tim berikutnya yang mengambil action (kecuali pengguna) akan mendapatkan peningkatan DMG sebesar 16~32% selama 1 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Jeweler's Pagoda, Echo of War, Light Cone Manifest, Memo-Keeping Light Casket",
                'image' => "Past and Future.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Patience Is All You Need",
                'path' => "Nihility",
                'rarity' => "5star",
                'detail' =>
                "Spider Web
                Meningkatkan DMG yang diberikan oleh pengguna sebesar 24~40%. Setelah setiap serangan yang dilancarkan oleh pengguna, SPD mereka meningkat sebesar 4,8~8,0%, dapat distack hingga 3 kali. Jika pemakainya mengenai target musuh yang tidak terpengaruh oleh Erode, ada peluang dasar 100% untuk memberikan Erode ke target. Musuh yang terkena Erode juga dianggap terkena Shocked dan akan menerima Lightning DoT di awal setiap giliran sebesar 60~100% dari ATK pengguna, yang berlangsung selama 1 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "Patience Is All You Need.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Perfect Timing",
                'path' => "Abundance",
                'rarity' => "4star",
                'detail' =>
                "Refraction of Sightline
                Meningkatkan Effect RES pengguna sebesar 16~32% dan meningkatkan Outgoing Healing dengan jumlah yang sama dengan 33~45% dari Effect RES. Outgoing Healing dapat ditingkatkan dengan cara ini hingga 15~27%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp",
                'image' => "Perfect Timing.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Pioneering",
                'path' => "Preservation",
                'rarity' => "3star",
                'detail' =>
                "IPC
                Ketika pengguna memecahkan Weakness musuh, pengguna memulihkan HP sebesar 12 ~ 20% dari HP Maksimum mereka.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 12 - 264
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Pioneering.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Planetary Rendezvous",
                'path' => "Harmony",
                'rarity' => "4star",
                'detail' =>
                "Departure
                Saat memasuki pertempuran, jika tim memberikan Tipe DMG yang sama dengan pemakainya, DMG yang diberikan akan meningkat sebesar 12~24%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Planetary Rendezvous.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Post-Op Conversation",
                'path' => "Abundance",
                'rarity' => "4star",
                'detail' =>
                "Mutual Healing
                Meningkatkan Energy Regeneration Rate pengguna sebesar 8~16% dan meningkatkan Outgoing Healing saat mereka menggunakan Ultimate sebesar 12~24%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Post-Op Conversation.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Quid Pro Quo",
                'path' => "Abundance",
                'rarity' => "4star",
                'detail' =>
                "Enjoy With Rapture
                Di awal giliran pengguna, meregenerasi 8~16 Energi untuk tim yang dipilih secara acak (tidak termasuk pengguna) yang Energinya lebih rendah dari 50%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Trailblaze Level 20, Echo of War, Memo-Keeping Light Casket, Light Cone Manifest",
                'image' => "Quid Pro Quo.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Reforged Remembrance",
                'path' => "Nihility",
                'rarity' => "5star",
                'detail' =>
                "Crystallize
                Meningkatkan Effect Hit Rate pengguna sebesar 40~60%. Ketika pengguna memberikan DMG kepada musuh yang terkena Wind Shear, Burn, Shock, atau Bleed, masing-masing akan memberikan 1 stack Prophet, dapat distack hingga 4 kali. Dalam satu pertempuran, hanya 1 stack Prophet yang dapat diberikan untuk setiap jenis DoT. Setiap stack Prophet meningkatkan ATK pemakainya sebesar 5~9% dan memungkinkan DoT yang diberikan untuk mengabaikan 7,2~10,0% dari DEF target.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "Reforged Remembrance.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Resolution Shines As Pearls of Sweat",
                'path' => "Nihility",
                'rarity' => "4star",
                'detail' =>
                "Glance Break
                Ketika pengguna melakukan serangan ke musuh dan jika musuh yang terkena belum terjerat, maka ada 60~100% peluang dasar untuk menjerat musuh yang terkena. DEF musuh yang terjerat berkurang 12~16% selama 1 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Resolution Shines As Pearls of Sweat.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Return to Darkness",
                'path' => "The Hunt",
                'rarity' => "4star",
                'detail' =>
                "Raging Waves
                Meningkatkan CRIT Rate pengguna sebesar 12~24%. Setelah CRIT terpicu, ada peluang tetap 16~32% untuk menghilangkan 1 buff pada musuh target. Efek ini hanya dapat dipicu 1 kali per serangan.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Nameless Honor",
                'image' => "Return to Darkness.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "River Flows in Spring",
                'path' => "The Hunt",
                'rarity' => "4star",
                'detail' =>
                "Stave Off the Lingering Cold
                Setelah memasuki pertempuran, meningkatkan SPD pengguna sebesar 8~12% dan DMG sebesar 12~24%. Saat pengguna mengambil DMG, efek ini akan hilang. Efek ini akan berlanjut setelah akhir giliran pengguna berikutnya.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Part 2 of Operation Briefing Completed, Echo of War, Light Cone Manifest, Memo-Keeping Light Casket",
                'image' => "River Flows in Spring.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sagacity",
                'path' => "Erudition",
                'rarity' => "3star",
                'detail' =>
                "Genius
                Ketika pengguna menggunakan Ultimate, meningkatkan ATK sebesar 24~48% selama 2 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 33 - 740
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Sagacity.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shared Feeling",
                'path' => "Abundance",
                'rarity' => "4star",
                'detail' =>
                "Cure and Repair
                Meningkatkan Outgoing Healing pengguna sebesar 10~20%. Saat menggunakan Skill, meregenerasi 2~4 Energi untuk semua tim.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp",
                'image' => "Shared Feeling.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shattered Home",
                'path' => "Destruction",
                'rarity' => "3star",
                'detail' =>
                "Eradication
                Pengguna memberikan 20~40% lebih banyak DMG kepada target musuh yang memiliki persentase HP lebih besar dari 50%.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 9  - 198",
                'source' => "Warp",
                'image' => "Shattered Home.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "She Already Shut Her Eyes",
                'path' => "Preservation",
                'rarity' => "5star",
                'detail' =>
                "Visioscape
                Meningkatkan HP Maksimum pengguna sebesar 24~40% dan Energy Regeneration Rate sebesar 12~20%. Ketika HP pengguna berkurang, DMG semua tim yang terkena meningkat sebesar 9,0~15,0%, berlangsung selama 2 turn, di awal setiap wave, mengembalikan HP ke semua tim dengan jumlah yang sama dengan 80~100% dari HP mereka yang hilang.",
                'stats' =>
                "Base HP (Lv.1-80): 57 - 1270
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 24 - 529",
                'source' => "Event Warp",
                'image' => "She Already Shut Her Eyes.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sleep Like the Dead",
                'path' => "The Hunt",
                'rarity' => "5star",
                'detail' =>
                "Sweet Dreams
                Meningkatkan CRIT DMG pengguna sebesar 30~50%. Ketika Basic ATK atau Skill pengguna tidak menghasilkan CRIT, meningkatkan CRIT Rate mereka sebesar 36~60% selama 1 turn. Efek ini hanya dapat dipicu sekali setiap 3 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Warp, Starlight Exchange",
                'image' => "Sleep Like the Dead.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Solitary Healing",
                'path' => "Nihility",
                'rarity' => "5star",
                'detail' =>
                "Chaos Elixir
                Meningkatkan Break Effect pengguna sebesar 20~40%. Saat pengguna menggunakan Ultimate, meningkatkan DoT yang diberikan oleh pengguna sebesar 24~48%, berlangsung selama 2 turn. Ketika musuh target yang menderita DoT yang diberikan oleh pengguna dikalahkan, meregenerasi 4~6 Energi untuk pengguna.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Herta's Store",
                'image' => "Solitary Healing.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Something Irreplaceable",
                'path' => "Destruction",
                'rarity' => "5star",
                'detail' =>
                "Kinship
                Meningkatkan ATK pengguna sebesar 24~40%. Ketika pengguna mengalahkan musuh atau terkena serangan, segera memulihkan HP sebesar 8~12% dari ATK pengguna. Pada saat yang sama, DMG pengguna meningkat sebesar 24~40% hingga akhir turn berikutnya. Efek ini tidak dapat di stack dan hanya dapat dipicu 1 kali per turn.",
                'stats' =>
                "Base HP (Lv.1-80): 52 - 1164
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp, Starlight Exchange",
                'image' => "Something Irreplaceable.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Subscribe for More!",
                'path' => "The Hunt",
                'rarity' => "4star",
                'detail' =>
                "Like Before You Leave!
                Meningkatkan DMG Basic ATK dan Skill pengguna sebesar 24~48%. Efek ini meningkat sebesar 24~48% ekstra ketika Energi pengguna  mencapai level maksimal.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Subscribe for More!.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Swordplay",
                'path' => "The Hunt",
                'rarity' => "4star",
                'detail' =>
                "Answers of Their Own
                Untuk setiap kali pengguna mengenai target yang sama, DMG yang diberikan meningkat sebesar 8~16%, stack hingga 5 kali. Efek ini akan hilang ketika pengguna mengganti target.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Swordplay.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Texture of Memories",
                'path' => "Preservation",
                'rarity' => "5star",
                'detail' =>
                "Treasure
                Meningkatkan Effect RES pengguna sebesar 8~16%. Jika pengguna diserang dan tidak memiliki Shield, mereka mendapatkan Shield sebesar 16~32% dari HP Maks mereka selama 2 turn. Efek ini hanya dapat dipicu sekali setiap 3 turn. Jika pengguna memiliki Shield saat diserang, DMG yang mereka terima berkurang 12~24%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 24 - 529",
                'source' => "Herta's Store",
                'image' => "Texture of Memories.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Birth of the Self",
                'path' => "Erudition",
                'rarity' => "4star",
                'detail' =>
                "The Maiden in the Painting
                Meningkatkan DMG yang diberikan oleh follow-up attacks  pengguna sebesar 24~48%. Jika HP musuh target saat ini di bawah 50% dari HP maksimal, meningkatkan DMG yang diberikan oleh follow-up attacks sebesar 24~48%.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "The Birth of the Self.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Day The Cosmos Fell",
                'path' => "Erudition",
                'rarity' => "4star",
                'detail' =>
                "Stratagem
                Meningkatkan ATK pengguna sebesar 16~24%. Ketika pengguna menggunakan serangan dan setidaknya 2 musuh yang diserang memiliki Weakness yang sesuai, CRIT DMG pengguna meningkat 20~40% selama 2 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Young Master Gold's Great Tree (Golden Hour), Light Cone Manifest",
                'image' => "The Day The Cosmos Fell.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Moles Welcome You",
                'path' => "Destruction",
                'rarity' => "4star",
                'detail' =>
                "Fantastic Adventure
                Ketika pengguna menggunakan Basic ATK, Skill, atau Ultimate untuk menyerang musuh, pengguna mendapatkan satu stack Mischievous. Setiap stack meningkatkan ATK pengguna sebesar 12~24%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "The Moles Welcome You.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Seriousness of Breakfast",
                'path' => "Erudition",
                'rarity' => "4star",
                'detail' =>
                "Get Ready
                Meningkatkan DMG pengguna sebesar 12~24%. Untuk setiap musuh yang dikalahkan, ATK pengguna meningkat sebesar 4~8%, dapat distack hingga 3 kali.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "To Rot or to burn Mission Reward, Emptiness of Locus Silentii Mission Reward, Echo of War, Memo-Keeping Light Casket, Light Cone Manifest",
                'image' => "The Seriousness of Breakfast.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Unreachable Side",
                'path' => "Destruction",
                'rarity' => "5star",
                'detail' =>
                "Unfulfilled Yearning
                Meningkatkan CRIT Rate dan HP Maks pengguna sebesar 18~30%. Setelah pengguna diserang atau menghabiskan HP mereka sendiri, meningkatkan DMG pengguna sebesar 24 ~ 40%. Efek ini akan hilang setelah pengguna menggunakan serangan.",
                'stats' =>
                "Base HP (Lv.1-80): 57 - 1270
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Event Warp",
                'image' => "The Unreachable Side.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "This Is Me!",
                'path' => "Preservation",
                'rarity' => "4star",
                'detail' =>
                "New Chapter
                Meningkatkan DEF pengguna sebesar 16~32%. Meningkatkan DMG pengguna saat mereka menggunakan Ultimate sebesar 60~120% dari DEF pengguna. Efek ini hanya berlaku 1 kali per target musuh.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 24 - 529",
                'source' => "Nameless Honor",
                'image' => "This Is Me!.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Time Waits for No One",
                'path' => "Abundance",
                'rarity' => "5star",
                'detail' =>
                "Morn, Noon, Dusk, and Night
                Meningkatkan HP Maks pengguna sebesar 18~30% dan Outgoing Healing sebesar 12~20%. Saat pengguna menyembuhkan tim, catat jumlah Outgoing Healing. Saat anggota tim mana pun melancarkan serangan, musuh yang diserang secara acak akan menerima DMG tambahan sebesar 36~60% dari nilai Outgoing Healing yang tercatat. Jenis DMG Tambahan ini memiliki Tipe yang sama dengan pengguna. DMG Tambahan ini tidak terpengaruh oleh buff lain, dan hanya dapat terjadi 1 kali per turn.",
                'stats' =>
                "Base HP (Lv.1-80): 57 - 1270
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Warp, Starlight Exchange",
                'image' => "Time Waits for No One.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Today Is Another Peaceful Day",
                'path' => "Erudition",
                'rarity' => "4star",
                'detail' =>
                "A Storm Is Coming
                Setelah memasuki pertempuran, meningkatkan DMG pengguna berdasarkan Energi Maks. DMG meningkat sebesar 0,20~0,40% per poin Energi, hingga 160 Energi.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Nameless Honor",
                'image' => "Today Is Another Peaceful Day.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Trend of the Universal Market",
                'path' => "Preservation",
                'rarity' => "4star",
                'detail' =>
                "A New Round of Shuffling
                Meningkatkan DEF pengguna sebesar 16~32%. Saat pengguna diserang, ada peluang dasar 100~120% untuk membakar musuh. Untuk setiap turn, pengguna memberikan DoT yang setara dengan 40~80% dari DEF pengguna selama 2 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Warp",
                'image' => "Trend of the Universal Market.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Under the Blue Sky",
                'path' => "Destruction",
                'rarity' => "4star",
                'detail' =>
                "Rye Under the Sun
                Meningkatkan ATK pengguna sebesar 16~32%. Ketika pengguna mengalahkan musuh, CRIT Rate pengguna meningkat 12~24% selama 3 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Warp",
                'image' => "Under the Blue Sky.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Void",
                'path' => "Nihility",
                'rarity' => "3star",
                'detail' =>
                "Fallen
                Di awal pertempuran, Effect Hit Rate pengguna meningkat 20~40% selama 3 turn.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 14 - 317
                Base DEF (Lv.1-80): 12 - 264",
                'source' => "Warp",
                'image' => "Void.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Warmth Shortens Cold Nights",
                'path' => "Abundance",
                'rarity' => "4star",
                'detail' =>
                "Tiny Light
                Meningkatkan HP Maks pengguna sebesar 16~32%. Saat menggunakan Basic ATK atau Skill, memulihkan HP semua tim dengan jumlah yang sama dengan 2,0~4,0% dari HP Maks masing-masing.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 16 - 370
                Base DEF (Lv.1-80): 18 - 396",
                'source' => "Nameless Honor",
                'image' => "Warmth Shortens Cold Nights.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "We Are Wildfire",
                'path' => "Preservation",
                'rarity' => "4star",
                'detail' =>
                "Teary-Eyed
                Di awal pertempuran, DMG yang diberikan kepada semua tim berkurang 8~16% selama 5 turn. Pada saat yang sama, segera memulihkan HP ke semua tim sebesar 30~50% dari selisih HP masing-masing antara HP Maks karakter dan HP saat ini.",
                'stats' =>
                "Base HP (Lv.1-80): 33 - 740
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Part 4 of Operation Briefing Completed, Underground Shop, Echo of War, Memo-Keeping Light Casket, Light Cone Manifest",
                'image' => "We Are Wildfire.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "We Will Meet Again",
                'path' => "Nihility",
                'rarity' => "4star",
                'detail' =>
                "A Discourse in Arms
                Setelah pengguna menggunakan Basic ATK atau Skill, memberikan DMG Tambahan sebesar 48~96% dari ATK pengguna kepada musuh acak yang telah diserang.",
                'stats' =>
                "Base HP (Lv.1-80): 38 - 846
                Base ATK (Lv.1-80): 24 - 529
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Nameless Honor",
                'image' => "We Will Meet Again.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "What Is Real?",
                'path' => "Abundance",
                'rarity' => "4star",
                'detail' =>
                "Hypothesis
                Meningkatkan Break Effect pengguna sebesar 24~48%. Setelah menggunakan Basic ATK mereka, memulihkan HP pengguna dengan jumlah yang sama dengan 2,0~4,0% dari HP maksimal mereka ditambah 800.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 19 - 423
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Clockie's Offering, Light Cone Manifest",
                'image' => "What Is Real.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Woof! Walk Time!",
                'path' => "Destruction",
                'rarity' => "4star",
                'detail' =>
                "Run!
                Meningkatkan ATK pengguna sebesar 10~20%, dan meningkatkan DMG ke musuh yang terkena Burn atau Bleed sebesar 16~32%. Ini juga berlaku untuk DoT.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Internal Purchase Officer, Echo of War, Memo-Keeping Light Casket, Light Cone Manifest",
                'image' => "Woof! Walk Time!.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Worrisome, Blissful",
                'path' => "The Hunt",
                'rarity' => "5star",
                'detail' =>
                "One At A Time
                Meningkatkan CRIT Rate pengguna sebesar 18~30% dan DMG follow-up attacks sebesar 30~50%. Setelah pengguna menggunakan follow-up attacks, terapkan status Tame ke target, stack hingga 2 stack. Ketika tim mengenai target musuh dengan status Tame, setiap stack Tame meningkatkan CRIT DMG yang diberikan sebesar 12~20%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "Worrisome, Blissful.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Boundless Choreo",
                'path' => "Nihility",
                'rarity' => "4star",
                'detail' =>
                "Scrutinize
                Meningkatkan CRIT Rate pemakainya sebesar 8~16%. Pemakainya memberikan 24~48% lebih banyak CRIT DMG kepada musuh yang sedang dalam keadaan Slowed atau mengalami penurunan DEF.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Event Warp",
                'image' => "Boundless Choreo.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Flowing Nightglow",
                'path' => "Harmony",
                'rarity' => "5star",
                'detail' =>
                "Pacify
                Setiap kali teman menyerang, pemakainya mendapatkan 1 tumpukan Cantillation. Setiap tumpukan Cantillation meningkatkan Tingkat Regenerasi Energi pemakainya sebesar 3.0~5.0%, ditumpuk hingga 5 kali. Ketika pemakai menggunakan Ultimate mereka, menghapus Cantillation dan mendapatkan Cadenza. Cadenza meningkatkan ATK pemakainya sebesar 48~96% dan meningkatkan DMG sekutu yang terkena sebesar 24~40%, berlangsung selama 1 giliran.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 28 - 635
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "Flowing Nightglow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "For Tomorrow's Journey",
                'path' => "Harmony",
                'rarity' => "4star",
                'detail' =>
                "Bonds
                Meningkatkan ATK pemakainya sebesar 16~32%. Setelah pemakainya menggunakan Ultimate, meningkatkan DMG yang diberikan sebesar 18~30%, berlangsung selama 1 giliran.",
                'stats' =>
                "Base HP (Lv.1-80): 43 - 952
                Base ATK (Lv.1-80): 21 - 476
                Base DEF (Lv.1-80): 15 - 330",
                'source' => "Hadiah Event terbatas: Clockie: Dreamjoy Memoir",
                'image' => "For Tomorrow's Journey.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sailing Towards A Second Life",
                'path' => "The Hunt",
                'rarity' => "5star",
                'detail' =>
                "Rough Water
                Meningkatkan Break Effect pemakainya sebesar 60~100%. Break DMG yang diberikan oleh pemakainya mengabaikan 20~32% DEF target. Ketika Break Effect pemakainya dalam pertempuran mencapai 150% atau lebih besar, meningkatkan SPD mereka sebesar 12~20%.",
                'stats' =>
                "Base HP (Lv.1-80): 48 - 1,058
                Base ATK (Lv.1-80): 26 - 582
                Base DEF (Lv.1-80): 21 - 463",
                'source' => "Event Warp",
                'image' => "Sailing Towards A Second Life.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
