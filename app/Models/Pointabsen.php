<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pointabsen extends Model
{
    protected $table = 'tb_pointabsen';
    protected $fillable = [
        'user_id',
        'pointabsen',
    ];
}
