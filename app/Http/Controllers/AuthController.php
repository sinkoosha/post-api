<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthReqest;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(AuthReqest  $request){




     $user =   Auth()->attempt([
         'email' => $request->username,
         'password' => $request->password

     ]);

if(Auth::check()){

    return Auth::user()->generateToken();
}

return Response(['error' => 'User not found' , 401]);


    }
}
