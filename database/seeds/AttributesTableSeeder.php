<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $build1 = \App\Construct::where('id', 1)->first();

        $stats = new \App\Attribute;
        $stats->construct_id = $build1->id;
        $stats->Vgr = 40;
        $stats->Atn = 10;
        $stats->End = 40;
        $stats->Str = 50;
        $stats->Dex = 20;
        $stats->Int = 10;
        $stats->Fth = 10;
        $stats->Luck = 10;
        $stats->save();

        $build2 = \App\Construct::where('id', 2)->first();

        $stats = new \App\Attribute;
        $stats->construct_id = $build2->id;
        $stats->Vgr = 30;
        $stats->Atn = 30;
        $stats->End = 10;
        $stats->Str = 10;
        $stats->Dex = 10;
        $stats->Int = 50;
        $stats->Fth = 20;
        $stats->Luck = 30;
        $stats->save();
    }
}
