<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileFinger extends Model
{
    protected $table = 'tb_filefinger';
    protected $fillable = ['tanggal_absen','file_finger',];
}
