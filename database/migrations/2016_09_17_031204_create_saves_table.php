<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('career_id')->unsigned();
            $table->boolean('activated')->default(false);
            $table->integer('season')->nullable();
            $table->string('name')->nullable();
            $table->string('color')->default('default');
            $table->integer('manager_popularity')->nullable();
            $table->integer('continental_objective')->nullable();
            $table->integer('domestic_objective')->nullable();
            $table->integer('brand_objective')->nullable();
            $table->integer('financial_objective')->nullable();
            $table->integer('youth_objective')->nullable();
            $table->integer('club_worth')->nullable();
            $table->integer('transfer_budget')->nullable();
            $table->integer('earnings')->nullable();
            $table->integer('expenses')->nullable();
            $table->timestamps();

            $table->foreign('career_id')
                ->references('id')
                ->on('careers')
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
        Schema::drop('saves');

    }
}
