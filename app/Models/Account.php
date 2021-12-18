<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

Class Account extends Model
{
    use HasFactory;

    public function transactions(){
        return $this->hasMany('App\Models\Transaction');
    }

    public function customer(){
    	return $this->belongsTo('App\Models\Customer');
    }
}