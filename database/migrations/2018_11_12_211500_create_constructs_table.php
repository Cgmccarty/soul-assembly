<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstructsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title', 100);
            $table->enum('class', ['Knight', 'Mercenary', 'Warrior', 'Herald', 'Thief', 'Assassin', 'Sorcerer', 'Pyromancer', 'Cleric', 'Deprived']);
            $table->enum('gender', ['M', 'F']);
            $table->string('gift', 50)->nullable();
            $table->enum('covenant', ["Warriors of Sunlight", "Way of Blue", "Blue Sentinels", "Blades of the Darkmoon", "Rosarias Fingers", "Mound Maker", "Watchdogs of Farron", "Aldrich Faithful", "Spears of the Church"])->nullable();
            $table->unsignedInteger('soul_level');
            $table->unsignedSmallInteger('Vgr');
            $table->unsignedSmallInteger('Atn');
            $table->unsignedSmallInteger('End');
            $table->unsignedSmallInteger('Vit');
            $table->unsignedSmallInteger('Str');
            $table->unsignedSmallInteger('Dex');
            $table->unsignedSmallInteger('Int');
            $table->unsignedSmallInteger('Fth');
            $table->unsignedSmallInteger('Luck');
            $table->unsignedSmallInteger('Hol');
            $table->string('head', 100)->nullable();
            $table->string('chest', 100)->nullable();
            $table->string('hands', 100)->nullable();
            $table->string('legs', 100)->nullable();
            $table->string('ring1', 100)->nullable();
            $table->string('ring2', 100)->nullable();
            $table->string('ring3', 100)->nullable();
            $table->string('ring4', 100)->nullable();
            $table->string('rh1', 100)->nullable();
            $table->string('rh2', 100)->nullable();
            $table->string('rh3', 100)->nullable();
            $table->string('lh1', 100)->nullable();
            $table->string('lh2', 100)->nullable();
            $table->string('lh3', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constructs');
    }
}
