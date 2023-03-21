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



<div class="col-xl-12 col-xxl-6 col-lg-6">
    <div class="card">
        <div class="card-header  border-0 pb-0">
            <h4 class="card-title">users movement</h4>
        </div>
        <div class="card-body">
            <div id="DZ_W_Todo1" class="widget-media dz-scroll height370">
                <ul class="timeline">
                    <li>
                        <div class="timeline-panel">
                            <div class="media mr-2">
                                <img alt="image" width="50" src="images/avatar/1.jpg">
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1">Dr sultads Send you Photo</h5>
                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </li>





                </ul>
            </div>
        </div>
    </div>
</div>



<div class="col-xl-12 col-xxl-6 col-lg-6">
    <div class="card">
        <div class="card-header  border-0 pb-0">
            <h4 class="card-title">UserActivities</h4>
        </div>
        <div class="card-body">
            <div id="DZ_W_Todo1" class="widget-media dz-scroll height370">
                <ul class="timeline">


                    <li>
                        <div class="timeline-panel">
                            <div class="media mr-2 media-primary">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1">Reminder : Treatment Time!</h5>
                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




@endsection

