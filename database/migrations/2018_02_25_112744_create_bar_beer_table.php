<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarBeerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bar_beer', function (Blueprint $table) {
            $table->integer('bar_id')->unsigned()->nullable();
            $table->foreign('bar_id')->references('id')->on('bars');
            $table->integer('beer_id')->unsigned();
            $table->foreign('beer_id')->references('id')->on('beers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bar_beer');
    }
}
