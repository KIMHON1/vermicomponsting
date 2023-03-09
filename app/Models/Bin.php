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
        "worm_type",
        "country",
        "province",
        "district",
        "sector",
        "cell",
        "village",
        "road",
        "description",
        "user_id"
    ];

    // public function user(){
    //     return $this->belongsTo(User::class, 'user_id');
    // }
    public function binconditions(){

        return $this->hasOne(Bincondition::class,'bin_id','id');
    }
}
