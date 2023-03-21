<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harvesting extends Model
{
    use HasFactory;

    public function harvestbin(){
        return $this->belongsTo(Harvesting::class, 'bin_id');
    }
}
