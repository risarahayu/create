<?php

namespace App;
use App\gender;
use App\User;
use App\Contact_dog;
use Illuminate\Database\Eloquent\Model;

class StrayDog extends Model
{
    protected $table = 'straydogs';
    protected $guarded = ['id'];

    public function gender()
    {

        return $this->belongsto(gender::class);
    }
    public function User()
    {

        return $this->belongsto(User::class);
    }
    public function Contact_dog()
    {

        return $this->hasMany(Contact_dog::class, 'straydog_id');
    }
    public function StrayDog_User()
    {
        return $this->belongstoMany(User::class);
    }
}
