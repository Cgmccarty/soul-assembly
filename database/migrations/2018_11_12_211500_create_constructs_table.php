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
            $table->enum('covenant', ['warriorsofsunlight', 'wayofblue', 'bluesentinels', 'bladesofthedarkmoon', 'rosariasfingers', 'moundmaker', 'watchdogsoffarron', 'aldrichfaithful', 'spearsofthechurch'])->nullable();
            $table->unsignedInteger('soul_level');
            $table->string('Head', 100)->nullable();
            $table->string('Chest', 100)->nullable();
            $table->string('Hands', 100)->nullable();
            $table->string('Legs', 100)->nullable();
            $table->string('Ring1', 100)->nullable();
            $table->string('Ring2', 100)->nullable();
            $table->string('Ring3', 100)->nullable();
            $table->string('Ring4', 100)->nullable();
            $table->string('RH1', 100)->nullable();
            $table->string('RH2', 100)->nullable();
            $table->string('RH3', 100)->nullable();
            $table->string('LH1', 100)->nullable();
            $table->string('LH2', 100)->nullable();
            $table->string('LH3', 100)->nullable();
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
