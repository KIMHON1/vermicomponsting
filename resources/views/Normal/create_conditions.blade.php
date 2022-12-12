@extends('Normal.navbar')

@section('content')
<div class="container" style="margin-top:70px" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create-condition') }}</div>

                <div class="card-body">


                    {{-- @if(auth()->bin()->id == $bin->id) --}}
                    <form method="POST" action="{{url('/create_cond')}}">
                        @csrf
                         {{-- //@method('GET') --}}
                        <div class="row mb-3">
                            <label for="bin_id" class="col-md-4 col-form-label text-md-end">{{ __('bin_id') }}</label>

                            <div class="col-md-6">
                                <input id="bin_id" type="number" class="form-control @error('bin_id') is-invalid @enderror" name="bin_id" required autocomplete="bin_id" autofocus>

                                @error('temperature')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">






                            
                            <label for="temperature" class="col-md-4 col-form-label text-md-end">{{ __('Temperature') }}</label>

                            <div class="col-md-6">
                                <input id="temperature" type="text" class="form-control @error('temperature') is-invalid @enderror" name="temperature" value="{{ old('temperature') }}" required autocomplete="temperature" autofocus>

                                @error('temperature')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="humidity" class="col-md-4 col-form-label text-md-end">{{ __('Humidity') }}</label>

                            <div class="col-md-6">
                                <input id="humidity" type="text" class="form-control @error('humidity') is-invalid @enderror" name="humidity" value="{{ old('humidity') }}" required autocomplete="humidity">

                                @error('humidity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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
                                <button type="submit" class="btn " style="background: yellow; color:white">
                                    {{ __('Add Conditions') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
