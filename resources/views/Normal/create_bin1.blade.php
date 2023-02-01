@extends('Dashboard.master')


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
    </div>

				
@endsection