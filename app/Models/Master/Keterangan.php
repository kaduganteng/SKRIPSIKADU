<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    public $ket_schedule = [
        'Pagi(07:00-13:00)',
    ];

    public $status = [
        'Staff',
        'Guru',
    ];

    public $attendance = [
        'Hadir','Izin','Sakit'
    ];
}
