<?php

use Illuminate\Database\Seeder;
use App\Models\Master\Departement;

class TableDepartement extends Seeder
{
    public function run()
    {
        $departement = [
            ['name'=>'Kepala Sekolah'],
            ['name'=>'Wali Kelas'],
            ['name'=>'Staff']
        ];
        foreach($departement as $row)
        {
            Departement::create($row);
        }
    }
}
