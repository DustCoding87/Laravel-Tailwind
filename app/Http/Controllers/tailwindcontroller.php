<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tailwindcontroller extends Controller
{
    public function registerview(){

        return view('register');
    }

    public function loginview(){
        return view('login');
    }
}
