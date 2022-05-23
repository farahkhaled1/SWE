<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateISkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_skills', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ilo_id')->index('ILO_id');
            $table->integer('content');
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
        Schema::dropIfExists('i_skills');
    }
}
