
 
@extends('Dashboard.master')
@section('content') 
          
       <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Role Management</h4>
					<ol class="breadcrumb">
						
						<li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
					</ol>
                </div>
            
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box px-0 mb-3">
                                    <div class="p-0">
                                        create new role
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form action="#" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-rounded" placeholder="Role name">
                                                </div>
                                                <div class="mail-list mt-4">
                                                    <button type="submit" class="btn btn-primary">Create Role</button>
                                                  
                                                  
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                          
                          
                                </div>

                                <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                    <div role="toolbar" class="toolbar ml-1 ml-sm-0">
                                       
                                        <div class="btn-group mb-1">
                                          
                                        </div>
                                        <div class="btn-group mb-1">
                                           Add Permissions
                                        </div>
                                    </div>

                                    @foreach($permission as $value)
                                    <div class="email-list mt-3">
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="pl-1 align-self-center">
														<div class="custom-control custom-checkbox">
                                                             

                                                            
                                                            <label> {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                                                {{ $value->name }} </label>
                                                                
                                                                
                                                                  
															


														</div>
													</div>
                                                   
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject"> </div>
                                                    <div class="date">{{$value->created_at}}</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                   
                                 
                                     
                                        @endforeach



                                     
                                    </div>
                                    <!-- panel -->
                                    <div class="row mt-4">
                                        <div class="col-12 pl-3">
                                            <nav>
												<ul class="pagination pagination-gutter pagination-primary mb-0 pagination-sm no-bg">
													<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-left"></i></a></li>
													<li class="page-item "><a class="page-link" href="javascript:void()">1</a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void()">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
													<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-right"></i></a></li>
												</ul>
											</nav>
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
        
@endsection('content') 