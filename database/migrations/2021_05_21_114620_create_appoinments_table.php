<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppoinmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->DateTime('time')->nulllable();
            $table->String('day')->nulllable();
            $table->text('doctornote')->nulllable();
            $table->text('description')->nulllable();
            $table->enum('appoinmentstatus',['accept','reject'])->nulllable();
            $table->bigInteger('doctorid')->unsigned();
            $table->bigInteger('pateintid')->unsigned();
            $table->foreign('doctorid')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('pateintid')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('appoinments');
    }
}
