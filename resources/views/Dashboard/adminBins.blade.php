
   @extends('Dashboard/DashBoard')


   @section('content')
   <div ></div>
   <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" >
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar" class="align-text-bottom"></span>
          This week
        </button>
      </div>
    </div>



    <h2>bins</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm" >
        <thead>
          <tr>
            <th scope="col">Bin_number</th>
            <th scope="col">Bin_location</th>
            <th scope="col">microcontroller_type</th>
          
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bins as $bin)
      <tr style="background: #8793AA">
        <td>{{$bin->number}}</td>
        <td>{{$bin->location}}</td>
        <td>{{$bin->microcontroller_type}}</td>
      
        <td>
         <a href={{"/admsinglebin/".$bin->id}}> <button class="btn btn-primary">view</button>
          
         
          <a href={{"/updatebin/".$bin->id}}> <button class="btn btn-primary">update</button></a>

          <a href="{{"/delete/".$bin->id}}"><button class="btn btn-danger">delete</button></a>


        </td>

      </tr>
    @endforeach


        



   
        </tbody>
      </table>
    </div>


       
      
       
    
  



</div>
    @endsection('content')