<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpenCoursesDesailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_courses_datails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('open_course_id');
            $table->foreignId('student_id');
            $table->date('inscription');
            $table->longText('note');
            $table->timestamps();

            $table->foreign('open_course_id')->references('id')->on('open_courses');
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('open_courses_datails');
    }
}
