<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemberkasan extends Model
{
 protected $table = 'tb_pemberkasan';
 protected $fillable = [
    'id_user',
    'kalender_pendidikan',
    'program_tahunan',
    'silabus',
    'kkm',
    'jadwal_pembelajaran',
    'rencana_pembelajaran',
    'agenda_kegiatan',
    'program_evaluasi',
    'program_analisis',
    'program_perbaikan',
    'tugas_strukturdntidak',
    'program_bimbingankonseling',
    'buku_daftarkelas',
    'daftar_nilai'
         ];
}
