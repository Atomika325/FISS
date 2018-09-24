<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availability', function (Blueprint $table) {
            $table->string('fac_id')->primary();
            $table->foreign('fac_id')->references('faculty_id')->on('professor_profiles');
            $table->string('mon-start-time');
            $table->string('mon-end-time');
            $table->string('tue-start-time');
            $table->string('tue-end-time');
            $table->string('wed-start-time');
            $table->string('wed-end-time');
            $table->string('thu-start-time');
            $table->string('thu-end-time');
            $table->string('fri-start-time');
            $table->string('fri-end-time');
            $table->string('sat-start-time');
            $table->string('sat-end-time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('availability');
    }
}
