<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('construct_id');
            $table->foreign('construct_id')->references('id')->on('constructs');
            $table->unsignedSmallInteger('Vgr');
            $table->unsignedSmallInteger('Atn');
            $table->unsignedSmallInteger('End');
            $table->unsignedSmallInteger('Str');
            $table->unsignedSmallInteger('Dex');
            $table->unsignedSmallInteger('Int');
            $table->unsignedSmallInteger('Fth');
            $table->unsignedSmallInteger('Luck');
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
        Schema::dropIfExists('attributes');
    }
}
