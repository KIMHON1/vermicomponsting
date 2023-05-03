
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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">{{$bin->code}}</a></li>
					</ol>

                </div>
                <!-- row -->



              <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">About Bin</a>
                                </li>
                                <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">Bin Conditions</a>
                                </li>
                                <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link"> Vermicomposting Process</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="my-posts" class="tab-pane fade active show">
                                    <div class="my-post-content pt-3">



                                        <div class="profile-uoloaded-post pb-3">


                                            <div class="profile-about-me">
                                                <div class="pt-4 border-bottom-1 pb-3">
                                                    <h4 class="text-primary">About Bin  {{$bin->code}} </h4>
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
                                                    <div class="col-9"><span>{{$bin->code}}</span>
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
                                </div>
                                <div id="about-me" class="tab-pane fade">



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
                                <div id="profile-settings" class="tab-pane fade">
                                    <div class="pt-3">
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4">Compost</h4>



                                                @if($plantingstatus==1)

                                                <div class="mt-4">

                                                    <a href="/planting/{{$bin->id}}" class="btn btn-primary mb-1">start Composting</a>
                                                </div>

                                                {{-- @elseif(empty($plantingstatus)) --}}


                                                @else

                                                    <h3>This Bin Number {{$bin->number}}  is in vermicomposting prossess</h3>

                                                    <div class="mt-4">

                                                        <a href="/harvesting/{{$bin->id}}/create" class="btn btn-primary mb-1">Harvest Compost</a>
                                                    </div>

                                                @endif





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="replyModal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Post Reply</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <textarea class="form-control" rows="4">Message</textarea>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0 table-responsive-lg text-black" id="bins">
                                <thead>
                                    <tr>


                                        <th class="align-middle pr-7"> Date
                                        </th>

                                        <th class="align-middle pr-7"> Initial
                                            worm population
                                        </th>
                                        <th class="align-middle pr-7"> Initial waste</th>
                                        <th class="align-middle minw200">Expected Compost</th>

                                        <th class="align-middle minw200">Date</th>

                                        <th class="align-middle minw200">harvested Worm Quantity</th>

                                        <th class="align-middle minw200">harvested Compost Quantity</th>

                                         <th class="align-middle text-right">Results</th>

                                    </tr>
                                </thead>
                                <tbody id="orders">
                                  @foreach ($plantingsresults as $index => $plantingsresult)
                                        {{-- <p>Planting {{$index + 1}}:</p> --}}
                                            <tr class="btn-reveal-trigger">





                                                <td class="py-2">
                                                    <div>{{ $plantingsresult->created_at }}</div>
                                                </td>



                                                <td class="py-2">
                                                    <div>
                                                        {{$plantingsresult->wormQuantity}}
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    {{$plantingsresult->WasteQuantity}} Kg
                                                </td>








                                                <td class="py-2">


                                                    <div> {{$plantingsresult->ExpectedCompostQuantity}} Kg</div>
                                                </td>
                                    @if (isset($harvestingsresults[$index]))
                                                 {{-- {{$index + 1}} --}}
                                                <td class="py-2">


                                                    <div> {{$harvestingsresults[$index]->created_at}} Kg</div>
                                                </td>
                                                <td class="py-2">


                                                    <div>  {{$harvestingsresults[$index]->wormQuantity}} </div>
                                                </td>
                                                <td class="py-2">


                                                    <div> {{$harvestingsresults[$index]->harvestCompostQuantity}} Kg</div>
                                                </td>

                                                <td class="py-2">


                                                    <div>
                                                    @php
                                                        $difference = $harvestingsresults[$index]->harvestCompostQuantity-$plantingsresult->ExpectedCompostQuantity

                                                    @endphp

                                                    @if ($difference < 0)
                                                    <span class="text-danger"> {{ abs($difference) }}  Kg  Lost</span>

                                                    @else
                                                     {{ $difference }}
                                                     <span class="text-success"> {{ $difference }} Kg Gained</span>
                                                    @endif


                                                        </div>
                                                </td>




                                    @endif
                                                {{-- <td class="py-2 text-right">
                                                    <div class="dropdown text-sans-serif">
                                                        <button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                            <div class="py-2">
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="
                                                                {{-- /microcontrollers/{{$microcontroller->id}}/ --}}

                                                                {{-- show">view</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href=" --}}

                                                                {{-- /microcontrollers/{{$microcontroller->id}}/edit --}}

                                                                {{-- ">Edit</a>
                                                                <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href=" --}}
                                                            {{-- /microcontrollers/{{$microcontroller->id}}/delete --}}
{{--
                                                            ">Delete</a> --}}

{{--
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>  --}}
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
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
