@extends('Dashboard.master')

@section('content')


<div class="content-body">
    <div class="container-fluid">
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Enter Harvested Compost Data</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="/harvesting/{{$bin->id}}/store" method="POST">

                    @csrf

                    <div class="form-row">
                        <div class="col-sm-12">
                            <input type="text" name="wormQuantity" class="form-control" placeholder="wormQuantity(kg) after Harvesting">
                        </div>

                        <div class="col-sm-12">
                            <input type="text" name="harvestCompostQuantity" class="form-control" placeholder="HarvestedCompostQuantity(kg)">
                        </div>

                    </div>
                    <button type="submit" class="btn mr-6 btn-primary">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection
