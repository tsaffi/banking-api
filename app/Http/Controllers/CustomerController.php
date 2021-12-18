<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Validator;
use Illuminate\Validation\Rule;
use App\Models\Customer;
use DB;

class CustomerController extends ResponseController
{
  /**
   * Register a customer.
   * @return \Illuminate\Http\Response
   */
  public function register(Request $request) 
  {
    // validate the data
    $validator = Validator::make($request->all(), [
      'email' => 'required|email|unique:customers',
      'name' => 'required'
    ]);
  
    if ($validator->fails()) {
      return $this->formatJson($validator->errors()->first(), "Bad Request", 400);
    }
  
    $customer = new Customer();
    $customer->name = $request->name;
    $customer->email = $request->email;

    if (isset($request->phone) && !empty($request->phone)) {
        $customer->phone = $request->phone;
    }

    if (isset($request->address) && !empty($request->address)) {
        $customer->address = $request->address;
    }

    if (!$customer->save())
      return $this->formatJson("The customer could not be registered. Please try again", "FAILURE", 406);

    return $this->formatJson("The customer was successfully registered", "SUCCESS", 201);
  }


}