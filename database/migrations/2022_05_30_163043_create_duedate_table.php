<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuedateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duedate', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('form_id');
            $table->integer('course_id');
            $table->integer('users_id');
            $table->date('due_date');
            $table->string('semester', 50);

            $table->index(['form_id', 'course_id', 'users_id'], 'form_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duedate');
    }
}
