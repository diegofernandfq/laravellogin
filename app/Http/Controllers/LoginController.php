<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth; // libreria de login

class LoginController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        } // validar si hay una sesion
        return view('auth.login');
    }
    public function login(LoginRequest $request){
        $credentials= $request->getCredentials();
        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('El usuario o contraseña es incorrecto');
        }
        $user= Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        return $this->authennticated($request, $user);
    }
    public function authennticated(Request $request,$user){
        return redirect('/home');
    }
}
