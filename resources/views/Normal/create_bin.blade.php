
@extends('Normal.navbar')


   @section('content')
   
    
       <div class="card">
            <div class="card-header">
                <h1>create Bin</h1>
            </div>

                <form action="{{url('/create_bi')}}" method="POST" >
                    @csrf 
                    <div class="form-group">
                      <label for="BinNumber">BinNumber</label>
                      <input type="number" class="form-control" name="BinNumber" id="BinNumber" aria-describedby="BinNumberHelp" placeholder="Enter BinNumber">
                 
                    </div>
                    <div class="form-group">
                      <label for="BinLocation">BinLocation</label>
                      <input type="text" class="form-control" name="BinLocation"   id="BinLocation" placeholder="Enter BinLocation">
                    </div>

                    <div class="form-group">
                      <label for="MicrocontrollerType">MicrocontrollerType</label>
                      <input type="text" class="form-control" name="microcontroler_type"   id="MicrocontrollerType" placeholder="Enter MicrocontrollerType">
                    </div>

               



                    <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                  
                    </div>
                  </form>
            </div>
          </div>
      
      
      
    @endsection('content')


