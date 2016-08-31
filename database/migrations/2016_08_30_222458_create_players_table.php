<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
          $table->increments('id');
          $table->string('position');
          $table->string('name');
          $table->double('age');
          $table->double('overall');
          $table->double('appearances');
          $table->double('goals');
          $table->double('assists');
          $table->double('joined');
          $table->decimal('form');
          $table->string('contract');
          $table->string('nationality');
          $table->double('value');
          $table->double('wages');
          $table->string('status');
          $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players');
    }
}
