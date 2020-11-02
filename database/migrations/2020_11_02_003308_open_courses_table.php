<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OpenCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id');
            $table->string('description');
            $table->date('date_strat');
            $table->date('date_finish');
            $table->integer('duration');
            $table->foreignId('employee_id');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('open_courses');
    }
}
