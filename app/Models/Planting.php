<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planting extends Model
{
    use HasFactory;

    protected $fillable=[
        "wormQuantity",
        "WasteQuantity",
        "ExpectedCompostQuantity",
        "bin_id"
    ];
    public function plantingBin (){
        return $this->belongsTo(Bin::class, 'bin_id');
    }

}