<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrayDog extends Model
{
    protected $table = 'straydogs';
    protected $guarded = ['id'];
}
