
   @extends('Normal.navbar')


   @section('content')

   
   {{auth()->user()->username}}

  
     
          

    <table class="table" style="color:#ffffff">
        <thead class="thead-dark">
          <tr>
           
            <th scope="col">Bin_number</th>
            <th scope="col">Bin_location</th>
            <th scope="col">microcontroller_type</th>
          
            <th scope="col">action</th>
           
          </tr>
        </thead>
        <tbody>
          
        @foreach ($bins as $bin)
        @if(auth()->user()->id == $bin->user_id)
          <tr>
            <td>{{$bin->number}}</td>
            <td>{{$bin->location}}</td>
            <td>{{$bin->microcontroller_type}}</td>
          
            <td>
             <a href={{"/bin/".$bin->id}}> <button class="btn btn-primary" >view</button>
              
             
              <a href={{"/update_bin/".$bin->id}}> <button class="btn btn-success">update</button></a>

              <a href={{"/delete/".$bin->id}}><button class="btn btn-danger">delete</button></a>
              <a href={{"/create_condition"}}><button class="btn" style="background: yellow; color:#fff">Add conditions</button></a>

            </td>

          </tr>
          @endif
        @endforeach
         
       
        </tbody>
      </table>
      
     
     
      </table>
    {{-- @endif
    @endif   --}}
    @endsection('content')


