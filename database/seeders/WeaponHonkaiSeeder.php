<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponHonkaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weapon_honkais')->insert([
            [
                'name' => "Falcon Flare: FINAL",
                'type' => "Canon",
                'rarity' => "5star",
                'detail' =>
                "Rising Frostwings\r\n
                Meriam yang terisi daya. Urutan pertama: Tembakan tunggal. Urutan kedua: Tembakan ganda yang diberdayakan. Urutan ketiga: Tembakan tiga kali lipat bertenaga super. Total DMG meningkat 32,1% (40,0% pada 6★). Ice DMG yang diberikan ke semua target di lapangan meningkat 16,1% (20,0% pada 6★) selama 10 detik saat QTE memberikan DMG. Tambahan 10 detik ditambahkan jika Ultimate digunakan selama waktu ini, maksimal 1 kali. (tidak dapat ditumpuk).\r\n
                Collapse Quill\r\n
                [SP: 0] [CD: 16 detik] Mengisi daya ke arah joystick dan memanggil senjata untuk menembakkan bola energi, menghasilkan 400% Ice AoE DMG. Setelah melewati Silverwing: N-EX, bola energi menjadi bertenaga dan menghasilkan 400% Ice DMG pada tumbukan dan memicu Lubang Hitam kecil, terus menarik musuh di dekatnya untuk menghasilkan 30 x 6,1% (10,0% pada 6★) Ice DMG yang diikuti oleh ledakan yang menghasilkan 421,4% (500,0% pada 6★) Ice DMG. Bola energi yang menyala mengurangi CD Skill Senjata sebesar 2,2 detik saat terkena tumbukan. Saat Silverwing: N-EX digunakan, Skill Senjata dapat langsung diikuti dengan pukulan keempat dari ATK dasar di darat atau pukulan ketiga dari ATK dasar di udara.\r\n
                Zero Sector\r\n
                Ice DMG meningkat sebesar 24,3% (40,0% pada 6★) selama 10 detik saat Skill Senjata atau Ultimate digunakan. Memicunya lagi akan mengatur ulang durasinya. Saat Silverwing: N-EX digunakan, Ice DMG yang diberikan oleh bola energi yang melewati penghalang hamburan akan meningkat 24,3% (40,0% pada 6★).",
                'stats' => "300 ATK \r\n 17 CRT",
                'source' => "Foundry",
                'image' => "Falcon Flare FINAL.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
//2


            [
                'name' => "Whisper of the Past: Sonnet",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "Crystalline Seed \r\n
                [SP: 0][CD: 0] Bidikan (hingga 3 detik) dan tembakkan panah untuk menimbulkan 671,4% (750,0% pada 6★) ATK DMG Fisik dan menimbulkan ledakan. Ledakan tersebut mengakibatkan 100,0% ATK DMG Fisik ke musuh di sekitar dan menghasilkan medan kekuatan kristal yang bertahan selama 5 d, mengurangi Kecepatan Gerak musuh di dalamnya sebesar 70%. Menekan titik lemah akan mengakibatkan 771,4% (850,0% pada 6★) DMG ke target, membuat ledakan menimbulkan 50% ATK bonus DMG Fisik, dan melumpuhkan musuh dalam radius ledakan selama 1 d. Bonus perlengkapan Miss Pink Elf♪: Jika target membawa Benih Kristal, ledakannya akan menyebarkan benih ke musuh di sekitarnya. CD Senjata Aktif dan waktu pengisiannya bergantung pada mode pemotretan. \r\n
                Tender Ode \r\n
                Charged ATKs menyebabkan 16% (20% pada 6★) bonus DMG Fisik. Menggunakan Senjata Serangan Aktif atau Penuh meningkatkan Crit DMG sebesar 22,1% (30,0% pada 6★) selama 3 detik. Memicunya lagi akan mengatur ulang durasinya. \r\n
                Crystalline Spikes \r\n
                Wielder menimbulkan 9,5% (15,0% pada 6★) bonus Total DMG. Banyak lonjakan yang dihasilkan 1 detik setelah medan gaya kristal tercipta. Paku tersebut menimbulkan 182,1% (300,0% pada 6★) ATK Physical DMG ke musuh dalam jangkauan.",
                'stats' => "284 ATK \r\n 28 CRT",
                'source' => "Foundry",
                'image' => "Whisper_of_the_Past_-_Sonnet_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //3
            [
                'name' => "Call of Crescent",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Dark Wings \r\n
                [SP: 0][CD: 0] Gunakan untuk membidik dan menembak (durasi membidik maksimal: 3 detik), menimbulkan 270,3% (450,0% pada 5★) ATK Physical DMG. Menyerang titik lemah musuh akan menimbulkan ledakan yang menimbulkan 360,4% (600,0% pada 5★) ATK Physical DMG. Jenis DMG akan otomatis beradaptasi dengan penggunanya (urutan prioritas: Api > Es > Petir > Fisik). CD aktif senjata dan waktu pengisian daya didasarkan pada mode menembak. \r\n
                Nocturnal Etamine \r\n
                Charged ATKs deal 16% (20% at 6★) bonus Physical DMG. Using a Weapon Active or Charged ATK boosts Crit DMG by 22.1% (30.0% at 6★) for 3s. Triggering it again resets the duration. \r\n
                ",
                'stats' => "179 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Call_of_Crescent_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //4
            [
                'name' => "Cerulean Flare",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Particle Arc \r\n
                [SP: 0][CD: 0] Gunakan untuk membidik dan menembak (durasi membidik maksimal: 3 detik), menghasilkan 440,2% (600,0% pada 5★) ATK Physical DMG. Memukul titik lemah musuh menghasilkan 560,4% (800,0% pada 5★) ATK DMG Fisik dan menghabiskan 30 SP (jika SP di atas 30) untuk menjatuhkan 1 Paket SP di dekatnya. Mengambil SP Pack akan memulihkan 15 SP untuk tim. CD aktif senjata dan waktu pengisian daya didasarkan pada mode menembak. \r\n
                Magnetic Field Pulse \r\n
                Total DMG Tim meningkat sebesar 3,6% (6,0% pada 5★) (tidak dapat ditumpuk). Saat masuk, pengguna memulihkan 30 SP. CD: 60an. \r\n
                ",
                'stats' => "182 ATK \r\n 6 CRT",
                'source' => "Event \r\n Limited/Rotating Supplies",
                'image' => "Cerulean_Flare_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //5
            [
                'name' => "Mitternachts Waltz",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Arrows of Verurteilung \r\n
                [SP: 0][CD: 0] Gunakan untuk membidik dan menembak (durasi membidik maksimal: 3 detik), menimbulkan 570,1% (650,0% pada 5★) ATK Lightning DMG. Menyerang titik lemah musuh akan menimbulkan ledakan yang menimbulkan 120,1% (200,0% pada 5★) ATK Lightning DMG. CD aktif senjata dan waktu pengisian daya didasarkan pada mode menembak. \r\n
                Overture of Nightfall \r\n
                DMG Lightning Tim meningkat sebesar 9,0% (15,0% pada 5★) (tidak dapat ditumpuk). Senjata aktif menandai musuh yang terkena serangan selama 10 detik dan membuat mereka menerima 75% (125,0% pada 5★) ATK bonus Lightning DMG. Maksimal 30 kali (CD: 0,1 detik). Menandai CD: 16 detik. \r\n
                ",
                'stats' => "182 ATK \r\n 11 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Mitternachts_Waltz_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //6
            [
                'name' => "Obscuring Wing",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Arrows of Phantom \r\n
                [SP: 0][CD: 0] Bidik hingga 3 detik dan tembakkan panah untuk menimbulkan 410,4% (650,0% pada 5★) ATK Fire DMG. Menekan titik lemah akan mengakibatkan 470,4% (750% pada 5★) ATK Fire DMG dan menciptakan ledakan yang menghasilkan 100% ATK bonus Fire DMG (dianggap sebagai DMG titik lemah). Sebuah pukulan memberikan 3 tagihan kepada setiap rekan satu tim. Dalam 4 detik berikutnya, isi serangan berikutnya dari pengguna memerlukan 1 muatan untuk mengakibatkan 12,0% (20,0% pada 5★) bonus Fire DMG. CD: 6 detik. CD Skill dan durasi pengisian ditentukan oleh gaya menembak pengguna. \r\n
                Evening Haze \r\n
                Wielder menimbulkan 13,0% (25,0% pada 5★) bonus Total DMG. Tim menimbulkan 12,0% (20,0% pada 5★) bonus Fire DMG. \r\n
                ",
                'stats' => "185 ATK \r\n 10 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Obscuring_Wing_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //7
            [
                'name' => "Whisper of the Past",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Crystalline Thorns \r\n
                [SP: 0][CD: 0] Bidik (hingga 3 detik) dan tembakkan panah untuk menimbulkan 570,1% (650,0% pada 5★) ATK DMG Fisik dan menimbulkan ledakan. Ledakan tersebut mengakibatkan 60,1% (100,0% pada 5★) ATK DMG Fisik ke musuh di sekitar dan menghasilkan medan kekuatan kristal yang bertahan selama 5 detik, mengurangi Kecepatan Gerak musuh di dalamnya sebesar 70%. Menekan titik lemah akan mengakibatkan 670,1% (750,0% pada 5★) DMG ke target, membuat ledakan menimbulkan 50% ATK bonus DMG Fisik, dan melumpuhkan musuh dalam radius ledakan selama 1 detik. Bonus perlengkapan Miss Pink Elf♪: Jika target membawa Benih Kristal, ledakannya akan menyebarkan benih ke musuh di sekitarnya. CD Senjata Aktif dan waktu pengisiannya bergantung pada mode pemotretan. \r\n
                Elven Love Song \r\n
                Serangan yang dibebankan menyebabkan 9% (15% pada 5★) bonus DMG Fisik. Menggunakan Senjata Serangan Aktif atau Penuh meningkatkan Crit DMG sebesar 12,0% (20,0% pada 5★) selama 3 detik. Memicunya lagi akan mengatur ulang durasinya. \r\n
                ",
                'stats' => "182 ATK \r\n 11 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Whisper_of_the_Past_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //8
            [
                'name' => "Light String",
                'type' => "Bow",
                'rarity' => "2star",
                'detail' =>
                "Rapid Shot \r\n
                [SP: 0][CD: 0] Gunakan untuk membidik dan menembak (durasi membidik maksimal: 3 detik), menimbulkan 297,5% (450,0% pada 3★) ATK Physical DMG. Menyerang titik lemah musuh akan menimbulkan ledakan yang menimbulkan 497,5% (650,0% pada 3★) ATK Physical DMG. CD aktif senjata dan waktu pengisian daya didasarkan pada mode menembak. \r\n
                ",
                'stats' => "80 ATK \r\n 4 CRT",
                'source' => "Story & Open World \r\n Default Gear",
                'image' => "Light_String_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //9
            [
                'name' => "Briareus EX",
                'type' => "Cannon",
                'rarity' => "5star",
                'detail' =>
                "Gigantomachy \r\n
                [SP: 0][CD: 30 detik] Menciptakan bidang ruang-waktu 6 detik untuk menimbulkan 8 x 253,5% (450,0% pada 6★) ATK Physical DMG terhadap musuh dalam AOE, menimbulkan Lambat Waktu dan mengganggu mereka (DEF turun sebesar 53,2% [65,0% pada 6★]) selama durasinya. Debuff yang mengganggu akan berlangsung selama 4 detik lagi setelah bidang berakhir. Selama senjata aktif, pengguna tetap tak terkalahkan dan dapat dimatikan tanpa mengganggu penyaluran medan. Setelah senjata aktif digunakan, senjata tersebut tidak dapat digunakan lagi oleh pengguna lain dalam waktu 30 detik berikutnya. \r\n
                Hundred Hands \r\n
                Melakukan serangan tertentu akan mengubah mode serangan senjata, dan setiap peralihan memberikan 1 tumpukan peningkatan selama 40 detik (maks 10 tumpukan; proses berikutnya menyegarkan durasinya). Setiap tumpukan memberi Valkyrie 1,82% (3,00% pada 6★) Total Pengurangan DMG, 1,22% (2,00% pada 6★) bonus Crit Rate, dan 2% Kecepatan Bergerak.
                Herrscher of Reason: dipicu oleh Charged ATK; urutan peralihan: rudal, meriam, dan laser; setiap saklar memulihkan 2 SP.
                Black Nucleus: dipicu oleh Charged ATK urutan ke-3; urutan peralihan: Rudal Cluster Ganda, Rudal Cluster Ganda, dan laser khusus; setiap saklar memulihkan 3.0 (5.0 pada 6★) SP.
                Haxxor Bunny: Dipicu oleh Charged ATK; Urutan peralihan: rudal, meriam, laser; setiap saklar mengembalikan 3.0 (5.0 pada 6★) SP; tipe ATK Khusus setiap drone mengikuti mode senjata saat ini ketika dipanggil.
                Lainnya: dipicu oleh Charged ATK urutan ke-3; urutan peralihan: Rudal Cluster Ganda, Autocannon, dan laser khusus; setiap saklar memulihkan 3.0 (5.0 pada 6★) SP. \r\n
                Fifty Heads \r\n
                Meningkatkan Kecepatan Serangan Valkyrie sebesar 25%. Senjata ini dianggap sebagai meriam, rudal, dan tembakan cepat untuk bonus jenis senjata. Pengguna dari tipe yang berbeda memiliki bonus yang berbeda
                MECH: 12,9% (16,0% pada 6★) total bonus DMG.
                BIO: 16,1% (20,0% pada 6★) bonus DMG Fisik.
                PSY: 16,1% (20,0% pada 6★) bonus Kecepatan Serangan.
                QUA dan IMG: 18,7% (25,0% pada 6★) bonus Elemental DMG.",
                'stats' => "272 ATK \r\n 29 CRT",
                'source' => "Foundry",
                'image' => "Briareus_EX_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //10
            [
                'name' => "Domain of Revelation",
                'type' => "Cannon",
                'rarity' => "5star",
                'detail' =>
                "Divine Masterplan \r\n
                Meriam bermuatan.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Wielder menimbulkan 37,1% (45,0% pada 6★) bonus Ice DMG.
                Bonus perlengkapan Herrscher of Reason: Memicu skill Ultimate Evasion menciptakan 3 senjata hover dan masing-masing menimbulkan 3 x 44,28% (60,0% pada 6★) ATK Ice DMG. \r\n
                Structural Truth \r\n
                [SP: 0][CD: 20 detik] Melepaskan serangan matriks konstruktor yang menimbulkan 3 x 560,7% (600,0% pada 6★) ATK Ice DMG. Serangan terakhir membekukan musuh selama 5 d dan menimbulkan 10 Rime Trauma. Mengucapkan keterampilan akan meningkatkan Total DMG pengguna sebesar 46,1% (50,0% pada 6★) selama 7 d.
                Bonus perlengkapan Herrscher of Reason: Skill aktif membuat musuh Teranalisis selama 7 detik dan memulihkan 180 Konstruktyom dalam 3 detik. \r\n
                Total Analysis \r\n
                Charged and Ultimate ATKs deal 22.1% (30.0% at 6★) bonus Total DMG.
                Herrscher of Reason equip bonus: Charged ATKs restore 3.0 SP in non-bike mode. ",
                'stats' => "283 ATK \r\n 18 CRT",
                'source' => "Foundry",
                'image' => "Domain_of_Revelation_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //11
            [
                'name' => "Star Destroyer 19C-X",
                'type' => "Cannon",
                'rarity' => "5star",
                'detail' =>
                "Total Coverage \r\n
                [SP: 0][CD: 16 detik] Mengisi daya untuk memasuki mode rentetan dan melepaskan hingga 8 Serangan yang Dibebankan; setiap Charged ATK menembakkan 9 peluru dan setiap peluru menimbulkan 14,1% (22,0% pada 6★) ATK Physical DMG.
                Jika digunakan oleh Black Nucleus, dia dapat membidik dalam tampilan dari atas dengan menyeret tombol; saat dia menggunakan senjata aktif dalam Invisibility, Crit Rate-nya meningkat sebesar 24,3% (40,0% pada 6★) dan CD aktif senjata berkurang 4,4 d (6,0 d pada 6★). \r\n
                Shockwave Missiles \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. DMG yang diberikan sedikit berkurang jika mengenai target yang sama lagi.
                1 tumpukan: 2 rudal
                2 tumpukan: 6 rudal
                3 tumpukan: 13 rudal
                Dalam mode rentetan, Crit DMG pengguna meningkat sebesar 44,3% (60,0% pada 6★) ketika jarak target kurang dari 5 meter. \r\n
                Polarized Munitions \r\n
                Dalam mode rentetan, Total DMG pengguna meningkat sebesar 27,4% (40,0% pada 6★), dan setiap tembakan meningkatkan DMG Fisik semua tembakan berikutnya sebesar 5,5% (8,0% pada 6★). Efek ini dapat ditumpuk dan akan dihilangkan ketika mode rentetan berakhir. ",
                'stats' => "275 ATK \r\n 40 CRT",
                'source' => "Foundry",
                'image' => "Star_Destroyer_19C-X_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //12
            [
                'name' => "Tower of the Past: Silk Ladder",
                'type' => "Cannon",
                'rarity' => "5star",
                'detail' =>
                "Inceptive Helix \r\n
                Meriam bermuatan. Urutan ke-1: Tembakan tunggal. Urutan ke-2: Tembakan ganda yang diberdayakan. Urutan ke-3: Tembakan rangkap tiga berkekuatan super. Total DMG meningkat sebesar 8,9% (12,0% pada 6★). Saat pengguna mengenai musuh, musuh memasuki status Terkunci selama 15,0 detik. Memicunya lagi akan mengatur ulang durasinya. Musuh terkena 30% Kecepatan Gerakan lebih lambat dan menerima 8,9% (12,0% pada 6★) lebih banyak DMG Api dari pengguna dalam kondisi Terkunci. \r\n
                Purgatory Rage \r\n
                [SP: 0][CD: 20 detik]  Call for long-ranged support that fires cluster bombs at enemies ahead, dealing 10 × 84.3% (100.0% at 6★) ATK of Fire DMG. Helical Contraption equip bonus: Entering or switching from Weapon Mode directly triggers the long-ranged support. CD: 7.0s. In burst mode, Weapon Active becomes a shot that penetrates and gathers enemies in front, dealing 1,064.2% (1,300.0% at 6★) + 6 × 50% ATK of Fire DMG.  \r\n
                Twisted Power \r\n
                Ultimate dan serangan dalam mode burst menimbulkan 6,1% (10,0% pada 6★) bonus Fire DMG ke musuh dalam keadaan Terkunci. Bonus perlengkapan Helical Contraption: Dalam mode burst, Total DMG yang diberikan kepada musuh dalam keadaan Terkunci meningkat sebesar 11,1% (15,0% pada 6★) dan setiap serangan menghasilkan tambahan 48,6% (80,0% pada 6★) ATK Fire DMG. CD: 1 detik. ",
                'stats' => "305 ATK \r\n 12 CRT",
                'source' => "Foundry",
                'image' => "Tower_of_the_Past_-_Silk_Ladder_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //13
            [
                'name' => "5th Sacred Relic",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Sacred Cannon \r\n
                Charged Cannon..
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Saat Jumlah Pukulan Kombo melebihi 15, serangan karakter memperoleh 12% (20% pada 5★) DMG Fisik.\r\n
                Cluster Bomb \r\n
                Peluru meledak menjadi bom tambahan, dengan masing-masing rangkaian muatan menghasilkan 2, 4, dan 9 bom tambahan. Tiap bomlet menimbulkan 22% (30% pada 5★) ATK Physical DMG. \r\n
                ",
                'stats' => "161 ATK \r\n 41 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "5th_Sacred_Relic_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //14
            [
                'name' => "Book of Fuxi (Cannon)",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Samsara \r\n
                Melawan musuh yang tersulut, terganggu, diperlambat, atau dibekukan, memperoleh 13,6% (20,0% pada 5★) pada Pengganda DMG Total.\r\n
                Three Elements \r\n
                [SP: 6] [CD: 8 detik] Senjata dapat mengubah dan beralih antara 3 bentuk elemen: api, petir, dan es, dan menggunakan elemen tersebut untuk menghancurkan musuh.
                Api: Serangan bermuatan meluncurkan bola api yang menyulut musuh saat terkena, menimbulkan 272 (400 pada 5★) Fire DMG setiap 0,5 detik selama 3 detik.
                Petir: Serangan bermuatan meluncurkan bola petir yang dapat meledak. Pukulan mempunyai peluang 11,0% (15,0% pada 5★) untuk menimbulkan 150% ATK tambahan Lightning DMG dan mengganggu musuh, mengurangi DEF mereka sebanyak 60% selama 3 detik.
                Es: Meluncurkan kabut es terus menerus. Pukulan akan memperlambat Kecepatan Gerak dan Kecepatan Serangan musuh sebesar 50% selama 3 detik, dan mempunyai peluang 1,2% (2,0% pada 5★) untuk membekukan musuh selama 3 detik. \r\n
                ",
                'stats' => "173 ATK \r\n 24 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Book_of_Fuxi_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //15
            [
                'name' => "Briareus PRI",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Typhon - Cluster Missiles \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. Waktu pengisian daya lebih lama. DMG sedikit berkurang ketika mengenai target yang sama beberapa kali.
                Urutan ke-1: 3 rudal.
                Urutan ke-2: 7 rudal.
                Urutan ke-3: 15 rudal.
                Serangan rudal mempunyai peluang 6% (10% pada 5★) untuk melumpuhkan/melumpuhkan/membekukan target selama 1 d (2 d pada 5★) dan menimbulkan 800 (1.333 pada 5★) DMG Api/Petir/Es tambahan.\r\n
                Time Trap \r\n
                [SP: 18] [CD: 24 detik] Merobek bidang Jebakan Waktu di depan karakter. Musuh dalam AOE mengalami Time Slow dan 30% (50% pada 5★) mengurangi DEF selama 5,08 d (6,20 d pada 5★). \r\n
                ",
                'stats' => "190 ATK \r\n 0 CRT",
                'source' => "Foundry \r\nExchange House\r\nLimited/Rotating Supplies",
                'image' => "Briareus_PRI_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //16
            [
                'name' => "Chiyou Cannon",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Ice Booster - Super Cannon \r\n
                Meriam Super. Waktu pengisian daya yang sangat lama. Serangan dasar memperoleh 100% DMG Fisik.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Untuk setiap musuh yang membeku, percepat kecepatan pengisian daya sebesar 16,0% (20,0% pada 5★). Menumpuk hingga 10 kali.\r\n
                Dark Ice \r\n
                [SP: 25] [CD: 20 detik] Meluncurkan gelombang kejut es, memenjarakan dan membekukan musuh di sekitar di Dark Ice. Musuh yang dipenjara di Dark Ice menerima 384 (960 pada 5★) Ice DMG setiap 0,9 d. Caster juga disembuhkan sebesar 60 (100 pada 5★) HP. Es Gelap berlangsung selama 4 detik. \r\n
                ",
                'stats' => "187 ATK \r\n 4 CRT",
                'source' => "Exchange House\r\nLimited/Rotating Supplies",
                'image' => "Chiyou_Cannon_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //17
            [
                'name' => "Core Evoker Delta",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "EM Beam \r\n
                Senjata tembakan cepat yang mengakibatkan DMG terus menerus ke sasaran di sepanjang garis lurus tembakan. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat menerima lebih banyak DMG. DMG dimaksimalkan pada jarak 3 meter. Serangan terhadap musuh yang lumpuh memperoleh 11% (16% pada 5★) Total Pengganda DMG.\r\n
                EM Overload \r\n
                [SP: 20] [CD: 20 detik] Menembak bola energi yang bergerak lambat dan menyerang musuh di sepanjang jalurnya beberapa kali untuk menimbulkan 228 (640 pada 5★) Lightning DMG per pukulan dan melumpuhkan musuh selama 2,72 d (3,60 d pada 5★).\r\n
                ",
                'stats' => "179 ATK \r\n 15 CRT",
                'source' => "Exchange House\r\nLimited/Rotating Supplies",
                'image' => "Core_Evoker_Delta_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //18
            [
                'name' => "Crusher Bunny 19C",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Sector Lockdown \r\n
                [SP: 0] [CD: 20 detik] Senjata yang diproyeksikan menembak target selama 2,5 detik, menimbulkan DMG Es setara dengan 24,0% (40,0% pada 5★) ATK setiap 0,1 detik, menambah 1 Pukulan Kombo, dan Membekukan musuh selama 2 detik. Entitas yang dipanggil oleh tim dan host memperoleh 15,8% (27,0% pada 5★) bonus Ice DMG selama 15 detik (efek ini tidak dapat ditumpuk). Perlengkapan khusus Haxxor Bunny: Interval serangan drone berkurang 0,4 detik selama 3,5 detik. Ultimate yang dipicu oleh entri QTE akan diaktifkan secara otomatis jika host belum melakukan cast aktif dalam 20 detik\r\n
                Cluster Tactic \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. Waktu pengisian daya lebih lama. DMG sedikit berkurang ketika mengenai target yang sama beberapa kali. Urutan ke-1: 3 rudal. Urutan ke-2: 7 rudal. Urutan ke-3: 15 rudal. Meningkatkan Semua DMG Semua Elemen tim sebesar 7,2% (12,0% pada 5★) dan Semua DMG Semua Elemen entitas yang dipanggil tuan rumah sebesar 14,6% (25,0% pada 5★) (efek ini tidak dapat ditumpuk).\r\n
                ",
                'stats' => "186 ATK \r\n 11 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Crusher_Bunny_19C_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //19
            [
                'name' => "Cyclops PRI",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Polyphemus - Super Gun \r\n
                Meriam Super. Waktu pengisian daya yang sangat lama. Serangan dasar memperoleh 100% DMG Fisik.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Saat musuh di medan perang tidak lebih dari 2, memperoleh 12% (20% pada 5★) Total Pengganda DMG.\r\n
                Death Explosion \r\n
                Menyerang musuh akan menandainya dengan status Ledakan Maut selama 5 detik. Saat musuh yang ditandai terbunuh dalam durasi ini, ia akan meledak dan menimbulkan 320% (400% pada 5★) ATK DMG Fisik ke musuh di sekitar. Saat tembakan rangkaian muatan ke-3 mengenai musuh, menimbulkan 120% (200% pada 5★) ATK DMG Fisik ke target dan musuh di sekitar. CD: 5 detik.\r\n
                ",
                'stats' => "156 ATK \r\n 28 CRT",
                'source' => "Foundry",
                'image' => "Cyclops_PRI_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //20
            [
                'name' => "Dark Star",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Starblast \r\n
                Meriam bermuatan. Urutan ke-1: Tembakan tunggal. Urutan ke-2: Tembakan ganda yang diberdayakan. Urutan ke-3: Tembakan rangkap tiga berkekuatan super. Tim menimbulkan 8,6% (15,0% pada 5★) bonus DMG Fisik kepada musuh yang mengalami pendarahan (tidak dapat ditumpuk).\r\n
                Umbral Vision \r\n
                [SP: 12] [CD: 25 detik]Menyerang target untuk menimbulkan 240,2% (400,0% pada 5★) ATK DMG Fisik dalam jarak 4m dan menciptakan Zona Umbral di sekitar target selama 7 d, menimbulkan 30% ATK DMG Fisik per detik kepada mereka dan mengeluarkan darah mereka untuk selanjutnya menimbulkan 8,6% (15,0% pada 5★) ATK DMG Fisik per 0,3 d selama 5 d (dapat disegarkan). Musuh yang terbunuh di dalam zona menghasilkan 240,2% (400,0% pada 5★) ATK Physical DMG di area luas dan memperluas jangkauan zona sebesar 1m (maks 6m).\r\n
                ",
                'stats' => "182 ATK \r\n 12 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Dark_Star_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //21
            [
                'name' => "Devourer",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Laser \r\n
                Senjata tembakan cepat yang mengakibatkan DMG terus menerus ke sasaran di sepanjang garis lurus tembakan. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat akan menerima DMG lebih banyak, dengan DMG maksimal pada jarak 3 meter.\r\n
                Devouring Impact \r\n
                [SP: 25] [CD: 20 detik] Membanting tanah dengan lengan robot untuk melepaskan gelombang dampak psikis yang menghasilkan banyak ledakan. Setiap ledakan mengakibatkan 67 (214 pada 5★) Fire DMG dan menyulut musuh, menimbulkan 45 (134 pada 5★) Fire DMG setiap 0,5 detik selama 4 detik. Memberikan peningkatan Kecepatan Gerak sementara setelah menggunakan skill.\r\n
                ",
                'stats' => "142 ATK \r\n 12 CRT",
                'source' => "Story & opne World",
                'image' => "Devourer_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //22
            [
                'name' => "Eye of the Collapse",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Collapse Threshold \r\n
                [SP: 25] [CD: 20 detik] Membuat medan kekuatan runtuh dan meluncurkan serangan runtuh ke musuh dalam jangkauan, menimbulkan 460,4% (700,0% pada 5★) ATK DMG Fisik, menimbulkan Runtuh pada musuh QUA, dan membuat musuh dalam jangkauan menerima 5,2% (10,0% pada 5★ ) bonus Total DMG selama 18 d. Musuh dalam jangkauan ditandai dengan Peluruhan, dan jika mereka juga dalam kondisi Runtuh, Quantum Burst akan terpicu untuk menimbulkan 460,4% (700,0% pada 5★) ATK Physical DMG ke musuh yang ditandai.\r\n
                Umbral Vision\r\n
                Senjata tembakan cepat yang menghantarkan DMG berkelanjutan ke target di sepanjang garis lurus tembakan. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat menerima lebih banyak DMG (maksimum pada jarak 10 meter atau kurang). Tim menimbulkan 7,8% (15,0% pada 5★) bonus Total DMG kepada musuh yang Runtuh.\r\n
                ",
                'stats' => "175 ATK \r\n 18 CRT",
                'source' => "Event \r\n Limited/Rotating Supplies",
                'image' => "Eye_of_the_Collapse_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //23
            [
                'name' => "Falcon Flare 0019",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Cobalt Ray \r\n
                Meriam bermuatan. Urutan ke-1: Tembakan tunggal. Urutan ke-2: Tembakan ganda yang diberdayakan. Urutan ke-3: Tembakan rangkap tiga berkekuatan super. Total DMG meningkat sebesar 30%. DMG Es yang diberikan ke semua target di lapangan meningkat 15% selama 10 d saat QTE menimbulkan DMG. Tambahan 10 detik jika Ultimate digunakan selama waktu ini, maksimal 1 kali. (tidak dapat ditumpuk).\r\n
                Charged Blast\r\n
                [SP: 0] [CD: 16 detik] Menyerang ke arah joystick dan memanggil senjata untuk menembakkan bola energi, menimbulkan 400% Ice AoE DMG. Setelah melewati penghalang pencar Silverwing: N-EX, bola energi menjadi bertenaga dan menimbulkan 400% Ice DMG saat terkena dampak dan memicu Lubang Hitam kecil, menarik musuh di sekitar dan meledak untuk menimbulkan 400% Ice DMG. Bola energi yang diperkuat mengurangi CD Keterampilan Senjata sebesar 200% saat terkena benturan. Ketika Silverwing: N-EX digunakan, Skill Senjata dapat langsung diikuti dengan pukulan keempat dari ATK dasar darat atau pukulan ketiga dari ATK udara dasar.\r\n
                ",
                'stats' => "185 ATK \r\n 10 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Falcon_Flare_0019_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //24
            [
                'name' => "Flint Sanada",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Erupt - Multiple Cluster Missiles \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. Waktu pengisian daya lebih lama. DMG sedikit berkurang ketika mengenai target yang sama beberapa kali.
                Urutan ke-1: 3 rudal.
                Urutan ke-2: 7 rudal.
                Urutan ke-3: 15 rudal.
                Serangan rudal menimbulkan 27 (56 pada 5★) Fire DMG tambahan dan memicu ledakan tertunda untuk selanjutnya menimbulkan 274 (490 pada 5★) AOE Fire DMG.\r\n
                Rapid Shot\r\n
                [SP: 20] [CD: 120 detik] Mendapat 100% Kecepatan Serangan selama 8,01 d (12,00 d pada 5★).\r\n
                ",
                'stats' => "175 ATK \r\n 21 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Flint_Sanada_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //25
            [
                'name' => "Hand of Tyr",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "God Cannon \r\n
                Meriam yang Dibebankan.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Serangan dasar dan serangan bermuatan memperoleh 18% (30% pada 5★) DMG Fisik kepada musuh dengan Elite Shield yang rusak.\r\n
                Rending Shrapnel\r\n
                [SP: 19] [CD: 9 detik] Secara instan melepaskan rangkaian pemboman bermuatan 3 pukulan. Pengeboman menyebabkan pendarahan pada musuh yang terkena dan mengakibatkan 143 (315 pada 5★) DMG Fisik setiap 0,5 detik selama 7 detik.\r\n
                ",
                'stats' => "179 ATK \r\n 15 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Hand_of_Tyr_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //26
            [
                'name' => "Hand of Ymir",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Encroaching Fire \r\n
                Meriam yang Dibebankan.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                DMG Jarak Jauh meningkat seiring jangkauan: serangan memperoleh 2% (4% pada 5★) DMG Fisik untuk setiap jarak 1 meter ke target. Menumpuk hingga 8 kali.\r\n
                Frost Hand\r\n
                [SP: 18] [CD: 14 detik] Melepaskan gelombang kejut AOE yang besar di depan karakter, menjatuhkan musuh ke udara dan memperlambat Kecepatan Gerak dan Kecepatan Serangan mereka sebesar 46% (70% pada 5★) selama 3 detik. Gelombang kejut menimbulkan 12 x 28% (40% pada 5★) ATK Physical DMG. Karakter memperoleh Kecepatan Gerak dan Kecepatan Serangan 60% lebih cepat selama 5 detik setelah menggunakan skill aktif.\r\n
                ",
                'stats' => "187 ATK \r\n 4 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Hand_of_Ymir_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //27
            [
                'name' => "Hellfire Type-III",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Icebreaker Cannon \r\n
                Meriam ringan dengan waktu pengisian singkat. Serangan dasar memiliki Total Pengganda DMG 30% lebih sedikit.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Menyerang musuh dengan kecepatan gerakan yang diperlambat atau dibekukan, memperoleh 12% (20% pada 5★) Total Pengganda DMG.\r\n
                Purgatory\r\n
                [SP: 49] [CD: 36 detik] Menembakkan api, menimbulkan 12 x 28% (60% pada 5★) ATK Fire DMG dan 12 x 28% (60% pada 5★) ATK Physical DMG kepada musuh di depan.\r\n
                ",
                'stats' => "181 ATK \r\n 12 CRT",
                'source' => "Foundry",
                'image' => "Hellfire_Type-III_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //28
             [
                'name' => "Key of Reason",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Universal Blueprint \r\n
                Meriam bermuatan.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Wielder menimbulkan 22% (30% pada 5★) lebih banyak Ice DMG.\r\n
                Logical Construct\r\n
                [SP: 5] [CD: 25 detik] Meluncurkan ATK senjata konstruktor yang menghasilkan 340,0%+9*53,0+300% (500,0%+9*85,0+300% pada 5★) ATK Ice DMG. Pukulan terakhir membekukan musuh selama 3,6 d (6,0 d pada 5★). Setelah digunakan, ATK pengguna memperoleh 35% Total Pengganda DMG selama 7 d. Bonus perlengkapan Herrscher of Reason: Keterampilan aktif menimbulkan debuff yang dianalisis selama 7 detik pada musuh. Mengeluarkan Ultimate akan memberikan 5 SP.\r\n
                ",
                'stats' => "187 ATK \r\n 11 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Key_of_Reason_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //29
             [
                'name' => "Lurker",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Cannon \r\n
                Pengecasan Meriam.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.\r\n
                One Punch\r\n
                [SP: 18] [CD: 12 detik] Menghancurkan tanah beberapa kali menggunakan lengan robot, menghasilkan gelombang seismik yang menjatuhkan musuh, mengakibatkan 94% ATK DMG Fisik pada setiap pukulan, dan melumpuhkan musuh selama 1,81 detik. Memberikan peningkatan Kecepatan Gerak sementara setelah menggunakan skill.\r\n
                ",
                'stats' => "139 ATK \r\n 16 CRT",
                'source' => "Story & Open World",
                'image' => "Lurker_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //30
            [
                'name' => "M134 Vulcan Minigun",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Gatling Gun \r\n
                Menghancurkan tanah beberapa kali menggunakan lengan robot, menghasilkan gelombang seismik yang menjatuhkan musuh, mengakibatkan 94% ATK DMG Fisik pada setiap pukulan, dan melumpuhkan musuh selama 1,81 detik. Memberikan peningkatan Kecepatan Gerak sementara setelah menggunakan skill.\r\n
                Inferno Breathr \r\n
                [SP: 5] [CD: 15 detik] Pengguna memperoleh 5% (10% pada 5★) Tingkat Kritik dan 13% (25% pada 5★) DMG Kritik selama 10 d. Serangan tidak lagi menyebabkan panas berlebih. Namun, pengguna kehilangan HP setara dengan 2% Max HP per detik.\r\n
                ",
                'stats' => "179 ATK \r\n 22 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "M134_Vulcan_Minigun_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //31
            [
                'name' => "Project Bunny 19C",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Anti-Material Beam \r\n
                Senjata tembakan cepat yang mengakibatkan DMG terus menerus ke sasaran di sepanjang garis lurus tembakan. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat menerima lebih banyak DMG. DMG dimaksimalkan pada jarak 3 meter. Serangan terhadap gerombolan musuh memperoleh 36% (60% pada 5★) Total Pengganda DMG.\r\n
                Quantum Outbreak \r\n
                Membunuh musuh mempunyai peluang 36% (60% pada 5★) bagi karakter untuk memperoleh 55% (75% pada 5★) DMG Fisik selama 3 detik.\r\n
                ",
                'stats' => "183 ATK \r\n 10 CRT",
                'source' => "Limited/Rotating Supplies \r\n Exchange House",
                'image' => "Project_Bunny_19C_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //32
            [
                'name' => "Quantum Destroyer Type-II",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Quantum Beam \r\n
                Senjata tembakan cepat yang mengakibatkan DMG terus menerus ke sasaran di sepanjang garis lurus tembakan. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat menerima lebih banyak DMG. DMG dimaksimalkan pada jarak 3 meter. Menyerang musuh yang terkena Time Slow memperoleh 23% (35% pada 5★) Physical DMG.\r\n
                Frozen Dimension \r\n
                [SP: 20] [CD: 20 detik] Membuat lubang hitam untuk menarik musuh masuk dan kemudian berteleportasi ke belakang. Menciptakan Medan Perlambatan yang berlangsung selama 6 detik. Musuh di dalam lapangan akan mengalami 40% (60% pada 5★) Kecepatan Gerakan lebih lambat dan menerima 92 (188 pada 5★) Ice DMG setiap 0,6 detik. Medan Perlambatan ini berlangsung selama 6 detik.\r\n
                ",
                'stats' => "183 ATK \r\n 10 CRT",
                'source' => "Foundry \r\n Limited/Rotating Supplies \r\n Exchange House",
                'image' => "Quantum_Destroyer_Type-II_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //33
            [
                'name' => "Ranger's Laser",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Thermal Laser \r\n
                Menembakkan sinar yang terus menerus memberikan damage pada target sepanjang jalur lurus. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat menerima lebih banyak DMG. DMG dimaksimalkan pada jarak 3 meter. Setelah Ultimate Evasion, setel ulang pengukur panas. Karakter memperoleh 50% Kecepatan Serangan selama 2 d. Efek keterampilan terpicu setiap 14,4 detik (8,0 detik pada 5★).
                [Ranger] Karakter menerima DMG 20% lebih sedikit. Jika rekan satu tim lainnya dilengkapi dengan senjata seri [Ranger], maka Ultimate Evasion juga memulihkan 1 (2 jam 5★) SP.\r\n
                Heat Discharge \r\n
                [SP: 14] [CD: 30 detik] Selama 6 detik berikutnya (11 d pada 5★), serangan karakter memperoleh 7% (12% pada 5★) DMG Fisik namun Kecepatan Geraknya 60% lebih lambat. Buff juga membatalkan pengurangan damage senjata berdasarkan jarak.\r\n
                ",
                'stats' => "151 ATK \r\n 10 CRT",
                'source' => "Story & open World \r\n Events",
                'image' => "Ranger's_Laser_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //34
            [
                'name' => "Star Destroyer 19C",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Shadow Strike Missiles \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. Sedikit mengurangi DMG ketika mengenai target yang sama beberapa kali.
                Urutan ke-1: 2 rudal.
                Urutan ke-2: 5 rudal.
                Urutan ke-3: 11 rudal.
                Setiap misil atau selongsong peluru yang mengenai musuh dari belakang memperoleh 24% (40% pada 5★) Crit DMG, dengan setiap pukulan menimbulkan 200 (400 pada 5★) Fire DMG lebih banyak.\r\n
                Rapid Strike \r\n
                [SP: 25] [CD: 12 detik] Menembakkan 18 peluru meriam secara langsung, masing-masing peluru menimbulkan 55,0% (75,0% pada 5★) ATK DMG Fisik, menjatuhkan musuh ke udara, dan membakar mereka. Musuh yang terbakar akan menerima 264 (600 pada 5★) Fire DMG setiap 0,5 detik selama 4 detik.\r\n
                ",
                'stats' => "180 ATK \r\n 19 CRT",
                'source' => "Foundry \r\n Limited/Rotating Supplies \r\n Exchange House",
                'image' => "Star_Destroyer_19C_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //35
            [
                'name' => "Star Shatterer: Vikrant",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Gravity Plus: Rapid Fire \r\n
                Senjata tembakan cepat yang mengakibatkan DMG terus menerus ke sasaran di sepanjang garis lurus tembakan. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat menerima lebih banyak DMG. DMG dimaksimalkan pada jarak 3 meter. Pengguna memperoleh 8,6% (15,0% pada 5★) HP Maks selama pertarungan. Seluruh tim memperoleh 9% (15,0% pada 5★) Total Pengganda DMG saat menyerang musuh yang lemah.\r\n
                Distortion Field \r\n
                [SP: 21] [CD: 30 detik] Menghasilkan medan selama 7 detik yang menimbulkan 26,0% (50,0% pada 5★) Gerakan Lambat, 94% (150% pada 5★) ATK Physical DMG per detik, dan perlahan menyeret mereka ke tengah lapangan. Jika tidak dilemahkan, musuh juga akan melemah (ATK berkurang 10%) selama 3 detik.\r\n
                ",
                'stats' => "175 ATK \r\n 17 CRT",
                'source' => "Limited/Rotating Supplies \r\n Exchange House",
                'image' => "Star_Shatterer_-_Vikrant_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //36
            [
                'name' => "Star of Eden",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Heavy Cannon \r\n
                Meriam yang diCharge.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Musuh yang terkena tembakan terakhir dari rangkaian serangan ke-3 mempunyai peluang 11,5% (20,0% pada 5★) untuk terkena efek stun selama 2,2 d (3,5 d pada 5★).\r\n
                Lost Paradise \r\n
                Musuh yang terkena tembakan terakhir dari rangkaian serangan ke-3 akan menerima tambahan 343 (600 pada 5★) Physical DMG, dan mengakibatkan 114 (200 pada 5★) Physical DMG kepada musuh di sekitar (tidak termasuk diri sendiri) dalam waktu 0,5 detik.\r\n
                Key of the Devourer \r\n
                Dalam co-op raids, karakter memperoleh 20,0% (40,0% pada 5★) Crit DMG dan 3,0% (5,0% pada 5★) Crit Rate.
                ",
                'stats' => "143 ATK \r\n 19 CRT",
                'source' => "Raids \r\n Events",
                'image' => "Star_of_Eden_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //37
            [
                'name' => "Tower of the Past",
                'type' => "Cannon",
                'rarity' => "4star",
                'detail' =>
                "Three Acts Finale \r\n
                Meriam bermuatan. Urutan ke-1: Tembakan tunggal. Urutan ke-2: Tembakan ganda yang diberdayakan. Urutan ke-3: Tembakan rangkap tiga berkekuatan super. Total DMG meningkat sebesar 5,6% (8,0% pada 5★). Saat pengguna mengenai musuh, musuh memasuki status Terkunci selama 15,0 detik. Memicunya lagi akan mengatur ulang durasinya. Musuh terkena 30% Kecepatan Gerakan lebih lambat dan menerima 5,6% (8,0% pada 5★) lebih banyak DMG Api dari pengguna dalam kondisi Terkunci.\r\n
                Chaotic Babel \r\n
                [SP: 0] [CD: 20 detik] Memanggil dukungan jarak jauh yang menembakkan bom cluster ke musuh di depan, menimbulkan 10 × 56,0% (80,0% pada 5★) ATK Fire DMG. Bonus perlengkapan Helical Contraption: Memasuki atau beralih dari Mode Senjata secara langsung memicu dukungan jarak jauh. CD: 7.0 detik. Dalam mode burst, Senjata Aktif menjadi tembakan yang menembus dan mengumpulkan musuh di depan, menimbulkan 840,2% (1.000,0% pada 5★) + 6 × 50% ATK Fire DMG.\r\n
                ",
                'stats' => "187 ATK \r\n 11 CRT",
                'source' => "Raids \r\n Events",
                'image' => "Tower_of_the_Past_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //38
            [
                'name' => "Ai-chan's Cannon",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Cannon \r\n
                Meriam yang Dibebankan.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.\r\n
                Ai-chan's Prank \r\n
                Pukulan terakhir dari urutan serangan ke-3 mempunyai peluang 42,1% (66,7% pada 4★) untuk menimbulkan salah satu efek berikut secara acak pada target selama 3,54 detik (5,00 detik pada 4★): melemahkan, memperlambat Kecepatan Gerakan, atau meningkatkan Gerakan Kecepatan.\r\n
                ",
                'stats' => "119 ATK \r\n 0 CRT",
                'source' => "Events",
                'image' => "Ai-chan's_Cannon_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //39
            [
                'name' => "Alloy Devourer",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Laser \r\n
                Senjata tembakan cepat yang mengakibatkan DMG terus menerus ke sasaran di sepanjang garis lurus tembakan. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat menerima lebih banyak DMG. DMG dimaksimalkan pada jarak 3 meter.\r\n
                Alloy Devouring Impact \r\n
                [SP: 20] [CD: 15 detik] Lepaskan kejutan psikis menggunakan lengan mekanis yang menghasilkan banyak ledakan. Setiap ledakan menimbulkan 54 (158 pada 4★) Fire DMG.\r\n
                ",
                'stats' => "95 ATK \r\n 7 CRT",
                'source' => "Story & Open World",
                'image' => "Alloy_Devourer_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //40
            [
                'name' => "Alloy Lurker",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Cannon \r\n
                Meriam yang Dicaskan.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.\r\n
                Alloy One Punch \r\n
                [SP: 12] [CD: 9 detik] Menghancurkan tanah menggunakan lengan mekanis, menghasilkan gelombang kejut yang menghantam beberapa kali dan menjatuhkan musuh ke belakang. Setiap pukulan menimbulkan 72% (90% pada 4★) ATK Physical DMG.\r\n
                ",
                'stats' => "93 ATK \r\n 9 CRT",
                'source' => "Story & Open World",
                'image' => "Alloy_Lurker_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //41
            [
                'name' => "Azure Soaker",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Cooling Bubble \r\n
                Meriam di caskan
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Saat serangan Charged ATK tumpukan 3 mengenai musuh, musuh akan mengalami 22,1% (40,0% pada 5★) Perlambatan Gerakan dan Kecepatan Serangan selama 2,3 d (5,0 d pada 5★).\r\n
                Beach Star \r\n
                Menimbulkan 11,1% (20,0% pada 5★) lebih banyak Physical DMG terhadap musuh dengan Gerakan Lambat.\r\n
                ",
                'stats' => "102 ATK \r\n 4 CRT",
                'source' => "Event",
                'image' => "Azure_Soaker_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //42
            [
                'name' => "Cathode Type-07",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Laser \r\n
                Senjata tembakan cepat yang mengakibatkan DMG terus menerus ke sasaran di sepanjang garis lurus tembakan. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat menerima lebih banyak DMG (maksimum pada jarak 10 meter atau kurang).\r\n
                Frost Trail \r\n
                [SP: 7] [CD: 20 detik] Musuh di sekitar akan mengalami 65% lebih lambat Kecepatan Gerak dan Kecepatan Serangan selama 8 detik.\r\n
                ",
                'stats' => "102 ATK \r\n 4 CRT",
                'source' => "Event",
                'image' => "Cathode_Type-07_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //43
            [
                'name' => "Dumpling Wrapper",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Sticky Rice Cannon \r\n
                Meriam ringan dengan waktu pengisian singkat. Serangan dasar memiliki Pengganda DMG Total 30% lebih sedikit.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Musuh yang terkena peluru rangkaian serangan ke-2 dan ke-3 akan mengalami 22% (40% pada 5★) lebih lambat Pergerakan dan Kecepatan Serangan selama 3,4 d (7,0 d pada 5★).\r\n
                Leaf-wrapped Rice \r\n
                Setiap kali ada anggota tim yang menyerang musuh dengan Kecepatan Gerak atau Kecepatan Serangan berkurang, sembuhkan sebesar 11,6 (25,0 pada 5★) HP. Dipicu setiap 5 detik sekali.\r\n
                ",
                'stats' => "101 ATK \r\n 4 CRT",
                'source' => "Event",
                'image' => "Dumpling_Wrapper_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //44
            [
                'name' => "Frost Rain",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Light Artillery \r\n
                Meriam ringan dengan waktu pengisian singkat. Serangan dasar memiliki Pengganda DMG Total 30% lebih sedikit.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.\r\n
                Frosty Jettison \r\n
                Saat diserang, karakter melepaskan ledakan beku yang memperlambat kecepatan Serangan dan Gerakan musuh di sekitar sebesar 70% selama 3,8 d (6,0 d pada 4★). Ledakan beku dapat dipicu setiap 15 detik sekali.\r\n
                ",
                'stats' => "121 ATK \r\n 14 CRT",
                'source' => "Foundry",
                'image' => "Frost_Rain_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //45
            [
                'name' => "Ice Roar",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Heavy Cannon \r\n
                Meriam Berat. Waktu pengisian lebih lama. Serangan dasar memperoleh 50% DMG Fisik.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.\r\n
                Icebound \r\n
                Menyerang musuh mempunyai peluang 29,0% (40,0% pada 4★) untuk membekukannya selama 3 detik. CD: 13,38 detik (9,00 detik pada 4★).\r\n
                ",
                'stats' => "114 ATK \r\n 25 CRT",
                'source' => "Event",
                'image' => "Ice_Roar_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //45
             [
                'name' => "Markov Type A",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Cannon \r\n
                Meriam yang Dicaskan.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.
                Serangan QTE Wielder memperoleh 15,87% (25,00% pada 4★) Physical DMG.\r\n
                Breath of Guren \r\n
                38% (60% pada 4★) peluang untuk menyalakan target, menimbulkan 84 (150 pada 4★) DMG setiap 0,5 detik selama 2,93 d (4,10 d pada 4★).\r\n
                ",
                'stats' => "113 ATK \r\n 28 CRT",
                'source' => "Foundry \r\n Dorm Supply",
                'image' => "Markov_Type_A_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //46
            [
                'name' => "Markov Type C",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Cluster Missile \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. Sedikit mengurangi DMG ketika mengenai target yang sama beberapa kali.
                Urutan ke-1: 2 rudal.
                Urutan ke-2: 5 rudal.
                Urutan ke-3: 11 rudal.\r\n
                Speedy Clockwork \r\n
                Memberdayakan senjata, mempercepat Kecepatan Serangan sebesar 75% selama 4,27 detik.\r\n
                ",
                'stats' => "117 ATK \r\n 21 CRT",
                'source' => "Foundry \r\n Dorm Supply",
                'image' => "Markov_Type_C_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //47
            [
                'name' => "Raider Missiles",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Cluster Missile \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. Sedikit mengurangi DMG ketika mengenai target yang sama beberapa kali.
                Urutan ke-1: 2 rudal.
                Urutan ke-2: 5 rudal.
                Urutan ke-3: 11 rudal.\r\n
                Speedy Retreat \r\n
                [SP: 6] [CD: 15 detik] Mempercepat Kecepatan Gerak karakter sebesar 100% selama 4,54 detik (6,00 detik pada 4★).\r\n
                ",
                'stats' => "117 ATK \r\n 21 CRT",
                'source' => "Foundry \r\n Retired Feature",
                'image' => "Raider_Missiles_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],


             //48
            [
                'name' => "Stellar Tempo",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Cosmic Amplifiers \r\n
                [SP: 11] [CD: 20 detik] Menembakkan sinar yang terus menerus memberikan damage pada target sepanjang jalur lurus. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat akan menerima DMG lebih banyak, dengan DMG maksimal pada jarak 3 meter. Saat dilepaskan, semua Bintang Berkilau di medan perang akan berkilau terang, menimbulkan 111% (200% pada 5★) ATK DMG Fisik (per bintang) ke musuh di sekitar dan mengganggu mereka, mengurangi DEF mereka sebesar 17% (30% pada 5★ ) selama 4,0 detik.
                [Concert Stage ] Saat mengambil Sparkling Star, semua karakter memperoleh 10% Kecepatan Serangan selama 5 d. Efek tidak dapat ditumpuk.\r\n
                Sparkling Star \r\n
                Saat karakter dikerahkan, 1 Bintang Berkilau muncul di dekatnya setiap 3 detik. Sparkling Star bertahan selama 4,5 detik. Saat mengambil Sparkling Star, menimbulkan 111% (200% pada 5★) ATK Physical DMG ke target acak di sekitar dan musuh di sekitarnya.\r\n
                ",
                'stats' => "102 ATK \r\n 4 CRT",
                'source' => "Event",
                'image' => "Stellar_Tempo_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //49
            [
                'name' => "X-01 Azure Eye",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Multiple Cluster Missiles \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. Waktu pengisian daya lebih lama. DMG sedikit berkurang ketika mengenai target yang sama beberapa kali.
                Urutan ke-1: 3 rudal.
                Urutan ke-2: 7 rudal.
                Urutan ke-3: 15 rudal.\r\n
                Frost Stare \r\n
                [SP: 12] [CD: 20 detik] Selama 4,67 detik (6,50 detik pada 4★), serangan karakter memperlambat Kecepatan Gerak dan Kecepatan Serangan musuh sebesar 60% selama 3,5 detik.\r\n
                ",
                'stats' => "122 ATK \r\n 11 CRT",
                'source' => "Event \r\n Foundry",
                'image' => "X-01_Azure_Eye_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //50
            [
                'name' => "Fury Belcher",
                'type' => "Cannon",
                'rarity' => "2star",
                'detail' =>
                "Super Cannon \r\n
                Meriam Super. Waktu pengisian daya yang sangat lama. Serangan dasar memperoleh 100% DMG Fisik.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.\r\n
                ",
                'stats' => "72 ATK \r\n 17 CRT",
                'source' => "Event \r\n Foundry",
                'image' => "Fury_Belcher_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //51
            [
                'name' => "Xuanyuan Cannon",
                'type' => "Cannon",
                'rarity' => "3star",
                'detail' =>
                "Cannon \r\n
                Meriam yang Dicaskan.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.\r\n
                Floating Fireball \r\n
                [SP: 12] [CD: 20 detik] Meluncurkan bola api besar yang melayang perlahan dan meledak, menimbulkan 332% (420% pada 4★) ATK Fire DMG dan memicu musuh, menimbulkan 18% ATK Fire DMG setiap 0,5 detik selama 3 detik.\r\n
                ",
                'stats' => "112 ATK \r\n 10 CRT",
                'source' => "Event ",
                'image' => "Xuanyuan_Cannon_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //52
            [
                'name' => "MiG-11",
                'type' => "Cannon",
                'rarity' => "2star",
                'detail' =>
                "Cluster Missile \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. Waktu pengisian daya lebih lama. DMG sedikit berkurang ketika mengenai target yang sama beberapa kali.
                Urutan ke-1: 2 rudal.
                Urutan ke-2: 5 rudal.
                Urutan ke-3: 11 rudal.\r\n
                ",
                'stats' => "59 ATK \r\n 42 CRT",
                'source' => "Event ",
                'image' => "MiG-11_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //53
            [
                'name' => "MiG-13",
                'type' => "Cannon",
                'rarity' => "2star",
                'detail' =>
                "Multiple Cluster Missile \r\n
                Meluncurkan rudal pelacak ke berbagai sasaran. Waktu pengisian daya lebih lama. DMG sedikit berkurang ketika mengenai target yang sama beberapa kali.
                Urutan ke-1: 3 rudal.
                Urutan ke-2: 7 rudal.
                Urutan ke-3: 15 rudal.\r\n
                ",
                'stats' => "81 ATK \r\n 0 CRT",
                'source' => "Event ",
                'image' => "MiG-13_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //54
            [
                'name' => "MiG-7",
                'type' => "Cannon",
                'rarity' => "2star",
                'detail' =>
                "Laser \r\n
                Senjata tembakan cepat yang mengakibatkan DMG terus menerus ke sasaran di sepanjang garis lurus tembakan. Penembakan terus menerus akan membuat senjata menjadi terlalu panas. Musuh yang lebih dekat menerima lebih banyak DMG. DMG dimaksimalkan pada jarak 3 meter.\r\n
                ",
                'stats' => "81 ATK \r\n 0 CRT",
                'source' => "Event ",
                'image' => "MiG-7_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //55
            [
                'name' => "Proto Pulse Cannon",
                'type' => "Cannon",
                'rarity' => "1star",
                'detail' =>
                "Cannon. \r\n
                Meriam Berat. Waktu pengisian lebih lama. Serangan dasar memperoleh 50% DMG Fisik.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.\r\n
                Temporary Overclocking \r\n
                [SP: 8][CD: 15 detik] Memperkuat senjata sehingga serangan dasar (termasuk kombo dan serangan bermuatan) memperoleh 20% (32% pada 4★) DMG Fisik selama 5 detik.\r\n
                ",
                'stats' => "40 ATK \r\n 9 CRT",
                'source' => "Events ",
                'image' => "Proto_Pulse_Cannon_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //56
            [
                'name' => "SU-22 Howitzer",
                'type' => "Cannon",
                'rarity' => "1star",
                'detail' =>
                "Cannon. \r\n
                Meriam Berat. Waktu pengisian lebih lama. Serangan dasar memperoleh 50% DMG Fisik.
                Urutan ke-1: Tembakan tunggal.
                Urutan ke-2: Tembakan ganda yang diberdayakan.
                Urutan ke-3: Tembakan rangkap tiga berkekuatan super.\r\n
                ",
                'stats' => "42 ATK \r\n 4 CRT",
                'source' => "Events ",
                'image' => "SU-22_Howitzer_(2).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //57
            [
                'name' => "Lost Conviction: Damnation",
                'type' => "Chakram",
                'rarity' => "5star",
                'detail' =>
                "Destined Punishment \r\n
                [SP: 0][CD: 0 detik] CD aktif senjata, muatan maksimal, dan efeknya didasarkan pada tipe pengguna. Melemparkan senjata aktif akan memanggil 4 Kupu-Kupu Petir yang bertahan selama 10 detik ke pengguna. Saat pengguna melancarkan Lightning DMG atau kupu-kupu tersebut habis masa berlakunya, kupu-kupu tersebut terbang ke arah musuh, masing-masing menimbulkan 297,1% (360,0% pada 6★) Lightning DMG. Kastor menimbulkan 12,9% (16,0% pada 6★) bonus Lightning DMG terhadap musuh yang terkena dampak kupu-kupu dalam waktu 30 detik. CD: 10 detik.\r\n
                Delusional Atonement \r\n
                Menggunakan senjata secara aktif akan meningkatkan Lightning DMG sebesar 21,1% (25,0% pada 6★) selama 30 detik (memicunya lagi akan menyegarkan durasinya). Bonus perlengkapan Perdition Disiplin: Badai petir yang terus menyerang dalam Predictor's Sentence menyebabkan 33,2% (45,0% pada 6★) ATK bonus Lightning DMG.\r\n
                Compassionate Lie \r\n
                Lightning DMG meningkat sebesar 9,5% (15,0% pada 6★). Bonus perlengkapan Perdition Disiplin: Ultimate menyebabkan 20,6% (30,0% pada 6★) bonus Total DMG. \r\n
                ",
                'stats' => "305 ATK \r\n 11 CRT",
                'source' => "Foundry ",
                'image' => "Lost_Conviction_-_Damnation_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //58
            [
                'name' => "Purana Phantasma: Nighteye",
                'type' => "Chakram",
                'rarity' => "5star",
                'detail' =>
                "Amethyst Cat's-Eye \r\n
                [SP: 0][CD: 0 detik] CD aktif senjata, muatan maksimal, dan efeknya didasarkan pada tipe pengguna. Setelah menggunakan Ultimate atau keluar, kristal es akan tercipta di lokasi pengguna. CD: 4 detik. Memicunya lagi akan mengatur ulang durasinya. Kristal tersebut menimbulkan 160,7% (200,0% pada 6★) ATK Ice DMG setiap 2 detik kepada musuh dalam jarak 10 meter. Saat kristal dibuat, DMG Es tim meningkat sebesar 13,7% (20,0% pada 6★) selama 10 detik. Memicunya lagi akan mengatur ulang durasinya.\r\n
                Phantasmagorical \r\n
                Total DMG Pengguna meningkat sebesar 22,1% (30,0% pada 6★). Total DMG Tim meningkat sebesar 8,9% (12,0% pada 6★) (tidak dapat ditumpuk).\r\n
                Nightshroud Stalker \r\n
                Dengan dealer Ice DMG di tim, CD Ultimate berkurang 18,2% (30,0% pada 6★) (tidak dapat ditumpuk). Dengan adanya kristal es, DMG Es pengguna meningkat sebesar 12,1% (20,0% pada 6★). \r\n
                ",
                'stats' => "301 ATK \r\n 10 CRT",
                'source' => "Foundry ",
                'image' => "Purana_Phantasma_-_Nighteye_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //59
            [
                'name' => "Gilded Librae",
                'type' => "Chakram",
                'rarity' => "4star",
                'detail' =>
                "Meteoric Dervish \r\n
                [SP: 0][CD: 0 detik] CD aktif senjata, muatan maksimal, dan efeknya didasarkan pada tipe pengguna. \r\n
                Secret Automata \r\n
                Elemental DMG increases by 30.0% (50.0% at 5★). \r\n
                ",
                'stats' => "172 ATK \r\n 13 CRT",
                'source' => "Foundry ",
                'image' => "Gilded_Librae_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //60
            [
                'name' => "Lost Conviction",
                'type' => "Chakram",
                'rarity' => "4star",
                'detail' =>
                "Sinful Butterfly \r\n
                [SP: 0][CD: 0 detik] CD aktif senjata, muatan maksimal, dan efeknya didasarkan pada tipe pengguna. Melemparkan senjata aktif akan memanggil 4 Kupu-Kupu Petir yang bertahan selama 10 detik ke pengguna. Saat pengguna melancarkan Lightning DMG atau kupu-kupu tersebut habis masa berlakunya, kupu-kupu tersebut terbang ke arah musuh, masing-masing menimbulkan 168,2% (280,0% pada 5★) Lightning DMG. Kastor menimbulkan 7,2% (12,0% pada 5★) bonus Lightning DMG terhadap musuh yang terkena dampak kupu-kupu dalam waktu 30 detik. CD: 10 detik. \r\n
                Merciful Shackles \r\n
                Menggunakan senjata secara aktif akan meningkatkan Lightning DMG sebesar 12,0% (20,0% pada 5★) selama 30 d (memicunya lagi akan menyegarkan durasinya). Bonus perlengkapan Disciplinary Perdition: Badai petir yang terus menyerang dalam Predictor's Sentence menyebabkan 20,0% (30,0% pada 5★) ATK bonus Lightning DMG. \r\n
                ",
                'stats' => "182 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies ",
                'image' => "Lost_Conviction_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //61
            [
                'name' => "Purana Phantasma",
                'type' => "Chakram",
                'rarity' => "4star",
                'detail' =>
                "Amethyst Cat's-Eye \r\n
                [SP: 0][CD: 0 detik] CD aktif senjata, muatan maksimal, dan efeknya didasarkan pada tipe pengguna. Setelah menggunakan Ultimate atau keluar, kristal es akan tercipta di lokasi pengguna. CD: 4 detik. Memicunya lagi akan mengatur ulang durasinya. Kristal tersebut menimbulkan 86,1% (150,0% pada 5★) ATK Ice DMG setiap 2 detik kepada musuh dalam jarak 10 meter. Saat kristal dibuat, DMG Es tim meningkat sebesar 7,2% (12,0% pada 5★) selama 10 d. Memicunya lagi akan mengatur ulang durasinya. \r\n
                Phantasmagorical \r\n
                Wielder menimbulkan 12,0% (20,0% pada 5★) bonus Total DMG. Tim menimbulkan 5,6% (8,0% pada 5★) bonus Total DMG (tidak dapat ditumpuk). \r\n
                ",
                'stats' => "179 ATK \r\n 8 CRT",
                'source' => "Limited/Rotating Supplies ",
                'image' => "Purana_Phantasma_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //62
            [
                'name' => "Ring Blades",
                'type' => "Chakram",
                'rarity' => "1star",
                'detail' =>
                "Slash \r\n
                [SP: 0][CD: 0 detik] CD aktif senjata, muatan maksimal, dan efeknya didasarkan pada tipe pengguna. \r\n
                ",
                'stats' => "75 ATK \r\n 5 CRT",
                'source' => "Default Gear \r\n Story & Open World ",
                'image' => "Ring_Blades_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //63
            [
                'name' => "11th Leitourgia",
                'type' => "Cross",
                'rarity' => "5star",
                'detail' =>
                "Holy Phalanx \r\n
                [SP: 20][CD: 15 detik] Mengoperasikan senjata: Memanggil sinar suci setiap 2 detik, menimbulkan 553,5% (750,0% pada 6★) ATK DMG Fisik terhadap musuh dalam AOE. Rekan tim terdekat mendapatkan 13,7% (20,0% pada 6★) Crit Rate selama 10 d; jika digunakan oleh Celestial Hymn, dia memperoleh 3,4 (5,0 pada 6★) SP per detik selama periode ini. \r\n
                Divine Mending \r\n
                Saat pengguna menyerang musuh yang mengalami gangguan, terdapat 44,3% (60,0% pada 6★) peluang menyembuhkan 78 (89 pada 6★) HP untuk tim. CD: 3 detik. \r\n
                Angelic Pinion \r\n
                Tim memperoleh 6,9% (10,0% pada 6★) serangan regen SP; jika digunakan oleh Celestial Hymn, dia mendapat tambahan 27,1% (35,0% pada 6★) serangan SP regen. Efek ini tidak dapat ditumpuk. \r\n
                ",
                'stats' => "274 ATK \r\n 41 CRT",
                'source' => "Foundry ",
                'image' => "11th_Leitourgia_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //64
            [
                'name' => "Basilisk's Image: Deathshroud",
                'type' => "Cross",
                'rarity' => "5star",
                'detail' =>
                "Bone Spikes of Immortality \r\n
                [SP: 0][CD: 20 detik] Menyebarkan salib (entitas yang dipanggil): Menghasilkan Domain Ular yang bertahan selama 16 d yang mengakibatkan 5x32,1% (40,0% pada 6★) ATK Lightning DMG ke musuh setiap 3 detik dan menandai mereka. Serangan Kombo Pengguna menggunakan tanda tersebut untuk mengakibatkan 321,4% (400,0% pada 6★) ATK bonus Lightning DMG (sumber DMG: pengguna). Kecepatan Gerakan Musuh berkurang sebesar 12,1% (20,0% pada 6★) dalam Umbra of Ouroboros. \r\n
                Abyss of Inner Demon\r\n
                Lightning DMG meningkat sebesar 33,2% (45,0% pada 6★) dan 11,1% (15,0% pada 6★) terhadap musuh dalam Serpent Domain. \r\n
                Ravenous Fangs \r\n
                Serangan Kombo menyebabkan 22,1% (30,0% pada 6★) bonus Total DMG. Mendaratkan Serangan Kombo meningkatkan Kecepatan Gerak pengguna sebesar 11,1% (15,0% pada 6★) dan mengurangi Total DMG yang diterima sebesar 11,1% (15,0% pada 6★) selama 6 d (dapat disegarkan). Bonus perlengkapan Ouroboros Tak Terbatas: Pulihkan 1 Genesis Seed jika tidak ada. CD: 10 detik. \r\n
                ",
                'stats' => "296 ATK \r\n 20 CRT",
                'source' => "Foundry ",
                'image' => "Basilisk's_Image_-_Deathshroud_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //65
            [
                'name' => "Elysian Astra: Heart's Color",
                'type' => "Cross",
                'rarity' => "5star",
                'detail' =>
                "Primary Color Surge \r\n
                [SP: 0][CD: 20 detik] detik]Menyebarkan salib (entitas yang dipanggil): Pendaratannya menimbulkan 442,8% (600,0% pada 6★) ATK DMG Fisik ke musuh di sekitar, menimbulkan 6,9 Trauma Berdarah (10 Trauma Berdarah pada 6★), dan menyemprotkan cat eksplosif, yang mengakibatkan 44,3% (60,0% pada 6★) ATK DMG Fisik ke musuh di sekitar setiap 1,5 d selama 18 d. Bonus perlengkapan Starry Impression: Memicu Skill Ultimate Evasion-nya serta senjata yang aktif saat masuk QTE. \r\n
                Free Coloring\r\n
                Total DMG Combo ATK dan Ultimate Wielder meningkat sebesar 27,1% (35,0% pada 6★). DMG Fisik tim meningkat sebesar 16,1% (20,0% pada 6★) (tidak dapat ditumpuk). \r\n
                Light and Colors \r\n
                Bleed DMG meningkat sebesar 12,1% (20,0% pada 6★). Dalam waktu 22 detik setelah menggunakan senjata aktif, musuh yang rusak atau tidak dilindungi perisai menerima 4,9% (8,0% pada 6★) bonus DMG Fisik (memicunya lagi akan mengatur ulang durasinya). Pengguna juga mendapatkan efek satu kali berikut: Menyerang musuh yang berdarah akan menyebabkan ledakan cat yang mengakibatkan 5 × 85,0% (140,0% pada 6★) ATK Physical DMG  ke musuh di sekitar. \r\n
                ",
                'stats' => "271 ATK \r\n 38 CRT",
                'source' => "Foundry ",
                'image' => "Elysian_Astra_-_Heart's_Color_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //66
            [
                'name' => "Hekate's Sombre",
                'type' => "Cross",
                'rarity' => "5star",
                'detail' =>
                "Macabre Edge \r\n
                [SP: 0][CD: 21 detik] Menyebarkan salib (entitas yang dipanggil) untuk menjatuhkan musuh dalam area luas dan menimbulkan 200% ATK Physical DMG. Juga Panggil hujan pedang yang menimbulkan 40,0% ATK AoE Physical DMG dan menambah 1 pukulan kombo per 0,1 detik. Saat senjata digunakan oleh Violet Executer, salib akan memanggil 4 set bilah besar tambahan untuk menyerang secara sinergi, setiap set menimbulkan 4 x 34,3% (50,0% pada 6★) ATK Physical DMG, dan setiap pukulan menambahkan 2 serangan kombo ( dipicu setiap 2 detik sekali). \r\n
                Scar of Twilight\r\n
                Wielder menimbulkan 26,1% (30,0% pada 6★) bonus Total DMG. Mendaratkan 10 serangan dengan ATK Dasar, Serangan Penuh, serangan silang, atau Ultimate membuat pengguna dan serangan silang menimbulkan 3,1% (3,5% pada 6★) bonus DMG Fisik ke target. maks 10 tumpukan. Saat senjata digunakan oleh Violet Executer, Feverish Barrage DMG maksimal pada 300 pukulan kombo. \r\n
                Queen of Sombre \r\n
                Setiap gelombang pedang yang dipanggil secara silang membuat musuh menerima 2,5% bonus Physical DMG saat terkena selama 8 d. maks 4 tumpukan. Memicunya lagi akan mengatur ulang durasinya. Efek unik. Saat senjata digunakan oleh Violet Executer: QTE memulihkan 350 Ferver. Bilah besar meningkatkan Crit Rate Feverish Barrage sebesar 6,9% (10,0% pada 6★) dan Total DMG sebesar 6,9% (10,0% pada 6★) saat dipukul selama 8 d. maks 4 tumpukan. Memicunya lagi akan mengatur ulang durasinya. \r\n
                ",
                'stats' => "279 ATK \r\n 36 CRT",
                'source' => "Foundry ",
                'image' => "Hekate's_Sombre_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //67
            [
                'name' => "Salvation of Sakura",
                'type' => "Cross",
                'rarity' => "5star",
                'detail' =>
                "Blade Salvo \r\n
                [SP: 0][CD: 15 detik] Menyebarkan salib (entitas yang dipanggil) untuk meluncurkan katana Sakura ke arah musuh di area yang luas, menebas mereka setiap 0,3 detik selama 3,5 detik. Tiap tebasan menimbulkan Fire DMG setara dengan 5*22,6% (25,0% pada 6★) ATK, Menyalakan target untuk selanjutnya menimbulkan 168,6 (200,0 pada 6★) Fire DMG setiap 0,5 detik selama 10 detik, dan menimbulkan 1 Jumlah Sakura (CD: 2 detik). \r\n
                Blazing Sakura\r\n
                Menekan target akan memicu Tebasan Sakura yang meliputi area melingkar di sekitar target, menyebabkan DMG Api setara dengan 126,4% (150,0% pada 6★) ATK. Musuh dengan Merek Sakura atau Hitungan Sakura menerima 2.503 (2.700 pada 6★) Fire DMG dari Sakura Slash. CD Sakura Slash: 5 detik. \r\n
                Beyond Pledge \r\n
                Pemicu aktif Sakura Rain yang membuat musuh dalam area luas menerima 24,3% (40,0% pada 6★) lebih banyak Fire DMG selama 12 detik. \r\n
                Key of Binding \r\n
                Dalam co-op raids, tim menimbulkan 10,0% (20,0% pada 6★) bonus Lightning DMG dan menerima 9,0% (15,0% pada 6★) lebih sedikit Fire DMG selama 10,0 d setelah keterampilan senjata digunakan. \r\n
                ",
                'stats' => "275 ATK \r\n 27 CRT",
                'source' => "Foundry ",
                'image' => "Salvation_of_Sakura_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //68
            [
                'name' => "Basilisk's Image",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Blade of Death \r\n
                [SP: 6][CD: 20 detik] Menyebarkan salib (entitas yang dipanggil): Menghasilkan Domain Ular yang bertahan selama 16 d yang mengakibatkan 5 x 17,0% (25,0% pada 5★) ATK Lightning DMG ke musuh setiap 4 detik dan menandai mereka. Serangan Kombo Pengguna menggunakan tanda tersebut untuk mengakibatkan 170,1% (250,0% pada 5★) ATK bonus Lightning DMG (sumber DMG: pengguna). \r\n
                Shadow of Ouroboros \r\n
                Lightning DMG meningkat sebesar 22,0% (30,0% pada 5★) dan 6,0% lainnya (10,0% pada 5★) terhadap musuh dalam Serpent Domain. \r\n
                ",
                'stats' => "182 ATK \r\n 14 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Basilisk's_Image_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //69
            [
                'name' => "Dimension☆Sonata",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Elfenlied \r\n
                [SP: 8][CD: 20 detik] Memanggil dan menyebarkan senjata: memancarkan sinar cahaya yang mengeluarkan isi perut musuh dalam jangkauan selama 10 detik. Tiap pukulan menimbulkan 130% (250% pada 5★) ATK Fire DMG. Saat salib dikerahkan, serangan sekutu dalam AOE memperoleh 9,4% (15,0% pada 5★) Elemental DMG. \r\n
                Chant \r\n
                In Burst mode, character gains 24% (40% at 5★) Total DMG Multiplier.  \r\n
                ",
                'stats' => "172 ATK \r\n 24 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Dimension Sonata_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //70
            [
                'name' => "Eliudnir",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Palace of Misery \r\n
                [SP: 20][CD: 18 detik] Menyebarkan senjatanya. Selama periode 10 detik, serangan sekutu memperoleh 20,4% (30,0% pada 5★) Physical DMG terhadap musuh yang terkena efek stun. Menembakkan sinar cahaya setiap 1,5 detik ke musuh acak dalam jangkauan untuk menimbulkan 204,2% (320,0% pada 5★) ATK DMG Fisik dan knockdown. Pukulan pertama akan membuat musuh terkena stun selama 4,40 detik (6,00 detik pada 5★). \r\n
                Mist of Decay \r\n
                Serangan karakter pada musuh yang terkena efek stun memperoleh 24,0% (40,0% pada 5★) Total Pengganda DMG.   \r\n
                ",
                'stats' => "175 ATK \r\n 22 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Eliudnir_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //71
            [
                'name' => "Elysian Astra",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Primary Color \r\n
                [SP: 10][CD: 20 detik] Menyebarkan salib (entitas yang dipanggil): Pendaratannya menimbulkan 240,2% (400,0% pada 5★) ATK DMG Fisik ke musuh di sekitar, menimbulkan 4,4 Bleed Trauma (6,0 Bleed Trauma pada 5★), dan menyemprotkan cat eksplosif, yang mengakibatkan 24,0% (40,0% pada 5★) ATK DMG Fisik ke musuh di sekitar setiap 1,5 d selama 18 d. Bonus perlengkapan Starry Impression: Memicu Skill Ultimate Evasion-nya. \r\n
                Free Dyeing \r\n
                Total DMG Combo ATK dan Ultimate Wielder meningkat sebesar 17,0% (25,0% pada 5★). DMG Fisik tim meningkat sebesar 11,0% (15,0% pada 5★) (tidak dapat ditumpuk).   \r\n
                ",
                'stats' => "181 ATK \r\n 13 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Elysian_Astra_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //72
            [
                'name' => "Hekate's Gloom",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Eldritch Shards \r\n
                [SP: 6][CD: 21 detik] Mengerahkan senjata: Menjatuhkan musuh dalam AOE, menimbulkan 200% ATK Physical DMG, dan memanggil hujan es selama 8 detik yang mengakibatkan 43,0% (75,0% pada 5★) ATK DMG Fisik AOE dan menambahkan 1 hitungan Pukulan Kombo setiap 0,2 S. \r\n
                Witching Hour \r\n
                Pengguna memperoleh 12,0% (20,0% pada 5★) Total Pengganda DMG. Setiap 10 pukulan (termasuk Serangan Dasar, Serangan Penuh, keterampilan senjata, dan Ultimate) pada musuh akan memberikan buff DMG Fisik kepada pengguna dan salibnya sebesar 1,5% (2,5% pada 5★). Tumpukan maksimal: 10.   \r\n
                ",
                'stats' => "168 ATK \r\n 26 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Hekate's_Gloom_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //73
            [
                'name' => "Oath of Judah",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Divine Soulband \r\n
                [SP: 6][CD: 21 detik] Menyebarkan senjata, melumpuhkan musuh dalam jangkauan selama 6 detik dan meluncurkan 13 tombak ringan. Light spear akan dijatuhkan ke musuh acak satu per satu, menimbulkan 177% (282% pada 5★) ATK Lightning DMG. \r\n
                Witness of Pledge \r\n
                Serangan karakter mempunyai peluang 12,0% (20,0% pada 5★) untuk menandai musuh dengan Merek Cahaya Suci yang bertahan selama 6 d. Musuh yang ditandai akan menerima 316 (650 pada 5★) Lightning DMG lagi dari setiap serangan yang dilakukan. Efek hanya dapat dipicu setiap 13 detik sekali.   \r\n
                Key of Binding \r\n
                Dalam co-op raids, tim menimbulkan 10,0% (20,0% pada 5★) bonus Lightning DMG dan menerima 9,0% (15,0% pada 5★) lebih sedikit Fire DMG selama 10,0 d setelah keterampilan senjata digunakan. \r\n
                ",
                'stats' => "168 ATK \r\n 26 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Oath_of_Judah_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //73
            [
                'name' => "Pledge of Sakura",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Divine Soulband \r\n
                [SP: 20][CD: 12 detik] Memanggil dan menyebarkan senjata, melemparkan katana Sakura ke arah musuh dalam jangkauan, menebas mereka setiap 0,3 detik sekali selama 3,5 detik berikutnya. Setiap tebasan menimbulkan 132,1% (180,0% pada 5★) ATK DMG Fisik dan berpeluang 16,2% (21,2% pada 5★) untuk menambahkan Hitungan Sakura. Musuh dengan 3 Hitungan Sakura akan direset hitungannya menjadi 0 dan menerima Merek Sakura. Merek Sakura bertahan 10 detik. \r\n
                Fubuki \r\n
                Menekan target memberikan peluang 44,1% (100,0% pada 5★) untuk melepaskan Tebasan Sakura, menimbulkan 120,1% (200,0% pada 5★) ATK DMG Fisik di area melingkar yang berpusat pada target tersebut. Musuh dengan Merek Sakura atau Hitungan Sakura akan menerima 1.100 (2.450 pada 5★) Fire DMG lagi dari Sakura Slash. CD Sakura Slash: 5dtk.
                Bonus perlengkapan Sakuno Rondo: Sakura Slash menambahkan 1 Sakura Count pada musuh.    \r\n
                Key of Binding \r\n
                Dalam co-op raids, tim menimbulkan 10,0% (20,0% pada 5★) bonus Lightning DMG dan menerima 9,0% (15,0% pada 5★) lebih sedikit Fire DMG selama 10,0 d setelah keterampilan senjata digunakan. \r\n
                ",
                'stats' => "163 ATK \r\n 33 CRT",
                'source' => "Foundry \r\n Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Pledge_of_Sakura_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //74
            [
                'name' => "Ranger's Cross",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Comet Blast \r\n
                [SP: 15][CD: 15 detik] Mengerahkan senjata, meluncurkan cakram api ke target acak setiap 0,75 detik selama 8 detik berikutnya, menimbulkan 5 x 110 (233 pada 5★) Fire DMG dan memicunya untuk selanjutnya menimbulkan 36 (80 pada 5★) Fire DMG setiap 0,5 detik selama 3 detik. \r\n
                Burning Wound \r\n
                Menimbulkan tambahan 72 (160 pada 5★) kerusakan elemen api ketika karakter menyerang musuh yang telah tersulut.
                [Ranger] Kerusakan es yang diterima berkurang 20%. Jika rekan satu tim lainnya dilengkapi senjata seri [Ranger], mengerahkan perolehan silang 24,0% (40,0% pada 5★) Fire DMG.    \r\n
                ",
                'stats' => "153 ATK \r\n 12 CRT",
                'source' => "Foundry \r\n Story & Open World",
                'image' => "Ranger's_Cross_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //75
            [
                'name' => "Selune's Elegy (Cross)",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Swarm of Crows \r\n
                [SP: 9][CD: 22 detik] Memanggil dan menyebarkan senjata. Selama 10 detik berikutnya, musuh dalam AOE ditandai. Musuh yang ditandai menerima 94% (150% pada 5★) ATK Ice DMG setiap 1 d selama 10 d. Musuh yang masuk atau keluar dari senjata AOE akan langsung menerima 240% (400% pada 5★) ATK Ice DMG. Efek memiliki interval pemicu 0,5 detik. \r\n
                Angel of the Moon \r\n
                Saat serangan bermuatan menyerang, menimbulkan 600 (1.000 pada 5★) DMG Fisik dan 900 (1.500 pada 5★) Ice DMG ke target dan musuh di sekitar. CD: 5.0 detik.    \r\n
                ",
                'stats' => "175 ATK \r\n 17 CRT",
                'source' => "Foundry",
                'image' => "Selune's_Elegy_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //76
            [
                'name' => "Zither's Lament",
                'type' => "Cross",
                'rarity' => "4star",
                'detail' =>
                "Eastern Winds \r\n
                [SP: 0][CD: 20 detik] Menyebarkan salib (entitas yang dipanggil): Menjatuhkan musuh dalam jangkauan, menimbulkan 200% ATK DMG Fisik dan menyebabkan angin kencang, mengakibatkan 43,0% (75,0% pada 5★) ATK DMG Fisik per 0,25 detik ke musuh dan memperlambat Kecepatan Gerak mereka sebanyak 30 % selama 8 detik. Meningkatkan Kecepatan Gerak tim sebesar 25% dan DMG Fisik sebesar 8,6% (15,0% pada 5★) selama 13 detik. \r\n
                Empty Fort \r\n
                Serangan mode Ultimate dan Burst seluruh anggota tim menimbulkan 8,6% (15,0% pada 5★) lebih banyak DMG Fisik (efek ini tidak dapat ditumpuk). Saat digunakan oleh Starlit Astrologos, dia juga memperoleh 20% Kecepatan ATK.    \r\n
                ",
                'stats' => "188 ATK \r\n 9 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Zither's_Lament_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //77
            [
                'name' => "Ai-chan's Candy",
                'type' => "Cross",
                'rarity' => "3star",
                'detail' =>
                "Candy Rain \r\n
                [SP: 15][CD: 15 detik] Memanggil dan menyebarkan Permen AI Chan: Menjatuhkan permen setiap 0,8 detik sekali selama 8 detik berikutnya. Candy meledak saat mendarat, menimbulkan 349 (666 pada 4★) DMG Fisik kepada musuh dalam AOE kecil. \r\n
                ",
                'stats' => "123 ATK \r\n 11 CRT",
                'source' => "Event",
                'image' => "Ai-chan's_Candy_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //78
            [
                'name' => "Ai-chan's Candy",
                'type' => "Cross",
                'rarity' => "3star",
                'detail' =>
                "Raziel \r\n
                [SP: 20][CD: 15 detik] Menyebarkan senjata, meluncurkan bola api tembus ke musuh acak dalam jangkauan setiap 0,8 detik selama 7 detik berikutnya. Bola api menimbulkan 351 (680 pada 4★) Fire DMG dan menyulut musuh, menimbulkan 79 (160 pada 4★) Fire DMG setiap 0,5 d selama 3 d. \r\n
                ",
                'stats' => "127 ATK \r\n 7 CRT",
                'source' => "Foundry \r\n Dorm Supply",
                'image' => "Fire_Angel_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //79
            [
                'name' => "Jack'o Lantern",
                'type' => "Cross",
                'rarity' => "3star",
                'detail' =>
                "Pumpkin Harvest \r\n
                [SP: 14][CD: 12 detik] Menyebarkan senjata, menghasilkan bom labu dengan ledakan tertunda setiap 0,6 detik selama 8 detik berikutnya di samping musuh acak dalam jangkauan. Ledakan menyebabkan 281 (685 pada 5★) Fire DMG ke musuh dalam AOE. \r\n
                ",
                'stats' => "99 ATK \r\n 9 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Jack'o_Lantern_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //80
            [
                'name' => "Lightning Angel",
                'type' => "Cross",
                'rarity' => "3star",
                'detail' =>
                "Ramiel \r\n
                [SP: 15][CD: 15 detik] Mengerahkan senjatanya, memicu ledakan EM sekali setiap 1,5 detik selama 6 detik berikutnya, setiap kali menimbulkan 445 (840 pada 4★) Lightning DMG ke musuh dalam AOE dan melumpuhkan mereka selama 0,7 detik. \r\n
                ",
                'stats' => "116 ATK \r\n 22 CRT",
                'source' => "Foundry",
                'image' => "Lightning_Angel_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //81
            [
                'name' => "The Dark Crusher",
                'type' => "Cross",
                'rarity' => "3star",
                'detail' =>
                "Pulverize \r\n
                [SP: 3][CD: 12 detik] Meluncurkan senjata, membanting musuh yang berada di darat selama 1,5 detik selama 6 detik berikutnya, dan setiap bantingan mengakibatkan 1.587 (2.500 pada 4★) Fire DMG. \r\n
                ",
                'stats' => "125 ATK \r\n 7 CRT",
                'source' => "Foundry",
                'image' => "The_Dark_Crusher_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //82
            [
                'name' => "AP Turret",
                'type' => "Cross",
                'rarity' => "2star",
                'detail' =>
                "Penetrating Bullets \r\n
                [SP: 15][CD: 13 detik] Menyebarkan senjata, menembakkan peluru tembus ke musuh acak dalam jangkauan setiap 0,9 detik selama 8 detik berikutnya. Peluru tembusnya meledak, menimbulkan 315 (750 pada 3★) DMG Fisik kepada musuh dalam AOE sedang. \r\n
                ",
                'stats' => "81 ATK \r\n 0 CRT",
                'source' => "Foundry",
                'image' => "AP_Turret_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //83
            [
                'name' => "Brimstone",
                'type' => "Cross",
                'rarity' => "2star",
                'detail' =>
                "Flame Bullets \r\n
                [SP: 15][CD: 13 detik] Menyebarkan senjata, menembakkan proyektil api ke musuh acak dalam jangkauan setiap 0,6 detik selama 8 detik berikutnya. Proyektilnya meledak, menimbulkan 213 (482 pada 3★) Fire DMG ke musuh dalam AOE kecil. \r\n
                ",
                'stats' => "64 ATK \r\n 40 CRT",
                'source' => "Foundry",
                'image' => "Brimstone_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //84
            [
                'name' => "Hailstone",
                'type' => "Cross",
                'rarity' => "2star",
                'detail' =>
                "Ice Bullets \r\n
                [SP: 14][CD: 13 detik] Menyebarkan senjata, menembakkan peluru es ke musuh acak dalam jangkauan setiap 1,0 detik selama 8 detik berikutnya. Peluru es meledak, menimbulkan 238 (521 pada 3★) Ice DMG kepada musuh dalam AOE kecil dan memperlambat Kecepatan Serangan mereka sebesar 50% selama 0,8 detik. \r\n
                ",
                'stats' => "76 ATK \r\n 8 CRT",
                'source' => "Foundry",
                'image' => "Hailstone_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //85
            [
                'name' => "Oath of Fire",
                'type' => "Cross",
                'rarity' => "2star",
                'detail' =>
                "Oath of Fire \r\n
                [SP: 20][CD: 12 detik] Menyebarkan senjatanya. Selama 6 detik berikutnya, musuh dalam AOE akan terbakar dan menerima 228 (450 pada 3★) Fire DMG setiap 0,5 detik. \r\n
                ",
                'stats' => "78 ATK \r\n 6 CRT",
                'source' => "Foundry",
                'image' => "Oath_of_Fire_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //86
            [
                'name' => "Oath of Ice",
                'type' => "Cross",
                'rarity' => "2star",
                'detail' =>
                "Oath of Ice \r\n
                [SP: 18][CD: 12 detik] Menyebarkan senjatanya. Selama 7 detik berikutnya, serangan dalam AOE mengakibatkan 62 (120 pada 3★) Ice DMG tambahan. \r\n
                ",
                'stats' => "73 ATK \r\n 35 CRT",
                'source' => "Foundry",
                'image' => "Oath_of_Ice_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //87
            [
                'name' => "Cross",
                'type' => "Cross",
                'rarity' => "1star",
                'detail' =>
                "Silver Bullets \r\n
                [SP: 10][CD: 13 detik] Menyebarkan senjata, menembakkan peluru perak ke musuh acak dalam jangkauan setiap 0,8 detik selama 8 detik berikutnya. Peluru perak meledak dan menimbulkan 158 (400 pada 2★) DMG Fisik kepada musuh dalam AOE kecil. \r\n
                ",
                'stats' => "42 ATK \r\n 4 CRT",
                'source' => "Defautl Geat \r\n Story & Open World",
                'image' => "Cross_(2).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //88
            [
                'name' => "Proto Cross",
                'type' => "Cross",
                'rarity' => "1star",
                'detail' =>
                "Pulsing Territory \r\n
                [SP: 17][CD: 12 detik] Menyebarkan salib (entitas yang dipanggil), meningkatkan sekutu dalam jangkauan selama 7 detik berikutnya, meningkatkan kerusakan fisik pada serangan dasar mereka. \r\n
                ",
                'stats' => "42 ATK \r\n 4 CRT",
                'source' => "Events",
                'image' => "Proto_Cross_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //89
            [
                'name' => "Cosmic Duality",
                'type' => "Gauntlet",
                'rarity' => "5star",
                'detail' =>
                "Ocean of Yin \r\n
                [SP: 25][CD: 24 detik] Pengguna memperoleh Ignore Interrupt dan 10% Kecepatan ATK selama 10 detik, yang selama 10 detik, ia memulihkan 8,2 (20,0 pada 6★) HP dan 3 SP per 0,5 detik.
                Bonus perlengkapan Azure Empyrea: Spirit Shield dari Skill Evasion-nya segera direset. \r\n
                Ocean of Yang \r\n
                Bonus perlengkapan Fu Hua: Menyerang musuh dengan serangan terakhir dari rangkaian kombo mana pun akan meningkatkan Fire DMG miliknya sebesar 13,3% selama 15,6 d (18,0% selama 18,0 d pada 6★) (ditumpuk hingga 3 kali) dan menambah 1 pengisian daya ( Maks: 3). Efek ini dapat dipicu setiap 2 detik sekali; memicunya lagi akan mengatur ulang durasinya. Menggunakan senjata aktif memberikan 3 tumpukan. Saat pengguna meninggalkan medan perang, setiap serangan meningkatkan Total DMG rekan satu tim sebesar 4,2% selama 15,6 d (5,0% selama 18,0 d pada 6★) (memicu efek ini lagi yang mengatur ulang durasinya), lalu semua serangan akan dihapuskan. \r\n
                All-Embracing Ki\r\n
                Setiap kali anggota tim menggunakan Ultimate, pengguna akan memulihkan 142,8 (300,0 pada 6★) HP dan 5,3 (10,0 pada 6★) SP. CD yang dibagikan tim: 15 detik. \r\n
                ",
                'stats' => "298 ATK \r\n 18 CRT",
                'source' => "Foundry",
                'image' => "Cosmic_Duality_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //90
            [
                'name' => "Domain of Sentience",
                'type' => "Gauntlet",
                'rarity' => "5star",
                'detail' =>
                "Formless \r\n
                [SP: 0][CD: 20 detik] Wielder mendapatkan 2 tumpukan Mind Mark. Serangan Kombo menggunakan 1 tumpukan saat dipukul untuk memulihkan 12 (15 pada 6★) bonus SP. CD: 2 detik. \r\n
                Mindless \r\n
                Meningkatkan Tingkat Kritik sebesar 7,9% (15,0% pada 6★). Dalam bentuk Herrscher, pengguna menimbulkan 12,1% (20,0% pada 6★) bonus DMG Fisik. \r\n
                Senseless\r\n
                Saat pengguna dalam keadaan siaga, tim menimbulkan 12,6% (15,0% pada 6★) bonus DMG Fisik (Lingering Thought dan Senseless tidak dapat ditumpuk). \r\n
                ",
                'stats' => "277 ATK \r\n 33 CRT",
                'source' => "Foundry",
                'image' => "Domain_of_Sentience_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //91
            [
                'name' => "Nuada's Revenge",
                'type' => "Gauntlet",
                'rarity' => "5star",
                'detail' =>
                "Champion of Danu \r\n
                [SP: 0][CD: 20 detik] Menimbulkan 248% (500% pada 6★) ATK Lightning DMG terhadap musuh di depan dan menimbulkan 10 Bleed Trauma. Dalam Burst, aktif ini memberikan damage dua kali lipat. \r\n
                Undying Resolve \r\n
                Lightning DMG meningkat sebesar 40%, dan Kecepatan ATK dalam Burst meningkat sebesar 14% (30% pada 6★). Saat hampir mati, memulihkan 50% HP Maks dan menimbulkan 6 Paralyze Trauma pada musuh di sekitar (1 kali per pertempuran). \r\n
                Airgetlám's Mantle\r\n
                Selama mode Burst atau dalam 3,4 detik pertama (5,0 detik pada 6★) setelah melepaskan senjata aktif atau Ultimate, pengguna memperoleh Ignore Interrupt dan 40% Total DMG Reduction, serta memancarkan Lightning Shockwave setiap 1,5 detik. Lightning Shockwave menimbulkan 12,1% (20,0% pada 6★) ATK Lightning DMG terhadap musuh di sekitar dan menyebabkan mereka menerima 1,93% (3,50% pada 6★) Lightning DMG lebih banyak selama 3 d (tumpukan maksimal: 7; memicu efek ini lagi akan mengatur ulang durasi). \r\n
                ",
                'stats' => "267 ATK \r\n 37 CRT",
                'source' => "Foundry",
                'image' => "Nuada's_Revenge_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //92
            [
                'name' => "Oblivion Down",
                'type' => "Gauntlet",
                'rarity' => "5star",
                'detail' =>
                "Key of Sentience \r\n
                [SP: 0][CD: 26 detik] Lepaskan kekuatan Kunci Perasaan untuk melumpuhkan musuh di sekitar hingga 8 d (hingga 3 d terhadap musuh elit atau bos). 1 detik setelah diserang oleh pengguna atau rekan setimnya, target yang tidak bergerak dan musuh di dekatnya akan pulih dan menerima 2,032% (2,150% pada 6★) ATK Fire DMG (setiap musuh hanya menerima kerusakan satu kali).
                Dalam Co-op Raid stages, pengguna menimbulkan 16,0% (22,0% pada 6★) bonus Elemental DMG dan 16,0% (22,0% pada 6★) lebih banyak terhadap musuh yang lumpuh, beku, atau tersulut. \r\n
                Flaming Feather \r\n
                Musuh yang pulih dari senjata aktif menjadi Deranged dan menerima 60,7%+Nx60,7% (100,0%+Nx100,0% pada 6★) ATK bonus Fire DMG dari pengguna selama 15 d (CD: 1 d. N: kali terpicu). Jika N sama dengan 5, status Deranged pada semua musuh dihilangkan dan musuh dalam area luas menerima 1.028,4% (1.500,0% pada 6★) ATK Fire DMG. \r\n
                Peace Restored\r\n
                Wielder menimbulkan 23,2% (35,0% pada 6★) bonus Total DMG dan memulihkan SP 18,2% (30,0% pada 6★) lebih cepat dari serangan. \r\n
                ",
                'stats' => "283 ATK \r\n 24 CRT",
                'source' => "Foundry",
                'image' => "Oblivion_Down_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //93
            [
                'name' => "Cinder Hawk",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Scarlet Spirit \r\n
                Saat menimbulkan kerusakan pada musuh yang terbakar atau musuh dengan Firebrand, ada 12% (20% pada 5★) kemungkinan menimbulkan 180% (300% pada 5★) ATK Fire DMG. Efek ini memiliki cooldown pemicu minimal 1,5 detik untuk setiap musuh. \r\n
                Red Song \r\n
                Memblokir serangan sepenuhnya ketika diserang oleh musuh yang tersulut atau musuh dengan Firebrand. Efek terpicu setiap 56,0 detik (40,0 detik pada 5★). Karakter memperoleh 12% (20% pada 5★) Semua Elemental DMG dan memperoleh 12% (20% pada 5★) Fire DMG. \r\n
                ",
                'stats' => "179 ATK \r\n 15 CRT",
                'source' => "Exhange House \r\n Limited/Rotating Supplies",
                'image' => "Cinder_Hawk_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //94
            [
                'name' => "Fenghuang Down",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Key of Sentience \r\n
                [SP: 10][CD: 25 detik] Keluarkan kekuatan Fenghuang Down untuk melumpuhkan musuh di sekitar hingga 8 detik (hingga 3 detik melawan musuh elit atau bos). 1 detik setelah diserang oleh pengguna atau rekan setimnya, musuh yang tidak dapat bergerak akan pulih dan menerima 1.300% (2.000% pada 5★) ATK Fire DMG.
                Dalam Co-op Raid stages, pengguna menimbulkan 16,0% (22,0% pada 5★) bonus Elemental DMG dan 16,0% (22,0% pada 5★) lebih banyak terhadap musuh yang lumpuh, beku, atau tersulut.   \r\n
                Blazing Plume \r\n
                Wielder menimbulkan 20,0% (40,0% pada 5★) bonus Fire DMG. Terhadap musuh yang terkena dampak senjata aktif, dia menimbulkan 20,0% (40,0% pada 5★) bonus Total DMG selama 2 detik. \r\n
                ",
                'stats' => "189 ATK \r\n 8 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Fenghuang_Down_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //95
            [
                'name' => "Grips of Tai Xuan",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Yin Yang \r\n
                [SP: 17][CD: 25 detik] Menciptakan 3 proyeksi Pedang Xuanyuan untuk menyerang musuh, masing-masing pedang menghasilkan 645 (1.500 pada 5★) Fire DMG dan menimbulkan Time Lock pada musuh selama 2,4 d (4,5 d pada 5★).   \r\n
                Unlimited \r\n
                Saat mengenai musuh dengan serangan Dasar/Kombo/Burst atau keterampilan switch/QTE, pengguna memperoleh 4,6% (8,0% pada 5★) Total Pengganda DMG selama 4,6 d (8,0 d pada 5★). Picu efeknya dengan berbagai jenis serangan untuk menumpuk efeknya; memicu efeknya lagi dengan jenis serangan yang sama akan mengatur ulang durasinya. \r\n
                Key of Domination \r\n
                In co-op raids, serangan karakter memperoleh 7% (15% pada 5★) Pengganda DMG Total dan pukulan yang diterima mengalami 6% (10% pada 5★) Pengurangan DMG Total.   \r\n
                ",
                'stats' => "142 ATK \r\n 18 CRT",
                'source' => "Raids \r\n Events",
                'image' => "Grips_of_Tai_Xuan_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //96
            [
                'name' => "Keys of Oblivion",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Iron Will \r\n
                [SP: 0][CD: 20 detik] Wielder mendapatkan 2 tumpukan Mind Mark. Serangan Kombo menggunakan 1 tumpukan saat dipukul untuk memulihkan 7 (12 pada 5★) bonus SP. CD: 2 detik.   \r\n
                Iron Will \r\n
                Saat pengguna dalam keadaan siaga, tim menimbulkan 7,8% (15,0% pada 5★) bonus DMG Fisik (Lingering Thought dan Senseless tidak dapat ditumpuk). \r\n
                ",
                'stats' => "184 ATK \r\n 11 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Keys_of_Oblivion_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //97
            [
                'name' => "Miracle Kissy Pillow",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Embrace the World \r\n
                [SP: 0][CD: 25 detik] Roket api mengepal ke depan untuk menimbulkan 200% ATK Physical DMG, lalu menghantam tanah untuk menimbulkan 100% ATK Physical DMG. Tinjunya akan terus berputar di tanah untuk menarik musuh dan menimbulkan 20 x 13,0% (25,0% pada 5★) ATK DMG Fisik selama 8 detik.
                Saat senjata dilengkapi dengan Sweet 'n' Spicy, melancarkan Charged ATK III atau Aerial Charged ATK II ke darat selagi tinju berputar untuk memulihkannya, setelah itu DMG yang berputar menjadi bagian dari Charged ATK, dan cast Charged ATK saat ini menghasilkan 17,0 % (45,0% pada 5★) bonus DMG Fisik. Sweet 'n' Spicy hanya dapat memulihkan tinju yang dilancarkan oleh dirinya sendiri.   \r\n
                Loosen Up \r\n
                Serangan yang dibebankan dan Ultimate menyebabkan 24,0% (40,0% pada 5★) bonus DMG ke perisai. Ultimate meningkatkan DMG Fisik tim sebesar 11,0% (35,0% pada 5★) selama 15 d. Memicunya lagi akan mengatur ulang durasinya. \r\n
                ",
                'stats' => "189 ATK \r\n 8 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Miracle_Kissy_Pillow_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //98
            [
                'name' => "Nebulous Duality",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Well of Yin \r\n
                [SP: 25][CD: 24 detik] Pengguna memperoleh Ignore Interrupt dan 6,8% (10,0% pada 5★) Kecepatan ATK selama 10 d, yang selama 10 detik ia memulihkan 2,60 (3,00 pada 5★) SP namun kehilangan 1% HP-nya saat ini per 0,5 detik.
                Jika digunakan oleh Azure Empyrea, efek perlindungan dari skill Evasion miliknya akan segera direset.   \r\n
                Fount of Yang \r\n
                Bonus perlengkapan Fu Hua: Menyerang musuh dengan serangan terakhir dari rangkaian kombo mana pun akan meningkatkan Total DMG miliknya sebesar 3,6% selama 11 detik (6,0% selama 15 d pada 5★) (ditumpuk hingga 3 kali) dan menambah 1 pengisian daya (MAX: 3). Efek ini dapat dipicu setiap 2 detik sekali; memicunya lagi mengatur ulang durasinya. Saat pengguna meninggalkan medan perang, setiap serangan meningkatkan Total DMG rekan satu tim sebesar 2,4% selama 11 d (4,0% selama 15 detik pada 5★) (memicu efek ini lagi yang akan mengatur ulang durasinya), lalu semua serangan akan dihapuskan. \r\n
                ",
                'stats' => "187 ATK \r\n 10 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Nebulous_Duality_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //99
            [
                'name' => "Nuada's Grief",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Airgetlám \r\n
                [SP: 4][CD: 20 detik] Menimbulkan 300% (500% pada 5★) ATK DMG Fisik terhadap musuh di depan, menghempaskan mereka ke udara, dan menimbulkan 6 Bleed Trauma.   \r\n
                Dazzling Blade \r\n
                Mendapat 24% (40% pada 5★) DMG Petir. \r\n
                ",
                'stats' => "177 ATK \r\n 20 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Nuada's_Grief_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //100
            [
                'name' => "Ranger's Gauntlets",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Turbo Acceleration \r\n
                [SP: 5][CD: 30 detik] Karakter kehilangan kesehatan setara dengan 15% HP maksimal untuk memperoleh 14% (30% pada 5★) Total Pengganda DMG selama 5,0 d (9,0 d pada 5★).   \r\n
                Twilight Operation \r\n
                Saat karakter keluar, tim menerima 6,0% (10,0% pada 5★) lebih sedikit DMG Fisik Tidak Langsung selama 4,6 detik (7,0 detik pada 5★).
                [Ranger] Karakter menerima 20% lebih sedikit Ice DMG. Jika rekan satu tim lainnya dilengkapi dengan senjata seri [Ranger], maka karakter memperoleh 7,0% (15,0% pada 5★) DMG Fisik selama 4,6 detik (7,0 detik pada 5★) saat dikerahkan. \r\n
                ",
                'stats' => "155 ATK \r\n 6 CRT",
                'source' => "Story & Open World",
                'image' => "Ranger_Gauntlets_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //101
            [
                'name' => "Skoll and Hati",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Skoll\r\n
                [SP: 11][CD: 30 detik] Terus memancarkan gelombang kejut saat aktivasi, menimbulkan 34% (50% pada 5★) ATK Physical DMG setiap 0,5 detik. Karakter juga menerima 37% (65% pada 5★) lebih sedikit DMG dari serangan samping atau belakang selama 6,8 detik (10,0 detik pada 5★).   \r\n
                Hati \r\n
                Saat serangan mengenai musuh, memperoleh 1,4% (3,0% pada 5★) DMG Fisik selama 3,0 detik. Efek ditumpuk hingga 10 kali. Durasi setiap tumpukan ditentukan secara terpisah. Menyerang musuh yang terkena Time Slow, mengurangi Attack Speed, atau mengurangi Move Speed memperoleh 6% (10% pada 5★) Crit Rate. \r\n
                ",
                'stats' => "179 ATK \r\n 15 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Skoll_and_Hati_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //102
            [
                'name' => "Stellar Vortex",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Pulse Vortex\r\n
                [SP: 14][CD: 20 detik] Menarik target, menimbulkan 250% (450% pada 5★) Physical DMG dan mengurangi kecepatannya sebesar 56% selama 3 detik (80% selama 5 detik pada 5★).   \r\n
                Wave Breaker \r\n
                Saat Kombo Keterampilan mengenai, menimbulkan 1.461 (2.500 pada 5★) DMG Fisik ke musuh di sekitar. Cooldownnya 1,5 detik. \r\n
                ",
                'stats' => "163 ATK \r\n 14 CRT",
                'source' => "Foundry",
                'image' => "Stellar_Vortex_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //103
            [
                'name' => "CAS-II Namiko",
                'type' => "Gauntlet",
                'rarity' => "3star",
                'detail' =>
                "Wander\r\n
                [SP: 3][CD: 10 detik] MMenciptakan gelombang ledakan yang mengakibatkan 267% (450% pada 4★) ATK Physical DMG ke musuh di sepanjang jalur lurus.   \r\n
                Humidifier \r\n
                Pengguna memperoleh 9,52% (15,00% pada 4★) Physical DMG.  \r\n
                ",
                'stats' => "114 ATK \r\n 8 CRT",
                'source' => "Foundry",
                'image' => "CAS-II_Namiko_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //104
            [
                'name' => "CAS-X Saints",
                'type' => "Gauntlet",
                'rarity' => "3star",
                'detail' =>
                "Sacred Flames\r\n
                Pukulan yang diberikan mempunyai peluang 11,9% (17,0% pada 4★) untuk menimbulkan tambahan 407 (700 pada 4★) kerusakan akibat kebakaran.   \r\n
                Astral Fire \r\n
                Pengguna memperoleh 9,52% (15,0% pada 4★) Fire DMG.  \r\n
                ",
                'stats' => "118 ATK \r\n 14  CRT",
                'source' => "Foundry \r\n Dorm Supply",
                'image' => "CAS-X_Saints_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //105
            [
                'name' => "Jade Bloom",
                'type' => "Gauntlet",
                'rarity' => "3star",
                'detail' =>
                "Halcyon\r\n
                Item acara akan turun saat Anda menyerang. Ambil mereka untuk memulihkan 16,6 (30,0 pada 5★) HP untuk tim. CD: 5,7 detik (3,0 detik pada 5★).   \r\n
                Kingfisher \r\n
                Setiap kali tim mengambil Paket HP, memperoleh 8,8% (15,0% pada 5★) Total Pengganda DMG selama 6 detik. Efek tidak dapat ditumpuk.  \r\n
                ",
                'stats' => "97 ATK \r\n 6  CRT",
                'source' => "Events",
                'image' => "Jade_Bloom_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //106
            [
                'name' => "Titan's Fists",
                'type' => "Gauntlet",
                'rarity' => "3star",
                'detail' =>
                "Vehement Blow\r\n
                [SP: 15][CD: 30 detik] Kumpulkan musuh di sekitar untuk menimbulkan 10 Paralyze Trauma. Dalam waktu 5 detik setelah menggunakan keterampilan ini, serangan berikutnya menimbulkan 554% (1000% pada 5★) ATK bonus DMG Fisik ke target dan musuh di sekitar dan menghempaskan mereka ke udara.   \r\n
                Rampage \r\n
                Ketika Jumlah Pukulan Kombo melebihi 50, memperoleh 22,1% (40,0% pada 5★) DEF. Serangan terhadap musuh tipe BIO memperoleh 11,1% (20,0% pada 5★) Total Pengganda DMG.  \r\n
                ",
                'stats' => "100 ATK \r\n 4 CRT",
                'source' => "Events",
                'image' => "Titan's_Fists_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

              //107
            [
                'name' => "White Star Banishers",
                'type' => "Gauntlet",
                'rarity' => "3star",
                'detail' =>
                "Spiral Jet\r\n
                [SP: 12][CD: 14 detik] memicu aliran udara ke atas di sekitar karakter, menimbulkan 267% (450% pada 4★) ATK Physical DMG ke musuh dan menghempaskannya ke udara.   \r\n
                ",
                'stats' => "119 ATK \r\n 13 CRT",
                'source' => "Events",
                'image' => "White_Star_Banishers_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //108
             [
                'name' => "Armored Bracers",
                'type' => "Gauntlet",
                'rarity' => "1star",
                'detail' =>
                "
                ",
                'stats' => "43 ATK \r\n 4 CRT",
                'source' => "Default Gear",
                'image' => "Armored_Bracers_(2).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //109
            [
                'name' => "Shuhadaku of Uriel",
                'type' => "Greatsword",
                'rarity' => "5star",
                'detail' =>
                "Ravaging Flame\r\n
                [SP: 0][CD: 25 detik] Tebasan kuat menimbulkan 100% + 900%/1600%/2500% ATK Fire DMG pada 0/1/2 charge masing-masing, dan menimbulkan 5/10/18 Ignite Trauma. Pengguna kehilangan 8% HP saat ini per detik selama 5 detik (tidak akan menyebabkan kematian) setelah menggunakan senjata aktif. Tidak dapat menggunakan senjata aktif pada HP di bawah 10%. Mulai pertarungan dengan 1 charge dan dapatkan 1 charge dengan menghabiskan minimal 25 SP sekaligus.
                Dalam 2 detik setelah melakukan casting dengan 2 kali pengisian daya, ketuk lagi tombol senjata untuk menimbulkan 1771,2% (2400,0% pada 6★) ATK Fire DMG. Selama 45 detik setelahnya, pengguna mengurangi Total DMG sebesar 80%, kehilangan 20 SP per detik, dan tidak dapat menggunakan senjata aktif SEQ 2.   \r\n
                Solar Flare\r\n
                Wielder menimbulkan 31,1% (35,0% pada 6★) bonus Total DMG. Senjata aktif menimbulkan 20,6% (23,0% pada 6★) Kerentanan Fire DMG  pada musuh selama 10 detik. Wielder memiliki 30,0 bonus SP awal, namun efek ini tidak berfungsi di Open World.   \r\n
                Stellar Crown\r\n
                Setelah senjata aktif, pengguna menerima 22,1% (30,0% pada 6★) Total DMG lebih sedikit dan menghantarkan 26,4% (50,0% pada 6★) ATK Fire DMG per detik ke musuh di dekatnya selama 15 detik. Mengaktifkan senjata dua kali berturut-turut akan menghilangkan efek ini.   \r\n
                Key of Destruction\r\n
                Dalam co-op raids, tim menimbulkan 12,0% (18,0% pada 6★) bonus Total DMG dan memulihkan 5,0% (7,0% pada 6★) HP per detik selama 5,1 detik setiap kali keterampilan senjata digunakan.   \r\n
                ",
                'stats' => "291 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Shuhadaku_of_Uriel_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //110
            [
                'name' => "Sleeper's Dream",
                'type' => "Greatsword",
                'rarity' => "5star",
                'detail' =>
                "Cradle of Thorns\r\n
                [SP: 0][CD: 18 detik] Menimbulkan 1 kerusakan pada diri sendiri dan 500,0% (800,0% pada 6★) ATK DMG Fisik ke musuh di sekitar setelah 0,5 d. Dalam 5 detik berikutnya, serangan pengguna menyebabkan ledakan saat terkena, mengakibatkan 100,0% ATK Physical DMG. CD: 1 detik.   \r\n
                Source of Nightmares\r\n
                Wielder mempunyai 12,0% (15,0% pada 6★) bonus Crit Rate. Saat digunakan oleh Molotov Cherry, memasuki Mode Fervent akan memulihkan 3 (6 pada 6★) SP (CD: 20 d) dan dia menerima 15,0% (20,0% pada 6★) lebih sedikit Total DMG dalam Mode Fervent.   \r\n
                Lucid Dreamer\r\n
                Wielder memiliki 35 bonus SP awal (tidak efektif di Open World). Saat digunakan oleh Molotov Cherry, Serangan Dasar menimbulkan 20,0% (35,0% pada 6★) bonus Physical DMG dalam Mode Fervent.   \r\n
                ",
                'stats' => "279 ATK \r\n 37 CRT",
                'source' => "Foundry",
                'image' => "Sleeper's_Dream_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //111
            [
                'name' => "Surtr Muspellsverd",
                'type' => "Greatsword",
                'rarity' => "5star",
                'detail' =>
                "Eldr of Ragnarok\r\n
                [SP: 0][CD: 25 detik] Mengkonsumsi 50% HP, menyalakan musuh untuk menimbulkan 12,1% (20,0% pada 6★) ATK Fire DMG per 0,5 d, dan membuat perisai yang dapat menyerap kerusakan setara dengan 80% HP dasar maksimal (maks 5000). Perisai bertahan selama 12 detik, yang mana dalam durasi tersebut: Skill Ultimate Blood Rose tidak memerlukan HP; Vermilion Knight: Ultimate Eclipse memulihkan 5,6 (8,0 pada 6★) SP dan Charged ATK serta Ultimate-nya menyebabkan 18,2% (30,0% pada 6★) bonus Fire DMG. Senjata aktif tidak dapat digunakan di bawah 20% HP.   \r\n
                Rivener of an Era\r\n
                Saat serangan Ultimate atau mode burst menyerang, pengguna menimbulkan 7% (12% pada 6★) bonus Fire DMG selama 10,6 d (13,0 d pada 6★). CD: 1 detik. Maksimal 4 tumpukan (proses selanjutnya akan mengatur ulang durasinya).   \r\n
                Rekindled Fire  \r\n
                Pengguna memperoleh 16% (20% pada 6★) pemulihan SP, 16% (20% pada 6★) Kecepatan Serangan, dan 26% (30% pada 6★) Total DMG.   \r\n
                ",
                'stats' => "272 ATK \r\n 29 CRT",
                'source' => "Foundry",
                'image' => "Surtr_Muspellsverd_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //112
            [
                'name' => "7th Sacred Relic",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Crosscut Storm\r\n
                [SP: 0][CD: 24 detik] Meluncurkan 2 gelombang pedang berturut-turut, menimbulkan hingga 8 x 25% ATK Physical DMG ke musuh di jalurnya. Gelombang pedang meledak ketika bersilangan, menimbulkan 230% (350% pada 5★) ATK Physical DMG dan memingsankan musuh selama 4,40 detik (6,00 detik pada 5★).   \r\n
                Sacred Rule\r\n
                Setelah mengenai musuh yang terkena efek stun, memperoleh 34,0% (50,0% pada 5★) Kecepatan Serangan dan 17,0% (25,0% pada 5★) Tingkat Kritik selama 4 detik. CD Pemicu: 17 detik (7 detik pada 5★).   \r\n
                ",
                'stats' => "167 ATK \r\n 32 CRT",
                'source' => "Exchange house \r\n Limited/Rotation Supplies",
                'image' => "7th_Sacred_Relic_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //113
            [
                'name' => "Balmung",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Ultra Slash - Haze\r\n
                Menyerang dengan Tebasan Ultra ke arah musuh di depan, menimbulkan 44% (80% pada 5★) ATK DMG Fisik. 15% kemungkinan melancarkan Enhanced Ultra Slash, menimbulkan 88% (160% pada 5★) ATK Physical DMG. Ultra Slash yang ditingkatkan memiliki CD 0,8 detik.   \r\n
                Ultra Slash - Break\r\n
                [SP: 20][CD: 25 detik] Karakter memperoleh 13,0% (25,0% pada 5★) Physical DMG. Semua Ultra Slash diubah menjadi Enhanced Ultra Slash selama 8 detik.   \r\n
                ",
                'stats' => "181 ATK \r\n 20 CRT",
                'source' => "Foundry \r\n Exchange house \r\n Limited/Rotation Supplies",
                'image' => "Balmung_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //114
            [
                'name' => "Betrayer",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Treason\r\n
                [SP: 18][CD: 12 detik] Meluncurkan 6 misil pelacak berturut-turut, masing-masing menimbulkan 113% (200% pada 5★) ATK Physical DMG ke target dan musuh di sekitar dalam AOE kecil. Musuh yang terkena akan terkena efek Stun selama 2,07 detik (2,50 detik pada 5★).   \r\n
                Betrayer's Counter \r\n
                Saat diserang, memperoleh 33% (50% pada 5★) peluang menimbulkan 108% (160% pada 5★) ATK Physical DMG.   \r\n
                ",
                'stats' => "145 ATK \r\n 7 CRT",
                'source' => "Strory & Open World",
                'image' => "Betrayer_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //115
            [
                'name' => "Blood Dance",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Blood Drake\r\n
                [SP: 20][CD: 15 detik] Menciptakan tornado darah yang menyapu musuh, menimbulkan 9 x 35% ATK Physical DMG dan mengirim mereka ke dalam Kemarahan Darah, menggandakan Kecepatan Serangan tetapi membuat mereka menerima 36% (60% pada 5★) lebih banyak Elemental DMG. Kemarahan Darah ini berlangsung selama 6,60 detik (9,00 detik pada 5★).   \r\n
                Blood Revival \r\n
                Jumlah Pukulan Kombo melebihi 15, memperoleh 18% (30% pada 5★) Physical DMG. Saat tidak digunakan, sembuhkan 15,6 (30,0 pada 5★) HP setiap 0,5 detik jika HP di bawah 50%.   \r\n
                ",
                'stats' => "184 ATK \r\n 8 CRT",
                'source' => "Exchange house \r\n Limited/Rotation Supplies",
                'image' => "Blood_Dance_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //116
            [
                'name' => "Cleaver of Shamash",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Goka Fire
                [SP: 20][CD: 20 detik] Bebaskan kekuatan Shamash yang sebenarnya dengan mengonsumsi kekuatan hidup seseorang. Pukulan yang menggunakan Serangan Dasar, Kombo, Dibebankan, dan Ultimate karakter akan mengakibatkan 286 (500 pada 5★) Fire DMG tambahan. CD: 0,3 detik. Setelah menggunakan skill, kehilangan 2% Max HP per detik. Jika HP saat ini di bawah 50%, kehilangan 1% HP Maks per detik. Durasi: 10 detik. Karakter tidak akan mati karena skill.   \r\n
                Nirvana
                Karakter memperoleh 7,0% (13,0% pada 5★) Total Pengganda DMG. Pada HP Maks di bawah 50%, karakter memperoleh 10% (15% pada 5★) Pengurangan DMG Total dan menyembuhkan 9,9 (15,0 pada 5★) HP/dtk.   \r\n
                Key of Destruction
                Dalam  co-op raids, serangan tim memperoleh 12,0% (20,0% pada 5★) Total Pengganda DMG dan penyembuhan tim sebesar 5,0% (7,0% pada 5★) HP selama 5,1 detik setiap kali karakter menggunakan keterampilan senjata.   \r\n
                ",
                'stats' => "270 ATK \r\n 33 CRT",
                'source' => "Events \r\n Raids ",
                'image' => "Cleaver_of_Shamash_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //117
            [
                'name' => "Dark Xuanyuan Sword",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Dark Will
                [SP: 22][CD: 25 detik] Mendapat 20% (35% pada 5★) DMG Fisik selama 8 detik berikutnya. Pembunuhan pertama dalam durasi ini memicu Time Fracture selama 8 detik dan memperpanjang durasi bonus Physical DMG hingga akhir Time Fracture.   \r\n
                Time Shatterer
                Saat serangan terjadi, picu Fraktur Waktu global selama 3,0 detik (4,5 d pada 5★). Efek dapat dipicu setiap 60 detik sekali.   \r\n
                ",
                'stats' => "159 ATK \r\n 16 CRT",
                'source' => "Foundry",
                'image' => "Dark_Xuanyuan_Sword_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //118
            [
                'name' => "Dragon Spine",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Draconic Vortex
                [SP: 6][CD: 15 detik] Melompat ke arah target untuk melepaskan tebasan berputar, menimbulkan 360% (600% pada 5★) ATK DMG Fisik kepada musuh dalam AOE besar dan melumpuhkan mereka selama 4,5 detik. Selama periode tersebut, musuh juga mengeluarkan darah, menerima 96 (240 pada 5★) DMG setiap 0,5 detik.   \r\n
                Blood Thirsty
                Setiap serangan terhadap musuh yang berdarah akan menyembuhkan karakter sebesar 20 (40 pada 5★) HP.   \r\n
                ",
                'stats' => "171 ATK \r\n 8 CRT",
                'source' => "Foundry \r\n Events",
                'image' => "Dragon_Spine_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //119
            [
                'name' => "Godslayer: Surtr",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Aesirs' Bane
                Saat Serangan Beruntun mengenai musuh, karakter memperoleh 3% (5% pada 5★) Total Pengganda DMG selama 6,8 d (10,0 d pada 5★). Efek dipicu 1 kali setiap 1 detik. Menumpuk hingga 4 kali. Memicu ini lagi akan mengatur ulang durasinya.   \r\n
                The Burnt One
                Karakter memperoleh 9% (15% pada 5★) pemulihan SP, 9% (15% pada 5★) Kecepatan Serangan lebih cepat, dan 13% (25% pada 5★) Total Pengganda DMG. \r\n
                ",
                'stats' => "175 ATK \r\n 17 CRT",
                'source' => "Exchange house \r\n Limited/Rotation Supplies",
                'image' => "Godslayer_-_Surtr_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //120
            [
                'name' => "Gyukikiri Nagamitsu",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Kageryuu Blade Art
                Mulai mengisi energi saat berlari. Ketika durasi sprint mencapai 0,5 detik, 1,5 detik, dan 3 detik, Serangan Sprint berikutnya menghasilkan ledakan yang berpusat pada serangan musuh pertama, menimbulkan 320%, 440%, dan 640% (400%, 600%, dan 800% pada 5★) ATK masing-masing Physical DMG.   \r\n
                Sharp Edge
                Saat Jumlah Pukulan Kombo 5 atau kurang, memperoleh 18,4% (32,0% pada 5★) DMG Fisik. \r\n
                ",
                'stats' => "184 ATK \r\n 8 CRT",
                'source' => "Exchange house \r\n Limited/Rotation Supplies",
                'image' => "Gyukikiri_Nagamitsu_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //121
            [
                'name' => "Hrungnir",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Rime Fury
                [SP: 12][CD: 20 detik] Melompat ke udara dan mendarat pada target, menimbulkan 380% (700% pada 5★) ATK Ice DMG ke musuh di dekat target. Setelah mendarat, karakter memperoleh 18% (30% pada 5★) Kecepatan Serangan selama 10 detik.   \r\n
                Shattered Whet
                Karakter memperoleh 10% (25% pada 5★) Total Pengganda DMG. Menyerang musuh yang membeku atau dengan Kecepatan Gerak atau Kecepatan Serangan yang diperlambat memiliki peluang 13% (25% pada 5★) untuk menimbulkan 110% (150% pada 5★) ATK bonus DMG Fisik. Ada jeda minimal 1 detik antara memicu bonus DMG pada target. \r\n
                ",
                'stats' => "177 ATK \r\n 17 CRT",
                'source' => "Exchange house \r\n Limited/Rotation Supplies",
                'image' => "Hrungnir_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //122
            [
                'name' => "Judgment by Dawn",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Hyper RPM
                [SP: 12][CD: 20 detik] Meningkatkan putaran mata gergaji. Serangan dasar (termasuk serangan bermuatan) memperoleh 38,0% (50,0% pada 5★) Kecepatan Serangan dan 17,0% (25,0% pada 5★) Tingkat Kritik selama 8 d. Juga meningkatkan Ignore Interrupt untuk pengguna dalam durasinya.   \r\n
                Lightning Punishment
                Serangan Kritis mempunyai 17,0% (25,0% pada 5★) pelepasan lingkaran petir yang berpusat pada musuh, menimbulkan 761 (1.800 pada 5★) DMG Petir dan merusaknya selama 4 d. Musuh yang mengalami gangguan telah mengurangi Ignore Interrupt dan 50% lebih sedikit DEF. CD: 7 detik. \r\n
                ",
                'stats' => "171 ATK \r\n 27 CRT",
                'source' => "Foundry",
                'image' => "Judgment_by_Dawn_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //123
            [
                'name' => "Labor of Olympus",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Prometheus
                Dalam 6,8 detik berikutnya (10,0 detik pada 5★) setelah melepaskan mode Ultimate dan Burst, tiap serangan yang dilepaskan oleh pengguna juga mengakibatkan 36,0% (60,0% pada 5★) ATK Fire DMG; namun, bonus DMG ini hanya dapat dipicu satu kali per detik terhadap setiap target.   \r\n
                Herakles
                Ultimate and Burst ATKs deal 23.0% (35.0% at 5★) more Total DMG.  \r\n
                ",
                'stats' => "180 ATK \r\n 15 CRT",
                'source' => "Story & Open World",
                'image' => "Labor_of_Olympus_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //124
            [
                'name' => "Might of An-Utu",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Libation to Fire
                [SP: 0][CD: 25 detik] Menyerang musuh dengan Might of An-Utu, menimbulkan 100% + 580%/961%/1,541% (900%/1,600%/2,500% pada 5★) ATK Fire DMG pada 0/1/2 tumpukan muatan masing-masing. Kehilangan 8% HP saat ini per detik selama 5 detik setelah menggunakan senjata aktif (tidak menyebabkan kematian). Tidak dapat menggunakan senjata yang aktif dengan HP di bawah 10%. Pengisian awal dimulai dari 1 tumpukan; mendapatkan 1 tumpukan ketika menghabiskan tidak kurang dari 30 SP sekaligus.   \r\n
                Solar Prominence
                Pengguna memperoleh 22,0% (30,0% pada 5★) Pengganda DMG Total, dan senjata aktifnya menimbulkan 12,0% (20,0% pada 5★) Kerentanan Api pada musuh selama 10 detik. SP awal pengguna +17,2 (+30,0 pada 5★). Tidak berfungsi di Dunia Terbuka.  \r\n
                Key of Destruction
                Dalam co-op raids, serangan tim memperoleh 12,0% (18,0% pada 5★) Total Pengganda DMG dan tim menyembuhkan 5,0% (7,0% pada 5★) HP selama 5,1 d setiap kali karakter menggunakan keterampilan senjata.  \r\n
                ",
                'stats' => "189 ATK \r\n 8 CRT",
                'source' => " Limited/Rotating Supplies",
                'image' => "Might_of_An-Utu_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //125
            [
                'name' => "Nidhogg's Claws",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Deadly Bite
                [SP: 25][CD: 12 detik] Serangan gergaji mesin brutal yang mengakibatkan 24 x 26% (32% pada 5★) ATK Physical DMG ke musuh dalam jangkauan. Menarik kembali senjatanya pada akhirnya untuk memukul mundur musuh di sekitar, menimbulkan 265% (325% pada 5★) ATK Physical DMG. Karakter juga mendapatkan kekebalan selama rangkaian serangan.   \r\n
                Deadly Rend
                Serangan mempunyai peluang 6,0% (10,0% pada 5★) untuk menyebabkan pendarahan pada musuh, menimbulkan 68 (152 pada 5★) Physical DMG setiap 0,5 detik selama 3 detik.  \r\n
                ",
                'stats' => "173 ATK \r\n 24 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Nidhogg's_Claws_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //126
            [
                'name' => "Ranger's Sawtooth",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Flame Block
                [SP: 30][CD: 30 detik] Selama 15 detik berikutnya, pengguna mengalami 60% Pergerakan Lambat namun menerima 13% (25% pada 5★) lebih sedikit Physical DMG dan 13% (25% pada 5★) lebih sedikit DMG Elemental, dan mengakibatkan 280 (600 pada 5★) DMG Api setiap detik ke musuh terdekat.   \r\n
                Bramblethorn
                Serangan mempunyai peluang 6,0% (10,0% pada 5★) untuk menyebabkan pendarahan pada musuh, menimbulkan 68 (152 pada 5★) Physical DMG setiap 0,5 detik selama 3 detik.  \r\n
                ",
                'stats' => "155 ATK \r\n 8 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Ranger's_Sawtooth_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //127
            [
                'name' => "Schiffschneider",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Magstorm Surge
                [SP: 20][CD: 18 detik] Melepaskan tebasan ke bawah yang menghasilkan badai EM untuk menjatuhkan musuh dalam AOE, menyebabkan 1.090 (2.333 pada 5★) Lightning DMG dan membuat mereka konduktif. Musuh yang bersifat konduktif menerima 34% (50% pada 5★) lebih banyak Lightning DMG selama 7 detik.   \r\n
                EM Cleaver
                Serangan menimbulkan tambahan 36 (80 pada 5★) Lightning DMG, dan selanjutnya memperoleh 18% (30% pada 5★) Crit Rate terhadap musuh yang lumpuh.  \r\n
                ",
                'stats' => "184 ATK \r\n 8 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Schiffschneider_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //128
            [
                'name' => "Sleeping Beauty",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Magstorm Surge
                [SP: 12][CD: 25 detik] Pengguna memperoleh 12,0% (20,0% pada 5★) Crit Rate dan 26,0% (50,0% pada 5★) Crit DMG selama 10 d. Jika HP pengguna di bawah 50%, maka sembuhkan 12,0 (20,0 pada 5★) HP per 0,5 detik.   \r\n
                Thorny Briar
                ATK yang terisi menimbulkan 72% (120% pada 5★) ATK DMG Fisik lainnya pada musuh. Efek ini terpicu setiap 1 detik sekali. Wielder memperoleh Ignore Interrupt dan 14,0% (30,0% pada 5★) DEF.  \r\n
                ",
                'stats' => "180 ATK \r\n 15 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Sleeping_Beauty_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //129
            [
                'name' => "Sunfire",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Sunfire Impact
                [SP: 20][CD: 12 detik] Melompat dan mendarat pada target untuk menjatuhkan musuh di sekitarnya ke udara. Menimbulkan 1.156 (2.890 pada 5★) Fire DMG dan membakar musuh untuk selanjutnya menimbulkan 109 (308 pada 5★) Fire DMG setiap 0,5 detik selama 6 detik.   \r\n
                Sunfire Knight
                Mendapat 18% (30% pada 5★) Fire DMG.  \r\n
                ",
                'stats' => "178 ATK \r\n 16 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Sunfire_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //130
            [
                'name' => "Swan Lake",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Austenite Blade
                [SP: 18][CD: 30 detik] Memicu 2 ledakan yang mengakibatkan 50% + 140% + 260% (50% + 300% + 500% pada 5★) ATK Physical DMG. Ledakan ke-2 melemahkan musuh (DEF diturunkan sebesar 50%) selama 6,4 d (8,0 d pada 5★). Dapat menampung 2 biaya. Melakukan Retaliation EX akan memberikan Blueberry Blitz 1 charge. Penggunaan Austenite Blade selanjutnya akan memberikan 9 SP sebagai balasannya.   \r\n
                Odette's Apotheosis
                Saat Ultimate menyerang, pengguna memperoleh 24,0% (40,0% pada 5★) Physical DMG dan 24,0% (40,0% pada 5★) Crit DMG selama 6,6 detik (9,0 detik pada 5★).  \r\n
                ",
                'stats' => "174 ATK \r\n 19 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Swan_Lake_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //131
            [
                'name' => "Wotan's Cleaver",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Death Gaze
                [SP: 24][CD: 18 detik] Meluncurkan ledakan laser menyapu dari depan dengan sudut sempit yang menghasilkan beberapa pukulan dan menimbulkan 32 (89 pada 5★) Fire DMG per pukulan. Pukul musuh lalu meledak, menimbulkan 304 (717 pada 5★) Fire DMG ke musuh di sekitar dalam AOE kecil dan memicu mereka, menimbulkan 32 (89 pada 5★) Fire DMG setiap 0,5 detik selama  \r\n
                Thermal Power
                Serangan menimbulkan 38 (95 pada 5★) Fire DMG tambahan.  \r\n
                ",
                'stats' => "139 ATK \r\n 16 CRT",
                'source' => "Story & Open World",
                'image' => "Wotan's_Cleaver_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //132
            [
                'name' => "Xuanyuan Sword",
                'type' => "Greatsword",
                'rarity' => "4star",
                'detail' =>
                "Elements Drive
                [SP: 9][CD: 12 detik] Meluncurkan elemen petir, api, dan es secara terus-menerus, masing-masing menimbulkan 144% (240% pada 5★) DMG Fisik ditambah 144% (240% pada 5★) Elemental DMG terkait. Setiap Elemental DMG yang terkait dapat melumpuhkan, membakar, atau membekukan musuh. Skillnya dapat diisi sebanyak 3 kali.
                Selama jangka waktu setelah menggunakan keterampilan aktif (lightning: 4 detik, Fire: 7 detik, Ice: 10 detik), semua musuh di medan perang menerima 60% (100% pada 5★) ATK Elemental DMG dari petir, meteor, atau batu es setiap 1 detik .  \r\n
                Sword Defence
                Serangan yang dibebankan memperoleh 12% (20% pada 5★) Total Pengganda DMG. Saat diserang atau setelah Ultimate Evasion, luncurkan 2 pedang tembus pandang Xuanyuan ke arah target musuh, menjatuhkan semua musuh ke udara di sepanjang jalan dan menimbulkan 120% (200% pada 5★) ATK Physical DMG ke musuh yang terkena. CD: 10 detik.  \r\n
                Key of Domination
                In co-op raids, tim memperoleh 10,0% (20,0% pada 5★) Semua Elemental DMG dan menerima 9,0% (15,0% pada 5★) Pengurangan Semua Elemental DMG selama 6,0 d setiap kali karakter menggunakan keterampilan senjata.   \r\n
                ",
                'stats' => "176 ATK \r\n 20 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Xuanyuan_Sword_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //133
            [
                'name' => "Ai-chan's Hammer",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Stop Stealing Power!
                [SP: 15][CD: 15 detik] Menghancurkan tanah menggunakan Palu Ai-Chan untuk memukul mundur musuh di sekitarnya, menimbulkan 227% (300% pada 4★) ATK DMG Fisik. Memiliki peluang 50% untuk melumpuhkan musuh selama 3 detik.  \r\n
                ",
                'stats' => "126 ATK \r\n 13 CRT",
                'source' => "Events",
                'image' => "Ai-chan's_Hammer_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //134
            [
                'name' => "Alloy Wotan's Cleaver",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Alloy Death Gaze
                [SP: 18][CD: 16 detik] Melepaskan ledakan laser sapuan frontal sudut kecil. Musuh yang terkena akan meledak, menimbulkan 223 (536 pada 4★) Fire DMG ke musuh di sekitar dalam AOE kecil.  \r\n
                ",
                'stats' => "93 ATK \r\n 9 CRT",
                'source' => "Story & Open World",
                'image' => "Alloy_Wotan's_Cleaver_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //135
            [
                'name' => "Chain Sword",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Jagged Strike
                [SP: 14][CD: 18 detik] Meningkatkan putaran mata gergaji. Serangan dasar (termasuk serangan bermuatan) memperoleh 29,0% (40,0% pada 4★) Kecepatan Serangan dan 10% Tingkat Kritik selama 6 detik.  \r\n
                ",
                'stats' => "119 ATK \r\n 16 CRT",
                'source' => "Events",
                'image' => "Chain_Sword_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //136
            [
                'name' => "Crimson Queen",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Blood Awakening
                Menimbulkan lebih banyak DMG Fisik pada HP rendah: Mendapat 0,40% (0,60% pada 4★) DMG Fisik untuk setiap 1% HP yang hilang.  \r\n
                ",
                'stats' => "83 ATK \r\n 10 CRT",
                'source' => "Story & Open World \r\n Foundry",
                'image' => "Crimson_Queen_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //137
            [
                'name' => "Inquisition Torch",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Rainbow Flames
                Serangan berpeluang 11,11% menimbulkan 134 (305 pada 4★) Fire DMG ke musuh di sekitar target yang terkena.  \r\n
                ",
                'stats' => "112 ATK \r\n 10 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Inquisition_Torch_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //138
            [
                'name' => "Ion Resonance",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Ionic Harmony
                [SP: 15][CD: 10 detik] Mengangkat bilahnya untuk melepaskan energi ionik, menimbulkan 3 x 348 (750 pada 4★) Lightning DMG ke target dan musuh di sekitarnya dalam AOE kecil dan melumpuhkan mereka selama 2 detik.  \r\n
                ",
                'stats' => "118 ATK \r\n 19 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Ion_Resonance_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //139
            [
                'name' => "King Cobra",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Royal Serpent
                Karakter memperoleh 12 (20 jam 4★) SP awal saat memasuki pertempuran.  \r\n
                ",
                'stats' => "128 ATK \r\n 3 CRT",
                'source' => "Limited/Rotating Supplies \r\n Foundry",
                'image' => "King_Cobra_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //140
            [
                'name' => "Nitro Crystal",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Icebound
                Serangan memperoleh 12,7% (20,0% pada 4★) DMG Fisik terhadap musuh yang membeku.  \r\n
                ",
                'stats' => "116 ATK \r\n 22 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Nitro_Crystal_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //141
            [
                'name' => "Vanguard",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Valkyrie Impact
                [SP: 14][CD: 18 detik] Melepaskan tebasan ke bawah yang menghasilkan gelombang yang menghancurkan tanah, menjatuhkan musuh di sepanjang jalurnya dan menimbulkan 395% (450% pada 4★) ATK Physical DMG.  \r\n
                ",
                'stats' => "126 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies \r\n Foundry",
                'image' => "Vanguard_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //142
            [
                'name' => "Violet Knight",
                'type' => "Greatsword",
                'rarity' => "3star",
                'detail' =>
                "Purple Impact
                [SP: 15][CD: 7 detik] Melesat ke arah target dan melepaskan angin pedang, menimbulkan 3 x 112% (145% pada 4★) ATK Physical DMG ke musuh dalam AOE di depan karakter.  \r\n
                ",
                'stats' => "123 ATK \r\n 11 CRT",
                'source' => "Events",
                'image' => "Violet_Knight_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //143
            [
                'name' => "Energy Greatsword",
                'type' => "Greatsword",
                'rarity' => "2star",
                'detail' =>
                "
                ",
                'stats' => "77 ATK \r\n 6 CRT",
                'source' => "Events",
                'image' => "Energy_Greatsword_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //144
            [
                'name' => "Fusion Sword EX",
                'type' => "Greatsword",
                'rarity' => "2star",
                'detail' =>
                "Nuclear Shock
                [SP: 10][CD: 9 detik] Menusukkan pedang ke tanah dan menjatuhkan musuh di sekitarnya, menimbulkan 324% (400% pada 3★) ATK Physical DMG.  \r\n
                ",
                'stats' => "78 ATK \r\n 5 CRT",
                'source' => "Events",
                'image' => "Fusion_Sword_EX_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //145
            [
                'name' => "Hybrid Type-16",
                'type' => "Greatsword",
                'rarity' => "2star",
                'detail' =>
                "Suppression
                Menyerang musuh yang lumpuh, terkena stun, dan Perlambatan Waktu memperoleh 12% (20% pada 3★) Total Pengganda DMG.  \r\n
                ",
                'stats' => "79 ATK \r\n 1 CRT",
                'source' => "Events",
                'image' => "Hybrid_Type-16_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //146
            [
                'name' => "Hybrid Type-27",
                'type' => "Greatsword",
                'rarity' => "2star",
                'detail' =>
                "Shoryu Cleave
                [SP: 12][CD: 10 detik] Menjatuhkan musuh di depan karakternya ke udara, menimbulkan 266% (350% pada 3★) ATK Physical DMG.  \r\n
                ",
                'stats' => "73 ATK \r\n 15 CRT",
                'source' => "Events",
                'image' => "Hybrid_Type-27_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //147
            [
                'name' => "Nuclear PRI",
                'type' => "Greatsword",
                'rarity' => "2star",
                'detail' =>
                "
                ",
                'stats' => "76 ATK \r\n 8 CRT",
                'source' => "Events",
                'image' => "Nuclear_PRI_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //148
            [
                'name' => "Greatsword",
                'type' => "Greatsword",
                'rarity' => "2star",
                'detail' =>
                "
                ",
                'stats' => "42 ATK \r\n 2 CRT",
                'source' => "Default Gear \r\n Story & Open World",
                'image' => "Greatsword_(2).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //149
            [
                'name' => "Proto Pulse Cleaver",
                'type' => "Greatsword",
                'rarity' => "2star",
                'detail' =>
                "Temporary Overclocking
                [SP: 8][CD: 15 detik] Memperkuat senjata sehingga serangan dasar (termasuk kombo dan serangan bermuatan) memperoleh 20% (32% pada 4★) DMG Fisik selama 5 detik.  \r\n
                ",
                'stats' => "42 ATK \r\n 4 CRT",
                'source' => "Events",
                'image' => "Proto_Pulse_Cleaver_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //150
            [
                'name' => "Domain of Sanction",
                'type' => "Katana",
                'rarity' => "5star",
                'detail' =>
                "Raizan Cleave
                [SP: 0][CD: 15 detik] Meluncurkan tebasan kuat ke depan dengan pedang yang dipenuhi petir, menimbulkan 817% (1500% pada 6★) ATK Lightning DMG dan melumpuhkan musuh selama 5 detik. Penggunanya tidak terkalahkan saat menggunakan aktif. Saat digunakan oleh Herrscher of Thunder, ia juga memberikan Narukami's Mark pada musuh yang terkena serangannya selama 15 detik dan dapat dihubungkan dalam Shinzan Strike. Saat menunggangi naga, Bombard menimbulkan 24,3% (40,0% pada 6★) bonus Lightning DMG.  \r\n
                Deafening Peal
                Menggunakan yang aktif akan meningkatkan Total DMG pengguna sebesar 12,1% (20,0% pada 6★) selama 20 d. Jika digunakan oleh Herrscher of Thunder, mengaktifkan Ultimate-nya juga dapat menghasilkan efek ini dan proses berikutnya menyegarkan durasinya. Mentransmisikan aktif akan memulihkan 121 (200 pada 6★) Herrscher Charge.  \r\n
                Divine Penalty
                Wielder menimbulkan 37,1% (45,0% pada 6★) bonus Lightning DMG. Saat digunakan oleh Herrscher of Thunder, dia menimbulkan 12,1% (20,0% pada 6★) bonus Lightning DMG ke musuh dengan Tanda Narukami.  \r\n
                ",
                'stats' => "309 ATK \r\n 8 CRT",
                'source' => "Foundry",
                'image' => "Domain_of_Sanction_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //151
            [
                'name' => "Frozen Naraka",
                'type' => "Katana",
                'rarity' => "5star",
                'detail' =>
                "Utpala Aura
                [SP: 0][CD: 25 detik] Menghasilkan Bidang 12 detik yang bergerak bersama pengguna. Di AOE, pengguna memperoleh Ignore Interrupt dan 50% Total DMG Reduction. Musuh dalam AOE menerima 17,9% (25,0% pada 6★) Ice DMG lebih banyak dan secara bertahap kehilangan Kecepatan Gerakan dan Kecepatan ATK hingga mereka membeku. Ketuk lagi tombol Keterampilan Senjata untuk melancarkan ATK Spesial (1 kali per Bidang) yang mengakibatkan 300% + 564% (800% pada 6★) ATK Ice DMG terhadap musuh di depan. CD dimulai hanya setelah Field menghilang.  \r\n
                Frigid Incense
                Wielder menimbulkan 37% (45% pada 6★) Ice DMG lebih banyak.  \r\n
                Glacial Bane
                Dapatkan 1 tagihan per 5 detik. Pukulan berikutnya menimbulkan 103% (150% pada 6★) ATK Ice DMG terhadap target dan musuh di dekatnya, memperlambat kecepatan ATK dan Kecepatan Gerak mereka sebesar 40% selama 3,6 detik (6,0 detik pada 6★) (efek lambat tidak berfungsi pada musuh dalam AOE Skill Aktif). Bonus perlengkapan Goushinnso Memento: Memberikan 200 energi kinetik lebih banyak dan 2,8 (4,0 pada 6★) SP.  \r\n
                ",
                'stats' => "283 ATK \r\n 24 CRT",
                'source' => "Foundry",
                'image' => "Frozen_Naraka_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //152
            [
                'name' => "MAG-Typhoon",
                'type' => "Katana",
                'rarity' => "5star",
                'detail' =>
                "Raiden's Cyclone
                [SP: 0][CD: 15 detik] Menimbulkan ATK 3 urutan terhadap musuh. 2 urutan pertama: Menimbulkan total 250% Lightning DMG. Urutan ke-3: Menimbulkan 403% (600% pada 6★) ATK Lightning DMG. Musuh akan dilumpuhkan oleh ATK selama 5 detik dan menerima 13,2% (25,0% pada 6★) lebih banyak Lightning DMG selama 12,0 detik (efek tidak dapat ditumpuk).
                Bonus perlengkapan Lightning Empress: Skill Aktif menimbulkan debuff konduktif Soul Razor pada musuh. Ketuk [ATK] tepat setelah mengeluarkan Skill Aktif untuk langsung melakukan Combo ATK.  \r\n
                EM Pulsar
                Pengguna pengguna menimbulkan 43% (50% pada 6★) lebih banyak DMG Petir. Setelah menggunakan Skill Aktif senjata, pengguna memperoleh Ignore Interrupt dan 50% Total DMG Reduction.  \r\n
                Roaring Nimbus
                Saat mengenai musuh yang lumpuh dengan ATK Dasar atau ATK Kombo, panggil Heaven's Thunder yang mengakibatkan 132% (250% pada 6★) ATK Lightning DMG terhadap target dan musuh di sekitar dan melumpuhkan semua musuh yang tidak dilumpuhkan selama 1,2 d (2,0 d pada 6★ ). CD: 12,4 detik (10,0 detik pada 6★).  \r\n
                ",
                'stats' => "298 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "MAG-Typhoon_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //153
            [
                'name' => "Ruinous Sakura",
                'type' => "Katana",
                'rarity' => "5star",
                'detail' =>
                "Bloodfyre Frenzy
                [SP: 0][CD: 21 detik] Melepaskan 2 tebasan: tebasan pertama menimbulkan 500% ATK DMG Api, yang selama tebasan tersebut pengguna tidak terkalahkan, dan mendapatkan buff (efek buff: tambahan menimbulkan 200% ATK DMG Api) untuk tebasan kedua, jika dia menerima serangan apa pun, lalu penggunanya memperoleh kekebalan terhadap serangan pertama yang dilakukan dalam 5 detik berikutnya; Pukulan ke-2 menimbulkan 221% (300% pada 6★) ATK Fire DMG dan memicu target untuk selanjutnya menimbulkan 65 Fire DMG per 0,5 d selama 5 d, dan penggunanya tidak terkalahkan. Jika digunakan oleh Flame Sakitama, musuh yang terkena tebasan pertama akan menerima 28,6% (42,0% pada 6★) lebih banyak Fire Dmg dan 10% lebih banyak Ice dan Lightning DMG selama 17 d (tidak ditumpuk dengan efek Combo Follow-up Attack).  \r\n
                Pyre of Gojinka
                Pengguna menimbulkan 41% (45% pada 6★) Fire DMG lebih banyak.  \r\n
                Fuel the Ruin
                Saat melepaskan Ultimate, kekuatan Demonblade meningkatkan Total DMG pengguna sebesar 6,1% (10,0% pada 6★) selama 15 d, selama itu pengguna juga dikutuk oleh Demonblade dan kehilangan 1% dari HP maksimalnya per detik (tidak akan menyebabkan kematian). Pukulan ke-2 dari Bloodefrye Frenzy melepaskan kekuatan Demonblade dalam bentuk api, dan untuk setiap 1% HP pengguna yang hilang, pukulan ini juga mengakibatkan 49% (80% pada 6★) ATK Fire DMG (tumpuk maksimal: 10). Pengguna berhenti kehilangan HP setelah melancarkan serangan ke-2.  \r\n
                ",
                'stats' => "272 ATK \r\n 29 CRT",
                'source' => "Foundry",
                'image' => "Ruinous_Sakura_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //154
            [
                'name' => "Seven Thunders of Retribution: Narukami",
                'type' => "Katana",
                'rarity' => "5star",
                'detail' =>
                "Narukami Dvinity
                [SP: 0][CD: 15 detik] Salurkan energi Honkai di Kunci Ilahi untuk menebas sinar berbentuk X dan meledakkannya dengan kilat dalam semburan sinar dimensional, menghasilkan 164,2% × 2 + 60,7% × 4 (400,0% × 2 + 100,0% × 4 pada 6 ★) Total ATK Lightning DMG. Pukulan pertama menimbulkan 10 Paralyze Trauma. Wielder tidak terkalahkan saat menggunakan senjata aktif dan mendapatkan kembali 10 SP. Bonus perlengkapan Herrscher of Thunder: Dapat menggunakan senjata yang aktif dalam mode burst untuk mengakibatkan 242,8% (400,0% pada 6★) + 100% × 4 ATK Lightning DMG. Dia tidak terkalahkan dan Skill Ultimate Evasion terpicu saat menggunakan senjata aktif. Setelah mengaktifkan senjatanya, dia dapat langsung menggunakan Finisher, yang menambah CD Ultimate sebanyak 11 detik. Saat terkena, 2 jenis senjata aktif menimbulkan Narukami's Mark selama 15 detik.  \r\n
                Forfeiture
                Wielder menimbulkan 29,3% (45,0% pada 6★) bonus Total DMG kepada musuh dengan tipe yang lebih lemah. Mengeluarkan Ultimate menyegarkan CD keterampilan senjata (CD: 10d). Bonus perlengkapan Herrscher of Thunder: Selama 2 urutan Ultimate, semua pengatur waktu keterampilan dan pengatur waktu panggung dijeda. Dia mendapat 200 Herrscher Charge di setiap entri (CD: 10 detik). Jika dia mengaktifkan senjatanya dalam mode burst dan Finisher sebelum keluar, naga tersebut akan tetap berada di lapangan sebagai entitas yang dipanggil dan membombardir musuh di udara. Dia mempertahankan bentuk Herrscher saat naga itu hadir. Naga tersebut memperoleh hingga 600 Herrscher Charge miliknya saat ini, dan pengebomannya menghabiskan 200% Herrscher Charge dan menyebabkan 70% DMG dibandingkan dengannya. Naga menghilang jika kehilangan seluruh energinya, berada di medan selama 10 detik, atau dia menggunakan Ultimate lagi.  \r\n
                Inverse
                Dalam mode non-burst, Lightning DMG pengguna meningkat sebesar 27,1% (35,0% pada 6★). Bonus perlengkapan Herrscher of Thunder: Saat naga kehilangan seluruh energinya atau mencapai batas waktu, ia akan menukik ke arah musuh dan menimbulkan 100,0% ATK Lightning DMG. Saat naga hadir, setiap Serangan Shinzan menyebabkan serangan menyelam tambahan 221,4% (300,0% pada 6★) ATK Lightning DMG (dibatasi 2 x 221,4% (300,0% pada 6★).  \r\n
                Key of Judgment
                Dalam co-op raids, total Elemental DMG karakter meningkat sebesar 16,0% (25,0% pada 6★).   \r\n
                ",
                'stats' => "313 ATK \r\n 8 CRT",
                'source' => "Foundry",
                'image' => "even_Thunders_of_Retribution_-_Narukami_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //155
            [
                'name' => "3rd Sacred Relic",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Sacred Charge
                Saat Jumlah Pukulan Kombo melebihi 20, 50, dan 100, memperoleh 12,0%, 22,0%, dan 32% (20,0%, 30,0%, dan 40% pada 5★) Physical DMG.  \r\n
                Saint's Bless
                Selama Mode Burst, memperoleh 22% (30% pada 5★) Physical DMG.  \r\n
                ",
                'stats' => "161 ATK \r\n 41 CRT",
                'source' => "Foundry \r\n Exchange House \r\n Dorm Supply \r\n Limited/Rotating Supplies",
                'image' => "3rd_Sacred_Relic_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //156
            [
                'name' => "Anemoi",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Gale
                [SP: 20][CD: 25 detik] Melepaskan tornado yang bergerak dalam jalur zigzag, mengirim musuh di sepanjang jalur tersebut ke udara dan menyebabkan 82 Ice DMG beberapa kali. Musuh yang terkena akan mengalami 80% lebih lambat Kecepatan Gerak dan Kecepatan Serangan selama 1,54 detik.  \r\n
                Tailwind
                Pukulan terhadap musuh mempunyai peluang 3,3% untuk mempercepat Kecepatan Gerak sebesar 65% selama 4,5 detik. CD: 10 detik.  \r\n
                ",
                'stats' => "133 ATK \r\n 25 CRT",
                'source' => "Story & Open World",
                'image' => "Anemoi_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //157
            [
                'name' => "Dawn Breaker: Talwar",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Shock Impact
                [SP: 10][CD: 30 detik] Menyerang ke depan untuk menyerang musuh, menimbulkan 600% (900% pada 5★) ATK Physical DMG. Pengguna kemudian memulihkan 1 (4 pada 5★) SP setiap 0,5 d selama 8 detik.  \r\n
                Capacitance Plus
                Selama mode Ultimate atau Burst, ATK memperoleh 4,0% (10,0% pada 5★) Total Pengganda DMG dan 4,0% (16,0% pada 5★) Crit Rate lebih tinggi. Karakter dimulai dengan 10,0 SP lebih banyak. Tidak berfungsi di Dunia Terbuka.  \r\n
                ",
                'stats' => "175 ATK \r\n 17 CRT",
                'source' => " Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Dawn_Breaker_-_Talwar_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //158
            [
                'name' => "Demonblade - Florid Sakura",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Crimson Sakura
                [SP: 20][CD: 21 detik] Menebas musuh di sekitar untuk menimbulkan 500% ATK Fire DMG. Setelah mengeluarkan skill, karakter menjadi tak terkalahkan. Jika menerima serangan saat skill aktif, maka tebasan terakhir akan menimbulkan tambahan 120% (200% pada 5★) ATK Fire DMG. Selama jangka waktu 5 detik setelah keterampilan berakhir, karakter dapat memblokir sepenuhnya efek DMG dari 1 serangan. Bonus perlengkapan Flame Sakitama: Musuh yang terkena skill ini menerima 25% lebih banyak Fire DMG dan 10% lebih banyak Ice dan Lightning DMG selama 15 detik (tidak ditumpuk dengan efek Combo Follow-up Attack).  \r\n
                Capacitance Plus
                Meningkatkan Fire DMG yang disebabkan oleh serangan karakter sebesar 28% (40% pada 5★).  \r\n
                ",
                'stats' => "182 ATK \r\n 19 CRT",
                'source' => " Exchange House \r\n Limited/Rotating Supplies \r\n Foundry",
                'image' => "Demonblade_-_Florid_Sakura_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //159
            [
                'name' => "Fairy Sword Silven",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Wind Enchantment
                [SP: 17][CD: 38 detik] Menciptakan medan yang meningkatkan semua sekutu dalam AOE sehingga mereka memperoleh 13% (25% pada 5★) Kecepatan Serangan, 13% (20% pada 5★) Kecepatan Bergerak, dan kerusakan sebesar 10% Total Pengganda DMG pada serangan mereka selama 12 detik (20 detik pada 5★).  \r\n
                Power of Wind
                Mendapatkan buff Pengganda DMG Total berdasarkan bonus Kecepatan Gerak karakter. Mendapatkan 3,4% (5,0% pada 5★) Total Pengganda DMG untuk setiap 10% bonus Kecepatan Bergerak (bonus DMG maks: 34% [50% pada 5★]). Karakter memperoleh 18% (30% pada 5★) Kecepatan Bergerak.  \r\n
                ",
                'stats' => "175 ATK \r\n 22 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Fairy_Sword_Silven_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //160
            [
                'name' => "Futsunushi-To",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Kami of War
                [SP: 15][CD: 20 detik] Selama 6 detik berikutnya, memicu 1 ledakan elemen di lokasi acak dekat karakter untuk mengakibatkan 120% (200% pada 5★) DMG elemen acak. Karakter juga memperoleh 7% (12% pada 5★) DMG untuk elemen acak tersebut selama 6,6 detik (9,0 detik pada 5★) (maks 3 tumpukan untuk elemen yang sama).  \r\n
                Raging Izumo
                Serangan berpeluang 10% menghasilkan ledakan elemen di sekitar, menimbulkan 120% (200% pada 5★) ATK DMG elemen acak. Karakter juga memperoleh 6% (8% pada 5★) DMG untuk elemen acak tersebut selama 4,4 detik (6,0 detik pada 5★) (maks 3 tumpukan untuk elemen yang sama). Skill ini dapat memicu 1 ledakan elemen setiap 1 detik.  \r\n
                ",
                'stats' => "178 ATK \r\n 3 CRT",
                'source' => "Foundry",
                'image' => "Futsunushi-To_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //161
            [
                'name' => "Gluttony",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Boomerang
                [SP: 18][CD: 15 detik] Meluncurkan angin puyuh pedang yang menghentikan serangan musuh di sepanjang jalur, menarik mereka ke arah karakter, dan membuat mereka pingsan selama 1,07 detik (1,50 detik pada 5★). Tiap pukulan mengakibatkan 151 (448 pada 5★) Physical DMG.  \r\n
                Blood Sacrifice
                Untuk setiap pembunuhan musuh, tim memperoleh 2 (4 jam 5★) SP.  \r\n
                ",
                'stats' => "142 ATK \r\n 12 CRT",
                'source' => "Story & Open World",
                'image' => "Gluttony_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //162
            [
                'name' => "Ice Epiphyllum",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Snow Dance
                [SP: 5][CD: 18 detik] Menghasilkan zona dingin dengan radius 3,5 meter. Unit teman di AOE menimbulkan 16,0% (40,0% pada 5★) lebih banyak Ice DMG selama 6,8 detik (10,0 detik pada 5★). Musuh dalam AOE akan terkena Freezing Bomb yang meledak setelah 6 detik, menimbulkan 373 (981 pada 5★) Ice DMG.  \r\n
                Glacial Bane
                Mendapat 7,0% (15,0% pada 5★) Elemental DMG. Menerima Pengisian Energi setiap 5 d, memungkinkan serangan berikutnya menghasilkan 533 (1.260 pada 5★) Ice DMG ke musuh dalam radius 5 meter. Bonus perlengkapan Goushinnso Memento: Mendapatkan 200 Energi Kinetik.  \r\n
                ",
                'stats' => "169 ATK \r\n 30 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Foundry",
                'image' => "Ice_Epiphyllum_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //163
            [
                'name' => "Jizo Mitama",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Soul Appearance
                [SP: 40][CD: 50 detik] Memanggil Jizo Mitama untuk bertarung selama 22 detik (40 detik pada 5★). Jizo Mitama menimbulkan DMG Fisik setara dengan 300% ATK ke musuh dalam area yang lebih luas dan membuat mereka melayang. Jizo Mitama memiliki metode menyerang lainnya:
                Serangan Tebasan: 100% ATK Physical DMG.
                Dash Attack: 200% ATK Physical DMG dan menjatuhkan musuh ke udara.
                Cleave: 100% ATK Physical DMG dan menjatuhkan musuh ke udara.  \r\n
                Sightless
                Serangan karakter terhadap musuh yang terkena serangan udara memperoleh 17% (32% pada 5★) Total Pengganda DMG.  \r\n
                Key of Erosion
                Dalam co-op raids, karakter menimbulkan 7% (15% pada 5★) lebih banyak DMG Fisik. Saat menggunakan keterampilan senjata, menimbulkan 10% (30% pada 5★) lebih banyak DMG Fisik selama 10,0 detik.  \r\n
                ",
                'stats' => "154 ATK \r\n 13 CRT",
                'source' => "Raids \r\n Events",
                'image' => "Jizo_Mitama_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //164
            [
                'name' => "Key of Castigation",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Thunder Edge
                [SP: 5][CD: 25 detik] Meluncurkan tebasan kuat ke depan dengan pedang yang dipenuhi petir, menimbulkan 380% (700% pada 5★) ATK DMG Petir dan melumpuhkan musuh selama 3 d. Saat digunakan oleh Herrscher of Thunder, ia juga memberikan Narukami's Mark pada musuh yang terkena serangannya selama 15 detik  \r\n
                Thunder Blitz
                Wielder menimbulkan 23,0% (35,0% pada 5★) bonus Lightning DMG. Jika digunakan oleh Herrscher of Thunder, penggunaan aktif akan memulihkan 60 (100 pada 5★) Herrscher Charge. Selama 2 detik setelahnya, musuh dengan Mark Narukami menerima 30% ATK Lightning DMG dan Herrscher of Thunder memulihkan 10 Herrscher Charge per 0,2 d (proc berikutnya akan memperpanjang durasi).  \r\n
                ",
                'stats' => "192 ATK \r\n 5 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Key_of_Castigation_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //165
            [
                'name' => "MagStorm",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Chaos Blade
                [SP: 20][CD: 15 detik] Lari dan lepaskan 2 gelombang Magstorm, masing-masing menimbulkan 745 (1,920 pada 5★) Lightning DMG dan melumpuhkan musuh selama 2,26 d (2,50 d pada 5★).  \r\n
                EM Induction
                Mendapat 28% (40% pada 5★) DMG Petir.  \r\n
                ",
                'stats' => "190 ATK \r\n 0 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Foundry",
                'image' => "MagStorm_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //166
            [
                'name' => "Nue of the Shadow",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Zaizan of Guilt
                [SP: 4][CD: 20 detik] Meluncurkan tebasan cepat ke depan untuk menimbulkan 460,4% (700,0% pada 5★) ATK Physical DMG dan meningkatkan Crit Rate tim sebesar 6,0% (10,0% pada 5★) dan Crit DMG sebesar 8,6% (15,0% pada 5★) selama 9 d . Efeknya tidak dapat ditumpuk, namun dapat disegarkan dengan Ultimate Shadow Dash saat terkena ketika senjata ini digunakan olehnya.  \r\n
                Fearsome Weeping
                Kombo ATK dan Ultimate menyebabkan 17,0% (25,0% pada 5★) bonus Crit DMG. Saat aktivasi skill masuk atau menghindar, pengguna menerima 12,0% (20,0% pada 5★) lebih sedikit DMG Fisik selama 9 detik. Dapat menumpuk.  \r\n
                ",
                'stats' => "185 ATK \r\n 12 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Foundry",
                'image' => "Nue_of_the_Shadow_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //167
            [
                'name' => "Nuwa's Sword",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Flame Spirit
                [SP: 15][CD: 24 detik] Memanggil Peri Api yang meluncurkan bola api ke sasaran terdekat. Setiap bola api menimbulkan 336 (960 pada 5★) Fire DMG ke musuh dalam AOE kecil. Peri Api bertahan selama 10 detik. Menyimpan 2 biaya.  \r\n
                Fearsome Weeping
                Serangan mempunyai peluang 3,4% (5,0% pada 5★) untuk mengaktifkan aura pedang api di sekitar karakter, memicu musuh di sekitar, dan menimbulkan 76 (188 pada 5★) Fire DMG per 0,5 detik selama 3 detik.  \r\n
                ",
                'stats' => "173 ATK \r\n 24 CRT",
                'source' => "Events",
                'image' => "Nuwa's_Sword_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //168
            [
                'name' => "Osahoko",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Osahoko
                Setelah Ultimate Evasion, dapatkan EM Charge yang bertahan selama 5 detik. Serangan pertama yang mengenai dalam periode ini akan menghabiskan EM Charge dan mengakibatkan 1.603 (4.000 pada 5★) Lightning DMG tambahan dan 1.603 (4.000 pada 5★) Physical DMG. Hanya 1 EM Charge yang dapat diperoleh setiap 1,5 detik.  \r\n
                Fearsome Weeping
                Serangan mempunyai peluang 4,8% (8,0% pada 5★) untuk melumpuhkan target dan musuh di sekitarnya selama 3 detik. CD: 6 detik.  \r\n
                ",
                'stats' => "182 ATK \r\n 17 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Osahoko_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //169
            [
                'name' => "Plasma Kagehide",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Absolute Zero
                [SP: 20][CD: 25 detik] Ubah energi ionik menjadi ledakan dingin, membekukan musuh di sepanjang jalan dan menimbulkan 368 (999 pada 5★) Ice DMG setiap 0,9 d selama 4,20 d (5,00 d pada 5★).  \r\n
                Frigid Winter
                Pukulan terhadap musuh memperoleh 16 (50 pada 5★) Ice DMG, dan serangan terhadap musuh yang dibekukan atau Kecepatan Gerakannya dikurangi memperoleh 12,0% (20,0% pada 5★) Total Pengganda DMG.  \r\n
                ",
                'stats' => "170 ATK \r\n 9 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Plasma_Kagehide_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //170
            [
                'name' => "Pledge of Rain",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Love is War!
                [SP: 16][CD: 18 detik] Melempar payung terbuka ke depan untuk menyebarkan kristal es ke segala arah, menimbulkan 24 x 18,0% (30,0% pada 5★) ATK Ice DMG kepada musuh dalam AOE besar dan memperlambat Kecepatan Serangan dan Gerakan mereka sebanyak 40% selama 3,40 detik (5,00 detik pada 5★).  \r\n
                Our Pact
                Serangan memperoleh 12,0% (20,0% pada 5★) Physical DMG terhadap musuh yang diperlambat. Saat Jumlah Pukulan Kombo melebihi 50, memperoleh 12,0% (20,0% pada 5★) Total Pengganda DMG  \r\n
                ",
                'stats' => "182 ATK \r\n 18 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Foundry",
                'image' => "Pledge_of_Rain_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //171
            [
                'name' => "Raikiri",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Blade Ward
                [SP: 18][CD: 25 detik] Memanggil penghalang pedang halus untuk semua sekutu (termasuk ilusi), meningkatkan DEF mereka sebesar 50%. Musuh yang terkena pedang akan menerima 136 (320 pada 5★) Lightning DMG setiap 0,25 detik selama 4,40 detik (6,00 detik pada 5★).  \r\n
                Storm Raven
                28% (40% pada 5★) kemungkinan mengurangi DMG langsung atau tidak langsung yang diterima sebesar 264 (600 pada 5★) (DMG tidak langsung: tersulut, berdarah, dll.).  \r\n
                ",
                'stats' => "168 ATK \r\n 30 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Raikiri_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //172
            [
                'name' => "Sakura Blossom",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Falling Petals
                [SP: 15][CD: 12 detik] Berlari ke depan dalam jarak pendek untuk menimbulkan 240,2% (400,0% pada 5★) ATK DMG Fisik kepada musuh yang terkena di sepanjang jalan, membuat musuh yang terkena Merek Sakura menjadi pingsan selama 2,3 detik (3,5 detik pada 5★). Bonus perlengkapan Gyakushinn Miko: Musuh yang terkena akan ditandai dengan Merek Sakura.  \r\n
                Round Dance
                Serangan berpeluang 60,1% (100,0% pada 5★) untuk melepaskan Gelombang Pedang, menimbulkan 120,1% (200,0% pada 5★) ATK DMG Fisik + 795 (1,920 pada 5★) DMG Fisik. CD Gelombang Pisau: 4,8 detik. Bonus perlengkapan Gyakushinn Miko: Blade Wave menambahkan 1 Hitungan Sakura ke musuh. Ketika One Slash mengenai musuh, CD Blade Wave langsung direset. \r\n
                ",
                'stats' => "184 ATK \r\n 18 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Sakura_Blossom_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //173
            [
                'name' => "Seven Thunders of Retribution: Rumble",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Thunderbolt Call
                [SP: 0][CD: 15 detik] Menyalurkan energi Honkai dalam Kunci Ilahi untuk menebas sinar berbentuk X, menghasilkan total 140,2% (300,0% pada 5★) × 2 ATK Lightning DMG. Pukulan pertama menimbulkan 10 Paralyze Trauma. Wielder tidak terkalahkan saat menggunakan senjata aktif dan mendapatkan kembali 10 SP. Bonus perlengkapan Herrscher of Thunder: Dapat menggunakan senjata yang aktif dalam mode burst untuk menimbulkan 440,2% (600,0% pada 5★) ATK Lightning DMG. Dia tidak terkalahkan dan Skill Ultimate Evasion terpicu saat menggunakan senjata aktif. Setelah mengaktifkan senjatanya, dia dapat langsung menggunakan Finisher, yang menambah CD Ultimate sebanyak 11 detik. Saat terkena, 2 jenis senjata aktif menimbulkan Narukami's Mark selama 15 detik.  \r\n
                Exoneration
                Wielder menimbulkan 14,0% (30,0% pada 5★) bonus Total DMG kepada musuh dengan tipe yang lebih lemah. Mengeluarkan Ultimate menyegarkan CD keterampilan senjata (CD: 10d). Bonus perlengkapan Herrscher of Thunder: Selama 2 urutan Ultimate, semua pengatur waktu keterampilan dan pengatur waktu panggung dijeda. Dia mendapat 200 Herrscher Charge di setiap entri (CD: 10 detik). Jika dia mengaktifkan senjatanya dalam mode burst dan Finisher sebelum keluar, naga tersebut akan tetap berada di lapangan sebagai entitas yang dipanggil dan membombardir musuh di udara. Dia mempertahankan bentuk Herrscher saat naga itu hadir. Naga tersebut memperoleh hingga 600 Herrscher Charge miliknya saat ini, dan pengebomannya menghabiskan 200% Herrscher Charge dan menyebabkan 70% DMG dibandingkan dengannya. Naga menghilang jika kehilangan seluruh energinya, berada di medan selama 10 detik, atau dia menggunakan Ultimate lagi. \r\n
                Key of Judgment
                Dalam serangan kooperatif, total Elemental DMG karakter meningkat sebesar 16,0% (25,0% pada 5★). \r\n
                ",
                'stats' => "181 ATK \r\n 14 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Seven_Thunders_of_Retribution_-_Rumble_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //174
            [
                'name' => "Sky Breaker",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Rift of the Heavens
                [SP: 20][CD: 18 detik] Serangan mengenai musuh di sekitar beberapa kali, menimbulkan total 400% ATK Physical DMG. Pukulan terakhir melemahkan musuh, mengurangi DEF mereka sebesar 38% (70% pada 5★) selama 4,40 detik (6,00 detik pada 5★).  \r\n
                Divine Penalty
                Saat menghindar atau terkena serangan, panggil sambaran petir yang menyambar penyerang untuk menimbulkan 94% (150% pada 5★) ATK Lightning DMG dalam AOE kecil dan melumpuhkan musuh selama 1,6 detik (3,0 detik pada 5★). CD: 10 detik. Serangan terhadap musuh yang lemah atau lumpuh mendapat 9% (15% pada 5★) Total Pengganda DMG. \r\n
                ",
                'stats' => "184 ATK \r\n 8 CRT",
                'source' => "Foundry",
                'image' => "Sky_Breaker_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //175
            [
                'name' => "Sky Breaker",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Induction Collapse
                [SP: 14][CD: 11 detik] Teleportasi ke target dan menciptakan medan immobilisasi kecil yang bertahan selama 4 detik. Musuh yang tidak bisa bergerak di lapangan akan kehilangan 48% (80% pada 5★) DEF dan menerima 110 (234 pada 5★) Lightning DMG setiap 0,4 detik selama durasi tersebut. Bidang ini berlangsung selama 4 detik.  \r\n
                Frequency Overload
                Serangan kritis mempunyai peluang 30,0% (50,0% pada 5★) untuk menjatuhkan target ke udara dan menerapkan Time Lock selama 3 detik. CD: 9,20 detik (6,00 detik pada 5★). \r\n
                ",
                'stats' => "173 ATK \r\n 24 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Vibro_Cutter_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //176
            [
                'name' => "Void Blade",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "The Ouroboros
                [SP: 15][CD: 20 detik] Menghasilkan bidang Waktu Lambat yang bergerak bersama karakter. Medan berlangsung selama 4,40 detik (6,00 detik pada 5★), selama serangan dasar karakter (termasuk kombo dan serangan bermuatan) memperoleh 18,0% (30,0% pada 5★) Tingkat Kritik.  \r\n
                Energy Devourer
                Setelah mengkonsumsi 10, 40, dan 70 SP satu kali, memperoleh 11%, 22%, atau 33% (15%, 30%, atau 45% pada 5★) Physical DMG masing-masing selama 8 d. Efek ini tidak dapat ditumpuk. \r\n
                ",
                'stats' => "170 ATK \r\n 28 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Foundry",
                'image' => "Void_Blade_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //177
            [
                'name' => "Vorpal Sword Type-11",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Blackhole
                [SP: 20][CD: 20 detik] Menghasilkan lubang hitam merah yang menarik dan mengeluarkan isi perut musuh dalam jangkauan, menimbulkan 80% ATK Physical DMG dan mengeluarkan darah mereka. Lubang hitam kemudian meledak dan melepaskan ledakan energi multi-hantaman yang mengakibatkan 20% ATK DMG per pukulan. Musuh yang mengalami pendarahan menerima 132 (300 pada 5★) DMG setiap 0,5 detik selama 3,32 detik (4,60 detik pada 5★).  \r\n
                Time Prison
                Menyerang musuh yang terkena Time Slow memperoleh 14% (20% pada 5★) Physical DMG. \r\n
                ",
                'stats' => "179 ATK \r\n 15 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Foundry",
                'image' => "Vorpal_Sword_Type-11_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //178
            [
                'name' => "Ai-chan's Crutch",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Gingerbread Man Go
                Setelah mencetak serangan kritikal, jatuhkan 3 Gingerbread Men ke target yang meledak setelah jeda. Setiap ledakan menimbulkan 87,5% (150,0% pada 5★) ATK Physical DMG. CD: 8 detik.  \r\n
                Gingerbread Man Go
                Saat serangan kombo lebih besar dari 10, kerusakan elemen meningkat sebesar 6,1% (15,0% pada 5★). \r\n
                ",
                'stats' => "97 ATK \r\n 11 CRT",
                'source' => "Events",
                'image' => "Ai-chan's_Crutch_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //179
            [
                'name' => "Alloy Anemoi",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Alloy Spinning Windcut
                [SP: 14][CD: 15 detik] Melepaskan tornado yang bergerak lurus, menjatuhkan musuh di sepanjang jalan dan mengakibatkan 61 (183 pada 4★) Ice DMG beberapa kali.  \r\n

                ",
                'stats' => "89 ATK \r\n 15 CRT",
                'source' => "Story & Open World",
                'image' => "Alloy_Anemoi_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //180
            [
                'name' => "Alloy Gluttony",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Alloy Boomerang
                [SP: 10][CD: 15 detik] Meluncurkan angin puyuh pedang yang menghentikan serangan musuh di sepanjang jalan dan menarik mereka ke arah penggunanya. Tiap pukulan mengakibatkan 117 (325 pada 4★) Physical DMG.  \r\n

                ",
                'stats' => "95 ATK \r\n 7 CRT",
                'source' => "Story & Open World",
                'image' => "Alloy_Gluttony_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //181
            [
                'name' => "Crystal Edge",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Frost Comet
                [SP: 10][CD: 18 detik] Melepaskan energi kristalisasi yang membekukan target dan musuh di sekitarnya selama 5 detik dan menimbulkan 5 Rime Trauma.  \r\n

                ",
                'stats' => "117 ATK \r\n 21 CRT",
                'source' => "Story & Open World",
                'image' => "Crystal_Edge_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //182
            [
                'name' => "Endergonic Tachi",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Energy Tide
                Saat SP kurang dari 20% dari SP Maks, memperoleh 11% (17% pada 4★) DMG Fisik. Ketika SP 80% atau lebih tinggi dari SP Maks, setiap serangan memperoleh 45 (72 pada 4★) Fire DMG.  \r\n

                ",
                'stats' => "121 ATK \r\n 10 CRT",
                'source' => "Foundry \r\n Retired Feature",
                'image' => "Endergonic_Tachi_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //183
            [
                'name' => "Galactic Nova",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Lights on Stage
                [SP: 15][CD: 30 detik] Mengaktifkan Lighting FX selama 10 detik. Saat pengguna Galactic Nova berada di area Lighting FX, setiap serangan ATK mengakibatkan 110,7 (200,0 pada 5★) lebih banyak Physical DMG.
                [Panggung Konser] Saat mengambil Sparkling Star, semua karakter memperoleh 5% Crit Rate selama 5 d.etik Efek tidak dapat ditumpuk.  \r\n
                Sparkling Star
                Saat karakter dikerahkan, 1 Bintang Berkilau muncul di dekatnya setiap 3 detik. Sparkling Star bertahan selama 4,5 detik. Saat mengambil Sparkling Star, menimbulkan 111% (200% pada 5★) ATK Physical DMG ke target acak di sekitar dan musuh di sekitarnya. \r\n
                ",
                'stats' => "102 ATK \r\n 4 CRT",
                'source' => "Events",
                'image' => "Galactic_Nova_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //184
            [
                'name' => "Hell Thunder",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Minuano
                [SP: 12][CD: 12 detik] Meluncurkan gelombang pedang yang menyerang musuh di sepanjang jalur untuk menimbulkan 300% ATK DMG Fisik dan mengganggu musuh, mengurangi DEF mereka sebesar 60% selama 2,63 detik (3,00 detik pada 4★).  \r\n
                ",
                'stats' => "117 ATK \r\n 21 CRT",
                'source' => " Limited/Rotating Supplies",
                'image' => "Hell_Thunder_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //185
            [
                'name' => "Lightning Soul",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Lightning Strike
                Pukulan menimbulkan tambahan 18 (43 jam 4★) Lightning DMG.  \r\n
                Lightning Soul
                Pengguna memperoleh 9,52% (15,00% pada 4★) Lightning DMG. \r\n
                ",
                'stats' => "113 ATK \r\n 28 CRT",
                'source' => "Foundry \r\n Dorm Supply",
                'image' => "Lightning_Soul_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //186
            [
                'name' => "One Salty Tuna",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Lethal Thrust
                [SP: 8][CD: 20 detik] Menyerang musuh di depan untuk menimbulkan 279 + 2.796 (666 + 6.655 pada 5★) DMG Fisik.  \r\n
                Undying Saltiness
                Mendapatkan Total Pengganda DMG lebih banyak pada HP yang lebih rendah. Untuk setiap 1% HP yang hilang, memperoleh 0,11% (0,20% pada 5★) Total Pengganda DMG. \r\n
                ",
                'stats' => "113 ATK \r\n 28 CRT",
                'source' => "Events",
                'image' => "One_Salty_Tuna_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //187
            [
                'name' => "Phoenix Razor",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Huang
                Pukulan terhadap musuh memperoleh 15 (36 pada 4★) Fire DMG. Saat Kiana berada dalam tim, karakter memperoleh 11,4% (18,0% pada 4★) Fire DMG.  \r\n
                ",
                'stats' => "108 ATK \r\n 18 CRT",
                'source' => "Events",
                'image' => "Phoenix_Razor_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //188
            [
                'name' => "Pulse Katana Type-17",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Frost Blade
                [SP: 3][CD: 12 detik] Meluncurkan 6 bilah halus, masing-masing bilah menimbulkan 622 (980 pada 4★) DMG Es dan memperlambat Kecepatan Gerak dan Kecepatan Serangan musuh sebesar 70% selama 2,5 detik.  \r\n
                ",
                'stats' => "129 ATK \r\n 0 CRT",
                'source' => "Foundry \r\n Limited/Rotating Supplies \r\n Retired Feature",
                'image' => "Pulse_Katana_Type-17_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //189
            [
                'name' => "Pulse Katana Type-19",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "SP Saving
                Mengurangi biaya SP aktivasi skill sebesar 17% (23% pada 4★) (tidak mempengaruhi SP minimum yang diperlukan untuk aktivasi skill).  \r\n
                ",
                'stats' => "125 ATK \r\n 7 CRT",
                'source' => "Foundry \r\n Limited/Rotating Supplies \r\n Retired Feature",
                'image' => "Pulse_Katana_Type-19_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //190
            [
                'name' => "Thermal Cutter",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Molten Blade
                [SP: 2][CD: 10 detik] Lari cepat dan lepaskan ledakan panas besar yang mengakibatkan 270% ATK Physical DMG dan menimbulkan 5 Ignite Trauma.  \r\n
                ",
                'stats' => "123 ATK \r\n 11 CRT",
                'source' => "Events \r\n Foundry",
                'image' => "Thermal_Cutter_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //191
            [
                'name' => "Thunderstorms",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Thunderstorms
                [SP: 10][CD: 15 detik] Melempar bola petir, menimbulkan 412 (750 pada 4★) Lightning DMG pada area kecil, dan menimbulkan 5 Paralyze Trauma.  \r\n
                ",
                'stats' => "124 ATK \r\n 8 CRT",
                'source' => "Events \r\n Foundry",
                'image' => "Thunderstorms_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //192
            [
                'name' => "Vermilion Edge",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Seven Sakura
                [SP: 18][CD: 10 detik] Menyerang musuh di sekitar dengan rangkaian tebasan telekinetik 7 pukulan. Setiap tebasan menimbulkan 39% (50% pada 4★) ATK Physical DMG. Musuh tidak bisa bergerak selama rangkaian serangan.  \r\n
                ",
                'stats' => "111 ATK \r\n 13 CRT",
                'source' => "Events",
                'image' => "Vermilion_Edge_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //193
            [
                'name' => "Xuanyuan Katana",
                'type' => "Katana",
                'rarity' => "3star",
                'detail' =>
                "Frost Field
                [SP: 14][CD: 18 detik] Melepaskan energi es untuk membentuk AOE ledakan es, menimbulkan 539 (1.024 pada 4★) Ice DMG kepada musuh dan memperlambat Kecepatan Gerak mereka sebesar 60% selama 5 detik.  \r\n
                ",
                'stats' => "112 ATK \r\n 10 CRT",
                'source' => "Events",
                'image' => "Xuanyuan_Katana_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //194
            [
                'name' => "Amemura Bloodlust",
                'type' => "Katana",
                'rarity' => "2star",
                'detail' =>
                "
                ",
                'stats' => "59 ATK \r\n 42 CRT",
                'source' => "Foundry",
                'image' => "Amemura_Bloodlust_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //195
            [
                'name' => "Horikawa Kunihiro",
                'type' => "Katana",
                'rarity' => "2star",
                'detail' =>
                "
                ",
                'stats' => "76 ATK \r\n 8 CRT",
                'source' => "Foundry",
                'image' => "Horikawa_Kunihiro_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //196
            [
                'name' => "Muramasa Bloodlust",
                'type' => "Katana",
                'rarity' => "2star",
                'detail' =>
                "Ripper Blade
                [SP:3][CD: 4 detik] Meluncurkan pedang halus, menimbulkan 50% ATK DMG Fisik dan menimbulkan 3 Bleed Trauma. 3 biaya.  \r\n
                ",
                'stats' => "81 ATK \r\n 0 CRT",
                'source' => "Foundry",
                'image' => "Muramasa_Bloodlust_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //197
            [
                'name' => "Rosefinch",
                'type' => "Katana",
                'rarity' => "2star",
                'detail' =>
                "Sinfire
                [SP:10][CD: 7 detik] Menghasilkan gelombang api. Ledakan mengakibatkan 100% ATK DMG Fisik ditambah 117 (288 pada 3★) Fire DMG. Membawa 2 biaya.  \r\n
                ",
                'stats' => "72 ATK \r\n 17 CRT",
                'source' => "Foundry",
                'image' => "Rosefinch_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //198
            [
                'name' => "Willow",
                'type' => "Katana",
                'rarity' => "2star",
                'detail' =>
                "Leaf Razor
                [SP:9][CD: 7 detik] Melepaskan tebasan telekinetik ke bawah diikuti dengan tebasan horizontal AOE yang besar. Setiap tebasan menimbulkan 193% (250% pada 3★) ATK Physical DMG.  \r\n
                ",
                'stats' => "81 ATK \r\n 0 CRT",
                'source' => "Foundry",
                'image' => "Willow_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //199
            [
                'name' => "Proto Pulse Tachi",
                'type' => "Katana",
                'rarity' => "1star",
                'detail' =>
                "Temporary Overclocking
                [SP:8][CD: 15 detik] Memperkuat senjata sehingga serangan dasar (termasuk kombo dan serangan bermuatan) memperoleh 20% (32% pada 4★) DMG Fisik selama 5 detik.  \r\n
                ",
                'stats' => "40 ATK \r\n 9 CRT",
                'source' => "Foundry",
                'image' => "Proto_Pulse_Tachi_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //200
            [
                'name' => "Seishuu Muramasa",
                'type' => "Katana",
                'rarity' => "1star",
                'detail' =>
                "Temporary Overclocking
                [SP:8][CD: 15 detik] Memperkuat senjata sehingga serangan dasar (termasuk kombo dan serangan bermuatan) memperoleh 20% (32% pada 4★) DMG Fisik selama 5 detik.  \r\n
                ",
                'stats' => "42 ATK \r\n 4 CRT",
                'source' => "Default Gear \r\n Story & Open World",
                'image' => "Seishuu_Muramasa_(2).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //201
            [
                'name' => "Abyss Flower: Liminal Spiral",
                'type' => "Lance",
                'rarity' => "5star",
                'detail' =>
                "Fresh Bud
                [SP:0][CD: 25 detik] [Fresh Bud] aktif menyebabkan DMG Fisik setara dengan 200% + 582,1% (700,0% pada 6★) ATK dan memulihkan 15 SP dan 200 HP.
                Saat tombol Aktif berkedip saat musuh bergerak tertentu, serangan balik Lemparan dapat dilakukan tanpa syarat, mengendalikan musuh dan mengakibatkan DMG Fisik setara dengan 20% + 737,1% (800,0% pada 6★) ATK (tidak mereset CD).
                Bright Knight: Bonus perlengkapan Excelsis: Dalam mode Burst, Aktif menjadi ATK Spesial [Divine Bloom], menimbulkan DMG Fisik setara dengan 200% + 1.421,4% (1.500,0% pada 6★) ATK, yang dihitung sebagai DMG Aktif dan Ultimate, dan memiliki bonus 30% Tingkat Kritik. Saat skill berakhir, target menerima 4 x 10% ATK bonus Physical DMG. Saat Aktif sedang berlangsung, pengatur waktu panggung dan mode pertempuran akan dijeda. Host keluar dari mode Burst setelah mereka selesai mentransmisikan aktif. Memasuki atau keluar dari mode Burst akan mengatur ulang CD Keterampilan Senjata.  \r\n
                Samsara Reversal
                Pengguna memperoleh 21,1% (25,0% pada 6★) Crit Rate. Saat dalam mode Burst, pengguna meningkatkan DMG Fisik sebesar 35% selama 15 d; melakukan Ultimate Evasion akan mengurangi CD Ultimate Evasion sebanyak 2 detik dan mengaktifkan serangan [Divine Bloom] berikutnya untuk menimbulkan tambahan 642,8% (800,0% pada 6★) ATK Physical DMG (maks 2 tumpukan).  \r\n
                Creation And Destruction
                CD Ultimate berkurang 12,1% (20,0% pada 6★). Dalam mode burst, Crit DMG meningkat sebesar 12,1% (20,0% pada 6★) selama 15 d. Jika tidak ada musuh yang dikalahkan oleh [Divine Bloom], pengganda DMG dari [Fresh Bud] berikutnya menjadi 200% + 728,4% (1200,0% pada 6★).  \r\n
                Key of Creation
                Dalam co-op raids, Valkyrie menimbulkan 16,0% (22,0% pada 6★) bonus Total DMG melalui keterampilan senjata, Kombo/Serangan Berisi, dan Ultimat. Selama 6 detik setelah menggunakan Senjata Aktif, Valkyrie memulihkan 1,2% (1,5% pada 6★) HP maksimal setiap kali menimbulkan DMG (hanya dapat dipicu sekali per detik).  \r\n
                ",
                'stats' => "298 ATK \r\n 18 CRT",
                'source' => "Foundry",
                'image' => "Abyss_Flower_-_Liminal_Spiral_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //202
            [
                'name' => "Hler's Ataraxia",
                'type' => "Lance",
                'rarity' => "5star",
                'detail' =>
                "Sanction of Styx
                [SP:0][CD: 25 detik] Meluncurkan serangan dorong, menimbulkan 50% ATK Physical DMG. Jika tusukannya mengenai musuh yang tidak dalam kondisi Tak Terkalahkan atau Tubuh Besi, maka akan memicu ATK Lemparan, mengendalikan target dan menimbulkan 90% + 1.242,8% (1.400,0% pada 6★) ATK Fisik DMG. Saat musuh melancarkan gerakan tertentu, pengguna dapat melancarkan serangan balasan tanpa batasan saat tombol Skill Senjata berkedip, mengendalikan musuh dan menimbulkan 20% + 721,4% (800,0% pada 6★) ATK Physical DMG; serangan ini tidak memiliki CD. Lemparan dapat memicu lonjakan energi dan mengakibatkan 60,7% (100,0% pada 6★) ATK Physical DMG ke musuh yang terkena. \r\n
                Billows of Annihilation
                DMG Kritik dari Serangan Charge dan Throw meningkat sebesar 22,1% (30,0% pada 6★). Dalam mode Burst, ATK Lempar dan lonjakan energi menimbulkan 242,8% (400,0% pada 6★) ATK bonus DMG Fisik dan memancarkan gelombang kejut setiap 2,5 detik yang menghasilkan 60,0% ATK DMG Fisik. Gelombang kejut dianggap sebagai serangan Ultimate dengan bonus 50% Crit Rate.  \r\n
                Torrent of Oblivion
                Wielder mempunyai 21,1% (25,0% pada 6★) bonus Crit Rate. Ketika lonjakan energi yang disebabkan oleh Throw ATK berakhir, ia menawarkan biaya tambahan. Setiap serangan membuat ATK Lemparan berikutnya memulihkan 1,93 (3,50 pada 6★) SP dan meningkatkan Laju Kritis dari ATK Lemparan serta lonjakan energi sebesar 2,4% (4,0% pada 6★). Setiap 2 pengisian daya menyebabkan satu lonjakan energi lagi. Maksimal 8 tumpukan dan semua tumpukan dihapus di akhir pertempuran. Pada tumpukan penuh, setiap lonjakan energi menimbulkan 300% ATK bonus Physical DMG.  \r\n
                ",
                'stats' => "286 ATK \r\n 21 CRT",
                'source' => "Foundry",
                'image' => "Hler's_Ataraxia_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //203
            [
                'name' => "Sagittarius Astra",
                'type' => "Lance",
                'rarity' => "5star",
                'detail' =>
                "Stellar Excelsis
                [SP:0][CD: 25 detik] Melepaskan tusukan yang menghasilkan 50% ATK Physical DMG. Terhadap musuh yang tidak terkalahkan atau Berbadan Besi, serangan ini memicu Lemparan untuk mengendalikan musuh dan mengakibatkan 90% ATK DMG Fisik + 950,0% (1.100,0% pada 6★) ATK DMG Api. Selama pergerakan musuh tertentu dan ketika tombol aktif berkedip, serangan balik Throw dapat dilakukan tanpa syarat, mengendalikan musuh dan menimbulkan 20% ATK Physical DMG + 740,0% (800,0% pada 6★) ATK Fire DMG (tidak mereset CD) . Mengeluarkan Lemparan, Ultimate, atau memasuki mode burst akan menimbulkan Stardust pada musuh. CD: 25 detik. Stardust tidak kadaluwarsa dan tidak dapat ditumpuk. Charged ATK Wielder dapat menghancurkan Stardust dan memicu ledakan yang menimbulkan 1.600,0% (1.900,0% pada 6★) ATK Fire DMG di area tertentu. \r\n
                Blazing Alnasl
                Serangan mode pamungkas dan burst menghasilkan 3 tombak ringan untuk menusuk musuh, masing-masing menimbulkan 30,0% (45,0% pada 6★) ATK Fire DMG. CD: 5 detik.
                Bagi Dea Anchora, setiap penggunaan Ultimate akan menghasilkan tombak ringan.  \r\n
                Kaus Australis
                Serangan mode pamungkas atau burst menimbulkan 29,0% (35,0% pada 6★) bonus Fire DMG. Musuh yang terkena ledakan Stardust yang hancur akan menerima 17,0% (20,0% pada 6★) bonus Fire DMG selama 10 d. Proses selanjutnya mengatur ulang durasinya.  \r\n
                ",
                'stats' => "286 ATK \r\n 10 CRT",
                'source' => "Foundry",
                'image' => "Sagittarius_Astra_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //204
            [
                'name' => "Abyss (Lance)",
                'type' => "Lance",
                'rarity' => "4star",
                'detail' =>
                "Sacred Obliteration
                [SP:0][CD: 25 detik] Meluncurkan serangan dorong, menimbulkan 50% ATK Physical DMG. Jika tusukannya mengenai musuh yang tidak berada dalam kondisi Tak Terkalahkan atau Tubuh Besi, maka akan memicu ATK Lemparan, mengendalikan target dan menimbulkan 90% + 720,7% (1.200,0% pada 5★) ATK Physical DMG. Saat musuh melancarkan gerakan tertentu, pengguna dapat melancarkan serangan balasan tanpa batasan saat tombol Keterampilan Senjata berkedip, mengendalikan musuh dan menimbulkan 20% + 460,4% (700,0% pada 5★) ATK Physical DMG; serangan ini tidak memiliki CD. Musuh yang terkena Lemparan akan menerima 6,0% (10,0% pada 5★) bonus Physical DMG selama 5 detik. \r\n
                Death to the Defeated
                Wielder menimbulkan 9,4% (15,0% pada 5★) bonus Total DMG. Wielder memiliki Crit Rate 9,4% (15,0% pada 5★) lebih tinggi terhadap musuh yang mengalami gangguan.  \r\n
                Key of Creation
                Dalam co-op raids, Valkyrie menimbulkan 16,0% (22,0% pada 5★) bonus Total DMG melalui keterampilan senjata, Kombo/Serangan Berisi, dan Ultimate. Selama 6 detik setelah menggunakan Senjata Aktif, Valkyrie memulihkan 1,2% (1,5% pada 5★) HP maksimal setiap kali menimbulkan DMG (hanya dapat dipicu sekali per detik).  \r\n
                ",
                'stats' => "175 ATK \r\n 18 CRT",
                'source' => "Foundry",
                'image' => "Abyss_(Lance)_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //205
            [
                'name' => "Abyss Flower",
                'type' => "Lance",
                'rarity' => "4star",
                'detail' =>
                "Fresh Bud
                [SP:0][CD: 25 detik] [Fresh Bud] aktif menyebabkan DMG Fisik setara dengan 200% + 350,3% (550,0% pada 5★) ATK dan memulihkan 15 SP dan 200 HP.
                Ketika tombol aktif berkedip selama pergerakan musuh tertentu, serangan balik Throw dapat dilakukan tanpa syarat, mengendalikan musuh dan menimbulkan DMG Fisik setara dengan 20% + 460,4% (700,0% pada 5★) ATK (tidak mereset CD).
                Bright Knight: Bonus perlengkapan Excelsis: Selama Burst, aktif menjadi ATK Spesial [Dark Void], menimbulkan DMG Fisik setara dengan 200% + 840,8% (1.400,0% pada 5★) ATK, yang dihitung sebagai DMG aktif dan Ultimate, dan memiliki Bonus 30% Tingkat Kritik. Selama aktif, pengatur waktu mode panggung dan pertempuran dijeda. Host keluar dari Burst setelah menyelesaikan transmisi aktif. Memasukkan atau keluar dari CD skill senjata reset Burst. \r\n
                Samsara Reversal
                Pengguna memperoleh 12,0% (20,0% pada 5★) Crit Rate. Selama Burst, pengguna memperoleh 35% DMG Fisik selama 15 d; melakukan Ultimate Evasion akan mengurangi CD-nya sebanyak 2 d dan mengaktifkan serangan [Dark Void] berikutnya untuk menimbulkan tambahan 360,4% (600,0% pada 5★) ATK Physical DMG (maks 2 tumpukan).  \r\n
                Key of Creation
                Dalam co-op raids, Valkyrie menimbulkan 16,0% (22,0% pada 5★) bonus Total DMG melalui keterampilan senjata, Kombo/Serangan Berisi, dan Ultimate. Selama 6 detik setelah menggunakan Senjata Aktif, Valkyrie memulihkan 1,2% (1,5% pada 5★) HP maksimal setiap kali menimbulkan DMG (hanya dapat dipicu sekali per detik).  \r\n
                ",
                'stats' => "189 ATK \r\n 11 CRT",
                'source' => "Foundry",
                'image' => "Abyss_Flower_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //206
            [
                'name' => "Endothermic Lance VF",
                'type' => "Lance",
                'rarity' => "4star",
                'detail' =>
                "Element Feedback
                [SP:0][CD: 25 detik] Melepaskan tusukan yang menghasilkan 50% ATK Physical DMG. Terhadap musuh yang tidak terkalahkan atau Berbadan Besi, serangan ini memicu Lemparan untuk mengendalikan musuh dan mengakibatkan 90% + 800,6% (1.200,0% pada 5★) ATK DMG Fisik. Selama pergerakan musuh tertentu dan ketika tombol aktif berkedip, serangan balik Throw dapat dilakukan tanpa syarat, mengendalikan musuh dan menimbulkan 20% ATK Physical DMG + 460,4% (700,0% pada 5★) ATK Fire DMG (tidak mereset CD) . Kerusakan aktif akan sesuai dengan elemen tipe kerusakan pengguna (Prioritas: Fire > Ice > Lightning > Physical). \r\n
                Ignis Stella
                Wielder menimbulkan 17,2% (22,0% pada 5★) bonus Total DMG.  \r\n
                ",
                'stats' => "182 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Endothermic_Lance_VF_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //207
            [
                'name' => "Eos Gloria",
                'type' => "Lance",
                'rarity' => "4star",
                'detail' =>
                "Aurora Domina
                [SP:0][CD: 25 detik] Meluncurkan serangan dorong, menimbulkan 50% ATK Physical DMG. Jika tusukannya mengenai musuh yang tidak dalam kondisi Tak Terkalahkan atau Tubuh Besi, lalu melancarkan ATK Lempar, mengendalikan target dan menimbulkan 90% + 940,8% (1.500,0% pada 5★) ATK Fisik DMG. Saat musuh meluncurkan gerakan tertentu, pengguna dapat melancarkan serangan balik tanpa batasan saat tombol keterampilan senjata berkedip untuk mengendalikan musuh dan mengakibatkan 20% ATK Physical DMG + 480,5% (800,0% pada 5★) ATK Fire DMG ; serangan ini tidak memiliki CD. Saat lemparan ini mengenai target, menghasilkan Flame Aura selama 11 detik yang berpusat di sekitar pengguna, yang membuat musuh di sekitar menerima 8,6% (15,0% pada 5★) lebih banyak Fire DMG dan mengakibatkan Fire DMG setara dengan 35% ATK pengguna terhadap mereka setiap 0,5 detik. \r\n
                Fiery Cleansing
                Saat mengenai musuh dengan Serangan Dasar atau Serangan Penuh, pengguna memperoleh 2,40% (4,00% pada 5★) Fire DMG selama 8,0 d; buff ini ditumpuk hingga 10 kali; durasi setiap tumpukan tidak tergantung pada durasi tumpukan lainnya. Saat mengenai musuh dengan Ultimate atau Throw ATK, pengguna akan langsung mendapatkan 10 tumpukan buff.  \r\n
                ",
                'stats' => "182 ATK \r\n 13 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Eos_Gloria_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //208
            [
                'name' => "Hler's Serenity",
                'type' => "Lance",
                'rarity' => "4star",
                'detail' =>
                "Fury of Aegir
                [SP:0][CD: 25 detik] Meluncurkan serangan dorong, menimbulkan 50% ATK Physical DMG. Jika tusukannya mengenai musuh yang tidak dalam kondisi Tak Terkalahkan atau Tubuh Besi, lalu melancarkan ATK Lempar, mengendalikan target dan menimbulkan 90% + 720,7% (1.200,0% pada 5★) ATK Fisik DMG. Saat musuh meluncurkan gerakan tertentu, pengguna dapat melancarkan serangan balik tanpa batasan saat tombol skill senjata berkedip ke arah CC musuh dan mengakibatkan 20% ATK Physical DMG + 420,4% (700,0% pada 5★) ATK Physical DMG . Throw Counter tidak memicu cooldown skill senjata. Dalam mode burst, Lemparan menimbulkan 340,2% (500,0% pada 5★) ATK DMG Fisik.
                Saat digunakan oleh Bright Knight: Excelsis, Retaliation memberikan 20% bonus Crit Rate diri selama 3 detik. \r\n
                Waves of Cataclysm
                Crit Rate pengguna ditingkatkan sebesar 8,6% (15,0% pada 5★). Serangan dan Lemparan yang dibebankan menandai musuh, dan pengguna menimbulkan 12,0% (20,0% pada 5★) lebih banyak Crit DMG terhadap musuh yang ditandai. Dalam mode Burst, gelombang kejut dipancarkan setiap 2,5 detik dan mengakibatkan 36,0% (60,0% pada 5★) ATK Physical DMG. Gelombang kejut dianggap sebagai serangan Ultimate dengan bonus 50% Crit Rate yang dapat menandai musuh saat terkena; tandanya 10 detik terakhir.  \r\n
                ",
                'stats' => "182 ATK \r\n 13 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Hler's_Serenity_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //209
            [
                'name' => "Lance of Longinus",
                'type' => "Lance",
                'rarity' => "4star",
                'detail' =>
                "Death of the Messiah
                [SP:0][CD: 25 detik] Melepaskan tusukan yang menghasilkan 50% ATK Physical DMG. Terhadap musuh yang tidak terkalahkan atau Berbadan Besi, serangan ini memicu Lemparan untuk mengendalikan musuh dan mengakibatkan 90% + 840,8% (1.400,0% pada 5★) ATK DMG Fisik. Selama pergerakan musuh tertentu dan saat tombol aktif berkedip, serangan balasan Throw dapat dilakukan tanpa syarat, mengendalikan musuh dan menimbulkan 20% + 480,5% (800,0% pada 5★) ATK Physical DMG (tidak mereset CD). Pukulan terakhir dari Lemparan memberikan 50% bonus kerusakan pada perisai.
                Bonus perlengkapan Asuka: Serangan Dibebankan, `Mind, Matching, Moment`, dan Penyelesai Ultimate menghasilkan 11,0% (15,0% pada 5★) bonus Total DMG dan mendapat 15% bonus Tingkat Kritik. \r\n
                Etz Hayim
                Wielder menimbulkan 18,0% (30,0% pada 5★) bonus DMG Fisik. Lemparan menandai musuh selama 30 detik (dapat disegarkan). Ketika Serangan Kombo atau Serangan Penuh dari rekan satu tim mengenai musuh yang ditandai, Lance of Longinus muncul untuk membantu, menimbulkan 60,1% (100,0% pada 5★) ATK DMG Fisik (sumber DMG: rekan satu tim). CD yang dibagikan tim: 3 detik.
                Bonus perlengkapan Asuka: Serangan bantuan Lance of Longinus memulihkan 1,8 (3,0 pada 5★) SP untuknya.  \r\n
                ",
                'stats' => "182 ATK \r\n 13 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Lance_of_Longinus_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //210
            [
                'name' => "Lucia (Lance)",
                'type' => "Lance",
                'rarity' => "4star",
                'detail' =>
                "Flash Slam
                [SP:0][CD: 25 detik] Meluncurkan serangan dorong, menimbulkan 50% ATK Physical DMG. Jika tusukannya mengenai musuh yang tidak dalam kondisi Tak Terkalahkan atau Tubuh Besi, lalu melancarkan ATK Lempar, mengendalikan target dan menimbulkan 90% + 720,7% (1.200,0% pada 5★) ATK Fisik DMG. Saat musuh meluncurkan gerakan tertentu, pengguna dapat melancarkan serangan balik tanpa batasan saat tombol skill senjata berkedip untuk mengendalikan musuh dan menimbulkan 20% + 360,4% (600,0% pada 5★) ATK Physical DMG; serangan ini tidak memiliki CD. Setelah memicu Lemparan ini, pengguna memperoleh Fyre Mantle yang mengurangi 22,0% (30,0% pada 5★) dari Total DMG yang diterimanya selama 10 detik. \r\n
                Ignis Stella
                Menimbulkan 11,0% (15,0% pada 5★) lebih banyak Fire DMG; tambahan menimbulkan 23,0% (35,0% pada 5★) lebih banyak Fire DMG terhadap musuh yang terbakar.  \r\n
                ",
                'stats' => "175 ATK \r\n 18 CRT",
                'source' => "Events \r\n Foundry",
                'image' => "Lucia_(Lance)_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //211
            [
                'name' => "Starlance Prime",
                'type' => "Lance",
                'rarity' => "4star",
                'detail' =>
                "Dawning Glory
                [SP:0][CD: 25 detik] Melepaskan tusukan yang menghasilkan 50% ATK Physical DMG. Terhadap musuh yang tidak terkalahkan atau Berbadan Besi, serangan ini memicu Lemparan untuk mengendalikan musuh dan mengakibatkan 90% ATK DMG Fisik + 660,4% (900,0% pada 5★) ATK DMG Api. Selama pergerakan musuh tertentu dan ketika tombol aktif berkedip, serangan balik Throw dapat dilakukan tanpa syarat, mengendalikan musuh dan menimbulkan 20% ATK Physical DMG + 460,4% (700,0% pada 5★) ATK Fire DMG (tidak mereset CD) . Mengeluarkan Lemparan, Ultimate, atau memasuki mode burst akan menimbulkan Stardust pada musuh. CD: 25 detik. Stardust tidak kadaluwarsa dan tidak dapat ditumpuk. Charged ATK Wielder dapat menghancurkan Stardust dan memicu ledakan yang menimbulkan 876,9% (1.500,0% pada 5★) ATK Fire DMG di area tertentu. \r\n
                Fire Star
                Serangan mode pamungkas atau burst menimbulkan 17,0% (25,0% pada 5★) bonus Fire DMG. Musuh yang terkena ledakan Stardust yang hancur akan menerima 12,8% (16,0% pada 5★) bonus Fire DMG selama 10 d. Proses selanjutnya mengatur ulang durasinya.  \r\n
                ",
                'stats' => "182 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Starlance_Prime_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //211
            [
                'name' => "Plasma Lance",
                'type' => "Lance",
                'rarity' => "3star",
                'detail' =>
                "Ionic Slam
                [SP:0][CD: 25 detik] Meluncurkan serangan dorong, menimbulkan 50% ATK Physical DMG. Jika tusukannya mengenai musuh yang tidak dalam kondisi Tak Terkalahkan atau Tubuh Besi, lalu melancarkan ATK Lempar, mengendalikan target dan menimbulkan 90% + 618,6% (1.000,0% pada 4★) ATK Fisik DMG. Saat musuh meluncurkan gerakan tertentu, pengguna dapat melancarkan serangan balik tanpa batasan saat tombol skill senjata berkedip untuk mengendalikan musuh dan menimbulkan 20% + 309,3% (500,0% pada 4★) ATK Physical DMG; serangan ini tidak memiliki CD. Setelah memicu Lemparan ini, pengguna memperoleh 12,7% (20,0% pada 4★) Total DMG selama 15 detik. \r\n
                ",
                'stats' => "110 ATK \r\n 19 CRT",
                'source' => "Foundry",
                'image' => "Plasma_Lance_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //212
            [
                'name' => "Lance",
                'type' => "Lance",
                'rarity' => "1star",
                'detail' =>
                "Ionic Slam
                [SP:0][CD: 25 detik] Meluncurkan serangan dorong, menimbulkan 50% ATK Physical DMG. Jika tusukannya mengenai musuh yang tidak dalam kondisi Tak Terkalahkan atau Tubuh Besi, lalu melancarkan ATK Lempar, mengendalikan target dan menimbulkan 90% + 618,6% (1.000,0% pada 3★) ATK Fisik DMG. Saat musuh meluncurkan gerakan tertentu, pengguna dapat melancarkan serangan balik tanpa batasan ketika tombol skill senjata berkedip untuk mengendalikan musuh dan menimbulkan 20% + 309,3% (500,0% pada 3★) ATK Physical DMG; serangan ini tidak memiliki CD. \r\n
                ",
                'stats' => "76 ATK \r\n 6 CRT",
                'source' => "Default Gear \r\n Story & Open World",
                'image' => "Lance_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //213
            [
                'name' => "Astral Divide: Pisces",
                'type' => "Scythe",
                'rarity' => "5star",
                'detail' =>
                "Gamma-Ray Burst
                [SP:0][CD: 16 detik] Api bawah tanah meletus dan meledak di dekat pengguna, menyebabkan 886% (1.200% pada 6★) + 200% ATK Fire DMG dan menyebabkan status Flared selama 10 detik jika terkena. Musuh yang terkena flare menerima 16,1% (20,0% pada 6★) bonus Fire DMG.
                Bonus perlengkapan Spina Astera: Astral Flare menimbulkan 11% (15% pada 6★) ATK bonus Fire DMG ke musuh yang terkena Flare. \r\n
                Electron Degeneracy
                Serangan Dasar, Penuh, dan Kombo menimbulkan 21,0% (25,0% pada 6★) bonus Total DMG ke musuh yang menyala.
                Bonus perlengkapan Spina Astera: Dia memulihkan 20 Astrum per detik saat dalam keadaan siaga. \r\n
                Relativistic Jets
                Serangan yang dibebankan menyebabkan 12,1% (20,0% pada 6★) bonus Total DMG.
                Bonus perlengkapan Spina Astera: Charged ATK atau Ultimate meningkatkan Fire DMG miliknya sebesar 17,1% (25,0% pada 6★) selama 10 detik, selama itu Basic, Charged, dan Combo ATK menimbulkan status Flared yang berlangsung selama 10 detik saat terkena. \r\n
                ",
                'stats' => "286 ATK \r\n 26 CRT",
                'source' => "Foundry",
                'image' => "Astral_Divide_-_Pisces_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //214
            [
                'name' => "Iris of Helheim",
                'type' => "Scythe",
                'rarity' => "5star",
                'detail' =>
                "Soul Awakener
                [SP:0][CD: 25 detik] Melepaskan kabut yang meminum jiwa di sekitar pengguna untuk menjatuhkan musuh ke udara, menimbulkan 400% ATK Lightning DMG, dan memicu efek berikut:
                Fallen Rosemary segera memasuki Formulir Valfreyja, memperoleh Rune Ulf / Strix / Ormr, dan memulihkan Disir sepenuhnya.
                Musuh dalam kabut Terpesona dan menerima 56,4% (80,0% pada 6★) ATK bonus Lightning DMG dari petir berkala Ormr Rune selama 15 detik.
                Setiap Serangan yang Dibebankan meningkatkan Total DMG pengguna sebesar 13,2% (25,0% pada 6★) selama 15 detik (tidak dapat ditumpuk). \r\n
                Guiding Fragrance
                Charged ATK dan Ultimate Wielder menghasilkan 18,2% (30,0% pada 6★) bonus Lightning DMG. Dia menimbulkan 20,4% (40,0% pada 6★) bonus Total DMG kepada musuh yang terkena Stain of Trickery. \r\n
                Reflux of Gjöll
                Fallen Rosemary equip bonuses:
                During Ultimate, Time-frozen Domain is triggered to pause all skill timers and the stage timer.
                Trickster only takes 2s to cast, during which all enemies are slowed, and gains a much larger attack range. \r\n
                ",
                'stats' => "276 ATK \r\n 27 CRT",
                'source' => "Foundry",
                'image' => "Iris_of_Helheim_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //215
            [
                'name' => "Path to Acheron: Kindred",
                'type' => "Scythe",
                'rarity' => "5star",
                'detail' =>
                "Higanbana's Blood Thorns
                Serangan yang dibebankan menciptakan kelopak yang berubah menjadi 5 paku di sekitar target yang terkena, masing-masing menimbulkan 76,4% (100,0% pada 6★) ATK AOE Physical DMG. CD: 7 detik. Dapat direset dengan Ultimate. Bonus perlengkapan Stygian Nymph: 7 paku dibuat sebagai gantinya. \r\n
                Kindred Mark
                Saat memasuki pertempuran atau mengeluarkan Ultimate, pengguna memulihkan 200 HP seketika dan mendapat 10% bonus Crit Rate serta 31,3% (36,0% pada 6★) Crit DMG selama 10 detik.
                Bonus perlengkapan Stygian Nymph:
                Saule: bonus di atas 11,6 detik terakhir (14,0 detik pada 6★) lebih lama; Veliona: bonus Crit DMG di atas berubah menjadi 46,4% (70,0% pada 6★). \r\n
                Nirvana
                Pengguna memperoleh 21,3% (26,0% pada 6★) Physical Damage. Bonus perlengkapan Stygian Nymph: Mendapat 31,3% (36,0% pada 6★) Pengganda Kerusakan Total untuk Mark Damage. \r\n
                ",
                'stats' => "284 ATK \r\n 28 CRT",
                'source' => "Foundry",
                'image' => "Path_to_Acheron_-_Kindred_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //216
            [
                'name' => "Sanguine Gaze: Union",
                'type' => "Scythe",
                'rarity' => "5star",
                'detail' =>
                "Nocturnal Bite
                [SP:0][CD: 7 detik] Gunakan cakar rantai untuk menggenggam target ke arah pengguna atau mengirim pengguna ke target dan melakukan tebasan sabit yang menghasilkan 100% + 821,4% (900,0% pada 6★) ATK Ice DMG. Bonus perlengkapan Starchasm Nyx: Tebasan sabit memulihkan 1 Carmine Gash dan dapat dihubungkan ke Urutan 4 Serangan Dasar. Dalam mode Burst, senjata aktif diubah menjadi membanting area di depannya dan menyeret musuh di dekatnya, menimbulkan 664,2% (900,0% pada 6★) + 4 × 40% ATK Ice DMG. Masuk dan keluar dari mode burst akan mengatur ulang cooldown senjata aktif. \r\n
                Peek into the Abyss
                Ice DMG meningkat sebesar 22,1% (30,0% pada 6★). Serangan mode Ultimate dan Burst menghasilkan 32,1% (40,0% pada 6★) bonus Total DMG. \r\n
                Union in the Dream
                Serangan yang dicaskan menimbulkan 12,1% (20,0% pada 6★) bonus Total DMG dan mengurangi Total DMG yang diterima sebesar 11,1% (15,0% pada 6★) saat terkena selama 3 detik. Memicunya lagi akan mengatur ulang durasinya. \r\n
                ",
                'stats' => "307 ATK \r\n 12 CRT",
                'source' => "Foundry",
                'image' => "Sanguine_Gaze_-_Union_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //217
            [
                'name' => "Skadi of Thrymheim",
                'type' => "Scythe",
                'rarity' => "5star",
                'detail' =>
                "Everwinter
                [SP:0][CD: 11 detik] ATK AOE besar menimbulkan 3 × 146% (170% pada 6★) ATK Ice DMG. Dalam 8 detik berikutnya, serangan pertama musuh yang terkena dampak terhadap pengguna menyebabkan 45% lebih sedikit DMG Total. Dapat diisi dua kali.  \r\n
                Ice Spirit
                Pengguna memperoleh 27,4% (40,0% pada 6★) Ice DMG, dan 11,1% (15,0% pada 6★) Total DMG terhadap musuh tipe PSY; memulihkan 2,00 SP saat mengenai musuh. CD: 4 detik. \r\n
                Moonlit Rime
                Senjata Aktif akan terpicu saat Argent Knight: Artemis terkena Hipotermia; CD: 6.0 detik. Saat melepaskan Ultimate, pengguna memulihkan 13,7 (20,0 pada 6★) SP dan mereset CD skill ini (rangkaian ke-2 dari Ultimate-nya tidak memicu efek ini). \r\n
                ",
                'stats' => "279 ATK \r\n 24 CRT",
                'source' => "Foundry",
                'image' => "Skadi_of_Thrymheim_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //218
            [
                'name' => "Aphrodite",
                'type' => "Scythe",
                'rarity' => "4star",
                'detail' =>
                "Thorny Rose
                [SP:13][CD: 8 detik] Blink dan muncul di belakang musuh target untuk menimbulkan 240% + 8 × 26% (400% + 8 × 50% pada 5★) ATK DMG Fisik ke semua musuh di sekitar.  \r\n
                Marigold's Luck
                Pengguna menimbulkan 12% (20% pada 5★) bonus DMG Fisik. Serangan Dasar (termasuk Serangan Charge dan Serangan Kombo) menimbulkan 120% (200% pada 5★) ATK DMG Fisik ke musuh di sekitar yang terkena serangan. Efek ini dapat dipicu 1 kali setiap 6,4 d (4,0 d pada 5★), dan Laju Kritiknya meningkat sebesar 100% terhadap musuh bertipe MECH. \r\n
                ",
                'stats' => "177 ATK \r\n 18 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Aphrodite_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //219
            [
                'name' => "Astral Rend: White Dwarf",
                'type' => "Scythe",
                'rarity' => "4star",
                'detail' =>
                "Planetary Nebula
                [SP:6][CD: 16 detik] Api bawah tanah meletus dan meledak di dekat pengguna, menimbulkan 480% (800% pada 5★) + 200% ATK Fire DMG dan menimbulkan status Flared selama 10 detik jika terkena. Musuh yang terkena flare menerima 7,0% (15,0% pada 5★) bonus Fire DMG. Bonus perlengkapan Spina Astera: Astral Flare menimbulkan 6% (10% pada 5★) ATK bonus Fire DMG ke musuh yang terkena Flare.  \r\n
                Electron Degeneracy
                Serangan Dasar, Penuh, dan Kombo menimbulkan 12,0% (20,0% pada 5★) lebih banyak bonus Total DMG pada musuh yang menyala. Bonus perlengkapan Spina Astera: Dia memulihkan 10 Astrum per detik saat dalam keadaan siaga. \r\n
                ",
                'stats' => "190 ATK \r\n 7 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Astral_Rend_-_White_Dwarf_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //220
            [
                'name' => "Genome Reaper",
                'type' => "Scythe",
                'rarity' => "4star",
                'detail' =>
                "Toxic Avalanche
                [SP:15][CD: 20 detik] Melepaskan neurotoksin setiap 0,5 detik untuk menimbulkan 60% (100% pada 5★) ATK Lightning DMG ke musuh di sekitar. Durasi: 4,9 detik. Lalu lepaskan Kabut Beracun kuat yang mengakibatkan 380% (700% pada 5★) ATK Lightning DMG ke musuh di sekitar.  \r\n
                Sin Stalker
                Kecepatan Gerak Karakter meningkatkan DMG Fisik dan Elemental pada serangan. Untuk setiap 10% buff Kecepatan Gerak, memperoleh 3,4% (5,0% pada 5★) DMG (Buff DMG Maks: 23% [35% pada 5★]). Karakter memperoleh 14% (20% pada 5★) Kecepatan Bergerak.  \r\n
                ",
                'stats' => "190 ATK \r\n 7 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Genome_Reaper_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //221
            [
                'name' => "Iris of the Dreams",
                'type' => "Scythe",
                'rarity' => "4star",
                'detail' =>
                "Lady of the Fallen
                [SP:0][CD: 30 detik] Fallen Rosemary segera memasuki Bentuk Valfreyja dan melepaskan kabut peminum jiwa di sekelilingnya, mengakibatkan 200% ATK Lightning DMG. Musuh dalam kabut Terpesona dan menerima 30,0% (50,0% pada 5★) ATK bonus DMG petir dari petir Ormr Rune selama 15 detik. Setiap Serangan yang Dibebankan meningkatkan Total DMG tuan rumah sebesar 11,0% (15,0% pada 5★) selama 15 detik (tidak dapat ditumpuk).  \r\n
                Scent of the Dead
                Charged ATK dan Ultimate Wielder menyebabkan 9,4% (15,0% pada 5★) bonus Lightning DMG. Tim menimbulkan 11,0% (15,0% pada 5★) bonus Total DMG kepada musuh yang terkena Stain of Trickery (tidak dapat ditumpuk).  \r\n
                ",
                'stats' => "175 ATK \r\n 18 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Iris_of_the_Dreams_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //222
            [
                'name' => "Onyx Iron",
                'type' => "Scythe",
                'rarity' => "4star",
                'detail' =>
                "Protective Field
                [SP:5][CD: 20 detik] Pengguna memperoleh penghalang yang bertahan selama 10 detik yang dapat menyerap kerusakan sebesar 7% (12% pada 5★) dari HP Maksnya. Selama penghalang masih ada, pengguna memulihkan 13,2 (22,0 pada 5★) HP per detik dan menimbulkan 6,0% (10,0% pada 5★) bonus Total DMG serta 10% bonus Physical DMG.  \r\n
                Vitality Drive
                Mendapat 0,72% (1,20% pada 5★) Pengganda DMG Total dan 0,34% (0,50% pada 5★) buff DMG Fisik per 10% HP yang dimiliki pengguna.  \r\n
                ",
                'stats' => "156 ATK \r\n 16 CRT",
                'source' => "Foundry",
                'image' => "Onyx_Iron_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //223
            [
                'name' => "Path to Acheron",
                'type' => "Scythe",
                'rarity' => "4star",
                'detail' =>
                "Dhatura's Blessing
                Pengguna memulihkan 120 (200 pada 5★) HP secara instan dan memperoleh 10% Crit Rate dan 18,0% (30,0% pada 5★) Crit Damage selama 10,0 detik setelah melepaskan Switch Skill atau Ultimate.  \r\n
                Higanbana's Curse
                Pengguna memperoleh 13,6% (20,0% pada 5★) Kerusakan Fisik. Bonus perlengkapan Stygian Nymph: Mendapat 18,0% (30,0% pada 5★) Pengganda Kerusakan Total untuk Kerusakan Tanda.  \r\n
                ",
                'stats' => "176 ATK \r\n 18 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Path_to_Acheron_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //224
            [
                'name' => "Sanguine Gaze",
                'type' => "Scythe",
                'rarity' => "4star",
                'detail' =>
                "Nightmarish Beak
                [SP:4][CD: 7 detik] Gunakan cakar rantai untuk menggenggam target ke arah pengguna atau mengirim pengguna ke target dan melakukan tebasan sabit yang menghasilkan 100% + 640,2% (800,0% pada 5★) ATK Ice DMG. Bonus perlengkapan Starchasm Nyx: Tebasan sabit memulihkan 1 Carmine Gash dan dapat dihubungkan ke Urutan 4 Serangan Dasar.  \r\n
                Crimson Eyes
                DMG Es meningkat sebesar 17,0% (25,0% pada 5★). Serangan mode Ultimate dan Burst menghasilkan 22,0% (30,0% pada 5★) bonus Total DMG.  \r\n
                ",
                'stats' => "190 ATK \r\n 7 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Sanguine_Gaze_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //225
            [
                'name' => "Skadi Ondurgud",
                'type' => "Scythe",
                'rarity' => "4star",
                'detail' =>
                "Wind of Thrymheim
                [SP:4][CD: 22 detik] ATK AOE besar menimbulkan 7 × 72% (120% pada 6★) ATK Ice DMG. Musuh yang terkena dampak menyerang pengguna untuk pertama kalinya dalam waktu 4,8 detik (8,0 detik pada 6★) menderita 14% (30% pada 6★) total debuff Pengurangan DMG untuk serangan tersebut.  \r\n
                Goddess of Winter
                Pengguna menimbulkan 12,0% (20,0% pada 6★) Total DMG lebih banyak. Jika digunakan oleh Argent Knight: Artemis, menyerang musuh dengan Hipotermia akan memulihkan 1,20 (2,00 pada 6★) SP untuknya; CD: 5,6 detik (4,0 detik pada 6★).  \r\n
                ",
                'stats' => "181 ATK \r\n 15 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Skadi_Ondurgud_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //226
            [
                'name' => "Undine's Tale",
                'type' => "Scythe",
                'rarity' => "4star",
                'detail' =>
                "Dark Flood
                [SP:4][CD:18 detik] Menyerang musuh di depan untuk menimbulkan 350% (550% pada 5★) ATK DMG Fisik, menerapkan Lambat Waktu yang kuat selama 2,5 detik, dan mengurangi Ignore Interrupt selama 5,6 detik (8,0 detik pada 5★). Digunakan saat Burst: Menimbulkan 180% (300% pada 5★) ATK Physical DMG lainnya.
                Bonus perlengkapan Swallowtail Phantasm: Memasuki Burst memberikan 250 Veil. Jika tidak dalam mode Burst, masuk ke Warp State.  \r\n
                Songs of the Deep
                Pengguna memperoleh 12,0% (20,0% pada 5★) Kecepatan ATK lebih cepat. Pukulan dari belakang pada musuh memberikan 10% (15% pada 5★) Total buff Pengganda DMG kepada pengguna selama 6 detik. Memicu skill ini lagi akan mengatur ulang durasinya.  \r\n
                ",
                'stats' => "175 ATK \r\n 19 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Undine's_Tale_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //227
            [
                'name' => "Azure Storm",
                'type' => "Scythe",
                'rarity' => "3star",
                'detail' =>
                "Flash Serration
                Untuk setiap pukulan pada musuh, karakter memperoleh 1,27% (2,00% pada 4★) Kecepatan Serangan selama 4,8 detik (7,0 d pada 4★). Menumpuk hingga 10 kali.  \r\n
                ",
                'stats' => "110 ATK \r\n 10 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Azure_Storm_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //228
            [
                'name' => "Carmine Steel",
                'type' => "Scythe",
                'rarity' => "3star",
                'detail' =>
                "Protective Field
                [SP:15][CD:20 detik] Pengguna memperoleh penghalang yang bertahan selama 10 detik yang dapat menyerap kerusakan setara dengan 6% (10% pada 4★) dari HP maksimalnya. Selama penghalang masih ada, pengguna memulihkan 9,9 (15,0 pada 4★) HP per detik dan menimbulkan 6,3% (10,0% pada 4★) bonus Total DMG serta 10% bonus Physical DMG.  \r\n
                ",
                'stats' => "110 ATK \r\n 10 CRT",
                'source' => "Foundry",
                'image' => "Carmine_Steel_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //229
            [
                'name' => "Moment of Truth",
                'type' => "Scythe",
                'rarity' => "3star",
                'detail' =>
                "Death Knell
                [SP:13][CD: 30 detik] Selama 2 detik, memberikan Time Slow yang kuat kepada musuh dalam AOE besar dan mempercepat Kecepatan Serangan dan Kecepatan Gerak karakter sebesar 15% (30% pada 4★). Durasi: 5 detik.  \r\n
                ",
                'stats' => "110 ATK \r\n 10 CRT",
                'source' => "Events",
                'image' => "Moment_of_Truth_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //230
            [
                'name' => "Obsidian Reaper",
                'type' => "Scythe",
                'rarity' => "3star",
                'detail' =>
                "Death Knell
                [SP:3][CD: 12 detik] Memukul mundur musuh sebelum penggunanya, menimbulkan 240% (350% pada 4★) ATK Physical DMG. Serangan Dasar pengguna juga menimbulkan 40,8 (70,0 pada 4★) Fire DMG selama 7,1 detik (10,0 detik pada 4★).  \r\n
                ",
                'stats' => "112 ATK \r\n 18 CRT",
                'source' => "Foundry",
                'image' => "Obsidian_Reaper_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //231
            [
                'name' => "Senescence",
                'type' => "Scythe",
                'rarity' => "3star",
                'detail' =>
                "San-Ge Brand
                [SP:13][CD: 14 detik] Menimbulkan 111% (200% pada 5★) ATK DMG Fisik ke musuh di sekitar dan menimbulkan 5 Bleed Trauma pada mereka.  \r\n
                ",
                'stats' => "98 ATK \r\n 6 CRT",
                'source' => "Events",
                'image' => "Senescence_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //232
            [
                'name' => "Scythe",
                'type' => "Scythe",
                'rarity' => "1star",
                'detail' =>
                "
                ",
                'stats' => "38 ATK \r\n 6 CRT",
                'source' => "Default Gear \r\n Story & Open World",
                'image' => "Scythe_(2).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //233
            [
                'name' => "Domain of Genesis",
                'type' => "Pistol",
                'rarity' => "5star",
                'detail' =>
                "Samsara Overflow
                [SP:0][CD: 12 detik] Menembakkan tembakan kuat ke depan, menimbulkan 532,1% (650,0% pada 5★) ATK Fire DMG. Saat Herrscher of Finality mengaktifkan senjata, dia memperoleh 3 poin Keturunan. Senjata aktif berbeda dalam posisi Time Flint dan Moon Blade: Dalam posisi Time Flint, dia melempar pisau berputar ke depan dan menendangnya untuk menembus musuh di depan, menghasilkan 100% + 4 x 25% + 532,1% (650,0% pada 5★) ATK DMG Api; Dalam posisi Pedang Bulan, dia menembakkan beberapa proyektil ke depan, menimbulkan 5% + 7 x 88,6% (120,0% pada 5★) ATK Fire DMG.
                Senjata Aktif membuat musuh yang terkena menjadi Layu, yang menyebabkan mereka menerima 39,3% (55,0% pada 5★) ATK Fire DMG per detik selama 6 detik. Memicunya lagi akan menyegarkan durasinya. \r\n
                Cyclic Axis
                Menimbulkan 22,1% (30,0% pada 5★) Total DMG lebih banyak kepada musuh dalam kondisi Layu. Bonus perlengkapan Herrscher of Finality: Serangan Kombo menyebabkan 28,2% (40,0% pada 5★) lebih banyak Fire DMG, dan mereset CD Aktif Senjata saat beralih antara posisi Time Flint dan Moon Blade. Beralih ke posisi Finale mengurangi CD Aktif Senjata sebesar 28,2% (40,0% pada 5★).  \r\n
                Anonymous Divinity
                Menimbulkan 33,2% (45,0% pada 5★) lebih banyak Fire DMG. Bonus perlengkapan Herrscher of Finality: Selama Absolute Time Fracture, musuh dalam kondisi Layu menerima 9,5% (15,0% pada 5★) Total DMG lebih banyak.  \r\n
                ",
                'stats' => "304 ATK \r\n 14 CRT",
                'source' => "Foundry",
                'image' => "Domain of Genesis.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //234
            [
                'name' => "Incandescence",
                'type' => "Pistol",
                'rarity' => "5star",
                'detail' =>
                "Light Up the World
                [SP:0][CD: 18 detik] Lemparkan pistol ke udara untuk menyerang musuh secara otomatis menimbulkan 12,1% (20,0% pada 6★) ATK Fire DMG per 0,1 detik ke musuh di sekitar (total 24 pukulan) dan memulihkan 4 SP, setelah itu pistol meledak menyebabkan 632 ,1% (750,0% pada 6★) ATK DMG Api. Bonus perlengkapan Herrscher of Flamescion: Pelemparan pistol memulihkan 5,0 bonus SP dan ledakan DMG meledakkan Ember Brands. \r\n
                I Am the Torch
                DMG Kebakaran meningkat sebesar 22,1% (30,0% pada 6★). Kombo ATK dan Ultimate menyebabkan 27,1% (35,0% pada 6★) bonus Total DMG.  \r\n
                The Fire Never Dies
                Musuh yang terkena ledakan aktif senjata menerima 11,1% (15,0% pada 6★) bonus Fire DMG selama 8,0 detik. Tidak dapat ditumpuk tetapi dapat disegarkan. Bonus perlengkapan Herrscher of Flamescion: Meledakan Ember Brands memicu efek yang sama.  \r\n
                ",
                'stats' => "306 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Domain_of_Incandescence_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //235
            [
                'name' => "Tranquil Rhapsody",
                'type' => "Pistol",
                'rarity' => "5star",
                'detail' =>
                "Night Phantom
                [SP:0][CD: 20 detik] Tahan tombol aktif senjata untuk masuk ke mode Nightwalk (2 detik terakhir), di mana pengguna kebal terhadap serangan; lepaskan tombol untuk membuat pengguna muncul kembali dan melompat mundur, menarik musuh di sekitarnya dan menimbulkan 607% (1.000% pada 6★) ATK AOE Ice DMG. Jika digunakan oleh Sixth Serenade, dia akan mendapatkan 300 poin Nachtsicht saat memasuki mode Nightwalk; dalam mode Nightwalk, dia memperoleh 300 poin Nachtsicht lagi (sekali selama setiap rentang keterampilan) dan menimbulkan 200% ATK Ice DMG saat melewati musuh; setelah mengaktifkan senjata, ketuk [ATK] untuk segera melepaskan Serangan Kombo tanpa biaya Nachtsicht. \r\n
                Dirge of Totenmond
                Setelah melepaskan senjata aktif atau Ultimate, pengguna menimbulkan 32,1% (40,0% pada 6★) Total DMG lebih banyak selama 9 detik; CD: 15 detik.  \r\n
                Frost Raven
                Pengguna menimbulkan 24,3% (40,0% pada 6★) lebih banyak Ice DMG dan QTE-nya menimbulkan 18,2% (30,0% pada 6★) Total DMG lebih banyak; jika digunakan oleh Sixth Serenade, Raven Mark miliknya menimbulkan 18,2% (30,0% pada 6★) Ice DMG lebih banyak, dan dia secara signifikan memperoleh Ignore Interrupt selama 5 d setelah melepaskan senjata aktif atau Serangan Kombo.  \r\n
                ",
                'stats' => "287 ATK \r\n 24 CRT",
                'source' => "Foundry",
                'image' => "Tranquil_Rhapsody_(6).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //236
            [
                'name' => "2nd Sacred Relic",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Saint's Prediction
                Mempercepat pemulihan SP serangan sebesar 23% (35% pada 5★). \r\n
                Thunder Clouds
                Pukulan ke musuh menimbulkan 19 (50 jam 5★) Lightning DMG tambahan. Karakter memperoleh 6,0% (10,0% pada 5★) Crit DMG untuk setiap 25 poin SP saat ini. Efek ditumpuk hingga 8 kali.  \r\n
                ",
                'stats' => "161 ATK \r\n 41 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Dorm Supplies",
                'image' => "2nd_Sacred_Relic_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //237
            [
                'name' => "ARC Serratus",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Void Bullet Hail
                [SP:18][CD: 18 detik] Saat melakukan pukulan, menimbulkan 340% (500% pada 5★) ATK AOE Physical DMG dan mengganggu musuh (-40% DEF) selama 7 d (12 d pada 5★). Pengguna memperoleh buff Iron Will selama 5 detik: Ignore Interrupt meningkat secara signifikan dan setiap Serangan Kombo mengurangi DEF target sebesar 4% (CD: 0,4 dtk. Tumpukan maksimal: 5) dan memperbarui durasi debuff penurunan. \r\n
                Iron Will
                Saat Iron Will aktif, pengguna memperoleh 30% (50% pada 5★) Crit DMG dan 30% (50% pada 5★) Shield DMG. Saat Iron Will berakhir, dapatkan buff Iron Legacy 6 detik. Saat Iron Legacy aktif, jika pengguna keluar dari medan perang, seluruh tim memperoleh 24% (40% pada 5★) Melee Crit DMG selama 12 detik.  \r\n
                ",
                'stats' => "175 ATK \r\n 20 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "ARC_Serratus_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //238
            [
                'name' => "Blaze Destroyer",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Raging Flames
                [SP:20][CD: 9 detik] Mengetuk musuh di area kecil di depannya dan menimbulkan 100% ATK Physical DMG. Target meledak setelah beberapa saat, menimbulkan 875 (1.888 pada 5★) Fire DMG dan menimbulkan 5 Ignite Trauma. \r\n
                Ignition
                Untuk setiap musuh yang tersulut, setiap serangan menimbulkan 21 (41 pada 5★) Fire DMG tambahan. Menumpuk hingga 3 (5 jam 5★) kali.  \r\n
                ",
                'stats' => "176 ATK \r\n 20 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Blaze_Destroyer_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //239
            [
                'name' => "Blooded Saints",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Holy Verdict
                Saat Serangan Dasar/Ultimate/Burst mengenai musuh, Dukungan Orbital diaktifkan untuk menimbulkan 290% (450% pada 5★) ATK DMG Fisik terhadap target dan musuh di sekitar. Dukungan Orbital dapat menyerang sekali setiap 9,2 detik (6,0 detik pada 5★). Bonus perlengkapan Sündenjäger: Menimbulkan Merek yang Diburu selama 13 detik pada target saat ini. \r\n
                Blooded Hands
                Every time the character summons Orbital Support using the Holy Verdict skill, character gains 4% (7% at 5★) Physical DMG for 21.0s (25.0s at 5★). Stacks up to 6 times. Triggering this again resets the duration. Buff ends once the character exits. Setiap kali karakter memanggil Orbital Support menggunakan skill Holy Verdict, karakter memperoleh 4% (7% pada 5★) Physical DMG selama 21,0 d (25,0 d pada 5★). Menumpuk hingga 6 kali. Memicu ini lagi akan mengatur ulang durasinya. Buff berakhir setelah karakter keluar.  \r\n
                ",
                'stats' => "176 ATK \r\n 21 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Blooded_Saints_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //240
            [
                'name' => "Dominators",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Burning Punch
                [SP:25][CD: 10 detik] Lepaskan pukulan besar dengan kekuatan mecha. Menimbulkan 50% ATK DMG Fisik beberapa kali dan menimbulkan 5 Ignite Trauma. \r\n
                Fury Dominator
                Pukulan terhadap musuh memperoleh 10 (25 pada 5★) Fire DMG.  \r\n
                ",
                'stats' => "144 ATK \r\n 8 CRT",
                'source' => "Story & Open World",
                'image' => "Dominators_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //241
            [
                'name' => "Echo of Paradise",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Fascinating Symphony
                [SP:0][CD: 17 detik] Melepaskan gelombang suara untuk menimbulkan 7 × 60,1% (100,0% pada 5★) ATK Lightning DMG, menimbulkan 7 × 1 Paralyze Trauma, dan meningkatkan Lightning DMG tim sebesar 9,4% (15,0% pada 5★) selama 20 d (tidak dapat ditumpuk ). Bonus perlengkapan Golden Diva: Entri QTE mentransmisikan keterampilan secara otomatis. Mentransmisikannya akan mengaktifkan Performa, atau Daya Tarik jika Performa sudah berlaku. \r\n
                Splendid Hymn
                Tim menimbulkan 6,0% (10,0% pada 5★) bonus Total DMG (tidak dapat ditumpuk). Saat mengeluarkan Ultimate, rekan satu tim di lapangan menimbulkan 7,2% (12,0% pada 5★) bonus Total DMG selama 20 detik (tidak dapat ditumpuk dan dibatalkan saat keluar).  \r\n
                ",
                'stats' => "144 ATK \r\n 8 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Echo_of_Paradise_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //242
            [
                'name' => "Energy Leapers",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Stun and Run
                [SP:14][CD: 16 detik] Jatuhkan bom setrum dan teleport ke belakang. Bom setrum kemudian meledak, menimbulkan 230% (350% pada 5★) ATK DMG Fisik dan menghasilkan medan setrum yang berlangsung selama 5 detik, serta menimbulkan 5 Trauma Stun. \r\n
                Temporal Frenzy
                Saat memicu Time Fracture global, karakter memperoleh 48,0% (80,0% pada 5★) Kecepatan Serangan dan 17,0% (25,0% pada 5★) Crit Rate selama 4 detik. Buff tersebut dihilangkan setelah Time Fracture berakhir.  \r\n
                ",
                'stats' => "176 ATK \r\n 20 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Energy_Leapers_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //243
            [
                'name' => "Fafnir Flame",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Flame Overload
                [SP:15][CD: 20 detik] Hasilkan 3 ledakan langsung untuk meledakkan musuh di sekitar. Setiap ledakan menimbulkan 112% (240% pada 5★) ATK DMG Fisik dan menimbulkan 10 Ignite Trauma. \r\n
                Saint's Pet
                Selama Mode Burst, memperoleh 13% (18% pada 5★) DMG Fisik. Saat terkena atau saat memicu Ultimate Evasion, keluarkan 1 ledakan Skill Aktif. CD: 5 detik.  \r\n
                ",
                'stats' => "156 ATK \r\n 28 CRT",
                'source' => "Foundry",
                'image' => "Fafnir_Flame_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //244
            [
                'name' => "Fenghuang Pinions",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Miseries Abound
                [SP:6][CD: 25 detik] Melepaskan sambaran petir untuk mengakibatkan 120,1% (200,0% pada 5★) × 3 ATK Lightning DMG. Ketuk lagi tombol senjata untuk mengeluarkan senjata finisher yang menghasilkan 240,2% (400,0% pada 5★) ATK Lightning DMG ke target dan musuh di sekitar, menimbulkan 6 Paralyze Trauma, dan membuat mereka menerima 23,0% (35,0% pada 5★) bonus Lightning DMG selama 9 detik (tidak dapat ditumpuk). \r\n
                Beyond Salvation
                Sambaran petir akan meninggalkan 3 bulu disekitar sasaran. Melemparkan senjata finisher atau rekan satu tim mengambil bulu akan meningkatkan Trauma Paralyze yang disebabkan oleh senjata finisher sebanyak 2 dan peningkatan Lightning DMG sebanyak 1 detik. Semua bulu akan hilang setelah casting senjata finisher. Tim menimbulkan 9,4% (15,0% pada 5★) bonus Total DMG terhadap musuh yang lumpuh (tidak dapat ditumpuk).  \r\n
                Key of Sentience
                Dalam Co-op Raid, pengguna menimbulkan 16,0% (22,0% pada 5★) bonus Elemental DMG dan 16,0% (22,0% pada 5★) lebih banyak terhadap musuh yang lumpuh, beku, atau tersulut.  \r\n
                ",
                'stats' => "184 ATK \r\n 13 CRT",
                'source' => "Foundry \r\n Limited/Rotating Supplies",
                'image' => "Fenghuang_Pinions_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //245
            [
                'name' => "Hurricanes",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Spinning Windcut
                [SP:24][CD: 30 detik] Berputar beberapa kali untuk menebas musuh di sekitar dan menimbulkan 62 (173 pada 5★) DMG Es per tebasan, lalu diakhiri dengan ledakan eksplosif yang mengakibatkan 300% ATK DMG Fisik dan memperlambat musuh sebesar 60% selama 1,07 detik (1,50 detik pada 5★ ). Karakter dapat bergerak bebas sambil berputar. \r\n
                Tailwind
                Pukulan terhadap musuh mempunyai peluang 3,3% (4,9% pada 5★) untuk mempercepat Kecepatan Gerakan sebesar 65% (98% pada 5★) selama 4,5 detik. CD: 10 detik.  \r\n
                ",
                'stats' => "133 ATK \r\n 25 CRT",
                'source' => "Story & Open World",
                'image' => "Hurricanes_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //246
            [
                'name' => "Judgment of Shamash",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Shamash Assault
                [SP:20][CD: 35 detik] Pukul musuh di depan pengguna dengan Judgment of Shamash. Musuh menerima 100% ATK Fire DMG + 1,088 (1,984 pada 5★) × 2 Fire DMG, memiliki 30% lebih lambat Serangan dan Kecepatan Bergerak, menerima 7% (15% pada 5★) bonus Total DMG, menerima 266 (936 pada 5 ★) Menembakkan DMG per detik, dan berpeluang 10% menerima 3 Stun Trauma. Durasi debuff: 15 detik. Saat diaktifkan, memperoleh Iron Body dan 80% Total DMG Reduction. Setelah aktivasi, kehilangan 13% HP maksimal per detik selama 5 detik, namun tidak akan mati akibat efek ini. Skill tidak dapat digunakan ketika HP di bawah 33%. \r\n
                Ember
                Memiliki peluang 10% menimbulkan 3 Ignite Trauma per 1 detik. Menimbulkan 10% (18% pada 5★) bonus Total DMG terhadap musuh yang tersulut.  \r\n
                Key of Destruction
                Dalam co-op raids, tim menimbulkan 12,0% (20,0% pada 5★) bonus Total DMG dan memulihkan 5,0% (7,0% pada 5★) HP per detik selama 5,1 d setiap kali keterampilan senjata digunakan.  \r\n
                ",
                'stats' => "139 ATK \r\n 23 CRT",
                'source' => "Raids \r\n Events",
                'image' => "Judgment_of_Shamash_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //247
            [
                'name' => "Keys of the Void",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Gates of Revelation
                [SP:5][CD: 16 detik] Melepaskan 3 gelombang kejut energi di depan pengguna dengan interval besar di antaranya. Setiap gelombang kejut menimbulkan 120% (200% pada 5★) ATK DMG Fisik, menjatuhkan musuh ke udara, dan menghasilkan Inti Luar Angkasa. Ledakan berikutnya dari ledakan Inti Luar Angkasa menimbulkan 180% (300% pada 5★) ATK DMG Fisik. Bonus perlengkapan Herrscher of the Void: Space Core yang dihasilkan di-buff oleh kemampuan Herrscher sendiri, menimbulkan 150% ATK Physical DMG lagi, dan mendapatkan kembali 60 Herrscher Charge. \r\n
                Void Sigil
                Karakter menimbulkan 12% (20% pada 5★) lebih banyak DMG Fisik dan memperoleh 18% (30% pada 5★) DMG Kritik.  \r\n
                ",
                'stats' => "168 ATK \r\n 23 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Dorm Supply",
                'image' => "Keys_of_the_Void_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //248
            [
                'name' => "Hyper Railguns",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Megavolts
                [SP:16][CD: 18 detik] Menimbulkan 842 (2.300 pada 5★) KERUSAKAN Petir di area luas dan menimbulkan 10 Trauma Paralisis. \r\n
                Paralyzing Current
                Pukulan mempunyai peluang 2,2% (3,0% pada 5★) untuk menimbulkan 3 Trauma Paralyze.  \r\n
                ",
                'stats' => "183 ATK \r\n 10 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Dorm Supply \r\n Foundry",
                'image' => "Hyper_Railguns_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //249
            [
                'name' => "Jingwei's Wings (Pistols)",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Sealing Feather
                [SP:18][CD: 25 detik] Memanggil hujan meteor untuk menghantam musuh secara acak. Menimbulkan 66% (90% pada 5★) ATK DMG Fisik dan menimbulkan 18 Ignite Trauma. Hujan meteor ini berlangsung selama 12 detik. \r\n
                Endless
                Untuk setiap pukulan berulang pada target yang sama (target direset jika tidak ada serangan yang terjadi dalam 2,5 detik), serangan berikutnya memperoleh 1,2% (2,0% pada 5★) Crit Rate (dibatasi pada 20%) dan 3,0% (5,0% pada 5★ ) Kritik DMG (dibatasi 50%).  \r\n
                ",
                'stats' => "163 ATK \r\n 19 CRT",
                'source' => "Foundry",
                'image' => "Jingweis_Wings_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //250
            [
                'name' => "Jingwei's Wings (Pistols)",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Sealing Feather
                [SP:18][CD: 25 detik] Memanggil hujan meteor untuk menghantam musuh secara acak. Menimbulkan 66% (90% pada 5★) ATK DMG Fisik dan menimbulkan 18 Ignite Trauma. Hujan meteor ini berlangsung selama 12 detik. \r\n
                Endless
                Untuk setiap pukulan berulang pada target yang sama (target direset jika tidak ada serangan yang terjadi dalam 2,5 detik), serangan berikutnya memperoleh 1,2% (2,0% pada 5★) Crit Rate (dibatasi pada 20%) dan 3,0% (5,0% pada 5★ ) Kritik DMG (dibatasi 50%).  \r\n
                ",
                'stats' => "163 ATK \r\n 19 CRT",
                'source' => "Foundry",
                'image' => "Jingweis_Wings_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //251
            [
                'name' => "Key of Radiance",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Blazing Air
                [SP:3][CD: 18 detik] Melemparkan pistol ke udara untuk menyerang musuh secara otomatis menimbulkan 12,0% (20,0% pada 5★) ATK Fire DMG per 0,2 d ke musuh di sekitar (total 12 pukulan) dan memulihkan 3 SP, setelah itu pistol meledak menyebabkan 440,2% ( 600,0% pada 5★) ATK DMG Api. Bonus perlengkapan Herrscher of Flamescion: Pelemparan pistol memulihkan 3,0 bonus SP dan DMG ledakan meledakkan Ember Brands. \r\n
                Burning Touch
                DMG Kebakaran meningkat sebesar 12,0% (20,0% pada 5★). Kombo ATK dan Ultimate menyebabkan 17,0% (25,0% pada 5★) bonus Total DMG.   \r\n
                ",
                'stats' => "190 ATK \r\n 8 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Key_of_Radiance_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //252
            [
                'name' => "Light and Shadow",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Polar Storm
                [SP:20][CD: 20 detik] Menghasilkan bola es yang menyeret semua musuh di jalurnya. Bola es tersebut kemudian meledak, membekukan musuh dalam area AOE besar, menimbulkan 362 (850 pada 5★) Ice DMG setiap 0,9 detik selama 5 detik, dan menimbulkan 5 Rime Trauma. \r\n
                Coldarra
                Ketika serangan dasar (termasuk kombo dan serangan bermuatan) menghancurkan perisai, lepaskan ledakan dingin, memperlambat Kecepatan Gerak dan Kecepatan Serangan target dan musuh di sekitar dalam AOE kecil sebesar 77% selama 3,20 detik (84% selama 4,00 detik pada 5★ ).   \r\n
                ",
                'stats' => "190 ATK \r\n 8 CRT",
                'source' => "Exchange House \r\nLimited/Rotating Supplies",
                'image' => "Light_and_Shadow_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //253
            [
                'name' => "Mjolnir",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Wrath of Thor
                [SP:18][CD: 13 detik] Menjatuhkan palu guntur yang menjatuhkan musuh, menimbulkan 321% (405% pada 5★) ATK DMG Fisik dan mengganggu mereka, mengurangi DEF mereka sebesar 80% selama 3,60 detik (4,00 detik pada 5★). \r\n
                Crush
                Mendapatkan 11% (15% pada 5★) Tingkat Kritik.   \r\n
                ",
                'stats' => "190 ATK \r\n 0 CRT",
                'source' => "Exchange House \r\nLimited/Rotating Supplies",
                'image' => "Mjolnir_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //254
            [
                'name' => "PSY - Bows of Hel",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Land of Death
                [SP:16][CD: 18 detik] Membombardir target dengan sinar cahaya, menghasilkan 9 × 36,0% (60,0% pada 5★) ATK AoE Physical DMG dan menimbulkan 10 Rime Trauma.  \r\n
                Underworld River
                Mendapatkan 3,4% (5,0% pada 5★) Tingkat Kritik. Serangan karakter pada musuh yang terkena efek stun dan beku memperoleh 24,0% (40,0% pada 5★) Physical DMG   \r\n
                ",
                'stats' => "182 ATK \r\n 19 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "PSY_-_Bows_of_Hel_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //255
            [
                'name' => "Proto Alberich's Bows",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Ties of the Wind
                [SP:18][CD: 0 detik] Menembakkan proyektil udara terkompresi dalam lintasan lurus, menimbulkan 62% (110% pada 5★) ATK DMG Fisik ke semua musuh yang terkena. Kastor memperoleh 10 SP jika proyektil mengenai setidaknya 1 musuh yang berdarah.  \r\n
                Wings of the Wind
                Karakter memperoleh 13% (25% pada 5★) Kecepatan Serangan dan 13% (25% pada 5★) Kecepatan Bergerak.   \r\n
                ",
                'stats' => "178 ATK \r\n 22 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Proto_Alberich's_Bows_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //256
            [
                'name' => "Ranger's Pistol",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Hot Smash
                [SP:20][CD: 30 detik] Meluncurkan Flame Impact secara langsung setiap 1 d setiap 10 d untuk mengakibatkan 480 (800 pada 5★) Fire DMG. Selama periode tersebut, Ultimate Evasion yang berhasil akan langsung memicu Empowered Flame Impact yang mengakibatkan 1.603 (4.000 pada 5★) Fire DMG. Musuh yang terkena Flame Impact mempunyai peluang 6% (10% pada 5★) untuk menerima 5 Stun Trauma.  \r\n
                Cruel Punishment
                Serangan terhadap musuh yang terkena efek stun memperoleh 19% (35% pada 5★) Total Pengganda DMG.
                [Ranger] Karakter menerima 20% lebih sedikit Ice DMG. Jika rekan satu tim lainnya dilengkapi dengan senjata seri [Ranger], maka serangan karakter juga memperoleh 12% (20% pada 5★) Fire DMG.   \r\n
                ",
                'stats' => "152 ATK \r\n 9 CRT",
                'source' => "Story \r\n Story & Open World",
                'image' => "Ranger's_Pistol_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //257
            [
                'name' => "Shennong's Guardians",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Enchantment of Herbs
                [SP:20][CD: 20 detik] Menghasilkan aura global yang mempengaruhi semua musuh. Melemahkan musuh target (tidak bekerja pada bos), mengurangi ATK-nya sebesar 46% (70% pada 5★). Melumpuhkan semua musuh selain target dan menyebabkan Time Freeze. Semua musuh lainnya (kecuali target tersebut) tidak dapat ditargetkan dan menerima DMG yang sangat berkurang. Aura ini bertahan selama 7,60 detik (10 detik pada pukul 5★).  \r\n
                Suppression
                Serangan terhadap musuh yang lemah mendapat 30% (50% pada 5★) Total Pengganda DMG.  \r\n
                ",
                'stats' => "181 ATK \r\n 12 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies",
                'image' => "Shennong's_Guardians_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //258
            [
                'name' => "Twins of Eden",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Fruit of Knowledge
                [SP:6][CD: 18 detik] Menembakkan Grav Bomb ke target selama 7 detik dan menimbulkan 600% ATK Physical DMG. Kerusakannya ditingkatkan sebesar 150% terhadap perisai. Selama Grav Bomb ada, [Grav Lock] diterapkan pada target jika perisainya rusak, menonaktifkannya dan membekukan regen perisai selama 3 detik. Grav Bomb meledak dalam 3 detik, menimbulkan 340% (500% pada 5★) ATK AOE Physical DMG. Pembuatan Grav Lock dan ledakan Grav Bomb keduanya memberikan 7,2% (12,0% pada 5★) bonus DMG Fisik tim selama 9 detik (dapat disegarkan namun tidak ditumpuk).
                Grav Bomb langsung meledak jika mengenai musuh yang perisainya tidak ada atau rusak.  \r\n
                Original Sin
                Pembuatan Grav Lock dan ledakan Grav Bomb melemahkan musuh di area tersebut, menurunkan DEF mereka sebesar 45% (65% pada 5★) selama 9 detik (dapat disegarkan namun tidak ditumpuk).  \r\n
                Key of Devouring
                Dalam co-op raids, karakter memperoleh 25,0% (40,0% pada 5★) Crit DMG dan 3,0% (5,0% pada 5★) Crit Rate.  \r\n
                ",
                'stats' => "182 ATK \r\n 13 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Twins_of_Eden_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //259
            [
                'name' => "Spirit Guns - Yae",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Shin - Seven Sakura
                [SP:21][CD: 14 detik] Menyerang musuh di dekat target dengan rangkaian tebasan telekinetik 7 pukulan. Setiap tebasan menimbulkan 45% (77% pada 5★) ATK Physical DMG dan melumpuhkan mereka selama 3,7 detik.  \r\n
                Night Sakura
                Selama Time Fracture global, serangan menimbulkan 2 Bleed Trauma (CD: 1.5s). Selama Fraktur Waktu Global, DMG Fisik meningkat sebesar 15%.  \r\n
                ",
                'stats' => "168 ATK \r\n 11 CRT",
                'source' => "Foundry",
                'image' => "Spirit_Guns_-_Yae_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //260
            [
                'name' => "Thunder Kikaku",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Will-o'-the-Wisp
                [SP:12][CD: 25 detik] Menembakkan api hantu yang menempel pada target, menimbulkan 272 (640 pada 5★) Lightning DMG setiap 0,5 detik ke target dan musuh di sekitar selama 6,40 detik (8,00 detik pada 5★).  \r\n
                Futsuno Mitama
                Karakter memperoleh 16% (30% pada 5★) Total Pengganda DMG. Dalam Mode Burst, musuh yang terkena akan menjadi konduktif, menerima 36,0% (60,0% pada 5★) lebih banyak Lightning DMG selama 7 detik.  \r\n
                ",
                'stats' => "168 ATK \r\n 31 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Dorm Supplies",
                'image' => "Thunder_Kikaku_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //261
            [
                'name' => "Tranquil Arias",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Waning Moon
                Saat menyerang musuh yang terkena Time Slow, menimbulkan 600 (1.000 pada 5★) Physical DMG dan 900 (1.500 pada 5★) Ice DMG ke target dan musuh di sekitar. CD: 5.0 detik.  \r\n
                Night Bringer
                Pengguna menimbulkan 11% (15% pada 5★) bonus DMG Fisik dan Elemental. Saat masuk, pengguna menimbulkan 26% (50% pada 5★) bonus Total DMG selama 3,4 detik (5,0 detik pada 5★). Buff ini terpicu setiap 30 detik sekali selama battlesuit digunakan. Menggunakan Ultimate akan mereset CD dan segera mengaktifkan efeknya.  \r\n
                ",
                'stats' => "175 ATK \r\n 17 CRT",
                'source' => "Exchange House \r\n Limited/Rotating Supplies \r\n Dorm Supplies",
                'image' => "Tranquil_Arias_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //262
            [
                'name' => "Usurpers",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Infrasound
                [SP:15][CD: 15 detik] Menghasilkan gelombang infrasonik yang mengakibatkan 236% (380% pada 5★) ATK Physical DMG ke musuh di sekitar. Musuh yang terkena juga melemah, mengurangi ATK mereka sebesar 60% selama 4,4 detik (6,0 detik pada 5★).  \r\n
                Light and Order
                meningkatkan DMG Fisik Jarak Jauh sebesar 24% (40% pada 5★), namun, semakin jauh musuh, semakin sedikit DMG Fisik yang diterimanya. Kerusakan berkurang 10% per meter (hingga 80%). Karakter memperoleh 8,6% (15,0% pada 5★) Kecepatan Bergerak.  \r\n
                ",
                'stats' => "173 ATK \r\n 17 CRT",
                'source' => "Foundry",
                'image' => "Usurpers_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //263
            [
                'name' => "Ai-chan's Syringe",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Ai-chan's Grace
                [SP:7][CD: 15 detik] Kristal besar jatuh dari langit, menyerang musuh di depan dan memperlambat Kecepatan Gerak mereka sebesar 44% selama 4,1 detik (70% selama 7,0 detik pada 4★).  \r\n
                Ai-chan's Vision
                Pukulan mendapat 26 (43 jam 4★) Ice DMG.  \r\n
                ",
                'stats' => "119 ATK \r\n 5 CRT",
                'source' => "Events",
                'image' => "Ai-chan's_Syringe_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //264
            [
                'name' => "Alloy Hurricanes",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Alloy Spinning Windcut
                [SP:15][CD: 20 detik] Berputar beberapa kali untuk menebas musuh di sekitar untuk menimbulkan 66 (182 pada 4★) Ice DMG per pukulan. Diakhiri dengan ledakan eksplosif yang mengakibatkan 240% ATK Physical DMG.  \r\n
                ",
                'stats' => "90 ATK \r\n 14 CRT",
                'source' => "Story & Open World",
                'image' => "Alloy_Hurricanes_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //265
            [
                'name' => "Alloy Dominators",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Alloy Burning Punch
                [SP:19][CD: 10 detik] Lepaskan pukulan mengerikan dengan kekuatan mecha yang menyerang musuh di AOE berkali-kali. Setiap pukulan menimbulkan 40% ATK DMG Fisik ditambah 47 (97 pada 4★) DMG Api.  \r\n
                ",
                'stats' => "96 ATK \r\n 5 CRT",
                'source' => "Story & Open World",
                'image' => "Alloy_Dominators_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //266
            [
                'name' => "Positron Blasters",
                'type' => "Pistol",
                'rarity' => "5star",
                'detail' =>
                "Positronic Beam
                [SP:0][CD: 20 detik] Tiap pukulan menimbulkan 443% (600% pada 6★) ATK DMG Fisik dan menimbulkan 9 Trauma Paralyze. Dapat diisi 2 kali. Bonus perlengkapan Knight Moonbeam: Ketuk [ATK] tepat setelah mengaktifkan senjata untuk langsung melancarkan Serangan Kombo. Semua musuh yang terkena Sinar Positronik menderita 15,3% (20,0% pada 6★) Kerentanan Fisik selama 8 detik. Picu efek ini berulang kali untuk memperpanjang durasinya, namun efeknya tidak dapat ditumpuk.  \r\n
                Leaping Arc
                Menghasilkan Chain Lighting untuk setiap 20 pukulan yang dilakukan pengguna (CD: 1,5 dtk). Chain Lightning berturut-turut menyerang hingga 4 musuh dalam radius 6m, menimbulkan 650 Lightning DMG + 210,7% (250,0% pada 6★) ATK Physical DMG, dan menimbulkan 3 Paralyze Trauma pada musuh yang tidak lumpuh. Bonus perlengkapan Knight Moonbeam: Memulihkan 1 SP untuk setiap musuh (2 SP untuk setiap target yang lumpuh) yang terkena Chain Lightning.  \r\n
                Aspect of Avaddon
                Pengguna memperoleh 16% (20% pada 6★) Kecepatan Gerak dan 30,4% (50,0% pada 6★) Kerusakan Kritis untuk Serangan Kombo. Jika digunakan oleh Knight Moonbeam, Evasion-nya akan meningkatkan Physical DMG sebesar 12,1% (20,0% pada 6★) selama 12 detik (CD: 30 detik).  \r\n
                ",
                'stats' => "289 ATK \r\n 19 CRT",
                'source' => "Foundry",
                'image' => "Positron_Blasters__6_.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //267
            [
                'name' => "Domain of the Void",
                'type' => "Pistol",
                'rarity' => "5star",
                'detail' =>
                "Implosion Core
                [SP:0][CD: 20 detik] Memanggil Implosion Core untuk menghancurkan musuh, menimbulkan 150% ATK Physical DMG dan meledak kemudian, menimbulkan 219% (360% pada 6★) ATK Physical DMG. Saat digunakan oleh Herrscher of the Void, dia memulihkan 60 Herrscher Charge; Serangan Inti Implosion menjadi ATK Berat dan menimbulkan 24,3% (40,0% pada 6★) bonus kerusakan terhadap perisai. Implosion Core menghasilkan Space Core yang ledakannya memanfaatkan bonus keterampilan Herrscher of the Void dan menyebabkan 200% ATK bonus Physical DMG. Implosion Core juga dipanggil saat Herrscher of the Void memasuki Bentuk Herrscher (tidak menghasilkan Space Core saat terkena).  \r\n
                Void Sigil
                Wielder menimbulkan 12% (20% pada 6★) bonus DMG Fisik dan 18% (30% pada 6★) Crit DMG. Saat digunakan oleh Herrscher of the Void, ia memberikan 6% (10% pada 6★) bonus Physical DMG terhadap musuh yang diperlambat Waktunya.  \r\n
                Subspace Echo
                Saat dilengkapi dengan Herrscher of the Void, kerusakan terhadap perisai meningkat sebesar 13% (25% pada 6★) dan total kerusakan yang diterima berkurang sebesar 12% (20% pada 6★).  \r\n
                ",
                'stats' => "272 ATK \r\n 29 CRT",
                'source' => "Foundry",
                'image' => "Domain_of_the_Void__6_.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //268
            [
                'name' => "Domain of the Void",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Pumpkin Bomb
                [SP:15][CD: 25 detik] Membuat 3 bom labu di dekat pengguna. Tiap bom menimbulkan 166% (300% pada 5★) ATK Fire DMG.
                Di Halloween Maze: Dalam 5 detik, panggil 3 bom labu di dekat pengguna per detik. Tiap bom menimbulkan 277% (500% pada 5★) ATK Fire DMG ke sekitar  \r\n
                Prank
                Tanda bom labu mengenai musuh selama 7 detik. Menyerang musuh yang ditandai dengan bom labu memperoleh 5,5% (10,0% pada 5★) Tingkat Kritis dan DMG Kritis.
                Di Labirin Halloween: Serangan terhadap musuh yang ditandai dengan bom labu akan menambah 22,7% (45,0% pada 5★) Tingkat Kritis dan DMG Kritis.  \r\n
                ",
                'stats' => "101 ATK \r\n 4 CRT",
                'source' => "Events \r\n Limited/Rotating Supplies",
                'image' => "Hallowed_Saints_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //269
            [
                'name' => "Starry Woofers",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Soul Wave
                [SP:14][CD: 15 detik] Menyerang musuh di depan menimbulkan 121% (300% pada 5★) ATK Physical DMG. Selama 15 detik berikutnya, setiap Bintang Berkilau yang diambil oleh tim menambahkan 50% ATK peningkatan DMG Fisik ke keterampilan.
                [Panggung Konser] Saat mengambil Bintang Berkilau, semua karakter memperoleh 10% Kecepatan Gerak dan 10% DMG Fisik selama 5 detik. Efek tidak dapat ditumpuk.  \r\n
                Sparkling Star
                Saat karakter dikerahkan, 1 Bintang Berkilau muncul di dekatnya setiap 3 detik. Sparkling Star bertahan selama 4,5 detik. Saat mengambil Sparkling Star, menimbulkan 111% (200% pada 5★) ATK Physical DMG ke target acak di sekitar dan musuh di sekitarnya.  \r\n
                ",
                'stats' => "103 ATK \r\n 3 CRT",
                'source' => "Events",
                'image' => "Starry_Woofers_(5).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //270
            [
                'name' => "Xuanyuan Pistols",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Lightning Bullets
                [SP:18][CD: 12 detik] Menembakkan 6 peluru petir tembus secara berurutan, setiap peluru menimbulkan 121 (233 pada 4★) DMG Petir dan merusak target selama 4 detik, mengurangi DEF sebesar 60%.  \r\n
                ",
                'stats' => "103 ATK \r\n 3 CRT",
                'source' => "Events",
                'image' => "Xuanyuan_Pistols_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //271
            [
                'name' => "Artemis' Guardian",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Sickle's Ascent
                [SP:12][CD: 12 detik] Menjatuhkan musuh di dekat target di udara dan menerapkan Time Lock selama 3,08 d (3,30 d pada 4★).   \r\n
                ",
                'stats' => "117 ATK \r\n 21 CRT",
                'source' => "Events \r\n retirend Feature",
                'image' => "Artemis_Guardian_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //272
            [
                'name' => "Colt Peacemaker",
                'type' => "Pistol",
                'rarity' => "2star",
                'detail' =>
                "Stunning Bullets
                [SP:7][CD: 12 detik] Menimbulkan 5 Stun Trauma pada target dan musuh di dekatnya.   \r\n
                ",
                'stats' => "72 ATK \r\n 17 CRT",
                'source' => "Events \r\n retirend Feature",
                'image' => "Colt_Peacemaker_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //273
            [
                'name' => "Colt Peacemaker",
                'type' => "Pistol",
                'rarity' => "2star",
                'detail' =>
                "Stunning Bullets
                [SP:7][CD: 12 detik] Menimbulkan 5 Stun Trauma pada target dan musuh di dekatnya.   \r\n
                ",
                'stats' => "72 ATK \r\n 17 CRT",
                'source' => "Foundry",
                'image' => "Colt_Peacemaker_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //274
            [
                'name' => "Dark Suns",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Light and Order
                Meningkatkan DMG Fisik Jarak Jauh sebesar 19% (30% pada 4★), namun, semakin jauh musuh, semakin sedikit DMG Fisik yang diterimanya. Kerusakan berkurang 10% per meter (hingga 80%). Karakter memperoleh 6,3% (10,0% pada 4★) Kecepatan Bergerak.   \r\n
                ",
                'stats' => "123 ATK \r\n 10 CRT",
                'source' => "Foundry",
                'image' => "Dark_Suns_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //275
            [
                'name' => "Fire Spirit Type-I",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Spirit's Rage
                Serangan mempunyai peluang 7% (10% pada 4★) untuk menimbulkan 3 Ignite Trauma.   \r\n
                ",
                'stats' => "129 ATK \r\n 0 CRT",
                'source' => "Dorm Supply",
                'image' => "Fire_Spirit_Type-I_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //276
            [
                'name' => "Fire Spirit Type-II",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Burning Passion
                [SP: 18] [CD: 12 detik] Meluncurkan bahan peledak. Menimbulkan 250% ATK DMG Fisik ke musuh dalam radius ledakan dan menimbulkan 5 Ignite Trauma. Menyimpan 2 biaya.  \r\n
                ",
                'stats' => "129 ATK \r\n 0 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Fire_Spirit_Type-II_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //277
            [
                'name' => "Holy Guns - Kallen",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Holy Guns - Kallen
                Saat diserang, pengguna akan menyerap 25% (40% pada 4★) DMG yang masuk dan melepaskan Dampak Ilahi, menimbulkan 290% ATK DMG Fisik kepada musuh di sekitar dan memperlambat Kecepatan ATK mereka sebesar 75% selama 4,5 d. Sacred Guardian dapat dipicu setiap 15 detik sekali.  \r\n
                ",
                'stats' => "126 ATK \r\n 6 CRT",
                'source' => "Foundry",
                'image' => "Holy_Guns_-_Kallen_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //278
            [
                'name' => "Icarus Pinions",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Daedalus Burst
                Pukulan tepat sasaran berpeluang 3,8% (6,0% pada 4★) menyebabkan ledakan, menimbulkan 234 (480 pada 4★) Fire DMG ke target dan musuh di sekitarnya.  \r\n
                ",
                'stats' => "126 ATK \r\n 6 CRT",
                'source' => "Foundry",
                'image' => "Icarus_Pinions_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //279
            [
                'name' => "Mosin-Nagant",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Flame Aura
                [SP: 12][CD: 18 detik] Menghasilkan api di sekeliling pengguna, menimbulkan 133 (320 pada 4★) Fire DMG setiap 0,25 d selama 6 d ke musuh dalam jangkauan.  \r\n
                ",
                'stats' => "124 ATK \r\n 8 CRT",
                'source' => "Foundry",
                'image' => "Mosin-Nagant_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //280
            [
                'name' => "Proto Pistols",
                'type' => "Pistol",
                'rarity' => "1star",
                'detail' =>
                "Temporary Overclocking
                [SP: 8][CD: 15 detik] Memperkuat senjata sedemikian rupa sehingga serangan dasar (termasuk kombo dan serangan bermuatan) memperoleh 20% (32% pada 4★) DMG Fisik selama 5 d.  \r\n
                ",
                'stats' => "124 ATK \r\n 8 CRT",
                'source' => "Events",
                'image' => "Proto_Pistols_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //280
            [
                'name' => "Twin Phoenix",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Feng
                Serangan mempunyai peluang 17,7% (25,0% pada 4★) untuk menimbulkan 3 Ignite Trauma (CD: 10d). Saat Mei ada di dalam tim, nyalakan juga target dan musuh di sekitarnya.  \r\n
                ",
                'stats' => "108 ATK \r\n 18 CRT",
                'source' => "Events",
                'image' => "Twin_Phoenix_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //281
            [
                'name' => "USP EX",
                'type' => "Pistol",
                'rarity' => "2star",
                'detail' =>
                "
                ",
                'stats' => "76 ATK \r\n 8 CRT",
                'source' => "Events",
                'image' => "USP_EX_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //282
            [
                'name' => "Water Spirit Type-I",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Fairy's Tears
                Mendapat 31% (40% pada 4★) DMG Fisik ketika menyerang target yang terlempar ke udara.  \r\n
                ",
                'stats' => "76 ATK \r\n 8 CRT",
                'source' => "Events",
                'image' => "Water_Spirit_Type-I_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //283
            [
                'name' => "Water Spirit Type-II",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Frost Shock
                [SP: 2][CD: 13 detik] Menembakkan sebaran es dalam AoE berbentuk kipas untuk mengakibatkan 317% (500% pada 4★) ATK Ice DMG dan menimbulkan 5 Rime Trauma.  \r\n
                ",
                'stats' => "117 ATK \r\n 21 CRT",
                'source' => "Foundry \r\n Limited/Rotating Supplly",
                'image' => "Water_Spirit_Type-II_(4).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //284
            [
                'name' => "Colt Anaconda EX",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "Falling Frost
                [SP: 5] [CD: 10 detik] Musuh dalam AOE kecil mengalami 60% lebih lambat Kecepatan Gerak dan Kecepatan Serangan selama 3,36 detik (4,50 detik pada 3★).  \r\n
                ",
                'stats' => "81 ATK \r\n 0 CRT",
                'source' => "Foundry \r\n Limited/Rotating Supplly",
                'image' => "Colt_Anaconda_EX_(3).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //285
            [
                'name' => "USP45",
                'type' => "Pistol",
                'rarity' => "3star",
                'detail' =>
                "  \r\n
                ",
                'stats' => "42 ATK \r\n 4 CRT",
                'source' => "Foundry \r\n Limited/Rotating Supplly",
                'image' => "USP45_(2).png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //missing pic
            [
                'name' => "Echo of Paradise - Time Ruins",
                'type' => "Pistol",
                'rarity' => "5star",
                'detail' =>
                "Domain Break \r\n
                [SP: 0] [CD: 17 detik] Melepaskan gelombang suara untuk menghasilkan 7 × 110,7% (150,0% pada 6★) ATK dari Lightning DMG, memberikan 7 × 1 Paralyze Trauma, dan meningkatkan Lightning DMG tim sebesar 15% selama 20 detik (efek unik; memicunya lagi akan me-reset ulang durasinya).
                Bonus perlengkapan Golden Diva: Entri QTE secara otomatis mengeluarkan skill tersebut.
                Bonus perlengkapan Golden Diva: Melemparkannya akan mengaktifkan Performa, atau Fascination jika Performa sudah berlaku.\r\n
                Peerless Aria \r\n
                Total DMG semua anggota tim meningkat 11,1% (15,0% pada 6★) (tidak dapat ditumpuk). Setelah mengeluarkan Ultimate, Total DMG semua anggota tim meningkat sebesar 6,1% (10,0% pada 6★) selama 20 detik (tidak dapat ditumpuk). Memicunya lagi akan menyegarkan durasinya. \r\n
                Wielder menimbulkan 9,5% (15,0% pada 6★) bonus Total DMG. Banyak lonjakan yang dihasilkan 1 detik setelah medan gaya kristal tercipta. Paku tersebut menimbulkan 182,1% (300,0% pada 6★) ATK Physical DMG ke musuh dalam jangkauan.\r\n
                Floral Harmony\r\n
                Lightning DMG meningkat sebesar 12,1% (20,0% pada 6★).
                Bonus perlengkapan Golden Diva: Setelah semua anggota tim melemparkan senjata aktif, menembakkan catatan ke target atau musuh terdekat per 0,4 detik selama 4 detik. Musuh yang terkena tembakan tersebut menerima 60,7% (100,0% pada 6★) ATK Golden Diva dari Lightning DMG. CD: 18 detik. Efeknya dibatalkan dengan keluar.",
                'stats' => "299 ATK \r\n 17 CRT",
                'source' => "Foundry",
                'image' => "Echo of Paradise - Time Ruins.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Star Dance - Enlightenment",
                'type' => "Pistol",
                'rarity' => "5star",
                'detail' =>
                "Shining Upon Stars \r\n
                [SP: 0] [CD: 15 detik] Memutar pistol dengan cepat untuk menembakkan dua peluru melengkung yang bertabrakan di lokasi target, yang ledakannya menghasilkan 532,1% (650,0% pada 6★) ATK Ice DMG. Bonus perlengkapan Sugary Starburst: Menembakkan sebaran peluru es ke depan terlebih dahulu, menghasilkan 210,7% (250,0% pada 6★) ATK Ice DMG. Ketika senjata aktif memberikan DMG, menandai musuh dengan Sweet Sound selama 10 detik (dapat di-refresh) dan meningkatkan Total DMG tim sebesar 14,4% (16,0% pada 6★) selama 10 detik (eksklusif; dapat di-refresh). Bonus perlengkapan Sugary Starburst: Ultimate dan Charged ATK memberikan tambahan 80% ATK dari Ice DMG, sementara QTE memberikan tambahan 120% ATK dari Ice DMG.\r\n
                Traveling with Dream \r\n
                Meningkatkan Ice DMG tim sebesar 15,6% (18,0% pada 6★) (eksklusif) dan Ice DMG pengguna sebesar 21,1% (25,0% pada 6★). Bonus perlengkapan Sugary Starburst: Ketika ATK Basic atau Charged melukai musuh yang ditandai dengan Sweet Sound, memulihkan tambahan 4,2 (5,0 pada 6★) SP (CD: 5 detik). Ultimate memberikan 6 Rime Trauma untuk setiap serangan.\r\n
                Resonating with You\r\n
                Increases Total DMG by 12.1% (20.0% at 6★). When QTE, Combo ATK, Charged ATK, or Ultimate DMG is applied to enemies marked by Sweet Sound, creates an explosion that deals 60,7% (100.0% at 6★) ATK of Ice DMG to enemies in a radius of 5 meters and restores 30 HP to all team members. Has a CD of 5s for each DMG type. Sugary Starburst equip bonus: enemies marked by Sweet Sound take 6.1% (10.0% at 6★) more Ice DMG",
                'stats' => "303 ATK \r\n 14 CRT",
                'source' => "Foundry",
                'image' => "Star Dance - Enlightenment.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Key of Anonymity",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Hadean Initialized \r\n
                [SP: 5] [CD: 16 detik] Menembakkan tembakan dahsyat ke depan, menghasilkan 340,2% (500,0% pada 5★) ATK Fire DMG. Ketika Herrscher of Finality menggunakan senjata aktif, dia mendapatkan 3 poin Descent. Senjata aktif berbeda dalam jurus Time Flint dan jurus Moon Blade: Dalam posisi Time Flint, dia melempar pisau berputar ke depan dan menendangnya untuk menembus musuh di depan, menghasilkan 100% + 4 x 25% + 340,2% (500,0% pada 5★) ATK dari Fire DMG; Dalam posisi Moon Blade, dia menembakkan beberapa proyektil ke depan, menghasilkan 5% + 7 x 56,0% (80,0% pada 5★) ATK dari Fire DMG.
                Weapon Active membuat musuh yang terkena serangannya masuk ke dalam kondisi Withered, yang membuat mereka menerima 12.0% (20.0% pada 5★) ATK Fire DMG per detik selama 6 detik. Memicunya lagi akan menyegarkan durasinya.\r\n
                Evergreen \r\n
                Memberikan 8,8% (12,0% pada 5★) lebih banyak Total DMG kepada musuh dalam kondisi Layu. Bonus perlengkapan Herrscher of Finality: Combo ATK memberikan 11,6% (18,0% pada 5★) lebih banyak Fire DMG, dan mengatur ulang Weapon Active CD saat beralih antara jurus Time Flint dan Moon Blade. Beralih ke jurus Finale mengurangi CD Aktif Senjata sebesar 16,0% (20,0% pada 5★).
                ",
                'stats' => "188 ATK \r\n 8 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Key of Anonymity.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Star Dance",
                'type' => "Pistol",
                'rarity' => "4star",
                'detail' =>
                "Universal Symphony \r\n
                [SP: 0] [CD: 15 detik] Memutar pistol dengan cepat untuk menembakkan dua peluru melengkung yang bertabrakan di lokasi target, yang ledakannya menghasilkan 340,2% (500,0% pada 5★) ATK Ice DMG. Bonus perlengkapan Sugary Starburst: Menembakkan sebaran peluru es ke depan terlebih dahulu, menghasilkan 120,1% (200,0% pada 5★) ATK Ice DMG. Ketika senjata aktif memberikan DMG, menandai musuh dengan Sweet Sound selama 10 detik (dapat di-refresh) dan meningkatkan Total DMG tim sebesar 8,4% (14,0% pada 5★) selama 10 detik (eksklusif; dapat di-refresh). Bonus perlengkapan Sugary Starburst: Ultimate dan Charged ATK memberikan tambahan 50% ATK Ice DMG, sedangkan QTE memberikan tambahan 80% ATK Ice DMG.\r\n
                Shining Melody \r\n
                Meningkatkan Ice DMG tim sebesar 8,6% (15,0% pada 5★) (eksklusif) dan Ice DMG pengguna sebesar 12,0% (20,0% pada 5★). Bonus perlengkapan Sugary Starburst: Ketika ATK Basic atau Charged melukai musuh yang ditandai dengan Sweet Sound, memulihkan 3,2 (4,0 pada 5★) SP tambahan (CD: 5 detik). Ultimate memberikan 6 Rime Trauma untuk setiap serangan.
                ",
                'stats' => "191 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Star Dance.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Domain of Unity",
                'type' => "Katana",
                'rarity' => "5star",
                'detail' =>
                "Conceptual Metaphor \r\n
                [SP: 0] [CD: 10 detik] Menebas sekali, menghasilkan 1 x 282.1% (400.0% pada 5★) ATK Lightning DMG. Dapat memblokir serangan yang masuk selama animasi serangan diputar. Blok yang berhasil menghasilkan serangan petir AoE, menghasilkan 9 x 45% ATK Lightning DMG dan meningkatkan Lightning DMG karakter sebesar 23,7% (30,0% pada 5★) selama 8 detik. Memicunya lagi akan menyegarkan durasinya. Bonus perlengkapan Herrscher of Origin: Menebas dua kali, menghasilkan 250% ATK dari Lightning DMG. Dapat memblokir serangan yang masuk selama animasi serangan diputar. Blok yang berhasil memicu Time-frozen Domain yang menjeda semua penghitung waktu skill dan penghitung waktu panggung, dan terhubung ke Chain Slash yang menghasilkan 1 x 50% + 50% + 342,8% (500,0% pada 5★) ATK Lightning DMG. ATK ini terdaftar sebagai ATK Dasar, mengisi 1 tumpukan Twisted Origin untuk Wing Blades, dan, ketika tebasan terakhirnya mengenai, melepaskan tambahan Sin of Killing. Chain Slash memiliki CD sebesar 5 detik.\r\n
                Unthinkable \r\n
                Memberikan 23,7% (30,0% pada 5★) lebih banyak Lightning DMG. Memicu Domain yang Dibekukan Waktu memberikan 1 tumpukan Inner Foresight, hingga 3 tumpukan. Setiap tumpukan meningkatkan Total DMG dari Basic/Combo/Charged ATK sebesar 6,9% (10,0% pada 5★) selama 7 detik. Memicunya lagi akan menyegarkan durasinya. Saat senjata aktif memblokir dengan sukses, memulihkan 3 SP.
                Bonus perlengkapan Herrscher of Origin: Jika senjata aktif tidak memblokir serangan saat dilemparkan, ia akan memulihkan Mind Body Insight sepenuhnya saat berakhir. Selain itu, ketuk [ATK] saat menyarungkan pedang untuk menyambungkannya ke Combo ATK.\r\n
                Enlightened Origin\r\n
                ATK Dasar/Kombo/Charged memberikan 28,2% (40,0% pada 5★) lebih banyak DMG Petir. Bonus perlengkapan Herrscher of Origin: Musuh yang terkena ATK Kombo-nya akan menerima 9,5% (15,0% pada 5★) lebih banyak Elemental DMG selama 10 detik. Efek ini eksklusif dan memicunya kembali akan menyegarkan durasinya.
                ",
                'stats' => "191 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Domain of Unity.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Key of Limpidity",
                'type' => "Katana",
                'rarity' => "4star",
                'detail' =>
                "Sword Enlightenment \r\n
                [SP: 4] [CD: 12 detik] Menebas sekali, menghasilkan 1 x 120.1% (200.0% pada 5★) ATK Lightning DMG. Dapat memblokir serangan yang masuk selama animasi serangan diputar. Blok yang berhasil menghasilkan serangan petir AoE, menghasilkan 9 x 35% ATK Lightning DMG dan meningkatkan Lightning DMG karakter sebesar 12.0% (20.0% pada 5★) selama 8 detik. Memicunya lagi akan menyegarkan durasinya. Bonus perlengkapan Herrscher of Origin: Menebas dua kali, menghasilkan 250% ATK dari Lightning DMG. Dapat memblokir serangan yang masuk selama animasi serangan diputar. Blok yang berhasil memicu Time-frozen Domain yang menjeda semua penghitung waktu skill dan penghitung waktu panggung, dan terhubung ke Chain Slash yang menghasilkan 1 x 50% + 50% + 170.1% (250.0% pada 5★) ATK Lightning DMG. ATK ini terdaftar sebagai ATK Dasar, mengisi 1 tumpukan Twisted Origin untuk Wing Blades, dan, ketika tebasan terakhirnya mengenai, melepaskan tambahan Sin of Killing. Chain Slash memiliki CD sebesar 5 detik.\r\n
                True Self \r\n
                Memberikan 12.0% (20.0% pada 5★) lebih banyak Lightning DMG. Memicu Domain yang Dibekukan Waktu memberikan 1 tumpukan Inner Foresight, hingga 3 tumpukan. Setiap tumpukan meningkatkan Total DMG dari Basic/Combo/Charged ATK sebesar 3.0% (5.0% pada 5★) selama 7 detik. Memicunya lagi akan menyegarkan durasinya. Saat senjata aktif memblokir dengan sukses, memulihkan 2 SP.
                Bonus perlengkapan Herrscher of Origin: Jika senjata aktif tidak memblokir serangan saat dilemparkan, ia akan memulihkan Mind Body Insight sepenuhnya saat berakhir. Selain itu, ketuk [ATK] saat menyarungkan pedang untuk menyambungkannya ke Combo ATK.
                ",
                'stats' => "185 ATK \r\n 11 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Key of Limpidity.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'name' => "Ranger`s Sword",
            //     'type' => "Katana",
            //     'rarity' => "4star",
            //     'detail' =>
            //     "Emergency Defense \r\n
            //     [SP: 15] [CD: 25 detik] Saat diaktifkan, pengguna menjadi kebal terhadap serangan frontal selama 0,6 detik (1,0 detik pada 5★). Jika skill berhasil memblokir kerusakan, karakter akan menerima buff, mendapatkan 26% (50% pada 5★) DMG terhadap perisai selama 10 detik.\r\n
            //     Armor Erosion \r\n
            //     Setelah memecahkan perisai, serangan karakter mendapatkan 12% (20% pada 5★) Pengganda DMG Total selama 6.0 detik (10.0 detik pada 5★).
            //     Karakter [Ranger] membutuhkan 20% lebih sedikit Ice DMG. Jika rekan satu tim lainnya dilengkapi dengan senjata seri [Ranger], maka Pertahanan Darurat mendapatkan blok AOE yang lebih besar dan durasi 100% lebih lama.
            //     ",
            //     'stats' => "153 ATK \r\n 8 CRT",
            //     'source' => "Limited/Rotating Supplies",
            //     'image' => "Ranger`s Sword.png",
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            [
                'name' => "Domain of Ascension - Truth Continuity",
                'type' => "Canon",
                'rarity' => "5star",
                'detail' =>
                "Countable Infinity \r\n
                Senjata tembak cepat yang memberikan DMG terus menerus dalam garis lurus. Terlalu panas karena penggunaan yang lama. Musuh yang lebih dekat menerima lebih banyak DMG, dan mereka yang berada dalam jarak 10m menerima DMG paling banyak.
                Memberikan buff berikut berdasarkan jumlah penyalur Elemental DMG di tim:
                Untuk setiap penyalur DMG Es, si pengguna memberikan 8,9% (12,0% pada 6★) lebih banyak Total DMG.
                Untuk setiap dealer DMG Api, semua musuh menerima 5,4% (7,0% pada 6★) lebih banyak DMG Api.
                Untuk setiap penyalur DMG Petir, Senjata Aktif memulihkan SP tim sebesar 1,8 (3,0 pada 6★); CD: 8 detik.
                Buff di atas hanya dapat ditumpuk satu kali. Bonus perlengkapan Herrscher of Truth: Buff di atas dapat ditumpuk 3 kali (tidak dapat ditumpuk dengan buff yang sama senjata yang sama).\r\n
                Continuum Hypothesis \r\n
                [SP: 0] [CD: 18s] Menembakkan laser menusuk yang menghasilkan 16 x 34,3% (50,0% pada 6★) ATK Ice DMG ke musuh yang dilewatinya, dan diakhiri dengan ledakan yang menghasilkan 121,4% (200,0% pada 6★) ATK Ice DMG. Bonus perlengkapan Herrscher of Truth: Dalam bentuk Extremum, mengaktifkan senjata akan memicu Ultimate Evasion Skill dan membuka senjata mecha. Dalam bentuk Continuation, mengaktifkan senjata akan mengembalikan 50 Mech Propulsion. ATK dasar mengembalikan 5 Mech Propulsion pada saat terkena serangan.\r\n
                Beyond Infinity\r\n
                All team members' Elemental DMG increases by 6.1% (10.0% at 6★) (unique effect). After casting Ultimate, this bonus increases to 11.1% (15.0% at 6★) for 18s. Triggering it again refreshes its duration. After casting weapon active, the user's Ice DMG increases by 18.2% (30.0% at 6★) for 18s. Triggering it again refreshes its duration.
                ",
                'stats' => "301 ATK \r\n 10 CRT",
                'source' => "Foundry",
                'image' => "Domain of Ascension - Truth Continuity.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Star of Eden: World",
                'type' => "Canon",
                'rarity' => "5star",
                'detail' =>
                "Freedom Trail \r\n
                Meriam bermuatan, 1 tumpukan: Tembakan meriam tunggal. 2 tumpukan: Dua tembakan meriam yang lebih kuat. 3 tumpukan: Tiga tembakan meriam yang kuat. Karakter memberikan 29,3% (45,0% pada 6★) lebih banyak Total DMG kepada musuh yang dihadapi. Saat melemparkan skill senjata di luar Mode Sepeda, karakter memberikan 101,7% (200,0% pada 6★) lebih banyak DMG pada perisai selama 8 detik. Jika perisai dipatahkan oleh pengguna dalam waktu 10 detik, ia membekukan waktu pemulihan perisai selama 5 detik.
                Bonus perlengkapan Herrscher of Reason: ATK yang terisi dalam Mode Sepeda menghabiskan 480 Konstruktyom dan memberikan tambahan 3 × 321,4% (400,0% pada 6★) ATK Ice DMG. Saat Senjata Aktif mengenai musuh, senjata ini memberikan Analyzed pada musuh selama 10 detik. Selama Ultimate, semua penghitung waktu skill dan penghitung waktu panggung dijeda.\r\n
                Ulysses \r\n
                [SP: 0] [CD: 20-an] Gunakan Star of Eden untuk mengumpulkan dan memperlambat musuh di sekitarnya sebelum memicu ledakan yang menghasilkan 200% + 642,8% (800,0% pada 6★) ATK dari Ice DMG dan menambahkan 10 Rime Trauma pada musuh yang terkena serangan sambil memulihkan 15 SP.
                Bonus perlengkapan Herrscher of Reason: Saat tidak dalam Mode Sepeda, memasuki mode Herrscher akan menembakkan laser kuat tambahan yang menghasilkan 1.042,8% (1.200,0% pada 6★) ATK Ice DMG (dihitung sebagai ATK yang terisi). Saat menggunakan skill ini, karakter akan menjadi Invincible dan akan terhubung dengan Charged ATK setelahnya. Dalam Mode Sepeda, menahan [Senjata] sambil mengendalikan arahnya dapat membuat Hover Gun yang menembakkan serangan bergerak khusus. Setiap serangan memberikan 26,4% (50,0% pada 6★) ATK Ice DMG, melumpuhkan musuh yang terkena serangan selama 0,5 detik dan memulihkan 110 Konstruktyom. CD keterampilan senjata Mode Sepeda: 0,5 detik.\r\n
                Danny Boy\r\n
                Karakter memberikan 21,4% (45,0% pada 6★) lebih banyak Ice DMG. Total DMG dari ATK yang terisi meningkat 13,2% (25,0% pada 6★).
                Bonus perlengkapan Herrscher of Reason: Hover Gun memberikan 26,4% (50,0% pada 6★) lebih banyak Ice DMG kepada musuh yang dianalisa.\r\n
                Key of Devouring\r\n
                Dalam raid co-op, Ice DMG karakter meningkat sebesar 16,0% (25,0% pada 5★).
                ",
                'stats' => "290 ATK \r\n 24 CRT",
                'source' => "Foundry",
                'image' => "Star of Eden World.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Key of Ascension",
                'type' => "Canon",
                'rarity' => "4star",
                'detail' =>
                "ε-δ \r\n
                Senjata tembak cepat yang memberikan DMG terus menerus dalam garis lurus. Terlalu panas karena penggunaan yang lama. Musuh yang lebih dekat menerima lebih banyak DMG, dan mereka yang berada dalam jarak 10m menerima DMG paling banyak.
                Memberikan buff berikut berdasarkan jumlah penyalur Elemental DMG di tim:
                Untuk setiap penyalur DMG Es, si pengguna memberikan 4,8% (8,0% pada 5★) lebih banyak Total DMG.
                Untuk setiap dealer DMG Api, semua musuh menerima 3,4% (5,0% pada 5★) lebih banyak DMG Api.
                Untuk setiap penyalur DMG Petir, Senjata Aktif memulihkan SP tim sebesar 0,4 (1,5 pada 5★); CD: 8 detik.
                Buff di atas hanya dapat ditumpuk satu kali. Bonus perlengkapan Herrscher of Truth: Buff di atas dapat ditumpuk 3 kali (tidak dapat ditumpuk dengan senjata yang sama).\r\n
                Infinite Division \r\n
                [SP: 0] [CD: 18s] Menembakkan laser menusuk yang menghasilkan 16 × 18.0% (30.0% pada 5★) ATK Ice DMG ke musuh yang dilewatinya, dan diakhiri dengan ledakan yang menghasilkan 60.1% (100.0% pada 5★) ATK Ice DMG. Bonus perlengkapan Herrscher of Truth: Dalam bentuk Extremum, mengaktifkan senjata akan memicu Ultimate Evasion Skill dan membuka senjata mecha. Dalam bentuk Continuation, mengaktifkan senjata akan mengembalikan 50 Mech Propulsion. ATK dasar mengembalikan 5 Mech Propulsion pada saat terkena serangan.
                ",
                'stats' => "185 ATK \r\n 11 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Key of Ascension.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Star of Eden: Anti-Entropy",
                'type' => "Canon",
                'rarity' => "4star",
                'detail' =>
                "To a Skylark \r\n
                Meriam bermuatan, 1 tumpukan: Tembakan meriam tunggal. 2 tumpukan: Dua tembakan meriam yang lebih kuat. 3 tumpukan: Tiga tembakan meriam yang kuat. Karakter memberikan 27,0% (35,0% pada 5★) lebih banyak Total DMG kepada musuh yang dihadapi. Saat melemparkan skill senjata di luar Mode Sepeda, karakter memberikan 100,1% (200,0% pada 5★) lebih banyak DMG pada perisai selama 8 detik. Jika perisai dipatahkan oleh pengguna dalam waktu 10 detik, ia membekukan waktu pemulihan perisai selama 5 detik.
                Bonus perlengkapan Herrscher of Reason: ATK yang terisi dalam Mode Sepeda menghabiskan 480 Konstruktyom dan memberikan tambahan 3 × 64,2% (200,0% pada 5★) ATK Ice DMG. Saat Senjata Aktif mengenai musuh, senjata ini memberikan Analyzed pada musuh selama 10 detik. Selama Ultimate, semua penghitung waktu skill dan penghitung waktu panggung dijeda.\r\n
                Ode to the West Wind \r\n
                [SP: 0] [CD: 20-an] Gunakan Star of Eden untuk mengumpulkan dan memperlambat musuh di sekitarnya sebelum memicu ledakan yang menghasilkan 200% + 180,5% (500,0% pada 5★) ATK dari Ice DMG dan menambahkan 10 Rime Trauma kepada musuh yang terkena sambil memulihkan 15 SP.
                Bonus perlengkapan Herrscher of Reason: Saat tidak dalam Mode Sepeda, memasuki mode Herrscher akan menembakkan laser kuat tambahan yang menghasilkan 480,5% (800,0% pada 5★) ATK Ice DMG (dihitung sebagai ATK yang terisi). Saat menggunakan skill ini, karakter akan menjadi Invincible dan akan terhubung dengan Charged ATK setelahnya. Dalam Mode Sepeda, menahan [Senjata] sambil mengendalikan arahnya dapat membuat Hover Gun yang menembakkan serangan bergerak khusus. Setiap serangan memberikan 32.0% (40.0% pada 5★) ATK Ice DMG, melumpuhkan musuh yang terkena serangan selama 0.5 detik dan memulihkan 110 Konstruktyom. CD keterampilan senjata Mode Sepeda: 0,5 detik.\r\n
                Key of Devouring\r\n
                Dalam raid co-op, Ice DMG karakter meningkat sebesar 16,0% (25,0% pada 5★).
                ",
                'stats' => "191 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Star of Eden Anti-Entropy.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Anchor of the Voyage: Interstellar",
                'type' => "Crosses",
                'rarity' => "5star",
                'detail' =>
                "Cosmic Dimension \r\n
                [SP: 0] [CD: 17s] Menyebarkan Salib (entitas yang dipanggil) dan menghasilkan satelit yang menyapu seluruh bidang, memberikan 300% ATK DMG Fisik kepada musuh dalam jangkauan. Kemudian, berikan 100% ATK DMG Fisik setiap 2 detik selama 16 detik, di mana Bleed DMG yang diberikan oleh karakter tersebut meningkat sebesar 21,1% (25,0% pada 6★). Bonus perlengkapan Cosmic Expression: Meteor memberikan tambahan 260,7% (300,0% pada 6★) ATK Physical DMG. Mendaratkan serangan akan memulihkan HP-nya sebesar 300.\r\n
                Sparkling Defense \r\n
                The team deals 11.1% (15.0% at 6★) more Bleed DMG (exclusive). Cosmic Expression equip bonus: She deals 26.1% (30.0% at 6★) more Physical DMG, and the team's Physical DMG is increased by 27.1% (35.0% at 6★) (exclusive).\r\n
                Galactic Beacon\r\n
                Tim memberikan 9,1% (15,0% pada 6★) lebih banyak Total DMG (eksklusif). Bonus perlengkapan Cosmic Expression: Saat memicu Skill Senjata Khusus, kumpulkan musuh di sekitar suar dan berikan 30,4% (50,0% pada 6★) ATK DMG Fisik (DMG ini dianggap sebagai DMG berdarah yang diberikan oleh Cosmic Expression).
                ",
                'stats' => "301 ATK \r\n 16 CRT",
                'source' => "Foundry",
                'image' => "Anchor of the Voyage Interstellar.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Bloodied Casket - Tough Love",
                'type' => "Crosses",
                'rarity' => "5star",
                'detail' =>
                "Summer Night Promise \r\n
                [SP: 0] [CD: 17 detik] Menyebarkan salib (entitas yang dipanggil): Menghasilkan Blood Moon Horizon selama 17 detik (eksklusif). Lightning DMG yang diberikan oleh karakter di dalam Blood Moon Horizon meningkat sebesar 46,1% (50,0% pada 6★). Karakter dalam Blood Moon Horizon yang mengeluarkan Bleed DMG mendapatkan Bite. Setiap tumpukan Bite meningkatkan Total DMG dari Bleed DMG sebesar 2,0%. Bite bertahan selama 10 detik, dapat ditumpuk hingga 5 [sic] (diharapkan: 10) kali dan memiliki interval pemicuan 0,1 detik. Memicunya lagi akan mengatur ulang durasinya. Semua Bites akan dihapus ketika tanda silang menghilang. Sumpah Bulan: Bonus perlengkapan Crimson Love: DMG, CD, biaya SP, dan statistik lainnya ditentukan oleh karakter. Saat Sumpah Bulan: Crimson Love memasuki mode Frenzy, entitas pemanggil kelelawar akan muncul dan mengikuti karakter di lapangan, memicu semua efek Blood Moon Horizon. Ini berlangsung selama 17 detik.\r\n
                Castle Under the Blood Moon \r\n
                Meningkatkan Lightning DMG karakter sebesar 30,0% dan meningkatkan Bleed DMG yang diambil oleh musuh di Blood Moon Horizon sebesar 10,0%. Ketika Lunar Vow: Crimson Love ada di dalam tim, musuh di Blood Moon Horizon mendapatkan 1 Bleed Trauma per detik. Sumpah Bulan: Bonus perlengkapan Crimson Love: Pengali dari serangan terakhir dari Ultimate-nya meningkat sebesar 300,0%.\r\n
                Edge of the World Beyond\r\n
                Total DMG dari Combo ATK meningkat sebesar 12,1% (20,0% pada 6★). Sumpah Bulan: Bonus perlengkapan Crimson Love: Total DMG dari Combo ATK meningkat sebesar 18,2% (30,0% pada 6★).
                ",
                'stats' => "304 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Bloodied Casket - Tough Love.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "11th Sacred Relic",
                'type' => "Crosses",
                'rarity' => "4star",
                'detail' =>
                "Holy Blades \r\n
                [SP: 18] [CD: 15 detik] Menyebarkan senjata. Sekutu di sekitar mendapatkan 6.0% (10.0% pada 5★) Crit Rate selama 10 detik. Menjatuhkan hujan pedang pada musuh di dalam AOE setiap 1 detik. Hujan pedang memberikan 5 x 34.0% (50.0% pada 5★) ATK DMG Fisik kepada musuh di dalam AOE kecil.\r\n
                Divine Heal \r\n
                Ketika karakter menyerang musuh yang terganggu, ada peluang 24,0% (40,0% pada 5★) untuk menyembuhkan tim sebesar 39 (74 pada 5★) HP. CD: 3 detik.",
                'stats' => "174 ATK \r\n 26 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "11th Sacred Relic.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Anchor of the Voyage",
                'type' => "Crosses",
                'rarity' => "4star",
                'detail' =>
                "Satellite: Render \r\n
                [SP: 0] [CD: 17s] Menyebarkan Cross (entitas yang dipanggil) dan menghasilkan satelit yang menyapu seluruh bidang, memberikan 300% ATK DMG Fisik kepada musuh dalam jangkauan. Kemudian, berikan 100% ATK DMG Fisik setiap 2 detik selama 16 detik, di mana Bleed DMG yang diberikan oleh karakter tersebut meningkat sebesar (20% pada 5★). Bonus perlengkapan Cosmic Expression: Meteor memberikan tambahan (250% pada 5★) ATK Physical DMG.\r\n
                Module: Heavy Color \r\n
                Tim memberikan (10% pada 5★) lebih banyak Bleed DMG (eksklusif). Bonus perlengkapan Cosmic Expression: Dia memberikan (25% pada 5★) lebih banyak DMG Fisik, dan DMG Fisik tim meningkat sebesar (25% pada 5★) (eksklusif).",
                'stats' => "298 ATK \r\n 13 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Anchor of the Voyage.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blood Embrace",
                'type' => "Crosses",
                'rarity' => "4star",
                'detail' =>
                "Slice and Dice \r\n
                [SP: 12] [CD: 10 detik] Menyebarkan senjata, menjatuhkan musuh di dalam AOE di udara dan menebas mereka setiap 0,25 detik selama 2 detik berikutnya. Musuh menerima 148,1% (200,0% pada 5★) ATK DMG Fisik dari udara dan dari setiap tebasan. Tebasan membuat musuh berdarah, menghasilkan 357 (760 pada 5★) DMG Fisik setiap 0,5 detik selama 5 detik.\r\n
                Blood Craze \r\n
                Serangan karakter mendapatkan 22,4% (40,0% pada 5★) DMG Fisik untuk musuh yang berdarah.",
                'stats' => "168 ATK \r\n 30 CRT",
                'source' => "Limited/Rotating Supplies
                Limited/Rotating Supplies",
                'image' => "Blood Embrace.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Bloodied Casket",
                'type' => "Crosses",
                'rarity' => "4star",
                'detail' =>
                "Midnight Guest \r\n
                [SP: 0] [CD: 17 detik] Menyebarkan salib (entitas yang dipanggil): Menghasilkan Blood Moon Horizon selama 17 detik (eksklusif). Lightning DMG yang diberikan oleh karakter di dalam Blood Moon Horizon meningkat sebesar 24,0% (40,0% pada 6★). Karakter dalam Blood Moon Horizon yang memberikan Bleed DMG mendapatkan Bite. Setiap tumpukan Bite meningkatkan Total DMG dari Bleed DMG sebesar 1,2% (2,0% pada 6★). Bite bertahan selama 10 detik, dapat ditumpuk hingga 10 kali dan memiliki interval pemicuan 0,1 detik. Memicunya lagi akan mengatur ulang durasinya. Semua Gigitan akan hilang saat tanda silang menghilang. Sumpah Bulan: Bonus perlengkapan Crimson Love: DMG, CD, biaya SP, dan statistik lainnya ditentukan oleh karakter. Saat Sumpah Bulan: Crimson Love memasuki mode Frenzy, entitas pemanggil kelelawar akan muncul dan mengikuti karakter di lapangan, memicu semua efek Blood Moon Horizon. Ini berlangsung selama 17 detik.\r\n
                Demonic Fang \r\n
                Meningkatkan Lightning DMG karakter sebesar 18,0% (30,0% pada 6★) dan meningkatkan Bleed DMG yang diambil oleh musuh di Blood Moon Horizon sebesar 6,0% (10,0% pada 6★). Ketika Lunar Vow: Crimson Love ada di tim, musuh di Blood Moon Horizon mendapatkan 1 Bleed Trauma per detik. Sumpah Bulan: Bonus perlengkapan Crimson Love: Pengali dari serangan terakhir dari Ultimate-nya meningkat sebesar 180,2% (300,0% pada 6★).",
                'stats' => "192 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Bloodied Casket.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Silver Reaper",
                'type' => "Crosses",
                'rarity' => "4star",
                'detail' =>
                "Severing Slash \r\n
                [SP: 15] [CD: 14s] Menyebarkan senjata untuk menebas musuh secara otomatis dalam jangkauan 3 kali per detik selama 6 detik berikutnya, dengan setiap pukulan menghasilkan 540 (900 pada 5★) DMG Fisik dan melemahkan musuh, mengurangi ATK mereka sebesar 34% (50% pada 5★) selama 5 detik.\r\n
                Deathly Scythe \r\n
                Serangan terhadap musuh yang lemah akan mendapatkan 21% (35% pada 5★) Pengganda DMG Total.",
                'stats' => "170 ATK \r\n 18 CRT",
                'source' => "Founndry",
                'image' => "Silver Reaper.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Alloy Betrayer",
                'type' => "Great Sword",
                'rarity' => "3star",
                'detail' =>
                "Alloy Treason \r\n
                [SP: 12] [CD: 10 detik] Meluncurkan 6 rudal pelacak secara berurutan, masing-masing memberikan 103% (199% pada 4★) ATK DMG Fisik ke target dan musuh di dekatnya dalam AOE kecil.",
                'stats' => "96 ATK \r\n 5 CRT",
                'source' => "Story & Open World",
                'image' => "Alloy Betrayer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Incredibly Infinite Intimidator",
                'type' => "Gauntlet",
                'rarity' => "5star",
                'detail' =>
                "Unparalleled \r\n
                [SP: 0] [CD: 15 detik] Melempar batu bata ke arah musuh, memberikan 221,4% (300,0% pada 6★) ATK AOE Physical DMG. Saat digunakan oleh Herrscher of Sentience, serangan juga akan memulihkan 20 SP tambahan dan memberikan 0,1 detik Coma dan 6 Stun Trauma, dan saat berada dalam mode burst akan memberikan jurus-jurus berikut:
                ATK dasar: Herrscher of Sentience mengintegrasikan berbagai senjata dan mengetuk [ATK] berulang kali hingga 10 kali akan menembakkan senjata-senjata tersebut, menghasilkan 4480% ATK dari Physical DMG. Namun, menahan [ATK] tidak akan memicu Combo ATK Slash.
                Serangan Khusus: Tekan [ULT] untuk mendapatkan serangan spesial Divine Prowess. Menghasilkan 350% + 542,8% (700,0% pada 6★) ATK dari Physical DMG, memberikan 0,5 detik Koma dan 6 Stun Trauma pada musuh yang terkena serangan. CD: 8 detik. Menggunakan skill ini akan meninggalkan celah yang akan tetap ada hingga mode Herrscher berakhir dan musuh yang berada di celah tersebut tidak dapat dirobohkan.
                Skill Finisher: Ketuk [Senjata] untuk memicu Finisher Brick Bully. Menghasilkan 846,3% (1.200,0% pada 6★) + 100% ATK DMG Fisik (Crit rate untuk ATK ini meningkat 100%) dalam jangkauan yang luas dan memberikan 6 Stun Trauma kepada musuh yang terkena. Serangan ini dianggap sebagai Ultimate, di mana karakter memicu Time-frozen Domain, menghentikan semua timer skill dan stage. Setelah dilepaskan, mode burst akan berakhir dan Ultimate akan memasuki CD 6 detik.\r\n
                One as an Army \r\n
                Selama mode burst, DMG Fisik karakter meningkat sebesar 11,1% (15,0% pada 6★). Ketika digunakan oleh Herrscher of Sentience, musuh yang telah memiliki Impair yang ditimbulkan oleh karakter lain akan terkena 13,3% (18,0% pada 6★) lebih banyak DMG Fisik daripada Impair yang terkait dengan area Spiritual Vanquish. Dalam kasus lain, Impair akan ditimbulkan seperti biasa. Ketika The Best of Both Worlds dipicu, durasinya akan diperpanjang hingga 16 detik, sementara selama mode burst, semua efek Against All Authority akan terpicu. Peningkatan Crit DMG untuk pemain dari Innate Invulnerability akan bertahan selama ronde berlangsung.\r\n
                High and Mighty\r\n
                Crit Rate meningkat sebesar 6,1% (10,0% pada 6★). Menggunakan skill Active senjata ini untuk mengenai musuh ketika Herrscher of Sentience tidak dalam mode burst akan memberikan 10 tumpukan [Regal]. Saat karakter berada di lapangan, mengenai musuh dengan Ultimate atau mode burst ATK akan menghabiskan satu tumpukan [Regal] dan memulihkan 1,7 (2,5 pada 6★) SP dan 100 HP, serta meningkatkan Total DMG dari Skill Senjata berikutnya sebesar 7,1% (11,0% pada 6★). Tumpukan hingga 10 kali. Interval Pemicu: 0,5 detik. Semua tumpukan [Regal] akan hilang saat mode burst berakhir.
                Key of Sentience\r\n
                Dalam serangan co-op, DMG Fisik karakter meningkat 16,0% (25,0% pada 6★).
                ",
                'stats' => "301 ATK \r\n 16 CRT",
                'source' => "Foundry",
                'image' => "Incredibly Infinite Intimidator.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Nocturnal Stealth - Beam",
                'type' => "Gauntlet",
                'rarity' => "5star",
                'detail' =>
                "Hidden Nightrunner \r\n
                [SP: 0] [CD: 18s] Gunakan Wave Splitting Edge ke arah target, menghasilkan 485,6% (800,0% pada 6★) ATK dari Ice DMG dan membentuk barisan Torrent yang berlangsung selama 25 detik. Memicunya lagi akan mengatur ulang durasinya. Saat Torrent berada di lapangan, ia menghasilkan gelombang setiap kali target terkena Ice DMG, menghasilkan 60,7% (100,0% pada 6★) ATK Ice DMG, hingga 5 gelombang. CD: 2 detik. Ketika Jade Knight menggunakan skill ini di Sword Array, dia segera menghubungkannya dengan Back Wind Slash.\r\n
                Sinking Moon \r\n
                Setelah menggunakan skill senjata, tim memberikan 20,0% lebih banyak Ice DMG selama 22 detik (tidak dapat ditumpuk). Memicunya lagi akan mengatur ulang durasinya. Bonus perlengkapan Jade Knight: Memulihkan 12,0 SP setiap kali Torrent menghasilkan gelombang. CD: 2 detik.\r\n
                High and Mighty\r\n
                Crit Rate meningkat sebesar 6,1% (10,0% pada 6★). Menggunakan skill Active senjata ini untuk mengenai musuh ketika Herrscher of Sentience tidak dalam mode burst akan memberikan 10 tumpukan [Regal]. Saat karakter berada di lapangan, mengenai musuh dengan Ultimate atau mode burst ATK akan menghabiskan satu tumpukan [Regal] dan memulihkan 1,7 (2,5 pada 6★) SP dan 100 HP, serta meningkatkan Total DMG dari Skill Senjata berikutnya sebesar 7,1% (11,0% pada 6★). Tumpukan hingga 10 kali. Interval Pemicu: 0,5 detik. Semua tumpukan [Regal] akan hilang saat mode burst berakhir.\r\n
                Quiet Shade\r\n
                Ice DMG yang diberikan oleh Combo ATK meningkat sebesar 12,1% (20,0% pada 6★). Total DMG yang diberikan oleh tim meningkat sebesar 6,1% (10,0% pada 6★) (tidak dapat ditumpuk).
                ",
                'stats' => "298 ATK \r\n 18 CRT",
                'source' => "Foundry",
                'image' => "Nocturnal Stealth - Beam.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Torch of Eons - Skyfire",
                'type' => "Gauntlet",
                'rarity' => "5star",
                'detail' =>
                "Comforting Warmth All Around \r\n
                [SP: 0] [CD: 17 detik] Menghasilkan Dimensi Saku yang bertahan selama 5 detik. Memberikan 23,7% (30,0% pada 6★) lebih banyak Total DMG saat berada di dalam Dimensi Saku. Efek ini bertahan selama 10 detik bahkan setelah keluar dari Pocket Dimension. Memicunya lagi akan mengatur ulang durasinya. Ketika dilengkapi dengan Fenghuang of Vicissitude, QTE dan pergantian jurus dapat memicu Dimensi Saku. Dimensi Saku memberikan Feather Burning Mark yang sesuai pada musuh di dalamnya berdasarkan jurus yang sedang digunakan dan menghilangkan Feather Burning Mark dari jurus lainnya. Ketika musuh yang ditandai dengan Feather Burning Mark terkena Combo ATK dari kuda-kuda yang sesuai, Tanda tersebut akan meledak dan menghasilkan 190.0% (300.0% pada 6★) ATK Fire DMG. Tanda Pembakaran Bulu bertahan selama 5 detik. Dimensi Saku dan semua Tanda akan hilang saat keluar.\r\n
                Eternal Blaze\r\n
                Fire DMG meningkat sebesar 22,1% (30,0% pada 6★). Ketika HP maksimal melebihi 7000, Total DMG meningkat sebesar 16,1% (20,0% pada 6★).\r\n
                Millennial Peace\r\n
                Memulihkan 500 HP sekaligus membuat semua musuh menerima 13,0% (24,0% pada 6★) lebih banyak Fire DMG dari pengguna selama 15 detik. Memicunya lagi akan mengatur ulang durasinya. Saat berada di lapangan, kehilangan 100 HP sekaligus akan memulihkan 11 (15 pada 6★) SP. CD: 15 detik.
                ",
                'stats' => "306 ATK \r\n 12 CRT",
                'source' => "Foundry",
                'image' => "Torch of Eons - Skyfire.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Final Form - Destiny",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Astral Flow \r\n
                [SP: 0] [CD: 18s] Semua anggota tim memberikan 23.0% (35.0% pada 5★) lebih banyak DMG Fisik kepada musuh tipe IMG selama 15 detik (efek unik).\r\n
                Karmic Loop \r\n
                Dalam 5 detik setelah mengeluarkan Ultimate, semua Nihilus Shell musuh yang berdarah menerima 18.0% (30.0% pada 5★) lebih banyak DMG Fisik (efek unik). CD: 15 detik.",
                'stats' => "187 ATK \r\n 10 CRT",
                'source' => "Events",
                'image' => "Final Form - Destiny.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Infinite Intimidator",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Surprise Strike \r\n
                [SP: 0] [CD: 15s] Throws a brick at enemies, dealing 160.1% (200.0% at 6★) ATK of AOE Physical DMG. When used by Herrscher of Sentience, a hit will also restore additional 20 SP and inflict 0.1s Coma and 6 Stun Trauma, and when in burst mode grants the following moves:
                Basic ATK: Herrscher of Sentience integrates various weapons and repeatedly tapping [ATK] up to 10 times will fire them, dealing 4480% ATK of Physical DMG. However, holding [ATK] will not trigger the Combo ATK Slashes.
                Special Attack: Tap [ULT] for the Special Attack Divine Prowess. Deals 350% + 340.2% (500.0% at 6★) ATK of Physical DMG, inflicts 0.5s Coma and 6 Stun Trauma to struck enemies. CD: 8s. Using this skill leaves a fissure that will remain until Herrscher mode ends and enemies on the fissure cannot be knocked back.
                Finisher Skill: Tap [Weapon] to trigger Finisher Brick Bully. Deals 550.3% (750.0% at 6★) + 100% ATK of Physical DMG (Crit rate for this ATK is increased by 100%) in a large range and inflicts 6 Stun Trauma to enemies struck. This attack is regarded as an Ultimate, during which the character triggers Time-frozen Domain, stopping all skill and stage timers. Once released, burst mode will end and the Ultimate will enter a 6s CD.\r\n
                Blades, At My Service \r\n
                Selama mode burst, DMG Fisik karakter meningkat sebesar 7,6% (10,0% pada 6★). Ketika digunakan oleh Herrscher of Sentience, musuh yang telah memiliki Impair yang ditimbulkan oleh karakter lain akan terkena 7,2% (12,0% pada 6★) lebih banyak DMG Fisik daripada Impair yang terkait dengan area Spiritual Vanquish. Dalam kasus lain, Impair akan ditimbulkan seperti biasa. Ketika The Best of Both Worlds dipicu, durasinya akan diperpanjang hingga 16 detik, sementara selama mode burst, semua efek Against All Authority akan terpicu. Peningkatan Crit DMG untuk pemain dari Innate Invulnerability akan bertahan selama ronde berlangsung.\r\n
                Key of Sentience\r\n
                Dalam serangan co-op, DMG Fisik karakter meningkat 16,0% (25,0% pada 6★).",
                'stats' => "298 ATK \r\n 13 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Infinite Intimidator.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Pandora's Box 18th",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "Challenged Hope \r\n
                [SP: 0] [CD: 18 detik] Tinju mendapatkan status Anticipant selama 15 detik. Selama itu, dia memberikan 10,0% (20,0% pada 5★) lebih banyak Total DMG dan memiliki Ignore Interrupt yang lebih tinggi. Saat Ultimate mengenai, dia memberikan 11,0% (15,0% pada 5★) lebih banyak DMG Fisik hingga status Anticipant berakhir (memicunya lagi akan mengatur ulang durasinya). Terminal Aide 0017 memberikan bonus perlengkapan: Regen: Superpartner memberikan tambahan 240,2% (400,0% pada 5★) ATK DMG Fisik. Menggunakan Existence: Konfigurasi Manifold dan Regen: Superpartner memicu senjata aktif dan memulihkan 1000 Dense Neutron Shield.\r\n
                Ambiguous Future \r\n
                DMG Fisik Tim meningkat sebesar 10,8% (18,0% pada 5★) (eksklusif). Bonus perlengkapan Terminal Aide 0017: Dalam kondisi Anticipant, ketika Regen: Superpartner mengenai, target menerima 7,2% (12,0% pada 5★) lebih banyak DMG Fisik selama 20 detik (memicunya lagi akan me-reset ulang durasinya).",
                'stats' => "187 ATK \r\n 10 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Pandora's Box 18th.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Torch of Eons",
                'type' => "Gauntlet",
                'rarity' => "4star",
                'detail' =>
                "World Like a Furnace \r\n
                [SP: 0] [CD: 17 detik] Menghasilkan Dimensi Saku yang bertahan selama 5 detik. Memberikan 12,0% (20,0% pada 5★) lebih banyak Total DMG saat berada di dalam Dimensi Saku. Efek ini bertahan selama 10 detik bahkan setelah keluar dari Dimensi Saku. Memicunya lagi akan mengatur ulang durasinya. Ketika dilengkapi dengan Fenghuang of Vicissitude, QTE dan pergantian jurus dapat memicu Dimensi Saku. Dimensi Saku memberikan Feather Burning Mark yang sesuai pada musuh di dalamnya berdasarkan jurus yang sedang digunakan dan menghilangkan Feather Burning Mark dari jurus lainnya. Ketika musuh yang ditandai dengan Feather Burning Mark terkena Combo ATK dari kuda-kuda yang sesuai, Tanda tersebut akan meledak dan menghasilkan 110,1% (150,0% pada 5★) ATK Fire DMG. Tanda Pembakaran Bulu bertahan selama 5 detik. Dimensi Saku dan semua Tanda akan hilang saat keluar.\r\n
                Heart Like a Porcelain \r\n
                Fire DMG meningkat sebesar 7,6% (18,0% pada 5★). Ketika HP maksimal melebihi 7.000, Total DMG meningkat sebesar 10,8% (14,0% pada 5★).",
                'stats' => "192 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Torch of Eons.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Life Harvester's Path - Shared Destiny",
                'type' => "Scythes",
                'rarity' => "5star",
                'detail' =>
                "Ballad of Life \r\n
                [SP: 0] [CD: 15 detik] Melakukan tebasan, menghasilkan 842,8% (1.000,0% pada 6★) ATK DMG Fisik. Bonus perlengkapan Herrscher of Rebirth: Biaya DMG, CD, dan SP ditentukan oleh pengguna. Semua anggota tim memulihkan 10,0 SP ketika mereka keluar dalam bentuk Herrscher (CD: 15,0 detik; karakter mendingin secara terpisah).\r\n
                Unwithering Bud\r\n
                Semua anggota tim memberikan 6,1% (10,0% pada 6★) lebih banyak DMG Fisik (eksklusif) dan pengguna senjata memberikan 13,7% (20,0% pada 6★) lebih banyak DMG Fisik. Dalam bentuk Herrscher, semua musuh menerima 13,7% (20,0% pada 6★) lebih banyak DMG Fisik dari pengguna senjata.\r\n
                Vine of Rebirth\r\n
                Memberikan 9,5% (15,0% pada 6★) Crit Rate. Bonus perlengkapan Herrscher of Rebirth: Setelah serangan Joint mengenai dalam bentuk Soul Shaper, semua Ultimate memberikan 121,4% (200,0% pada 6★) ATK tambahan DMG Fisik kepada musuh dengan Withering Fissure dalam waktu 18 detik. Efek ini hanya berlaku sekali selama efek ini berlangsung.
                ",
                'stats' => "305 ATK \r\n 15 CRT",
                'source' => "Foundry",
                'image' => "Life Harvester's Path - Shared Destiny.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Life Harvester's Song",
                'type' => "Scythes",
                'rarity' => "4star",
                'detail' =>
                "Life Harvester's Song \r\n
                [SP: 0] [CD: 15 detik] Melakukan tebasan, menghasilkan 640.2% (800.0% pada 5★) ATK DMG Fisik. Bonus perlengkapan Herrscher of Rebirth: Biaya DMG, CD, dan SP ditentukan oleh pengguna. Semua anggota tim memulihkan 10,0 SP ketika mereka keluar dalam bentuk Herrscher (CD: 15,0 detik; karakter mendingin secara terpisah).\r\n
                Bud of Rebirth\r\n
                Semua anggota tim memberikan 3,0% (5,0% pada 5★) lebih banyak DMG Fisik (eksklusif) dan pengguna senjata memberikan 7,2% (12,0% pada 5★) lebih banyak DMG Fisik. Dalam bentuk Herrscher, semua musuh menerima 7,2% (12,0% pada 5★) lebih banyak DMG Fisik dari pengguna senjata.
                ",
                'stats' => "189 ATK \r\n 7 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Life Harvester's Song.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Quantum Roamer",
                'type' => "Scythes",
                'rarity' => "4star",
                'detail' =>
                "Collapsing Matrix \r\n
                [SP: 4] [CD: 18s] Berlari ke depan untuk memberikan 560,4% (800,0% pada 5★) ATK DMG Fisik dan menciptakan distorsi ruang selama 1 detik untuk mengumpulkan musuh. Kecepatan gerak musuh yang terkena serangan diperlambat 30% selama 5 detik.\r\n
                Quantum Cube\r\n
                Ultimate dan Burst ATK memberikan 18,0% (30,0% pada 5★) lebih banyak Total DMG.
                ",
                'stats' => "179 ATK \r\n 15 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Quantum Roamer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Midnight Ataegina",
                'type' => "Lance",
                'rarity' => "5star",
                'detail' =>
                "Point Quasar \r\n
                [SP: 0] [CD: 25 detik] Meluncurkan serangan dorong, menghasilkan 50% ATK dari DMG Fisik. Jika serangan dorong mengenai musuh yang tidak berada dalam kondisi Invincibility atau Iron Body, maka akan memicu Throw ATK, mengendalikan target dan menghasilkan 90% + 1.085,6% (1.400,0% pada 6★) ATK DMG Fisik. Saat musuh melakukan gerakan tertentu, pengguna dapat melepaskan Throw Counter tanpa syarat saat tombol skill senjata berkedip, melumpuhkan musuh dan memberikan 20% + 721,4% (800,0% pada 6★) ATK DMG Fisik. Serangan ini tidak memicu CD.
                Bonus perlengkapan Palatinus Equinox: Dalam bentuk Knight, skill senjata menjadi Throw ATK. Dalam bentuk Guardian, menjadi Cannon Blast:
                Tekan [Weapon] untuk melepaskan Cannon Blast yang akan terisi ulang setelah 3 kali serangan berturut-turut.
                SEQ 1: 300% ATK dari DMG Fisik.
                SEQ 2: 300% ATK dari DMG Fisik.
                SEQ 3: 300% ATK dari DMG Fisik.
                Tekan [Senjata] setelah ATK Khusus untuk melepaskan Ledakan Meriam Gabungan:
                SEQ 4 Ledakan Meriam Gabungan: 400% ATK dari DMG Fisik.
                Shield Ram Ledakan Meriam Gabungan: 400% ATK dari DMG Fisik.
                Ledakan Meriam Gabungan Equinox Severance: 3 x 282,1% (400,0% pada 6★) ATK dari DMG Fisik.\r\n
                Karma Cycle\r\n
                Crit Rate Wielder meningkat 11,1% (15,0% pada 6★). Skill senjata memberikan bonus Total DMG sebesar 14,3% (30,0% pada 6★) dan bonus DMG Fisik sebesar 11,1% (15,0% pada 6★).\r\n
                Daybreak Equinox\r\n
                Total DMG Wielder meningkat sebesar 12,1% (20,0% pada 6★). Memicu Skill Ultimate Evasion mengurangi DMG yang diambil dari belakang sebesar 23,2% (35,0% pada 6★) selama 8,9 detik (12,0% pada 6★). Memicunya lagi akan mengatur ulang durasinya.
                ",
                'stats' => "301 ATK \r\n 16 CRT",
                'source' => "Foundry",
                'image' => "Midnight Ataegina.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Midnight Eclipse",
                'type' => "Lance",
                'rarity' => "4star",
                'detail' =>
                "Abyssal Might \r\n
                [SP: 0] [CD: 25 detik] Meluncurkan serangan dorong, menghasilkan 50% ATK dari DMG Fisik. Jika serangan dorong mengenai musuh yang tidak berada dalam kondisi Invincibility atau Iron Body, maka akan memicu Throw ATK, mengendalikan target dan menghasilkan 90% + 1.085,6% (1.400,0% pada 6★) ATK DMG Fisik. Saat musuh melakukan gerakan tertentu, pengguna dapat melepaskan Throw Counter tanpa syarat saat tombol skill senjata berkedip, melumpuhkan musuh dan memberikan 20% + 721,4% (800,0% pada 6★) ATK DMG Fisik. Serangan ini tidak memicu CD.
                Bonus perlengkapan Palatinus Equinox: Dalam bentuk Knight, skill senjata menjadi Throw ATK. Dalam bentuk Guardian, menjadi Cannon Blast:
                Tekan [Weapon] untuk melepaskan Cannon Blast yang akan terisi ulang setelah 3 kali serangan berturut-turut.
                SEQ 1: 300% ATK dari DMG Fisik.
                SEQ 2: 300% ATK dari DMG Fisik.
                SEQ 3: 300% ATK dari DMG Fisik.
                Tekan [Senjata] setelah ATK Khusus untuk melepaskan Ledakan Meriam Gabungan:
                SEQ 4 Ledakan Meriam Gabungan: 400% ATK dari DMG Fisik.
                Shield Ram Ledakan Meriam Gabungan: 400% ATK dari DMG Fisik.
                Ledakan Meriam Gabungan Equinox Severance: 3 x 282,1% (400,0% pada 6★) ATK dari DMG Fisik.\r\n
                Karma Wheel\r\n
                Crit Rate Wielder meningkat sebesar 6,0% (10,0% pada 5★). Skill senjata memberikan bonus 5,6% (12,0% pada 5★) bonus Total DMG dan 5,6% (12,0% pada 5★) bonus Physical DMG.
                ",
                'stats' => "182 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Midnight Eclipse.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Domain of Ego - Flawless Return",
                'type' => "Bow",
                'rarity' => "5star",
                'detail' =>
                "Dormant Seeds \r\n
                [SP: 0] [CD: 0s] Gunakan busur untuk membidik dan menembak target (durasi bidikan maksimal: 3 detik) untuk menghasilkan 675,0% ATK Ice DMG ke target. Ketika digunakan oleh Herrscher dari Human: Ego, musuh yang memicu Ego Blossom akan menerima 15.0% Ice DMG lebih banyak selama 10 detik. Memicu efek ini lagi akan mengatur ulang durasinya. Memberikan tambahan 10 × 20,0% ATK Ice DMG saat dipicu dalam bentuk Herrscher of Human. CD aktif senjata dan waktu pengisian daya didasarkan pada mode menembak.\r\n
                Budding Love\r\n
                Meningkatkan Total DMG sebesar 15,0% selama 10 detik. Memicu efek ini lagi akan mengatur ulang durasinya. Saat digunakan oleh Herrscher dari Human: Ego, muatan tembakan meningkat sebesar 3 dan Total DMG meningkat sebesar 15,0% saat menggunakan skill senjata. Skill senjata memulihkan 5,0 SP saat mengenai musuh yang memicu Ego Blossom.\r\n
                First Bloom\r\n
                Meningkatkan Ice DMG sebesar 15,0%. Saat digunakan oleh Herrscher of Human: Ego, dalam bentuk Herrscher of Origin, Total DMG Finisher meningkat 20,0% saat Charged ATK mengenai musuh. Efek ini akan hilang saat keluar dari bentuk Herrscher of Origin.
                ",
                'stats' => "305 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Domain of Ego - Flawless Return.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Key of Ego",
                'type' => "Bow",
                'rarity' => "4star",
                'detail' =>
                "Loving Heart \r\n
                [SP: 0] [CD: 0s] Gunakan busur untuk membidik dan menembak target (durasi bidikan maksimal: 3 detik) untuk memberikan 550.0% ATK Ice DMG ke target. Ketika digunakan oleh Herrscher dari Human: Ego, musuh yang memicu Ego Blossom akan menerima 12.0% Ice DMG lebih banyak selama 10 detik. Memicu efek ini lagi akan mengatur ulang durasinya. Memberikan tambahan 10 × 15,0% ATK Ice DMG saat dipicu dalam bentuk Herrscher of Human. CD aktif senjata dan waktu pengisian daya didasarkan pada mode menembak.\r\n
                Long Lover\n
                Meningkatkan Total DMG sebesar 10,0% selama 10 detik. Memicu efek ini lagi akan mengatur ulang durasinya. Saat digunakan oleh Herrscher dari Human: Ego, muatan tembakan meningkat sebesar 3 dan Total DMG meningkat sebesar 10,0% saat menggunakan skill senjata. Skill senjata memulihkan 4,0 SP saat mengenai musuh yang memicu Ego Blossom.
                ",
                'stats' => "190 ATK \r\n 7 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Key of Ego.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dream Cutter - Polar Star",
                'type' => "Chakram",
                'rarity' => "5star",
                'detail' =>
                "Tearing up the Nightmare Cocoon \r\n
                [SP: 0] [CD: 0s] CD senjata aktif, biaya maksimum, dan efek didasarkan pada jenis pengguna senjata. Total DMG yang diberikan oleh Ignite DMG meningkat sebesar 21,1% (25,0% pada 5★).
                Ketika dilengkapi oleh karakter selain Miracle ☆ Magical Girl, susunan sihir akan menekan musuh setelah mendaratkan skill senjata, memberikan jumlah tumpukan Ignite x 108,6% (140,0% pada 5★) ATK Fire DMG kepada musuh dalam jangkauan. DMG ini dianggap sebagai Ignite DMG. Miracle ☆ Bonus perlengkapan Magical Girl: Setelah meledakkan tanda pada musuh dengan menggunakan Cut, ledakan lain akan terpicu, memberikan jumlah tumpukan Ignite x 108,6% (140,0% pada 5★) ATK Fire DMG pada musuh. DMG ini dianggap sebagai Ignite DMG. Mendapatkan 3 tumpukan tambahan Magic Girl Channel saat melemparkan Cut. Casting Join menghasilkan 4 jarum tambahan, memberikan jumlah tumpukan Ignite x 146.4% (170.0% pada 5★) ATK Fire DMG pada musuh. DMG ini dianggap sebagai Ignite DMG. Perhitungan DMG di atas membutuhkan setidaknya 1 tumpukan Ignite dan batas maksimal 5 tumpukan. CD: 15 detik.\r\n
                New Wings That Shape Tomorrow\r\n
                Fire DMG yang diberikan oleh serangan mode Ultimate dan burst meningkat sebesar 21,1% (25,0% pada 5★). Ketika serangan mode Ultimate atau burst mengenai musuh, regenerasi 1,6 (2,0 pada 5★) SP untuk setiap tumpukan Ignite pada target dengan tumpukan Ignite tertinggi di antara musuh yang terkena. Maksimal 5 tumpukan dihitung, dengan interval pemicu 15 detik.\r\n
                Sparkling and Blazing Stars\r\n
                Saat berada di lapangan, musuh yang tersulut mengambil 11,1% (15,0% pada 5★) lebih banyak Fire DMG. Ketika musuh memiliki lebih dari 1 tumpukan Ignite, mereka menerima 11,7% (18,0% pada 5★) lebih banyak Ignite DMG.
                ",
                'stats' => "304 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Dream Cutter - Polar Star.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rudder in Dream Λ-I",
                'type' => "Chakram",
                'rarity' => "5star",
                'detail' =>
                "Aimer: Pyrolyzer \r\n
                [SP: 0] [CD: O] CD, biaya maksimum, dan efek senjata aktif didasarkan pada pengguna.
                Saat menggunakan senjata aktif, senjata memasuki mode Overclocked dan meningkatkan Total 10,4% (12,0% pada 6★) selama 20 detik. Memicunya lagi akan menyetel ulang durasinya. Dalam mode Overclocked, senjata yang aktif akan mengeluarkan Pulse saat terkena serangan yang memberikan 11,1% (15,0% pada 6★) ATK AoE Fire DMG. CD: 0,5 detik.\r\n
                Source Code: Temporal Dream\r\n
                Meningkatkan Total DMG semua anggota tim sebesar 10,4% (12,0% pada 6★) (tidak dapat ditumpuk). Bonus perlengkapan Chrono Navi: Jika dia memukul mundur unit chakram Aimer-ß dalam mode Overclocked, senjata akan memasuki mode Overclocked khusus, yang membuatnya memberikan 16,1% (20,0% pada 6★) lebih banyak Fire DMG ke musuh yang terbakar selama 20-an.\r\n
                Plasma Flames\r\n
                Meningkatkan Fire DMG sebesar 11,1% (15,0% pada 6★). Musuh yang terkena Pulse menerima 2,5% (8,0% pada 6★) lebih banyak Fire DMG selama 15 detik, tetapi jika mereka terpicu, mereka akan menerima 9,5% (15,0% pada 6★) lebih banyak Fire DMG. Memicunya lagi akan menyegarkan durasinya.
                ",
                'stats' => "301 ATK \r\n 10 CRT",
                'source' => "Foundry",
                'image' => "Rudder in Dream A-I.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Twirling Glaze - Lustrous Bloom",
                'type' => "Chakram",
                'rarity' => "5star",
                'detail' =>
                "Lunar Cadenza at Heart \r\n
                [SP: 0] [CD: 0s] CD, biaya maksimum, dan efek skill aktif senjata didasarkan pada tipe pengguna.
                Bleed DMG karakter meningkat sebesar 12,6% (15,0% pada 5★). Bonus perlengkapan Valkyrie Quicksand: Gema akan dihasilkan setelah penilaian yang berhasil saat dia menggunakan skill senjatanya, menghasilkan 3 x 154,3% (170,0% pada 5★) ATK DMG Fisik. DMG ini dianggap sebagai Bleed DMG dan memungkinkannya memasuki kondisi Rhythm selama 15 detik. Memicunya lagi akan mengatur ulang durasinya. Dalam kondisi Rhythm, semua musuh menerima 8,4% (10,0% pada 5★) lebih banyak Bleed DMG.\r\n
                Stellar Glow in Hands\r\n
                Meningkatkan Total DMG sebesar 12,6% (15,0% pada 5★). Bonus perlengkapan Valkyrie Quicksand: Melakukan Ultimate dengan sempurna akan meningkatkan Total DMG sebesar 16,9% (20,0% pada 5★). Efek ini dapat ditumpuk sebanyak 5 kali dan bertahan hingga Ultimate ini berakhir. Penghakiman normal memberikan 80% dari bonus Total DMG Penghakiman Sempurna, dan melemparkan senjata aktif atau Ultimate memberikan 5.0 Bleed Trauma pada semua musuh.\r\n
                Floral Fragrance in Dreams\r\n
                Meningkatkan Total DMG sebesar 4,9% (8,0% pada 5★), dan DMG Fisik dalam kondisi Ritme sebesar 6,1% (10,0% pada 5★).
                ",
                'stats' => "305 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Twirling Glaze - Lustrous Bloom.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Dream Cutter",
                'type' => "Chakram",
                'rarity' => "4star",
                'detail' =>
                "Blade That Slashes Nightmares \r\n
                [SP: 0] [CD: 0s] CD, biaya maksimum, dan efek senjata aktif didasarkan pada jenis pengguna senjata. Total DMG yang diberikan oleh Ignite DMG meningkat sebesar 13,6% (20,0% pada 5★).
                Ketika dilengkapi oleh karakter selain Miracle ☆ Magical Girl, susunan sihir akan menekan musuh setelah mendaratkan skill senjata, memberikan jumlah tumpukan Ignite x 80.0% (100.0% pada 5★) ATK Fire DMG kepada musuh dalam jangkauan. DMG ini dianggap sebagai Ignite DMG. Miracle ☆ Bonus perlengkapan Magical Girl: Setelah meledakkan tanda pada musuh dengan menggunakan Cut, ledakan lain akan terpicu, memberikan jumlah tumpukan Ignite x 80.0% (100.0% pada 5★) ATK Fire DMG pada musuh. DMG ini dianggap sebagai Ignite DMG. Mendapatkan 3 tumpukan tambahan Magic Girl Channel saat melemparkan Cut. Casting Join menghasilkan 4 jarum tambahan, memberikan jumlah tumpukan Ignite x 108.0% (140.0% pada 5★) ATK Fire DMG pada musuh. DMG ini dianggap sebagai Ignite DMG. Perhitungan DMG di atas membutuhkan setidaknya 1 tumpukan Ignite dan batas maksimal 5 tumpukan. CD: 15 detik.\r\n
                Shimmer of Evening Stars\r\n
                Fire DMG yang diberikan oleh serangan mode Ultimate dan burst meningkat sebesar 12,0% (20,0% pada 5★). Ketika serangan mode Ultimate atau burst mengenai musuh, meregenerasi 0,7 (1,5 pada 5★) SP untuk setiap tumpukan yang terbakar pada target dengan tumpukan efek terbakar tertinggi di antara musuh yang terkena. Maksimal 5 tumpukan. Interval pemicu: 15 detik.
                ",
                'stats' => "192 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Dream Cutter.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rudder in Dream",
                'type' => "Chakram",
                'rarity' => "4star",
                'detail' =>
                "Aimer: Binary \r\n
                [SP: 0] [CD: O] CD, biaya maksimum, dan efek senjata aktif didasarkan pada pengguna.
                Saat menggunakan senjata aktif, senjata memasuki mode Overclocked dan meningkatkan Total DMG pengguna sebesar 6,0% (10,0% pada 5★) selama 15 detik. Memicunya lagi akan mengatur ulang durasinya. Dalam mode Overclocked, senjata yang aktif akan mengeluarkan Pulse saat terkena serangan yang menghasilkan 6,8% (10,0% pada 5★) ATK AoE Fire DMG. CD: 0,5 detik.\r\n
                Source Code: Navigation\r\n
                Meningkatkan Total DMG semua anggota tim sebesar 6,0% (10,0% pada 5★) (tidak dapat ditumpuk). Bonus perlengkapan Chrono Navi: Jika dia menjatuhkan unit chakram Aimer-ß dalam mode Overclocked, senjata akan memasuki mode Overclocked khusus, yang membuatnya memberikan 6,4% (12,0% pada 5★) lebih banyak Fire DMG ke musuh yang terbakar selama 20-an.
                ",
                'stats' => "179 ATK \r\n 8 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Rudder in Dream.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Twirling Glaze",
                'type' => "Chakram",
                'rarity' => "4star",
                'detail' =>
                "Moonlit Tarantella \r\n
                [SP: 0] [CD: 0s] CD skill aktif senjata, biaya maksimal, dan efek skill didasarkan pada jenis karakter yang dilengkapi.
                Bleed DMG karakter meningkat sebesar 7,2% (12,0% pada 5★). Bonus perlengkapan Valkyrie Quicksand: Gema akan dihasilkan setelah penilaian yang berhasil saat dia menggunakan skill senjatanya, menghasilkan 3 x 90,1% (150,0% pada 5★) ATK DMG Fisik. DMG ini dianggap sebagai Bleed DMG dan memungkinkannya memasuki kondisi Rhythm selama 15 detik. Memicunya lagi akan mengatur ulang durasinya. Dalam kondisi Rhythm, semua musuh menerima 4,8% (8,0% pada 5★) lebih banyak Bleed DMG.\r\n
                Star Chasing Steps\r\n
                Meningkatkan Total DMG sebesar 7,2% (12,0% pada 5★). Bonus perlengkapan Valkyrie Quicksand: Melakukan Ultimate dengan sempurna akan meningkatkan Total DMG sebesar 9,6% (16,0% pada 5★). Efek ini dapat ditumpuk sebanyak 5 kali dan bertahan hingga Ultimate ini berakhir. Penghakiman normal memberikan 80% bonus Total DMG dari penghakiman sempurna, dan melemparkan senjata aktif atau Ultimate memberikan 4.0 Bleed Trauma pada semua musuh.
                ",
                'stats' => "182 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Twirling Glaze.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prophetic Dreams - Self-Fulfilling",
                'type' => "Javelin",
                'rarity' => "5star",
                'detail' =>
                "Hundred Forms Entwined \r\n
                [SP: 0] [CD: 0s] CD senjata yang aktif, biaya maksimum, dan efek ditentukan oleh pengguna. Dalam kondisi Dominasi Kosmik, senjata mendapatkan buff tambahan.
                Menggunakan senjata aktif meningkatkan DMG Fisik sebesar 10,4% (12,0% pada 6★) selama 5 detik (memicunya lagi akan mengatur ulang durasinya). Bonus perlengkapan Dreamweaver: Tubuh fisik yang menggunakan senjata aktif memulihkan 2,7 (5,0 pada 6★) SP (CD: 5 detik). Tubuh astral yang menggunakan senjata aktif meningkatkan Crit DMG ATK yang terisi sebesar 21,1% (25,0% pada 6★) selama 5 detik (memicunya lagi akan mengatur ulang durasi).\r\n
                Empty Beginning\r\n
                Basic/Combo/Charged ATK memberikan 8,9% (12,0% pada 6★) lebih banyak DMG Fisik. Dalam kondisi Cosmic Dominance, bonus di atas meningkat menjadi 27,1% (35,0% pada 6★) dan Basic/Combo/Charged ATK memberikan 21,1% (25,0% pada 6★) lebih banyak Crit DMG.\r\n
                Being-In-Itself\r\n
                Memberikan 12,1% (20,0% pada 6★) lebih banyak Total DMG. Kehadiran entitas yang dipanggil pengguna memulihkan 158 (300 pada 6★) HP per 10 detik.
                ",
                'stats' => "303 ATK \r\n 14 CRT",
                'source' => "Foundry",
                'image' => "Prophetic Dreams - Self-Fulfilling.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Mirage Spearhead",
                'type' => "Javelin",
                'rarity' => "4star",
                'detail' =>
                "Undefined State \r\n
                [SP: 0] [CD: 0s] CD senjata yang aktif, biaya maksimum, dan efek ditentukan oleh pengguna. Dalam kondisi Dominasi Kosmik, senjata mendapatkan buff tambahan.\r\n
                Majestic Deviation\r\n
                Meningkatkan Total DMG sebesar 5,6% (8,0% pada 5★). Dalam kondisi Dominasi Kosmik, bonus di atas meningkat menjadi 11,0% (15,0% pada 5★).
                ",
                'stats' => "167 ATK \r\n 16 CRT",
                'source' => "Foundry",
                'image' => "Mirage Spearhead.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prophetic Dreams",
                'type' => "Javelin",
                'rarity' => "4star",
                'detail' =>
                "Stray Thoughts Weave Dreams \r\n
                [SP: 0] [CD: 0s] CD senjata yang aktif, biaya maksimum, dan efek ditentukan oleh pengguna. Dalam kondisi Dominasi Kosmik, senjata mendapatkan buff tambahan.
                Menggunakan senjata aktif meningkatkan DMG Fisik sebesar 5,2% (10,0% pada 5★) selama 5 detik (memicunya lagi akan mengatur ulang durasinya). Bonus perlengkapan Dreamweaver: Tubuh fisik yang menggunakan senjata aktif memulihkan 1,2 (2,0 pada 5★) SP (CD: 5 detik). Tubuh astral yang menggunakan senjata aktif meningkatkan Crit DMG ATK yang terisi sebesar 11,6% (18,0% pada 5★) selama 5 detik (memicunya lagi akan mengatur ulang durasi).\r\n
                Perpetual Cycle\r\n
                Basic/Combo/Charged ATK memberikan 5,6% (8,0% pada 5★) lebih banyak DMG Fisik. Dalam kondisi Cosmic Dominance, bonus di atas meningkat menjadi 11,4% (25,0% pada 5★) dan Basic/Combo/Charged ATK memberikan 12,0% (20,0% pada 5★) lebih banyak Crit DMG.
                ",
                'stats' => "191 ATK \r\n 6 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Prophetic Dreams.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Precise Javelin",
                'type' => "Javelin",
                'rarity' => "2star",
                'detail' =>
                "Throw \r\n
                [SP: 0] [CD: 0s] CD senjata yang aktif, biaya maksimum, dan efek ditentukan oleh pengguna.
                ",
                'stats' => "75 ATK \r\n 5 CRT",
                'source' => "Default Gear
                Story & Open World",
                'image' => "Precise Javelin.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //weapon part 2
            [
                'name' => "Red Star Thunderbolt: Breaking Dawn",
                'type' => "Drive Cores",
                'rarity' => "5star",
                'detail' =>
                "Calendar of Finality \r\n
                [SP: 0] [CD: 0s] CD, max charge, dan efek senjata yang aktif didasarkan pada tipe pengguna.
                Jika wielder memiliki Domain Resonance, melemparkan skill senjata akan meningkatkan Lightning DMG yang diberikan sebesar 35,0% selama 6 detik. Memicu ulang akan merefresh durasi. Saat digunakan oleh Deepspace Anchor: First Light, Thunder in Clear Skies dan Lightning Flash Anchor memberikan Lightning Trace pada target, memberikan 800.0% ATK tambahan Lightning DMG selama 0.6 detik. CD: 12 detik. Selama Stellar Outburst, CD direset pada saat karakter pertama kali keluar (buff ini dapat diperoleh setiap kali memasuki Stellar Outburst). \r\n
                Winter Solstice: 1838 \r\n
                Di luar Stellar Outburst, musuh mengambil 15,0% lebih banyak Lightning DMG dari karakter tersebut. Saat digunakan oleh Deepspace Anchor: First Light, semua musuh yang ada menerima 16,0% lebih banyak Elemental DMG saat Astral Ring diaktifkan.\r\n
                Summer Solstice: 0923 \r\n
                Meningkatkan Total DMG dari skill senjata, Ultimate, dan burst mode ATK sebesar 20,0% di luar Stellar Outburst. Saat digunakan oleh Deepspace Anchor: First Light, semua rekan satu tim memberikan 35,0% lebih banyak Lightning DMG melalui Resonance selama Stellar Outburst. \r\n
                The First Light After 1 Billion Years (Synergy I/II/III) \r\n
                Musuh mengambil 4.0% / 8.0% / 12.0% lebih banyak Total DMG dari skill senjata (independen & eksklusif).
                ",
                'stats' => "307 ATK \r\n 12 CRT",
                'source' => "Foundry",
                'image' => "Red Star Thunderbolt Breaking Dawn.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Red Star Thunderbolt",
                'type' => "Drive Cores",
                'rarity' => "4star",
                'detail' =>
                "Solar Stone \r\n
                [SP: 0] [CD: 0s] CD senjata yang aktif, max charge, dan efeknya didasarkan pada tipe pengguna senjata.
                Jika wielder memiliki Domain Resonance, melemparkan skill senjata akan meningkatkan Lightning DMG yang diberikan sebesar 20,0% selama 6 detik. Memicu ulang akan merefresh durasi. Saat digunakan oleh Deepspace Anchor: First Light, Thunder in Clear Skies dan Lightning Flash Anchor memberikan Lightning Trace pada target, memberikan 400.0% ATK tambahan Lightning DMG selama 0.6 detik. CD: 12 detik. Selama Stellar Outburst, CD direset pada saat karakter pertama kali keluar (buff ini dapat diperoleh setiap kali memasuki Stellar Outburst). \r\n
                18 Months 38 Days \r\n
                Di luar Stellar Outburst, musuh mengambil 6,0% lebih banyak Lightning DMG dari karakter tersebut. Saat digunakan oleh Deepspace Anchor: First Light, semua musuh yang ada mengambil 6,0% lebih banyak Elemental DMG saat Astral Ring diaktifkan.\r\n
                The First Light After 1 Billion Years (Synergy I/II/III) \r\n
                Musuh mengambil 4.0% / 8.0% / 12.0% lebih banyak Total DMG dari skill senjata (independen & eksklusif).
                ",
                'stats' => "190 ATK \r\n 8 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Red Star Thunderbolt.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "The Value of Pi",
                'type' => "Drive Cores",
                'rarity' => "4star",
                'detail' =>
                "A Spell for Better Memory \r\n
                [SP: 0] [CD: 0s] CD senjata aktif, max charge, dan efek didasarkan pada tipe pengguna. \r\n
                Beyond the World's Constants \r\n
                Meningkatkan Total DMG sebesar 15,0%. Meningkatkan Total DMG sebesar 10,0% selama Stellar Outburst. \r\n
                3.141593 (Synergy I/II/III) \r\n
                Meningkatkan Elemental DMG dari skill senjata sebesar 4.0% / 8.0% / 12.0% dan Physical DMG dari skill senjata sebesar 3.0% / 6.0% / 9.0%.
                ",
                'stats' => "163 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "The Value of Pi.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Regular Drive Core",
                'type' => "Drive Cores",
                'rarity' => "2star",
                'detail' =>
                "
                Instant Utility \r\n
                [SP: 0] [CD: 0s] CD senjata yang aktif, max charge, dan efek didasarkan pada tipe wielder.
                ",
                'stats' => "74 ATK \r\n 5 CRT",
                'source' => "Default Gear",
                'image' => "Regular Drive Core.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Electrifying Arc: Azure Sky",
                'type' => "Rapid-Shot Crossbows",
                'rarity' => "5star",
                'detail' =>
                "Above the Blue Sky \r\n
                [SP: 0] [CD: 0s] CD, max charge, dan efek senjata yang aktif didasarkan pada tipe pengguna senjata.
                Serangan skill senjata meningkatkan Total DMG sebesar 3,5% selama 1,5 detik. Maksimal 10 stack. Memicu ulang akan merefresh durasi. \r\n
                In the Deep Woods \r\n
                Meningkatkan Lightning DMG sebesar 25.0%. Selama Stellar Outburst, meningkatkan Lightning DMG dari skill senjata sebesar 25.0%. Saat digunakan oleh Valkyrie Boltstorm, meningkatkan Lightning DMG yang diambil oleh musuh yang terkena Targeted Bombardment sebesar 20.0% selama 25 detik. Memicu ulang akan merefresh durasi.\r\n
                Under the Warm Sun \r\n
                Ketika senjata aktif menyerang, meningkatkan Total DMG tim sebesar 12,0% selama 25 detik. Memicu ulang durasi penyegaran (eksklusif). Saat digunakan oleh Valkyrie Boltstorm, Targeted Bombardment menghasilkan 7 ledakan yang saling terhubung, masing-masing memberikan 200.0% ATK Lightning DMG dan 2.0 DMG tambahan untuk perisai DMG tetap. \r\n
                Ceaseless Quest (Synergy I/II/III) \r\n
                Meningkatkan Elemental DMG tim sebesar 4.0% / 8.0% / 12.0%. Musuh menerima 3.0%/6.0%/9.0% lebih banyak Elemental DMG dari skill senjata (eksklusif).
                ",
                'stats' => "284 ATK \r\n 28 CRT",
                'source' => "Foundry",
                'image' => "Electrifying Arc Azure Sky.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Electrifying Arc",
                'type' => "Rapid-Shot Crossbows",
                'rarity' => "4star",
                'detail' =>
                "Perfection: Touchstone \r\n
                [SP: 0] [CD: 0s] CD, max charge, dan efek senjata yang aktif didasarkan pada tipe pengguna senjata.
                Serangan skill senjata meningkatkan Total DMG sebesar 2,0% selama 1,5 detik. Maksimal 10 stack. Memicu ulang akan merefresh durasi. \r\n
                Anticipation: Compass \r\n
                Meningkatkan Lightning DMG sebesar 16.0%. Selama Stellar Outburst, meningkatkan Lightning DMG dari skill senjata sebesar 16.0%. Saat digunakan oleh Valkyrie Boltstorm, meningkatkan Lightning DMG yang diambil oleh musuh yang terkena Targeted Bombardment sebesar 12.0% selama 25 detik. Memicu ulang akan merefresh durasi.\r\n
                Ceaseless Quest (Synergy I/II/III) \r\n
                Meningkatkan Elemental DMG tim sebesar 4.0% / 8.0% / 12.0%. Musuh menerima 3.0%/6.0%/9.0% lebih banyak Elemental DMG dari skill senjata (eksklusif).
                ",
                'stats' => "175 ATK \r\n 17 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Electrifying Arc.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Ta-da! The Blow",
                'type' => "Rapid-Shot Crossbows",
                'rarity' => "4star",
                'detail' =>
                "Kacha! Precise Aim \r\n
                [SP: 0] [CD: 0s] CD senjata aktif, max charge, dan efek didasarkan pada tipe pengguna. \r\n
                Ka-da! Speedy Reload \r\n
                Meningkatkan Total DMG sebesar 20,0%. Meningkatkan Elemental DMG sebesar 20,0% dan Physical DMG sebesar 12,0% ketika serangan kombo melebihi 100.\r\n
                Bang Bang! One Shot, One Kill (Synergy I/I/I) \r\n
                Ketika serangan kombo lebih besar dari 30, Total DMG meningkat sebesar 4.0% / 8.0% / 12.0%.
                ",
                'stats' => "164 ATK \r\n 12 CRT",
                'source' => "Foundry",
                'image' => "Ta-da! The Blow.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rapid Rain",
                'type' => "Rapid-Shot Crossbows",
                'rarity' => "2star",
                'detail' =>
                "Unending Sound \r\n
                [SP: 0] [CD: 0s] CD senjata aktif, max charge, dan efek didasarkan pada tipe pengguna.
                ",
                'stats' => "75 ATK \r\n 5 CRT",
                'source' => "Default Gear",
                'image' => "Rapid Rain.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blast Hammer: Blazing Red",
                'type' => "Rocket Hammers",
                'rarity' => "4star",
                'detail' =>
                "Hammer In, Hammer Out \r\n
                [SP: 0] [CD: 0s] CD senjata yang aktif, max charge, dan efeknya didasarkan pada tipe pengguna senjata.
                Menggunakan skill senjata akan meningkatkan Fire DMG karakter sebesar 22.0% selama 15 detik. Bisa di-refresh. Saat digunakan oleh Valkyrie Blastmetal, pukulan terakhir dari A Serious Hammering memiliki jangkauan yang lebih besar dan memberikan tambahan 400.0% ATK dari Fire DMG. \r\n
                Small Hammer for Fun, Big Hammer for Domination \r\n
                Menggunakan skill senjata memberikan stack Direct Hammering kepada semua musuh di medan perang, yang meningkatkan Total DMG yang diambil oleh musuh sebesar 6.0% selama 25 detik. Maksimal 2 stack. Memicu ulang refresh durasi (eksklusif). Saat digunakan oleh Valkyrie Blastmetal, stack maksimal bertambah menjadi 3, dan casting Ultimate menghasilkan satu stack Direct Hammering. Saat memasuki Stellar Outburst, memberikan 3 stack Vulnerability ke semua musuh.\r\n
                Alternative Hammering (Synergy I/II/III) \r\n
                Semua anggota tim memberikan 3.0%/4.0%/6.0% lebih banyak Total DMG. Selama Stellar Outburst, meningkatkan Elemental DMG tim sebesar 3.0%/6.5%/10.0% (eksklusif).
                ",
                'stats' => "180 ATK \r\n 14 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Blast Hammer Blazing Red.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Calm Baby",
                'type' => "Rocket Hammers",
                'rarity' => "4star",
                'detail' =>
                "Blazing Frenzy \r\n
                [SP: 0] [CD: 0s] CD, max charge, dan efek senjata yang aktif didasarkan pada tipe pengguna senjata.
                Menggunakan skill senjata akan meningkatkan Total DMG karakter sebesar 24,0% selama 10 detik. \r\n
                Going All Out! \r\n
                Memulihkan 300 HP saat karakter memasuki lapangan selama Stellar Outburst. Selama Stellar Outburst, karakter memberikan 12,0% lebih banyak Total DMG saat berada di lapangan.\r\n
                True Passion (Synergy I/II/III) \r\n
                Selama Stellar Outburst, karakter memberikan tambahan 80.0%/160.0%/240.0% ATK dari Adaptive DMG saat menggunakan senjata skill DMG. CD: 5 detik.
                ",
                'stats' => "162 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Calm Baby.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Executioner",
                'type' => "Rocket Hammers",
                'rarity' => "2star",
                'detail' =>
                "Hunting Time \r\n
                [SP: 0] [CD: 0s] CD, max charge, dan efek senjata yang aktif didasarkan pada tipe pengguna senjata.
                ",
                'stats' => "75 ATK \r\n 5 CRT",
                'source' => "Default Gear",
                'image' => "Executioner.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Banquet Rose: Faux Crown",
                'type' => "Chained Blade",
                'rarity' => "5star",
                'detail' =>
                "Fallen Banquet \r\n
                [SP: 0] [CD: 0s] CD senjata aktif, max charge, dan efek didasarkan pada tipe pengguna. Ketika karakter memiliki tag Harmonized Shadow Star, dia memberikan 23,7% (30,0% pada 6★) lebih banyak Ice DMG. Saat digunakan oleh Mad Pleasure: Shadowbringer, setelah Ultimate-nya mengenai musuh, Time-frozen Domain akan terpicu selama 3 detik, yang akan menghentikan pengatur waktu keterampilan dan pengatur waktu panggung untuk karakter dan musuh. Mengganti karakter selama Time-frozen Domain akan segera mengakhirinya. Setelah Time-frozen Domain berakhir, 210.7% (250.0% pada 6★) ATK Ice DMG akan diberikan kepada musuh. CD: 15 detik. Musuh yang mengambil DMG ini akan menerima 13,3% (18,0% pada 6★) lebih banyak Total DMG selama 25 detik. Memicu ulang akan merefresh durasi. Saat memasuki Stellar Outburst atau saat Wheel of Destiny diaktifkan, karakter dengan Astral Ring Specialization: Wheel of Destiny akan meningkatkan Total DMG yang diambil oleh musuh ketika Ultimates mereka terkena. \r\n
                Discordant Dance \r\n
                Di luar Stellar Outburst, Ultimate Evasion mengembalikan Astral Ring Intensity sebesar 2. Selama Stellar Outburst, Total DMG meningkat 13,7% (20,0% pada 6★). Saat dilengkapi dengan Mad Pleasure: Shadowbringer, Ice DMG meningkat 22,1% (30,0% pada 6★), dia mendapatkan 3 Banquet Enjoyment awal, dan Momen of Indulgence berikutnya memberikan tambahan 450% ATK Ice DMG. Saat Spesialisasi Cincin Astral: Wheel of Destiny diaktifkan, karakter akan dilindungi oleh Astral Ring Specialization: Wheel of Destiny akan memberikan 13,7% (20,0% pada 6★) lebih banyak Elemental dan Physical DMG.\r\n
                Sinister Mask \r\n
                Musuh di lapangan menerima 9,7% (16,0% pada 6★) lebih banyak Ice DMG dari karakter tersebut. Ketika dilengkapi dengan Mad Pleasure: Shadowbringer, tim memberikan 18,2% (30,0% pada 6★) lebih banyak Total DMG dengan Resonance Attack. Serangan Phantom memberikan 18,2% (30,0% pada 6★) lebih banyak Total DMG. \r\n
                Brittle Shackles (Synergy I/II/III) \r\n
                Musuh mengambil 3.0%/6.0%/9.0% lebih banyak Total DMG dari karakter di lapangan (independen & eksklusif). Ketika digunakan oleh Mad Pleasure: Shadowbringer, mengurangi biaya SP sebesar 30.0/40.0/50.0 saat melepaskan Ultimate untuk pertama kalinya.
                ",
                'stats' => "306 ATK \r\n 13 CRT",
                'source' => "Foundry",
                'image' => "Banquet Rose Faux Crown.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Banquet Rose",
                'type' => "Chained Blade",
                'rarity' => "4star",
                'detail' =>
                "Manor of Chaos \r\n
                [SP: 0] [CD: 0s] CD senjata aktif, max charge, dan efek didasarkan pada tipe pemain. Ketika karakter memiliki tag Harmonized Shadow Star, dia memberikan 12.0% (20.0% pada 5★) lebih banyak Ice DMG. Saat digunakan oleh Mad Pleasure: Shadowbringer, setelah Ultimate-nya mengenai musuh, Time-frozen Domain akan terpicu selama 3 detik, yang akan menghentikan timer skill dan timer stage untuk karakter dan musuh. Mengganti karakter selama Time-frozen Domain akan segera mengakhirinya. Setelah Time-frozen Domain berakhir, 110.1% (150.0% pada 5★) ATK Ice DMG akan diberikan kepada musuh. CD: 15 detik. Musuh yang mengambil DMG ini akan menerima 6.0% (10.0% pada 5★) lebih banyak Total DMG selama 25 detik. Memicu ulang akan merefresh durasi. Saat memasuki Stellar Outburst atau saat Wheel of Destiny diaktifkan, karakter dengan Astral Ring Specialization: Wheel of Destiny akan meningkatkan Total DMG yang diambil oleh musuh ketika Ultimates mereka terkena. \r\n
                Tilted Goblet \r\n
                Di luar Stellar Outburst, Ultimate Evasion mengembalikan Astral Ring Intensity sebesar 2. Selama Stellar Outburst, Total DMG meningkat 6,0% (10,0% pada 5★).Saat dilengkapi dengan Mad Pleasure: Shadowbringer, Ice DMG meningkat 10,0% (18,0% pada 5★), dia mendapatkan 3 Banquet Enjoyment awal, dan Momen Indulgence berikutnya memberikan tambahan 450% ATK Ice DMG.Saat Spesialisasi Cincin Astral:Wheel of Destiny diaktifkan, karakter akan dilindungi oleh Astral Ring Specialization:Wheel of Destiny akan memberikan 6.0% (10.0% pada 5★) lebih banyak Elemental dan Physical DMG.\r\n
                Brittle Shackles (Synergy I/II/III) \r\n
                Musuh mengambil 3.0%/6.0%/9.0% lebih banyak Total DMG dari karakter di lapangan (independen & eksklusif). Ketika digunakan oleh Mad Pleasure: Shadowbringer, mengurangi biaya SP sebesar 30.0/40.0/50.0 saat melepaskan Ultimate untuk pertama kalinya.
                ",
                'stats' => "191 ATK \r\n 7 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Banquet Rose.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Phantom Seafarer",
                'type' => "Chained Blade",
                'rarity' => "4star",
                'detail' =>
                "Cunning Wings \r\n
                [SP: 0] [CD: 0s] CD senjata aktif, max charge, dan efek didasarkan pada tipe pemain. \r\n
                Interlaced Claws \r\n
                Setelah mengenai musuh dengan Basic ATK, Combo ATK karakter akan memberikan 19.0% (35.0% pada 5★) lebih banyak Total DMG selama 20 detik.\r\n
                Fierce Fang (Synergy I/II/III) \r\n
                Karakter memberikan 4.0% / 8.0% / 12.0% lebih banyak Total DMG.Di Stellar Outburst, Total DMG bertambah 2.0%/4.0%/6.0%.
                ",
                'stats' => "165 ATK \r\n 11 CRT",
                'source' => "Foundry",
                'image' => "Phantom Seafarer.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rattlesnake",
                'type' => "Chained Blade",
                'rarity' => "2star",
                'detail' =>
                "Shadow of the Half Moon \r\n
                [SP: 0] [CD: 0s] CD senjata aktif, max charge, dan efek didasarkan pada tipe pemain.
                ",
                'stats' => "74 ATK \r\n 6 CRT",
                'source' => "Default Gear",
                'image' => "Rattlesnake.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Burn the Long Night",
                'type' => "Rapid-Shot Crossbows",
                'rarity' => "4star",
                'detail' =>
                "Vanquishment by Fire \r\n
                [SP: 0] [CD: 0s] CD, biaya maksimum, dan efek dari skill aktif senjata ditentukan oleh pengguna. Ketika karakter memiliki tag Harmonized Shadow Star, dia memberikan 10,8% (14,0% pada 5★) lebih banyak Fire DMG. Saat dilengkapi dengan Lone Destruction: Shadowchaser, dia memulai dengan 150 Energi Ledakan. Melempar 1 Piercing Blade tambahan saat mengeluarkan Firepower Rotation. CD: 1,4 detik. Piercing Blade meledak saat terkena, menghasilkan 80.0% (100.0% pada 5★) ATK dari Fire DMG sebagai senjata skill DMG. Piercing Blade dan Combo ATK memberikan Aflame saat terkena, membuat target menerima 12,8% (16,0% pada 5★) lebih banyak Fire DMG dari karakter dan mengurangi Kecepatan Gerak target sebesar 50% selama 5 detik. Memicu ulang akan menyegarkan kembali durasinya.
                Blazing Menace \r\n
                Memberikan 12,0% (16,0% pada 5★) lebih banyak Total DMG selama Stellar Outburst. Saat dilengkapi oleh Lone Destruction: Shadowchaser, dimulai dengan 3 tumpukan Supreme Incarnation. Saat diserang, 1 tumpukan Supreme Incarnation akan dikonsumsi untuk secara otomatis melakukan Ultimate Evasion satu kali. 1 tumpukan Supreme Incarnation akan dipulihkan setiap 8.0 detik, hingga 3 tumpukan. Saat Spesialisasi Cincin Astral: Wheel of Destiny diaktifkan, semua anggota tim lain dengan tag Harmonized Shadow Star memberikan 19,8% (27,0% pada 5★) lebih banyak Elemental DMG dan 9% lebih banyak Physical DMG. Saat Spesialisasi Cincin Astral: World Star diaktifkan, semua anggota tim lain dengan tag Domain Resonance memberikan 14% lebih banyak Elemental DMG dan 20% lebih banyak Physical DMG.
                Firearms Extraordinaire (Synergy I/II/III) \r\n
                Musuh mengambil 3.0% / 6.0% / 9.0% lebih banyak Total DMG dari karakter di lapangan (independen & eksklusif). Saat dilengkapi oleh Lone Destruction: Shadowchaser, dia mendapatkan 20.0/35.0/50.0 lebih banyak SP awal.
                ",
                'stats' => "298 ATK \r\n 13 CRT",
                'source' => "Limited/Rotating Supplies",
                'image' => "Burn the Long Night.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Burn the Long Night: Luminare",
                'type' => "Rapid-Shot Crossbows",
                'rarity' => "5star",
                'detail' =>
                "Shadowplay Finale \r\n
                [SP: 0] [CD: 0s] CD, biaya maksimum, dan efek dari skill aktif senjata ditentukan oleh penggunanya. Ketika karakter memiliki tag Harmonized Shadow Star, dia memberikan 15,3% (20,0% pada 6★) lebih banyak Fire DMG. Saat dilengkapi dengan Lone Destruction: Shadowchaser, dia memulai dengan 150 Energi Ledakan. Melempar 1 Piercing Blade tambahan saat mengeluarkan Firepower Rotation. CD: 1,4 detik. Piercing Blade meledak saat terkena, menghasilkan 110,7% (150,0% pada 6★) ATK dari Fire DMG sebagai senjata skill DMG. Piercing Blade dan Combo ATK memberikan Aflame saat terkena, membuat target menerima 17,5% (23,0% pada 6★) lebih banyak Fire DMG dari karakter dan mengurangi Kecepatan Gerak target sebesar 50% selama 5 detik. Memicu ulang akan menyegarkan kembali durasinya.
                Requiem of Everlasting Night \r\n
                Memberikan 17,3% (22,0% pada 6★) lebih banyak Total DMG selama Stellar Outburst. Saat dilengkapi oleh Lone Destruction: Shadowchaser, dimulai dengan 3 tumpukan Supreme Incarnation. Saat diserang, 1 tumpukan Supreme Incarnation akan dikonsumsi untuk secara otomatis melakukan Ultimate Evasion satu kali. 1 tumpukan Supreme Incarnation akan dipulihkan setiap 8.0 detik, hingga 3 tumpukan. Saat Spesialisasi Cincin Astral: Wheel of Destiny diaktifkan, semua anggota tim lain dengan tag Harmonized Shadow Star memberikan 28,7% (35,0% pada 6★) lebih banyak Elemental DMG dan 18% lebih banyak Physical DMG. Saat Spesialisasi Cincin Astral: World Star diaktifkan, semua anggota tim lain dengan tag Domain Resonance memberikan 28% lebih banyak Elemental DMG dan 40% lebih banyak Physical DMG.
                Ardent Flames Ablaze \r\n
                Karakter ini memberikan 9,5% (15,0% pada 6★) lebih banyak Fire DMG. Saat dilengkapi dengan Lone Destruction: Shadowchaser, karakter tersebut memberikan 9,5% (15,0% pada 6★) lebih banyak Fire DMG kepada musuh yang terkena Aflame.
                Firearms Extraordinaire (Synergy I/II/III) \r\n
                Musuh mengambil 3.0% / 6.0% / 9.0% lebih banyak Total DMG dari karakter di lapangan (independen & eksklusif). Saat dilengkapi oleh Lone Destruction: Shadowchaser, dia mendapatkan 20.0/35.0/50.0 lebih banyak SP awal.
                ",
                'stats' => "305 ATK \r\n 13 CRT",
                'source' => "Supply",
                'image' => "Burn the Long Night_Luminare.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
