<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;//similar to include



class UserController extends Controller
{
    public function namesurname (Request $request){
        echo('its me again');
    }

    public function register(Request $request){
        
        return view('register');

    }
}
