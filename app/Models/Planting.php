<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planting extends Model
{
    use HasFactory;


    public function plantingbin(){
        return $this->belongsTo(Planting::class, 'bin_id');
    }
}
