<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->double('user_id');
            $table->string('team');
            $table->longText('body')->nullable();
            $table->double('worth');
            $table->double('budget');
            $table->double('win')->nullable();
            $table->double('loss')->nullable();
            $table->double('tie')->nullable();
            $table->string('season');
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
        Schema::drop('teams');
    }
}
