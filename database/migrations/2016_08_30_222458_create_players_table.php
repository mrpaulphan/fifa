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
          $table->double('user_id');
          $table->string('name');
          $table->string('season');
          $table->string('status')->default('First Team');
          $table->string('position');
          $table->double('age');
          $table->double('overall');
          $table->double('appearances')->nullable();
          $table->double('goals')->nullable();
          $table->double('assists')->nullable();
          $table->double('joined')->nullable();
          $table->decimal('form')->nullable();
          $table->string('contract')->nullable();
          $table->string('nationality')->nullable();
          $table->double('value')->nullable();
          $table->double('wages')->nullable();
          $table->double('potential_low')->nullable();
          $table->double('potential_high')->nullable();
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
