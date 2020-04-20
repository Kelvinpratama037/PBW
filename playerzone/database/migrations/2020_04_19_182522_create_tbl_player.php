<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //membuat table dalam database
        Schema::create('tblplayer',function(Blueprint $table){
            $table->increments('id');
            $table->String('nickname');
            $table->String('game');
            $table->integer('umur');
            $table->String('negara');
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
        //
    }
}
