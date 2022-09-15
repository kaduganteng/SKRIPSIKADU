<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pemberkasan;
use App\Models\Master\Staff;
use App\Models\Master\Position;
use Auth;


class PemberkasanController extends Controller
{
    public function index(Request $request)

    {   
        $pemberkasan= Pemberkasan::join('tb_staff','tb_staff.id','=','tb_pemberkasan.id_user')->get();
        $pointberkas=Pemberkasan::create([
            'pointpemberkasan'=>$request->pointpemberkasan
            ]);
        return view ('pemberkasan.index',[
            'pemberkasan'=> $pemberkasan
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
