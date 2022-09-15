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
                                DATA PEMBERKASAN
                            </div>
                            <table id="datatable" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 100px;">#</th> 
                                        <th>Nama Guru</th>
                                        <th  style="width: 250px;" >Detail</th>
                                        <th  style="width: 250px;" >Point</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                    @forelse ($pemberkasan as $item)
                                        <tr id="hide{{ $item->id }}">
                                            <td class="text-center">
                                                <a href="#" class="text-secondary nav-link p-0" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    {{-- 
                                                    <div class="dropdown-divider"></div> --}}
                                                    <a class="dropdown-item" href="javascript:void(0)" onClick="hapus({{$item->id}})">
                                                        <i class="far fa-trash-alt mr-2"></i> Hapus
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{ $item->name ?? '' }}</td> 

                                            <td>
                                                <a href="{{ route('pemberkasan.detail', $item->id) }}" class="btn btn-sm btn-info">Detail Berkas</a>    
                                            </td> 

                                            <td>
                                                <select type="text" name="pointpemberkasan" id="" class="form-control">
                                                    <option value="100" >100</option>
                                                    <option value="100" >80</option>
                                                    <option value="100" >75</option>
                                                </select>
                                                <a href="{{route ('pemberkasan.index')}}" method="post" class="btn btn-sm btn-info">Simpan</a> 
                                            </td>

                                        </tr>
                                    @empty
                                                <tr>
                                                    <td class="text-center" colspan="9">Tidak ada data untuk ditampilkan</td>
                                                </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('salary.create') }}" class="btn btn-lg rounded-circle btn-primary btn-fly d-block d-md-none app-shadow">
        <span><i class="fas fa-plus fa-sm align-middle"></i></span>
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
                        url:"{{URL::to('/salary/destroy')}}",
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
    </script>
@endsection
