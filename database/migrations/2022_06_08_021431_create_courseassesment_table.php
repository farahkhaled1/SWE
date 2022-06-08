<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseassesmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseassesment', function (Blueprint $table) {
            $table->string('ilos', 40);
            $table->string('attendance', 40);
            $table->string('participation', 40);
            $table->string('PreWrittenExam', 40);
            $table->string('PreResearch', 40);
            $table->string('PreOralExam', 40);
            $table->string('PrePresentation', 40);
            $table->string('PrePractical', 40);
            $table->string('MidWrittenExam', 40);
            $table->string('MidResearch', 40);
            $table->string('MidOralExam', 40);
            $table->string('MidPresentation', 40);
            $table->string('MidPractical', 40);
            $table->integer('id', true);
            $table->integer('prof_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courseassesment');
    }
}
