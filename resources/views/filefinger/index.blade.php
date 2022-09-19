@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset ('css/sweetalert.css') }}">
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
                        <a href="{{ route('filefinger.create') }}" class="btn btn-default d-none d-md-inline-block ml-auto">
                            <i class="fas fa-eye fa-sm"></i> Input File
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="content pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-light">
                                <a href="{{ route('absensi.index') }}" title="Kembali" data-toggle="tooltip" data-placement="right" class="btn text-muted">
                                    <i class="fa fa-arrow-left fa-fw"></i></span>
                                </a>
                                Data File FingerPrint
                                <span class="badge badge-danger float-center float-xl-center mt-1"></span>
                            </div>
                            <table id="datatable" class="table table-hover table-striped ">
                                <thead class="bg-white">
                                    <tr>
                                        <th style="min-width:50px;"></th> 
                                        <th>Tanggal Absen</th> 
                                        <th>File Absen FingerPrint</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                    @foreach ($filefinger as $item)
                                        <tr id="hide{{ $item->id }}">
                                            <td class="text-left">
                                                <a href="#" class="text-secondary nav-link p-0" title="Lihat opsi" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu text-center">
                                                    <a href="{{ route('roles.edit', $item->id) }}" class="text-secondary mx-2" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a> 
                                                    <a href="javascript:void(0)" onClick="hapus({{$item->id}})" class="text-secondary ml-2" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                            <td>{{ $item->tanggal_absen }}</td> 
                                            <td >{{ $item->file_finger}}</td> 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert-dev.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script>
        function hapus(id){
            swal({
            title: 'Yakin.. ?',
            text: "Data anda akan dihapus. Tekan tombol yes untuk melanjutkan.",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!',
            closeOnConfirm: false,
            closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    $.ajax({
                        url:"{{URL::to('/master/tenaga_kerja/destroy')}}",
                        data:"id=" + id ,
                        success: function(html)
                        {
                            swal("Deleted", "Data Berhasil Di Hapus.", "success");
                            $("#hide"+id).hide(300);   
                        }
                    });
                    
                }else{
                    swal("Canceled", "Anda Membatalkan! :)","error");
                }
            });
        }
    </script>
@endsection