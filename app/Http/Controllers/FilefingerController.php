<?php

namespace App\Http\Controllers;

use App\Models\FileFinger;
use Illuminate\Http\Request;

class FilefingerController extends Controller
{
    public function index()
    {
        $filefinger = FileFinger::all();
        return view('filefinger.index',[
            'filefinger'=>$filefinger
        ]);
    }

    public function create()
    {
        $data['title'] = "Tambah Data Finger Print";
        $data['position'] = Filefinger::all();
        return view('filefinger.create', $data);
    }

    public function store(Request $request)
    {

        $fingerprint = $request->file('file_finger');
        $nama_filefingerprint = time() . "_" . $fingerprint->getClientOriginalName();
        $tujuan = 'upload/';
        $fingerprint->move($tujuan, $nama_filefingerprint);

        $filefinger = Filefinger::create([
            'tanggal_absen'=>$request->tanggal_absen,
            'file_finger'=>$request->file_finger
        ]);
        $message = [
            'alert-type'=>'success',
            'message'=> 'Point Berhasil Di Input'
        ];
        return redirect()->route('filefinger.index')->with($message);
    }
}
