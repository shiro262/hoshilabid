<?php

namespace Database\Seeders;

use App\Models\Stigmata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ArtifactSeeder::class,
            CharacterGenshinSeeder::class,
            CharacterHsrSeeder::class,
            // CommentGenshinSeeder::class,
            // CommentHonkaiSeeder::class,
            // CommentHsrSeeder::class,
            //GuideGenshinSeeder::class,
            //GuideHsrSeeder::class,
            //GuideHonkaiSeeder::class,
            LightconeSeeder::class,
            NewsGenshinSeeder::class,
            NewsHsrSeeder::class,
            NewsHonkaiSeeder::class,
            PlanarSeeder::class,
            PostGenshinSeeder::class,
            PostHsrSeeder::class,
            PostHonkaiSeeder::class,
            RelicSeeder::class,
            StigmataSeeder::class,
            ValkryieSeeder::class,
            WeaponGenshinSeeder::class,
            WeaponHonkaiSeeder::class
        ]);

    }
}
