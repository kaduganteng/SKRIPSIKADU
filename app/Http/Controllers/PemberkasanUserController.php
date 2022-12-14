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
        $data['pemberkasan'] = Pemberkasan::where('id_user',Auth::user()->id)->first();
        return view('pemberkasan.user.create', $data);
    }
    public function store (Request $request)
    {
        $getdata= Pemberkasan::where('id_user',Auth::user()->id)->first();

        if ($request->file('kalender') != null ) {
                $kalender = $request->file('kalender');
                $nama_filekalender = time() . "_" . $kalender->getClientOriginalName();
                $tujuan = 'upload/';
                $kalender->move($tujuan, $nama_filekalender);    
        }
        elseif($request->kalender != null){
            $nama_filekalender = $getdata->kalender_pendidikan;
        }
        else{
            $nama_filekalender = null;
        }

        //programtahunan
        if($request->file('programtahunan') != null ){
                $programtahunan = $request->file('programtahunan');
                $nama_fileprogramtahunan = time() . "." . $programtahunan->getClientOriginalName();
                $tujuan = 'upload/';
                $programtahunan->move($tujuan, $nama_fileprogramtahunan);
        }
        elseif($request->programtahunan != null){
            $nama_fileprogramtahunan = $getdata->program_tahunan;
        }
        else{
            $nama_fileprogramtahunan = null;
        }

        //silabus
        if($request->file('silabus') !=null){
                $silabus = $request->file('silabus');
                $nama_filesilabus = time() . "." . $silabus->getClientOriginalName();
                $tujuan = 'upload/';
                $silabus->move($tujuan, $nama_filesilabus);
            }
        elseif($request->silabus != null){
                $nama_filesilabus = $getdata->silabus;
        }
        else{
            $nama_filesilabus = null;
        }

        //kkm
        if($request->file('kkm') != null){
            $kkm = $request->file('kkm');
                $nama_filekkm = time() . "." . $kkm->getClientOriginalName();
                $tujuan = 'upload/';
                $kkm->move($tujuan, $nama_filekkm); 
            }
        elseif($request->kkm != null){
                $nama_filekkm = $getdata->kkm;
        }
        else{
            $nama_filekkm = null;
        }
       
        //jadwalpembelajaran
        if($request->file('jadwalpembelajaran') !=null){
                $jadwalpembelajaran = $request->file('jadwalpembelajaran');
                $nama_filejadwalpembelajaran = time() . "." . $jadwalpembelajaran->getClientOriginalName();
                $tujuan = 'upload/';
                $jadwalpembelajaran->move($tujuan, $nama_filejadwalpembelajaran); 
            }
        elseif($request->jadwalpembelajaran != null){
                $nama_filejadwalpembelajaran = $getdata->jadwal_pembelajaran;
        }
        else{
            $nama_filejadwalpembelajaran = null;
        }
       
        
        //reancanapembelajaran
        if($request->file('rencanapembelajaran')!=null){
                $rencanapembelajaran = $request->file('rencanapembelajaran');
                $nama_filerencanapembelajaran = time() . "." . $rencanapembelajaran->getClientOriginalName();
                $tujuan = 'upload/';
                $rencanapembelajaran->move($tujuan, $nama_filerencanapembelajaran); 
            }
        elseif($request->rencanapembelajaran != null){
                $nama_filerencanapembelajaran = $getdata->rencana_pembelajaran;
        }
        else{
            $nama_filerencanapembelajaran = null;
        }
      
        //agendakegiatan
        if($request->file('agendakegiatan') !=null){
                $agendakegiatan = $request->file('agendakegiatan');
                $nama_fileagendakegiatan = time() . "." . $agendakegiatan->getClientOriginalName();
                $tujuan = 'upload/';
                $agendakegiatan->move($tujuan, $nama_fileagendakegiatan);
            }
        elseif($request->agendakegiatan != null){
                $nama_fileagendakegiatan = $getdata->agenda_kegiatan;
        }
        else{
            $nama_fileagendakegiatan = null;
        }
       
        //programevaluasi
        if($request->file('programevaluasi') != null){
                $programevaluasi = $request->file('programevaluasi');
                $nama_fileprogramevaluasi = time() . "." . $programevaluasi->getClientOriginalName();
                $tujuan = 'upload/';
                $programevaluasi->move($tujuan, $nama_fileprogramevaluasi); 
            }
        elseif($request->programevaluasi != null){
                $nama_fileprogramevaluasi = $getdata->program_evaluasi;
        }
        else{
            $nama_fileprogramevaluasi = null;
        }

        //programanalisis
        if($request->file('programanalisis') !=null){            
                $programanalisis = $request->file('programanalisis');
                $nama_fileprogramanalisis = time() . "." . $programanalisis->getClientOriginalName();
                $tujuan = 'upload/';
                $programanalisis->move($tujuan, $nama_fileprogramanalisis);
            }
        elseif($request->programanalisis != null){
                $nama_fileprogramanalisis = $getdata->program_analisis;
        }
        else{
            $nama_fileprogramanalisis = null;
        }

        //programperbaikan
        if($request->file('programperbaikan')!=null){            
                $programperbaikan = $request->file('programperbaikan');
                $nama_fileprogramperbaikan = time() . "." . $programperbaikan->getClientOriginalName();
                $tujuan = 'upload/';
                $programperbaikan->move($tujuan, $nama_fileprogramperbaikan);
            }
        elseif($request->programperbaikan != null){
                $nama_fileprogramperbaikan = $getdata->program_perbaikan;
        }
        else{
            $nama_fileprogramperbaikan = null;
        }

        //tugasstrukturdantidak
        if($request->file('tugasstrukturdantidak')!=null){          
                $tugasstrukturdantidak = $request->file('tugasstrukturdantidak');
                $nama_filetugasstrukturdantidak = time() . "." . $tugasstrukturdantidak->getClientOriginalName();
                $tujuan = 'upload/';
                $tugasstrukturdantidak->move($tujuan, $nama_filetugasstrukturdantidak);
            } 
        elseif($request->tugasstrukturdantidak != null){
                $nama_filetugasstrukturdantidak = $getdata->tugas_strukturdantidak;
        }
        else{
            $nama_filetugasstrukturdantidak = null;
        }
       
        //programbimbingankonseling
        if($request->file('programbimbingankonseling') !=null){
                $programbimbingankonseling = $request->file('programbimbingankonseling');
                $nama_fileprogrambimbingankonseling = time() . "." . $programbimbingankonseling->getClientOriginalName();
                $tujuan = 'upload/';
                $programbimbingankonseling->move($tujuan, $nama_fileprogrambimbingankonseling);
            }
        elseif($request->programbimbingankonseling != null){
                $nama_fileprogrambimbingankonseling = $getdata->program_bimbingankonseling;
        }
        else{
            $nama_fileprogrambimbingankonseling = null;
        }    

        //bukudaftarkelas
        if($request->file('bukudaftarkelas')!=null){
                $bukudaftarkelas = $request->file('bukudaftarkelas');
                $nama_filebukudaftarkelas = time() . "." . $bukudaftarkelas->getClientOriginalName();
                $tujuan = 'upload/';
                $bukudaftarkelas->move($tujuan, $nama_filebukudaftarkelas); 
            }
        elseif($request->bukudaftarkelas != null){
                $nama_filebukudaftarkelas = $getdata->buku_daftarkelas;
        }
        else{
            $nama_filebukudaftarkelas = null;
        }
      
        //dafatrnilai
        if($request->file('daftarnilai')!=null){
            $daftarnilai = $request->file('daftarnilai');
            $nama_filedaftarnilai = time() . "." . $daftarnilai->getClientOriginalName();
            $tujuan = 'upload/';
            $daftarnilai->move($tujuan, $nama_filedaftarnilai);
            }
        elseif($request->daftarnilai != null){
                $nama_filedaftarnilai = $getdata->daftar_nilai;
        }
        else{
            $nama_filedaftarnilai = null;
        }  
        

        if($getdata==null){
            Pemberkasan::create([
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
            $message = [
                'alert-type'=>'success',
                'message'=> 'Data Pemberkasan berhasil ditambahkan'
            ];  
            return redirect()->route('pemberkasanuser.index')->with($message);
        }
        else{
            $getdata->update([
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
            $message = [
                'alert-type'=>'success',
                'message'=> 'Data Pemberkasan berhasil ditambahkan'
            ];  
            return redirect()->route('pemberkasanuser.index')->with($message);
        }
    }

    public function edit()
    {
        $data['title'] = "Edit Berkas";
        $data['pemberkasan'] = Pemberkasan::all();
        return view('pemberkasan.user.edit', $data);
    }

    public function update(Request $request)
    {
        # code...
    }
}
