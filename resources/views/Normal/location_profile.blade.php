{{-- @extends('Dashboard.master')


@section('content')


    <div class="authincation h-90">
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
                                    <form action="" method="POST" >
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
    </div>


@endsection --}}

















<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from welly.dexignzone.com/xhtml/form-validation-jquery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 16:39:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Welly - Hospital Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
	<link href="/dashboard_themes/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/dashboard_themes/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


     <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fill in requred information Please.</h4>
                                @if(Session::get('success'))
                                <div class="alert alert-seccess">
                                  {{Session::get('success')}}
                                  @php
                                      Session::forget('success')
                                  @endphp


                                </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="form-valide-with-icon" method="POST" action="/location/store" enctype="multipart/form-data">
                                      @csrf


                                      </div>
                                      <div class="form-group">
                                        <label class="text-label">FirstName</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input type="text" class="form-control" id="val-username1" name="firstname" placeholder="Enter Your FirstName..">

                                        </div>
                                        @if($errors->has('firstname'))
                                        <span class="text-danger">
                                          {{$errors->first('firstname')}}
                                        </span>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <label class="text-label">SecondName</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input type="text" class="form-control" id="val-username1" name="secondname" placeholder="Enter Your SecondName..">

                                        </div>
                                        @if($errors->has('secondname'))
                                        <span class="text-danger">
                                          {{$errors->first('secondname')}}
                                        </span>
                                        @endif
                                    </div>

                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload ProfilePic</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="profilePic" class="custom-file-input">
                                            <label class="custom-file-label">Choose Photo</label>
                                        </div>
                                    </div>


                                  <div class="form-group">
                                    <label class="text-label">phonenumber</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                        </div>
                                        <input type="number" class="form-control" id="val-username1" name="phonenumber" placeholder="Enter PhoneNumber">

                                    </div>
                                    @if($errors->has('phonenumber'))
                                    <span class="text-danger">
                                      {{$errors->first('phonenumber')}}
                                    </span>
                                    @endif
                                </div>






 <div class="form-group mb-0">
    <label for="Gender">Gender  :</label>
    <label class="radio-inline mr-3">

        <input type="radio" name="gender" value="Male">Male</label>

    <label class="radio-inline mr-3"><input type="radio" name="gender"  value="Female">Female</label>

    <label class="radio-inline mr-3"><input type="radio" name="gender" value="other">other</label>


    @if($errors->has('gender'))
        <span class="text-danger">
        {{$errors->first('gender')}}
        </span>
    @endif

</div>

<div class="form-group">
    <label class="text-label">Province</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-map-marker" aria-hidden="true"></i> </span>
        </div>
        <input type="text" class="form-control" id="val-username1" name="province" placeholder="Enter Province..">

    </div>
    @if($errors->has('province'))
    <span class="text-danger">
      {{$errors->first('province')}}
    </span>
    @endif
</div>


<div class="form-group">
    <label class="text-label">District</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-map-marker" aria-hidden="true"></i> </span>
        </div>
        <input type="text" class="form-control" id="val-username1" name="district" placeholder="Enter District..">

    </div>
    @if($errors->has('district'))
    <span class="text-danger">
      {{$errors->first('district')}}
    </span>
    @endif
</div>

<div class="form-group">
    <label class="text-label">Sector</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-map-marker" aria-hidden="true"></i> </span>
        </div>
        <input type="text" class="form-control" id="val-username1" name="sector" placeholder="Enter Sector..">

    </div>
    @if($errors->has('sector'))
    <span class="text-danger">
      {{$errors->first('sector')}}
    </span>
    @endif
</div>


<div class="form-group">
    <label class="text-label">Cell</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-map-marker" aria-hidden="true"></i> </span>
        </div>
        <input type="text" class="form-control" id="val-username1" name="cell" placeholder="Enter Cell..">

    </div>
    @if($errors->has('cell'))
    <span class="text-danger">
      {{$errors->first('cell')}}
    </span>
    @endif
</div>


<div class="form-group">
    <label class="text-label">Village</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-map-marker" aria-hidden="true"></i> </span>
        </div>
        <input type="text" class="form-control" id="val-username1" name="village" placeholder="Enter Village..">

    </div>
    @if($errors->has('village'))
    <span class="text-danger">
      {{$errors->first('village')}}
    </span>
    @endif
</div>

























<div class="form-group">
                                                        <label class="text-label">Description of this Acount..*</label>
                                                        <textarea name ="description" class="form-control" rows="4" id="comment"></textarea>

                                                        @if($errors->has('description'))
                                                        <span class="text-danger">
                                                          {{$errors->first('description')}}
                                                        </span>
                                                        @endif
                                                    </div>





                                                    <div class="form-group">

                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="hidden" class="form-control" id="val-username1" name="user_id"

                                                            value="{{auth()->user()->id}}">

                                                        </div>

                                                    </div>


<button type="submit" class="btn mr-2 btn-primary">Submit</button>

<a  class="btn mr-2 btn-primary" href="/logout"> Cancel</a>



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


 <!-- Required vendors -->
 <script src="/dashboard_themes/vendor/global/global.min.js"></script>
 <script src="/dashboard_themes/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
 <script src="/dashboard_themes/js/custom.min.js"></script>
 <script src="/dashboard_themes/js/deznav-init.js"></script>





 <!-- Jquery Validation -->
 <script src="/dashboard_themes/vendor/jquery-validation/jquery.validate.min.js"></script>
 <!-- Form validate init -->
 <script src="/dashboard_themes/js/plugins-init/jquery.validate-init.js"></script>



</body>
