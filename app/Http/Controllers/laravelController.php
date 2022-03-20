<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravelController extends Controller
{
    //
    public function Login (){

        $username = "Nollan";
        $password = "nollan123";

        $context = ["Nollan", $username];
    
        return view('Login', $context);
    
    }

    public function signup (){

    }


}
