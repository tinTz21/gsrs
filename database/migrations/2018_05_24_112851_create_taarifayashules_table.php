<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaarifayashulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taarifayashules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jinalashule');
            $table->integer('phone');
            $table->string('mkoa');
            $table->string('anwani');
            $table->string('nukushi');
            $table->string('halmashauri');
            $table->string('mji');
            $table->string('baruapepe');
            $table->string('kata');
            $table->string('usajili');
            $table->date('tareheusajili');
            $table->string('umilikiwashule');
            $table->string('mmiliki');
            $table->string('shuleilipo');
            $table->integer('km');
            $table->string('malazi');
            $table->string('jinsia');
            $table->string('mchepuo');
            $table->string('kidato');
            $table->string('ainashule');
            $table->string('eneo');
            $table->string('hati');
            $table->integer('hatinamba');
            $table->date('hatitarehe');
            $table->integer('mitazamraba');
            $table->integer('latitude');
            $table->integer('longitude');
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
        Schema::dropIfExists('taarifayashules');
    }
}
