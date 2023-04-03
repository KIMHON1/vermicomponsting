<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Province;
use App\Models\District;
use App\Models\Sector;
class LocationDropdown extends Component
{


    public $selectedProvince = null;
    public $selectedDistrict = null;
    public $selectedSector = null;
    public $selectedCell = null;
    public $selectedVillage = null;
    public $districts = null;
    public $sectors = null;
    public $cells = null;
    public $villages = null;

    public function render()
    {



        return view('livewire.location-dropdown', [
            'provinces' => Province::all(),
        ]);
    }

    public function updatedSelectedProvince($provincecode)
    {
        $this->districts = District::where('provincecode', $provincecode)->get();
    }


    public function updatedSelectedDistrict($districtcode)
    {
        $this->sectors = Sector::where('districtcode', $districtcode)->get();
        // $this->reset(['selectedSector', 'selectedCell', 'selectedVillage']);
    }



}
