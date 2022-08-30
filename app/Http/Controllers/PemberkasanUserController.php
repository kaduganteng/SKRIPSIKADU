<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemberkasan;
use App\Models\Master\Staff;
use Auth;

class PemberkasanUserController extends Controller
{
    public function index()
    {  $staff = Staff::where('id',Auth::user()->id)->get();
       $pemberkasan= Pemberkasan::where('id_user',Auth::user()->id)->get();
        if  (!empty($pemberkasan)) { 
            return view ('pemberkasan.user.index',[
                'pemberkasan'=> $pemberkasan,
                'staff'=>$staff
               ]);
        } 
        else {
        return abort (404);
        }


      
    }

    public function create()
    {
        $data['title'] = "Input Berkas";
        $data['pemberkasan'] = Pemberkasan::all();
        return view('pemberkasan.user.create', $data);
    }
    public function store (Request $request)
    {
        $kalender = $request->file('kalender');
        $nama_filekalender = time() . "_" . $kalender->getClientOriginalExtension();
        $tujuan = 'upload/';
        $kalender->move($tujuan, $nama_filekalender);

        $programtahunan = $request->file('programtahunan');
        $nama_fileprogramtahunan = time() . "." . $programtahunan->getClientOriginalExtension();
        $tujuan = 'upload/';
        $programtahunan->move($tujuan, $nama_fileprogramtahunan);

        $pemberkasan = Pemberkasan::create([
            'id_user'=>Auth::user()->id,
            'kalender_pendidikan' => $nama_filekalender,
            'program_tahunan' => $nama_fileprogramtahunan
        ]);
        
        return redirect()->back();
    }

}
