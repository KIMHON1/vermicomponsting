<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    use HasFactory;
    protected $fillable=[
        "number",
        "microcontroller_type",
        "location",
        "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function binconditions(){
        
        return $this->hasMany(Bincondition::class, 'binconditions_id');
    }
}
