<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quisioner extends Model
{
    protected $table = 'quisioner';
    protected $fillable = [
        'guru_id',
        'point1',
        'point2',
        'point3',
        'point4',
        'point5'
        
    ];
}
