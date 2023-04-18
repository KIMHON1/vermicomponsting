@extends('Dashboard.master')


@section('content')


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
                                <h4 class="card-title">Update Bin {{$bin->number}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">

                                    @if(Session::get('success'))
                                    <div class="alert alert-success">
                                      {{Session::get('success')}}
                                      @php
                                          Session::forget('success')
                                      @endphp


                                    </div>
                                    @endif
                                    <form class="form-valide" action="/bins/{{$bin->id}}/update" method="POST">
                                        @csrf

                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xl-12">


                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="val-digits">BinNumber <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-8">
                                                        <input type="number" class="form-control" id="val-digits" name="number"    value="{{$bin->number}}">
                                                    </div>

                                                    @if($errors->has('number'))
                                                    <span class="text-danger">
                                                      {{$errors->first('number')}}
                                                    </span>
                                                    @endif
                                                </div>



                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="val-digits">Microcontrolar Type <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" id="val-digits" name="microcontroller_type" value="{{$bin->microcontroller_type}}">
                                                    </div>


                                                    @if($errors->has('microcontroller_type'))
                                                    <span class="text-danger">
                                                      {{$errors->first('microcontroller_type')}}
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="val-digits">worm Type <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" id="val-digits" name="worm_type" value={{$bin->worm_type}}>
                                                    </div>
                                                    @if($errors->has('worm_type'))
                                                    <span class="text-danger">
                                                      {{$errors->first('worm_type')}}
                                                    </span>
                                                    @endif
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="val-suggestions">Other description <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-8">
                                                        <textarea class="form-control" id="val-suggestions" name="description" rows="5" >{{$bin->description}}</textarea>
                                                    </div>


                                                    @if($errors->has('description'))
                                                    <span class="text-danger">
                                                      {{$errors->first('description')}}
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-lg-8">
                                                        <input type="hidden" class="form-control" id="val-digits" name="member_id" value="{{$member}}" >
                                                    </div>



                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-lg-8">
                                                        <input type="hidden" class="form-control" id="val-digits" name="cooperative_id" value="{{$cooperative_id}}" >
                                                    </div>



                                                </div>



                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>

                                                        <a class="btn btn-primary" href="/bins">Cancel</a>
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
