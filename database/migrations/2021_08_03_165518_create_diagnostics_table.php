<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mechanical_failure_mode_id')->nullable();
            $table->foreign('mechanical_failure_mode_id')->references('id')->on('mechanical_failure_modes')->onDelete('set null');
            $table->unsignedBigInteger('electrical_failure_mode_id')->nullable();
            $table->foreign('electrical_failure_mode_id')->references('id')->on('electrical_failure_modes')->onDelete('set null');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('set null');
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
        Schema::dropIfExists('diagnostics');
    }
}
