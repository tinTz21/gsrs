<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitabusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitabus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->integer('mahitaji');
            $table->integer('vilivyopo');
            $table->integer('mahitaji1');
            $table->integer('vilivyopo1');
            $table->integer('mahitaji2');
            $table->integer('vilivyopo2');
            $table->integer('mahitaji3');
            $table->integer('vilivyopo3');
            $table->integer('mahitaji4');
            $table->integer('vilivyopo4');
            $table->integer('mahitaji5');
            $table->integer('vilivyopo5');
            $table->integer('mahitaji6');
            $table->integer('vilivyopo6');
            $table->integer('mahitaji7');
            $table->integer('vilivyopo7');
            $table->integer('mahitaji8');
            $table->integer('vilivyopo8');
            $table->integer('mahitaji9');
            $table->integer('vilivyopo9');
            $table->integer('mahitaji10');
            $table->integer('vilivyopo10');
            $table->integer('mahitaji11');
            $table->integer('vilivyopo11');
            $table->integer('mahitaji12');
            $table->integer('vilivyopo12');
            $table->integer('mahitaji13');
            $table->integer('vilivyopo13');
            $table->integer('mahitaji14');
            $table->integer('vilivyopo14');
            $table->integer('mahitaji15');
            $table->integer('vilivyopo15');
            $table->integer('mahitaji16');
            $table->integer('vilivyopo16');
            $table->integer('mahitaji17');
            $table->integer('vilivyopo17');
            $table->integer('mahitaji18');
            $table->integer('vilivyopo18');
            $table->integer('mahitaji19');
            $table->integer('vilivyopo19');
            $table->integer('mahitaji20');
            $table->integer('vilivyopo20');
            $table->integer('mahitaji21');
            $table->integer('vilivyopo21');
            $table->integer('mahitaji22');
            $table->integer('vilivyopo22');
            $table->integer('mahitaji23');
            $table->integer('vilivyopo23');
            $table->integer('mahitaji24');
            $table->integer('vilivyopo24');
            $table->integer('mahitaji25');
            $table->integer('vilivyopo25');
            $table->integer('mahitaji26');
            $table->integer('vilivyopo26');
            $table->integer('mahitaji27');
            $table->integer('vilivyopo27');
            $table->integer('mahitaji28');
            $table->integer('vilivyopo28');
            $table->integer('mahitaji29');
            $table->integer('vilivyopo29');
            $table->integer('mahitaji30');
            $table->integer('vilivyopo30');
            $table->integer('mahitaji31');
            $table->integer('vilivyopo31');
            $table->integer('mahitaji32');
            $table->integer('vilivyopo32');
            $table->integer('mahitaji33');
            $table->integer('vilivyopo33');
            $table->integer('mahitaji34');
            $table->integer('vilivyopo34');
            $table->integer('mahitaji35');
            $table->integer('vilivyopo35');
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
        Schema::dropIfExists('vitabus');
    }
}
