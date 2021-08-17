<?php

use App\Models\Job;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('year',4);
            $table->string('os',5);
            $table->string('mfg',100)->nullable();
            
            $table->string('power',12)->nullable();
            $table->tinyInteger('hpkw')->default(Job::HP);
            $table->string('serial',100)->nullable();
            $table->string('model',100)->nullable();
            $table->string('rpm',20)->nullable();
            $table->string('frame',30)->nullable();
            $table->string('volts',20)->nullable();
            $table->string('amps',20)->nullable();
            $table->string('pf',10)->nullable();
            $table->string('hz',10)->nullable();
            $table->string('eff',12)->nullable();
            $table->string('insul',4)->nullable();
            $table->string('sf',5)->nullable();
            $table->dateTime('date_received');
            $table->dateTime('date_required')->nullable();

            
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->unsignedBigInteger('job_type_id')->nullable();

            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('set null');
            $table->foreign('job_type_id')->references('id')->on('job_types')->onDelete('set null');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::dropIfExists('jobs');
    }
}
