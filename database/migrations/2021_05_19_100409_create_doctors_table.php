<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('fname')->nulllable();
            $table->String('lname')->nulllable();
            $table->bigInteger('clinicid')->nulllable()->unique();
            $table->text('addressclnic')->nulllable();
            $table->enum('spicilization',['Endodontictreatment','bridges','jawsurgery','orthodontics'])->nulllable();
            $table->DateTime('birth')->nulllable();
            $table->String('image')->nulllable();
            $table->enum('gender',['FM','M'])->nulllable();
            $table->String('email')->nulllable();
            $table->String('password')->nulllable();
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
        Schema::dropIfExists('doctors');
    }
}
