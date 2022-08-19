<?php

use Illuminate\Database\Seeder;
use App\Models\Master\Position;

class TablePosition extends Seeder
{
    public function run()
    {
        $position = [
            ['name'=>'Non Kelas', 'status'=>'Guru'],
            ['name'=>'Admin', 'status'=>'Staff'],
            ['name'=>'Kelas 1', 'status'=>'Guru'],
            ['name'=>'kelas 2', 'status'=>'Guru'],
            ['name'=>'kelas 3', 'status'=>'Guru'],
            ['name'=>'kelas 4', 'status'=>'Guru'],
            ['name'=>'kelas 5', 'status'=>'Guru'],
            ['name'=>'kelas 6', 'status'=>'Guru']
        ];
        foreach($position as $row)
        {
            Position::create($row);
        }
    }
}
