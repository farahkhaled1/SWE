<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWosParticipationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wos_participation', function (Blueprint $table) {
            $table->integer('written');
            $table->integer('labexam');
            $table->integer('quiz');
            $table->integer('total');
            $table->integer('id', true);
            $table->integer('spec_id')->index('spec_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wos_participation');
    }
}
