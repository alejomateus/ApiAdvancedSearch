<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffenderCrimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offender_crime', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_offender')->unsigned();
            $table->foreign('id_offender')->references('id')->on('offender');
            $table->integer('id_crime')->unsigned();
            $table->foreign('id_crime')->references('id')->on('crime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offender_crime');
    }
}
