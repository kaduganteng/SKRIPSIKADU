<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pemberkasan;
use App\Models\Master\Staff;
use Auth;


class PemberkasanController extends Controller
{
    public function index()

    {   
        $staff = Staff::all();
        $pemberkasan= Pemberkasan::all();
        return view ('pemberkasan.index',[
            'pemberkasan'=> $pemberkasan,
            'staff'=>$staff
        ]);
    }   
}
