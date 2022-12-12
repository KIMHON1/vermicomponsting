
@extends('Normal.navbar')


@section('content')

 
    <div class="card" style="background-color:#8793AA">
         <div class="card-header">
             <h1>create Bin</h1>
         </div>
       {{-- @if(!Auth::guest())
         @if(Auth::user()->id == $bin->user_id) --}}
             <form action="create_bi" method="POST" >
                 @csrf 
                 <div class="form-group">
                   <input type="number" class="form-control" name="number" id="BinNumber" aria-describedby="BinNumberHelp" placeholder="Enter BinNumber">
              
                 </div>
                 <div class="form-group">
                   <input type="text" class="form-control" name="location"   id="BinLocation" placeholder="Enter BinLocation">
                 </div>

                    {{-- <div class="form-group">
                     <label for="UserId">UserId</label>
                     <input type="number" class="form-control" name="user_id"   id="UserId" placeholder="Enter UserId">
                   </div>  --}}
                
                   <div class="form-group">
                     <input  class="form-control"  value ="{{auth()->user()->id}}" name="user_id"   id="UserId" style="display: none">
                   </div>  


                 <div class="form-group">
                   <input type="text" class="form-control" name="microcontroller_type"   id="MicrocontrollerType" placeholder="Enter MicrocontrollerType">
                 </div>

            



                 
                   <button type="submit" class="btn " style="background: yellow;margin-left:500px">Submit</button>
               
               
               </form>
             {{-- @endif
             @endif --}}
         </div>
       </div>
   
   
   
 @endsection('content')