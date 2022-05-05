<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;//similar to include



class UserController extends Controller
{
    public function index (Request $request){
        print_r($request -> route('id'));
        exit;
        return view('welcome');
    }
    public function addUser(Request $request){
        
    }
    public function deleteUser(){

    }
}
