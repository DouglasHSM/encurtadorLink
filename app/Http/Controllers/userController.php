<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function register(){
        return view('register');
    }

    public function recover(){
        return view('recover');
    }

    public function login(){
        return view('login');
    }
}
