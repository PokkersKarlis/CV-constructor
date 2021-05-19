<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{

    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('school');
            $table->string('school_level');
            $table->string('school_status');
            $table->date('school_startDate');
            $table->date('school_endDate')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('educations');
    }
}
