<?php

use Illuminate\Database\Seeder;

class ConstructsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $connor = new \App\User;
        $connor->name = 'Connor';
        $connor->email = 'connor.mccarty.cm@gmail.com';
        $connor->password = bcrypt('secret');
        $connor->save();

        $build1 = new \App\Construct;
        $build1->user_id = $connor->id;
        $build1->title = 'Prototype';
        $build1->class = 'Knight';
        $build1->gender = 'M';
        $build1->gift = 'Fire Gem';
        $build1->covenant = 'warriorsofsunlight';
        $build1->soul_level = 120;
        $build1->Vgr = 40;
        $build1->Atn = 10;
        $build1->End = 40;
        $build1->Vit = 30;
        $build1->Str = 50;
        $build1->Dex = 20;
        $build1->Int = 10;
        $build1->Fth = 10;
        $build1->Luck = 10;
        $build1->Hol = 0;
        $build1->head = 'Faraam Helmet';
        $build1->chest = 'Faraam Armor';
        $build1->hands = 'Faraam Gauntlets';
        $build1->legs = 'Faraam Boots';
        $build1->ring1 = 'Havel\'s Ring';
        $build1->ring2 = 'Ring of Favor';
        $build1->ring3 = 'Chloranthy Ring';
        $build1->ring4 = 'Ring of Steel Protection';
        $build1->rh1 = 'Lothric Knight Sword';
        $build1->lh1 = 'Lothric Knight Shield';
        $build1->lh2 = 'Pyromancy Flame';
        $build1->save();

        $build2 = new \App\Construct;
        $build2->user_id = $connor->id;
        $build2->title = 'WIP';
        $build2->class = 'Sorcerer';
        $build2->gender = 'M';
        $build2->gift = 'Black Firebomb';
        $build2->covenant = 'moundmaker';
        $build2->soul_level = 150;
        $build2->Vgr = 30;
        $build2->Atn = 30;
        $build2->End = 10;
        $build2->Vit = 20;
        $build2->Str = 10;
        $build2->Dex = 10;
        $build2->Int = 50;
        $build2->Fth = 20;
        $build2->Luck = 30;
        $build2->Hol = 99;
        $build2->head = 'Crown of Dusk';
        $build2->chest = 'Sorcerer Robe';
        $build2->hands = 'Sorcerer Gloves';
        $build2->legs = 'Sorcerer Trousers';
        $build2->ring1 = 'Magic Clutch Ring';
        $build2->ring2 = 'Ring of Favor';
        $build2->ring3 = 'Sage Ring';
        $build2->ring4 = 'Lingering Dragoncrest Ring';
        $build2->rh1 = 'Moonlight Greatsword';
        $build2->lh1 = 'Sorcerer\'s Catalyst';
        $build2->save();
    }
}
