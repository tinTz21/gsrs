<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiongozisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kiongozis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->integer('mahitaji');
            $table->integer('vilivyopo');
            $table->integer('mahitaji1');
            $table->integer('vilivyopo2');
            $table->integer('mahitaji3');
            $table->integer('vilivyopo4');
            $table->integer('mahitaji4');
            $table->integer('vilivyopo5');
            $table->integer('mahitaji6');
            $table->integer('vilivyopo7');
            $table->integer('mahitaji8');
            $table->integer('vilivyopo9');
            $table->integer('mahitaji10');
            $table->integer('vilivyopo11');
            $table->integer('mahitaji12');
            $table->integer('vilivyopo13');
            $table->integer('mahitaji14');
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
            $table->integer('mahitaji36');
            $table->integer('vilivyopo36');
            $table->integer('mahitaji37');
            $table->integer('vilivyopo37');
            $table->integer('mahitaji38');
            $table->integer('vilivyopo38');
            $table->integer('mahitaji39');
            $table->integer('vilivyopo39');
            $table->integer('mahitaji40');
            $table->integer('vilivyopo40');
            $table->integer('mahitaji41');
            $table->integer('vilivyopo41');
            $table->integer('mahitaji42');
            $table->integer('vilivyopo42');
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
        Schema::dropIfExists('kiongozis');
    }
}
