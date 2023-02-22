@extends('Dashboard.master')
@section('content')


<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Manage</h4>
					<ol class="breadcrumb">

						<li class="breadcrumb-item active"><a href="javascript:void(0)">Bins</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-responsive-lg text-black">
                                        <thead>
                                            <tr>

                                                <th class="align-middle">#</th>
                                                <th class="align-middle pr-7">Bin_number</th>
                                                <th class="align-middle minw200">Bin_Location</th>
                                                <th class="align-middle">microcontroller_type</th>
                                                <th class="align-middle text-right">Actions</th>
                                                <th class="no-sort"></th>
                                            </tr>
                                        </thead>
                                        @foreach ($bins as $bin)
                                        <tbody id="orders">

                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    {{++$i}}

                                                </td>
                                                <td class="py-2">
                                                     {{$bin->number}}
                                                    </td>
                                                <td class="py-2"> <a href="#"> {{$bin->location}}</a></td>

                                                <td class="py-2">{{$bin->microcontroller_type}}
                                                    <p class="mb-0 text-500"></p>
                                                </td>


                                                <td class="py-2 text-right">
                                                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="order-dropdown-0">
                                                            <div class="py-2"><a class="dropdown-item" href="#!">View</a>
                                                                
                                                                <a class="dropdown-item" href="/bins/{{$bin->id}}/edit">Edit</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="/conditions/{{$bin->id}}/create">Create-condition</a>
                                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="{{"/delete/".$bin->id}}">Delete</a>
                                                                <div class="dropdown-divider"></div><a class="dropdown-item text-success" href="/conditions/{{$bin->id}}/create">Create Conditions</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection