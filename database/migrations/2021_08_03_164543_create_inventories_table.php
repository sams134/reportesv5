<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('coupling');
            $table->tinyInteger('conection_box');
            $table->tinyInteger('box_cover');
            $table->tinyInteger('vent_cover');
            $table->tinyInteger('vent');
            $table->tinyInteger('terminal_block');
            $table->tinyInteger('key');
            $table->tinyInteger('grease_point');
            $table->tinyInteger('eyebolts');
            $table->tinyInteger('nameplate');
            $table->tinyInteger('capacitor');
            $table->tinyInteger('bolts');
            $table->mediumText('comments');
            $table->unsignedBigInteger('job_id');

            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
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
        Schema::dropIfExists('inventories');
    }
}
