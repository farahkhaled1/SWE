<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignassessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignassessment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('prof_id');
            $table->string('ilo', 240);
            $table->string('assignNum', 105);
            $table->string('assignTitle', 240);
            $table->string('AssessmentCriteria', 240);
            $table->string('gradesWeight', 240);
            $table->string('issueDate');
            $table->string('DueDate');
            $table->string('comments', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignassessment');
    }
}
