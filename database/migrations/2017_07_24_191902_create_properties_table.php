<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('status');
            $table->string('type');
            $table->integer('area');
            $table->string('images');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->integer('zip');
            $table->text('description');
            $table->integer('bedroom');
            $table->integer('kitchen');
            $table->integer('bathroom');
            $table->integer('dinningroom');
            $table->integer('drawingroom');
            $table->integer('garage');
            $table->tinyInteger('swimmingpool');
            $table->tinyInteger('gym');
            $table->tinyInteger('firesafety');
            $table->tinyInteger('garden');
            $table->tinyInteger('guesthouse');
            $table->tinyInteger('centralheating');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('properties');
    }
}
