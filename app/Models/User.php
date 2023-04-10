<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     public $guard_name = 'web';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


     public function bin(){

        return $this->hasMany(Bin::class, 'Bin_id');
 }


 /**
  * Get the profile associated with the User
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasOne
  */
 public function profile()
 {
     return $this->hasOne(Profile::class, 'user_id');
 }


 public function location()
 {
     return $this->hasOne(Location::class, 'user_id');
 }

 public function cooperatives()
 {

        return $this->belongsToMany(Cooperative::class);

 }
}
