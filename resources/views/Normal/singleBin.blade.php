@extends('Normal.navbar')
@section('content')



   @csrf
   @foreach ($bin as $bin)
   <div class="list-group" style="color:#ffffff">
   <h3><a href="#" class="list-group-item" style="background-color:#8793AA;color:#ffffff">Dedtails For BinNumber: {{$bin->number}}</a></h3>

    <a href="#" class="list-group-item list-group-item-action" style="background-color:#8793AA;color:#ffffff">binNumber: {{$bin->number}}</a>
    <a href="#" class="list-group-item list-group-item-action" style="background-color:#8793AA;color:#ffffff">microcontroller_type: {{$bin->microcontroller_type}}</a>
    <a href="#" class="list-group-item list-group-item-action disabled" style="background-color:#8793AA;color:#ffffff">location: {{$bin->location}}</a>
  
   
    <a href="#" class="list-group-item list-group-item-action disabled" style="background-color:#8793AA;color:#ffffff">Bin_owner:{{auth()->user()->name}}</a>
    <a href="#" class="list-group-item list-group-item-action" style="background-color:#8793AA;color:#ffffff">Bin_created_at: {{$bin->created_at}}</a>
    <a href="#" class="list-group-item list-group-item-action disabled" style="background-color:#8793AA;color:#ffffff">Bin_updated_at: {{$bin->updated_at}}</a>

      
   
  </div>

  @endforeach
@endsection
