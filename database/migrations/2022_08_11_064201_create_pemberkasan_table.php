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
            $table->string('kalender_pendidikan');
            $table->string('program_tahunan');
            $table->string('silabus');
            $table->string('kkm');
            $table->string('jadwal_pembelajaran');
            $table->string('rencana_pembelajaran');
            $table->string('agenda_kegiatan');
            $table->string('program_evaluasi');
            $table->string('program_analisis');
            $table->string('program_perbaikan');
            $table->string('tugas_strukturdntidak');
            $table->string('program_bimbingankonseling');
            $table->string('buku_daftarkelas');
            $table->string('daftar_nilai');
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
