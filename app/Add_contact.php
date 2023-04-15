<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Add_contact extends Model
{
    protected $table = 'contacts';
    protected $guarded = ['id'];
    
    public function User()
    {

        return $this->belongsto(User::class);
    }
}
