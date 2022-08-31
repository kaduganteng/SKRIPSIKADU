<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuisionerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_quisioner', function (Blueprint $table) {
            $table->id();
            $table->string('guru_id');
            $table->string('posisi_id');
            $table->string('point1');
            $table->string('point2');
            $table->string('point3');
            $table->string('point4');
            $table->string('point5');
            $table->string('masukan');
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
        Schema::dropIfExists('quisioner');
    }
}
