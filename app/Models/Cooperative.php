<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperative extends Model
{
    use HasFactory;

    protected $fillable=[
                'co_operativename',
                'co_operativemanager',
                'co_operative_email',
                'co_operative_telephone',
                // 'status'=>'required',
                'starting_date',
                'province',
                'district',
                'sector',
                'cell',

    ];

    // public function user(){
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function members()
    {

           return $this->hasMany(Member::class, 'cooperative_id');

    }


}
