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
          $table->integer('user_id');
          $table->string('name');
          $table->string('season');
          $table->string('status')->default('First Team');
          $table->string('position');
          $table->integer('age');
          $table->integer('overall');
          $table->integer('appearances')->nullable();
          $table->integer('goals')->nullable();
          $table->integer('assists')->nullable();
          $table->integer('joined')->nullable();
          $table->decimal('form')->nullable();
          $table->string('contract')->nullable();
          $table->string('nationality')->nullable();
          $table->integer('value')->nullable();
          $table->integer('wages')->nullable();
          $table->integer('potential_low')->nullable();
          $table->integer('potential_high')->nullable();
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
