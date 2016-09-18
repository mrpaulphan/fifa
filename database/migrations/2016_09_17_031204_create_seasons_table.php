<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('save_id');
            $table->integer('season')->default('2016');
            $table->string('name')->default('--');
            $table->string('color');
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
        //
    }
}
