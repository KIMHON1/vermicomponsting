
   @extends('Dashboard')


   @section('content')
   
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
           
            <th scope="col">UserNumber</th>
            <th scope="col">UserEmail</th>
            <th scope="col">BIn</th>
            <th scope="col">Created_at</th>
            <th scope="col">update_at</th>
            <th scope="col">Action</th>
           
          </tr>
        </thead>
        <tbody>
          
          {{-- @if(!Auth::guest())  
          @if(Auth::user()->id==$bin->user_id) --}}
        @foreach ($bin as $bin)
          <tr>
            <td>{{$bin->number}}</td>
            <td>{{$bin->location}}</td>
            <td>{{$bin->created_at}}</td>
            <td>{{$bin->updated_at}}</td>
            <td>
             <a href={{"/singleBin/".$bin->id}}> <button class="btn btn-primary">view</button>
              
             
              <a href={{"/updatebin/".$bin->id}}> <button class="btn btn-primary">update</button></a>

              <a href={{"/delete/".$bin->id}}><button class="btn btn-danger">delete</button></a>


            </td>

          </tr>
        @endforeach
         
       
        </tbody>
      </table>
      
  
     
      </table>
    {{-- @endif
    @endif   --}}
    @endsection('content')


