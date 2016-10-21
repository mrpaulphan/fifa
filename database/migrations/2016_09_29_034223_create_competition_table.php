<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('save_id')->unsigned();
          $table->string('name');
          $table->string('type');
          $table->integer('played');
          $table->integer('won');
          $table->integer('tied');
          $table->integer('lost');
          $table->string('result');
          $table->timestamps();
          $table->foreign('save_id')
              ->references('id')
              ->on('saves')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
