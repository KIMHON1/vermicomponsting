
   @extends('Dashboard/DashBoard')


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
           
            <th scope="col">Username</th>
            <th scope="col">UserEmail</th>
            <th scope="col">Action</th>
           
          </tr>
        </thead>
        <tbody>
          
          {{-- @if(!Auth::guest())  
          @if(Auth::user()->id==$bin->user_id) --}}
        @foreach ($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
          
            <td>

              {{-- {{"/singleBin/".$bin->id}} --}}

             <a href=""> <button class="btn btn-primary">view</button>
              {{-- {{"/updatebin/".$bin->id}} --}}
             
              <a href="#"> <button class="btn btn-primary">update</button></a>
              {{-- {{"/delete/".$bin->id}} --}}
              <a href="{{"/delete_vermuser/".$user->id}} "><button class="btn btn-danger">delete</button></a>


            </td>

          </tr>
        @endforeach
         
       
        </tbody>
      </table>
      
  
     
      </table>
    {{-- @endif
    @endif   --}}
    @endsection('content')


