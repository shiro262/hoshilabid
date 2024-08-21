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
            //1
            [
                'name' => "Silverwing N-EX",
                'type' => "Mech",
                'element' => "Ice",
                'role' => "DPS",
                'detail' => "Battlesuit Bronya Zaychik, Ranged Ice DPS, Gunakan Combo ATK dan Ultimate untuk menyebarkan penghalang untuk ledakan ATK dan meningkatkan DPS.",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 1,
                'weapon_alt1_hi3_id' => 23,
                'weapon_alt2_hi3_id' => 46,
                'stigmata_sign_id' => 59,
                'stigmata_alt_id' => 107,
                'image' => "Silverwing N EX.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //2
            [
                'name' => "Disciplinary Perdition (Aponia)",
                'type' => "BIO",
                'element' => "Light",
                'role' => "DPS",
                'detail' => " Aponia battlesuit, DPS Petir jarak jauh.
                Menangani DMG dalam keadaan siaga saat berada dalam bentuk [Conviction]. Kombinasi ATK dan Ultimate memberikan DMG yang sangat besar di field. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 58,
                'weapon_alt1_hi3_id' => 59,
                'weapon_alt2_hi3_id' => 60,
                'stigmata_sign_id' => 24,
                'stigmata_alt_id' => 110,
                'image' => "aponia.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //3
            [
                'name' => "Argent Knight: Artemis",
                'type' => "BIO",
                'element' => "Ice",
                'role' => "DPS",
                'detail' => "Rita Rossweisse battlesuit, Long-range AOE DPS. Menimbulkan Hypothermia yang memperlambat musuh.
                ATK yang terisi akan menghilangkan 2 stack Hypothermia untuk memberikan DMG yang sangat besar.
                Burst: Peningkatan DPS yang sangat besar. Membekukan musuh juga. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 220,
                'weapon_alt1_hi3_id' => 228,
                'weapon_alt2_hi3_id' => 230,
                'stigmata_sign_id' => 157,
                'stigmata_alt_id' => 107,
                'image' => "Argent_Knight_Artemis.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //4
            [
                'name' => "Kriegsmesser",
                'type' => "PSY",
                'element' => "Ice",
                'role' => "DPS",
                'detail' => "Murata Himeko battlesuit.
                DPS jarak dekat yang stabil.
                Multiple Ice DMG hits.
                QTE dan Ultimates dapat membekukan musuh untuk sementara waktu. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 117,
                'weapon_alt1_hi3_id' => 123,
                'weapon_alt2_hi3_id' => 142,
                'stigmata_sign_id' => 33,
                'stigmata_alt_id' => 124,
                'image' => "artic kriegsmesser.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //5
            [
                'name' => "Azure Empyrea",
                'type' => "PSY",
                'element' => "Fire",
                'role' => "Support",
                'detail' => "Fu Hua battlesuit. Support AOE jarak dekat. Ultimate menarik musuh dan memberikan buff Elemental Breach. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 91,
                'weapon_alt1_hi3_id' => 92,
                'weapon_alt2_hi3_id' => 97,
                'stigmata_sign_id' => 153,
                'stigmata_alt_id' => 26,
                'image' => "azure empyreal.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //6
            [
                'name' => "Battle Storm",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "Sub-DPS",
                'detail' => " Himeko battlesuit. DPS anti perisai jarak menengah.
                Penekan musuh yang baik. Dapatkan pengurangan DMG yang tinggi saat menggunakan ATK yang terisi daya. ",
                'rarity' => "B",
                'tier' => "C",
                'weapon_sign_hi3_id' => 122,
                'weapon_alt1_hi3_id' => 117,
                'weapon_alt2_hi3_id' => 143,
                'stigmata_sign_id' => 138,
                'stigmata_alt_id' => 33,
                'image' => "battle storm.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //7
            [
                'name' => "Black Nucleus",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "Sub-DPS",
                'detail' => "Zaychik battlesuit.
                Close-ranged scattershot DPS.
                Banyak buff DMG.
                Stealth mode: Serangan stealth dari belakang untuk memberikan DMG yang sangat besar. ",
                'rarity' => "S",
                'tier' => "B",
                'weapon_sign_hi3_id' => 11,
                'weapon_alt1_hi3_id' => 9,
                'weapon_alt2_hi3_id' => 50,
                'stigmata_sign_id' => 91,
                'stigmata_alt_id' => 95,
                'image' => "black nucleus.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //8
            [
                'name' => "Blood Rose",
                'type' => "PSY",
                'element' => "Fire",
                'role' => "Support",
                'detail' => "Murata Himeko battlesuit. Melee Burst DPS.
                Mendapatkan SP dengan menghindar dan menyerang.
                Ultimate: Daya hancur yang tak tertandingi. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 113,
                'weapon_alt1_hi3_id' => 117,
                'weapon_alt2_hi3_id' => 121,
                'stigmata_sign_id' => 10,
                'stigmata_alt_id' => 124,
                'image' => "blood rose.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //9
            [
                'name' => "Blueberry Blitz",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Liliya Olenyeva battlesuit. DPS pemecah perisai jarak dekat hingga menengah.
                DEF yang kuat dan keterampilan pembalasan. Memberi buff pada rekan tim tertentu.",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 112,
                'weapon_alt1_hi3_id' => 117,
                'weapon_alt2_hi3_id' => 132,
                'stigmata_sign_id' => 38,
                'stigmata_alt_id' => 124,
                'image' => "bluberry blitz.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //10
            [
                'name' => "Bright Knight: Excelsis",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => " Durandal battlesuit. Dealer Physical DMG jarak dekat.
                Memberikan DMG besar dengan ATK yang terisi setelah Retaliation. Mendapatkan DPS yang besar dalam mode Burst. Mampu mengendalikan musuh dengan Throw. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 203,
                'weapon_alt1_hi3_id' => 207,
                'weapon_alt2_hi3_id' => 208,
                'stigmata_sign_id' => 135,
                'stigmata_alt_id' => 29,
                'image' => "Bright_Knight_Excelsis.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //11
            [
                'name' => "Celestial Hymn",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Theresa Apocalypse battlesuit. DPS jarak menengah yang fleksibel.
                Meningkatkan DPS fisik seluruh tim. Berbagai skill pendukung untuk mengatur lonjakan DPS. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 64,
                'weapon_alt1_hi3_id' => 302,
                'weapon_alt2_hi3_id' => 82,
                'stigmata_sign_id' => 118,
                'stigmata_alt_id' => 95,
                'image' => "celestial hymn.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //12
            [
                'name' => "Chrono Navi",
                'type' => "MECH",
                'element' => "Fire",
                'role' => "Support",
                'detail' => "Ai Hyperion Λ battlesuit ditambahkan di Versi 6.2. Fire DMG support.
                Dapat memberikan Fire DMG terus menerus setelah keluar.
                Ultimate meningkatkan Total DMG di seluruh tim.",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 324,
                'weapon_alt1_hi3_id' => 59,
                'weapon_alt2_hi3_id' => 63,
                'stigmata_sign_id' => 87,
                'stigmata_alt_id' => 33,
                'image' => "chrono navi.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //13
            [
                'name' => "Cosmic Expression",
                'type' => "SD",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Griseo battlesuit. Support Melee Bleed.
                Menjatuhkan meteor setelah menggunakan Special Weapon Skill untuk memberikan DMG yang sangat besar kepada musuh.
                Ultimate dan Skill Senjata Khusus dapat meningkatkan Bleed DMG tim. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 300,
                'weapon_alt1_hi3_id' => 66,
                'weapon_alt2_hi3_id' => 76,
                'stigmata_sign_id' => 162,
                'stigmata_alt_id' => 33,
                'image' => "cosmic expression.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //14
            [
                'name' => "Crimson Impulse",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Raiden Mei battlesuit.
                DPS jarak dekat. Keterampilan perpindahan. DMG AOE kecil yang stabil. ",
                'rarity' => "B",
                'tier' => "C",
                'weapon_sign_hi3_id' => 178,
                'weapon_alt1_hi3_id' => 187,
                'weapon_alt2_hi3_id' => 187,
                'stigmata_sign_id' => 12,
                'stigmata_alt_id' => 137,
                'image' => "crimson impulse.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //15
            [
                'name' => "Danzai Spectramancer",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Raiden Mei battlesuit.
                Peningkatan Core Augment dari Shadow Dash. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 168,
                'weapon_alt1_hi3_id' => 152,
                'weapon_alt2_hi3_id' => 165,
                'stigmata_sign_id' => 110,
                'stigmata_alt_id' => 3,
                'image' => "danzain spectramencer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //16
            [
                'name' => "Darkbolt Jonin",
                'type' => "BIO",
                'element' => "Lighting",
                'role' => "DPS",
                'detail' => "Yae Sakura battlesuit.
                Penyalur AOE DMG jarak dekat. Dapatkan energi Zakti untuk menghasilkan DMG Petir yang sangat besar. Gaya bertarung mobile yang tinggi.",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 152,
                'weapon_alt1_hi3_id' => 154,
                'weapon_alt2_hi3_id' => 187,
                'stigmata_sign_id' => 16,
                'stigmata_alt_id' => 122,
                'image' => "darkbolt jonin.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //17
            [
                'name' => "Dea Anchora",
                'type' => "BIO",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Durandal battlesuit. Melee Fire DMG.
                Dapat menghubungkan Ultimates untuk memberikan kerusakan yang gila. Memberikan lebih banyak kerusakan di Astral Harness. Dapat menekan musuh dengan Lemparan. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 205,
                'weapon_alt1_hi3_id' => 213,
                'weapon_alt2_hi3_id' => 208,
                'stigmata_sign_id' => 54,
                'stigmata_alt_id' => 133,
                'image' => "Dea_Anchora.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //18
            [
                'name' => "Divine Prayer",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "Sub-DPS",
                'detail' => "Kiana Kaslana battlesuit. DPS jarak dekat yang tinggi.
                Debuff musuh. Penyembuh HP tim yang efektif. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 263,
                'weapon_alt1_hi3_id' => 261,
                'weapon_alt2_hi3_id' => 249,
                'stigmata_sign_id' => 14,
                'stigmata_alt_id' => 124,
                'image' => "devine prayer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //19
            [
                'name' => "Dimension Breaker",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => " Bronya Zaychik battlesuit. DPS jarak menengah yang stabil.
                Sakelar memicu AOE Time Slow yang kecil. Ultimate: Melepaskan Project Bunny untuk mengejek musuh.  ",
                'rarity' => "S",
                'tier' => "C",
                'weapon_sign_hi3_id' => 25,
                'weapon_alt1_hi3_id' => 20,
                'weapon_alt2_hi3_id' => 18,
                'stigmata_sign_id' => 3,
                'stigmata_alt_id' => 127,
                'image' => "dimension breaker.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //20
            [
                'name' => "Dreamweaver",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Misteln Schariac battlesuit. Physical DMG dealer.
                Dapat memanggil Seeds of Ideas untuk mendapatkan dukungan.
                Ultimate SEQ 1 memungkinkannya memiliki tubuh astral untuk memberikan Physical DMG yang sangat besar. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 329,
                'weapon_alt1_hi3_id' => 330,
                'weapon_alt2_hi3_id' => 332,
                'stigmata_sign_id' => 108,
                'stigmata_alt_id' => 29,
                'image' => "dreamweaver.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //21
            [
                'name' => "Drive Kometa",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Bronya Zaychik battlesuit.
                Peningkatan Augment Core dari Yamabuki Armor. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 20,
                'weapon_alt1_hi3_id' => 35,
                'weapon_alt2_hi3_id' => 9,
                'stigmata_sign_id' => 38,
                'stigmata_alt_id' => 127,
                'image' => "drive kometa.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //22
            [
                'name' => "Fallen Rosemary",
                'type' => "QUA",
                'element' => "Lightning",
                'role' => "DPS",
                'detail' => "Rita Rossweisse battlesuit.
                Kerusakan AoE jarak dekat yang berkelanjutan. Terapkan Rune untuk meningkatkan diri dan tim. ATK dan Ultimate yang terisi penuh memberikan kerusakan tinggi.",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 217,
                'weapon_alt1_hi3_id' => 230,
                'weapon_alt2_hi3_id' => 230,
                'stigmata_sign_id' => 26,
                'stigmata_alt_id' => 33,
                'image' => "Fallen Rosemary.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //23
            [
                'name' => "Fenghuang of Vicissitude",
                'type' => "QUA",
                'element' => "Lightning",
                'role' => "DPS",
                'detail' => "Fu Hua battlesuit. Melee Fire DPS.
                Mampu memberikan DMG tinggi dengan Combo ATK.
                Ultimate memberikan Fire DMG yang sangat besar.",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 310,
                'weapon_alt1_hi3_id' => 314,
                'weapon_alt2_hi3_id' => 97,
                'stigmata_sign_id' => 165,
                'stigmata_alt_id' => 166,
                'image' => "fenghuang of vicissitude.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //24
            [
                'name' => "Fervent Tempo Δ",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => " Rozaliya Olenyeva battlesuit.
                Augment Peningkatan Core dari Molotov Cherry. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 112,
                'weapon_alt1_hi3_id' => 117,
                'weapon_alt2_hi3_id' => 125,
                'stigmata_sign_id' => 25,
                'stigmata_alt_id' => 33,
                'image' => "fervent tempo.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //25
            [
                'name' => "Flame Sakitama",
                'type' => "BIO",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Yae Sakura battlesuit.  Melee DPS..
                Memberikan Fire DMG pada waktu tertentu.
                Keberlanjutan yang tinggi. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 155,
                'weapon_alt1_hi3_id' => 160,
                'weapon_alt2_hi3_id' => 190,
                'stigmata_sign_id' => 10,
                'stigmata_alt_id' => 124,
                'image' => "flame sakimata.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //26
            [
                'name' => "Goushinnso Memento",
                'type' => "MECH",
                'element' => "Ice",
                'role' => "DPS",
                'detail' => "Yae Sakura battlesuit. Mid-ranged DPS.
                Mengkonsumsi Energi Kinetik untuk Combo ATK yang menghasilkan AOE Ice DMG yang sangat besar. Ultimate: Meningkatkan DPS dan memulihkan Energi Kinetik. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 153,
                'weapon_alt1_hi3_id' => 190,
                'weapon_alt2_hi3_id' => 190,
                'stigmata_sign_id' => 157,
                'stigmata_alt_id' => 2,
                'image' => "goushinnho memento.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //27
            [
                'name' => "Gyakushinn Miko",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "Sub-DPS",
                'detail' => "Yae Sakura battlesuit. Melee DPS.
                Menandai target untuk memberikan DMG spike.
                Dapat dengan cepat berpindah antar musuh.",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 159,
                'weapon_alt1_hi3_id' => 174,
                'weapon_alt2_hi3_id' => 165,
                'stigmata_sign_id' => 12,
                'stigmata_alt_id' => 36,
                'image' => "gyakushin miho.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //28
            [
                'name' => "Hawk of the Fog",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Fu Hua battlesuit.
                Peningkatan Augment Core dari Valkyrie Accipiter.",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 93,
                'weapon_alt1_hi3_id' => 97,
                'weapon_alt2_hi3_id' => 97,
                'stigmata_sign_id' => 20,
                'stigmata_alt_id' => 23,
                'image' => "hawk of the fog.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //29
            [
                'name' => "Haxxor Bunny",
                'type' => "PSY",
                'element' => "Ice",
                'role' => "Support",
                'detail' => "Bronya Zaychik battlesuit. Mid-range sustained DMG dealer.
                Meluncurkan QTE dalam keadaan siaga untuk mendukung rekan satu tim. Memanggil drone untuk sering menyerang. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 18,
                'weapon_alt1_hi3_id' => 42,
                'weapon_alt2_hi3_id' => 42,
                'stigmata_sign_id' => 33,
                'stigmata_alt_id' => 124,
                'image' => "Haxxor Bunny.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //30
            [
                'name' => "Helical Contraption",
                'type' => "QUA",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => " Vill-V battlesuit. Shoots fire long range.
                Terus menembak dengan persenjataan keras.
                Gunakan chariot dalam mode burst untuk menghasilkan banyak DMG. ",
                'rarity' => "S",
                'tier' => "B",
                'weapon_sign_hi3_id' => 12,
                'weapon_alt1_hi3_id' => 9,
                'weapon_alt2_hi3_id' => 46,
                'stigmata_sign_id' => 7,
                'stigmata_alt_id' => 133,
                'image' => "Helical Contraption.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //31
            [
                'name' => "Herrscher of Finality",
                'type' => "IMG",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Kiana Kaslana battlesuit. Melee Fire DPS.
                Mampu bertempur di udara. Mengaktifkan bentuk Herrscher untuk Absolute Time Fracture dengan lonjakan DPS. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 236,
                'weapon_alt1_hi3_id' => 237,
                'weapon_alt2_hi3_id' => 249,
                'stigmata_sign_id' => 88,
                'stigmata_alt_id' => 133,
                'image' => "herrscher of finality.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //32
            [
                'name' => "Herrscher of Flamescion",
                'type' => "PSY",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Kiana Kaslana battlesuit. Melee Fire DPS.
                Mampu bertempur di udara.Berubah menjadi bentuk Herrscher untuk DPS spike. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 237,
                'weapon_alt1_hi3_id' => 249,
                'weapon_alt2_hi3_id' => 249,
                'stigmata_sign_id' => 115,
                'stigmata_alt_id' => 133,
                'image' => "Herrscher of Flamescion.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //33
            [
                'name' => "Herrscher of Human: Ego",
                'type' => "PSY",
                'element' => "Ice",
                'role' => "DPS",
                'detail' => "Elysia battlesuit. Penyalur Ice DMG jarak jauh.
                Skill melempar senjata setelah menggunakan Charged ATK memicu Ego Blossom dan menghasilkan DMG yang cukup besar. Melepaskan Ultimate memasuki Herrscher of Origin Form, di mana dia terus menerus memberikan DMG yang sangat besar. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 321,
                'weapon_alt1_hi3_id' => 3,
                'weapon_alt2_hi3_id' => 8,
                'stigmata_sign_id' => 148,
                'stigmata_alt_id' => 96,
                'image' => "Herrscher of Human Ego.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //34
            [
                'name' => "Herrscher of Origin",
                'type' => "IMG",
                'element' => "Lighting",
                'role' => "DPS",
                'detail' => "Raiden Mei battlesuit.  Melee damage dealer.
                Memberikan Lightning DMG yang tinggi. Bergerak dengan cepat di antara musuh. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 294,
                'weapon_alt1_hi3_id' => 156,
                'weapon_alt2_hi3_id' => 187,
                'stigmata_sign_id' => 89,
                'stigmata_alt_id' => 33,
                'image' => "herrscher of origin.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //35
            [
                'name' => "Herrscher of Reason",
                'type' => "MECH",
                'element' => "Ice",
                'role' => "DPS",
                'detail' => "Bronya Zaychik battlesuit.
                Melee. Mengumpulkan Konstruktyom. Dapat melepaskan beberapa ATK bermuatan untuk memberikan serangan DMG jarak jauh. Ultimate: heavy bike USAGI Kinetik yang menghasilkan DMG besar.",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 297,
                'weapon_alt1_hi3_id' => 10,
                'weapon_alt2_hi3_id' => 36,
                'stigmata_sign_id' => 6,
                'stigmata_alt_id' => 101,
                'image' => "Herrscher of Reason.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //36
            [
                'name' => "Herrscher of Rebirth",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Seele Vollerei battlesuit.
                Memainkan peran Physical DPS dan dukungan.
                Two forms memanggil entitas berbeda yang masing-masing berfokus pada serangan dan support.
                Bentuk support memberikan buff Crit dan impairment yang signifikan kepada rekan satu tim. Bentuk ofensif memberi dirinya sendiri buff Crit dan membunuh musuh. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 315,
                'weapon_alt1_hi3_id' => 316,
                'weapon_alt2_hi3_id' => 230,
                'stigmata_sign_id' => 152,
                'stigmata_alt_id' => 79,
                'image' => "herrscher of rebirth.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //37
            [
                'name' => "Herrscher of Sentience",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Fu Hua battlesuit. Support Physical.
                Dapat mengumpulkan dan melemahkan musuh. Melakukan tebasan kombo setelah mengaktifkan Ultimate untuk memberikan DMG tinggi. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 308,
                'weapon_alt1_hi3_id' => 92,
                'weapon_alt2_hi3_id' => 97,
                'stigmata_sign_id' => 163,
                'stigmata_alt_id' => 79,
                'image' => "Herrscher of Sentience.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //38
            [
                'name' => "Herrscher of the Void",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Kiana Kaslana battlesuit.DPS AOE jarak jauh yang stabil.
                Dapat menghindar dari musuh.Herrscher Form memberikan lonjakan DPS. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 270,
                'weapon_alt1_hi3_id' => 261,
                'weapon_alt2_hi3_id' => 264,
                'stigmata_sign_id' => 83,
                'stigmata_alt_id' => 95,
                'image' => "herrscher of the void.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //39
            [
                'name' => "Herrscher of Thunder",
                'type' => "PSY",
                'element' => "Lighting",
                'role' => "DPS",
                'detail' => "Raiden Mei battlesuit. Melee damage dealer.
                Lightning DMG tinggi yang berkelanjutan. Bonus SP untuk rekan satu tim PSY. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 156,
                'weapon_alt1_hi3_id' => 152,
                'weapon_alt2_hi3_id' => 190,
                'stigmata_sign_id' => 160,
                'stigmata_alt_id' => 15,
                'image' => "Herrscher of Thunder.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //40
            [
                'name' => "Herrscher of Truth",
                'type' => "IMG",
                'element' => "Ice",
                'role' => "DPS",
                'detail' => "Bronya Zaychik battlesuit.  Dukungan Elemen Jarak Jauh.
                Menyebabkan sejumlah besar Ice DMG dalam bentuk Lanjutan. Ultimate meningkatkan Elemental Breach untuk semua anggota tim yang menggunakan Lightning dan Fire DMG. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 296,
                'weapon_alt1_hi3_id' => 298,
                'weapon_alt2_hi3_id' => 1,
                'stigmata_sign_id' => 90,
                'stigmata_alt_id' => 6,
                'image' => "Herrscher of Truth.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //41
            [
                'name' => "Infinite Ouroboros",
                'type' => "MECH",
                'element' => "Lighting",
                'role' => "DPS",
                'detail' => " Mobius battlesuit.Ranged Lightning DMG dealer dengan pembersihan massa yang cepat.
                Kombinasi ATK memberikan DMG yang tinggi. Ultimate menciptakan [Umbra of Ouroboros] dan memberikan DMG yang tinggi. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 65,
                'weapon_alt1_hi3_id' => 69,
                'weapon_alt2_hi3_id' => 82,
                'stigmata_sign_id' => 49,
                'stigmata_alt_id' => 20,
                'image' => "Infinite Ouroboros.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //42
            [
                'name' => "Jade Knight",
                'type' => "PSY",
                'element' => "Ice",
                'role' => "Support",
                'detail' => "Li Sushang battlesuit.
                Ice support. Sword Array memungkinkan serangan berulang.
                Ultimate memberikan Elemental Breach kepada dealer Ice DMG di tim. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 309,
                'weapon_alt1_hi3_id' => 91,
                'weapon_alt2_hi3_id' => 91,
                'stigmata_sign_id' => 141,
                'stigmata_alt_id' => 33,
                'image' => "Jade Knight.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //43
            [
                'name' => "Knight Moonbeam",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Kiana Kaslana battlesuit.
                DPS AOE jarak menengah hingga dekat yang bagus. Memicu Time Fracture dengan mudah. DMG burst tinggi dengan bantuan debuff kerumunan.",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 269,
                'weapon_alt1_hi3_id' => 249,
                'weapon_alt2_hi3_id' => 249,
                'stigmata_sign_id' => 135,
                'stigmata_alt_id' => 95,
                'image' => "knight moon beam.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //44
            [
                'name' => "Lightning Empress",
                'type' => "PSY",
                'element' => "Lighting",
                'role' => "Support",
                'detail' => "Baju perang Raiden Mei battlesuit.
                Melee DPS. DMG petir murni. Memberikan SP yang sangat besar kepada seluruh tim. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 154,
                'weapon_alt1_hi3_id' => 168,
                'weapon_alt2_hi3_id' => 190,
                'stigmata_sign_id' => 16,
                'stigmata_alt_id' => 124,
                'image' => "lightning empress.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //45
            [
                'name' => "Luna Kindred",
                'type' => "BIO",
                'element' => "Lighting",
                'role' => "Support",
                'detail' => "Theresa Apocalypse battlesuit.
                DPS jarak menengah hingga dekat. Menyembuhkan HP dengan memukul musuh yang bleeding. Mengisi ATK: Berdarah dan menekan musuh. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 67,
                'weapon_alt1_hi3_id' => 304,
                'weapon_alt2_hi3_id' => 83,
                'stigmata_sign_id' => 9,
                'stigmata_alt_id' => 36,
                'image' => "luna kindred.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //46
            [
                'name' => "Lunar Vow: Crimson Love",
                'type' => "PSY",
                'element' => "Lighting",
                'role' => "DPS and Support",
                'detail' => "Theresa Apocalypse battlesuit.  Lightning DPS dan dukungan yang baik.
                Menyerang musuh dengan chainsaw. Memberikan Bleed DMG yang sangat besar dalam mode frenzy, dan Ultimate-nya memberikan Elemental Breach kepada rekan satu tim yang memberikan Lightning DMG. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 301,
                'weapon_alt1_hi3_id' => 305,
                'weapon_alt2_hi3_id' => 82,
                'stigmata_sign_id' => 164,
                'stigmata_alt_id' => 24,
                'image' => "lunar vow crimson love.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //47
            [
                'name' => "Midnight Absinthe",
                'type' => "IMG",
                'element' => "Fire",
                'role' => "Support",
                'detail' => "Natasha Cioara battlesuit. Ranged Elemental Support.
                Ultimate menutupi area yang luas dengan asap yang meningkatkan Fire DMG yang diterima musuh. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 6,
                'weapon_alt1_hi3_id' => 3,
                'weapon_alt2_hi3_id' => 8,
                'stigmata_sign_id' => 27,
                'stigmata_alt_id' => 124,
                'image' => "Midnight Absinthe.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //48
            [
                'name' => "Miracle ☆ Magical Girl",
                'type' => "MECH",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Sirin battlesuit. MECH Fire DPS.
                Menggunakan mode gunting chakram untuk bertarung. Ultimate Tailoring Shattered Nightmares☆ memberikan Fire DMG. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 323,
                'weapon_alt1_hi3_id' => 59,
                'weapon_alt2_hi3_id' => 63,
                'stigmata_sign_id' => 166,
                'stigmata_alt_id' => 133,
                'image' => "miracle magical girl.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //49
            [
                'name' => "Miss Pink Elf♪",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Elysia  battlesuit. Ranged Physical DMG dealer.
                Charged ATK memberikan DMG yang tinggi. Ultimate menciptakan Flawless Dome yang memungkinkan Charged ATK memantul untuk menghasilkan DMG yang besar. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 2,
                'weapon_alt1_hi3_id' => 7,
                'weapon_alt2_hi3_id' => 3,
                'stigmata_sign_id' => 29,
                'stigmata_alt_id' => 9,
                'image' => "Miss Pink Elf.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //50
            [
                'name' => "Molotov Cherry",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Rozaliya Olenyeva battlesuit.
                DPS jarak dekat hingga menengah.
                Memberikan Physical DMG yang sangat besar. ATK yang terisi memberikan lebih banyak DMG seiring berjalannya waktu. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 130,
                'weapon_alt1_hi3_id' => 117,
                'weapon_alt2_hi3_id' => 115,
                'stigmata_sign_id' => 9,
                'stigmata_alt_id' => 124,
                'image' => "Molotov Cherry.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //51
            [
                'name' => "Night Squire",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Fu Hua battlesuit. Melee DPS.
                Menghabiskan Ripple untuk meningkatkan Combo ATK DMG. Ultimate: Serangan kombo tanpa henti. ",
                'rarity' => "S",
                'tier' => "B",
                'weapon_sign_hi3_id' => 92,
                'weapon_alt1_hi3_id' => 100,
                'weapon_alt2_hi3_id' => 97,
                'stigmata_sign_id' => 30,
                'stigmata_alt_id' => 19,
                'image' => "night squire.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //52
            [
                'name' => "Palatinus Equinox",
                'type' => "IMG",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Durandal battlesuit. Melee Physical DMG dealer.
                ATK yang dibebankan setelah Ultimate Evasion atau Sprint memberikan DMG yang tinggi. Ultimate secara langsung merusak Biji Nihilus.
                Dapat menekan musuh dengan Lemparan. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 319,
                'weapon_alt1_hi3_id' => 203,
                'weapon_alt2_hi3_id' => 206,
                'stigmata_sign_id' => 140,
                'stigmata_alt_id' => 29,
                'image' => "Palatinus_Equinox.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //53
            [
                'name' => "Phoenix",
                'type' => "PSY",
                'element' => "Fire",
                'role' => "Support",
                'detail' => "Fu Hua battlesuit. Melee DPS.
                Memberi buff pada Elemental DMG tim saat ditandai. Gunakan Kombo yang berbeda untuk mendapatkan Prajna dan meningkatkan keterampilannya. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 94,
                'weapon_alt1_hi3_id' => 91,
                'weapon_alt2_hi3_id' => 97,
                'stigmata_sign_id' => 133,
                'stigmata_alt_id' => 153,
                'image' => "phoenix.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //54
            [
                'name' => "Prinzessin der Verurteilung!",
                'type' => "BIO",
                'element' => "Lighting",
                'role' => "DPS dan Support",
                'detail' => "Fischl battlesuit. Long-range Lightning DMG dealer.
                QTE dapat menimbulkan Kerentanan Pencahayaan. Memanggil familiar untuk menyerang dengan cepat. ",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 5,
                'weapon_alt1_hi3_id' => 3,
                'weapon_alt2_hi3_id' => 3,
                'stigmata_sign_id' => 16,
                'stigmata_alt_id' => 33,
                'image' => "prinzessin.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //55
            [
                'name' => "Ritual Imayoh",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Baju perang Kallen Kaslana. Mid-to-close range AOE DPS.
                Mengkonsumsi Energi Kinetik untuk Combo ATK yang menghasilkan Physical DMG yang sangat besar. Ultimate memanggil turret untuk meledakkan DMG. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 270,
                'weapon_alt1_hi3_id' => 256,
                'weapon_alt2_hi3_id' => 252,
                'stigmata_sign_id' => 25,
                'stigmata_alt_id' => 95,
                'image' => "retual imayoh.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //56
            [
                'name' => "Reverist Calico",
                'type' => "IMG",
                'element' => "Ice",
                'role' => "Support",
                'detail' => "Pardofelis battlesuit. Melee Ice DPS.
                Dapat memberikan Rime Trauma yang tinggi dan membuat freezing lebih efektif untuk tim. Dapat memulihkan SP dalam jumlah besar untuk tim. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 59,
                'weapon_alt1_hi3_id' => 60,
                'weapon_alt2_hi3_id' => 63,
                'stigmata_sign_id' => 145,
                'stigmata_alt_id' => 124,
                'image' => "reverist calico.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //57
            [
                'name' => "Phantom Iron",
                'type' => "MECH",
                'element' => "Lighting",
                'role' => "DPS",
                'detail' => "Rita Rossweisse battlesuit. Melee DPS.
                ATK yang terisi mengubah DMG ATK Dasar menjadi Lightning DMG yang di-buff. Memanggil Stalker Carbon untuk memberikan buff pada DPS Elemental tim. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 223,
                'weapon_alt1_hi3_id' => 229,
                'weapon_alt2_hi3_id' => 231,
                'stigmata_sign_id' => 50,
                'stigmata_alt_id' => 33,
                'image' => "Rita phantom iron.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //58
            [
                'name' => "Sakuno Rondo",
                'type' => "PSY",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Theresa Apocalypse battlesuit. DPS jarak menengah yang fleksibel.
                Menekan musuh solo. Fire DMG Besar-besaran selama ledakan. ",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 68,
                'weapon_alt1_hi3_id' => 70,
                'weapon_alt2_hi3_id' => 70,
                'stigmata_sign_id' => 10,
                'stigmata_alt_id' => 33,
                'image' => "sakuno rondo.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //59
            [
                'name' => "Scarlet Fusion",
                'type' => "MECH",
                'element' => "Lighting",
                'role' => "DPS",
                'detail' => "Murata Himeko battlesuit. DPS jarak dekat yang stabil.
                Serangan dalam tempo khusus untuk buff DMG. Ultimate: Burst DMG yang kuat dan penekanan. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 117,
                'weapon_alt1_hi3_id' => 118,
                'weapon_alt2_hi3_id' => 118,
                'stigmata_sign_id' => 33,
                'stigmata_alt_id' => 124,
                'image' => "scarlet fusion.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //60
            [
                'name' => "Shadow Dash",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Raiden Mei battlesuit. Middle-range follow-up & sustained damage.
                Meningkatkan Physical DMG tim. Ultimate dapat mendukung rekan satu tim dalam keadaan siaga. ",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 168,
                'weapon_alt1_hi3_id' => 176,
                'weapon_alt2_hi3_id' => 187,
                'stigmata_sign_id' => 25,
                'stigmata_alt_id' => 137,
                'image' => "shadow dash.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //61
            [
                'name' => "Shadow Knight",
                'type' => "MECH",
                'element' => "Lighting",
                'role' => "DPS",
                'detail' => "Fu Hua battlesuit. Stable melee DPS.
                Memberikan Lightning DMG yang sangat besar. Ultimate: Menciptakan zona petir untuk meningkatkan DPS. ",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 93,
                'weapon_alt1_hi3_id' => 91,
                'weapon_alt2_hi3_id' => 101,
                'stigmata_sign_id' => 20,
                'stigmata_alt_id' => 153,
                'image' => "shadow knight.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //62
            [
                'name' => "Golden Diva",
                'type' => "IMG",
                'element' => "Lighting",
                'role' => "Support",
                'detail' => "Eden battlesuit. Long-range Lightning DPS.
                Dapat memberikan Paralyze Trauma dan membuat Paralyze tim menjadi lebih efektif. Memulihkan SP tim. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 290,
                'weapon_alt1_hi3_id' => 247,
                'weapon_alt2_hi3_id' => 249,
                'stigmata_sign_id' => 160,
                'stigmata_alt_id' => 16,
                'image' => "Golden Diva.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //63
            [
                'name' => "Sixth Serenade",
                'type' => "PSY",
                'element' => "Ice",
                'role' => "DPS",
                'detail' => "Kallen Kaslana battlesuit. Mid-range DPS.
                Serangan antar-jemput memberikan Ice DMG yang sangat besar. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 238,
                'weapon_alt1_hi3_id' => 287,
                'weapon_alt2_hi3_id' => 287,
                'stigmata_sign_id' => 157,
                'stigmata_alt_id' => 117,
                'image' => "sixth serenede.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //64
            [
                'name' => "Snowy Sniper",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Bronya Zaychik battlesuit. QTE mudah dipicu.
                Ultimate membekukan semua musuh dalam waktu yang lama. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 9,
                'weapon_alt1_hi3_id' => 20,
                'weapon_alt2_hi3_id' => 15,
                'stigmata_sign_id' => 1,
                'stigmata_alt_id' => 127,
                'image' => "snowy sniper.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //65
            [
                'name' => "Spina Astera",
                'type' => "MECH",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Rita Rossweisse battlesuit. Melee burst DMG dealer.
                ATK yang terisi dan Ultimate mendorong Astral Harness untuk meningkatkan dirinya sendiri. ATK yang terisi memberikan DMG yang tinggi pada Astral Harness. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 216,
                'weapon_alt1_hi3_id' => 219,
                'weapon_alt2_hi3_id' => 30,
                'stigmata_sign_id' => 41,
                'stigmata_alt_id' => 133,
                'image' => "Spina Astera.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //66
            [
                'name' => "Starchasm Nyx",
                'type' => "MECH",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Seele Vollerei battlesuit. Penyalur Ice DMG jarak dekat. Bagus dalam melawan banyak musuh. ATK yang terisi memberikan DMG yang cukup besar.
                Ultimate mengaktifkan mode Burst, di mana dia memberikan DMG besar dengan cakar berantai. ",
                'rarity' => "S",
                'tier' => "B",
                'weapon_sign_hi3_id' => 219,
                'weapon_alt1_hi3_id' => 220,
                'weapon_alt2_hi3_id' => 230,
                'stigmata_sign_id' => 144,
                'stigmata_alt_id' => 157,
                'image' => "Starchasm Nyx.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //67
            [
                'name' => "Starry Impression",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Griseo battlesuit Melee Physical support.
                Bleed memberikan DMG yang tinggi. Ultimate memberikan buff kepada semua rekan satu tim. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 66,
                'weapon_alt1_hi3_id' => 67,
                'weapon_alt2_hi3_id' => 76,
                'stigmata_sign_id' => 126,
                'stigmata_alt_id' => 127,
                'image' => "Starry Impression.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //68
            [
                'name' => "Starlit Astrologos",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Theresa Apocalypse battlesuit Powerful Physical Support.
                Gabung dalam pertempuran dengan QTE tanpa beralih untuk mendukung rekan satu tim. Ultimate sangat meningkatkan DPS rekan satu tim dan dapat dilepaskan saat siaga. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 78,
                'weapon_alt1_hi3_id' => 82,
                'weapon_alt2_hi3_id' => 82,
                'stigmata_sign_id' => 38,
                'stigmata_alt_id' => 63,
                'image' => "stralit astrologos.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //69
            [
                'name' => "Striker Fulminata",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Raiden Mei battlesuit
                Peningkatan Augment Core dari Valkyrie Bladestrike. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 153,
                'weapon_alt1_hi3_id' => 168,
                'weapon_alt2_hi3_id' => 165,
                'stigmata_sign_id' => 30,
                'stigmata_alt_id' => 137,
                'image' => "striker fulminata.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //70
            [
                'name' => "Stygian Nymph",
                'type' => "QUA",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Seele Vollerei battlesuit
                White form: DPS AOE jarak dekat.
                Dark form: Physical Burst dengan ATK yang besar.
                Melewati musuh untuk secara aktif memicu Evasion. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 218,
                'weapon_alt1_hi3_id' => 226,
                'weapon_alt2_hi3_id' => 230,
                'stigmata_sign_id' => 58,
                'stigmata_alt_id' => 120,
                'image' => "stygian nyphm.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //71
            [
                'name' => "Sugary Starburst",
                'type' => "MECH",
                'element' => "Ice",
                'role' => "Support",
                'detail' => "Baju perang Shigure Kira battlesuit. Ranged Ice support.
                Gunakan QTE saat siaga untuk memberi buff pada rekan satu tim dan meningkatkan Elemental DMG tim. Dapat mengembalikan sejumlah besar SP ke tim. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 291,
                'weapon_alt1_hi3_id' => 244,
                'weapon_alt2_hi3_id' => 249,
                'stigmata_sign_id' => 60,
                'stigmata_alt_id' => 145,
                'image' => "sugary starburst.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //72
            [
                'name' => "Sündenjäger",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Kallen Kaslana battlesuit. DPS AOE kelas menengah.
                Potensi DPS yang kuat. Penyembuhan diri yang sangat baik. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 242,
                'weapon_alt1_hi3_id' => 249,
                'weapon_alt2_hi3_id' => 249,
                'stigmata_sign_id' => 20,
                'stigmata_alt_id' => 69,
                'image' => "sundejadger.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //73
            [
                'name' => "Valkyrie Quicksand",
                'type' => "QUA",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Susannah Manatt battlesuit  Physical melee attacker.
                Menggunakan chakram sebagai dua pedang dan menggunakan teknik tarian rebana. Ultimate menginduksi status Dancing dan memberikan DMG yang sangat besar. ",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 325,
                'weapon_alt1_hi3_id' => 59,
                'weapon_alt2_hi3_id' => 63,
                'stigmata_sign_id' => 143,
                'stigmata_alt_id' => 38,
                'image' => "susannah.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //74
            [
                'name' => "Swallowtail Phantasm",
                'type' => "QUA",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Seele Vollerei battlesuit. Melee AOE DPS.
                Memasuki Warp State setelah menghindari serangan musuh. Mode Burst: Lonjakan DPS. Ultimate Evasion memperpanjang durasi Burst. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 218,
                'weapon_alt1_hi3_id' => 229,
                'weapon_alt2_hi3_id' => 225,
                'stigmata_sign_id' => 30,
                'stigmata_alt_id' => 137,
                'image' => "Swallowtail Phantasm.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //75
            [
                'name' => "Sweet 'n' Spicy",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Baju perang Carole Pepper  battlesuit. MECH-type melee Physical support. ATK yang terisi memberikan DMG yang tinggi ke perisai.
                Ultimate memberikan buff kepada rekan satu tim di lapangan setelah dia diganti.",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 99,
                'weapon_alt1_hi3_id' => 102,
                'weapon_alt2_hi3_id' => 102,
                'stigmata_sign_id' => 128,
                'stigmata_alt_id' => 63,
                'image' => "Sweet n Spicy.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //76
            [
                'name' => "Terminal Aide 0017",
                'type' => "IMG",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Baju perang PROMETHEUS battlesuit. Melee IMG-type Physical support.
                Menghancurkan pertahanan musuh dengan tinju raksasa.
                Ultimate dan Regen: Superpartner meningkatkan Physical DMG di seluruh tim. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 313,
                'weapon_alt1_hi3_id' => 99,
                'weapon_alt2_hi3_id' => 99,
                'stigmata_sign_id' => 17,
                'stigmata_alt_id' => 38,
                'image' => "terminal aide 0017.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //77
            [
                'name' => "Twilight Paladin",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Theresa Apocalypse battlesuit .
                Peningkatan Augment Core dari Violet Executer. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 67,
                'weapon_alt1_hi3_id' => 73,
                'weapon_alt2_hi3_id' => 306,
                'stigmata_sign_id' => 9,
                'stigmata_alt_id' => 120,
                'image' => "twilight paladin.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //78
            [
                'name' => "Umbral Rose",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Rita Rossweisse battlesuit. DPS AOE jarak dekat.
                ATK yang dibebankan menghabiskan HP tetapi memberikan DMG yang sangat besar.
                Ultimate: Physical DMG AOE yang tinggi dan menyebabkan knockback. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 218,
                'weapon_alt1_hi3_id' => 234,
                'weapon_alt2_hi3_id' => 230,
                'stigmata_sign_id' => 9,
                'stigmata_alt_id' => 36,
                'image' => "Umbral_Rose.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //79
            [
                'name' => "Valkyrie Gloria",
                'type' => "QUA",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Baju perang Durandal battlesuit.
                Penyalur DMG tembakan jarak dekat. Mengisi daya pada musuh untuk menyerang. Ultimate memberikan Fire DMG yang sangat besar. Mampu mengendalikan musuh dengan skill Throw-nya. ",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 205,
                'weapon_alt1_hi3_id' => 209,
                'weapon_alt2_hi3_id' => 208,
                'stigmata_sign_id' => 133,
                'stigmata_alt_id' => 124,
                'image' => "valkrie gloria.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //80
            [
                'name' => "Valkyrie Ranger",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Baju perang Kiana Kaslana battlesuit.
                DPS jarak jauh yang stabil. Keterampilan dukungan dan kontrol.
                Performa solo yang luar biasa.",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 270,
                'weapon_alt1_hi3_id' => 287,
                'weapon_alt2_hi3_id' => 238,
                'stigmata_sign_id' => 25,
                'stigmata_alt_id' => 33,
                'image' => "valkrie ranger.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //81
            [
                'name' => "Valkyrie Accipiter",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Baju perang Fu Hua battlesuit. Team healing.
                Meningkatkan efisiensi pemecahan perisai tim. Setrum musuh untuk menyiapkan lonjakan DPS. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 92,
                'weapon_alt1_hi3_id' => 94,
                'weapon_alt2_hi3_id' => 104,
                'stigmata_sign_id' => 25,
                'stigmata_alt_id' => 33,
                'image' => "valkyrie accipiter.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //82
            [
                'name' => "Valkyrie Bladestrike",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Baju perang Raiden battlesuit. Mei High melee DPS and suppression.
                Unggul melawan musuh tunggal. Memberikan DMG yang sangat besar kepada musuh yang terlempar ke udara. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 157,
                'weapon_alt1_hi3_id' => 176,
                'weapon_alt2_hi3_id' => 187,
                'stigmata_sign_id' => 91,
                'stigmata_alt_id' => 133,
                'image' => "valkyrie bladestrike.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //83
            [
                'name' => "Valkyrie Chariot",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Baju perang Bronya Zaychik battlesuit. Stable ranged DPS.
                Keterampilan dukungan dan kontrol yang kuat. Ultimate memiliki biaya rendah dan durasi yang lama. ",
                'rarity' => "B",
                'tier' => "C",
                'weapon_sign_hi3_id' => 20,
                'weapon_alt1_hi3_id' => 24,
                'weapon_alt2_hi3_id' => 21,
                'stigmata_sign_id' => 127,
                'stigmata_alt_id' => 78,
                'image' => "valkyrie chariot.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //84
            [
                'name' => "Valkyrie Pledge",
                'type' => "PSY",
                'element' => "Lighting",
                'role' => "Support",
                'detail' => "Apocalypse battlesuit. Mid-ranged crowd control.
                ATK dasar: Pemulihan AOE dan SP yang baik.
                Gunakan skill senjata untuk meningkatkan DPS.",
                'rarity' => "A",
                'tier' => "B",
                'weapon_sign_hi3_id' => 74,
                'weapon_alt1_hi3_id' => 68,
                'weapon_alt2_hi3_id' => 82,
                'stigmata_sign_id' => 16,
                'stigmata_alt_id' => 124,
                'image' => "valkyrie pledge.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //85
            [
                'name' => "Valkyrie Triumph",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "Sub-DPS",
                'detail' => "Baju perang Murata Himeko battlesuit. Melee DPS with heavy and light attacks.
                Penekan musuh yang baik. Ultimate: DMG ledakan besar-besaran, kontrol kerumunan, dan penyembuhan. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 117,
                'weapon_alt1_hi3_id' => 117,
                'weapon_alt2_hi3_id' => 117,
                'stigmata_sign_id' => 33,
                'stigmata_alt_id' => 124,
                'image' => "valkyrie triumph.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //86
            [
                'name' => "Vermilion Knight: Eclipse",
                'type' => "MECH",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Baju perang Murata Himeko battlesuit. Stable melee DPS.
                DMG tembakan masif. Ultimate: DMG AOE besar. ",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 111,
                'weapon_alt1_hi3_id' => 117,
                'weapon_alt2_hi3_id' => 113,
                'stigmata_sign_id' => 133,
                'stigmata_alt_id' => 33,
                'image' => "Vermillion Knight.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //87
            [
                'name' => "Violet Executer",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => " Theresa Apocalypse battlesuit. Flexible mid-ranged DPS.
                Jarak jauh: AOE knock back. Pasif yang kuat. Bersinergi dengan debuff Bleeding. ",
                'rarity' => "S",
                'tier' => "A",
                'weapon_sign_hi3_id' => 67,
                'weapon_alt1_hi3_id' => 304,
                'weapon_alt2_hi3_id' => 82,
                'stigmata_sign_id' => 9,
                'stigmata_alt_id' => 113,
                'image' => "violet executor.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //88
            [
                'name' => "Void Drifter",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Baju perang Kiana Kaslana battlesuit.
                Peningkatan Augment Core dari Valkyrie Ranger. ",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 270,
                'weapon_alt1_hi3_id' => 261,
                'weapon_alt2_hi3_id' => 238,
                'stigmata_sign_id' => 38,
                'stigmata_alt_id' => 95,
                'image' => "void drifter.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //89
            [
                'name' => "White Comet",
                'type' => "MECH",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Kiana Kaslana battlesuit. Melee attacker with stable DPS.
                Bagus dalam mengganggu musuh. Kemampuan bertahan hidup yang tinggi. ",
                'rarity' => "B",
                'tier' => "C",
                'weapon_sign_hi3_id' => 270,
                'weapon_alt1_hi3_id' => 263,
                'weapon_alt2_hi3_id' => 252,
                'stigmata_sign_id' => 30,
                'stigmata_alt_id' => 91,
                'image' => "white comet.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //90
            [
                'name' => "Wolf's Dawn",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Baju perang Bronya Zaychik battlesuit. Diversionary ranged DPS.
                Autonomous Project Bunny mengalihkan perhatian musuh.
                Unggul melawan musuh tunggal. Kemampuan bertahan hidup yang baik. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 18,
                'weapon_alt1_hi3_id' => 35,
                'weapon_alt2_hi3_id' => 32,
                'stigmata_sign_id' => 33,
                'stigmata_alt_id' => 50,
                'image' => "wolf`s dawn.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //91
            [
                'name' => "Yamabuki Armor",
                'type' => "PSY",
                'element' => "Physical",
                'role' => "Support",
                'detail' => "Baju perang Bronya Zaychik battlesuit. Stable ranged DPS.
                Perisai mecha melindungi seluruh tim.
                Ultimate: Menyembuhkan HP tim. ",
                'rarity' => "A",
                'tier' => "C",
                'weapon_sign_hi3_id' => 9,
                'weapon_alt1_hi3_id' => 35,
                'weapon_alt2_hi3_id' => 42,
                'stigmata_sign_id' => 95,
                'stigmata_alt_id' => 1,
                'image' => "yamabuki armour.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //92
            [
                'name' => "Valkyrie Blastmetal (Coralie 6626 Planck)",
                'type' => "PSY",
                'element' => "Fire",
                'role' => "Support",
                'detail' => "Baju perang Coralie 6626 Planck battlesui.
                Karakter Fire DMG tipe PSY yang dilindungi oleh Spesialisasi Cincin Astral: Rite of Oblivion.
                Menggunakan Rocket Hammer dalam pertempuran dan dapat memberikan buff DMG untuk tim. ",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 341,
                'weapon_alt1_hi3_id' => 343,
                'weapon_alt2_hi3_id' => 343,
                'stigmata_sign_id' => 170,
                'stigmata_alt_id' => 33,
                'image' => "Coralie 6626 Planck.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //93
            [
                'name' => "Valkyrie Boltstorm (Erdos Helia)",
                'type' => "MECH",
                'element' => "Lightning",
                'role' => "Sub-DPS",
                'detail' => "Erdős Helia battlesuit.
                Karakter Lightning DMG tipe MECH yang dilindungi oleh  Astral Ring Specialization: World Star.
                Menggunakan Rapid-Shot Crossbow dalam pertempuran dan dapat dengan cepat menembakkan baut untuk menyerang musuh sambil memberikan buff DMG untuk tim. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 337,
                'weapon_alt1_hi3_id' => 339,
                'weapon_alt2_hi3_id' => 340,
                'stigmata_sign_id' => 169,
                'stigmata_alt_id' => 33,
                'image' => "Erdos Helia.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //94
            [
                'name' => "Deepspace Anchor: First Light (Senadia)",
                'type' => "SD-Type",
                'element' => "Lightning",
                'role' => "DPS",
                'detail' => "Baju perang Senadina battlesuit
                Karakter DMG Petir tipe SD yang dilindungi oleh Astral Ring Specialization: World Star.
                Menggunakan Drive Core dalam pertempuran dan dapat menyerang musuh di udara dan di darat. ",
                'rarity' => "A",
                'tier' => "S",
                'weapon_sign_hi3_id' => 333,
                'weapon_alt1_hi3_id' => 334,
                'weapon_alt2_hi3_id' => 335,
                'stigmata_sign_id' => 167,
                'stigmata_alt_id' => 160,
                'image' => "Senadia.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //95
            [
                'name' => "Mad Pleasure: Shadowbringer (Thelema Nutriscu)",
                'type' => "MECH",
                'element' => "ICE",
                'role' => "DPS",
                'detail' => "Thelema Nutriscu battlesuit
                Dealer DMG Es tipe MECH yang dilindungi oleh Astral Ring Specialization: Wheel of Destiny.
                Memulihkan Kenikmatan Perjamuan melalui berbagai serangan. Dapat mengkonsumsi Banquet Enjoyments untuk mengeluarkan Moment of Indulgence, yang menghasilkan Ice DMG yang sangat besar. ",
                'rarity' => "S",
                'tier' => "S+",
                'weapon_sign_hi3_id' => 344,
                'weapon_alt1_hi3_id' => 345,
                'weapon_alt2_hi3_id' => 346,
                'stigmata_sign_id' => 168,
                'stigmata_alt_id' => 6,
                'image' => "TheleMa Nutriscu.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //96
            [
                'name' => "Blazing Hope",
                'type' => "BIO",
                'element' => "Physical",
                'role' => "DPS",
                'detail' => "Baju perang Asuka battlesuit.
                Melee Physical DMG dealer.
                Membangun energi untuk melakukan Charged ATK dan memberikan kerusakan besar.
                Ultimate meningkatkan kerusakan dan memungkinkan finisher. ",
                'rarity' => "A",
                'tier' => "A",
                'weapon_sign_hi3_id' => 211,
                'weapon_alt1_hi3_id' => 203,
                'weapon_alt2_hi3_id' => 208,
                'stigmata_sign_id' => 120,
                'stigmata_alt_id' => 9,
                'image' => "Blazing Hope.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Lone Destruction: Shadowchaser",
                'type' => "PSY",
                'element' => "Fire",
                'role' => "DPS",
                'detail' => "Karakter DMG Api tipe PSY yang dilindungi oleh Spesialisasi Astral Ring: Wheel of Destiny.
                Terus menerus menghasilkan sisa-sisa melalui Firepower Rotation untuk menekan musuh, dan menghabisi mereka dengan peluncur roket",
                'rarity' => "S",
                'tier' => "S",
                'weapon_sign_hi3_id' => 348,
                'weapon_alt1_hi3_id' => 347,
                'weapon_alt2_hi3_id' => 339,
                'stigmata_sign_id' => 171,
                'stigmata_alt_id' => 133,
                'image' => "Lone Destruction Shadowchaser.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
