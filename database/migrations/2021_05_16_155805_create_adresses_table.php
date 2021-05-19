<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{

    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('country');
            $table->string('city');
            $table->string('street')->nullable();
            $table->bigInteger('house_number')->nullable();
            $table->bigInteger('flat_number')->nullable();
            $table->string('home_name')->nullable();
            $table->string('postal_code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
