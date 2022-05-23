<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKUTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k&u', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ilo_id')->index('ILO_id');
            $table->string('content', 200);
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
        Schema::dropIfExists('k&u');
    }
}
