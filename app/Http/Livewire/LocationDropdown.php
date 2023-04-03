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


        // $sectors = Sector::all();

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
       $sectors = $this->sectors = Sector::where('districtcode', $districtcode)->get();
        // dd($sectors);
        // $this->reset(['selectedSector', 'selectedCell', 'selectedVillage']);
    }



}
