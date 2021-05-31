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
            $table->string('startime')->nulllable();
            $table->string('endtime')->nulllable();
            // $table->enum('workingday',['SANDAY','MONDAY','TUESDAY','WENESDAY',
            // 'THURSDAY','FRIDAY','SATURDAY'])->nulllable();
            $table->boolean('SANDAY')->nulllable()->default(0);
            $table->boolean('MONDAY')->nulllable();
            $table->boolean('TUESDAY')->nulllable();
            $table->boolean('WENESDAY')->nulllable();
            $table->boolean('THURSDAY')->nulllable();
            $table->boolean('FRIDAY')->nulllable();
            $table->boolean('SATURDAY')->nulllable();
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
