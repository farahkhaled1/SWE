<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warnings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('users_id')->index('users_id');
            $table->integer('form_id')->index('form_id');
            $table->string('warning_message', 100);
            $table->date('date');
            $table->string('semester', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warnings');
    }
}
