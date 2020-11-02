<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->date('bod');
            $table->foreignId('dnitype_id');
            $table->string('dni');
            $table->foreignId('gender_id')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->foreignId('user_id');
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('dnitype_id')->references('id')->on('documents');
            $table->foreign('gender_id')->references('id')->on('genders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
