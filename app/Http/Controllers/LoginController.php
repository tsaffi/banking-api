<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Http\Controllers\ResponseController; 
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\AuthenticatesUsers; 
use Carbon\Carbon;
use App\Models\User;
use Validator;

class LoginController extends ResponseController
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  // use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = '/home';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  /* Handles user authentications */
  public function login(Request $request)
  {
    // validate the data
    $validator = Validator::make($request->all(),[
        'email' => 'nullable|email',
        'password' => 'required|string',
        'remember_me' => 'boolean'
    ]);

    if ($validator->fails()){
      return $this->formatJson($validator->errors()->first(), "Bad Request", 400);
    }

    // check if user exists
    $user = User::where('email', $request->email)->first();
    if (empty($user)) {
      return $this->formatJson("The user does not exist", "FAILURE", 404);
    }
    $credentials = request(['email', 'password']);

    if (!Auth::attempt($credentials)) {
      return $this->formatJson("Incorrect username or password combination", "FAILURE", 406);
    }

    $user = $request->user();
    // $user = Auth::user();
    $tokenResult = $user->createToken('Personal Access Token');
    $token = $tokenResult->token;
    if ($request->remember_me)
      $token->expires_at = Carbon::now()->addWeeks(1);
    $token->save();

    $response['user'] = Auth::user();
    $response['apikey'] = Auth::user()->access_key;
    $response['access_token'] = $tokenResult->accessToken;
    $response['token_type'] = 'Bearer';
    $response['expires_at'] = Carbon::parse($tokenResult->token->expires_at)->toDateTimeString();
    return $this->formatJson("Successful authentication", "SUCCESS", 200, $response);
  }

  // disconnect(logout) the user
  public function logout() {
    if (Auth::check()) {
      $token = Auth::user()->token();
      $token->revoke();
    }
    return $this->formatJson("Successful deconnexion", "SUCCESS", 200);
  }
}