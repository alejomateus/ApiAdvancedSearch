<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offender', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('first_lastname');
            $table->string('second_lastname');
            $table->string('num_id');
            $table->date('birthdate');
            $table->enum('gender', ['masculino', 'femenino']);
            $table->integer('id_city')->unsigned();
            $table->foreign('id_city')->references('id')->on('city');
            $table->string('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offender');
    }
}
