<?php

use App\Models\Account;
use Illuminate\Http\Request;

// generate account uuid
if (!function_exists('generateAID')) {
    /**
     * @return string
     */
    function generateAID()
    {
        $chars = '0123456789';
        $uuid = substr(str_shuffle($chars), 0, 8);
        if (Account::where('uuid', 'ACC'.$uuid)->first()) {
            return generateAID();
        }
        return 'ACC'.$uuid;
    }
}