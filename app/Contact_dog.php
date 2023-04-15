<?php

namespace App;
use App\User;
use App\StrayDog;


use Illuminate\Database\Eloquent\Model;

class Contact_dog extends Model
{
    protected $table = 'contact_dog';
    protected $guarded = ['id'];
    
    public function User()
    {
        return $this->belongstoMany(User::class,'contact_dog','user_id', 'straydog_id');
    }
    public function StrayDog()
    {
        return $this->belongsto(StrayDog::class,'straydog_id', 'id');
    }
}
