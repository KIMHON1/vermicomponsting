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

            {{-- @if (!is_null($sectors)) --}}
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="status">Select a Sector</label>
                    <select class="form-control" wire:model="selectedSector">
                        <option value="">Select a District</option>
                        @if(!empty($sectors))
                        @foreach ($sectors as $item)
                        <option value="{{ $item->sectorcode }}">{{ $item->namesector}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            {{-- @endif --}}
            {{$selectedSector}}


            {{-- @if (!is_null($sectors)) --}}
            <div class="form-group">
                <div class="col-sm-10">
                    <label for="status">Select a Cell</label>
                    <select class="form-control" wire:model="selectedCell">
                        <option value="">Select a Cell</option>
                        @if(!empty($cells))
                        @foreach ($cells as $item)
                        <option value="{{ $item->codecell }}">{{ $item->nameCell}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            {{-- @endif --}}
            {{$selectedCell}}

              {{-- @if (!is_null($sectors)) --}}
              <div class="form-group">
                <div class="col-sm-10">
                    <label for="status">Select a Village</label>
                    <select class="form-control" wire:model="selectedVillage">
                        <option value="">Select a Village</option>
                        @if(!empty($villages))
                        @foreach ($villages as $item)
                        <option value="{{ $item->CodeVillage }}">{{ $item->VillageName}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            {{-- @endif --}}
            {{$selectedVillage}}





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
