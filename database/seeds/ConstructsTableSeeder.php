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
        $build1->Head = 'Faraam Helmet';
        $build1->Chest = 'Faraam Armor';
        $build1->Hands = 'Faraam Gauntlets';
        $build1->Legs = 'Faraam Boots';
        $build1->Ring1 = 'Havel\'s Ring';
        $build1->Ring2 = 'Ring of Favor';
        $build1->Ring3 = 'Chloranthy Ring';
        $build1->Ring4 = 'Ring of Steel Protection';
        $build1->RH1 = 'Lothric Knight Sword';
        $build1->LH1 = 'Lothric Knight Shield';
        $build1->save();

        $build2 = new \App\Construct;
        $build2->user_id = $connor->id;
        $build2->title = 'WIP';
        $build2->class = 'Sorcerer';
        $build2->gender = 'M';
        $build2->gift = 'Black Firebomb';
        $build2->covenant = 'moundmaker';
        $build2->soul_level = 150;
        $build2->save();
    }
}
