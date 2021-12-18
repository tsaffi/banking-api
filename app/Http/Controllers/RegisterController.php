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
      // $user->username = $request->username;
      $user->email = $request->email;
      // $user->role_id = Role::where('slug', $request->user_type)->first()->id;
      $user->password = \Hash::make($request->password);
      // $user->auth_key = $request->password;

      if ($user->save()) {

      /*===================================================
        BEGIN USER AUTHENTICATION | CHECK LOGIN CONTROLLER
      ====================================================*/

        if (Auth::attempt(['email'=>$user->email, 'password'=>$request->password])){
          $user = Auth::user();
          // $user = $request->user();
          // $user = Auth::user();
          $tokenResult = $user->createToken('Personal Access Token');
          $token = $tokenResult->token;
          // if ($request->remember_me)
            // $token->expires_at = Carbon::now()->addWeeks(1);
          $token->save();

          $response['user'] = Auth::user();
          // $response['userType'] =  $user->role->name;
          // $response['userType'] =  count($user->role) ? $user->role[0]->name : null;
          $response['access_token'] = $tokenResult->accessToken;
          $response['token_type'] = 'Bearer';
          $response['expires_at'] = Carbon::parse($tokenResult->token->expires_at)->toDateTimeString();
          return $this->formatJson("Successful registration", "SUCCESS", 201);
        } else {
          return $this->formatJson("An error occured. Please try to authenticate and contact the support if you face some difficulties.", "FAILURE", 401);
        }

      /*=========================
        END USER AUTHENTICATION
      ==========================*/

      } else {
        $response['hasErrors'] = $user->hasErrors();
        $response['errors'] = $user->getErrors();
        return $this->formatJson("An error occured and your account was not created. Please try again", "FAILURE", 406, $response);
      }
    }
  }

}