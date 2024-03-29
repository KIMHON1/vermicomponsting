<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


protected $fillable = [
    'firstName','secondName', 'profilePic','phoneNumber','gender', 'Description','user_id'
];

/**
 * Get the user that owns the Profile
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function user(): BelongsTo
{
    return $this->belongsTo(User::class, 'user_id');
}
}
