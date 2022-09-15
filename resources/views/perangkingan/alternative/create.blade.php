@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset ('css/sweetalert.css') }}">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
               
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <h3 class="card-title">Tambah Alternative dan Skor baru</h3>
                            </div>
                            <div class="back-top">
                            <a href="{{ url('alternatives') }}" class="btn text-muted">
                                <i class="fa fa-arrow-left fa-fw"></i></span>
                            </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card card-solid">
                                <div class="card-body pb-0 pt-3">
                                    <blockquote>
                                    <b>Keterangan!!</b><br>
                                    <small><cite title="Source Title">Inputan Yang Ditanda Bintang Merah (<span class="text-danger">*</span>) Harus Di Isi !!</cite></small>
                                    </blockquote>
                                </div>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{route('alternatives.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Guru :</label>
                                    <div class="input-group">
                                        <input id="name" type="text" class="form-control"
                                            placeholder="Tuliskan Nama Guru" name="name" required>
                                    </div>
                                </div>
                                @foreach ($criteriaweights as $cw)
                                <div class="form-group">
                                    <label for="criteria[{{$cw->id}}]">{{$cw->name}} :</label>
                                    <select class="form-control" id="criteria[{{$cw->id}}]"
                                        name="criteria[{{$cw->id}}]">
                                        <!--
                                        @php
                                            $res = $criteriaratings->where('criteria_id', $cw->id)->all();
                                        @endphp
                                        -->
                                        @foreach ($res as $cr)
                                        <option value="{{$cr->id}}">{{$cr->description}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary mr-1"><i class="fas fa-check-double mr-1"></i> Simpan</button> 
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
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
                        url:"{{URL::to('/perangkingan/destroy')}}",
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

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()

        $('#mytable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

</script>
@endsection
