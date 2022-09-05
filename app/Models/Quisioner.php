<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quisioner extends Model
{
    protected $table = 'tb_quisioner';
    protected $fillable = [
        'guru_id',
        'posisi_id',
        'point1',
        'point2',
        'point3',
        'point4',
        'point5',
        'masukan',
        'totalpoint'
        
    ];
}
