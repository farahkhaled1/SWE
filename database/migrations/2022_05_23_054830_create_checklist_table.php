<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist', function (Blueprint $table) {
            $table->integer('course_id');
            $table->integer('form_id')->index('formID');
            $table->integer('doctors_id');
            $table->string('semester', 50);

            $table->index(['course_id', 'doctors_id'], 'course_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklist');
    }
}
