<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linkController extends Controller
{
    public function generate(){
        return view('generate');
    }

    public function remove(){
        return view('remove');
    }
}
