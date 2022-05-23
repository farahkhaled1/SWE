<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePPskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p&pskills', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ilo_id')->index('ilo_id');
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
        Schema::dropIfExists('p&pskills');
    }
}
