

@extends('Dashboard.master')
@section('content')

             <!--**********************************
            Content body start
        ***********************************-->
         <div class="content-body">
            <div class="container-fluid">



                <div class="page-titles">
					<h4>Manage</h4>
					<ol class="breadcrumb">

						<li class="breadcrumb-item active"><a href="javascript:void(0)">CO-Operative  {{$cooperativeInfo->co_operativename}}</a></li>
					</ol>



                </div>

                <!--**********************************
            Content body start
        ***********************************-->

				<div class="form-head align-items-center d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Members</h2>
						<p class="mb-0">{{$cooperativeInfo->co_operativename}} Cooperative Members </p>
					</div>
					<div>
						<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+New Member</a>

					</div>
				</div>
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Contact</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="/cooperatives_member/post" method="POST">
                                    @csrf
									<div class="form-group">

                                        <div class="col-sm-10">
										<label class="text-black font-w500"> First Name</label>
										<input type="text" name="firstname" class="form-control">

                                        @if($errors->has('firstname'))
                                        <span class="text-danger">
                                          {{$errors->first('firstname')}}
                                        </span>
                                        @endif
                                    </div>
									</div>

                                    <div class="form-group">
										<label class="text-black font-w500"> Second Name</label>
										<input type="text" name="secondname" class="form-control">
                                        @if($errors->has('secondname'))
                                        <span class="text-danger">
                                          {{$errors->first('secondname')}}
                                        </span>
                                        @endif
									</div>



                                    @include('livewire.dependent_dropdown')
									<div class="form-group">
										<button type="submit" class="btn mr-2 btn-primary">Submit</button>
									</div>
								</form>
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
