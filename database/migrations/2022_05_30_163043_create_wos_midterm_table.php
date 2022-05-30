<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWosMidtermTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wos_midterm', function (Blueprint $table) {
            $table->integer('written');
            $table->integer('labexam');
            $table->integer('quiz');
            $table->integer('total');
            $table->integer('id')->primary();
            $table->integer('spec_id')->index('spec_id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wos_midterm');
    }
}
