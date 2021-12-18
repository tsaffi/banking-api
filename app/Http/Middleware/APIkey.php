<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class APIkey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('apikey') == '') {
        // if ($request->apikey == '') {
            return redirect('/');
        } else { 
            $users = User::where('access_key', $request->header('apikey'))->count();
            if ($users != 1) {
                // send a structured response
                $response = [
                    'status' => "UNAUTHORIZED",
                    'statusCode' => 403,
                    'message' => "Invalid API KEY",
                  ];
                return response()->json($response, 403);
            } else { 
              return $next($request);
            }
        }
    }
}
