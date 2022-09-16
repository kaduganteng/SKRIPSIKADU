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
        $pemberkasan= Pemberkasan::join('tb_staff','tb_staff.id','=','tb_pemberkasan.id_user')->get();
        return view ('pemberkasan.index',[
            'pemberkasan'=> $pemberkasan
        ]);
    }   

    public function tambahpoint(Request $request, $id_user)
    {
        $point = Pemberkasan::find($id_user);
        $point->pointpemberkasan = $request->input('pointpemberkasan');
        $point->update();
        return redirect()->back();
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
