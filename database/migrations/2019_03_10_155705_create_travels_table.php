<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country'); //country of travel
            $table->string('city'); //city of travel
            $table->string('content'); //travel content
            $table->text('description'); //travel description
            $table->date('startDate'); //Departures date
            $table->Integer('price'); //travel price
            $table->Integer('maxNum'); //Maximum number of candidates
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
        Schema::dropIfExists('travels');
    }
}
