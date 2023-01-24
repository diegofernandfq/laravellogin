<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function show(){
        if(Auth::check())
        {
            return redirect('/home');
        }
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
        $user= User::create($request->validated()); // usar tambien la creacion de user y guardar campo a campo de request y luego user->save()
        return redirect('/login')->with('success','Cuenta creada xon éxito');
    }
}
