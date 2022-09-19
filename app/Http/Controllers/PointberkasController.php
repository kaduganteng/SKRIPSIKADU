<?php

namespace App\Http\Controllers;

use App\Models\Pointberkas;
use Illuminate\Http\Request;

class PointberkasController extends Controller
{
    public function create()
    {
     $data['title'] = "input Point Absensi";
     $pointabsen = Pointberkas::all();
     return view('pemberkasan.point.create',$data, [
         'pointabsen'=>$pointabsen
     ]);
    }
 
    public function store(Request $request)
    {
     $pointabsen = Pointberkas::create([
         'user_id'=>$request->user_id,
         'pointabsen'=>$request->point_absen
     ]);
        
    }
}