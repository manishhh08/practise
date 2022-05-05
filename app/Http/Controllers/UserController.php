<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;//similar to include



class UserController extends Controller
{
    public function namesurname (Request $request){
        print_r($request -> route('id'));
        exit;
    }
    public function addUser(Request $request){
        $request->input ('name');
    }
    public function deleteUser(){

    }
}
