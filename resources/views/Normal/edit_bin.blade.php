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
                                <h4 class="card-title">Update Bin</h4>
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
                                    <form class="form-valide" action="/bins/{{$bin->id}}/update" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">BinNumber <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="val-digits" name="number" value="{{$bin->number}}">
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
                                                        <input type="text" class="form-control" id="val-digits" name="microcontroller_type" value="{{$bin->microcontroller_type}}">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">worm Type <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="worm_type" value="{{$bin->worm_type}}">
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
                                                        <input type="text" class="form-control" id="val-digits" name="country" value="{{$bin->country}}">
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
                                                        <input type="text" class="form-control" id="val-digits" name="province" value="{{$bin->province}}">
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
                                                        <input type="text" class="form-control" id="val-digits" name="district" value="{{$bin->district}}">
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
                                                        <input type="text" class="form-control" id="val-digits" name="sector" value="{{$bin->sector}}">
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
                                                        <input type="text" class="form-control" id="val-digits" name="village" value="{{$bin->village}}">
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
                                                        <input type="text" class="form-control" id="val-digits" name="cell" value="{{$bin->cell}}">
                                                    </div>


                                                    @if($errors->has('cell'))
                                                    <span class="text-danger">
                                                      {{$errors->first('cell')}}
                                                    </span>
                                                    @endif
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-digits">Road <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="road" value="{{$bin->road}}">
                                                    </div>

                                                    @if($errors->has('road'))
                                                    <span class="text-danger">
                                                      {{$errors->first('road')}}
                                                    </span>
                                                    @endif



                                                </div>









                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Other description <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-digits" name="description" value="{{$bin->description}}">
                                                    </div>
                                                    @if($errors->has('description'))
                                                    <span class="text-danger">
                                                      {{$errors->first('description')}}
                                                    </span>
                                                    @endif
                                                </div>



                                                <button type="submit" class="btn btn-primary">Submit</button>

                                                {{-- <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>

                                                        <a class="btn btn-primary" href="/bins">Cancel</a>
                                                    </div>
                                                </div> --}}
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
