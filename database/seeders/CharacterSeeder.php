<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => "Silverwing N-EX",
                'detail' => "Bronya Zaychik battlesuit, Ranged Ice DPS, Use Combo ATK and Ultimate to deploy a scatter barrier for burst ATKs and to boost DPS.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Falcon Flare: FINAL",
                'stigmata' => "Wings of Reason",
                'image' => "Silverwing N EX.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Herrscher of Flamescion",
                'detail' => "Kiana Kaslana battlesuit, Melee Fire DPS, Capable of aerial combat, Turns into Herrscher form for DPS spike.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Domain of Incandescence",
                'stigmata' => "Blazing Legacy",
                'image' => "Herrscher of Flamescion.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Herrscher of Truth",
                'detail' => "Bronya Zaychik battlesuit added in Version 6.3.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Domain of Ascension: Truth Continuity",
                'stigmata' => "In the Name of Truth",
                'image' => "Herrscher of Truth.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Herrscher of Thunder",
                'detail' => "Raiden Mei battlesuit,  Melee damage dealer, Sustained high Lightning DMG, Bonus SP for PSY teammates.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Seven Thunders of Retribution: Narukami",
                'stigmata' => "High Baroque Maestro",
                'image' => "Herrscher of Thunder.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Bright Knight Excelsis",
                'detail' => "Durandal battlesuit, Melee Physical DMG dealer, Deal massive DMG with Charged ATK after Retaliation, Greatly gain DPS in Burst mode, Capable of controlling enemies with Throw.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Abyss Flower: Liminal Spiral",
                'stigmata' => "Eloquent Poet",
                'image' => "Bright Knight Excelsis.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Herrscher of Sentience",
                'detail' => "Fu Hua battlesuit, Physical support, Can gather and impair enemies, Performs combo slashes after activating Ultimate to deal high DMG.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Domain of Sentience",
                'stigmata' => "Shattered Swords",
                'image' => "Herrscher of Sentience.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Herrscher of Human Ego",
                'detail' => "Elysia battlesuit, A ranged Ice DMG dealer, Casting weapon skill after using Charged ATKs triggers Ego Blossom and deals considerable DMG, Unleashing Ultimate enters Herrscher of Origin Form, in which she continuously deals massive DMG.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Domain of Ego: Flawless Return",
                'stigmata' => "Flower of Origin",
                'image' => "Herrscher of Human Ego.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Herrscher of Reason",
                'detail' => "Bronya Zaychik battlesuit, Melee Type Valkryie, Gathers Konstruktyom, Can unleash multiple Charged ATKs to deal heavy Ranged DMG.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Domain of Revelation",
                'stigmata' => "Herrscher of Ice",
                'image' => "Herrscher of Reason.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Argent Knight Artemis",
                'detail' => "Rita Rossweisse battlesuit, Long-range AOE DPS, Inflicts Hypothermia that slows enemies, Charged ATK removes 2 stacks of Hypothermia to deal massive DMG, Burst: Massive DPS increase, Freezes enemies as well.",
                'rank' => "S",
                'tier' => "S",
                'weapon' => "Skadi of Thrymheim",
                'stigmata' => "Herrscher of Ice",
                'image' => "Argent Knight Artemis.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Molotov Cherry",
                'detail' => "Rozaliya Olenyeva battlesuit, Close- to mid-range DPS, Deals massive Physical DMG, Charged ATK deals more DMG with time.",
                'rank' => "S",
                'tier' => "S",
                'weapon' => "Sleeping Beauty",
                'stigmata' => "Loner of Prague",
                'image' => "Molotov Cherry.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Swallowtail Phantasm",
                'detail' => "Seele Vollerei battlesuit, Melee AOE DPS, Enters Warp State after evading enemy attack.",
                'rank' => "A",
                'tier' => "S",
                'weapon' => "Path to Acheron: Kindred",
                'stigmata' => "Quantum Waltz",
                'image' => "Swallowtail Phantasm.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Starchasm Nyx",
                'detail' => "Seele Vollerei battlesuit, Close-range Ice DMG dealer, Good at fighting multiple enemies.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Sanguine Gaze: Union",
                'stigmata' => "Fantasy Voyage",
                'image' => "Starchasm Nyx.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Miss Pink Elf♪",
                'detail' => "Elysia battlesuit, Ranged Physical DMG dealer, Charged ATK deals high DMG.",
                'rank' => "S",
                'tier' => "S",
                'weapon' => "Whisper of the Past: Sonnet",
                'stigmata' => "Pristine Elf",
                'image' => "Miss Pink Elf.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Blueberry Blitz",
                'detail' => "Liliya Olenyeva battlesuit, Close- to mid-range shieldbreaker DPS, Powerful DEF and retaliation skills.",
                'rank' => "A",
                'tier' => "A",
                'weapon' => "Sleeper's Dream",
                'stigmata' => "Sage's Mentor ",
                'image' => "Blueberry Blitz.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Vermillion Knight",
                'detail' => "Murata Himeko battlesuit, Stable melee DPS, Massive Fire DMG.",
                'rank' => "S",
                'tier' => "A",
                'weapon' => "Shuhadaku of Uriel",
                'stigmata' => "Lord of Dierkens",
                'image' => "Vermillion Knight.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Valkyrja Pledge",
                'detail' => "Theresa Apocalypse battlesuit, Mid-ranged crowd control, Basic ATKs: Good AOE and SP recovery.",
                'rank' => "A",
                'tier' => "A",
                'weapon' => "Oath of Judah",
                'stigmata' => "Moonwatcher",
                'image' => "Valkyrja Pledge.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Stalker Phantom Iron",
                'detail' => "Rita Rossweisse battlesuit, Melee DPS, Charged ATK converts Basic ATK DMG into buffed Lightning DMG.",
                'rank' => "A",
                'tier' => "A",
                'weapon' => "Genome Reaper",
                'stigmata' => "Tenebrosi",
                'image' => "Stalker Phantom Iron.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Infinite Ouroboros",
                'detail' => "Mobius battlesuit, Ranged Lightning DMG dealer with fast mob clearing, Combo ATK deals high DMG.",
                'rank' => "S",
                'tier' => "A",
                'weapon' => "Basilisk's Image: Deathshroud",
                'stigmata' => "Systema Naturae",
                'image' => "Infinite Ouroboros.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Midnight Absinthe",
                'detail' => "Natasha Cioara battlesuit, Ranged Elemental Support., Ultimate covers a large area with smoke that boosts Fire DMG enemies take.",
                'rank' => "A",
                'tier' => "A",
                'weapon' => "Obscuring Wing",
                'stigmata' => "Poem of Raven",
                'image' => "Midnight Absinthe.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Prinzessin der Verurteilung!",
                'detail' => "Fischl battlesuit, Long-range Lightning DMG dealer, QTE can inflict Lighting Vulnerability.",
                'rank' => "A",
                'tier' => "A",
                'weapon' => "Mitternachts Waltz",
                'stigmata' => "Moonwatcher",
                'image' => "Prinzessin der Verurteilung!.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Sweet n Spicy",
                'detail' => "Carole Pepper battlesuit, MECH-type melee Physical support, Charged ATK dealshigh DMG to shields.",
                'rank' => "A",
                'tier' => "B",
                'weapon' => "Miracle Kissy Pillow",
                'stigmata' => "Devil's Violinist",
                'image' => "Sweet n Spicy.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Golden Diva",
                'detail' => "Eden battlesuit, Long-range Lightning DPS, Can inflict Paralyze Trauma and make team Paralyze more effective.",
                'rank' => "A",
                'tier' => "B",
                'weapon' => "Echo of Paradise",
                'stigmata' => "High Baroque Maestro",
                'image' => "Golden Diva.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Helical Contraption",
                'detail' => "Vill-V battlesuit, Shoots fire long range, Continously fire with Loud Armaments.",
                'rank' => "S",
                'tier' => "C",
                'weapon' => "Tower of the Past: Silk Ladder",
                'stigmata' => "Life Carver",
                'image' => "Helical Contraption.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Riverist Calico",
                'detail' => "Pardofelis battlesuit, Melee Ice DPS, Can inflict high Rime Trauma and make freezing more effective for the team.",
                'rank' => "A",
                'tier' => "C",
                'weapon' => "Purana Phantasma: Nighteye",
                'stigmata' => "Feline Guardian",
                'image' => "Riverist Calico.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Starry Impression",
                'detail' => "Griseo battlesuit, Melee Physical support, Bleed deals high DMG.",
                'rank' => "A",
                'tier' => "C",
                'weapon' => "Elysian Astra: Heart's Color",
                'stigmata' => "Depicter Impression",
                'image' => "Starry Impression.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Jade Knight",
                'detail' => "Li Sushang battlesuit, Ice support, Sword Array enables repeated attacks.",
                'rank' => "S",
                'tier' => "S+",
                'weapon' => "Nocturnal Stealth: Beam",
                'stigmata' => "Eternal Moon",
                'image' => "Jade Knight.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
