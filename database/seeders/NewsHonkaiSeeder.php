<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsHonkaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_honkais')->insert([
            [
                'title' => "v6.1 Moonshade Epic Update Announcement",
                'description' => "Welcome to v6.1 Moonshade Epic!",
                'detail' => "A crystal-like sword eliminates the flood dragon. Destiny in sword brings fortune and risk. The girl named Li Sushang is the chosen one to fulfill the destiny. New S-rank battlesuit Jade Knight debuts! Midnight Chronicle is available and you can experience the all-new co-op mode. Play to get Infinite Ouroboros' new outfit Scorching Gravel, Crystals and more! Login event Maple's Promise is coming soon! Log in to get an S-rank battlesuit of your choice and more!\r\n
                Update Content\r\n
                ★ New PSY-type S-rank Battlesuit Jade Knight Debuts!\r\n
                ◆ New S-rank battlesuit Jade Knight debuts, and she deals Ice DMG! While Sword Array lasts, Jade Knight moves nimbly within the sword array and attacks enemies with numerous flying swords. She can also cast Ultimate to summon a colossal sword from above to dominate the field with additional buffs granted to Ice DMG dealers on the team.\r\n
                ※ You can obtain the new battlesuit and her recommended equipment in the following ways:\r\n
                ◆ After the v6.1 update, you can use Ancient Legacies and Ancient Willpowers in War Treasury to purchase Jade Knight Character Card/Fragments. You can also pull Expansion Supply drops to get the new battlesuit Jade Knight. Meanwhile, the first 10x drops in the Focused Supply A for fists Nocturnal Stealth and sigma set Eternal Moon will be free!\r\n
                ◆ During v6.1, Captains can obtain Jade Knight Rank-up Stamps from the spending bonuses event and certain bundle purchases. Please follow our announcements for further details.\r\n
                ◆ During v6.2, Jade Knight Character Card and Rank-up Stamp will be available in BP Shops. Please follow our official announcements for details.\r\n
                ★ Featured Event: Midnight Chronicle\r\n
                She walks amidst neon lights and under the brilliant moonlight. The evening shades in the southern part of Arc City soothe drifting souls, setting the stage for an unexpected reunion. After the v6.1 update, featured event Midnight Chronicle will be available and you can experience the all-new co-op mode. Play to get Infinite Ouroboros' new outfit Scorching Gravel, Crystals and more!",
                'image' => "v6.1 Moonshade Epic Update Announcement.png",
                'banner' => "v6.1 Moonshade Epic Update Announcement Banner.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Autumn Memento",
                'description' => "Bonuses: Autumn Memento",
                'detail' => "Capture those memories and create an album with past stories for Captains. Bonuses: Autumn Memento is now available! During the event, Captains can complete missions on the event panel to get tokens Autumn Reading Notes, which can used in event shop Afternoon Library to exchange for Honkai Impact 3rd Art Collection Vol.1: Trails of Comets and other rewards!",
                'image' => "Autumn Memento.jpg",
                'banner' => "Autumn Memento Banner.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New SP Battlesuit Chrono Navi Debuts",
                'description' => "Withness Ai-chan in Chrono Navi Battlesuit!",
                'detail' => "v6.2 The Chrono and the Hare is coming soon! Today, Ai-chan will reveal the new SP battlesuit for Ai Hyperion Λ: Chrono Navi! Don't miss it out! Chrono Navi is a MECH-type SP melee fighter dealing Fire DMG. She slashes enemies with a chakram that deals Fire DMG. Some of her skills can inflict Ignite Trauma.",
                'image' => "New SP Battlesuit Chrono Navi Debuts.jpg",
                'banner' => "New SP Battlesuit Chrono Navi Debuts Banner.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Honkai Salvation Log coming soon!",
                'description' => "Honkai Honkai Salvation Log coming soon on the next update!",
                'detail' => "Hi Captains! The new event Honkai Salvation Log will be available after the v6.2 update, and Ai Hyperion Λ will travel in the digital space with you to fix the game of Honkai Impact 3rd. Honkai Salvation Log consists of 3 modules, and each contains 4 parts, namely, Salvage Operation, Module Space, Data Recovery and Vulnerability Deletion.",
                'image' => "Honkai Salvation Log coming soon!.jpg",
                'banner' => "Honkai Salvation Log coming soon! Banner.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New Story Chapter and Bonuses Event Coming Soon",
                'description' => "Play to new story chapter and grab all the bonus!",
                'detail' => "Hi Captains! In v6.2, we'll have bonuses event Beating Thunder, story event In the Name of the Truth and new event Cabbage Hide-and-seek. During v6.2, featured event Honkai Salvation Log, Story Chapter XXXIII, limited-time event Forbidden Area Battles and featured event Cabbage Hide-and-seek will be available in succession. Aside from event rewards, missions of bonuses event Beating Thunder will also be available. They include 1 login mission and 4 specific missions.",
                'image' => "New Story Chapter and Bonuses Event Coming Soon.jpg",
                'banner' => "New Story Chapter and Bonuses Event Coming Soon Banner.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "The Chrono and the Hare v6.2 Update Announcement",
                'description' => "New big events coming on the next update!",
                'detail' => "She neither belongs to the past nor comes from the future. She is just a special traveler. New SP Character Chrono Navi Debuts Bonuses event Beating Thunder will be available. Log in and complete specific event missions to get a Herrscher of Thunder Character Card! Featured event Honkai Salvation Log will be available! Fight alongside Ai to get Midnight Absinthe's new outfit Spectral Raven, Crystals, Chrono Navi Fragments and more. Story Chapter XXXIII will be available with the new area Final Crater as well as the new modes Remains of the Old World and Iron Mirage. Play the event to get Crystals, Chapter Stigma Option and more!",
                'image' => "The Chrono and the Hare v6.2 Update Announcement.jpg",
                'banner' => "The Chrono and the Hare v6.2 Update Announcement Banner.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "New S-rank Battlesuit Herrscher of Truth Debuts",
                'description' => "Herrscher of Truth coming on the v6.3 update!",
                'detail' => "Dear Captains, v6.3 Symphony of Truth is coming soon! Today's episode is all about the new S-rank battlesuit Herrscher of Truth! Read on to learn more! Herrscher of Truth is an S-rank IMG-type Ice-elemental battlesuit. She provides elemental boosts, has two forms to switch between, and dishes out Ice DMG! Pull Name of the Truth Expansion Supply drops to get Herrscher of Truth Character Card. After specific numbers of drops, Captains will receive bonus rewards such as Truth Metamorphosis Stigma Option and Wisdom Continuation Equipment Option.",
                'image' => "New S-rank Battlesuit Herrscher of Truth Debuts.png",
                'banner' => "New S-rank Battlesuit Herrscher of Truth Debuts Banner.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Story Chapter XXXIV Coming Soon",
                'description' => "New story chapter coming soon!",
                'detail' => "Dear Captain, the new story chapter The Moon's Origin and Finality will be released after the v6.3 update. The story progresses to a new stage, and a new mode called Chaotic Dimension will be introduced.",
                'image' => "Story Chapter XXXIV Coming Soon.png",
                'banner' => "Story Chapter XXXIV Coming Soon Banner.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Bustling Holiday Symphony: coming soon!",
                'description' => "Ai-chan;s Newsflash: Bustling Holiday Symphony: coming soon!",
                'detail' => "Captain, special event shop Truth Creation and featured event Bustling Holiday Symphony: will be released in v6.3! Play the event to get Crystals, Sweet 'n' Spicy's new outfit Freestyle Special and more! Please follow Ai-chan to check out their details. After the v6.3 update, play v6.3 events or permanent activities and complete missions on the event page to exchange for Crystals, Honkai Shards, Einstein's Torus and SC Metal-H2 in event shop Truth Creation.",
                'image' => "Bustling Holiday Symphony coming soon!.png",
                'banner' => "Bustling Holiday Symphony coming soon! Banner.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Gameplay Updates",
                'description' => "New gameplay updates coming on next patch!",
                'detail' => "Dear Captain, today Ai-chan will walk you through gameplay updates in v6.3! After the v6.3 update, Chip Space will have new Core Chip, Elemental Rush Core and Versatile Core!\r\n
                The mechanics of triggering Elemental Rush: The character can trigger Elemental Rush after dealing different Elemental DMG. The mechanics of triggering Versatility: Dealing DMG with a different type of attack (attack types include Basic ATK, Charged ATK, Combo ATK, QTE, Ultimate, weapon active) grants 1 stack of Versatility. Gain more stacks to provide buffs to team members on the field. After activating Versatile Core and Chip Synergy, you will get a new weapon active: Gaining stacks of Versatility grants Charge. Casting the weapon active consumes stacks of Versatility and Charge, improves the Elemental Breach and Physical Breach of team members on the field, and increases Total DMG dealt to enemies.",
                'image' => "Gameplay Updates.png",
                'banner' => "Gameplay Updates Banner.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
