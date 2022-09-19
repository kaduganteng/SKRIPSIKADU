<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemberkasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pemberkasan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('jabatan');
            $table->string('kalender_pendidikan')->nullable();
            $table->string('program_tahunan')->nullable();
            $table->string('silabus')->nullable();
            $table->string('kkm')->nullable();
            $table->string('jadwal_pembelajaran')->nullable();
            $table->string('rencana_pembelajaran')->nullable();
            $table->string('agenda_kegiatan')->nullable();
            $table->string('program_evaluasi')->nullable();
            $table->string('program_analisis')->nullable();
            $table->string('program_perbaikan')->nullable();
            $table->string('tugas_strukturdntidak')->nullable();
            $table->string('program_bimbingankonseling')->nullable();
            $table->string('buku_daftarkelas')->nullable();
            $table->string('daftar_nilai')->nullable();
            $table->string('pointpemberkasan')->nullable()->default(0);
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
        Schema::dropIfExists('pemberkasan');
    }
}
