@extends('layouts.app')
@section('content')
	<div class="content-wrapper pb-5 pt-3">
		<section class="content pb-3">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-12">
								<div class="info-box bg-secondary-gradient">
									<span class="info-box-icon"><i class="fa fa-user-circle"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">Jumlah Guru</span>
										<span class="info-box-number">{{ $staff ?? 0 }}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                
				<hr>
				<div class="row">
					<div class="col-md-10 offset-md-1">
                    <div class="table-responsive">
                                <div class="card-body p-0">
                                    <div class="card-header bg-light"> 
                                        <div class="float-left offset-5 pt-1">
                                            <span class="d-none d-md-block d-lg-block">PERANGKINGAN</span>
                                        </div>
                                    </div> 
                                    <table class="table table-bordered mb-0" style="font-size: 14px;">
                                        <tbody>
                                            <tr class="text-center bg-light" style="font-weight: bold;line-height: 1;">
                                            <td  style="vertical-align : middle; white-space: normal; width:50px; text-align: center;">NO</td>
                                                <td colspan="6"style="vertical-align : middle;width: 10px;">Nama Guru</td>
                                                <td style="vertical-align : middle;white-space:normal;width: auto; height: auto;word-wrap: break-word;">Jabatan</td>
                                                <td>Total Point</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
	$('.alert').fadeOut(7000);
    var bar_staff_departement = document.getElementById('BarChartStaffDepartement').getContext('2d');
    var bar_staff_position = document.getElementById('BarChartStaffPosition').getContext('2d');
    
    // Statistik Staff Departement

    var Departement = [];
    var CountDepartement = [];
    $.get("{{ url('/home/getStaffDepartement')}}", function(data){

        $.each(data, function(i,item){
            Departement.push(item.name_departement);
            CountDepartement.push(item.count);
        });

        var myChart = new Chart(bar_staff_departement, 
        {
            type: 'bar',
            data: {
                labels: Departement,
                datasets: [{
                    label: 'Jumlah Staff',
                    data: CountDepartement,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });

    // Statistik Staff Position

    var Position = [];
    var CountPosition = [];
    $.get("{{ url('/home/getStaffPosition')}}", function(data){
        $.each(data, function(i,item){
            Position.push(item.name_position);
            CountPosition.push(item.count);
        });
    
        var myChart = new Chart(bar_staff_position, {

            type: 'bar',
            data: {
                labels: Position,
                datasets: [{
                    label: 'Jumlah Guru',
                    data: CountPosition,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
</script>
@endsection