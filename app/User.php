<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\StrayDog;
use App\Contact_dog;
use App\Add_contact;
use App\Role;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function StrayDog()
    {

        return $this->hasMany(StrayDog::class);
    }

    public function Add_contact()
    {

        return $this->hasOne(Add_contact::class);
    }
    public function Contact_dog()
    {
        return $this->hasMany(Contact_dog::class);
    }
    public function Role()
    {
        return $this->belongsto(Role::class);
    }
}
