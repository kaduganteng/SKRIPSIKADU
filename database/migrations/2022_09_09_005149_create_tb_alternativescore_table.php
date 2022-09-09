<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlternativescoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_alternativescore', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alternative_id');
            $table->foreign('alternative_id')->references('id')->on('tb_alternatives');
            $table->unsignedBigInteger('criteria_id');
            $table->foreign('criteria_id')->references('id')->on('tb_criteriaweights');
            $table->unsignedBigInteger('rating_id');
            $table->foreign('rating_id')->references('id')->on('tb_criteriaratings');
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
        Schema::dropIfExists('tb_alternativescore');
    }
}
