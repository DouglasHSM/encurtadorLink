<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return"Olá meu nobre";
    }

    public function redirect(){
        return"Olá ";
    }
}
