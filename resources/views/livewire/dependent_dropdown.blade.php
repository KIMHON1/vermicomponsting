@extends('Dashboard.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DropDownTest</h3>
                </div>
            </div>

             <livewire:location-dropdown/>


        </div>
        <!-- /.card -->
    </div>
</div>
</div>
</div>


@endsection
