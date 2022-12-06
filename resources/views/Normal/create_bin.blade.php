
@extends('Normal.navbar')


   @section('content')
   
    
       <div class="card">
            <div class="card-header">
                <h1>create Bin</h1>
            </div>
          {{-- @if(!Auth::guest())
            @if(Auth::user()->id == $bin->user_id) --}}
                <form action="create_bi" method="POST" >
                    @csrf 
                    <div class="form-group">
                      <label for="BinNumber">BinNumber</label>
                      <input type="number" class="form-control" name="number" id="BinNumber" aria-describedby="BinNumberHelp" placeholder="Enter BinNumber">
                 
                    </div>
                    <div class="form-group">
                      <label for="BinLocation">BinLocation</label>
                      <input type="text" class="form-control" name="location"   id="BinLocation" placeholder="Enter BinLocation">
                    </div>

                       <div class="form-group">
                        <label for="UserId">UserId</label>
                        <input type="number" class="form-control" name="user_id"   id="UserId" placeholder="Enter UserId">
                      </div> 


                    <div class="form-group">
                      <label for="MicrocontrollerType">MicrocontrollerType</label>
                      <input type="text" class="form-control" name="microcontroller_type"   id="MicrocontrollerType" placeholder="Enter MicrocontrollerType">
                    </div>

               



                    <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                  
                    </div>
                  </form>
                {{-- @endif
                @endif --}}
            </div>
          </div>
      
      
      
    @endsection('content')


