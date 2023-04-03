@extends('Dashboard.master')
@section('content')


<div class="content-body">
    <div class="container-fluid">
<div class="row">
<div class="col-xl-12 col-xxl-6 col-lg-6">
    <div class="card">
        <div class="card-header  border-0 pb-0">
            <h4 class="card-title">binNotification</h4>
        </div>
        <div class="card-body">
            <div id="DZ_W_Todo1" class="widget-media dz-scroll height370">
                <ul class="timeline">






                            @foreach($notifications as $notification)
                            <div class="media-body alert alert-light">
                                <h4 class="mb-1 alert alert-primary">BinNumber {{$notification->data['bin_number']}}</h4>
                                <h5 class="mb-1">

                                    temperature changed form {{$notification->data['pre_temperature']}}  &#176;C to {{$notification->data['temperature']}} &#176;C

                                    acitidy changed form 	 {{$notification->data['pre_acidity']}} pH to {{$notification->data['acidity']}} pH

                                    Humidity changed form 	 {{$notification->data['pre_humidity']}} mm to {{$notification->data['humidity']}} mm








                                </h5>
                                <small class="d-block">{{ $notification->created_at }}</small>
                            </div>
                            @endforeach





                </ul>
            </div>
        </div>
    </div>
</div>







@endsection

