<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medicine_name');
            $table->integer('syndrome_id')->unsigned();
            $table->foreign('syndrome_id')->references('id')->on('add_syndromes');
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
        Schema::drop('add_medicines');
    }
}
