<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor_profiles', function (Blueprint $table) {
            $table->string('fname')->primary;
            $table->string('lname');
            $table->string('faculty_id');
            $table->string('email')->unique;
            $table->integer('contact_no');
            $table->string('last-school-attended');
            $table->string('pref-subj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professor_profiles');
    }
}
