

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

						<li class="breadcrumb-item active"><a href="javascript:void(0)">CO-Operative</a></li>
					</ol>


                </div>


                 <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">

                            <a class="btn btn-primary" href="/dashboard"> Back</a>

                        </div>

                    </div>

                </div>


                <div class="card-body">
                    @if(Session::get('success'))
                                    <div class="alert alert-seccess">
                                      {{Session::get('success')}}
                                      @php
                                          Session::forget('success')
                                      @endphp


                                    </div>
                                    @endif
                    <div class="basic-form">
                        <form method="post" action="/cooperatives/post">
                            @csrf
                                <div class="form-group">

                                <label class="col-lg-4 col-form-label"          for="val-suggestions">Co-operativename<span
                                    class="text-danger">*</span>
                                </label>


                                <input type="text" class="form-control input-default" name="co_operativename" placeholder="Cooperative-name">

                                @if($errors->has('co_operativename'))
                                <span class="text-danger">
                                  {{$errors->first('co_operativename')}}
                                </span>
                                @endif

                            </div>




                            <div class="form-group">

                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Co-operative Manager <span
                                        class="text-danger">*</span>
                                    </label>


                                    <select  class="form-control input-default" name="co_operativemanager">
                                        <option disable selected>Choose Manager</option>
                                        @foreach($managers as $manager)
                                            <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                                        @endforeach
                                    </select>


                                    @if($errors->has('co_operativemanager'))
                                <span class="text-danger">
                                  {{$errors->first('co_operativemanager')}}
                                </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label class="col-lg-4 col-form-label"          for="val-suggestions">Co-operative description <span
                                    class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <textarea class="form-control" id="val-suggestions" name="co_operativedescription" rows="7" placeholder="about this Cooperative"></textarea>
                                </div>

                                @if($errors->has('co_operativedescription'))
                                <span class="text-danger">
                                  {{$errors->first('co_operativedescription')}}
                                </span>
                                @endif

                        </div>

                        <button type="submit" class="btn mr-2 btn-primary">Submit</button>

                        </form>
                    </div>
                </div>



            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection('content')
