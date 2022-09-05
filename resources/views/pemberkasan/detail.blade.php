@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.6-rc.1/dist/css/select2.min.css">
@endsection
@section('content')
    <div class="content-wrapper pb-3">
    <div class="content-header">
            <div class="container-fluid">
                <form>
                    <div class="form-inline">
                        <div class="input-group app-shadow">
                            <div class="input-group-append">
                                <div class="input-group-text bg-white border-0">
                                    <span><i class="fa fa-search"></i> </span>
                                </div>
                            </div>
                            <input type="search" placeholder="Search" aria-label="Search..." class="form-control input-flat border-0" id="search"> 
                        </div> 
                        <a href="{{ route('pemberkasanuser.create') }}" class="btn btn-default d-none d-md-inline-block ml-auto">
                            <i class="fas fa-plus fa-sm fa-fw"></i> Input Berkas
                        </a>
                    </div>
                </form>
            </div>                
        </div>
        <div class="content pb-5 pt-3">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                <div class="card-header bg-light"> 
                                        <div class="float-left offset-5 pt-1">
                                        <span class="d-none d-md-block d-lg-block">PEMBERKASAN</span>
                                        </div>
                                        <h3 class="card-title back-top" style="margin-top: 5px;">
                                        <a href="{{ route('pemberkasan.index') }}" title="Kembali" data-toggle="tooltip" data-placement="right" class="btn text-muted">
                                            <i class="fa fa-arrow-left fa-fw"></i></span>
                                        </a>
                                        </h3>
                                    </div> 
                                
                                        <div class="container-fluid row p-2" style="font-size: 14px;">
                                        <div class="col-md-9 p-0">
                                            <table class="table no-border header-table mb-0" style="white-space: normal;">
                                                <tr style="line-height: 1px;">
                                                <td style="width: 100px;">
                                                <table class="table no-border header-table mb-0 ml-2 mt-2">
                                            <tr style="line-height: 1px;">
                                                <td width="100">Nama</td>
                                                <td width="10" class="text-center">:</td>
                                                <td>{{ $staff->name }}</td>
                                            </tr>
                                            <tr style="line-height: 1px;">
                                                <td width="100">Jabatan</td>
                                                <td width="10" class="text-center">:</td>
                                                <td>{{ $staff->position_id }}</td>
                                            </tr>
                                            </table>
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
                                                <td colspan="3"style="vertical-align : middle;width: 5px;">Nama Berkas</td>
                                                <td style="vertical-align : middle;white-space:normal;width: auto; height: auto;word-wrap: break-word;">Berkas</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                    Kalender Pendidikan
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->kalender_pendidikan) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->kalender_pendidikan}}
                                                </a>
                                                </td>
                                              
                                            </tr>

                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Program Tahunan
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->program_tahunan) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->program_tahunan}}
                                                </a>
                                                </td>
                                             
                                            </tr>

                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Silabus
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->silabus) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->silabus}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   KKM
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->kkm) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->kkm}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Jadwal Pembelajaran
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->jadwal_pembelajaran) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->jadwal_pembelajaran}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Rencana Pembelajaran
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->rencana_pembelajaran) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->rencana_pembelajaran}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    7
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Agenda Kegiatan
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->agenda_kegiatan) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->agenda_kegiatan}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    8
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Program TEvaluasi
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->program_evaluasi) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->program_evaluasi}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    9
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Program Analisis
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->program_analisis) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->program_analisis}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    10
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Program Perbaikan
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->program_perbaikan) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->program_perbaikan}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                   11
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Tugas Struktur dan Tidak 
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->tugas_strukturdntidak) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->tugas_strukturdntidak}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    12
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Program Bimbingan Konseling
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->program_bimbingankonseling) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->program_bimbingankonseling}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    13
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Buku Daftar Kelas
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->buku_daftarkelas) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->buku_daftarkelas}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                                <td>
                                                    14
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                   Daftar Nilai
                                                </td>
                                                <td colspan="3"style="text-align: center;">
                                                <a href="{{ asset('upload/' . $pemberkasan->daftar_nilai) }}" class="fancybox" data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                                            {{$pemberkasan->daftar_nilai}}
                                                </a>
                                                </td>
                                             
                                            </tr> <tr>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

