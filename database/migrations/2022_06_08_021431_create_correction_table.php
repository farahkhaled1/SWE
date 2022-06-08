<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correction', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('users_id');
            $table->integer('form_id');
            $table->string('correction_comment', 50);

            $table->index(['users_id', 'form_id'], 'users_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('correction');
    }
}
