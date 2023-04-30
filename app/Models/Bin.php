<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    use HasFactory;
    protected $fillable=[
        "code",
        "microcontroller_type",
        'status',
        "worm_type",
        'province',
        'district',
        'sector',
        'cell',
        "member_id",
        "cooperative_id"
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function binconditions(){

        return $this->hasOne(Bincondition::class,'bin_id','id');
    }


    public function harvesting(){

        return $this->hasOne(Harvesting::class,'bin_id','id');
    }



    public function planting(){

        return $this->hasOne(Planting::class,'bin_id','id');
    }


    public function member(){
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }



}
