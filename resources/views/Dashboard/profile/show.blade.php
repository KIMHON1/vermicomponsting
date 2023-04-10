@extends('Dashboard.master')


@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Profile</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">   {{$user->name}}</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">

                                <div class="profile-info">
									<div class="profile-photo">
										<img src="{{$user_profile->profilePic ? asset('storage/'.$user_profile->profilePic) : asset('images/no-image.jpg')}}" class="img-fluid rounded-circle" alt="hh">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-6">




                                                {{$user->name}}

                                            </h4>
											<p>UserName</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-6">{{$user->email}}</h4>
											<p>user Email</p>
										</div>

                                        <div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-6">{{$user->Roles}}</h4>
											<p>Role</p>
										</div>


                                        <div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-6">Active</h4>
											<p>Account status</p>
										</div>
										<div class="dropdown ml-auto">
											<a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><i class="fa fa-pencil text-primary mr-2"></i>Edit</li>

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

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">About Me</a>
                                            </li>
                                            {{-- <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">About Me</a>
                                            </li> --}}


                                        </ul>
                                        <div id="my-posts" class="tab-pane fade active show">
                                            <div class="my-post-content pt-3">

                                                <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-3">

                                                        <p class="mb-2">
                                                         {{$user_profile->description}}

                                                        </p>

                                                    </div>
                                                </div>

                                                <div class="profile-skills mb-5">
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">FirstName<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{$user_profile->firstname}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">SecondName<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                         <div class="col-9"><span>{{$user_profile->secondname}}</span>
                                                        </div>
                                                    </div>


                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">PhoneNumber<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{$user_profile->phonenumber}}
                                                        </div>
                                                    </div>


                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Gender<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>       {{$user_profile->gender}}
                                                        </div>
                                                    </div>



                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Province<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>       {{$user_profile->province}}
                                                        </div>
                                                    </div>


                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">District<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>       {{$user_profile->district}}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Sector<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>       {{$user_profile->sector}}
                                                        </div>
                                                    </div>


                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Cell<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>       {{$user_profile->cell}}
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
									<!-- Modal -->

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
