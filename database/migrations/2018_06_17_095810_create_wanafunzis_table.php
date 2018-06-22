<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWanafunzisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wanafunzis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->integer('wavulana');
            $table->integer('wasichana');
            $table->integer('total');
            $table->integer('wavulana1');
            $table->integer('wasichana1');
            $table->integer('total1');
            $table->integer('wavulana2');
            $table->integer('wasichana2');
            $table->integer('total2');
            $table->integer('wavulana3');
            $table->integer('wasichana3');
            $table->integer('total3');
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
        Schema::dropIfExists('wanafunzis');
    }
}
