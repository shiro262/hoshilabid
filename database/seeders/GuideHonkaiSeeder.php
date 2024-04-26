<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuideHonkaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guide_honkais')->insert([
            [
                'title' => "Game Progression & Navigation In Honkai Impact",
                'zone' => "Beginner Guide",
                'detail' =>
                "Each time you log in, you will be brought to the central hub and briefed with your daily rewards and different events taking place in the game. Stocking up on these daily freebie materials is a great way to get a head start when it comes time to undergo upgrades and enhancements for your Valkyrie.\r\n
                On the central hub, there are four main buttons on the right side of the screen. These are “Attack,” “Valkyrja,” “Equipment,” and “Supply.” Here's what they do.\r\n
                Attack:\r\n
                The Attack button will take you to the story page where you can view your progress, collect Challenge Rewards for completed sets of Story Stages, and select the next Story Stage to undertake.
                By completing Story Stages, you will gain experience towards your Captain Level and level up the Valkyrja who participated in the completed stage. Raising your Captain level allows you to advance through further story missions.\r\n
                The Valkyrja:\r\n
                The Valkyrja button will take you to your valkyrie ranks, where you can manage the skills, weapons, and stigmata of each one as they level up. You can also level them up manually from this page if they aren’t progressing fast enough through experience alone.As they level up, Valkyrie will unlock new skills and be able to upgrade ones already in effect. They will also need to keep up to date with the latest weapon upgrades and enhancements, which we’ll get to a bit later.\r\n
                Equipment:\r\n
                The Equipment button will take you to your inventory, where you can view your arsenal of weaponry, along with your stigmata and valkyrie fragment collections and material stoors. This is where you’ll be able to run some inventory. For instance, under the Weapons and Stigmata tabs, you’ll be able to quickly analyze which are in use and see any new ones that have come in to ensure all your Valkyrie are equipped with the best gear and support. Sometimes it’s nice to be able to take stock of all the earnings that have flashed by as they accumulate through missions, achievements, and other rewards.\r\n
                Supply:\r\n
                The Supply button will take you to the in-game shop and supply tabs. Supply is Honkai’s gacha feature, the gumball lottery-style mechanic for obtaining new characters. There is the standard Dorm Supply along with several others, including limited-time event Supply draws that cycle in and out. Each Supply Draw offers the chance to pull slightly different material rewards. These all cost crystals, Honkai Impact’s primary premium currency, and pulling single draws will eat your earnings up quickly. But by investing in an x10 rewards draw, you’ll be guaranteed to pull a specific number or rank of Valkyrie, weapons, or stigmas. This is why we suggest saving up. If you’re playing the game regularly and are prudent about stockpiling your crystals, you’ll likely be able to pull one of the x10 rewards draws at least once, if not twice a week.",
                'image' => "Game Progression & Navigation In Honkai Impact.png",
                'banner' => "Game Progression & Navigation In Honkai Impact Banner.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "Battle Mechanics In Honkai Impact",
                'zone' => "Beginner Guide",
                'detail' => "Honkai Impact 3rd follows a Rock paper scissors-style battle system, with each Valkyrie categorized as a particular type. The three types you’ll learn about first are Biologic (Bio), Psychic (Psy), and Mecha (Mech). They interact with each other as such:\r\n
                - Biologic is effective against Psychic\r\n
                - Psychic is effective against Mecha\r\n
                - Mecha is effective against Biologic\r\n
                There is also Quantum (QUA) and Imaginary (IMG), which aren’t especially effective or susceptible to any of the other three but have unique, powerful skills and awestriking maneuvers.\r\n
                You will enter Story Stages with a team of three Valkyrja. Inactive team members will be listed on the right of your screen during the battle for you to swap in and out according to their strengths and weaknesses.\r\n
                With the gacha-based character collection, you’re going to have a lot of Valkyrie to choose from, so you can focus on a few favorites once you’ve accrued more. You’ll want to get a feel for each Valkyrie’s battle style and learn their different attacks and combos. By familiarizing yourself with how each of your preferred Valkyrie handles, you’ll be able to utilize them better on the battlefield. You’ll also be able to team them up more effectively.\r\n
                Teamwork is very important in Honkai Impact 3rd. There are special maneuvers that allow you to execute a swap and strike tactic. To make the attack most effective, you need to properly position for the swap and have an idea of what the Valkyrie swapping in is going to strike with. For instance, Bronya’s special attack draws enemies together, then allows for another valkyrie to switch in to cause massive damage to the entrapped enemies. But, if you swap in a valkyrie whose type is ineffective against those enemy types, you will have wasted big maneuver for little results.\r\n
                Aside from knowing your Valkyrie and their type efficiencies, the only other fundamental aspect to master is evasive timing. The game’s tutorial will teach you this pretty thoroughly, and that’s because it’s a mighty helpful tactic to nail down from the outset. When a pink bar of light animation flashes across the enemy, tap the evade button to dodge the attack. A perfectly timed dodge will trigger a time freeze, allowing you to light into the enemies for some massive damage.\r\n
                Remember to collect your Challenge Rewards for completing sets of Story Stages to keep replenishing materials for the upgrades and enhancements you’ll need to keep progressing.",
                'image' => "Battle Mechanics In Honkai Impact.jpg",
                'banner' => "Battle Mechanics In Honkai Impact Banner.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => "The Valkyrja",
                'zone' => "Beginner Guide",
                'detail' => "How To Get Valkyrja:\r\n
                Primarily you will pull Valkyrie from Supply Draws. This is why it’s best to save your crystals to spend on x10 drawing sprees to guarantee your chances of a new Valkyrie. You will also obtain new Valkyrie for completing random Story Stages or be rewarded with them for other various leveling or achievement milestones.\r\n
                Preparing Valkyrja For Battle:\r\n
                While they level up through experience, you will have to manage your Valkyries’ various upgrades and enhancements. This boils down to their weapons, skills, and stigmata.\r\n
                Weapons: Enhancing weapons levels them up while upgrading them will boost their star rating. Upgrading weapons can also give them new skills.\r\n
                Skills: As we mentioned earlier, Valkyrie will unlock new skills as they level up. These are essentially passive skills that either bolster the Valkyrie’s active skills or automatically take effect when the Valkyrie performs a certain action. You’ll need to activate and upgrade them with gold, but this is a relatively easy aspect of the game to keep on top of. Just remember to scan for new skills on The Valkyrja page each time a valkyrie levels up.\r\n
                Stigmata: Though they wear many faces, Stimata are essentially stat boosts that offer better stats when equipped in sets of the same stigma. Their star rating also affects their effectiveness. Stigmas with better star ratings are generally sought out over making a matching set. But you’ll also want to make sure the stigma’s boosts will bolster the skillset of the Valkyrie you’re equipping it to. If the stigma doesn’t provide the right kind of support, there is little point in equipping it at all.",
                'image' => "The Valkyrja.png",
                'banner' => "The Valkyrja Banner.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
