<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHudumasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hudumas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usafiri');
            $table->string('firstaid');
            $table->string('ulinzi');
            $table->string('duka');
            $table->string('unasihi');
            $table->string('mtandao');
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
        Schema::dropIfExists('hudumas');
    }
}
