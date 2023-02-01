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
                                    <h4 class="text-center mb-4 text-white">edit  Bin</h4>
                                    <form action="/bins/{{$bin->id}}" method="POST" >
                                    @csrf 
                                    @method('PUT')
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>BinNumber</strong></label>
                                            <input type="text" name="number" class="form-control" 
                                            value={{$bin->number}}
                                             d>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Location</strong></label>
                                            <input type="text" class="form-control" 
                                            name="location"
                                            value="{{$bin->location}}" >
                                        </div>

                                        <div class="form-group">
                                          
                                            <input  value ="{{auth()->user()->id}}" 
                                            name="user_id"
                                            class="form-control" style="display: none"  d>
                                        </div>

                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>MicrocontrollerType</strong></label>
                                            <input type="text" name="microcontroller_type"
                                            class="form-control"  value={{$bin->microcontroller_type}} d >
                                            
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Update Bin</button>
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