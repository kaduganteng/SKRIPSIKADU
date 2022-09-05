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
                        <a href="{{ route('quisioner.create') }}" class="btn btn-default app-shadow d-none d-md-inline-block ml-auto">
                                <i class="fa fa-search"></i> Lihat Form Quisioner
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
                                    <div class="float-left offset-5 pt-1">
                                        <span class="d-none d-md-block d-lg-block">QUISIONER</span>
                                        </div>
                                        <h3 class="card-title back-top" style="margin-top: 5px;">
                                        <a href="{{ route('quisioner.index') }}" title="Kembali" data-toggle="tooltip" data-placement="right" class="btn text-muted">
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
                                                        <td>{{ $position->name }}</td>
                                                    </tr>
                                                </table>
                                            </table>
                                        </div>
                                    </div>
                                <div class="card-body">
                                    <table id="datatable" class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 100px;">#</th> 
                                        <th>Nama</th> 
                                        <th>Point</th>
                                        <th>Point</th>
                                        <th>Point</th>
                                        <th>Point</th>
                                        <th>Point</th>
                                        <th>Masukan</th>
                                        <th>Total</th>
                                    </tr>
                                 </thead> 
                                    <tbody>
                                    @foreach ($quisioner as $item)
                                        <tr id="hide{{ $item->id }}">
                                            <td class="text-center">
                                                <a href="{{route('quisioner.destroy',$item->id)}}" class="text-secondary nav-link p-0" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)" onClick="hapus({{$item->id}})">
                                                        <i class="far fa-trash-alt mr-2"></i> Hapus
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{$item->name ?? '' }}</td> 
                                            <td>{{$item->point1 ?? '' }}</td>
                                            <td>{{$item->point2 ?? '' }}</td>
                                            <td>{{$item->point3 ?? '' }}</td>
                                            <td>{{$item->point4 ?? '' }}</td>
                                            <td>{{$item->point5 ?? '' }}</td>
                                            <td>{{$item->masukan ?? '' }}</td>
                                            <td>{{$item->point1+$item->point2+$item->point3+$item->point4+$item->point5}}</td>
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
    </div>

    <a href="{{ route('master.departement.create') }}" class="btn btn-lg rounded-circle btn-primary btn-fly d-block d-md-none app-shadow">
        <span><i class="fas fa-user-plus fa-sm align-middle"></i></span>
    </a>

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
                        url:"{{URL::to('/master/departement/destroy')}}",
                        data:"id=" + id ,
                        success: function(data)
                        {
                            swal("Deleted", data.message, "success");
                            $("#count").html(data.count);
                            $("#hide"+id).hide(300);
                        }
                    });
                    
                }else{
                    swal("Canceled", "Anda Membatalkan! :)","error");
                }
            });
        }

        $(".filter").on('change',function(){
            console.log("Filter")
        })
    </script>
@endsection
