<div>
    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="status">Select Province</label>
                    <select class="form-control" wire:model="selectedProvince">
                        <option value="">Select a Province</option>
                        @foreach ($provinces as $item)
                        <option value="{{ $item->provincecode }}">{{ $item->provincename }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{$selectedProvince}}

            @if (!is_null($districts))
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="status">Select a District</label>
                    <select class="form-control" wire:model="selectedDistrict">
                        <option value="">Select a District</option>
                        @foreach ($districts as $item)
                        <option value="{{ $item->districtcode }}">{{ $item->namedistrict}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif
            {{$selectedDistrict}}




        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Add Assignment</button>
            <div wire:loading>
                Hold On...
            </div>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
