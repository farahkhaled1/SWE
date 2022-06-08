<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_forms', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('course_id');
            $table->integer('form_id');
            $table->string('image', 200);
            $table->string('semester', 100);

            $table->index(['course_id', 'form_id'], 'course_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_forms');
    }
}
