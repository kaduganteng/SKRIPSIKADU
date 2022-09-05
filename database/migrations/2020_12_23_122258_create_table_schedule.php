<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSchedule extends Migration
{
    public function up()
    {
        Schema::create('tb_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('staff_id');
            $table->enum('ket_schedule', ['Pagi(07:00-13:00)']);
            $table->enum('status', ['Staff','Guru']);
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('tb_staff')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_schedule');
    }
}
