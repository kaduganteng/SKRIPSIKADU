<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quisioner;
use App\Models\Master\Staff;
use App\Models\Master\Position;
use DB;


class QuisionerController extends Controller
{
  public function index()
  {   
      $quisioner= DB::table('tb_quisioner')->selectRaw('tb_staff.name,sum(point1+point2+point3+point4+point5) as totalpoint,tb_position.name as posisi')
      ->join('tb_staff','tb_staff.id','=','tb_quisioner.guru_id')->join('tb_position','tb_position.id','=','tb_quisioner.posisi_id')
      ->groupBy('tb_staff.name')->get();
      return view ('quisioner.index',[
        'quisioner'=> $quisioner
    ]);
  }

  public function detail()
  {
    
   
    $quisioner= Quisioner::join('tb_staff','tb_staff.id','=','tb_quisioner.guru_id')->get();
     return view('quisioner.detail',[
       'quisioner'=> $quisioner,
     ]);
  }

  public function create()
  { $data['title'] = "QUISIONER";
    $staff = Staff::all();
    $posisi = Position::all();
    
    return view ('quisioner.create',$data,[
        'staff'=>$staff,
        'posisi'=>$posisi
        
    ]);
  }

  public function store(Request $request)
  { 
    $quisioner = Quisioner::create([
        'guru_id'=>$request->guru_id,
        'posisi_id'=>$request->posisi_id,
        'point1'=>$request->point1,
        'point2'=>$request->point2,
        'point3'=>$request->point3,
        'point4'=>$request->point4,
        'point5'=>$request->point5,
        'masukan'=>$request->masukan  
    ]);

    return redirect()->back();

  }

  public function destroy($id)
    {
        $quisioner = Quisioner::destroy($id);
        return redirect()->back();
    }
}
