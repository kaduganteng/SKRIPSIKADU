<?php

namespace App\Http\Controllers;

use App\Models\Pointberkas;
use Illuminate\Http\Request;

class PointberkasController extends Controller
{
    public function create()
    {
     $data['title'] = "input Point Absensi";
     $pointberkas = Pointberkas::all();
     return view('pemberkasan.point.create',$data, [
         'pointberkas'=>$pointberkas
     ]);
    }
 
    public function store(Request $request)
    {
     $pointberkas = Pointberkas::create([
         'user_id'=>$request->user_id,
         'pointberkas'=>$request->pointberkas
     ]);
     $message = [
        'alert-type'=>'success',
        'message'=> 'Point Berhasil Di Input'
    ];
    return redirect()->route('pemberkasan.index')->with($message);
    }
}