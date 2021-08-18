<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRough1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rough1s', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('sessionId');
            $table->integer('level_1');
            $table->integer('level_2');
            $table->integer('level_3');
            $table->integer('level_4');
            $table->integer('level_5');
            $table->integer('level_6');
            $table->integer('level_7');
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
        Schema::dropIfExists('rough1s');
    }
}
