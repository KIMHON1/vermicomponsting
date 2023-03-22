
@extends('Dashboard.master')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Bin</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Number</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">{{$bin->number}}</a></li>
					</ol>

                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div><img src="{{asset('images/bin.jpg')}}" alt=""></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">About Bin</a>
                                            </li>
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">BinLocation</a>
                                            </li>

                                            <li class="nav-item"><a href="#conditions" data-toggle="tab" class="nav-link">BinConditions</a>
                                            </li>

                                            <li class="nav-item"><a href="#compost" data-toggle="tab" class="nav-link">vermicomposting Process</a>
                                            </li>


                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">

                                                    <div class="profile-about-me">
                                                        <div class="pt-4 border-bottom-1 pb-3">
                                                            <h4 class="text-primary">About Bin  {{$bin->number}} </h4>
                                                            <p class="mb-2">
                                                             {{$bin->description}}

                                                            </p>

                                                        </div>
                                                    </div>

                                                    <div class="profile-skills mb-5">
                                                        <div class="row mb-2">
                                                            <div class="col-3">
                                                                <h5 class="f-w-500">BinNumber<span class="pull-right">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-9"><span>{{$bin->number}}</span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-3">
                                                                <h5 class="f-w-500">BinMicrocontrollerType<span class="pull-right">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-9"><span>{{$bin->microcontroller_type}}</span>
                                                            </div>
                                                        </div>


                                                        <div class="row mb-2">
                                                            <div class="col-3">
                                                                <h5 class="f-w-500">BinWormType<span class="pull-right">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-9"><span>{{$bin->worm_type}}</span>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                            <div id="about-me" class="tab-pane fade">


                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">LocationInformation</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Country <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{$bin->country}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Province <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{$bin->province}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">District<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{$bin->district}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Sector<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{$bin->sector}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">cell<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{$bin->cell}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Village<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{$bin->village}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Road<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{$bin->road}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div id="conditions" class="tab-pane fade">


                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">binConditions</h4>

                                                        @if(!empty($conditions))
                                                        <div class="card-body">
                                                            <div class="table-responsive">


                                                                <div class="d-flex">
                                                                    <a href="/conditions/{{$bin->id}}/edit" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pen"></i></a>
                                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                                </div>




                                                                <table class="table table-responsive-md">
                                                                    <thead>
                                                                        <tr>


                                                                            <th><strong>Conditions</strong></th>
                                                                            <th><strong>Values</strong></th>


                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>

                                                                            <td><strong>
                                                                                <ul>
                                                                                    <li>Temperature</li>

                                                                                </ul>
                                                                                </strong></td>



                                                                            <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> {{$conditions->temperature}}</div></td>



                                                                            <td>

                                                                            </td>
                                                                        </tr>

                                                                        <td><strong>
                                                                            <ul>

                                                                                <li>PH </li>

                                                                            </ul>
                                                                            </strong></td>



                                                                        <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> {{$conditions->acidity}}</div></td>
                                                                    </tr>
                                                                    <td><strong>
                                                                        <ul>
                                                                            <li>Humidity </li>
                                                                        </ul>
                                                                        </strong></td>



                                                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> {{$conditions->temperature}}</div></td>



                                                                </tr>


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                       </div>


                                                        @else

                                                            <h3>opps there is no Current condition for bin {{$bin->number}} </h3>


                                                            <div class="mt-4">

                                                                <a href="/conditions/{{$bin->id}}/create" class="btn btn-primary mb-1">Create conditions</a>
                                                            </div>

                                                        @endif





                                                </div>

                                        </div>





                                            <div id="compost" class="tab-pane fade">


                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Compost</h4>



                                                        @if(empty($initialcompost))

                                                        <div class="mt-4">

                                                            <a href="/planting/{{$bin->id}}" class="btn btn-primary mb-1">start Composting</a>
                                                        </div>

                                                        @else

                                                            <h3>This Bin Number {{$bin->number}}  is in vermicomposting prossess</h3>

                                                            <div class="mt-4">

                                                                <a href="/harvesting/{{$bin->id}}/store" class="btn btn-primary mb-1">Harvest Compost</a>
                                                            </div>

                                                        @endif





                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
