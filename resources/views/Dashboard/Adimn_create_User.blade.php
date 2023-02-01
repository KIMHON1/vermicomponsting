{{-- 
    @extends('Dashboard.index')


    @section('content')
     <div ></div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" >
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Dashboard</h1>
       <div class="btn-toolbar mb-2 mb-md-0">
         <div class="btn-group me-2">
           <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
           <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
         </div>
         <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
           <span data-feather="calendar" class="align-text-bottom"></span>
           This week
         </button>
       </div>
     </div> 
  --}}
        {{-- <table>
            <tr>
                <td>number</td>
                <td>location</td>
            </tr>
            @foreach ($bin as $bin)
            <tr>
                <td>{{$bin->number}}</td>
                <td>{{$bin->location}}</td>
            
            </tr>
        @endforeach
    </table> --}}


    {{-- <table class="table">
      <thead class="thead-dark">
        <tr>
         
          <th scope="col">Username</th>
          <th scope="col">UserEmail</th>
          <th scope="col">Action</th>
         
        </tr>
      </thead>
      <tbody> --}}
        
        {{-- @if(!Auth::guest())  
        @if(Auth::user()->id==$bin->user_id) --}}
      {{-- @foreach ($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
        
          <td> --}}

            {{-- {{"/singleBin/".$bin->id}} --}}

           {{-- <a href={{"/useradmin/".$user->id}}> <button class="btn btn-primary">view</button> --}}
            {{-- {{"/updatebin/".$bin->id}} --}}
           
   
            {{-- {{"/delete/".$bin->id}} --}}
            {{-- <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </a>
            <a href="{{"/delete_vermuser/".$user->id}} "><button class="btn btn-danger">delete</button></a>


          </td>

        </tr>
      @endforeach
       
     
      </tbody>
    </table>
    

   
    </table> --}}
  {{-- @endif
  @endif   --}}





 
 
  {{-- @endsection('content') --}}
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
                              <h4 class="card-title">Create User</h4>
                          </div>
                          <div class="card-body">
                              <div class="basic-form">
                                  <form class="form-valide-with-icon" method="POST" action="{{url('/regis')}}">
                                    @csrf
                             
                                    </div>
                                    <div class="form-group">
                                      <label class="text-label">Name</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                          </div>
                                          <input type="text" class="form-control" id="val-username1" name="val-username" placeholder="Enter a Name..">
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
                                </div>



                                <div class="form-group">
                                  <label class="text-label">Password *</label>
                                  <div class="input-group transparent-append">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                      </div>
                                      <input type="password" class="form-control" id="val-password1" name="password" placeholder="Choose a safe one..">
                                      <div class="input-group-append show-pass">
                                          <span class="input-group-text"> <i class="fa fa-eye-slash"></i>
                                          </span>
                                      </div>
                                  </div>
                              </div>



                              <div class="form-group">
                                <label class="text-label">Password confirimation*</label>
                                <div class="input-group transparent-append">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input type="password" class="form-control" id="val-password1" name="password_confirmation" placeholder="Choose a safe one..">
                                    <div class="input-group-append show-pass">
                                        <span class="input-group-text"> <i class="fa fa-eye-slash"></i>
                                        </span>
                                    </div>
                                </div>
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