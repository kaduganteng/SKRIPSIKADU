<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    public $ket_schedule = [
        'Pagi (06:30-14:00)',
        'Non Kelas'
    ];

    public $status = [
        'Staff',
        'Guru',
    ];

    public $attendance = [
        'Hadir','Izin','Sakit','Alpha'
    ];
}
