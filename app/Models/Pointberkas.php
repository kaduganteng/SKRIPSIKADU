<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pointberkas extends Model
{
    protected $table = 'tb_pointberkas';
    protected $fillable = [
        'user_id',
        'pointberkas',
    ];
}
