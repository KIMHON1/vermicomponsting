@extends('Dashboard.master')


@section('content')


    {{-- <div class="authincation h-90">
        <div class="container h-90">
        <div class="page-titles">
					<h4></h4>
					<ol class="breadcrumb">

						<li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
					</ol>
                </div>
            <div class="row justify-content-center h-90 align-items-center">
                <div class="col-md-6">

					<div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">create Bin</h4>
                                    <form action="create_bi" method="POST" >
                                    @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>BinNumber</strong></label>
                                            <input type="text" name="number" class="form-control" placeholder="BinNumber" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Location</strong></label>
                                            <input type="text" class="form-control"
                                            name="location"
                                            placeholder="location" required>
                                        </div>

                                        <div class="form-group">

                                            <input  value ="{{auth()->user()->id}}"
                                            name="user_id"
                                            class="form-control" style="display: none" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>MicrocontrollerType</strong></label>
                                            <input type="text" name="microcontroller_type"
                                            class="form-control" placeholder="Enter MicrocontrollerType" required >

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Create Bin</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>bin</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">bin</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create Bin</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">

                                    @if(Session::get('success'))
                                    <div class="alert alert-seccess">
                                      {{Session::get('success')}}
                                      @php
                                          Session::forget('success')
                                      @endphp


                                    </div>
                                    @endif
                                    <form class="form-valide" action="create_bi" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">BinNumber <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="val-digits" name="number" placeholder="5">
                                                    </div>

                                                    @if($errors->has('number'))
                                                    <span class="text-danger">
                                                      {{$errors->first('number')}}
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">Microcontrolar Type <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="microcontroller_type" placeholder="MBILISodaq1284">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">worm Type <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="worm_type" placeholder="redWriggles">
                                                    </div>
                                                    @if($errors->has('worm_type'))
                                                    <span class="text-danger">
                                                      {{$errors->first('worm_type')}}
                                                    </span>
                                                    @endif
                                                </div>





                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">Country <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="country" placeholder="Rwanda">
                                                    </div>
                                                    @if($errors->has('country'))
                                                    <span class="text-danger">
                                                      {{$errors->first('country')}}
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">Province <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="province" placeholder="KGL">
                                                    </div>
                                                    @if($errors->has('province'))
                                                    <span class="text-danger">
                                                      {{$errors->first('province')}}
                                                    </span>
                                                    @endif
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">District <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="district" placeholder="Nyarugenge">
                                                    </div>
                                                    @if($errors->has('district'))
                                                    <span class="text-danger">
                                                      {{$errors->first('district')}}
                                                    </span>
                                                    @endif
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">Sector <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="sector" placeholder="Nyarugenge">
                                                    </div>

                                                    @if($errors->has('sector'))
                                                    <span class="text-danger">
                                                      {{$errors->first('sector')}}
                                                    </span>
                                                    @endif
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">Village <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="village" placeholder="Gatare">
                                                    </div>


                                                    @if($errors->has('village'))
                                                    <span class="text-danger">
                                                      {{$errors->first('village')}}
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">Cell <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="cell" placeholder="Gatare">
                                                    </div>


                                                    @if($errors->has('cell'))
                                                    <span class="text-danger">
                                                      {{$errors->first('cell')}}
                                                    </span>
                                                    @endif
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">R
                                                    oad <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="road" placeholder="NY234">
                                                    </div>



                                                </div>









                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Other description <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control" id="val-suggestions" name="description" rows="5" placeholder="about this bin"></textarea>
                                                    </div>
                                                </div>




                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
