<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harvesting extends Model
{
    use HasFactory;


    protected $fillable=[
        "wormQuantity",
        "harvestCompostQuantity",
        "bin_id",
        "planting_id"
    ];

    public function harvestingBin (){
        return $this->belongsTo(Bin::class, 'bin_id');
    }


    public function planting()
    {
        return $this->belongsTo(Planting::class);
    }

}
