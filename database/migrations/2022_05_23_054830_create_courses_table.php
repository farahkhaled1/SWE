<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->integer('code', true);
            $table->string('title', 50);
            $table->string('semester', 50);
            $table->string('programme');
            $table->string('department_offering');
            $table->string('department_teaching');
            $table->integer('year');
            $table->integer('level');
            $table->string('approval_date');
            $table->integer('credit_hours');
            $table->integer('practical');
            $table->integer('lectures');
            $table->integer('total');
            $table->string('Prerequisite');
            $table->integer('coordinator_id')->index('coordinator_id');
            $table->string('assistant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
