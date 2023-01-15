
@extends('Normal.navbar')


   @section('content')
   
    
       <div class="card" style="background-color:#8793AA">
            <div class="card-header">
                <h1>create Bin</h1>
            </div>
          {{-- @if(!Auth::guest())
            @if(Auth::user()->id == $bin->user_id) --}}
                {{-- <form action="create_bi" method="POST" >
                    @csrf 
                    <div class="form-group">
                      <input type="number" class="form-control" name="number" id="BinNumber" aria-describedby="BinNumberHelp" placeholder="Enter BinNumber">
                 
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="location"   id="BinLocation" placeholder="Enter BinLocation">
                    </div> --}}

                       {{-- <div class="form-group">
                        <label for="UserId">UserId</label>
                        <input type="number" class="form-control" name="user_id"   id="UserId" placeholder="Enter UserId">
                      </div>  --}}
{{--                    
                      <div class="form-group">
                        <input  class="form-control"  value ="{{auth()->user()->id}}" name="user_id"   id="UserId" style="display: none">
                      </div>  


                    <div class="form-group">
                      <input type="text" class="form-control" name="microcontroller_type"   id="MicrocontrollerType" placeholder="Enter MicrocontrollerType">
                    </div>

               



                    
                      <button type="submit" class="btn " style="background: yellow;margin-left:500px">Submit</button>
                  
                  

















                  </form> --}}
                  <form action="create_bi" method="POST">
                    @csrf
                     {{-- //@method('GET') --}}
                    <div class="row mb-3">
                        <label for="bin_id" class="col-md-4 col-form-label text-md-end">{{ __('BinNumber') }}</label>

                        <div class="col-md-6">
                            <input id="BinNumber" type="number" class="form-control @error('BinNumber') is-invalid @enderror" name="number" required autocomplete="BinNumber" autofocus>

                            @error('BinNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">






                        
                        <label for="BinLocation" class="col-md-4 col-form-label text-md-end">{{ __('BinLocation') }}</label>

                        <div class="col-md-6">
                            <input id="BinLocation" type="text" class="form-control @error('BinLocation') is-invalid @enderror" name="location" value="{{ old('BinLocation') }}" required autocomplete="location" autofocus>

                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                      <input  class="form-control"  value ="{{auth()->user()->id}}" name="user_id"   id="UserId" style="display: none">
                    </div>  
                    <div class="row mb-3">
                        <label for="microcontroller" class="col-md-4 col-form-label text-md-end">{{ __('microcontroler') }}</label>

                        <div class="col-md-6">
                            <input id="Microcontroller_type" type="text" class="form-control @error('microcontroller') is-invalid @enderror" name="microcontroller_type" value="{{ old('microcontrollar') }}" required autocomplete="microcontroller">

                            @error('microcontoral')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

            

                

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn " style="background: yellow; color:white">
                                {{ __('Add Conditions') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
      
      
      
    @endsection('content')


