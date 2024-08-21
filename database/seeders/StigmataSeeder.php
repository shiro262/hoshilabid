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

            //1
            [
                'name' => "Klassik Komponist set",
                'detail' =>
                "2-pieces effect Schicksalsinfonie
                Setelah mengeluarkan Ultimate, anggota tim berikutnya yang berpindah akan memperoleh 40% buff Melee Physical DMG (tidak ditumpuk) selama 10 detik. CD: 20 detik. \r\n
                3-pieces effect First Viennese School
                Setelah menggunakan Ultimate, anggota tim berikutnya yang beralih akan menerima 30% lebih sedikit Total DMG (efek tidak menumpuk) selama 10 detik dan memulihkan HP setara dengan 20% HP Maks tuan rumah. CD: 20 detik. \r\n
                Total Max Stats:
                HP: 1359 ATK: 164 DEF: 374 CRT: 14 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Klassik Komponist set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //2
            [
                'name' => "Last Mystic set",
                'detail' =>
                "2-pieces effect Final Prophecy
                ATK Dasar (termasuk Kombo dan Charged) berpeluang 15% menimbulkan 450% Ice DMG terhadap target dan membekukan target selama 3,5 detik. CD: 8 detik. \r\n
                3-pieces effect Death of a Dynasty
                Selama pertarungan, memperoleh 20% HP Maks dan 20% Pengurangan DMG Tidak Langsung. \r\n
                Total Max Stats:
                HP: 1158 ATK: 150 DEF: 331 CRT: 13 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Last Mystic set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //3
            [
                'name' => "Laws of Motion set",
                'detail' =>
                "2-pieces effect Spectral Jet
                Serangan Dasar/Kombo/Berisi memiliki 10% peluang untuk memperlambat, merusak, atau melemahkan musuh selama 10 detik, atau menimbulkan 3 Paralyze, Rime, Stun, or Ignite Trauma. CD: 2.0 detik. \r\n
                3-pieces effect Deadly Acceleration
                Setiap 1 detik, Serangan Dasar (termasuk Serangan Kombo dan Serangan Penuh) memperoleh 20% Total Pengganda DMG. Menumpuk hingga 5 kali. Menyerang akan mereset buff dan memulai CD 7 detik. \r\n
                Total Max Stats:
                HP: 1642 ATK: 138 DEF: 226 CRT: 16 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Laws of Motion set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //4
            [
                'name' => "Legendary Bladesmith set",
                'detail' =>
                "2-pieces effect Artisan Spirit
                Musuh yang berada di lapangan selama lebih dari 5 detik akan terkena 20% Move Slow dan Attack Slow selama 4 detik (durasi direset saat efek slow berakhir). Durasi direset jika musuh meninggalkan medan gaya selama 2 detik. \r\n
                3-pieces effect Enhanced Force Field
                Musuh yang berada di lapangan selama lebih dari 5 detik akan dibekukan selama 2 detik (durasi direset saat periode pembekuan berakhir). Durasi direset jika musuh meninggalkan medan gaya selama 2 detik. \r\n
                Total Max Stats:
                HP: 1737 ATK: 127 DEF: 226 CRT: 6 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Legendary Bladesmith set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //5
            [
                'name' => "Legendary Lady set",
                'detail' =>
                "2-pieces effect Wheel of Destiny
                Menerangi bintang hitam dan bintang putih. Bintang Hitam bersinar: Serangan dasar mempunyai peluang 20% untuk memperoleh 1.000% ATK Physical DMG kepada musuh non-Bos; CD: 5 detik. Bintang Putih bersinar: serangan kombo memperoleh 30% Crit Rate. \r\n
                3-pieces effect Twin Stars
                Saat diterapkan, setiap kali dua bintang berganti, karakter memperoleh 12% Total DMG Multiplier. Menumpuk hingga 3 kali. stacks dibersihkan setelah karakter keluar dari pertempuran. \r\n
                Total Max Stats:
                HP: 1737 ATK: 144 DEF: 225 CRT: 17 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Legendary Lady set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //6
            [
                'name' => "Leisurely Sipping Set",
                'detail' =>
                "2-pieces effect Dewy Reflection
                Dapatkan 6 stacks Looming Shadow saat karakter memasuki lapangan atau memasuki mode burst. Menghabiskan 1 stack Looming Shadow setiap kali Senjata Aktif, Serangan Berkekuatan, atau Serangan Kombo mengenai musuh untuk memulihkan 1,0 SP dan menimbulkan 20,0% lebih banyak Ice DMG selama 3,0 detik saat efek dipicu. CD: 1 detik. Memicunya lagi akan mengatur ulang durasinya. \r\n
                3-pieces effect Singing Under the Skies
                Semua musuh menerima 5,0% lebih banyak Ice DMG dari tuan rumah (tidak dapat ditumpuk). Menghabiskan lebih dari 100 SP sekaligus meningkatkan efek ini menjadi 15,0% selama 15 detik. Memicunya lagi akan mengatur ulang durasinya. \r\n
                Total Max Stats:
                HP: 1241 ATK: 179 DEF: 334 CRT: 21 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Leisurely Sipping Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //7
            [
                'name' => "Life Carver Set",
                'detail' =>
                "2-pieces effect Puppets' Encounter
                Total DMG meningkat sebesar 30,0%. Meningkatkan Fire DMG diri sebesar 40,0% dalam mode burst. \r\n
                3-pieces effect True Heart
                Saat serangan mendarat pada target, Fire DMG meningkat sebesar 3,0% selama 8 detik, hingga 5 stacks. Memicunya lagi akan mengatur ulang durasinya. Tingkatkan diri setelah memasuki mode burst dan dapatkan 15,0% bonus Total DMG selama 18 detik. Memicunya lagi akan mengatur ulang durasinya. \r\n
                Total Max Stats:
                HP: 1294 ATK: 175 DEF: 376 CRT: 13 SP: 0
                ",
                'source' => "
                Events
                Limited/Rotating Supplies",
                'image' => "Life Carver Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //8
            [
                'name' => "Lonely Hero set",
                'detail' =>
                "2-pieces effect Battle Rhythm
                Dalam interval 10 detik setelah menggunakan skill senjata aktif apa pun, skill aktif senjata berikutnya memperoleh 20% Total DMG Multiplier. DMG meningkatkan stacks hingga 5 kali. Menambahkan stacks akan mengatur ulang durasi efek. \r\n
                3-pieces effect Hero Mode
                Setelah menggunakan 6 weapon skills, masuk ke Mode Pahlawan yang berlangsung selama 20 detik (CD: 60 detik), memperoleh 70% Physical DMG, 25% Kecepatan Serangan dan Kecepatan Bergerak, serta kekebalan terhadap sebagian besar debuff. \r\n
                Total Max Stats:
                HP: 1407 ATK: 178 DEF: 300 CRT: 38 SP: 0
                ",
                'source' => "
                Events
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Lonely Hero set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //9
            [
                'name' => "Loner of Prague set",
                'detail' =>
                "2-pieces effect K's Processing
                ATK yang terisi secara langsung memicu efek stacks maksimal dari stigma dan memberikan buff Total DMG Multiplier sebesar 45% kepada tuan rumah selama 12 detik. CD: 20 detik. \r\n
                3-pieces effect Surreal Milieu
                Mendapatkan 35% Pengurangan Total DMG terhadap serangan yang diterima. Dalam waktu 12 detik setelah melepaskan Charged ATK, setiap serangan memiliki peluang 60% untuk memicu serangan bonus yang menghasilkan 15% ATK Physical DMG, memiliki Crit Rate 100% lebih tinggi, dan ditambahkan ke penghitung Combo Hit. Hanya bisa dipicu sebanyak 30 kali. CD: 20-an. \r\n
                Total Max Stats:
                HP: 1328 ATK: 173 DEF: 309 CRT: 18 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Loner of Prague set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //10
            [
                'name' => "Lord of Dierkens set",
                'detail' =>
                "2-pieces effect Lens Wizardry
                Tuan rumah mendapatkan 15,0% Total DMG. Saat melepaskan Ultimate, semua musuh di medan perang mendapatkan 15,0% lebih banyak Fire DMG dari tuan rumah selama 12 detik dan mengaktifkan paksa buff 1-pc dari set stigma ini; CD: 20 detik. \r\n
                3-pieces effect Animaculum
                Tuan rumah mendapatkan 2,0% Pengurangan DMG Total setiap kali dia membakar musuh; di-stack hingga 15 kali; efek bertahan hingga pertempuran berakhir. Bonus perlengkapan Durandal: Memicu otomatis bonus 2 poin saat memasuki medan perang. \r\n
                Total Max Stats:
                HP: 1400 ATK: 162 DEF: 398 CRT: 8 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Lord of Dierkens set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //11
            [
                'name' => "Lucky New Year set",
                'detail' =>
                "2-pieces effect Trailing Comet
                Ledakan kembang api menimbulkan 3 Ignite Trauma. Serangan terhadap musuh yang tersulut memberikan bonus 15% Fire DMG (tidak dapat ditumpuk). \r\n
                3-pieces effect Powderful
                Peluncur Kembang Api memberikan bonus 20% Fire DMG. Launcher juga menyebabkan ledakan yang kuat ketika menghilang, memberikan 300% ATK Fire DMG dan memberikan 3 Stun Trauma di area yang luas. \r\n
                Total Max Stats:
                HP: 1212 ATK: 131 DEF: 264 CRT: 18 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Lucky New Year set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //12
            [
                'name' => "Maidess of Quanta set",
                'detail' =>
                "2-pieces effect Planck Constant
                Ketika diserang dan ketika DMG yang diambil kurang dari hasil kali 15 x level Valkyrie, tuan rumah tidak akan terganggu (tetapi mengambil DMG seperti biasa). Ketika dilengkapi dengan Bronya, serangan jarak jauh mendapatkan 15% Pengganda DMG Total. \r\n
                3-pieces effect Quantum Entanglement
                Tuan rumah menyembuhkan 5% HP saat mengenai musuh; CD: 5.0 detik. Bonus perlengkapan Bronya: Tingkat regen SP meningkat 30%. \r\n
                Total Max Stats:
                HP: 1668 ATK: 138 DEF: 162 CRT: 8 SP: 0
                ",
                'source' => "
                Dorm Supply
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Maidess of Quanta set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //13
            [
                'name' => "Master of Color set",
                'detail' =>
                "2-pieces effect Coloring Master
                Serangan Dasar (termasuk Serangan Charge dan Serangan Kombo) mengolesi musuh dengan cat yang tersedia setiap 1 detik (smear berlangsung selama 10 detik). Cat berganti setiap 3 detik. Dua cat berbeda dapat dicampur untuk membentuk Warna Campuran untuk memicu efek khusus. Warna Campuran bertahan selama 4 detik, selama waktu tersebut tidak ada cat lain yang dapat diaplikasikan.
                Merah + Kuning = Oranye: Target menerima 25% lebih banyak DMG Fisik.
                Merah + Biru = Ungu: menimbulkan 120% ATK AOE Physical DMG.
                Kuning + Biru = Hijau: menyembuhkan tuan rumah secara instan sebesar 4% HP. \r\n
                3-pieces effect Paint Jar
                Sebotol kecil cat untuk menambah warna pada sesuatu. \r\n
                Total Max Stats:
                HP: 1327 ATK: 135 DEF: 209 CRT: 23 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Story Stages",
                'image' => "Master of Color set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //14
            [
                'name' => "Matter Delver set",
                'detail' =>
                "2-pieces effect Avogadro Constant
                Tuan rumah mendapatkan 30,0 SP awal dalam pertempuran, dan senjatanya yang aktif mengkonsumsi 15,0% lebih sedikit SP. \r\n
                3-pieces effect Avogadro's Law
                Tuan rumah mendapatkan 15,0% Total DMG. Senjatanya aktif memberikan tanda pada target (CD: 20 detik), yang meledak setelah 10 detik dan menghasilkan 400,0% ATK Physical DMG AOE besar. Tuan rumah juga memberikan 15,0% lebih banyak Total DMG terhadap musuh yang ditandai. \r\n
                Total Max Stats:
                HP: 1279 ATK: 166 DEF: 331 CRT: 26 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Story Stages",
                'image' => "Matter Delver set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //15
            [
                'name' => "Moon Dragon set",
                'detail' =>
                "2-pieces effect Creation of Honkai
                Meningkatkan Total DMG sebesar 20.0%. Dalam Herrscher Form, serangan memberikan Thunderblitz pada musuh selama 7 detik (tidak dapat ditumpuk tetapi dapat di-refresh). Musuh yang terkena Thunderblitz menerima 50,0% ATK bonus Lightning DMG untuk setiap serangan. CD: 1 detik. \r\n
                3-pieces effect Creation of Honkai
                Meningkatkan Lightning DMG  sebesar 20.0%. Pengguna menerima 15,0% lebih sedikit Total DMG. Musuh di Thunderblitz menerima 15,0% bonus Lightning DMG. \r\n
                Total Max Stats:
                HP: 1340 ATK: 167 DEF: 409 CRT: 8 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Moon Dragon set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //16
            [
                'name' => "Moonwatcher Set",
                'detail' =>
                "2-pieces effect Astronomer
                Total DMG meningkat sebesar 25,0%. Pengguna memberikan bonus 30.0% Lightning DMG dalam waktu 12.0 detik setelah entri. \r\n
                3-pieces effect Female Pioneer
                Skill senjata dan Ultimate memberikan bonus 25,0% Lightning DMG. Bonus perlengkapan Fischl: Melemparkan QTE selama Mitternacht meningkatkan Total DMG yang diberikan oleh anggota tim dan entitas yang dipanggil sebesar 45,0% selama 20,0 detik. Memicunya lagi akan mengatur ulang durasinya. \r\n
                Total Max Stats:
                HP: 1292 ATK: 179 DEF: 331 CRT: 16 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Moonwatcher Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //17
            [
                'name' => "MOTHs Days Set",
                'detail' =>
                "2-pieces effect Between the Bustle
                Menggunakan Ultimate meningkatkan Total DMG tim sebesar 15,0% selama 22 detik (memicunya lagi akan mengatur ulang durasinya). Bonus perlengkapan Terminal Aide 0017: Dengan b-pc dari set ini, mendaratkan Ultimate memberikan status Navigator, yang meningkatkan DMG Fisik tim sebesar 10,0% (eksklusif). \r\n
                3-pieces effect Nostalgic Thoughts
                Anggota tim memecahkan perisai 40,0% lebih mudah (eksklusif). Ketika Ultimate mengenai, semua musuh menerima 15,0% lebih banyak Physical DMG selama 20 detik (memicunya lagi akan mengatur ulang durasinya; eksklusif). \r\n
                Total Max Stats:
                HP: 1317 ATK: 175 DEF: 315 CRT: 16 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "MOTHs Days Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //18
            [
                'name' => "Musician set",
                'detail' =>
                "2-pieces effect Thunder Guide
                Selama 10 detik setelah keluar, tim mendapatkan bonus total DMG sebesar 10%, dan tuan rumah mendapatkan bonus total DMG sebesar 5% sebagai tambahan. Efek ini tidak dapat di-stack. \r\n
                3-pieces effect Happy Tour
                Dapatkan 30% Fire DMG dan 20% Max HP dalam pertempuran. \r\n
                Total Max Stats:
                HP: 1316 ATK: 160 DEF: 376 CRT: 21 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Musician set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //19
            [
                'name' => "Night Vigilante set",
                'detail' =>
                "2-pieces effect Blink
                Mendapatkan 1 charge untuk setiap 10 detik di lapangan. Ketika ada musuh di dekatnya, berikan 100% ATK Lightning DMG ke musuh di dekatnya secara acak dan setrum mereka selama 0,5 detik. Tuan rumah juga memasuki mode Destreza. Setiap penghindaran akan memicu efek Ultimate Evasion (Destreza berakhir setelah Ultimate Evasion). Lepaskan Lightning Shockwave saat masuk ke lapangan untuk pertama kalinya. Setelah Ultimate Evasion, Combo / Charged ATK mendapatkan 20% Total DMG Multiplier selama 5 detik. Memicu efeknya lagi akan mengatur ulang durasinya. \r\n
                3-pieces effect Z Chop
                Setelah Ultimate Evasion, serangan berikutnya melepaskan Z-slash (CD: 10 detik). Z-slash memberikan 300% ATK DMG Fisik kepada musuh dalam AOE kecil. Juga memberikan impair, menurunkan DEF musuh sebesar 50% selama 5 detik. \r\n
                Total Max Stats:
                HP: 1294 ATK: 188 DEF: 243 CRT: 19 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Night Vigilante set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //20
            [
                'name' => "Ninja Dancer set",
                'detail' =>
                "2-pieces effect Kenbu Stance
                Pengguna memasuki mode Kenbu saat mengenai musuh dengan Combo ATK, di mana Total DMG-nya meningkat 30,00% selama 7 detik. CD: 10 detik. \r\n
                3-pieces effect Indomitable Outlaw
                Tuan rumah mendapatkan 30,0% Pengurangan Total DMG dan Interrupt Immunity saat diserang. CD: 15 detik. Tuan rumah memulihkan 400 HP setiap 20 detik dengan HP di bawah 50%. \r\n
                Total Max Stats:
                HP: 1441 ATK: 182 DEF: 243 CRT: 7 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Ninja Dancer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //21
            [
                'name' => "Noble Stillness set",
                'detail' =>
                "2-pieces effect Life Leech
                15% peluang menyembuhkan 5% HP saat mengenai target. CD: 2 detik. Bonus perlengkapan baju perang tipe BIO: Mendapatkan 15% SP Maks dalam pertempuran. \r\n
                3-pieces effect ADV Force Field
                Memblokir serangan yang dapat diinterupsi 1 kali dan menjatuhkan musuh di udara. CD: 5 detik. \r\n
                Total Max Stats:
                HP: 1689 ATK: 137 DEF: 115 CRT: 20 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Noble Stillness set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //22
            [
                'name' => "Observer set",
                'detail' =>
                "2-pieces effect Earthquake
                Saat ada musuh di dekatnya, pancarkan gelombang seismik dengan radius 3 meter dari tuan rumah setiap 5 detik. Untuk setiap 3 gelombang seismik, 2 gelombang pertama akan merobohkan musuh non-bos dan gelombang ketiga akan membuat musuh non-bos pingsan selama 3 detik. \r\n
                3-pieces effect Planetary Orbits
                Ketika ada 3 musuh atau lebih di medan perang, semua sekutu mendapatkan 15% Physical DMG dan 25% DMG Crit. Efek ini tidak dapat di-stack. \r\n
                Total Max Stats:
                HP: 1304 ATK: 166 DEF: 280 CRT: 22 SP: 0
                ",
                'source' => "
                Foundry
                Events",
                'image' => "Observer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //23
            [
                'name' => "Painter set",
                'detail' =>
                "2-pieces effect Nymphéas
                Menerima Perisai Petir. Saat perisai aktif, serangan pengguna mendapatkan 30% Lightning DMG. Saat terkena musuh, perisai akan meniadakan Physical DMG langsung dari musuh dan menghilang setelah 0,3 detik. Perisai muncul kembali setelah 15 detik. \r\n
                3-pieces effect Soleil Levant
                Setelah memicu debuff Move Slow dari stigma (B) dari set ini, musuh dalam radius 3,0 meter dari target menderita 30% Move Slow selama 10 detik. Tuan rumah juga mendapatkan penyembuhan sebesar 8% HP. \r\n
                Total Max Stats:
                HP: 1440 ATK: 181 DEF: 243 CRT: 7 SP: 0
                ",
                'source' => "
                Dorm Supply
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Painter set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //24
            [
                'name' => "Paradoxical Philosophy Set",
                'detail' =>
                "2-pieces effect Infinitely Divisible Spacetime
                Meningkatkan Total DMG sebesar 35.0%. Lightning DMG dari Combo ATK memberikan Butterfly Mark yang bertahan selama 15 detik (memicunya lagi akan menyegarkan kembali durasinya). Musuh yang ditandai akan mengalami ledakan yang menghasilkan 100.0% ATK Lightning DMG setiap kali menerima 4 serangan dari tuan rumah (CD: 1.5 detik). \r\n
                3-pieces effect Forever Unreachable Finish
                Ledakan Butterfly Mark juga memulihkan 2 SP. Memicu Skill Ultimate Evasion meningkatkan Lighting DMG terhadap musuh dengan Butterfly Mark sebesar 60,0% selama 15 detik (memicu lagi akan menyegarkan kembali durasinya). \r\n
                Total Max Stats:
                HP: 1212 ATK: 180 DEF: 331 CRT: 24 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Paradoxical Philosophy Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //25
            [
                'name' => "Pen of Critic set",
                'detail' =>
                "2-pieces effect Foe of Industrialists
                Basic, Combo, dan Charged ATK memberikan 20,0% bonus Physical DMG dan tambahan 15,0% bonus Physical DMG terhadap musuh MECH. Melemparkan Ultimate meningkatkan Total DMG dari Basic, Combo, dan Charged ATK sebesar 20,0% selama 8 detik. Dapat di-refresh. \r\n
                3-pieces effect Social Truth
                Casting Ultimate mengurangi Total DMG yang diambil sebesar 30.0% dan meningkatkan Ignore Interrupt selama 8 detik. Saat dilengkapi oleh Olenyevas, pengisian stigmata individu dimulai dari 5 dan maksimal 8. Bonus pengisian awal dapat diperoleh setiap 10 menit sekali di Dunia Terbuka. \r\n
                Total Max Stats:
                HP: 1110 ATK: 192 DEF: 243 CRT: 37 SP: 0
                ",
                'source' => "
                Foundry
                Events
                Limited/Rotating Supplies",
                'image' => "Pen of Critic set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //26
            [
                'name' => "Phantom of the Fog set",
                'detail' =>
                "2-pieces effect Startling Victory
                Meningkatkan Total DMG sebesar 15,0%. Tim memberikan bonus 18,0% Elemental DMG terhadap musuh yang tersihir. \r\n
                3-pieces effect The Woman
                ATK yang terisi dan QTE meningkatkan Lightning DMG tim sebesar 10,0% saat terkena serangan selama 20 detik (proses selanjutnya mengatur ulang durasinya). Saat dilengkapi oleh Rita, Total DMG-nya meningkat sebesar 25.0%. \r\n
                Total Max Stats:
                HP: 1279 ATK: 166 DEF: 265 CRT: 34 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Phantom of the Fog set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //27
            [
                'name' => "Poem of Raven set",
                'detail' =>
                "2-pieces effect Twisted Fate
                Total DMG meningkat sebesar 15,0%. Musuh dalam kondisi Feathered mendapatkan bonus 30,0% Elemental DMG. Tim mendapatkan bonus 12,0% Total DMG. Efek skill tidak dapat ditumpuk. \r\n
                3-pieces effect Kráka
                ATK yang terisi akan meningkatkan Total DMG sebesar 20,0% saat terkena selama 15 detik. Memicunya lagi akan mengatur ulang durasinya. Dengan host dalam keadaan siaga, tim memberikan bonus 30.0% Fire DMG. Efek skill tidak dapat ditumpuk. \r\n
                Total Max Stats:
                HP: 1255 ATK: 169 DEF: 309 CRT: 29 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Poem of Raven set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //28
            [
                'name' => "Princess of Fate set",
                'detail' =>
                "2-pieces effect Eternal Struggle
                Untuk setiap musuh yang terbakar atau terbakar, dapatkan 10% Attack Speed. Tumpukan hingga 5 kali. \r\n
                3-pieces effect Sea Filler
                Saat memiliki target, semua musuh kecuali target memberikan #1% lebih sedikit DMG kepada pengguna. Dengan host dalam keadaan siaga, tim memberikan bonus 30.0% Fire DMG. Efek skill tidak dapat ditumpuk. \r\n
                Total Max Stats:
                HP: 1568 ATK: 129 DEF: 145 CRT: 13 SP: 0
                ",
                'source' => "
                Events
                Foundry",
                'image' => "Princess of Fate set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //29
            [
                'name' => "Pristine Elf set",
                'detail' =>
                "2-pieces effect Crystal Prayers
                Total DMG meningkat sebesar 25,0%. Saat terkena, ATK yang terisi membuat setiap serangan dalam 5 detik berikutnya menghasilkan 20,0% ATK dari Physical DMG (hanya dapat dipicu sekali setiap 0,3 detik pada setiap target). Host menerima 20,0% lebih sedikit Total DMG dari musuh dalam jarak 5 meter. \r\n
                3-pieces effect Blessed Realm
                Crit DMG dari serangan jarak jauh meningkat sebesar 30.0%. Casting Ultimate membuat serangan jarak jauh menghasilkan 20,0% ATK bonus Physical DMG (hanya dapat dipicu sekali setiap 0,3 detik pada setiap target) selama 10,0 detik (mengenai musuh dengan Charged ATK memperpanjang durasi sebesar 1 detik hingga 10 detik). Charged ATK memulihkan 200 HP saat terkena serangan. CD: 5 detik. \r\n
                Total Max Stats:
                HP: 1255 ATK: 169 DEF: 309 CRT: 28 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Pristine Elf set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //30
            [
                'name' => "Quantum Waltz set",
                'detail' =>
                "2-pieces effect 2nd Quantization
                Jika ada 2 efek stigmata yang aktif, dapatkan 35,0% Physical DMG. Ketika efek ini dipicu, durasi kedua efek stigmata diatur ulang dan diperpanjang hingga 14 detik. \r\n
                3-pieces effect Dirac Equation
                Jika ketiga efek stigmata aktif, ATK mode Ultimate/Burst juga memberikan Impair kepada musuh yang tidak terganggu saat terkena serangan, menurunkan DEF mereka sebesar 50,0% selama 3 detik. Ketika efek ini dipicu, durasi dari ketiga efek stigmata diatur ulang dan diperpanjang menjadi 18 detik. \r\n
                Total Max Stats:
                HP: 1267 ATK: 173 DEF: 331 CRT: 22 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Quantum Waltz set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //31
            [
                'name' => "Queen of Egypt set",
                'detail' =>
                "2-pieces effect Gun Kata
                Mendapatkan 25% Kecepatan Gerak. Bonus perlengkapan Kiana atau Kallen: Mendapatkan 20% HP Maks dalam pertempuran. \r\n
                3-pieces effect Speeding Bullet
                Musuh yang berada lebih jauh akan terkena serangan lebih keras. Serangan jarak jauh mendapatkan 5% Physical DMG untuk setiap meter jarak ke target. Tumpukan maksimum: 10. \r\n
                Total Max Stats:
                HP: 1656 ATK: 138 DEF: 195 CRT: 16 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Queen of Egypt set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //32
            [
                'name' => "Rebel's Blades set",
                'detail' =>
                "2-pieces effect Embers at Dawn
                Meningkatkan Total DMG sebesar 15%. Combo atau Charged ATK lebih lanjut meningkatkan Total DMG sebesar 15% selama 15 detik. Bisa di-refresh. \r\n
                3-pieces effect Born of Fire
                Memiliki bonus 10% Attack Speed dan mengambil 15% lebih sedikit Elemental DMG. \r\n
                ",
                'source' => "
                Events",
                'image' => "Rebel's Blades set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //33
            [
                'name' => "Rebel's Gun set",
                'detail' =>
                "2-pieces effect The Rebellious Hunter
                Setiap 6 serangan dari tuan rumah atau entitas yang dipanggilnya akan memperpanjang efek Hunter Mark selama 2 detik. Durasi maksimum Hunter Mark: 12s. Penghitung kombo akan di-reset saat Hunter Mark menghilang. Musuh yang ditandai Hunter Mark menerima 21,0% All Elemental DMG (tidak dapat ditumpuk). \r\n
                3-pieces effect Before the Gunshot
                Ultimate tuan rumah dan entitas yang dipanggilnya memberikan 25,0% lebih banyak Total DMG. Ketika ada entitas yang dipanggil tuan rumah di lapangan, tim memberikan 25,0% lebih banyak Ice DMG terhadap musuh yang ditandai Hunter. Efek ini tidak dapat di-stack. \r\n
                Total Max Stats:
                HP: 1231 ATK: 169 DEF: 387 CRT: 22 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Rebel's Gun set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //34
            [
                'name' => "Red Poet set",
                'detail' =>
                "2-pieces effect Shortened Reach
                Saat terkena serangan musuh, menerima 25% lebih sedikit DMG Fisik dan 70% lebih sedikit Physical DMG Tidak Langsung (seperti Pendarahan). \r\n
                3-pieces effect Sword Soul
                Dipicu ketika HP 5% atau kurang. Mendapatkan 80% Crit Rate dan Crit DMG serta kekebalan terhadap kematian selama 6 detik. CD: 60-an. \r\n
                Total Max Stats:
                HP: 1595 ATK: 139 DEF: 202 CRT: 15 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Red Poet set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //35
            [
                'name' => "Relatively Natural Curls set",
                'detail' =>
                "2-pieces effect Special Relativity
                Dapatkan 5% Total Pengali DMG untuk setiap meter jarak dari musuh. Tumpukan bonus hingga 5 kali. \r\n
                3-pieces effect General Relativity
                Dapatkan Pengurangan DMG Total ketika lebih dekat dengan musuh, hingga maksimal 40% Pengurangan DMG. \r\n
                Total Max Stats:
                HP: 1488 ATK: 127 DEF: 330 CRT: 25 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Relatively Natural Curls set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //36
            [
                'name' => "Renaissance set",
                'detail' =>
                "2-pieces effect Creation
                Serangan tuan rumah mendapatkan 15% multiplier DMG Total. Saat memasuki medan perang, lebih lanjut mendapatkan 15% Total DMG Multiplier selama 15 detik. CD: 30-detik. \r\n
                3-pieces effect Doomsday Trial
                Saat keluar, menyembuhkan diri sendiri sebesar 2,0% HP maksimal per detik selama 10 detik. Melepaskan Judgment Attack ke semua musuh di medan perang, memberikan 300% ATK DMG Fisik, dan tambahan 300% ATK DMG Fisik ke musuh dengan kurang dari 10% HP. CD: 30 detik. \r\n
                Total Max Stats:
                HP: 1399 ATK: 150 DEF: 330 CRT: 25 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Renaissance set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //37
            [
                'name' => "Ruler of Sky set",
                'detail' =>
                "2-pieces effect Meteor Impact
                Dapatkan 55% Crit DMG. \r\n
                3-pieces effect Heavenly Verdict
                Serangan kritis menandai musuh non-Boss untuk Penghakiman. Musuh-musuh ini kemudian mengambil 15% ATK dari Physical DMG per detik selama 30 detik. CD: 5 detik. Untuk setiap musuh yang ditandai untuk Penghakiman, dapatkan 6% Crit Rate. Stacks up hingga 5 kali. \r\n
                Total Max Stats:
                HP: 1276 ATK: 168 DEF: 227 CRT: 26 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Ruler of Sky set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //38
            [
                'name' => "Sage's Mentor set",
                'detail' =>
                "2-pieces effect Recommendation
                Meningkatkan total DMG sebesar 30,0%. Censured State berlangsung 4 detik lebih lama. \r\n
                3-pieces effect Reclusive Guide
                Aktivasi Ultimate meningkatkan Total DMG yang diberikan oleh tuan rumah dan rekan setimnya di lapangan sebesar 20,0% selama 18 detik (efek tidak dapat ditumpuk). Saat dilengkapi dengan Starlit Astrologos, dia juga mendapatkan 40,0% Crit DMG. \r\n
                Total Max Stats:
                HP: 1279 ATK: 166 DEF: 265 CRT: 34 SP: 0
                ",
                'source' => "
                Foundry
                Events
                Limited/Rotating Supplies",
                'image' => "Sage's Mentor set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //39
            [
                'name' => "Sanada Maru set",
                'detail' =>
                "2-pieces effect Shadow Dancer
                Ketika satu serangan yang diterima menghasilkan lebih dari 20% HP dalam DMG, abaikan DMG yang dihasilkan oleh serangan tersebut. CD: 25 detik. \r\n
                3-pieces effect Ten Braves
                Buff yang diberikan oleh setiap stigmata dari set stigmata mendapatkan bonus 15%. Bonus perlengkapan Mei atau Yae Sakura: Mendapatkan 20% HP Maks dalam pertempuran. \r\n
                Total Max Stats:
                HP: 999 ATK: 188 DEF: 323 CRT: 33 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Sanada Maru set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //40
            [
                'name' => "Savage Halberd set",
                'detail' =>
                "2-pieces effect Imaginary Space
                Menerima Charge saat menjadi tidak terlihat. Saat tembus pandang berakhir, memberikan 200% ATK Physical DMG ke semua musuh. Musuh yang terkena ATK Dasar berikutnya (termasuk ATK yang diisi dan ATK Kombo) dan selama periode singkat setelahnya akan menjadi tidak bisa bergerak selama 3 detik. \r\n
                3-pieces effect Void Walk
                Saat tidak terlihat, tuan rumah menyembuhkan 2% HP dan mendapatkan 2% SP setiap 0,9 detik. \r\n
                Total Max Stats:
                HP: 1231 ATK: 172 DEF: 244 CRT: 28 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Savage Halberd set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //41
            [
                'name' => "Schicksal Mentor set",
                'detail' =>
                "2-pieces effect Senior
                Saat terkena, Charged ATK meningkatkan Kecepatan Gerak sebesar 40,0% dan Fire DMG sebesar 30,0% selama 10 detik. Memicunya lagi akan mengatur ulang durasinya. Bonus perlengkapan Rita: 20.0% bonus Total DMG. \r\n
                3-pieces effect Legacy
                ATK yang dibebankan memberikan 30,0% bonus Total DMG. Bonus perlengkapan Rita: Transaksi ATK yang dibebankan 50,0% bonus Fire DMG. \r\n
                Total Max Stats:
                HP: 1267 ATK: 179 DEF: 354 CRT: 16 SP: 0
                ",
                'source' => "
                Events
                Limited/Rotating Supplies",
                'image' => "Schicksal Mentor set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //42
            [
                'name' => "Schicksal Overseer set",
                'detail' =>
                "2-pieces effect Spear of Punishment
                Setiap serangan ATK Dasar tuan rumah memberikan 1 tumpukan Charge (CD: 0,8 detik). Setelah mendapatkan 3 tumpukan Charge, serangan bermuatan berikutnya yang mengenai musuh akan menghasilkan Bidang Hukuman (entitas yang dipanggil) dengan radius 3 meter yang berlangsung selama 4,0 detik. Musuh yang berada di dalam bidang tersebut menjadi konduktif dan menerima 40% lebih banyak Lightning DMG. Efek ini tidak dapat ditumpuk. \r\n
                3-pieces effect Spear of Sky
                Mengisi daya sekali setiap 5 detik. Serangan berikutnya yang terisi akan menambahkan Sky Brand ke target. Sky Brand meledak setelah penundaan 0,5 detik, memberikan 80% ATK Lightning DMG ke musuh di dekatnya. \r\n
                Total Max Stats:
                HP: 1400 ATK: 169 DEF: 261 CRT: 20 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Schicksal Overseer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //43
            [
                'name' => "Sea of Quanta set",
                'detail' =>
                "2-pieces effect Particle Form
                Memperoleh 30% Kecepatan Pindah. Teleportasi ke area terdekat secara acak ketika terkena musuh. CD: 10.0 detik. \r\n
                3-pieces effect Honkai Overload
                Untuk periode 3 detik setelah menggunakan Ultimate atau skill senjata dengan kemampuan Direct DMG, berdayakan Skill DMG berdasarkan persentase SP yang tersisa, dapatkan 15% Total Pengali DMG untuk setiap 20% SP yang tersisa. \r\n
                Total Max Stats:
                HP: 1656 ATK: 137 DEF: 196 CRT: 15 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Sea of Quanta set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //44
            [
                'name' => "Shattered Swords set",
                'detail' =>
                "2-pieces effect Blade Mantra
                Dalam bentuk Herrscher, tim memberikan bonus 30,0% Crit DMG (tidak dapat ditumpuk) dan serangan tuan rumah menandai musuh. Tanda tersebut meledak pada 15 tumpukan, memberikan 300,0% ATK DMG Fisik kepada musuh di dekatnya dan menghapus tanda pada semua musuh. CD: 5 detik. \r\n
                3-pieces effect Blade Sanction
                Tim mendapatkan 10.0% Crit Rate selama 12 detik saat masuk. Ketika tuan rumah dalam bentuk Herrscher dan mengenai musuh, tim mendapatkan 3,5% Total DMG selama 12 detik (CD: 0,4 detik; maksimal 10 tumpukan; jika dilengkapi oleh lebih dari 1 Valkyrie, hanya satu bidak yang akan berpengaruh). Memicunya lagi akan mengatur ulang durasinya. \r\n
                Total Max Stats:
                HP: 1182 ATK: 169 DEF: 287 CRT: 39 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Shattered Swords set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //45
            [
                'name' => "Sky Mender set",
                'detail' =>
                "2-pieces effect Aspect of Creation
                Unit yang dipanggil oleh pengguna mendapatkan 60% Total DMG multiplier. \r\n
                3-pieces effect Circle of Life
                Untuk setiap unit yang dipanggil (termasuk teman yang mendukung), dapatkan 20% Pengganda DMG Total. Tumpukan hingga 5 kali. \r\n
                Total Max Stats:
                HP: 1605 ATK: 138 DEF: 312 CRT: 9 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Sky Mender set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //46
            [
                'name' => "Space Explorer set",
                'detail' =>
                "2-pieces effect Observation
                Saat menyerang musuh yang melambat, tuan rumah mendapatkan buff 15% Attack Speed selama 4 detik. Memicu ini lagi akan mengatur ulang durasinya. \r\n
                3-pieces effect Absolute Zero
                Mendapatkan 30% Ice DMG. Serangan kombo/charged selanjutnya mendapatkan 10% Pengganda DMG Total. \r\n
                Total Max Stats:
                HP: 1171 ATK: 156 DEF: 243 CRT: 18 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Space Explorer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //47
            [
                'name' => "Stone Sentinel Maze set",
                'detail' =>
                "2-pieces effect Stalwart Peak
                Saat diserang oleh musuh, tuan rumah mendapatkan level Ignore Interrupt selama 4 detik. CD: 10 detik. Bonus perlengkapan Kiana atau Kallen: Mendapatkan 30% HP Maks dalam pertempuran. \r\n
                3-pieces effect Eight Formations
                Ketika diserang oleh musuh, ada 20% peluang untuk memukul mundur musuh dalam radius 3 meter. CD: 6 detik. \r\n
                Total Max Stats:
                HP: 1656 ATK: 138 DEF: 195 CRT: 14 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Stone Sentinel Maze set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //48
            [
                'name' => "Summer Day set",
                'detail' =>
                "2-pieces effect Flash Freeze
                Memperbesar AOE dari ledakan balon air sebesar 2 meter. Musuh yang berada di dalam AOE ledakan akan dibekukan selama 1,5 detik. \r\n
                3-pieces effect Concentrated Water Balloon
                Balon air yang meledak memberikan 200% lebih banyak Es DMG. Memperpendek CD sebanyak 2 detik. \r\n
                Total Max Stats:
                HP: 1330 ATK: 143 DEF: 288 CRT: 17 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Summer Day set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //49
            [
                'name' => "Systema Naturae set",
                'detail' =>
                "2-pieces effect Binomial Nomenclature
                Saat host memanggil entitas, dia dan entitas yang dipanggil ditingkatkan dan Lightning DMG meningkat sebesar 60,0% selama 15 detik. Memicunya lagi akan mengatur ulang durasinya. Kehadiran musuh dalam jarak 5 meter meningkatkan Kecepatan Gerak tuan rumah sebesar 25%. \r\n
                3-pieces effect Taxonomy
                ATK jarak jauh memberikan bonus 40,0% Total DMG. Untuk setiap entitas yang dipanggil, ELF, atau Support Valkyrie yang hadir, mereka dan tuan rumah akan mendapatkan bonus 6,0% Total DMG (maksimal 5 tumpukan). \r\n
                Total Max Stats:
                HP: 1212 ATK: 180 DEF: 331 CRT: 24 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Systema Naturae set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //50
            [
                'name' => "Tenebrosi set",
                'detail' =>
                "2-pieces effect Naturalism
                Untuk setiap serangan yang diberikan oleh entitas yang dipanggil oleh tuan rumah (CD: 2 detik), tim mendapatkan 5% Elemental DMG (efek unik). Tumpukan hingga 4 kali. Pada 4 tumpukan, masuk ke Natural State selama 6 detik (efek tidak lagi ditumpuk pada kondisi ini). Natural State: Mendapatkan 20% Elemental DMG lagi. Semua buff akan hilang saat Natural State berakhir. \r\n
                3-pieces effect Chairoscuro
                Untuk setiap entitas yang dipanggil yang hadir, tuan rumah mendapatkan Pengurangan Total DMG sebesar 15%. CD: 10 detik. Tumpukan hingga 3 kali. Setiap serangan yang diterima menghilangkan 1 Stack. \r\n
                Total Max Stats:
                HP: 1340 ATK: 143 DEF: 464 CRT: 20 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Tenebrosi set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //51
            [
                'name' => "Theory of Evolution set",
                'detail' =>
                "2-pieces effect Origin of Shields
                Mendapatkan perisai saat masuk. Perisai menghilang saat menerima serangan musuh dan memberikan kelumpuhan selama 3 detik pada musuh di dekatnya. Perisai muncul lagi setelah 10 detik. Saat perisai aktif, karakter mendapatkan 20% Lightning DMG. \r\n
                3-pieces effect Wings of Life
                Mendapatkan 20% Lightning DMG dan 20% Move Speed yang lebih cepat. Perisai Asal Perisai menghilang setelah menerima 2 serangan. \r\n
                Total Max Stats:
                HP: 1255 ATK: 135 DEF: 243 CRT: 24 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Theory of Evolution set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //52
            [
                'name' => "Traitor Wolf set",
                'detail' =>
                "2-pieces effect Overclock
                Setelah serangan bermuatan menggunakan peluncur meriam atau rudal, serangan bermuatan berikutnya yang dilakukan setelah selang waktu lebih dari 1 tetapi kurang dari 4 detik akan mendapatkan Pengganda DMG Total sebesar 15%. Bonus DMG ini ditumpuk hingga 3 kali. Menambahkan tumpukan akan mengatur ulang durasinya. \r\n
                3-pieces effect Lone Wolf
                Bonus perlengkapan Bronya: Mendapatkan 60% Crit DMG. \r\n
                Total Max Stats:
                HP: 1254 ATK: 173 DEF: 209 CRT: 34 SP: 0
                ",
                'source' => "
                Exchange House
                Dorm Supply",
                'image' => "Traitor Wolf set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //53
            [
                'name' => "Transcend Renaissance set",
                'detail' =>
                "2-pieces effect Cool Reason
                Memperpendek CD efek yang dipicu oleh Ultimate Evasions (atau Perfect DEF) sebesar 35%. Bonus perlengkapan baju perang tipe PSY: Mendapatkan 15% SP Maks dalam pertempuran. \r\n
                3-pieces effect Anion Generator
                Mengurangi biaya SP skill aktif sebesar 20%. \r\n
                Total Max Stats:
                HP: 1587 ATK: 135 DEF: 351 CRT: 24 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Transcend Renaissance set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //54
            [
                'name' => "Traveling Skipper set",
                'detail' =>
                "2-pieces effect Shakespeare's Globe
                Meningkatkan Fire DMG sebesar 20.0%. Mendaratkan Ultimate dalam waktu 4 detik setelah cast akan meningkatkan Alignment sebesar 1 (total 4 level: Jove/Venus/Luna/Sol). Alignment turun 1 setiap 10 detik dan dapat disegarkan pada level 4. Alignment 4 (Sol) membuat musuh mendapatkan bonus 20.0% Fire DMG dari host (efek independen). \r\n
                3-pieces effect King's Men
                Meningkatkan Total DMG Ultimate sebesar 30,0%. Meningkatkan atau menyegarkan Alignment memulihkan 30,0 HP. Bonus perlengkapan Durandal: Ultimate memberikan bonus Total DMG sebesar 15,0%. Mendaratkan Lemparan atau QTE meningkatkan Alignment sebesar 1. \r\n
                Total Max Stats:
                HP: 1376 ATK: 177 DEF: 331 CRT: 8 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Traveling Skipper set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //55
            [
                'name' => "Tsar of Russia set",
                'detail' =>
                "2-pieces effect MECH Power
                Mendapatkan 15% CRT dalam pertempuran. Bonus perlengkapan baju perang tipe MECH: Mendapatkan 15% SP Maks dalam pertempuran. \r\n
                3-pieces effect Combo Burst
                Ketika Combo Hit Count melebihi 70, dapatkan 120% Crit DMG. \r\n
                Total Max Stats:
                HP: 1622 ATK: 138 DEF: 274 CRT: 11 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Tsar of Russia set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //56
            [
                'name' => "Valentine Couples set",
                'detail' =>
                "2-pieces effect Flowery Proposal
                Menghasilkan AOE Proposal Berbunga-bunga saat memasuki pertempuran. Durasi: 6 detik. CD: 10 detik. Dalam Flowery Proposal AOE, ATK Dasar tuan rumah (termasuk Combo dan Charged ATK) mendapatkan 7% Pengganda DMG Total per detik. Tumpukan hingga 4 kali (tidak menumpuk dengan yang lain). Semua tumpukan akan dihapus saat meninggalkan AOE. \r\n
                3-pieces effect Romantic Bliss
                Rekan satu tim di Flowery Proposal AOE memulihkan 20 HP dan 1 SP per detik (tidak ditumpuk dengan yang lain). \r\n
                Total Max Stats:
                HP: 1386 ATK: 123 DEF: 238 CRT: 10 SP: 0
                ",
                'source' => "
                Events
                Limited/Rotating Supplies",
                'image' => "Valentine Couples set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //57
            [
                'name' => "Vampire Prince set",
                'detail' =>
                "2-pieces effect Kindred
                Setelah mendapatkan crit hit, panggil 1 Kindred yang bertahan selama 10 detik, dan setel ulang durasi semua Kindred yang ada. Kindred memberikan 50% ATK DMG Fisik (DMG secara langsung didasarkan pada tuan rumah dan mendapatkan keuntungan dari bonus stat tuan rumah). Hingga 3 Kindred dapat ada pada saat yang sama, masing-masing meningkatkan Crit DMG tuan rumah sebesar 15%. \r\n
                3-pieces effect Resurrection
                Ketika HP di bawah 1%, aktifkan Revival Mode yang berlangsung selama 5 detik, di mana tuan rumah tidak dapat menyerang atau bergerak tetapi tidak terkalahkan dan menyembuhkan 20% HP per detik. Ketika Revival Mode berakhir, jatuhkan musuh di sekitarnya dan berdarah selama 5 detik, memberikan 20% ATK DMG Fisik per detik. CD: 300-an. \r\n
                Total Max Stats:
                HP: 1304 ATK: 128 DEF: 385 CRT: 35 SP: 0
                ",
                'source' => "
                Dorm Supply
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Vampire Prince set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //58
            [
                'name' => "Voice of Darkness set",
                'detail' =>
                "2-pieces effect Sculptor of Terror
                Mendapatkan 20,0% Total Pengali DMG. Total DMG dari ATK yang terisi dan serangan lanjutan yang dilepaskan dalam 1 detik berikutnya meningkat sebesar 40,0%. Bonus perlengkapan Seele: Total DMG meningkat sebesar 40,0%. CD: 3 detik. \r\n
                3-pieces effect Weaver of Death
                Setelah diserang, abaikan kerusakan dari serangan tersebut dan dapatkan Ignore Interrupt selama 3 detik. CD: 20.0 detik. Selama CD, tuan rumah memulihkan 650 HP setelah memukul musuh dengan Charged ATK (berlaku sekali selama setiap CD). Bonus perlengkapan Seele: Total DMG meningkat sebesar 25.0%. \r\n
                Total Max Stats:
                HP: 1231 ATK: 173 DEF: 287 CRT: 32 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Voice of Darkness set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //59
            [
                'name' => "Wings of Reason",
                'detail' =>
                "2-pieces effect Dearmament
                Mendapatkan 1 stack [Falconwings] saat melakukan Ultimate atau Combo ATK dengan perlengkapan ini. CD: 3 detik, setiap kondisi pemicu CD dihitung secara terpisah. Tumpukan maksimum [Falconwings] meningkatkan Total DMG sebesar 20.0%. Digunakan dengan QTE, Ketika QTE dan [Falconwings] bergabung, jika ada 3 tumpukan [Falconwings], meningkatkan Ice DMG sebesar 10,0% untuk setiap tumpukan yang diberikan oleh B-piece dari set ini. \r\n
                3-pieces effect Special Plot
                ATK dasar (termasuk Charged dan Combo) memberikan tambahan 25,0% Ice DMG pada saat terkena. CD 0,3 detik per target. Falconwings yang ditumpuk secara maksimal memulihkan 30,0 HP per detik. \r\n
                Total Max Stats:
                HP: 1266 ATK: 179 DEF: 353 CRT: 16 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Wings of Reason.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //60
            [
                'name' => "Yesterday's Longing Set",
                'detail' =>
                "2-pieces effect Momentary Luster
                meningkatkan Total DMG sebesar 20,0%. Dalam waktu 12 detik setelah memasuki pertempuran, total Elemental DMG yang diterima oleh semua musuh di lapangan meningkat 15,0% (eksklusif). \r\n
                3-pieces effect Meaningful Hope
                QTE dan senjata aktif meningkatkan Ice DMG sebesar 30,0%. Menangani DMG dengan Ultimate memicu status Dance with Me dan meningkatkan Ice DMG sebesar 35,0%. Dalam waktu 12 detik setelah memasuki pertempuran, Total DMG yang diterima oleh semua musuh di lapangan meningkat 6,0%. Memicunya lagi akan mengatur ulang durasinya (eksklusif). Setiap 500 HP maksimal di atas 6000 HP maksimal akan meningkatkan Total DMG tim sebesar 2,5%, hingga 12,5%. Bonus perlengkapan Sugary Starburst: T, M, B, dan bonus set 3 buah akan dimaksimalkan. \r\n
                Total Max Stats:
                HP: 1241 ATK: 178 DEF: 333 CRT: 20 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Yesterday's Longing Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //61
            [
                'name' => "Knight Templar set",
                'detail' =>
                "2-pieces effect Cannon Master
                Mendapatkan 15% Ranged Physical DMG. Bonus perlengkapan Bronya: Mendapatkan 5% HP Maks dalam pertempuran. \r\n
                3-pieces effect DEF Enhance
                Mendapatkan 15% DEF dalam pertempuran. \r\n
                Total Max Stats:
                HP: 714 ATK: 60 DEF: 114 CRT: 2 SP: 0
                ",
                'source' => "
                Story Stages",
                'image' => "Knight Templar set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //62
            [
                'name' => "London Holiday set",
                'detail' =>
                "2-pieces effect Holiday Surprise
                Ultimate dan Burst ATK memberikan 20,0% lebih banyak Total DMG. \r\n
                3-pieces effect Stoic Warrior
                Pengguna mendapatkan 15,0% Pengurangan DMG Total. Bonus perlengkapan Rita atau Durandal: Mendapatkan Pengurangan DMG Total 15,0% lagi. \r\n
                Total Max Stats:
                HP: 812 ATK: 59 DEF: 220 CRT: 7 SP: 0
                ",
                'source' => "
                Events",
                'image' => "London Holiday set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //63
            [
                'name' => "Lost Nun set",
                'detail' =>
                "2-pieces effect Space Enchantment
                Sekutu menerima 20% lebih sedikit DMG dari serangan frontal. Saat dilengkapi dengan Theresa, dapatkan 20% SP maksimal. \r\n
                3-pieces effect Blade of Faith
                Basic ATK (termasuk ATK yang diisi dan ATK kombo) dari sekutu mendapatkan 15% Physical DMG. Efek tidak bertumpuk. Bonus perlengkapan Theresa: ATK Dasar (termasuk ATK yang diisi dan ATK Kombo) selanjutnya mendapatkan 15% Physical DMG. \r\n
                Total Max Stats:
                HP: 1052 ATK: 85 DEF: 206 CRT: 10 SP: 0
                ",
                'source' => "
                Events
                Foundry",
                'image' => "Lost Nun set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //64
            [
                'name' => "Niou Dachi set",
                'detail' =>
                "2-pieces effect Space Enchantment
                Serangan dari arah depan yang diterima oleh tuan rumah menghasilkan 80% lebih sedikit DMG Fisik. Serangan dari arah lain memberikan 40% lebih banyak DMG Fisik. Pengurangan DMG serangan frontal tidak berlaku selama 20 detik setelah menghindar. \r\n
                3-pieces effect Blade of Faith
                Saat memasuki pertempuran, dapatkan Might of the Vidyaraja, memperoleh 40% Physical DMG dan 60% DEF selama 20 detik. CD: 60-detik. \r\n
                Total Max Stats:
                HP: 1158 ATK: 87 DEF: 120 CRT: 9 SP: 0
                ",
                'source' => "
                Events
                Foundry",
                'image' => "Niou Dachi set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //65
            [
                'name' => "Original Lolita set",
                'detail' =>
                "2-pieces effect Breach Lockon
                Dapatkan 10% Total Multiplier DMG terhadap musuh dengan Elite Shield yang rusak. \r\n
                3-pieces effect ADV Speed Boost
                Memperoleh 10% Kecepatan Bergerak. \r\n
                Total Max Stats:
                HP: 975 ATK: 81 DEF: 111 CRT: 9 SP: 0
                ",
                'source' => "
                Events
                Foundry",
                'image' => "Original Lolita set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //66
            [
                'name' => "Polar Conquest set",
                'detail' =>
                "2-pieces effect Snowy Ward
                Setelah menggunakan skill aktif senjata, tim mengambil 15% lebih sedikit Physical DMG selama 8 detik. CD: 20 detik. Efek tidak dapat di-stack. \r\n
                3-pieces effect Explorer's Glory
                Tim mendapatkan 10% Fire, Lightning, dan Ice DMG. Efek tidak dapat di-stack. \r\n
                Total Max Stats:
                HP: 721 ATK: 78 DEF: 261 CRT: 14 SP: 0
                ",
                'source' => "
                Dorm Supply
                Foundry
                Limited/Rotating Supplies",
                'image' => "Polar Conquest set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //67
            [
                'name' => "Santa Claus set",
                'detail' =>
                "2-pieces effect Bountiful Gift
                ATK yang di-charge mendapatkan 15% Physical DMG. \r\n
                3-pieces effect Mecha Party
                Saat menyerang musuh tipe MECH, dapatkan 10% Physical DMG jarak dekat. Bonus perlengkapan Himeko: Mendapatkan 10% Physical DMG. \r\n
                Total Max Stats:
                HP: 975 ATK: 82 DEF: 216 CRT: 11 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Santa Claus set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //68
            [
                'name' => "Schicksal Order set",
                'detail' =>
                "2-pieces effect Bountiful Gift
                Mendapatkan 23% Crit DMG. Bonus perlengkapan Mei atau Yae Sakura: Mendapatkan 5% HP Maks dalam pertempuran. \r\n
                3-pieces effect Scavenger
                Perluas jangkauan pick-up hingga 150%. \r\n
                Total Max Stats:
                HP: 705 ATK: 60 DEF: 150 CRT: 8 SP: 0
                ",
                'source' => "
                Story Stages",
                'image' => "Schicksal Order set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //69
            [
                'name' => "Scourge of God set",
                'detail' =>
                "2-pieces effect Bountiful Gift
                Mendapatkan 30% Crit DMG. Bonus perlengkapan baju perang tipe MECH: Mendapatkan 10% SP Maks dalam pertempuran. \r\n
                3-pieces effect Scavenger
                Dapatkan 40% CRT dalam pertempuran. \r\n
                Total Max Stats:
                HP: 1014 ATK: 88 DEF: 225 CRT: 3 SP: 0
                ",
                'source' => "
                Foundry
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Scourge of God set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //70
            [
                'name' => "Sengoku Hime set",
                'detail' =>
                "2-pieces effect Flame Wreath
                Saat keluar, lepaskan Flame Blossom radius 4 meter yang memberikan 200% ATK Fire DMG ke musuh di dekatnya. CD: 30-an. Bonus perlengkapan Kiana atau Kallen: Melepaskan 2 Flame Blossoms. \r\n
                3-pieces effect Summer Wave
                Radius Flame Wreath diperluas sebesar 2 meter dan menghasilkan 200% ATK Fire DMG. Setiap Flame Wreath membakar musuh selama 5 detik, menghasilkan 30% ATK Fire DMG setiap 0,5 detik. \r\n
                Total Max Stats:
                HP: 1023 ATK: 88 DEF: 129 CRT: 9 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Sengoku Hime set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //71
            [
                'name' => "Sengoku Hime set",
                'detail' =>
                "2-pieces effect Shield Lockon
                Saat keluar, lepaskan Flame Blossom radius 4 meter yang memberikan 200% ATK Fire DMG ke musuh di dekatnya. CD: 30-an. Bonus perlengkapan Kiana atau Kallen: Melepaskan 2 Flame Blossoms. \r\n
                3-pieces effect Debuff Resistance
                Radius Flame Wreath diperluas sebesar 2 meter dan menghasilkan 200% ATK Fire DMG. Setiap Flame Wreath membakar musuh selama 5 detik, menghasilkan 30% ATK Fire DMG setiap 0,5 detik. \r\n
                Total Max Stats:
                HP: 1032 ATK: 87 DEF: 171 CRT: 12 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Sengoku Hime set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //72
            [
                'name' => "Sine Twin Tails set",
                'detail' =>
                "2-pieces effect Breach Lockon
                Dapatkan 15% Total Pengali DMG terhadap musuh dengan Elite Shield yang rusak. \r\n
                3-pieces effect EM Induction
                Mendapatkan 30% Lightning DMG. \r\n
                Total Max Stats:
                HP: 1071 ATK: 87 DEF: 69 CRT: 6 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Sine Twin Tails set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //73
            [
                'name' => "Solar Prominence set",
                'detail' =>
                "2-pieces effect Carol of Fortune
                Ambil 15% lebih sedikit Physical DMG. \r\n
                3-pieces effect Seven Tones
                Dapatkan 15% Total Multiplier DMG.  \r\n
                Total Max Stats:
                HP: 997 ATK: 86 DEF: 198 CRT: 10 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Limited/Rotating Supplies",
                'image' => "Solar Prominence set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //74
            [
                'name' => "Summer Surfer set",
                'detail' =>
                "2-pieces effect Boom Volleyball
                Saat serangan jarak jauh mengenai, berikan 200% ATK dari Physical DMG dalam AOE 3,5 meter di sekitar musuh. CD: 5 detik. \r\n
                3-pieces effect Overclock
                Mendapatkan 20% Attack Speed.  \r\n
                Total Max Stats:
                HP: 773 ATK: 85 DEF: 172 CRT: 10 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Summer Surfer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //75
            [
                'name' => "Swordsman set",
                'detail' =>
                "2-pieces effect Swordsman
                Mendapatkan 10% DMG Fisik Jarak Dekat. \r\n
                3-pieces effect HP Boost
                Mendapatkan 8% HP maksimal dalam pertempuran.  \r\n
                Total Max Stats:
                HP: 469 ATK: 38 DEF: 11 CRT: 2 SP: 0
                ",
                'source' => "
                Story Stages",
                'image' => "Swordsman set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //76
            [
                'name' => "Teutonic Order set",
                'detail' =>
                "2-pieces effect Swordsman
                Mendapatkan 15% Physical DMG jarak dekat. Bonus perlengkapan Kiana atau Kallen: Mendapatkan 5% HP Maks dalam pertempuran. \r\n
                3-pieces effect HP Boost
                Mendapatkan 15% Kecepatan Pindah.  \r\n
                Total Max Stats:
                HP: 744 ATK: 60 DEF: 15 CRT: 4 SP: 0
                ",
                'source' => "
                Story Stages",
                'image' => "Teutonic Order set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //77
            [
                'name' => "Vampire Countess set",
                'detail' =>
                "2-pieces effect BIO Master
                Bonus perlengkapan BIO: Mendapatkan 10% SP Max. \r\n
                3-pieces effect Feedback
                Tuan rumah mendapatkan 15% Kecepatan ATK lebih cepat. Serangan memiliki peluang 10% untuk menyembuhkan 3% HP. CD: 2 detik..  \r\n
                Total Max Stats:
                HP: 1053 ATK: 87 DEF: 120 CRT: 9 SP: 0
                ",
                'source' => "
                Foundry
                Story Stages
                Limited/Rotating Supplies ",
                'image' => "Vampire Countess set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //78
            [
                'name' => "Winter Symphony set",
                'detail' =>
                "2-pieces effect Pateticheskaya
                Setelah mengeluarkan Ultimate, anggota tim berikutnya yang masuk akan mendapatkan buff Total DMG Multiplier sebesar 10% (tidak ditumpuk) selama 10 detik. CD: 30 detik. \r\n
                3-pieces effect Zimniye Gryozy
                Setelah mengeluarkan Ultimate, anggota tim berikutnya yang masuk akan mendapatkan 30% lebih sedikit Total DMG (efek tidak bertumpuk) selama 10 detik dan memulihkan HP sebesar 10% dari HP maksimal tuan rumah. CD: 30 detik.  \r\n
                Total Max Stats:
                HP: 759 ATK: 80 DEF: 220 CRT: 9 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Winter Symphony set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //79
            [
                'name' => "Writer set",
                'detail' =>
                "2-pieces effect Shadow Shield
                Menerima perisai saat memasuki medan perang yang dapat menyerap semua DMG sebesar 15% dari Max HP tuan rumah (maks: 1800 HP). Selama perisai berlaku, tuan rumah mendapatkan 40% Crit DMG. Saat rusak, perisai akan muncul kembali setelah 15 detik. \r\n
                3-pieces effect Shadow Blade
                Serangan jarak dekat mendapatkan 20% Multiplier DMG Total.  \r\n
                Total Max Stats:
                HP: 750 ATK: 85 DEF: 178 CRT: 11 SP: 0
                ",
                'source' => "
                Foundry
                Story Stages
                Limited/Rotating Supplies",
                'image' => "Writer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //80
            [
                'name' => "Holy Knight set",
                'detail' =>
                "2-pieces effect Paladin
                Serangan dari musuh tipe PSY akan mengalami pengurangan DMG sebesar 20%. Bonus perlengkapan Kiana atau Kallen: Mendapatkan 20% HP Maks dalam pertempuran. \r\n
                3-pieces effect Durandal
                Saat menyerang musuh tipe PSY, dapatkan 20% Physical DMG. Bonus perlengkapan Kiana atau Kallen: Mendapatkan 10% Crit Rate dalam pertempuran.  \r\n
                Total Max Stats:
                HP: 1029 ATK: 87 DEF: 183 CRT: 11 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Holy Knight set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //81
            [
                'name' => "Homecoming Theater set",
                'detail' =>
                "2-pieces effect Dark Night
                Ketika tuan rumah membunuh musuh, memanggil Kindred (entitas yang dipanggil); CD: 5 detik. Untuk setiap Kindred yang hadir, tuan rumah mendapatkan 10% Pengganda DMG Total. Hingga 3 Kindred dapat hadir pada saat yang bersamaan. Dengan 3 Kindred, tuan rumah mendapatkan Physical Immunity; tuan rumah akan kehilangan buff kekebalan dan semua Kindred saat terkena musuh, dan selama 40 detik berikutnya, tidak ada lagi Kindred yang dapat dipanggil. \r\n
                3-pieces effect Dawn
                Dengan 3 Kindred, tuan rumah mendapatkan buff 20% Total DMG Multiplier satu kali selama 10 detik. Ketika semua Kindred menghilang, tuan rumah mendapatkan penyembuhan langsung sebesar 2% HP Maks / detik selama 10 detik.  \r\n
                Total Max Stats:
                HP: 1279 ATK: 143 DEF: 198 CRT: 12 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Homecoming Theater set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //82
            [
                'name' => "HOMU-HOMU Adventure set",
                'detail' =>
                "2-pieces effect Explosive HOMU
                Setelah mengambil 1 Koin HOMU secara berurutan, hasilkan BOOM HOMU di tempat yang meledak setelah penundaan, memberikan 400% ATK DMG Fisik kepada musuh dalam radius 4 meter. \r\n
                3-pieces effect King HOMU's Treasure
                Setelah mengambil 3 Koin HOMU secara berurutan, tuan rumah akan mendapatkan 10% HP dan 10% SP.  \r\n
                Total Max Stats:
                HP: 1005 ATK: 95 DEF: 179 CRT: 10 SP: 0
                ",
                'source' => "
                Events",
                'image' => "HOMU-HOMU Adventure set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //83
            [
                'name' => "Honkai Queen set",
                'detail' =>
                "2-pieces effect Royal Guard
                Untuk setiap entitas yang dipanggil, tuan rumah mendapatkan 12% Total Pengganda DMG selama 10.0 detik. Tumpukan hingga 3 kali. Memicu ini lagi pada tumpukan maksimum akan mengatur ulang durasi tumpukan dengan sisa waktu paling sedikit. \r\n
                3-pieces effect Energy Reflow
                Dapatkan 50% Crit DMG. Di bawah Bentuk Herrscher, dapatkan 15% Crit Rate.  \r\n
                Total Max Stats:
                HP: 1299 ATK: 186 DEF: 221 CRT: 23 SP: 0
                ",
                'source' => "
                Exchange House
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Honkai Queen set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //84
            [
                'name' => "Hooded Archer set",
                'detail' =>
                "2-pieces effect Basic DMG Boost
                Mendapatkan 8% Physical DMG. \r\n
                3-pieces effect DEF Enhance
                Mendapatkan 20% DEF dalam pertarungan.  \r\n
                Total Max Stats:
                HP: 447 ATK: 37 DEF: 90 CRT: 5 SP: 0
                ",
                'source' => "
                Story Stages",
                'image' => "Hooded Archer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //85
            [
                'name' => "Idol Performance set",
                'detail' =>
                "2-pieces effect Center Stage
                Total DMG meningkat sebesar 15,0%. HP maksimum meningkat sebesar 15,0%. \r\n
                3-pieces effect All Eyes on Me
                ATK Speed increases by 10.0%. SP cap increases by 10.0%.  \r\n
                Total Max Stats:
                HP: 1255 ATK: 135 DEF: 243 CRT: 24 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Idol Performance set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //86
            [
                'name' => "Idol Performance set",
                'detail' =>
                "2-pieces effect Center Stage
                Total DMG meningkat sebesar 15,0%. HP maksimum meningkat sebesar 15,0%. \r\n
                3-pieces effect All Eyes on Me
                ATK Speed increases by 10.0%. SP cap increases by 10.0%.  \r\n
                Total Max Stats:
                HP: 1255 ATK: 135 DEF: 243 CRT: 24 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Idol Performance set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //87
            [
                'name' => "Idol Transformation Set",
                'detail' =>
                "2-pieces effect Temporary Female Lead
                Ketika skill senjata mengenai, memberikan 1 tumpukan Spotlight yang meningkatkan Fire DMG sebesar 8%. Hanya dapat dipicu sekali per detik dan dapat ditumpuk 3 kali. Pada tumpukan maksimum, semua anggota tim memberikan 30,0% lebih banyak Fire DMG kepada musuh yang terbakar selama 20 detik. Memicunya lagi akan mengatur ulang durasinya. Tidak dapat di-stack. \r\n
                3-pieces effect Idol Spirit
                Senjata aktif memberikan 15,0% lebih banyak Fire DMG. Ketika musuh yang tersulut terkena anggota tim, ia akan menerima 35,0% lebih banyak Fire DMG selama 5 detik. Memicunya lagi akan mengatur ulang durasinya. Bonus perlengkapan Chrono Navi: Menyalakan musuh akan membuat mereka menerima 20,0% lebih banyak Ignite DMG selama 10 detik.  \r\n
                Total Max Stats:
                HP: 1305 ATK: 166 DEF: 349 CRT: 21 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Idol Transformation Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //88
            [
                'name' => "In the Name of Finality set",
                'detail' =>
                "2-pieces effect Drifter's Way
                Mendaratkan ATK Dasar atau Ledakan Bersama memberikan 1 tumpukan Trace of Moon; CD: 6 detik. Melemparkan senjata aktif memberikan 1 tumpukan Dust of Time; CD: 3 detik. Saat memiliki Trace of Moon dan Dust of Time, Combo ATK menghabiskan semua Trace of Moon dan Dust of Time saat terkena serangan untuk menghasilkan 45,0% lebih banyak Total DMG sementara, dan karakter juga menghasilkan 45,0% lebih banyak Total DMG selama 8 detik. Memicunya lagi akan menyegarkan durasinya. \r\n
                3-pieces effect Tomorrow's Departure
                Dalam bentuk Herrscher, senjata aktif dan Ultimate memberikan 55,0% lebih banyak Fire DMG. Setelah mengaktifkan senjata, semua musuh menerima 18,0% lebih banyak Total DMG dari karakter selama 8 detik; memicu ulang akan menyegarkan durasi. Selama Absolute Time Fracture, karakter memberikan 40.0% lebih banyak Total DMG.  \r\n
                Total Max Stats:
                HP: 1154 ATK: 184 DEF: 405 CRT: 18 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "In the Name of Finality set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //89
            [
                'name' => "In the Name of Origin set",
                'detail' =>
                "2-pieces effect Path Set Against Odds
                Dalam bentuk Herrscher, Basic/Combo/Charged ATK memberikan 35,0% lebih banyak Lightning DMG. Memicu Time-frozen Domain menghasilkan Thunderfall, membuat semua musuh menerima 8,0% lebih banyak Elemental DMG selama 7 detik, dapat ditumpuk 3 kali. Efek ini bersifat independen dan memicunya kembali akan menyegarkan durasinya. \r\n
                3-pieces effect Sword Held Against Fate
                Semua musuh menerima 20,0% lebih banyak Lightning DMG dari Basic/Combo/Charged ATK karakter (independen dan eksklusif). Setelah anggota tim mana pun mengeluarkan Joint Bursting dalam bentuk Herrscher, semua musuh memasuki kondisi Listen Well selama 10 detik (durasi penyegaran ulang), yang membuat mereka menerima 15,0% lebih banyak Total DMG (eksklusif). Selain itu, setelah musuh tersebut terkena Combo ATK karakter sebanyak 5 kali, mereka menerima 21,0% lebih banyak Total DMG selama 10 detik (eksklusif; durasi penyegaran ulang). Keluar akan menghapus penghitung.  \r\n
                Total Max Stats:
                HP: 1318 ATK: 176 DEF: 316 CRT: 16 SP: 0
                ",
                'source' => "
                Events
                Limited/Rotating Supplies",
                'image' => "In the Name of Origin set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //90
            [
                'name' => "In the Name of Truth Set",
                'detail' =>
                "2-pieces effect Echoed Dissonance
                Jika anggota tim berada dalam kondisi Inceptive Authority, pembawa memberikan 12,0% lebih banyak Total DMG. Jika anggota tim lain berada dalam kondisi Inceptive Authority yang diberikan oleh pembawa, melemparkan senjata aktif akan menyegarkan durasi Inceptive Authority. Dalam bentuk Herrscher, mendaratkan Combo ATK meningkatkan efek Inceptive Authority, membuat semua musuh menerima 18,0% lebih banyak Total DMG selama 18 detik (tidak dapat ditumpuk). Memicunya akan menyegarkan durasinya. Efek ini akan langsung hilang ketika Inceptive Authority berakhir. \r\n
                3-pieces effect Ascent Humane
                Kombinasi ATK, Ultimate, dan serangan dalam mode burst memberikan 20,0% lebih banyak Ice DMG. Jika anggota tim berada dalam Inceptive Authority, semua musuh menerima 16,0% lebih banyak Elemental DMG (tidak dapat ditumpuk).  \r\n
                Total Max Stats:
                HP: 1302 ATK: 166 DEF: 349 CRT: 20 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "In the Name of Truth Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //91
            [
                'name' => "Kitty Experiment set",
                'detail' =>
                "2-pieces effect Schrodinger's Cat
                Ketika diserang, ada kemungkinan 50% bahwa serangan tersebut menderita 70% Pengurangan DMG Total. Jika tidak, serangan tersebut akan mendapatkan 40% Pengganda DMG Total. \r\n
                3-pieces effect Schrodinger's Equation
                Semua buff stigmata dari set stigmata ini mendapatkan 10% kesempatan memicu. Bonus perlengkapan Himeko: Dapatkan 10% peluang pemicu lainnya.  \r\n
                Total Max Stats:
                HP: 1656 ATK: 138 DEF: 195 CRT: 12 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Kitty Experiment set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //92
            [
                'name' => "Knight Hospitaller set",
                'detail' =>
                "2-pieces effect Sword of Blessings
                Pada HP 80% atau lebih tinggi, dapatkan 15% Physical DMG. \r\n
                3-pieces effect Speed Boost
                Dapatkan 25% Kecepatan Bergerak.  \r\n
                Total Max Stats:
                HP: 736 ATK: 59 DEF: 48 CRT: 10 SP: 0
                ",
                'source' => "
                Story Stages
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Knight Hospitaller set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //93
            [
                'name' => "Inventor set",
                'detail' =>
                "2-pieces effect Surge Current
                Mendapatkan 1 charge setiap 12 detik. ATK Dasar berikutnya (termasuk Combo dan Charged ATK) mendapatkan 50% Total Pengali DMG. Tuan rumah juga mendapatkan 15% Pengganda DMG Total selama 6 detik. \r\n
                3-pieces effect EM Field
                Mendapatkan 25% Lightning DMG.  \r\n
                Total Max Stats:
                HP: 1053 ATK: 87 DEF: 114 CRT: 9 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Inventor set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "2nd Eruption set",
                'detail' =>
                "2-pieces effect Warding Aegis
                Pada HP di atas 80%, tuan rumah mengambil 20,0% lebih sedikit DMG. Saat HP di bawah 80%, host memulihkan 200 HP; CD: 15 detik. \r\n
                3-pieces effect Honkai Manifest
                Tuan rumah mendapatkan 20,0% Total DMG Multiplier. Pada HP di atas 50%, mengaktifkan buff 1 buah dari set stigma ini. \r\n
                Total Max Stats:
                HP: 812 ATK: 59 DEF: 220 CRT: 7 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "2nd Eruption set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Accursed Shadows set",
                'detail' =>
                "2-pieces effect Blood Curse
                Saat menggunakan skill aktif senjata (CD: 16 detik), berikan 8 detik Hematic Curse ke musuh dalam jarak 6 meter dari pusat AOE ke diri sendiri. Musuh yang terkena Hematic Curse menerima 10% lebih banyak Physical DMG. \r\n
                3-pieces effect Soul Shield
                Karakter mengambil 50% lebih sedikit DMG tidak langsung. Durasi Hematic Curse diperpanjang selama 2 detik. \r\n
                Total Max Stats:
                HP: 1292 ATK: 190 DEF: 254 CRT: 17 SP: 0
                ",
                'source' => "
                Event
                Foundry
                Exchange House
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Accursed Shadows set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "AE Sovereign set",
                'detail' =>
                "2-pieces effect Tenacity
                Setiap 15 ATK yang tidak dicharge memberikan buff Charged ATK: Charged ATK berikutnya dan Charged ATK berikutnya selama 5 detik mendapatkan 60% DMG Multiplier Total. Penghitungan berakhir setelah buff berakhir. Tuan rumah secara langsung mendapatkan buff Charged ATK saat memasuki pertempuran (memicu 1 kali per pertempuran). \r\n
                3-pieces effect Anti-Entropy
                Mendapatkan 40% Ice DMG. Selama 16 detik setelah mengeluarkan Ultimate, ATK yang terisi akan menghasilkan 3 detik Gravity Vortex yang menarik musuh di dekatnya. CD: 4 detik. \r\n
                Total Max Stats:
                HP: 1424 ATK: 166 DEF: 331 CRT: 10 SP: 0
                ",
                'source' => "
                Events
                Exchange House
                Limited/Rotating Supplies",
                'image' => "AE Sovereign set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Aesthetics First set",
                'detail' =>
                "2-pieces effect Broken Lead Heart
                Jika tuan rumah mengambil DMG melebihi 15% HP Maks dalam waktu singkat, maka masuklah ke Mode Potential untuk mendapatkan 30% Total DMG Multiplier selama 5 detik. CD: 12 detik. \r\n
                3-pieces effect Look at the Stars
                Mendapatkan 50% Crit DMG. Memperpanjang durasi Mode Potensial selama 2 detik. \r\n
                Total Max Stats:
                HP: 377 ATK: 186 DEF: 161 CRT: 24 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Aesthetics First set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Ancient Willpower set",
                'detail' =>
                "2-pieces effect Fox Flame
                Untuk setiap Hit Combo terhitung, serangan Higokumaru mendapatkan 1% Fire DMG. Dapat di stack hingga 40 kali. Tuan rumah juga mendapatkan bonus Fire DMG yang sama.  \r\n
                3-pieces effect Fox Shadow
                Saat memasuki pertempuran, jika Combo Hit terhitung kurang dari 50, langsung tingkatkan hitungan menjadi 50. CD: 30 detik. Fox Flame bisa mendapatkan 40 stacks lagi.  \r\n
                Total Max Stats:
                HP: 495 ATK: 148 DEF: 281 CRT: 16 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Ancient Willpower set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Anniversary Ball set",
                'detail' =>
                "2-pieces effect Flower Dance
                Untuk setiap 5 detik yang digunakan, tuan rumah mendapatkan 1 Dance Level (maksimal 3 stack). Tuan rumah memberikan bonus 15%, 20%, dan 25% dari Total DMG masing-masing pada Dance Level 1, 2, dan 3. Dance Level akan di-reset ketika host diganti.   \r\n
                3-pieces effect Dance of Passion
                Ketika Dance Level mencapai 3, serangan akan menyebabkan ledakan, memberikan 300% ATK Physical DMG kepada musuh di sekitarnya. CD: 6 detik.  \r\n
                Total Max Stats:
                HP: 1203 ATK: 152 DEF: 258 CRT: 15 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Anniversary Ball set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Anniversary Festival set",
                'detail' =>
                "2-pieces effect Anniversary Performance
                Show Time berbagi CD yang sama dengan 10 detik. Ultimate Evasion memulai Taijutsu Kiana, mendapatkan 45% Physical DMG selama 5 detik.
                Combo ATK memulai Chado Ceremony Mei, menyembuhkan tuan rumah sebesar 30 HP/detik selama 5 detik. Terkena serangan musuh memulai Pertunjukan Menembak Bronya, dengan serangan tersebut menderita 30% Pengurangan Total DMG dan mendapatkan 25% ATK Speed selama 5 detik.   \r\n
                3-pieces effect Festival
                Dapatkan 15% HP Maksimum dan 10% Crit Rate dalam pertempuran.  \r\n
                Total Max Stats:
                HP: 1460 ATK: 112 DEF: 253 CRT: 12 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Anniversary Festival set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Antarctic Martyr set",
                'detail' =>
                "2-pieces effect Polar Journals
                Mendapatkan 12% Total DMG Multiplier.   \r\n
                3-pieces effect Explorer's Eulogy
                Setelah menggunakan Combo atau Charged ATK, tuan rumah mendapatkan 18% Ice DMG selama 6 detik.  \r\n
                Total Max Stats:
                HP: 738 ATK: 90 DEF: 227 CRT: 8 SP: 0
                ",
                'source' => "
                Story Stages
                Foundry",
                'image' => "Antarctic Martyr set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Anti-Entropy Ball set",
                'detail' =>
                "2-pieces effect Stage Lights
                Robot assistant's Flash Bomb, Shockwave, and Laser attacks memiliki peluang 30% untuk menghasilkan DMG sebanyak 2 kali.   \r\n
                3-pieces effect Solo Dance
                Menghapus batasan jumlah musuh dari semua skill stigmata dalam set stigmata ini. Serangan tuan rumah mendapatkan 15% Total DMG Multiplier.  \r\n
                Total Max Stats:
                HP: 1483 ATK: 147 DEF: 332 CRT: 17 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Anti-Entropy Ball set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Anti-Entropy Band set",
                'detail' =>
                "2-pieces effect Lightning Chord
                Setiap Basic ATK(termasuk Charged ATK dan Combo ATK) memberikan 1 stack Accord Charge (CD: 1 detik). Setelah mendapatkan 4 stack Accord Charge, reset stack ke nol dan lepaskan Chain Lightning yang menyerang 4 target acak, menimbulkan paralyze ke mereka selama 5 detik dan memberikan 600% ATK Lightning DMG ke target pertama, dengan setiap lompatan memberikan 20% lebih sedikit total Lightning DMG ke musuh. Chain Lightning tidak mengenai target yang sama dua kali. CD: 15 detik.   \r\n
                3-pieces effect Advanced Chord
                Mendapatkan 20% Max HP dan 40% Lightning DMG dalam pertempuran. Lightning DMG yang diberikan oleh Chain Lightning tidak lagi meluruh dengan setiap lompatan.  \r\n
                Total Max Stats:
                HP: 1473 ATK: 158 DEF: 280 CRT: 15 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Anti-Entropy Band set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Anti-Entropy Commander set",
                'detail' =>
                "2-pieces effect Charging Defense
                Ketika entitas yang dipanggil oleh tuan rumah diserang, dia menerima 50% lebih sedikit Total DMG selama 7 detik. CD: 21 detik.   \r\n
                3-pieces effect Explosive Armor
                Ketika Charging Defense berakhir, ia akan meledak untuk memberikan 500% ATK Physical DMG kepada musuh di area yang luas.  \r\n
                Total Max Stats:
                HP: 1460 ATK: 112 DEF: 226 CRT: 12 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Anti-Entropy Commander set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Anti-Entropy Drummer set",
                'detail' =>
                "2-pieces effect Best Drummer
                Memperpanjang durasi Elated Mode yang diberikan oleh stigmata ini sebanyak 2 detik. Setiap serangan meningkatkan efeknya sebesar 1%. Setelah memasuki Elated Mode, dapatkan 50% Physical DMG untuk Combo ATK berikutnya dan durasi singkat setelahnya.   \r\n
                3-pieces effect Bass
                Serangan terhadap musuh yang Frozen mendapatkan 20% Physical DMG. Bonus perlengkapan Kiana atau Kallen: Combo ATKs mendapatkan 20% Total DMG Multiplier.  \r\n
                Total Max Stats:
                HP: 411 ATK: 159 DEF: 310 CRT: 19 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Anti-Entropy Drummer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Anti-Entropy XMas set",
                'detail' =>
                "2-pieces effect General Purpose Polar Suit
                Tuan rumah menerima 10% lebih sedikit Lightning dan Fire DMG dan 15% lebih sedikit Ice DMG.   \r\n
                3-pieces effect Anti-Entropy
                Mendapatkan 15% Max HP. Bonus MECH-type battlesuit: Mendapatkan 10% Max HP.  \r\n
                Total Max Stats:
                HP: 758 ATK: 82 DEF: 182 CRT: 12 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Anti-Entropy XMas set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Arctic Explorer set",
                'detail' =>
                "2-pieces effect Suzerain of Ice
                Jika terkena, ambil 25% lebih sedikit Total DMG dari serangan ini, dan berikan 3 Rime Trauma pada penyerang (efeknya hanya berlaku untuk setiap musuh satu kali). Setelah masuk, serangan pertama akan menambah 20 serangan kombo (CD: 15 detik).   \r\n
                3-pieces effect Polar Expedition
                Tuan rumah mendapatkan 20% ATK Speed lebih cepat dan 25% Total DMG Multiplier, dan menerima Energy Charge selama 15 detik yang mengabaikan gangguan kombo sebanyak 1 kali (Stack maksimal: 2).  \r\n
                Total Max Stats:
                HP: 411 ATK: 173 DEF: 331 CRT: 14 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Arctic Explorer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "As You Wish Set",
                'detail' =>
                "2-pieces effect Wish of the Departed
                Menangani 20,0% lebih banyak Physical DMG dan entitas yang dipanggil pengguna menangani 30,0% lebih banyak Total DMG.   \r\n
                3-pieces effect Forget It Not
                Memberikan 20,0% lebih banyak Crit DMG. Bonus perlengkapan Dreamweaver: Musuh mengambil 10,0% lebih banyak Physical DMG darinya.  \r\n
                Total Max Stats:
                HP: 1244 ATK: 177 DEF: 328 CRT: 21 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "As You Wish Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Beach Angels set",
                'detail' =>
                "2-pieces effect Azure Summer
                Combo ATKs mendapatkan 200% ATK dari Physical DMG. CD: 4 detik.   \r\n
                3-pieces effect Best Vacation
                Menghapus debuff 1 buah dari set stigmata ini.  \r\n
                Total Max Stats:
                HP: 867 ATK: 66 DEF: 206 CRT: 8 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Beach Angels set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Beach Party set",
                'detail' =>
                "2-pieces effect Chaos Party
                Saat tuan rumah menyerang, ada 12% peluang untuk memanggil HOMU King (entitas yang dipanggil) yang merobohkan musuh di sekitarnya dan memberikan 450% ATK Physical DMG (perhitungan DMG didasarkan pada statistik tuan rumah) terhadap mereka. CD: 16 detik.   \r\n
                3-pieces effect Zeal
                Semua sekutu (termasuk ilusi) menerima Flame Wreath saat HOMU King muncul, memberikan 893 Fire DMG setiap 0,5 detik kepada musuh di sekitarnya. Flame wreath berlangsung selama 6 detik.  \r\n
                Total Max Stats:
                HP: 1656 ATK: 143 DEF: 289 CRT: 17 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Beach Party set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Berserk Knight set",
                'detail' =>
                "2-pieces effect Battle Lust
                Mendapatkan 15% Crit Rate.   \r\n
                3-pieces effect Keep 'Em Comin'
                Setelah membunuh musuh, mendapatkan 50% Crit DMG selama 6 detik. Durasi diatur ulang setiap kali efek ini dipicu.  \r\n
                Total Max Stats:
                HP: 1008 ATK: 95 DEF: 162 CRT: 14 SP: 0
                ",
                'source' => "
                Story Stages
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Berserk Knight set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Best Delivery Girl set",
                'detail' =>
                "2-pieces effect Burst of Energy
                Mengambil 20% lebih sedikit Fire DMG. Ketika DMG yang diambil kurang dari hasil kali 8 x level Valkyrie, tuan rumah tidak akan terganggu (tetapi mengambil DMG seperti biasa).   \r\n
                3-pieces effect Adrenalin Surge
                Mendapatkan 30% Max HP dalam pertempuran.  \r\n
                Total Max Stats:
                HP: 1195 ATK: 156 DEF: 245 CRT: 17 SP: 0
                ",
                'source' => "
                -",
                'image' => "Best Delivery Girl set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Black Kirin set",
                'detail' =>
                "2-pieces effect Blade of Darkness
                Saat Time Fracture global aktif, dapatkan 40% Physical DMG. Bonus perlengkapan Kiana atau Kallen: Basic ATKs (termasuk Combo dan Charged ATKs) mendapatkan 4 SP tambahan. CD: 2 detik.   \r\n
                3-pieces effect Daughter of Darkness
                Ketika Time Fracture aktif, skill yang aktif akan menghabiskan 30% lebih sedikit SP.  \r\n
                Total Max Stats:
                HP: 500 ATK: 96 DEF: 285 CRT: 40 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Black Kirin set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blasting Explosive set",
                'detail' =>
                "2-pieces effect Dynamite
                Ketika Charged ATK mengenai musuh, menghasilkan ledakan yang berpusat pada tuan rumah yang memberikan 180,0% Physical DMG ke musuh di dekatnya. CD: 1 detik.   \r\n
                3-pieces effect Igniter
                Setelah setiap entri, 2 serangan pertama yang diterima oleh tuan rumah akan mengalami Total DMG Reduction sebesar 40,0% dan tidak akan menginterupsinya. Crit DMG dari Charges ATK meningkat sebesar 30,0%. Explosion DMG dari Dynamite meningkat menjadi 200.0% ATK dari Physical DMG.  \r\n
                Total Max Stats:
                HP: 362 ATK: 173 DEF: 398 CRT: 16 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Blasting Explosive set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blazing Legacy set",
                'detail' =>
                "2-pieces effect Rebellious Fire
                Dalam bentuk Herrscher, stack yang diberikan oleh B-pc dari set ini memberikan bonus 15,0% Fire DMG. Tuan rumah mendapatkan 45,0% lebih sedikit Indirect DMG dengan HP di bawah 60%.   \r\n
                3-pieces effect Everlasting Flames
                Meningkatkan Total DMG sebesar 20.0%. Ketika tuan rumah kehilangan HP, serangan berikutnya akan memberikan 100% ATK Fire DMG kepada musuh di sekitarnya, yang pada saat terkena akan meningkatkan Total DMG sebesar 10,0% selama 10 detik (CD: 2 detik; memicunya lagi akan me-reset ulang durasinya).  \r\n
                Total Max Stats:
                HP: 1363 ATK: 182 DEF: 264 CRT: 13 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Blazing Legacy set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Bringer of Light set",
                'detail' =>
                "2-pieces effect Embers at Dawn
                Meningkatkan Total DMG sebesar 15%. Combo atau Charged ATK lebih lanjut meningkatkan Total DMG sebesar 15% selama 15 detik. Bisa direset.   \r\n
                3-pieces effect Born of Fire
                Memiliki bonus 10% Attack Speed dan mengambil 15% lebih sedikit Elemental DMG.  \r\n
                Total Max Stats:
                HP: 2556 ATK: 344 DEF: 440 CRT: 10 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Bringer of Light set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Butterfly of Yuki set",
                'detail' =>
                "2-pieces effect Snow Bloom
                Musuh di sekitar mendapatkan 60% ATK dari Ice DMG per detik. 30% kemungkinan memberikan Move Slow pada musuh selama 4 detik.   \r\n
                3-pieces effect Ice Crown
                Mendapatkan 20% Max HP dan 80% Ice DMG dalam pertempuran.  \r\n
                Total Max Stats:
                HP: 591 ATK: 111 DEF: 339 CRT: 7 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Butterfly of Yuki set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Celestial Hymn set",
                'detail' =>
                "2-pieces effect Grace Judgement
                Habiskan setidaknya 15, 70, dan 125 SP sekaligus untuk mendapatkan Total DMG Multiplier masing-masing 8%, 15%, dan 22% untuk seluruh tim. Berlangsung selama 7 detik. Efek tidak dapat distack.   \r\n
                3-pieces effect Holy Mending
                Saat mengenai musuh yang terkena impaired, tuan rumah sembuh sebesar 8% HP dan mendapatkan 5% SP. CD: 8 detik.  \r\n
                Total Max Stats:
                HP: 1424 ATK: 150 DEF: 306 CRT: 15 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Celestial Hymn set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Charles the Great set",
                'detail' =>
                "2-pieces effect Fränkischen Herrscher
                Pada SP 70% atau lebih tinggi, musuh di sekitarnya kehilangan 20% ATK dan 20% DEF.   \r\n
                3-pieces effect Joyeuse
                Saat menyerang musuh tipe MECH, dapatkan 20% Physical DMG. Bonus perlengkapan Mei atau Yae Sakura: Mendapatkan 25% HP dalam pertempuran.  \r\n
                Total Max Stats:
                HP: 899 ATK: 100 DEF: 300 CRT: 40 SP: 0
                ",
                'source' => "
                Events
                Limited/Rotating Supplies",
                'image' => "Charles the Great set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Children set",
                'detail' =>
                "2-pieces effect Combat Sync
                Saat Charged ATK terkena, jika tidak ada lebih dari satu musuh dalam jarak 8m, tuan rumah memberikan bonus 45,0% Total DMG selama 6 detik.   \r\n
                3-pieces effect Battle-tested
                Charged ATK memberikan 200,0% ATK bonus Physical DMG. CD: 6 detik. Bonus perlengkapan Asuka: ATK yang terisi memberikan bonus 40,0% Physical DMG dan dalam bentuk yang disempurnakan, CD turun menjadi 3s.  \r\n
                Total Max Stats:
                HP: 1255 ATK: 169 DEF: 309 CRT: 29 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Limited/Rotating Supplies",
                'image' => "Children set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Children set",
                'detail' =>
                "2-pieces effect Combat Sync
                Saat Charged ATK terkena, jika tidak ada lebih dari satu musuh dalam jarak 8m, tuan rumah memberikan bonus 45,0% Total DMG selama 6 detik.   \r\n
                3-pieces effect Battle-tested
                Charged ATK memberikan 200,0% ATK bonus Physical DMG. CD: 6 detik. Bonus perlengkapan Asuka: ATK yang terisi memberikan bonus 40,0% Physical DMG dan dalam bentuk yang disempurnakan, CD turun menjadi 3s.  \r\n
                Total Max Stats:
                HP: 1255 ATK: 169 DEF: 309 CRT: 29 SP: 0
                ",
                'source' => "
                -",
                'image' => "Childrenn set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Code of Civilization set",
                'detail' =>
                "2-pieces effect Heavenly Three
                Mendapatkan 15% HP maksimal dan memperpendek CD dari skill Ultimate dan Evasion milik tuan rumah sebesar 20% dalam pertempuran.   \r\n
                3-pieces effect Earthly Six
                Ketika ada 3 atau lebih musuh di medan perang, ambil 50% lebih sedikit Elemental DMG dan serangan mendapatkan 60% Elemental DMG.  \r\n
                Total Max Stats:
                HP: 1706 ATK: 136 DEF: 76 CRT: 22 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Code of Civilization set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Cosmic Observer set",
                'detail' =>
                "2-pieces effect Heliocentrism
                Mendapatkan 30% Melee Crit DMG.   \r\n
                3-pieces effect Sunspot Observation
                Menerima 40% lebih sedikit Physical DMG Tidak Langsung (seperti pendarahan).  \r\n
                Total Max Stats:
                HP: 741 ATK: 80 DEF: 164 CRT: 16 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Cosmic Observer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Critic set",
                'detail' =>
                "2-pieces effect Blue Phoenix
                Serangan menciptakan bidang Blue Phoenix yang bertahan selama 6 detik (tidak dapat di stack). CD: 9 detik. tim di dalam bidang mendapatkan 30% Elemental DMG, sementara musuh di dalamnya mendapatkan bonus 10% Elemental DMG.   \r\n
                3-pieces effect Cathartic Aura
                Memperpanjang durasi bidang Blue Phoenix selama 3 detik. tim di dalam field menerima Ice Protection. Ketika kerusakan yang diterima kurang dari 10 x Level Valkyrie, tuan rumah hanya akan menerima kerusakan dan tidak akan terganggu.  \r\n
                Total Max Stats:
                HP: 1436 ATK: 154 DEF: 343 CRT: 16 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Exchange House
                Dorm Supply
                Limited/Rotating Supplies",
                'image' => "Critic set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Daughter of Schicksal set",
                'detail' =>
                "2-pieces effect Oath of Judah
                Untuk setiap musuh Elite di medan perang, tuan rumah mendapatkan 8% Crit Rate. Stack hingga 4 kali.   \r\n
                3-pieces effect Eternal Saint
                Untuk setiap elit yang terbunuh, Basic ATK (termasuk Combo dan Charged ATK) dari tuan rumah mendapatkan 15% Physical DMG. Stack hingga 3 kali. Berlangsung selama 120 detik (menambahkan stack tidak merefresh durasi).  \r\n
                Total Max Stats:
                HP: 1642 ATK: 138 DEF: 226 CRT: 16 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Daughter of Schicksal set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Depicter Impression set",
                'detail' =>
                "2-pieces effect Shading Soul
                Mendapatkan 1 stack saat memberikan Bleed DMG kepada musuh. Setelah mendapatkan 10 stack, Physical DMG yang diberikan kepada musuh meningkat sebesar 500.0%, membersihkan semua stack. DMG ini dihitung sebagai Bleed DMG (Mendapatkan stack setiap 0.3 detik, DMG CD: 5.0 detik. Tidak bisa mendapatkan stack selama CD). Ketika dilengkapi dengan Starry Impression dengan B-piece, mengeluarkan Ultimate akan memberikan Structure Outline pada musuh dan meningkatkan tim. Saat Structure Outline berakhir, Total DMG yang diterima musuh meningkat 36% selama 12 detik. Structure Outline memasuki CD selama 20 detik. Hanya dapat dipicu sekali dalam setiap 20 detik.   \r\n
                3-pieces effect Opal Bands
                Pemain mendapatkan 35.0% ATK Speed. Setelah menggunakan Ultimate, saat menyerang musuh dengan perisai yang rusak atau tanpa perisai, Total DMG yang diberikan meningkat sebesar 2,0% untuk setiap stack Bleed yang ditimbulkan pada musuh (maksimum 10,0%) selama 20 detik. Efek ini tidak dapat di stack dan memicunya lagi akan mengatur ulang durasinya.  \r\n
                Total Max Stats:
                HP: 1212 ATK: 180 DEF: 331 CRT: 24 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Depicter Impression set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Detective of the Fog set",
                'detail' =>
                "2-pieces effect Abductive Reasoning
                Serangan tuan rumah memberikan 5s Sanguine Stain pada musuh yang berdarah, membuat mereka mendapatkan bonus 20.0% Physical DMG (tidak dapat di stack).   \r\n
                3-pieces effect Elementary
                Sanguine Stain bertahan 3 detik lebih lama.  \r\n
                Total Max Stats:
                HP: 1328 ATK: 169 DEF: 420 CRT: 8 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Detective of the Fog set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Devil's Violinist set",
                'detail' =>
                "2-pieces effect Devil's Deal
                Tim memberikan 20,0% bonus DMG ke perisai. Charged ATK yang memberikan DMG membuat musuh mendapatkan bonus 20.0% Physical DMG selama 20 detik. Bisa di refresh. Efek unik.   \r\n
                3-pieces effect 24 Caprices
                Charged ATK DMG meningkatkan Total DMG selama 15 detik. Peningkatan ini sama dengan 18,0% dari bonus rasio DMG-deal-to-shields tuan rumah. CD: 15 detik.  \r\n
                Total Max Stats:
                HP: 1255 ATK: 169 DEF: 309 CRT: 29 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Devil's Violinist set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Disused",
                'detail' =>
                "2-pieces effect Angel's Touch
                Setelah memasuki pertempuran, Tuan rumah mendapatkan 20% Move Speed untuk 10 detik.   \r\n
                3-pieces effect Devil's Play
                Saat tuan rumah dalam keadaan siaga, tim memberikan 20% bonus Crit DMG (tidak dapat di stack).  \r\n
                Total Max Stats:
                HP: 1255 ATK: 169 DEF: 299 CRT: 28 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Disused.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dragon Boat set",
                'detail' =>
                "2-pieces effect Aromatic Bath
                Mendapatkan 10% SP Maks dalam pertempuran. Mendapatkan 10% HP Maks dalam pertempuran.   \r\n
                3-pieces effect Medicinal Wine
                Saat HP di atas 70%, dapatkan 6% Physical DMG untuk setiap 5% HP yang terlampaui.  \r\n
                Total Max Stats:
                HP: 1029 ATK: 79 DEF: 111 CRT: 9 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Dragon Boat set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dream of Sakura set",
                'detail' =>
                "2-pieces effect Florid Sakura
                Mendapatkan 20% HP Maks dalam pertempuran. Serangan terhadap musuh yang ditandai dengan Sakura Brand memberikan 30% lebih banyak Physical DMG.   \r\n
                3-pieces effect Higan Sakura
                Setelah membunuh elit, menyembuhkan tuan rumah sebesar 30% HP. CD: 10 detik.  \r\n
                Total Max Stats:
                HP: 1738 ATK: 144 DEF: 290 CRT: 16 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Dream of Sakura set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dublin Walk set",
                'detail' =>
                "2-pieces effect Cogito Ergo Sum
                Mendapatkan 10.0% Crit Rate. Bonus perlengkapan QUA: Mendapatkan 15,0% Kecepatan ATK lebih cepat.   \r\n
                3-pieces effect Physics of Life
                Mendapatkan 25,0% Physical DMG.  \r\n
                Total Max Stats:
                HP: 759 ATK: 80 DEF: 220 CRT: 9 SP: 0
                ",
                'source' => "
                Events
                Foundry",
                'image' => "Dublin Walk set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Eclipse Prophet set",
                'detail' =>
                "2-pieces effect Schorching Rhytm
                Mendapatkan 1 pengisian daya setiap 10 detik. Untuk Charged ATK berikutnya dan durasi singkat setelahnya, dapatkan 50% Total DMG Multiplier, lalu masuk ke Blazer Mode selama 5 detik. Selama Mode Blazer, serangan Ultimate tuan rumah mendapatkan 30% Total DMG Multiplier.   \r\n
                3-pieces effect Nova
                Dalam Mode Blazer, tuan rumah mendapatkan Ignore Interrupt, Pengurangan Total DMG sebesar 15% dari serangan yang diterima dari musuh, dan menyembuhkan diri sendiri sebesar 50 HP/s.  \r\n
                Total Max Stats:
                HP: 1284 ATK: 184 DEF: 340 CRT: 17 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Eclipse Prophet set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Element Predictor set",
                'detail' =>
                "2-pieces effect Periodic Law
                Saat Combo/Charged ATK mengenai musuh, berikan 100.0% ATK dari Physical DMG. CD: 1 detik.   \r\n
                3-pieces effect Element Prediction
                Ketika Basic ATK mengenai musuh, masuklah ke Discovery State. Discovery State: Tuan rumah mendapatkan Ignore Interrupt dan memberikan 20.0% lebih banyak Physical DMG. Discovery State berakhir dan memasuki CD 15 detik saat rantai Combo Hit terganggu.  \r\n
                Total Max Stats:
                HP: 350 ATK: 143 DEF: 276 CRT: 22 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Element Predictor set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Eloquent Poet set",
                'detail' =>
                "2-pieces effect La Vita Nuova
                Tuan rumah mendapatkan 20,0% Crit DMG. Tuan rumah mendapatkan 30,0% Physical DMG selama 10 detik saat memasuki mode Burst atau mengenai musuh dengan ATK yang terisi dalam mode Burst; memicu efek ini lagi akan mengatur ulang durasinya. Bonus perlengkapan Durandal: CD dari Ultimate Evasion / Retaliation berkurang 20%.   \r\n
                3-pieces effect Divine Comedy
                Dalam mode Burst, tuan rumah memberikan 30,0% lebih banyak DMG terhadap perisai, dan ATK-nya yang terisi dapat merusak musuh yang tidak terganggu, mengurangi DEF mereka sebesar 40,0% selama 8 detik. Bonus perlengkapan Durandal: Impairing debuff mengurangi DEF musuh sebesar 60,0%.  \r\n
                Total Max Stats:
                HP: 411 ATK: 173 DEF: 265 CRT: 32 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Eloquent Poet set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Elysian Paragon set",
                'detail' =>
                "2-pieces effect Bygone Chapters
                Total DMG meningkat sebesar 20.0%. Saat masuk atau mengeluarkan Ultimate, Total DMG tim meningkat 10,0% selama 15 detik (tidak dapat di stack). Memicunya lagi akan mereset durasinya.   \r\n
                3-pieces effect Elysian Legacy
                Kecepatan ATK meningkat sebesar 10,0%. Mengambil 15,0% lebih sedikit Elemental DMG saat HP di bawah 40%.  \r\n
                Total Max Stats:
                HP: 1278 ATK: 172 DEF: 220 CRT: 5 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Elysian Paragon.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Emilione set",
                'detail' =>
                "2-pieces effect Khan's Envoy
                Ketika Combo Hit melebihi 25, Combo atau Charged ATK memberikan 250% ATK dari bonus Physical DMG saat terkena. CD: 5 detik.   \r\n
                3-pieces effect Book of Marvels
                Ketika Combo Hit melebihi 25, tuan rumah menyembuhkan 200 HP per 5 detik.  \r\n
                Total Max Stats:
                HP: 1159 ATK: 158 DEF: 265 CRT: 16 SP: 0
                ",
                'source' => "
                Foundry",
                'image' => "Emilione set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Emperor of Xuanyuan set",
                'detail' =>
                "2-pieces effect Blessed Blade
                Memperpendek durasi debuff sebesar 50%. Mei, Yae Sakura, atau Himeko mendapatkan bonus perlengkapan: Mendapatkan 20% HP Maksimum dalam pertempuran. \r\n
                3-pieces effect Energy Focus
                Mengisi daya setiap 5 detik sekali. Untuk Basic, Combo, atau Charged ATK berikutnya dan periode singkat setelah itu 80% DMG Fisik dan 50% Crit Rate \r\n
                Total Max Stats:
                HP: 1655 ATK: 139 DEF: 195 CRT: 7 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Emperor of Xuanyuan set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Encompassing Beauty set",
                'detail' =>
                "2-pieces effect Ephemeral
                Setiap Combo/Charged ATK (CD: 1 detik) menambah 1 charge. Pada 4 kali pengisian, tuan rumah memasuki Mist Form selama 6 detik (CD: 20 detik; semua pengisian akan dihapus saat Mist Form berakhir). Bentuk Kabut: Memberikan 600 Physical DMG kepada musuh acak dalam radius 6 meter setiap 0,25 detik; setiap target tidak akan menerima lebih dari 1 serangan dalam rentang waktu 0,5 detik. \r\n
                3-pieces effect Exquisite
                Saat efek Mist berakhir, sembuhkan setiap tim sebesar 30 HP/detik selama 6 detik. \r\n
                Total Max Stats:
                HP: 386 ATK: 115 DEF: 333 CRT: 21 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Encompassing Beauty set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Equinoctial Wonder set",
                'detail' =>
                "2-pieces effect World's a Stage
                Total DMG meningkat sebesar 30,0%. Bonus perlengkapan Palatinus Equinox: Memicu peningkatan dari stigma piece apa pun juga memicu semua peningkatan lainnya dari bagian lain dalam set. \r\n
                3-pieces effect All Merely Players
                Physical DMG meningkat sebesar 30,0%. Memicu World's a Stage meningkatkan Physical DMG yang diberikan oleh Ultimate host berikutnya sebesar 80,0% dan membuatnya memulihkan 200,0 HP. \r\n
                Total Max Stats:
                HP: 1182 ATK: 179 DEF: 331 CRT: 27 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Equinoctial Wonder set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Eternal Moon set",
                'detail' =>
                "2-pieces effect Worldly Wine
                Dalam kondisi Reinforcement, tambahkan 1 stack Menacing Sword Ki ke target selama 18 detik saat tim memberikan Ice DMG, hingga maksimum 10 stack. Setiap stack meningkatkan Ice DMG yang diterima oleh target sebesar 1.0%. Saat dilengkapi oleh Jade Knight, stack maksimum untuk Menacing Sword Ki meningkat sebanyak 12 stack. Selain itu, jika B-piece dilengkapi, memicu QTE dapat mengaktifkan status Reinforcement yang setara dengan menghabiskan 150 SP. \r\n
                3-pieces effect Shenzhou Pilgrimage
                Meningkatkan stack maksimal Menacing Sword Ki menjadi 15 stack. Musuh yang terkena Menacing Sword Ki mendapatkan tambahan 30.0% ATK Ice DMG setiap detik. Meningkatkan efisiensi pemecahan perisai tim sebesar 50.0%. \r\n
                Total Max Stats:
                HP: 1231 ATK: 169 DEF: 464 CRT: 13 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Eternal Moon set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Exiled Knight set",
                'detail' =>
                "2-pieces effect Firm Will
                Setelah membunuh musuh, dapatkan 50% kesempatan untuk memulihkan 10 SP. Bonus perlengkapan Himeko: Mendapatkan 8% HP Maks dalam pertempuran. \r\n
                3-pieces effect Immortal Hero
                Saat menyerang musuh tipe BIO, mendapatkan 10% Crit Rate. \r\n
                Total Max Stats:
                HP: 726 ATK: 60 DEF: 81 CRT: 3 SP: 0
                ",
                'source' => "
                Story Stages",
                'image' => "Exiled Knight set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Exotic Lamp Set",
                'detail' =>
                "2-pieces effect Wish for Contentment with Life
                Tim memberikan 20,0% lebih banyak Bleed DMG. Bonus perlengkapan Valkyrie Quicksand: Senjatanya aktif dan Ultimate menghasilkan 80,0% lebih banyak Total DMG. \r\n
                3-pieces effect Tale of Fate's Betrayal
                Meningkatkan Physical DMG sebesar 18.0%, dan Combo ATK's Total DMG sebesar 30.0%. Saat tuan rumah berada di lapangan, menangani Bleed DMG akan memulihkan 1 SP; CD: 1 detik. \r\n
                Total Max Stats:
                HP: 1318 ATK: 176 DEF: 316 CRT: 16 SP: 0
                ",
                'source' => "
                Limited/ Rotating Supplies",
                'image' => "Exotic Lamp Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Fantasy Voyage Set",
                'detail' =>
                "2-pieces effect Fantastic Adventure
                Memicu Ultimate Evasion dalam mode Burst akan meningkatkan Total DMG sebesar 30,0% selama 12 detik. Bisa di-refresh. Dalam mode Burst, ATK yang terisi akan meningkatkan Ice DMG sebesar 15,0% saat terkena serangan (CD: 0,3 detik) hingga mode Burst berakhir. Maksimal 4 stack. Mencapai 4 stack akan memberikan 900.0% ATK Ice DMG kepada musuh di sekitar. CD: 20 detik. \r\n
                3-pieces effect Futuristic Imagination
                Charged ATK mengembalikan 2 bonus SP saat terkena serangan (CD: 2 detik). Ketika dilengkapi oleh Seele dan dia digunakan, semua musuh mendapatkan bonus 20.0% Ice DMG. \r\n
                Total Max Stats:
                HP: 1292 ATK: 179 DEF: 331 CRT: 16 SP: 0
                ",
                'source' => "
                Foundry
                Limited/ Rotating Supplies",
                'image' => "Fantasy Voyage Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Feline Guardian Set",
                'detail' =>
                "2-pieces effect Eye of Ra
                Membekukan musuh akan meningkatkan Total DMG tim sebesar 50,0% (tidak dapat di stack) selama 15 detik. Memicunya lagi akan mereset durasi. \r\n
                3-pieces effect Enemy of Chaos
                Total DMG meningkat sebesar 30,0%. Efek Freeze yang ditimbulkan oleh anggota tim bertahan 20,0% lebih lama (tidak dapat di stack). \r\n
                Total Max Stats:
                HP: 1255 ATK: 181 DEF: 354 CRT: 16 SP: 0
                ",
                'source' => "
                Limited/ Rotating Supplies",
                'image' => "Feline Guardian Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Figurine Master set",
                'detail' =>
                "2-pieces effect Destruction Doll
                Setelah melemparkan Ultimates 2 kali, hasilkan Doll Aura dengan radius 5 meter. Musuh dalam AOE tidak dapat bergerak dan menerima 20% lebih banyak Physical DMG. Aura bertahan selama 6 detik. CD: 18 detik. Efek ini tidak dapat di stack. \r\n
                3-pieces effect Doll Control
                Memperpendek durasi debuff pada tuan rumah sebesar 30%. Serangan terhadap musuh yang terkena debuff juga mendapatkan 30% Multiplier DMG Total. \r\n
                Total Max Stats:
                HP: 423 ATK: 161 DEF: 376 CRT: 22 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/ Rotating Supplies",
                'image' => "Figurine Master set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Florentine Poet set",
                'detail' =>
                "2-pieces effect Di Nostra Vita
                Jika tuan rumah kehilangan 20% HP dalam 5 detik, dapatkan 30% Fire DMG selama 10 detik. \r\n
                3-pieces effect Divine Comedy
                Hindari kematian saat menerima serangan mematikan. Sebagai gantinya, sembuhkan diri Anda sebesar 50% HP Maks. Efek hanya aktif 1 kali per pertempuran. \r\n
                Total Max Stats:
                HP: 411 ATK: 173 DEF: 265 CRT: 32 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/ Rotating Supplies",
                'image' => "Florentine Poet set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Flower of Origin Set",
                'detail' =>
                "2-pieces effect Wish for Time
                Total DMG meningkat sebesar 25,0% dalam Bentuk Herrscher. Setelah 8 serangan berturut-turut (CD 0,1 detik), Ice DMG jarak jauh meningkat 15,0% selama 10 detik. Memicunya lagi akan mengatur ulang durasinya. Total DMG yang diterima berkurang sebesar 20.0%. \r\n
                3-pieces effect Wish for Glory
                CD skill senjata berkurang 25,0%. Ranged Ice DMG meningkat sebesar 20.0%. Total DMG jarak jauh meningkat sebesar 35,0%. \r\n
                Total Max Stats:
                HP: 1293 ATK: 174 DEF: 375 CRT: 13 SP: 0
                ",
                'source' => "
                Limited/ Rotating Supplies",
                'image' => "Flower of Origin Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Frankenstein set",
                'detail' =>
                "2-pieces effect Bioelectricity
                Saat musuh berada di dekatnya, lepaskan  electro discharge setiap 4 detik, memberikan 40% HP maksimum Lightning DMG ke musuh di AOE (dengan HP maksimum 15.000 atau lebih tinggi, anggap HP sebagai 15.000) dan menyimpan Energy Mark. \r\n
                3-pieces effect Frankenstein
                Saat mendapatkan 7 Energy Mark, masuk ke Frankenstein Mode setelah memukul musuh dengan Basic ATK (termasuk Charged dan Combo ATK). Mode Frankenstein: Tuan rumah mendapatkan 40% DMG Multiplier Total dan menyembuhkan tim sebesar 2% HP/s selama 10 detik. Tanda energi direset ke nol saat Mode Frankenstein berakhir. \r\n
                Total Max Stats:
                HP: 495 ATK: 123 DEF: 211 CRT: 16 SP: 0
                ",
                'source' => "
                Event
                Foundry",
                'image' => "Frankenstein set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Frontier Seductress set",
                'detail' =>
                "2-pieces effect Cloud of Ashes
                Mendapatkan 15.0% Fire DMG. Saat menyerang, berikan 300% ATK Fire DMG ke musuh di dekatnya. CD: 15 detik. \r\n
                3-pieces effect Fallen Cormorant
                Dapatkan 20% HP Maks dan 10,0% Multiplier DMG Total selama pertempuran. \r\n
                Total Max Stats:
                HP: 1089 ATK: 85 DEF: 18 CRT: 15 SP: 0
                ",
                'source' => "
                Story Stages
                Foundry
                Limited/Rotating Supplies",
                'image' => "Frontier Seductress set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Gentle Herbalist set",
                'detail' =>
                "2-pieces effect Floral Bounties
                Saat diserang oleh musuh yang lemah, ada 40% kemungkinan Valkyrie menerima nol DMG (tidak melindungi dari Elemental DMG). CD: 3 detik. \r\n
                3-pieces effect Fertile Earth
                Meningkatkan  HP dan SP bag recovery sebesar 50%. \r\n
                Total Max Stats:
                HP: 558 ATK: 138 DEF: 234 CRT: 14 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Gentle Herbalist set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Gracefully Alive Set",
                'detail' =>
                "2-pieces effect Butterfly Transcending Death
                Meningkatkan Crit DMG sebesar 10.0%. Dalam kondisi Life's Pistil, semua anggota tim mendapatkan Crit Rate 20,0% (eksklusif). Bonus perlengkapan Herrscher of Rebirth: Semua anggota tim mendapatkan Crit Rate ekstra 10%. Lebih lanjut meningkatkan Crit DMG sebesar 17,0%. \r\n
                3-pieces effect Shadow Emerging from the Sea
                Saat anggota tim memasuki bentuk Herrscher, dalam kondisi Life's Pistil, anggota tim di lapangan memberikan 15,0% lebih banyak Total DMG, dan serangan Ultimate dan mode burst mereka memberikan 18,0% lebih banyak Total DMG (eksklusif). Jika ada entitas yang dipanggil oleh teman, semua musuh akan menerima 5,0% lebih banyak Physical DMG (eksklusif). \r\n
                Total Max Stats:
                HP: 1253 ATK: 178 DEF: 309 CRT: 22 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Gracefully Alive Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Guard Emperya set",
                'detail' =>
                "2-pieces effect Tireless Warrior
                Memberikan 30,0% lebih banyak Fire DMG; setelah menghabiskan tidak kurang dari 25 SP dalam satu aksi, tim mendapatkan Fyreheart selama 18 detik (memicu ini lagi untuk me-reset durasi). \r\n
                3-pieces effect Feared Champion
                Ketika menghabiskan tidak kurang dari 60/120 SP dalam satu aksi, Fyreheart yang terpicu setelahnya menyebabkan musuh yang terkena Warhaunt menerima 17,0% / 20,0% lebih banyak Total DMG (efek Warhaunt tidak stack). Bonus perlengkapan Fu Hua: Biaya SP minimum untuk mengaktifkan Fyreheart berkurang menjadi 15. \r\n
                Total Max Stats:
                HP: 1459 ATK: 179 DEF: 221 CRT: 10 SP: 0
                ",
                'source' => "
                Foundry
                Exchange House
                Dorm Supply",
                'image' => "Guard Emperya set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Halloween Witch set",
                'detail' =>
                "2-pieces effect Eldritch Torrent
                Mendapatkan 10% Multiplier DMG Total. Bonus perlengkapan Bronya: Beralih skill (termasuk QTE) mendapatkan 10% Multiplier DMG Total. \r\n
                3-pieces effect Flying Broom
                Mendapatkan 15% Move Speed. \r\n
                Total Max Stats:
                HP: 975 ATK: 82 DEF: 216 CRT: 15 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Halloween Witch set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hanabi Fireworks set",
                'detail' =>
                "2-pieces effect Hanabi Fest
                Setelah menggunakan skill aktif senjata, musuh di sekitarnya menerima 100% ATK DMG Fisik dan 100% ATK DMG Api setiap 0,5 detik selama 6 detik. Memicu ini lagi akan mereset durasinya. \r\n
                3-pieces effect XXXL Firecrackers
                Mendapatkan 10% Crit Rate dan 60% Crit DMG untuk diri sendiri. \r\n
                Total Max Stats:
                HP: 1221 ATK: 125 DEF: 327 CRT: 16 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Hanabi Fireworks set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Heartfelt Memories set",
                'detail' =>
                "2-pieces effect Anniversary
                Dapatkan 30 Crit Rate dan 40% Crit DMG. \r\n
                3-pieces effect Celebration
                Mendapatkan 15% HP Maks dalam pertempuran. Mengurangi biaya SP aktivasi skill sebesar 30%. \r\n
                Total Max Stats:
                HP: 1279 ATK: 124 DEF: 309 CRT: 13 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Heartfelt Memories set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Herrscher of Ice set",
                'detail' =>
                "2-pieces effect Might of Solid Rime
                Meningkatkan Ice DMG sebesar 25.0%. Combo dan Charged ATK memanggil Ice Pillar di sekitar musuh saat terkena serangan untuk memberikan 400.0% ATK Ice DMG ke musuh di dekatnya dan meningkatkan Ignore Interrupt dari tuan rumah selama 3 detik. CD: 10 detik. \r\n
                3-pieces effect Heart of Bitter Ice
                Combo dan Charged ATK memberikan 50,0% bonus Total DMG. Musuh dalam jarak 5 meter mendapatkan bonus 10,0% Ice DMG dari tuan rumah. \r\n
                Total Max Stats:
                HP: 1328 ATK: 158 DEF: 331 CRT: 26 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Herrscher of Ice set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Herrscher of the Void set",
                'detail' =>
                "2-pieces effect Spatial Erosion
                Bonus perlengkapan Mei atau Yae Sakura: Setiap serangan berulang pada target yang sama (reset jika tidak ada serangan yang terjadi dalam 2,5 detik) meningkatkan serangan berikutnya sebesar 3% Crit Rate (maksimal 15%) dan 8% Crit DMG (maksimal 40%) per serangan. \r\n
                3-pieces effect Pocket Dimension
                Ketika karakter digunakan dan berada di atas 60% HP, musuh menderita 15% Total DMG Reduction pada serangan mereka dan 10% lebih banyak Total DMG Multiplier pada kerusakan yang diterima. Efek tidak dapat di stack. \r\n
                Total Max Stats:
                HP: 362 ATK: 182 DEF: 263 CRT: 19 SP: 0
                ",
                'source' => "
                Exchange House
                Limited/Rotating Supplies",
                'image' => "Herrscher of the Void set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Herrscher Shoppers Set",
                'detail' =>
                "2-pieces effect Special Product
                Total DMG meningkat sebesar 10,0% dan selanjutnya meningkat sebesar 15,0% dalam Bentuk Herrscher. \r\n
                3-pieces effect Herrscher's Vacation
                HP maksimum meningkat 20,0% dan Move Speed meningkat 10,0%. \r\n
                Total Max Stats:
                HP: 812 ATK: 92 DEF: 164 CRT: 4 SP: 0
                ",
                'source' => "
                Dorm Supply",
                'image' => "Herrscher Shoppers Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "High Baroque Maestro Set",
                'detail' =>
                "2-pieces effect Redemptive Resurrection
                Lightning DMG meningkat sebesar 30,0%. Casting Ultimate memicu efek dari semua potongan stigma yang dilengkapi (memicu lagi akan merefresh durasinya). \r\n
                3-pieces effect Praise of Heaven
                Rekan satu tim di lapangan mendapatkan 20.0% Total DMG Multiplier (tidak dapat di stack). Setelah menghabiskan setidaknya 60/120 SP dalam sekali serangan, semua musuh mendapatkan bonus 10.0%/35.0% Lightning DMG selama 20 detik (dapat di-refresh tetapi tidak dapat di-stack). \r\n
                Total Max Stats:
                HP: 1294 ATK: 175 DEF: 376 CRT: 13 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Limited/Rotating Supplies",
                'image' => "High Baroque Maestro Set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Holger Danske set",
                'detail' =>
                "2-pieces effect Timeless
                Ketika ada 2 atau kurang musuh di lapangan, rekan satu tim menerima 10,0% lebih sedikit DMG Tidak Langsung. Efek ini tidak dapat di stack. \r\n
                3-pieces effect Curtana
                Setelah keluar, rekan satu tim yang berganti mendapatkan 20% DEF selama 10 detik. \r\n
                Total Max Stats:
                HP: 600 ATK: 87 DEF: 240 CRT: 30 SP: 0
                ",
                'source' => "
                Story Stages
                Foundry
                Limited/Rotating Supplies",
                'image' => "Holger Danske set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Passionate Dedication",
                'detail' =>
                "2-pieces Unescapable Melancholy
                Setelah menggunakan Weapon Skill, tim akan membawa efek Contrasting Colors, yang dapat di-stack hingga 2 kali. Setiap tumpukan meningkatkan Bleed DMG sebesar 12,0% selama 20 detik. Memicunya lagi akan mengatur ulang durasinya. Efek ini bersifat eksklusif. \r\n
                3-pieces Fervent Love
                Karakter menerima 30,0% lebih sedikit Total DMG dan memberikan 25,0% lebih banyak Bleed Trauma. Bonus perlengkapan Cosmic Expression: Setiap tumpukan Warna Kontras meningkatkan Total DMG yang diambil oleh semua musuh sebesar 10,0%. \r\n
                Total Max Stats:
                HP: 1206 ATK: 174 DEF: 364 CRT: 32 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Passionate Dedication set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "City-State Epic set",
                'detail' =>
                "2-pieces Unescapable Melancholy
                Ultimate meningkatkan Physical DMG tuan rumah sebesar 35,0% dan Crit DMG sebesar 30,0% selama 1 detik. CD: 8 detik. \r\n
                3-pieces Fervent Love
                Meningkatkan Crit DMG sebesar 15,0%. Ketika 60/120 SP dikonsumsi sekaligus, DMG Fisik meningkat sebesar 20.0%/45.0% selama 15 detik. Memicunya lagi akan mengatur ulang durasinya. Crit Rate karakter meningkat 20% ketika hanya ada 1 karakter dalam tim. \r\n
                Total Max Stats:
                HP: 1149 ATK: 180 DEF: 387 CRT: 24 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "City-State Epic set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Darkness Illuminated set",
                'detail' =>
                "2-pieces Before Dawn
                Meningkatkan Total DMG sebesar 10.0%. Saat karakter terkena Nocturnal Chiroptera, semua musuh di lapangan menerima 20,0% lebih banyak Lightning DMG. (Eksklusif) \r\n
                3-pieces Post-Nightfall
                Meningkatkan Total DMG tim sebesar 15,0% (eksklusif). Saat host terkena Nocturnal Chiroptera, dia memulihkan 1 SP per detik dan memberikan 30,0% lebih banyak Lightning DMG. \r\n
                Total Max Stats:
                HP: 1253 ATK: 179 DEF: 309 CRT: 22 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Darkness Illuminated set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Flavors of Time set",
                'detail' =>
                "2-pieces Hustle and Bustle
                Memulihkan atau kehilangan HP meningkatkan Total DMG karakter sebesar 3,5%. Tumpukan hingga 10 kali. Menumpuk CD: 0,4 detik. Semua stack akan dibersihkan saat keluar. \r\n
                3-pieces The Many Walks of Life
                Setiap tumpukan dari bonus 2 buah juga meningkatkan Fire DMG sebesar 3,0%. Karakter memulihkan 50 HP setiap 1 detik selama 5 detik saat keluar. Memicu ulang akan menyegarkan durasi. Bonus perlengkapan Fu Hua: Semua musuh menerima 27,0% lebih banyak Total DMG dari karakter. \r\n
                Total Max Stats:
                HP: 1168 ATK: 173 DEF: 442 CRT: 20 SP: 0
                ",
                'source' => "
                Limited/Rotating Supplies",
                'image' => "Flavors of Time set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Little Joys set",
                'detail' =>
                "2-pieces Sparkling Girl's Heart
                Menerima 12,0% lebih sedikit DMG dari musuh. Karakter memberikan 20,0% lebih banyak Ignite DMG. \r\n
                3-pieces The Many Walks of Life
                Semua musuh menerima 14,0% lebih banyak Fire DMG dari karakter ini. Jika target memiliki lebih dari 2 tumpukan Ignite, mereka akan menerima 6,0% lebih banyak Total DMG dari karakter ini. \r\n
                Total Max Stats:
                HP: 1293 ATK: 164 DEF: 475 CRT: 8 SP: 0
                ",
                'source' => "
                Foundry
                Limited/Rotating Supplies",
                'image' => "Little Joys set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Perfect Morning set",
                'detail' =>
                "2-pieces Serendipitous Joy
                Meningkatkan Total DMG sebesar 20,0%. Saat digunakan oleh Deepspace Anchor: First Light, karakter tersebut memberikan tambahan 30.0% Lightning DMG saat menangani DMG dengan skill senjata. CD: 2 detik. CD efek ini berkurang menjadi 0.5 detik saat dipicu oleh Resonance. Setelah mengaktifkan Astral Ring Specialization: World Star, Total DMG dari karakter dengan Domain Resonance dalam tim meningkat sebesar 25.0% di luar Stellar Outburst. \r\n
                3-pieces The Many Walks of Life
                Semua musuh mengambil 10.0% lebih banyak Total DMG dari karakter. Saat digunakan oleh Deepspace Anchor: First Light, semua musuh mengambil 24,0% lebih banyak Total DMG dari karakter, dan mengambil 25,0% lebih banyak Total DMG dari Resonance. Saat digunakan oleh Deepspace Anchor: First Light, setelah mengaktifkan Astral Ring, jika karakter menghabiskan setidaknya 30 SP dalam keadaan siaga dalam sekali jalan, musuh mengambil 15% lebih banyak Total DMG dan Elemental DMG selama 30 detik. Memicu ulang akan menyegarkan durasi. \r\n
                Total Max Stats:
                HP: 1161 ATK: 173 DEF: 438 CRT: 21 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Limited/Rotating Supplies",
                'image' => "Perfect Morning set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Splendors of Amber set",
                'detail' =>
                "2-pieces In a Moment of Splendor
                Meningkatkan Total DMG sebesar 18,0%. Saat dilengkapi dengan Mad Pleasure: Shadowbringer, sebelum Astral Ring diaktifkan, Total DMG meningkat sebesar 35% dan semua rekan satu tim memberikan 20,0% lebih banyak DMG ke perisai. Saat Astral Ring Specialization: Wheel of Destiny diaktifkan, maka akan bertambah 20.0% lagi. Saat Spesialisasi Cincin Astral: World Star diaktifkan, untuk setiap karakter yang dilindungi oleh Astral Ring Specialization: Bintang Dunia, musuh menerima 7,0% lebih banyak Elemental DMG dan Total DMG. \r\n
                3-pieces Centenary Glow
                Meningkatkan Ice DMG sebesar 20,0%, mengurangi Total DMG yang diambil sebesar 20,0%.
                Mad Pleasure: Bonus perlengkapan Shadowbringer:
                Serangan akan memberikan semua rekan satu tim efek Share a Glass selama 25 detik. Memicu ulang akan menyegarkan durasi.
                Sebelum Astral Ring diaktifkan, Share a Glass akan menyebabkan semua musuh di lapangan menerima 30% lebih banyak Total DMG dari Mad Pleasure: Shadowbringer.
                Saat Spesialisasi Astral Ring: World Star diaktifkan, musuh di lapangan akan menerima Total DMG 9% lebih banyak. Saat Mad Pleasure: Shadowbringer berada di lapangan, musuh menerima 18% lebih banyak Total DMG dari Resonance Attack.
                Saat Spesialisasi Cincin Astral: Wheel of Destiny diaktifkan, karakter dengan Spesialisasi Cincin Astral: Wheel of Destiny juga akan memberikan efek Share a Glass kepada semua rekan satu tim saat memberikan DMG. Share a Glass akan menyebabkan semua musuh di lapangan menerima 30,0% lebih banyak Total DMG dari karakter dengan Spesialisasi Astral Ring: Wheel of Destiny, meningkatkan Elemental DMG dan Total DMG sebesar 18%, dan meningkatkan Total DMG yang diambil selama Stellar Outburst sebesar 12,0%. \r\n
                Total Max Stats:
                HP: 1195 ATK: 173 DEF: 411 CRT: 21 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Limited/Rotating Supplies",
                'image' => "Splendors of Amber set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Genius Pioneer set",
                'detail' =>
                "2-pieces Suppression That Transcends Domains
                Setelah melemparkan senjata yang aktif, semua anggota tim memberikan 20,0% lebih banyak Elemental DMG selama 5 detik. Memicu ulang akan menyegarkan durasi (eksklusif). Saat Valkyrie Boltstorm melemparkannya, durasinya meningkat menjadi 15 detik dan dia menerima 20% lebih sedikit Total DMG. Selama Stellar Outburst, semua anggota tim menghasilkan 30,0% lebih banyak Elemental DMG dengan Resonance. \r\n
                3-pieces Changing the Future World
                Ketika skill senjata mengenai, memberikan satu tumpukan Urutan Status. Maksimal 15 tumpukan. CD: 1 detik. Ketika rekan tim lain mendaratkan serangan, menghabiskan satu tumpukan Status Sequence dan meningkatkan Total DMG mereka sebesar 10,0% selama 1 detik (eksklusif). Ketika digunakan oleh Valkyrie Boltstorm, efeknya tidak memiliki CD, buff Total DMG meningkat menjadi 40,0%, dan tumpukan maksimal meningkat menjadi 30. \r\n
                Total Max Stats:
                HP: 1207 ATK: 175 DEF: 365 CRT: 24 SP: 0
                ",
                'source' => "
                Events
                Foundry
                Limited/Rotating Supplies",
                'image' => "Genius Pioneer set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Into the Universe set",
                'detail' =>
                "2-pieces Predict the Future from Silence
                Musuh yang terkena Ultimate dan serangan dalam mode burst membutuhkan 12,0% lebih banyak Total DMG selama 25 detik. Memicu ulang durasi penyegaran (eksklusif). Ketika digunakan oleh Valkyrie Blastmetal, juga meningkatkan Total DMG yang diterima musuh sebesar 15,0% ketika Astral Ring diaktifkan, dan menerapkan efeknya pada semua musuh ketika memasuki Stellar Outburst, mengurangi Total DMG yang diterima karakter sebesar 20,0%. \r\n
                3-pieces Gaze at the Stars from Darkness
                Menggunakan skill senjata akan memberikan tim Eternal Dream, meningkatkan Total DMG mereka sebesar 15,0% selama 15 detik. Memicunya lagi saat aktif akan memperpanjang durasi selama 15 detik, hingga 30 detik (eksklusif). Ketika digunakan oleh Valkyrie Blastmetal saat Astral Ring diaktifkan, buff Astral Ring pada karakter akan meningkat sebesar 100.0% dan memasuki Stellar Outburst akan memberikan efek Eternal Dream kepada seluruh anggota tim. Durasi efek juga diperpanjang hingga 30 detik. \r\n
                Total Max Stats:
                HP: 1168 ATK: 173 DEF: 442 CRT: 20 SP: 0
                ",
                'source' => "
                Events",
                'image' => "Into the Universe set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "A Forged Light set",
                'detail' =>
                "2-pieces effect Guardian's Weapons
                Ultimate karakter memberikan 30,0% lebih banyak Total DMG. Saat dilengkapi oleh Lone Destruction: Shadowchaser dengan Hanging Flame, dia menerima efek berikut:
                Saat Spesialisasi Cincin Astral: Resonance diaktifkan, dia memberikan 20,0% lebih banyak Fire DMG selama Stellar Outburst, semua musuh di lapangan menerima 34% lebih banyak Total DMG, dan semua karakter dalam tim memberikan 5% lebih banyak Physical DMG dan Crit DMG.\r\n
                3-pieces effect Fluorescent Night
                Karakter ini memberikan 25,0% lebih banyak Fire DMG.
                Saat dilengkapi dengan Lone Destruction: Shadowchaser, dia menerima efek berikut:
                Memasuki Stellar Outburst atau memberikan DMG di lapangan akan memberikan Hanging Flame. Hanging Flame memungkinkan karakter untuk memberikan 22,0% lebih banyak Fire DMG selama 25 detik. Memicu ulang akan menyegarkan durasinya.
                Saat Spesialisasi Cincin Astral: Wheel of Destiny diaktifkan, musuh menerima 29,0% lebih banyak Total DMG dari anggota tim dengan tag Harmonized Shadow Star dalam kondisi Astral Ring Charging, dan karakter dengan tag Harmonized Shadow Star akan memberikan 30% lebih banyak Crit DMG.
                Saat Spesialisasi Astral Ring: World Star diaktifkan, karakter akan memberikan 30% lebih banyak Total DMG melalui Resonance. Musuh menerima 25% lebih banyak Total DMG dan Fire DMG dari karakter yang dilindungi oleh Astral Ring Specialization: Bintang Dunia. Selain itu, dalam status Astral Ring Charging, semua anggota tim dengan tag Domain Resonance memberikan 20% lebih banyak Total DMG.
                Saat Astral Ring Specialization: Bintang Dunia atau Spesialisasi Cincin Astral: Wheel of Destiny diaktifkan, anggota tim lain memberikan 33% lebih banyak Elemental DMG, dan Crit Rate tim meningkat 30%.\r\n
                Total Max Stats:
                HP: 1195 ATK: 173 DEF: 400 CRT: 22 SP: 0
                ",
                'source' => "
                Events
                Limited/Rotating Supplies",
                'image' => "A Forged Light set.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
