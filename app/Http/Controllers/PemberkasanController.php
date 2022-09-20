<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pemberkasan;
use App\Models\Master\Staff;
use App\Models\Master\Position;
use App\Models\Pointberkas;
use Auth;


class PemberkasanController extends Controller
{
    public function index()

    {   $pointberkas = Pointberkas::all();
        $pemberkasan= Pemberkasan::join('tb_staff','tb_staff.id','=','tb_pemberkasan.id_user')->get();
        return view ('pemberkasan.index',[
            'pemberkasan'=> $pemberkasan,
            'pointberkas'=> $pointberkas
        ]);
    }   

    public function tambahpoint(Request $request, $id)
    {
        // $point = Pemberkasan::find($id);
        // $point->pointpemberkasan = $request->input('pointpemberkasan');
        // $point->update();
        // return redirect()->back();
    
        $user = Pemberkasan::find($request->id);

        $user->pointpemberkasan = $request->pointpemberkasan;

        $user->save();

  

        return response()->json(['success'=>'Status change successfully.']);
        // $id_user = Pemberkasan::where('id_user',$id); 

        // $point = Pemberkasan::find($id_user);

        // $point->pointpemberkasan = $request->input('pointpemberkasan');
  
        // $point->update();
        // return redirect()->back();
    }
    public function detail($id)
    {
        $staff = Staff::find($id);
        $position = Position::find($id);
        $pemberkasan = Pemberkasan::find($id);
        // dd($pemberkasan);
        return view ('pemberkasan.detail',compact('pemberkasan','staff','position'));
       
    }
    
}
