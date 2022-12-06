
   @extends('Normal.navbar')


   @section('content')
   {{auth()->user()->username}}
        {{-- <table>
            <tr>
                <td>number</td>
                <td>location</td>
            </tr>
            @foreach ($bin as $bin)
            <tr>
                <td>{{$bin->number}}</td>
                <td>{{$bin->location}}</td>
            
            </tr>
        @endforeach
    </table> --}}


    <table class="table">
        <thead class="thead-dark">
          <tr>
           
            <th scope="col">Bin_number</th>
            <th scope="col">Bin_location</th>
            <th scope="col">microcontroller_type</th>
          
            <th scope="col">action</th>
           
          </tr>
        </thead>
        <tbody>
          
          {{-- @if(!Auth::guest())  
          @if(Auth::user()->id==$bin->user_id) --}}
        @foreach ($bins as $bin)
          <tr>
            <td>{{$bin->number}}</td>
            <td>{{$bin->location}}</td>
            <td>{{$bin->microcontroller_type}}</td>
          
            <td>
             <a href={{"/bin/".$bin->id}}> <button class="btn btn-primary">view</button>
              
             
              <a href={{"/updatebin/".$bin->id}}> <button class="btn btn-primary">update</button></a>

              <a href="{{"/delete/".$bin->id}}"><button class="btn btn-danger">delete</button></a>


            </td>

          </tr>
        @endforeach
         
       
        </tbody>
      </table>
      
  
     
      </table>
    {{-- @endif
    @endif   --}}
    @endsection('content')


