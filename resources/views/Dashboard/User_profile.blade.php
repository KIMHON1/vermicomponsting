@extends('Dashboard.master')
@section('content')

     <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
            
                <!-- row -->
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create Profile</h4>
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
                                    <form class="form-valide-with-icon" method="POST" action="/Profile/store">
                                      @csrf
                                      
                               
                                      </div>
                                      <div class="form-group">
                                        <label class="text-label">FirstName</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input type="text" class="form-control" id="val-username1" name="firstName" placeholder="Enter Your FirstName..">
                                           
                                        </div>
                                        @if($errors->has('firstName'))
                                        <span class="text-danger">
                                          {{$errors->first('firstName')}}
                                        </span>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <label class="text-label">SecondName</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input type="text" class="form-control" id="val-username1" name="secondName" placeholder="Enter Your SecondName..">
                                           
                                        </div>
                                        @if($errors->has('secondName'))
                                        <span class="text-danger">
                                          {{$errors->first('secondName')}}
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
                                      <label class="text-label">email</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                          </div>
                                          <input type="email" class="form-control" id="val-username1" name="email" placeholder="Enter Email">
                                         
                                      </div>
                                      @if($errors->has('email'))
                                      <span class="text-danger">
                                        {{$errors->first('email')}}
                                      </span>
                                      @endif
                                  </div>


                                  <div class="form-group">
                                    <label class="text-label">phoneNumber</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-phone" aria-hidden="true"></i> </span>
                                        </div>
                                        <input type="number" class="form-control" id="val-username1" name="phoneNumber" placeholder="Enter PhoneNumber">
                                       
                                    </div>
                                    @if($errors->has('phoneNumber'))
                                    <span class="text-danger">
                                      {{$errors->first('phoneNumber')}}
                                    </span>
                                    @endif
                                </div>




                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Gender</label>
                                    </div>
                                    <select name="gender" class="default-select"  >
                                       
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @if($errors->has('gender'))
                                    <span class="text-danger">
                                      {{$errors->first('gender')}}
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label class="text-label">Role</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        </div>
                                        <input type="text" class="form-control" id="val-username1" name="Role" placeholder="Enter Role">
                                       
                                    </div>
                                  
                                </div>
  
                                
                                                    <div class="form-group">
                                                        <label class="text-label">Description</label>
                                                        <textarea name ="Description" class="form-control" rows="4" id="comment"></textarea>

                                                        @if($errors->has('Description'))
                                                        <span class="text-danger">
                                                          {{$errors->first('Description')}}
                                                        </span>
                                                        @endif
                                                    </div>
                                      
  
                  
  
  
  
  
                          
                         
                              <button type="submit" class="btn mr-2 btn-primary">Submit</button>
                                       
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