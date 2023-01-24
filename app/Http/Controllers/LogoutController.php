<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Session;
use Illuminate\Support\facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->to('/login');
    }
}
