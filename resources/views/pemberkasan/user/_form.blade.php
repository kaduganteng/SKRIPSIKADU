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
                                                    <input type="file" name="kalender">
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
                                                    <input type="file" name="programtahunan">
                                                </td>
                                              
                                            </tr>


                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            
                            <div class="card-footer p-2">
                                <button type="submit " class="btn btn-info   btn-sm">SUBMIT</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

