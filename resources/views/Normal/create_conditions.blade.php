@extends('Dashboard.master')

@section('content')
<<<<<<< HEAD
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>BinNumber</h4>
            <ol class="breadcrumb">

                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$bin->number}}</a></li>
            </ol>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create condition</h4>
                </div>
                <div class="card-body">


                    {{-- @if(auth()->bin()->id == $bin->id) --}}
                    <form method="POST" action="{{url('/create_cond')}}">
                        @csrf
                         {{-- //@method('GET') --}}
                        <div class="row mb-3">
                            {{-- <label for="bin_id" class="col-md-4 col-form-label text-md-end">{{ __('bin_id') }}</label> --}}

                            <div class="col-md-6">
                                <input id="bin_id" type="hidden" class="form-control @error('bin_id') is-invalid @enderror" name="bin_id" value="{{$bin->id}}" required autocomplete="bin_id" autofocus>
=======



 <div class="content-body">
    <div class="container-fluid">
    
        <!-- row -->
        <div class="row">
           
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create BinConditions</h4>
                        @if(Session::get('success'))
                        <div class="alert alert-seccess">
                          {{Session::get('success')}}
                          @php
                              Session::forget('success')
                          @endphp

>>>>>>> b614455 (validating user accounts)

                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon" method="POST" action="{{url('/conditions/store')}}">
                              @csrf
                              
                       
                              </div>
                              <div class="form-group">
                                <label class="text-label">Temperature</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-temperature-half"></i><i class="fa-solid fa-temperature-half"></i> </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="temperature" placeholder="Enter temperature..">
                                   
                                </div>
                                @if($errors->has('temperature'))
                                <span class="text-danger">
                                  {{$errors->first('temperature')}}
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                              <label class="text-label">Humidity</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">  </span>
                                  </div>
                                  <input type="text" class="form-control" id="val-username1" name="humidity" placeholder="Enter Hummidity">
                                 
                              </div>
                              @if($errors->has('humidity'))
                              <span class="text-danger">
                                {{$errors->first('humidity')}}
                              </span>
                              @endif
                          </div>



<<<<<<< HEAD




                            <label for="temperature" class="col-md-4 col-form-label text-md-end">{{ __('Temperature') }}</label>

                            <div class="col-md-6">
                                <input id="temperature" type="text" class="form-control @error('temperature') is-invalid @enderror" name="temperature" value="{{ old('temperature') }}" required autocomplete="temperature" autofocus>

                                @error('temperature')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
=======
                          <div class="form-group">
                            <label class="text-label">Acidity *</label>
                            <div class="input-group transparent-append">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> 
                                </div>
                                <input type="text" class="form-control" id="val-password1" name="acidity" placeholder="Enter acidity..">
                                
                              
                                @if($errors->has('acidity'))
                                <span class="text-danger">
                                  {{$errors->first('acidity')}}
                                </span>
                                @endif
>>>>>>> b614455 (validating user accounts)
                            </div>
                        </div>




                      <button type="submit" class="btn mr-2 btn-primary">Submit</button>
                               
                            </form>
                        </div>
<<<<<<< HEAD

                        <div class="row mb-3">
                            <label for="acidity" class="col-md-4 col-form-label text-md-end">{{ __('Acidity-PH') }}</label>

                            <div class="col-md-6">
                                <input id="acidity" type="number" class="form-control @error('acidity') is-invalid @enderror" name="acidity" required autocomplete="new-acidity">


                                @error('acidity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn  mr-2 btn-primary" >
                                    {{ __('Add Conditions') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- @endif --}}
=======
                    </div>
>>>>>>> b614455 (validating user accounts)
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
