<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
// use App\Models\Role;

class RegisterController extends ResponseController
{
  /**
   * Create user account.
   * Authenticate user
   * @return \Illuminate\Http\Response
   */
  public function register(Request $request) 
  {
    $user = new User;
    // validate the data
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      // 'username' => 'required|unique:users',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6',
    ]);

    if ($validator->fails()){
        return $this->formatJson($validator->errors()->first(), "Bad Request", 400);
    }

    if ($request){
      // check if email exist
      if (User::where('email', $request->email)->exists()){
        return $this->formatJson("This email address exist. Instead, login or reset your password", "FAILURE", 409);
      }

      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = \Hash::make($request->password);

      if (isset($request->phone) && !empty($request->phone)) {
        $user->phone = $request->phone;
      }

      // generate a unique access key
      $user->access_key = Str::random(32);

      if ($user->save()) {
        $response['apikey'] = $user->access_key;

        return $this->formatJson("Successful registration", "SUCCESS", 201, $response);
      } else {
        $response['hasErrors'] = $user->hasErrors();
        $response['errors'] = $user->getErrors();
        return $this->formatJson("An error occured and your account was not created. Please try again", "FAILURE", 406, $response);
      }
    }
  }

}