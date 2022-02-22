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
        Schema::create('curriculum', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('street');
            $table->string('cep');
            $table->integer('number');
            $table->string('complement');
            $table->string('state');
            $table->string('city');
            $table->date('birthday');
            $table->string('phone');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('gender');
            $table->boolean('is_employed');
            $table->boolean('is_deficient');
            $table->boolean('have_cnh');
            $table->string('cnh_type');
            $table->string('salary_expectation');
            $table->string('hiring_type');
            $table->string('desired_function');
            $table->string('schooling');
            $table->string('formation');
            $table->string('educational_institution');
            $table->bigInteger('occupied_jobs_id')->unsigned();
            $table->foreignId('occupied_jobs_id')->references('id')->on('occupied_jobs');
            $table->bigInteger('courses_id')->unsigned();
            $table->foreignId('courses_id')->references('id')->on('courses');
            $table->string('additional_considerations');
            $table->string('curriculum_photo_url');
            $table->string('found_us');
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
        Schema::dropIfExists('curriculum');
    }
};
