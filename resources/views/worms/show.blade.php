@extends('Dashboard.master')


@section('content')

        <!--**********************************
            Content body start
        ***********************************-->







                <div class="content-body">
                    <!-- row -->
                    <div class="container-fluid">
                        <div class="page-titles">
                            <h4>worms</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">   {{$worm->name}}</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0)">worm</a></li>
                            </ol>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="profile card card-body px-3 pt-3 pb-0">
                                    <div class="profile-head">

                                        <div class="profile-info">

                                            <div class="profile-details">
                                                <div class="profile-name px-3 pt-2">
                                                    <h4 class="text-primary mb-6">




                                                        {{$worm->name}}

                                                    </h4>
                                                    <p>wormname</p>
                                                </div>


                                                {{-- <div class="profile-email px-2 pt-2">
                                                    <h4 class="text-muted mb-6"></h4>
                                                    <p>Role</p>
                                                </div> --}}



                                                <div class="dropdown ml-auto">
                                                    <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">

                                                        <a href=""><li class="dropdown-item"><i class="fa fa-pencil text-primary mr-2"></i>+stock</li></a>


                                                        {{-- <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                                        <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-9 col-xxl-12">
                                <div class="row">

                                    <div class="col-lg-7">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-7 mb-sm-0 mb-3">
                                                        <div class="d-flex">

                                                            <div>
                                                                <span class="d-block mb-1">{{$worm->population}}  population</span>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="media align-items-center">

                                                            <div class="media-body">
                                                                <span class="d-block mb-1">Description</span>
                                                                <p class="fs-18 mb-0 text-black">{{$worm->description}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                                <div class="widget-stat card">
                                    <div class="card-body p-4">
                                        <h4 class="card-title">price</h4>
                                        <h3>{{$worm->price}} $</h3>


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
