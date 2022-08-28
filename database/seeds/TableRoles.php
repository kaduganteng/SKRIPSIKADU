<?php

use Illuminate\Database\Seeder;
use App\Models\Roles;

class TableRoles extends Seeder
{
    public function run()
    {
        $roles = [
            ['name'=>'admin', 'display_name'=>'Administrator'],
            ['name'=>'guru', 'display_name'=>'Guru'],
        ];
        foreach($roles as $row)
        {
            Roles::create($row);
        }
    }
}
