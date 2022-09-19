<?php

namespace App\Http\Controllers;

use App\Models\Pointabsen;
use Illuminate\Http\Request;

class PointabsenController extends Controller
{
   public function create()
   {
    $data['title'] = "input Point Absensi";
    $pointabsen = Pointabsen::all();
    return view('absensi.point.create',$data, [
        'pointabsen'=>$pointabsen
    ]);
   }

   public function store(Request $request)
   {
    $pointabsen = Pointabsen::create([
        'user_id'=>$request->U,
        'pointabsen'=>$request->pointabsen
    ]);
    $message = [
        'alert-type'=>'success',
        'message'=> 'Point Berhasil Di Input'
    ];
    return redirect()->route('master.absensi.index')->with($message);
   }
}
