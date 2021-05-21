<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkigndaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workigndays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->DateTime('startime')->nulllable();
            $table->DateTime('endtime')->nulllable();
            $table->enum('workingday',['SANDAY','MONDAY','TUESDAY','WENESDAY',
            'THURSDAY','FRIDAY','SATURDAY'])->nulllable();
            $table->text('note')->nulllable();
            $table->bigInteger('doctorid')->unsigned();
            $table->foreign('doctorid')->references('id')->on('doctors')->onDelete('cascade');
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
        Schema::dropIfExists('workigndays');
    }
}
