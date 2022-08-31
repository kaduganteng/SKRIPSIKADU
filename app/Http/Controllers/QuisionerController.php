<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quisioner;
use App\Models\Master\Staff;
use App\Models\Master\Position;
use DB;


class QuisionerController extends Controller
{
  public function index(Request $request)
  {  $staff=Staff::all();
     $quisioner= Quisioner::all();
      return view('quisioner.index',[
        'quisioner'=> $quisioner
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
}
