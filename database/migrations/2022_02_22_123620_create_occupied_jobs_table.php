<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupied_jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_jobs_id')->unsigned();
            $table->foreign('user_jobs_id')->references('id')->on('curriculum');
            $table->string('occupied_job');
<<<<<<< HEAD
            $table->string('company_segment');
            $table->float('experience_time');
=======
            $table->float('experience_time');
            $table->string('company_segment');
>>>>>>> e133c00 (testando primeira vez no commit)
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
        Schema::dropIfExists('occupied_jobs');
    }
};
