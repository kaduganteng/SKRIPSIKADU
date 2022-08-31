<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pemberkasan;
use App\Models\Master\Staff;
use App\Models\Master\Position;
use Auth;


class PemberkasanController extends Controller
{
    public function index()

    {   
        $staff = Staff::all();
        $pemberkasan= Pemberkasan::all();
        return view ('pemberkasan.index',[
            'pemberkasan'=> $pemberkasan,
            'staff'=>$staff,
            
        ]);
    }   
    public function detail($id)
    {
        $staff = Staff::find($id);
        $position = Position::find($id);
        $pemberkasan= Pemberkasan::find($id);
        return view ('pemberkasan.detail',[ 
            'pemberkasan'=> $pemberkasan,
            'staff'=>$staff,
            'position'=>$position
        ]);
    }
    
}
