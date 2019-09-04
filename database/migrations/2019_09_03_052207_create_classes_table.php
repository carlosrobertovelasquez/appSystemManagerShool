<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('academic_id')->unsigned();
            $table->foreign('academic_id')->references('id')->on('academics');   
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels');
            $table->integer('shift_id')->unsigned();
           $table->foreign('shift_id')->references('id')->on('shifts');
            $table->integer('time_id')->unsigned();
            $table->foreign('time_id')->references('id')->on('times');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->integer('batche_id')->unsigned();
            $table->foreign('batche_id')->references('id')->on('batches');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('active');
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
        Schema::dropIfExists('classes');
    }
}
