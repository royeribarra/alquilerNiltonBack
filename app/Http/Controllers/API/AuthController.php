<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(!auth()->attempt($loginData)){
            return response([
                'status' => false,
                'message' => 'Los datos ingresados son incorrectos.'
            ]);
        }
        // if(auth()->user()->rol_id !== 1){
        //     return response([
        //         'status' => false,
        //         'message' => 'Usted no es usuario Repo.'
        //     ]);
        // }
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return response([
            'status' => true,
            'user' => auth()->user(), 
            'access_token' => $accessToken,
            'message' => 'Bienvenido'
        ]);
    }

    public function username()
    {
        return 'email'; 
    }
}