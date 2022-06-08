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
            $table->integer('id', true);
            $table->string('written', 121)->nullable();
            $table->string('labexam', 12)->nullable();
            $table->string('quiz', 120)->nullable();
            $table->string('total', 111)->nullable();
            $table->string('spec_id', 111)->nullable()->index('spec_id_2');
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
