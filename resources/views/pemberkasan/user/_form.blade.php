@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.6-rc.1/dist/css/select2.min.css">
@endsection
@section('content')
    <div class="content-wrapper pb-3">
        <div class="content pb-5 pt-3">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h3 class="card-title back-top" style="margin-top: 5px;">
                                    <a href="{{ route('pemberkasanuser.index') }}" title="Kembali" data-toggle="tooltip" data-placement="right" class="btn text-muted">
                                        <i class="fa fa-arrow-left fa-fw"></i></span>
                                    </a>
                                </h3>
                                <div class="float-left offset-5 pt-1">
                                    <span class="d-none d-md-block d-lg-block">INPUT PEMBERKASAN</span>
                                </div>
                                
                            </div> 
                            <div class="container-fluid row p-2" style="font-size: 14px;">
                                <div class="col-md-9 p-0">
                                    <table class="table no-border header-table mb-0" style="white-space: normal;">
                                        <tr style="line-height: 1px;">
                                            <td style="width: 100px;"></td>
                                           
                                           
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <form action="{{route ('pemberkasanuser.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="table-responsive">
                                <div class="card-body p-0">
                                    <table class="table table-bordered mb-0" style="font-size: 14px;">
                                        <tbody>
                                            
                                            <tr class="text-center bg-light" style="font-weight: bold;line-height: 1;">
                                            <td  style="vertical-align : middle; white-space: normal; width:50px; text-align: center;">NO</td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">Nama Berkas</td>
                                             
                                                    <td style="vertical-align : middle;white-space:normal;
                                                    width: auto;
                                                    height: auto;
                                                    word-wrap: break-word;">Berkas</td>
                                           
                                               
                                            </tr>
                                       
                                       
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Kalender Pendidikan
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->kalender_pendidikan == null)
                                                        <input type="file" name="kalender" >
                                                    @else 
                                                        <input type="text" class="form-control" name="kalender" value="{{$pemberkasan->kalender_pendidikan}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Program Tahunan
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->program_tahunan == null)
                                                    <input type="file" name="programtahunan" >
                                                    @else 
                                                        <input type="text" class="form-control" name="programtahunan" value="{{$pemberkasan->program_tahunan}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr>

                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Silabus
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->silabus == null)
                                                    <input type="file" name="silabus" >
                                                    @else 
                                                        <input type="text" class="form-control" name="silabus" value="{{$pemberkasan->silabus}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    KKM
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->kkm == null)
                                                    <input type="file" name="kkm" >
                                                    @else 
                                                        <input type="text" class="form-control" name="kkm" value="{{$pemberkasan->kkm}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Jadwal Pembelajaran
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->jadwal_pembelajaran == null)
                                                    <input type="file" name="jadwalpembelajaran" >
                                                    @else 
                                                        <input type="text" class="form-control" name="jadwalpembelajaran" value="{{$pemberkasan->jadwal_pembelajaran}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Rencana Pembelajaran
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->rencana_pembelajaran == null)
                                                    <input type="file" name="rencanapembelajaran" >
                                                    @else 
                                                        <input type="text" class="form-control" name="rencanapembelajaran" value="{{$pemberkasan->rencana_pembelajaran}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    7
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Agenda Kegiatan
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->agenda_kegiatan == null)
                                                    <input type="file" name="agendakegiatan" >
                                                    @else 
                                                        <input type="text" class="form-control" name="agendakegiatan" value="{{$pemberkasan->agenda_kegiatan}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    8
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Program Evaluasi
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->program_evaluasi == null)
                                                    <input type="file" name="programevaluasi" >
                                                    @else 
                                                        <input type="text" class="form-control" name="programevaluasi" value="{{$pemberkasan->program_evaluasi}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    9
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Program Analisis
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->program_analisis == null)
                                                    <input type="file" name="programanalisis" >
                                                    @else 
                                                        <input type="text" class="form-control" name="programanalisis" value="{{$pemberkasan->program_analisis}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    10
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Program Perbaikan
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->program_perbaikan == null)
                                                    <input type="file" name="programperbaikan" >
                                                    @else 
                                                        <input type="text" class="form-control" name="programperbaikan" value="{{$pemberkasan->program_perbaikan}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    11
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Tugas Struktur dan Tidak
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->tugas_strukturdantidak == null)
                                                    <input type="file" name="tugasstrukturdantidak" >
                                                    @else 
                                                        <input type="text" class="form-control" name="tugasstrukturdantidak" value="{{$pemberkasan->tugas_strukturdantidak}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    12
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Program Bimbingan Konseling
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->program_bimbingankonseling == null)
                                                    <input type="file" name="programbimbingankonseling" >
                                                    @else 
                                                        <input type="text" class="form-control" name="programbimbingankonseling" value="{{$pemberkasan->program_bimbingankonseling}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    13
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Buku Daftar Kelas
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->buku_daftarkelas == null)
                                                    <input type="file" name="bukudaftarkelas" >
                                                    @else 
                                                        <input type="text" class="form-control" name="bukudaftarkelas" value="{{$pemberkasan->buku_daftarkelas}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr> <tr>
                                                <td>
                                                    14
                                                </td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">
                                                    Daftar Nilai
                                                </td>
                                                <td>
                                                    @if(!$pemberkasan || $pemberkasan->daftar_nilai == null)
                                                    <input type="file" name="daftarnilai" >
                                                    @else 
                                                        <input type="text" class="form-control" name="daftarnilai" value="{{$pemberkasan->daftar_nilai}}" readonly>
                                                    @endif
                                                </td>
                                              
                                            </tr>


                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            
                            <div class="card-footer p-2">
                                <button type="submit" class="btn btn-primary mr-1"><i class="fas fa-check-double mr-1"></i> Simpan</button> 
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

