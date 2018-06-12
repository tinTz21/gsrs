<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiundoMbinusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miundombinus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class');
            $table->integer('class1');
            $table->integer('chair');
            $table->integer('chair1');
            $table->integer('table');
            $table->integer('table1');
            $table->integer('toilet');
            $table->integer('toilet1');
            $table->integer('boys');
            $table->integer('boys1');
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
        Schema::dropIfExists('miundombinus');
    }
}
