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
        "bin_id"
    ];

    public function harvestingBin (){
        return $this->belongsTo(Bin::class, 'bin_id');
    }

}
