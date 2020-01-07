<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('puesto');
            $table->string('empresa');
            $table->string('ciudad');
            $table->string('duracion');
            $table->string('descripción');
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleo');
    }
}
