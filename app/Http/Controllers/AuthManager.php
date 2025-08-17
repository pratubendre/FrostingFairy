<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    //
    function register(Request $request)
    {
        $validate = Validator:: make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password'=> 'required'

        ]);

        
    }
}

https://www.youtube.com/watch?v=mQltPFDJaEg&t=122s
