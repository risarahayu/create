<?php

namespace App;
use App\StrayDog;

use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    protected $table = 'gender';
    public function StrayDog()
    {

        return $this->hasMany(StrayDog::class);
    }
}
