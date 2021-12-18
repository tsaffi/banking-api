<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function accounts(){
    	return $this->hasMany('App\Models\Account');
    }
}