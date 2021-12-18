<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Account extends Model
{

    public function transactions(){
        return $this->hasMany('App\Models\Transaction');
    }

    public function customer(){
    	return $this->belongsTo('App\Models\Customer');
    }
}