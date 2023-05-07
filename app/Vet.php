<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
    protected $table = 'vets';
    protected $guarded = ['id'];
}
