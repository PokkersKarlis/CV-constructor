<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{

    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('company');
            $table->string('position');
            $table->string('stack');
            $table->date('job_start_date');
            $table->date('job_end_date')->nullable();
            $table->text('description');
            $table->string('job_condition');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
