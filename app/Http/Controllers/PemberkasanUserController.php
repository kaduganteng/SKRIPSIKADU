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

        $silabus = $request->file('silabus');
        $nama_filesilabus = time() . "." . $silabus->getClientOriginalExtension();
        $tujuan = 'upload/';
        $silabus->move($tujuan, $nama_filesilabus);
        
        $kkm = $request->file('kkm');
        $nama_filekkm = time() . "." . $kkm->getClientOriginalExtension();
        $tujuan = 'upload/';
        $kkm->move($tujuan, $nama_filekkm); 
        
        $jadwalpembelajaran = $request->file('jadwalpembelajaran');
        $nama_filejadwalpembelajaran = time() . "." . $jadwalpembelajaran->getClientOriginalExtension();
        $tujuan = 'upload/';
        $jadwalpembelajaran->move($tujuan, $nama_filejadwalpembelajaran); 
        
        $rencanapembelajaran = $request->file('rencanapembelajaran');
        $nama_filerencanapembelajaran = time() . "." . $rencanapembelajaran->getClientOriginalExtension();
        $tujuan = 'upload/';
        $rencanapembelajaran->move($tujuan, $nama_filerencanapembelajaran); 
        
        $agendakegiatan = $request->file('agendakegiatan');
        $nama_fileagendakegiatan = time() . "." . $agendakegiatan->getClientOriginalExtension();
        $tujuan = 'upload/';
        $agendakegiatan->move($tujuan, $nama_fileagendakegiatan);
        
        $programevaluasi = $request->file('programevaluasi');
        $nama_fileprogramevaluasi = time() . "." . $programevaluasi->getClientOriginalExtension();
        $tujuan = 'upload/';
        $programevaluasi->move($tujuan, $nama_fileprogramevaluasi); 
        
        $programanalisis = $request->file('programanalisis');
        $nama_fileprogramanalisis = time() . "." . $programanalisis->getClientOriginalExtension();
        $tujuan = 'upload/';
        $programanalisis->move($tujuan, $nama_fileprogramanalisis); 
        
        $programperbaikan = $request->file('programperbaikan');
        $nama_fileprogramperbaikan = time() . "." . $programperbaikan->getClientOriginalExtension();
        $tujuan = 'upload/';
        $programperbaikan->move($tujuan, $nama_fileprogramperbaikan);
        
        $tugasstrukturdantidak = $request->file('tugasstrukturdantidak');
        $nama_filetugasstrukturdantidak = time() . "." . $tugasstrukturdantidak->getClientOriginalExtension();
        $tujuan = 'upload/';
        $tugasstrukturdantidak->move($tujuan, $nama_filetugasstrukturdantidak); 
        
        $programbimbingankonseling = $request->file('programbimbingankonseling');
        $nama_fileprogrambimbingankonseling = time() . "." . $programbimbingankonseling->getClientOriginalExtension();
        $tujuan = 'upload/';
        $programbimbingankonseling->move($tujuan, $nama_fileprogrambimbingankonseling); 
        
        $bukudaftarkelas = $request->file('bukudaftarkelas');
        $nama_filebukudaftarkelas = time() . "." . $bukudaftarkelas->getClientOriginalExtension();
        $tujuan = 'upload/';
        $bukudaftarkelas->move($tujuan, $nama_filebukudaftarkelas); 
        
        $daftarnilai = $request->file('daftarnilai');
        $nama_filedaftarnilai = time() . "." . $daftarnilai->getClientOriginalExtension();
        $tujuan = 'upload/';
        $daftarnilai->move($tujuan, $nama_filedaftarnilai);

        $pemberkasan = Pemberkasan::create([
            'id_user'=>Auth::user()->id,
            'kalender_pendidikan' => $nama_filekalender,
            'program_tahunan' => $nama_fileprogramtahunan,
            'silabus'=>$nama_filesilabus,
            'kkm'=>$nama_filekkm,
            'jadwal_pembelajaran'=>$nama_filejadwalpembelajaran,
            'rencana_pembelajaran'=>$nama_filerencanapembelajaran,
            'agenda_kegiatan'=>$nama_fileagendakegiatan,
            'program_evaluasi'=>$nama_fileprogramevaluasi,
            'program_analisis'=>$nama_fileprogramanalisis,
            'program_perbaikan'=>$nama_fileprogramperbaikan,
            'tugas_strukturdntidak'=>$nama_filetugasstrukturdantidak,
            'program_bimbingankonseling'=>$nama_fileprogrambimbingankonseling,
            'buku_daftarkelas'=>$nama_filebukudaftarkelas,
            'daftar_nilai'=>$nama_filedaftarnilai
        ]);
        return redirect()->back();
    }

}
