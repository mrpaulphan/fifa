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
            $table->double('save_id');
            $table->double('season')->default('2016');
            $table->string('team_color');
            $table->string('team_name')->default('--');
            $table->string('domestic_objective')->default('--');
            $table->string('continental_objective')->default('--');
            $table->string('brand_objective')->default('--');
            $table->string('financial_objective')->default('--');
            $table->string('youth_objective')->default('--');
            $table->integer('club_worth')->default('0');
            $table->integer('transfer_budget')->default('0');
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
