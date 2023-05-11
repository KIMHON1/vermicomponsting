
@extends('Dashboard.master')

@section('content')

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
                    @can('view-users-admin')
					<div class="mr-auto">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Vermicomposting Admin Dashboard</p>
					</div>
                    @endcan




					<div class="mr-auto">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Vermicomposting {{$auth_user_role}} Dashboard</p>
					</div>



                    @if ($cooperativeInfo)
                    <div class="mr-auto">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">{{$cooperativeInfo->co_operativename}} Manager Dashboard</p>
					</div>
                    @endif

				</div>
				<div class="row">

                    @can('view-users-admin')
					<div class="col-xl-3 col-sm-6">

						<div class="card">



							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">{{$inactive_accounts}}</h2>
										<span>InActive Acounts</span>
									</div>
                                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">

                                        <i class="fa fa-user"></i>

                                    </a>

								</div>
							</div>



							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>

					</div>
                    <div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">{{$active_accounts}}</h2>
										<span>Active Acounts</span>
									</div>
                                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">

                                        <i class="fa fa-user"></i>

                                    </a>

								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>
					</div>






                    <div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">{{$count}}</h2>
										<span>Total Acounts</span>
									</div>
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 30%; height:4px;" role="progressbar">
									<span class="sr-only">30% Complete</span>
								</div>
							</div>
						</div>
					</div>










					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">{{$bins_number}}</h2>
										<span>Total Bins</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
										<path d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z" fill="#007A64"/>
										<path d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z" fill="#007A64"/>
										<path d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z" fill="#007A64"/>
										<path d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z" fill="#007A64"/>
										</g>
										<defs>
										<clipPath id="clip0">
										<rect width="40" height="40" fill="white"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 90%; height:4px;" role="progressbar">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>
                    @endcan

 @can('view-co-operative')

                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-primary">
                            <div class="card-body  p-4">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-users"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Total Members</p>
                                        <h3 class="text-white">{{$total_members}}</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-warning">
                            <div class="card-body p-4">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-box"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Total Bins</p>
                                        <h3 class="text-white">{{$total_bins}}</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-secondary">
                            <div class="card-body p-4">
                                <div class="media">

                                    <span class="mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 96c0-53 43-96 96-96h38.4C439.9 0 480 40.1 480 89.6V176v16V376c0 75.1-60.9 136-136 136s-136-60.9-136-136V296c0-22.1-17.9-40-40-40s-40 17.9-40 40V464c0 26.5-21.5 48-48 48s-48-21.5-48-48V296c0-75.1 60.9-136 136-136s136 60.9 136 136v80c0 22.1 17.9 40 40 40s40-17.9 40-40V192H352c-53 0-96-43-96-96zm144-8a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/></svg>

                                    </span>

                                    <div class="media-body text-white">
                                        <p class="mb-1"> Bins that haven't started vermicomposting proccess</p>
                                        <h3 class="text-white">{{$no_verm_procces}}</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-danger ">
                            <div class="card-body p-4">
                                <div class="media">
                                    <span class="mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 96c0-53 43-96 96-96h38.4C439.9 0 480 40.1 480 89.6V176v16V376c0 75.1-60.9 136-136 136s-136-60.9-136-136V296c0-22.1-17.9-40-40-40s-40 17.9-40 40V464c0 26.5-21.5 48-48 48s-48-21.5-48-48V296c0-75.1 60.9-136 136-136s136 60.9 136 136v80c0 22.1 17.9 40 40 40s40-17.9 40-40V192H352c-53 0-96-43-96-96zm144-8a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/></svg>

                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Bins in Vermicomposting Proccess</p>
                                        <h3 class="text-white">
                                         {{$verm_proccess}} </h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body p-4">
                                <h4 class="card-title">Total worms Type</h4>
                                <h3>{{$worm}}</h3>
                                {{-- <div class="progress mb-2">
                                    @php
                                    $previousCount = 0;
                                    $monthlyIncrease = 0;

                                    foreach ($wormsByMonth as $month => $count) {
                                        if ($previousCount > 0) {
                                            $monthlyIncrease = round(($count - $previousCount) / $previousCount * 100);


                                        }
                                        $previousCount = $count;
                                    }
                                @endphp
                                    <div class="progress-bar progress-animated bg-primary" style="width:{{ $monthlyIncrease }}"></div>
                                </div> --}}


                                {{-- <small>{{ $monthlyIncrease }}% Increase per month</small> --}}
                            </div>
                        </div>
                    </div>
                 <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class=" widget-stat card bg-secondary">
                            <div class="card-body p-4">
                                <h4 class="card-title">Total Microcontrollars Types
                                <h3>{{$microcontrollers}}</h3>

                            </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-primary">
                            <div class="card-body p-4">
                                <h4 class="card-title">Total Active Bin </h4>
                                <h3>{{$active_bins}}</h3>



                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-danger">
                            <div class="card-body p-4">
                                <h4 class="card-title">Total In Active Bin</h4>
                                <h3>{{$inactive_bins}}</h3>



                            </div>
                        </div>
                    </div>




				</div>







































                <div class="row">
                    <div class="col-12">

                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Gender Bar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart1" style="width:100%;max-width:600px;height:400px"></canvas>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
                                        <script>
                                            var xValues = {!! json_encode($months) !!};
                                            var yValues = {!! json_encode($monthCount) !!};
                                            var xValuesf = {!! json_encode($monthsf) !!};
                                            var yValuesf = {!! json_encode($monthCountf) !!};

                                            var ctx = document.getElementById("myChart1").getContext("2d");
                                            var myChart1 = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                    labels: xValues,
                                                    datasets: [{
                                                        label: 'Male',
                                                        backgroundColor: '#ffa500',
                                                        data: yValues,
                                                    }, {
                                                        label: 'Female',
                                                        backgroundColor: '#e7440b',
                                                        data: yValuesf,
                                                    }]
                                                },
                                                options: {
                                                    responsive: true,
                                                    legend: {
                                                        display: true,
                                                        position: 'bottom',
                                                    },
                                                    title: {
                                                        display: true,
                                                        text: 'Cooperative Member Gender Chart'
                                                    },
                                                    scales: {
                                                        yAxes: [{
                                                            ticks: {
                                                                beginAtZero: true
                                                            }
                                                        }]
                                                    }
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Members age chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart" style="width:100%;max-width:600px;height:400px"></canvas>

                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
                                        <script>
                                            var xValues = ['18-20', '21-25', '26-30', '31-35', '36-40', '41-45', '46-50', '51-55', '56-60'];
                                            var yValues = <?php echo json_encode(array_count_values($Age)); ?>;

                                            var ctx = document.getElementById("myChart").getContext("2d");
                                            var myChart = new Chart(ctx, {
                                                type: 'line',
                                                data: {
                                                    labels: xValues,
                                                    datasets: [{
                                                        label: '',
                                                        fill: false,
                                                        lineTension: 0,
                                                        backgroundColor: "rgba(0,0,255,1.0)",
                                                        borderColor: "rgba(0,0,255,0.1)",
                                                        data: Object.values(yValues)
                                                    }]
                                                },
                                                options: {
                                                    responsive: true,
                                                    title: {
                                                        display: true,
                                                        text: 'Age Chart'
                                                    },
                                                    scales: {
                                                        yAxes: [{
                                                            ticks: {
                                                                beginAtZero: true
                                                            }
                                                        }]
                                                    }
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6 col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">worm population chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>

                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


                                        <script>
    new Chart("myChart3", {
        type: "scatter",
        data: {
            datasets: [{
                pointRadius: 4,
                pointBackgroundColor: "rgb(0,0,255)",
                data: <?php echo json_encode($data); ?>
            }]
        },
        options: {
            legend: { display: false },
            scales: {
                xAxes: [{ ticks: { min: 40, max: 160 } }],
                yAxes: [{ ticks: { min: 0 } }]
            }
        }
    });
</script>








                                            </div>
                                </div>
                            </div>




                            <div class="col-xl-6 col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Worms conditions chart</h4>
                                    </div>
                                    <div class="card-body">


                                    <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>

                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

                                    <script>
const xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, {
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    }, {
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
</script>


                                    </div>
                                </div>
                            </div>









                        </div>





                </div>
                    </div>
                </div>




@endcan






{{--for sedo--}}


@can('view-bins-cell')

<div class="row">


<div class="col-xl-3 col-sm-6">

    <div class="card">



        <div class="card-body">
            <div class="media align-items-center">
                <div class="media-body mr-3">
                    <h2 class="fs-34 text-black font-w600">{{$inactive_cooperative_number}}</h2>
                    <span>Active Cooperative Acounts</span>
                </div>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">

                    <i class="fa fa-user"></i>

                </a>

            </div>
        </div>



        <div class="progress  rounded-0" style="height:4px;">
            <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
                <span class="sr-only">50% Complete</span>
            </div>
        </div>
    </div>

</div>
<div class="col-xl-3 col-sm-6">
    <div class="card">
        <div class="card-body">
            <div class="media align-items-center">
                <div class="media-body mr-3">
                    <h2 class="fs-34 text-black font-w600">{{$active_cooperative_number}}</h2>
                    <span>InActive Cooperative Acounts</span>
                </div>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">

                    <i class="fa fa-user"></i>

                </a>

            </div>
        </div>
        <div class="progress  rounded-0" style="height:4px;">
            <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
                <span class="sr-only">50% Complete</span>
            </div>
        </div>
    </div>
</div>






<div class="col-xl-3  col-sm-6">
    <div class="card">
        <div class="card-body">
            <div class="media align-items-center">
                <div class="media-body mr-3">
                    <h2 class="fs-34 text-black font-w600">{{$cooperative_number}}</h2>
                    <span>Total Cooperative Acounts</span>
                </div>
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
        </div>
        <div class="progress  rounded-0" style="height:4px;">
            <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 30%; height:4px;" role="progressbar">
                <span class="sr-only">30% Complete</span>
            </div>
        </div>
    </div>
</div>










<div class="col-xl-3  col-sm-6">
    <div class="card">
        <div class="card-body">
            <div class="media align-items-center">
                <div class="media-body mr-3">
                    <h2 class="fs-34 text-black font-w600">{{$cooperativebins}}</h2>
                    <span>Total Bins</span>
                </div>
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z" fill="#007A64"/>
                    <path d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z" fill="#007A64"/>
                    <path d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z" fill="#007A64"/>
                    <path d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z" fill="#007A64"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="40" height="40" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
        <div class="progress  rounded-0" style="height:4px;">
            <div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 90%; height:4px;" role="progressbar">
                <span class="sr-only">90% Complete</span>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-primary">
        <div class="card-body  p-4">
            <div class="media">
                <span class="mr-3">
                    <i class="la la-users"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">Total Farmers</p>
                    <h3 class="text-white">{{$farmers}}</h3>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-warning">
        <div class="card-body p-4">
            <div class="media">
                <span class="mr-3">
                    <i class="la la-microchip"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">Microcontrollers </p>
                    <h3 class="text-white"></h3>

                </div>
            </div>
        </div>
    </div>
</div>





 <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-primary">
        <div class="card-body p-4">
            <h4 class="card-title">Total Active Bin </h4>
            <h3>{{$active_bins}}</h3>



        </div>
    </div>
</div>


<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-danger">
        <div class="card-body p-4">
            <h4 class="card-title">Total In Active Bin</h4>
            <h3>{{$inactive_bins}}</h3>



        </div>
    </div>
</div>




</div>

@endcan







            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
