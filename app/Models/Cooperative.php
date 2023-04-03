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
                'co_operativedescription',
                'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
