<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaalimusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waalimus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->integer('vacancy1');
            $table->integer('vacancy2');
            $table->integer('vacancy3');
            $table->integer('vacancy4');
            $table->integer('vacancy5');
            $table->integer('vacancy6');
            $table->integer('vacancy7');
            $table->integer('vacancy8');
            $table->integer('vacancy9');
            $table->integer('vacancy10');
            $table->integer('vacancy11');
            $table->integer('vacancy12');
            $table->integer('vacancy13');
            $table->integer('vacancy14');
            $table->integer('vacancy15');
            $table->integer('vacancy16');
            $table->integer('vacancy17');
            $table->integer('vacancy18');
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
        Schema::dropIfExists('waalimus');
    }
}
