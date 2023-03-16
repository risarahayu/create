<?php

namespace App;
use App\gender;

use Illuminate\Database\Eloquent\Model;

class StrayDog extends Model
{
    protected $table = 'straydogs';
    protected $guarded = ['id'];

    public function gender()
    {

        return $this->belongsto(gender::class);
    }
}
