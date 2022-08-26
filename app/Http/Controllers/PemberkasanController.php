<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pemberkasan;
use Auth;
class PemberkasanController extends Controller
{
    public function index()
    {   $pemberkasan= Pemberkasan::where('id_user',Auth::user()->id)->get();
        return view ('pemberkasan.index',[
            'pemberkasan'=> $pemberkasan
        ]);
    }

    public function create()
    {
        $data['title'] = "Input Berkas";
        $data['pemberkasan'] = Pemberkasan::all();
        return view('pemberkasan.create', $data);
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
    public function indexuser()
    {
       $pemberkasan= Pemberkasan::where('id_user',Auth::user()->id)->get();
       return view ('pemberkasan.indexuser',[
        'pemberkasan'=> $pemberkasan
       ]);
    }
}
